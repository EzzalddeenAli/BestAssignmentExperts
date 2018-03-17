@include('layout.header')
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"/>
   <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <style type="text/css">
       #ui-datepicker-div {
    
    top: 130px !important;
    
}
    </style>
<main ng-app="myApp" ng-controller="myCtrl">
    <section class="fullwidth-background bg-2">
        <div class="grid-row">
            <div class="login-block" >
                <div class="logo">
                   <!--  <img src="../theme/img/images/logo.jpg" data-at2x='../theme/img/images/logo.jpg' alt style="width: 250px;"> -->
                    <h2>PLACE NEW ORDER</h2>
                </div>

                <form class="login-form" ng-if="showPlaceOrderForm == 'true'">
                    <div class="form-group">
                        <input type="text" class="login-input" placeholder="Email" name="place_order_email" ng-model="place_order.email">
                        <span class="input-icon">
                             <i class="fa fa-envelope-o"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="login-input" placeholder="Subject" name="place_order_subject" ng-model="place_order.subject">
                        <span class="input-icon">
                            <i class="fa fa-book"></i>
                        </span>

                    </div>
                    <div class="form-group">
                        <input type="text" id="datepicker" class="login-input" placeholder="Due date" name="place_order_duedate" ng-model="place_order.duedate" datepicker>
                        <span class="input-icon">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>
                    <div class="form-group ">

                        <div class="grid-buttons ">
                        <div class="row" style="display: inline-flex;/*! width: -27%; */">
                            <button ng-click="count = count - 1" ng-disabled="count < 1" class="cws-button border-radius icon-left col-sm-1" style="min-width: 2px;"><i class="fa fa-minus"></i></button>
                            
                            <input class="login-input col-sm-10 ng-pristine ng-valid" placeholder="Pages" name="count" ng-model="count" type="text" numbers-only>

                            <button ng-click="count = count + 1" class="cws-button border-radius icon-right col-sm-1" style="min-width: 10px;margin: auto;"><i class="fa fa-plus"></i></button>

                            </div>
                           @{{count * 250}}  Words

                        </div>
                        

                    </div>
                    <button ng-click="placeOrderDetails(place_order, count)" class="button-fullwidth cws-button bt-color-3 border-radius">Submit</button>
                </form>
                <form class="login-form" name="place-order-signup" ng-if="showPlaceOrderForm != 'true'" action="/create-user-from-place-order-page" method="POST" enctype="multipart/form-data" novalidate="">
                    <div class="form-group">
                        <input type="file" class="login-input" placeholder="Choose a File" name="uploaded_file1" required="">
                        
                    </div>
                    <div class="form-group">
                        <label>Select Reference</label>
                        <select type="text" class="login-input" placeholder="Reference" name="place_order_reference" ng-model="order.reference" >
                        <span class="input-icon">
                            <i class="fa fa-user"></i>
                        </span>

                                        <option value="AGLC">AGLC</option>

                                        <option value="APA">APA</option>

                                        <option value="BMJ">BMJ</option>

                                        <option value="Chicago">Chicago</option>

                                        <option value="Footnotes">Footnotes</option>

                                        <option value="Footnotes and bibliography">Footnotes and bibliography</option>

                                        <option value="Harvard">Harvard</option>

                                        <option value="MHRA">MHRA</option>

                                        <option value="MLA">MLA</option>

                                        <option value="Open">Open</option>

                                        <option value="OSCOLA">OSCOLA</option>

                                        <option value="Turabian">Turabian</option>

                                        <option value="Vancouver">Vancouver</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text"  class="login-input" placeholder="Phone" name="phone" ng-model="order.phone" required="">
                        <span class="input-icon">
                            <i class="fa fa-mobile-phone"></i>
                        </span>
                    </div>
                    <div class="form-group">               
                        <textarea type="text" class="login-input" placeholder="Description" name="description" ng-model="order.description" required="" style="height: 80px;"> </textarea>                      
                                 <span class="input-icon">
                                    <i class="fa fa-comments"></i>
                                </span>
                    </div>
                            <button type="submit" class="button-fullwidth cws-button bt-color-3 border-radius">Sign Up</button>
                            <button ng-click="back()" class="button-fullwidth cws-button bt-color-3 border-radius">Back</button>
                        
                </form>
                        
                    </div>
                </div>
            </section>
        </main>
       
        @include('layout.footer')
        <script>
            var app = angular.module('myApp', []);
            app.controller('myCtrl', function ($scope, $http) {

                $(".msg").remove();
                $scope.place_order = {};
                //$scope.place_order= {"duedate": new Date(),"email":"", "subject":""};
                $scope.count = 1;
                $scope.showPlaceOrderForm = 'true';
                $scope.placeOrderDetails = function (place_order, count) {
                    console.log(JSON.stringify(place_order));
                    console.log(count);
                    
                    var place_data = {"page_no": count, "order_details": place_order};
                    console.log(JSON.stringify(place_data));
                    $http({
                        method: 'POST',
                        url: '/place-order/check/user',
                        data: JSON.stringify(place_data),
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(function successCallback(response) {
                        console.log(response);
                        if (response.data.success == 'true') {
                             //$scope.showPlaceOrderForm=response.data.data.showPlaceOrderForm;
                            $scope.showPlaceOrderForm = 'false';
                        }
                        if (response.data.success == 'false') {
                            //$scope.showPlaceOrderForm=response.data.data.showPlaceOrderForm;
                            $scope.showPlaceOrderForm = 'true';
                            $scope.errorMessage=response.data.message;
                            console.log($scope.errorMessage);
                            $(".msg").remove();
                            $('form').before('<div class="alert alert-success msg info-boxes confirmation-message" style="background: #f27c66"></div>');
                            $(".msg").text($scope.errorMessage);
                            $(".msg").delay(10000).fadeOut("slow");
                        }
                    }, function errorCallback(response) {

                    });
                };
                $scope.back = function ()
                {
                    $scope.showPlaceOrderForm = 'true';

                }




                $scope.placeOrder = function (order, count, place_order) {
                    console.log(order);
                    console.log(place_order);
                    console.log(count);
                    var a={"order_details": place_order, "page_no": count, "order_info": order};
                    console.log(JSON.stringify(a));
                    $http({
                        method: 'POST',
                        url: '/create-user-from-place-order-page',
                        data: JSON.stringify(a),
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(function successCallback(response) {
                        console.log(response);
                        console.log(response);
                        if(response.data.success=='true'){
                            //window.location="{{URL::to('users/dashboard')}}";
                        }
                        else{
                           // window.location="{{URL::to('/')}}";
                        }
                        


                    }, function errorCallback(response) {
                     
                        console.log(response);
                    });
                };
            });
    

    app.directive('numbersOnly', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attr, ngModelCtrl) {
            function fromUser(text) {
                if (text) {
                    var transformedInput = text.replace(/[^0-9]/g, '');

                    if (transformedInput !== text) {
                        ngModelCtrl.$setViewValue(transformedInput);
                        ngModelCtrl.$render();
                    }
                    return transformedInput;
                }
                return undefined;
            }            
            ngModelCtrl.$parsers.push(fromUser);
        }
    };
});         
            
app.directive("datepicker", function () {
  return {
    restrict: "A",
    require: "ngModel",
    link: function (scope, elem, attrs, ngModelCtrl) {
      var updateModel = function (dateText) {
        scope.$apply(function () {
          ngModelCtrl.$setViewValue(dateText);
        });
      };
      var options = {
        dateFormat: "dd/mm/yy",
        minDate: '+0',
        //maxDate: '+2M',
        onSelect: function (dateText) {
          updateModel(dateText);
        }
      };
      //elem.datepicker(options);
      $(elem).datepicker(options);

    }
  }
});
</script>
