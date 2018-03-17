@include('dashboard-layout.dashboard-header')
@include('dashboard-layout.dashboard-left-sidebar')
{!! Html::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js') !!}
{!! Html::style('dashboard_theme/dist/css/custom.css') !!}



<div class="content-wrapper " ng-app="checkoutApp" ng-controller="checkoutCtrl" style="min-height: 100%;" >
    
   <section class="content" style="background: url(../dashboard_theme/dist/img/check-out-background.jpg)">

   

<ul class="timeline">
    <li>
        <div class="timeline-badge">
          <a><i class="fa fa-circle" id=""></i></a>
        </div>
        <div class="timeline-panel">
           
            <div class="timeline-body">
               <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../dashboard_theme/dist/img/check-out.png" alt="User profile picture">
              <h3 class="profile-username text-center checkout">Checkout</h3>
    
              <ul class="list-group list-group-unbordered">                
                <li class="list-group-item">
                  <b>Assignment Id</b> <a href="/assignment-details/{{$assignment_id}}" class="pull-right badge bg-aqua"><span style="padding: 10px;margin: auto;margin-top: -6px;">{{$show_assignment_id}}</span></a>
                </li>
               <!--  <li class="list-group-item">
                  <b>Total Amount</b> 
                  <a class="pull-right badge bg-blue">$ 12</a>
                </li> -->                
              </ul>              
            </div>
            </div>
           
        </div>
    </li>
    
    <li class="timeline-inverted">
        <div class="timeline-badge">
            <a><i class="fa fa-circle invert" id=""></i></a>
        </div>
        <div class="timeline-panel">
    
    
    
            <div class="timeline-heading">
        <div class="box1">
               <h4 class="box-title timelht">Select Your Payment Type </h4></div>
            </div>
            <div class="timeline-body">
               <div class="box-body">
           <div class="form-group">                 
                  <!-- ngIf: show_partial_or_full==1 --><div class="radio ng-scope" ng-click="selectPaymentType(full);" ng-if="show_partial_or_full==1">
                    <label>                    
                      <input type="radio" ng-model="full" name="optionsRadios" id="optionsRadios2" value="full" ng-checked="full=='full'" class="ng-pristine ng-untouched ng-valid ng-empty">
                      Full Payment
                    </label>
                  </div><!-- end ngIf: show_partial_or_full==1 -->
                <div class="radio" ng-click="selectPaymentType(partial);">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="partial" ng-checked="full=='partial'" ng-model="partial" class="ng-pristine ng-untouched ng-valid ng-empty">
                      Partial Payment
                    </label>
                  </div>
            </div>
    
    <div class="timeline-item" style="padding: 10px;">
                <h4 class="timeline-header ng-binding"><a href="#" style="color:green;">Total Order Amount :   </a> $@{{payment_details.subtotal}}</h4>
              </div>
            </div>
            </div>
           <div>
            <div class="box-header with-border" style="padding: 10px 20px;">
              <h3 class="box-title" style="color:#444;">Have a Coupon Code?</h3>
            </div>
            <div class="box-body">
              <div class="input-group margin">
                <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" placeholder="Enter Coupon Code" name="chechout_coupon" ng-model="coupon">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat" ng-click="applyCoupon(coupon);" ng-disabled="false">Apply</button>
                    </span>
              </div>
               <p style="padding:5px; font-weight: bold; color: Green;" ng-if="coupon_message.length>0">@{{coupon_message}}</p>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </li>
    
    
    <li class="timeline_mrgin">
        <div class="timeline-badge">
            <a><i class="fa fa-circle" id=""></i></a>
        </div>
        <div class="timeline-panel">
       
        <div class="timeline-heading">
      <div class="box1">
               <h4 class="box-title timelht">Payment Summary </h4></div>
        
            </div>
       
            <div class="timeline-body">
      
      
               <ul class="timeline1 timeline1_bordr">
            <!-- timeline time label -->
           
        
           
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-user bg-aqua"></i>

              <div class="timeline1-item">

                <h3 class="timeline1-header no-border"><a href="#">Payment Type :</a> <span style="font-weight: bold;color: rgb(243, 156, 18);text-transform: capitalize;" class="ng-binding">@{{partial_or_full}} payment</span></h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline1-item">

                <h3 class="timeline1-header"><a href="#">Order Description</a> </h3>

                <div class="timeline1-body" style="padding: 0;">
                 <div class="table-responsive">
            <table class="table">
              <tbody><tr>
                <th style="width:60%">Subtotal:</th>
                <td class="ng-binding">$@{{payment_details.subtotal}}</td>
              </tr>
              <!-- ngIf: payment_details.apply_coupon_discount_value.length>0 -->
              <!-- ngIf: payment_details.paying_through_wallet.length>0||payment_details.paying_through_wallet.length!=null||payment_details.paying_through_wallet.length!='' --><tr ng-if="payment_details.paying_through_wallet.length>0||payment_details.paying_through_wallet.length!=null||payment_details.paying_through_wallet.length!=''" style="color: orange" class="ng-scope">
                <th>Payment Through Wallet</th>
                <td class="ng-binding" style="padding: 10px 7px;"> $@{{payment_details.paying_through_wallet}}</td>
              </tr><!-- end ngIf: payment_details.paying_through_wallet.length>0||payment_details.paying_through_wallet.length!=null||payment_details.paying_through_wallet.length!='' -->
              <tr>
                <th>Net Payable Amount:</th>
                <td class="ng-binding">$@{{payment_details.net_payable_amount}}</td>
              </tr>
            </tbody></table>
          </div>
                </div>
                <!-- <div class="timeline-footer">
                  <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                </div> -->
              </div>
            </li>
            <!-- END timeline item -->
            
          </ul>
            </div>
         
        </div>
    </li>
    
    <li class="timeline-inverted timeline_mrgin">
        <div class="timeline-badge">
            <a><i class="fa fa-circle invert" id=""></i></a>
        </div>
    
    
        <div class="timeline-panel">
        
        <div class="timeline-heading">
      <div class="box1">
               <h4 class="box-title timelht">Available Amount in Wallet </h4></div>
        
            </div>
     
            <div class="timeline-body">
           <div class="info-box bg-aqua ng-binding walet_h" >
            <div class="info-box-content wallet_icn">
              
              <div class="disply_f">
             <span class="info-box-icon wallet_icnw"><img class="img-circle walle_icnimg" src="../dashboard_theme/dist/img/wallet-icons.png" alt="User Avatar"></span>
             <span class="info-box-number ng-binding wallet_icnw1">$@{{amount_in_wallet}}</span>
        <button class="btn bg-aqua btn-flat margin wallet_icnw2"><a class="btn bg-aqua btn-flat margin walle_fnt" href="/my-wallet">Add Money to wallet </a></button>

           </div>
             
              <div class="progress" style="margin: 0;">
                <div class="progress-bar animation--done" style="width: 100%;"></div>
              </div>
              <input type="checkbox" ng-checked="enabled_wallet=='true'" name="payment_wallet_check" ng-model="check_wallet" ng-disabled="amount_in_wallet<=0" ng-click="updateWallet(check_wallet);" style="width: 20px;height: 20px;margin: 0px;" class="ng-valid ng-dirty ng-valid-parse ng-not-empty ng-touched" checked="checked">              <label for="wallet-checkbox">Pay through Wallet</label>

                  <span class="progress-description ng-binding paytw">
                   You are going to pay $ @{{payment_details.paying_through_wallet}} from your wallet.
                  </span>
            </div>
            Balance in your wallet after payment is complete is $ @{{remaining_wallet_balance_after_wallet_is_selected}}
          </div>
      
        <div class="col-md-12" style="text-align: center;">
     
       <div ng-if="payment_details.net_payable_amount>0">
      
<form method="post" action="https://www.paypal.com/cgi-bin/webscr">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="alex.inasoft@gmail.com">
<input type="hidden" name="item_name" value="Best Assignment Expert">
<input type="hidden" name="item_number" value="{{Session::get('order_id')}}">
<input type="hidden" name ="custom" value="@{{payment_details.paying_through_wallet+'_'+partial_or_full}}">
<input type="hidden" name="amount" value="@{{payment_details.net_payable_amount}}">
<input type="hidden" name="first_name" value="{{Auth::user()->name}}">
<input type ="hidden" name ="rm" value="2">
<input type="hidden" name="currency_code" value="{{$currency}}">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="cancel_return" value="https://www.bestassignmentexperts.com/return-cancel-payment">
<input type="hidden" name="return" value="https://www.bestassignmentexperts.com/successful-payment">
<input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_paynow_cc_144x47.png" alt="Pay Now" style="margin: 10px 0px auto;">
</form>  
      
<!--  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="syedriyazzaidi@gmail.com">
  <input type="hidden" name="item_name" value="Best Assignment Expert">
  <input type="hidden" name="item_number" value="{{Session::get('order_id')}}">
  <input type ="hidden" name ="custom" value="@{{payment_details.paying_through_wallet+'_'+partial_or_full}}">
  <input type ="hidden" name ="rm" value="2">
  <input type="hidden" name="amount" value="@{{payment_details.net_payable_amount}}">
  <input type="hidden" name="currency_code" value="USD">

   Enable override of buyers's address stored with PayPal . 
  <input type="hidden" name="address_override" value="1">
   Set variables that override the address stored with PayPal. 
   <input type="hidden" name="first_name" value="{{Auth::user()->name}}">
  <input type="hidden" name="address1" value="C-15 Sector 65">
  <input type="hidden" name="city" value="Noida">
  <input type="hidden" name="state" value="UP">
  <input type="hidden" name="zip" value="201301">
  <input type="hidden" name="country" value="INDIA"> 
  <input type="hidden" name="cancel_return" value="https://www.bestassignmentexperts.com/return-cancel-payment">
  <input type="hidden" name="return" value="https://www.bestassignmentexperts.com/successful-payment">
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_paynow_cc_144x47.png" alt="Pay Now" style="margin-left: 50px;">
</form>-->
</div>
<div ng-if="payment_details.net_payable_amount<=0">        
  <form action="/successful-payment" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="anil.mybackups@gmail.com">
  <input type="hidden" name="item_name" value="Best Assignment Expert">
  <input type="hidden" name="item_number" value="{{Session::get('order_id')}}">
  <input type ="hidden" name ="custom" value="@{{payment_details.paying_through_wallet+'_'+partial_or_full}}">
  <input type ="hidden" name ="rm" value="2">
  <input type="hidden" name="amount" value="@{{payment_details.net_payable_amount}}">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Enable override of buyers's address stored with PayPal . -->
  <input type="hidden" name="address_override" value="1">
  <!-- Set variables that override the address stored with PayPal. -->
   <input type="hidden" name="first_name" value="{{Auth::user()->name}}">
  <!--<input type="hidden" name="address1" value="C-15 Sector 65">
  <input type="hidden" name="city" value="Noida">
  <input type="hidden" name="state" value="UP">
  <input type="hidden" name="zip" value="201301">
  <input type="hidden" name="country" value="INDIA"> -->
  <input type="hidden" name="cancel_return" value="https://www.bestassignmentexperts.com/return-cancel-payment">
  <input type="hidden" name="return" value="https://www.bestassignmentexperts.com/successful-payment">
  <input type="image" name="submit"
    src="/dashboard_theme/dist/img/confirm.jpg" alt="Best Assignment Experts" style="margin-left: 50px; width: 200px">
</form>
    
    
</div>  
     </div>
      
            </div>
          
        </div>
    </li>
    
   
    
  
    <li class="clearfix no-float"></li>
</ul>


   
   
  



        <!-- /.col -->
 
        
        
<!--                 <button class="btn bg-purple btn-flat margin" style="margin-left: 0px;">Pay Now</button>
 -->
      </div>
      <!-- /.row -->

    
    </section>

      </div>
  @include('dashboard-layout.dashboard-footer')




        <script>
            
            var app = angular.module('checkoutApp', []);
            app.controller('checkoutCtrl', function ($scope, $http, $location) {
                $scope.availableCurrency=['INR','USD', 'EURO', 'GBP'];
               $scope.assingmentId='';

               $scope.partial_or_full='full';
               $scope.coupon='';
               $scope.check_wallet=true;
               var url = $location.absUrl().split('?')[0];
               console.log(url);
                 $http({
                        method: 'POST',
                        url: '/chekout-data-response',
                        data:{"id":url},
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(function successCallback(response) {
                        console.log(response);
                        if (response.data.success == 'true') {

                        $scope.amount_in_wallet=response.data.data.amount_in_wallet;;
                        $scope.coupon_applied=response.data.data.coupon_applied;
                        $scope.coupon_message=response.data.data.coupon_message;
                        $scope.enabled_wallet=response.data.data.enabled_wallet;
                        $scope.payment_details=response.data.data.payment_details[0];
                        $scope.remaining_wallet_balance_after_wallet_is_selected=response.data.data.remaining_wallet_balance_after_wallet_is_selected;
                        $scope.show_partial_or_full=response.data.data.show_partial_or_full;
                        if($scope.show_partial_or_full==0){
                               $scope.partial_or_full='partial';
                        }
                        
                        }
                        if (response.data.success == 'false') {
                       
                            $scope.errorMessage=response.data.message;
                            console.log($scope.errorMessage);
                            $(".msg").remove();
                            $('section').before('<div class="alert alert-success msg"></div>');
                            $(".msg").text($scope.errorMessage);
                            $(".msg").delay(10000).fadeOut("slow");
                        }
                    }, function errorCallback(response) {

                    });
                    $scope.selectPaymentType=function(type){
                      console.log(type);
                      $scope.partial_or_full=type;
                      $http({
                        method: 'POST',
                        url: '/chekout-data-response-onclick',
                        data:{"id":url,"partial_or_full":$scope.partial_or_full,"apply_coupon":$scope.coupon,"pay_through_wallet":$scope.check_wallet},
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(function successCallback(response) {
                        console.log(response);
                        if (response.data.success == 'true') {
                          $scope.amount_in_wallet=response.data.data.amount_in_wallet;;
                        $scope.coupon_applied=response.data.data.coupon_applied;
                        $scope.coupon_message=response.data.data.coupon_message;
                        $scope.enabled_wallet=response.data.data.enabled_wallet;
                        $scope.payment_details=response.data.data.payment_details[0];
                        $scope.remaining_wallet_balance_after_wallet_is_selected=response.data.data.remaining_wallet_balance_after_wallet_is_selected;
                        $scope.show_partial_or_full=response.data.data.show_partial_or_full;
                         if($scope.show_partial_or_full==0){
                               $scope.partial_or_full='partial';
                        }       
                           
                        }
                        if (response.data.success == 'false') {
                            //$scope.showPlaceOrderForm=response.data.data.showPlaceOrderForm;
                            //alert('');
                            $scope.errorMessage=response.data.message;
                            console.log($scope.errorMessage);
                            $(".msg").remove();
                            $('section').before('<div class="alert alert-success msg"></div>');
                            $(".msg").text($scope.errorMessage);
                            $(".msg").delay(10000).fadeOut("slow");
                        }
                    }, function errorCallback(response) {

                    });

                    };


                    $scope.applyCoupon=function(coupon){
                      console.log(coupon);
                      $scope.coupon=coupon;
                      $http({
                        method: 'POST',
                        url: '/chekout-data-response-onclick',
                        data:{"id":url,"partial_or_full":$scope.partial_or_full,"apply_coupon":coupon,"pay_through_wallet":$scope.check_wallet},
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(function successCallback(response) {
                        console.log(response);
                        if (response.data.success == 'true') {
                          $scope.amount_in_wallet=response.data.data.amount_in_wallet;;
                        $scope.coupon_applied=response.data.data.coupon_applied;
                        $scope.coupon_message=response.data.data.coupon_message;
                        $scope.enabled_wallet=response.data.data.enabled_wallet;
                        $scope.payment_details=response.data.data.payment_details[0];
                        $scope.remaining_wallet_balance_after_wallet_is_selected=response.data.data.remaining_wallet_balance_after_wallet_is_selected;
                        $scope.show_partial_or_full=response.data.data.show_partial_or_full;        if($scope.show_partial_or_full==0){
                               $scope.partial_or_full='partial';
                        }
                           
                        }
                        if (response.data.success == 'false') {
                            //$scope.showPlaceOrderForm=response.data.data.showPlaceOrderForm;
                            alert('');
                            $scope.errorMessage=response.data.message;
                            console.log($scope.errorMessage);
                            $(".msg").remove();
                            $('section').before('<div class="alert alert-success msg"></div>');
                            $(".msg").text($scope.errorMessage);
                            $(".msg").delay(10000).fadeOut("slow");
                        }
                    }, function errorCallback(response) {

                    });

                    }

                      $scope.updateWallet=function(check_wallet){
                      $scope.check_wallet=check_wallet;
                      $http({
                        method: 'POST',
                        url: '/chekout-data-response-onclick',
                        data:{"apply_coupon":$scope.coupon,"pay_through_wallet":check_wallet, "partial_or_full":$scope.partial_or_full},
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(function successCallback(response) {
                        console.log(response);
                        if (response.data.success == 'true') {
                          $scope.amount_in_wallet=response.data.data.amount_in_wallet;;
                        $scope.coupon_applied=response.data.data.coupon_applied;
                        $scope.coupon_message=response.data.data.coupon_message;
                        $scope.enabled_wallet=response.data.data.enabled_wallet;
                        $scope.payment_details=response.data.data.payment_details[0];
                        $scope.remaining_wallet_balance_after_wallet_is_selected=response.data.data.remaining_wallet_balance_after_wallet_is_selected;
                        $scope.show_partial_or_full=response.data.data.show_partial_or_full;       
                           
                        }
                        if (response.data.success == 'false') {
                            //$scope.showPlaceOrderForm=response.data.data.showPlaceOrderForm;
                            //alert('');
                            $scope.errorMessage=response.data.message;
                            console.log($scope.errorMessage);
                            $(".msg").remove(); if($scope.show_partial_or_full==0){
                               $scope.partial_or_full='partial';
                        }
                            $('section').before('<div class="alert alert-success msg"></div>');
                            $(".msg").text($scope.errorMessage);
                            $(".msg").delay(10000).fadeOut("slow");
                        }
                    }, function errorCallback(response) {

                    });

                    }


                $scope.getCurrencyDetails = function (currency) {
                  $(".msg").remove();
                    console.log(currency);
                    $http({
                        method: 'POST',
                        url: '/get-currency-on-calculator',
                        data:{"id":url,"currency_code":currency},
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    }).then(function successCallback(response) {
                        console.log(response);
                        if (response.data.success == 'true') {
                           $scope.showSilverPlans=response.data.data[0];
                           $scope.showGoldPlans=response.data.data[1];
                           $scope.showPlatinumPlans=response.data.data[2];
                           console.log($scope.showSilverPlans);
                           console.log($scope.showGoldPlans);
                           console.log($scope.showPlatinumPlans);
                        }
                        if (response.data.success == 'false') {
                            //$scope.showPlaceOrderForm=response.data.data.showPlaceOrderForm;
                            
                            $scope.errorMessage=response.data.message;
                            console.log($scope.errorMessage);
                            $(".msg").remove();
                            $('section').before('<div class="alert alert-success msg"></div>');
                            $(".msg").text($scope.errorMessage);
                            $(".msg").delay(8000).fadeOut("slow");
                        }
                    }, function errorCallback(response) {

                    });
                };
            });
</script>