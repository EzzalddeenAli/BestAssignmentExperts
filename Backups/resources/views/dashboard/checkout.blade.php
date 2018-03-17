@include('dashboard-layout.dashboard-header')
@include('dashboard-layout.dashboard-left-sidebar')
{!! Html::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js') !!}
  <!-- <div class="content-wrapper" ng-app="checkoutApp" ng-controller="checkoutCtrl" style="background: url(dashboard_theme/dist/img/2.jpg) no-repeat center center fixed; background-size:cover; max-height: 500px ">
    <section class="content-header">
          <div class="btn-group">
                  <button type="button" class="btn btn-warning btn-flat">Currency</button>
                  <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown" style="padding-bottom: 22px">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li  ng-repeat="currency in availableCurrency" ng-click="getCurrencyDetails(currency)"><a>@{{currency}}</a></li> 
                  </ul>
          </div>        
         <hr>     
      <div class="row">
        <div class="col-md-7">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="/dashboard_theme/dist/img/a.gif" alt="User Avatar" style="margin-top:-10px;">
              </div>              
              <h3 class="widget-user-desc">Select Payment type</h3>
            </div>
            <div class="box-footer">
            <div class="box box-info"><div class="info-box" style="margin-bottom: -20px;">
            <span class="info-box-icon bg-yellow"><i class="fa fa-flag-o"></i></span>           
            <div class="info-box-content">
            <div class="form-group">                 
                  <div class="radio" ng-click="selectPaymentType(full);" ng-if="show_partial_or_full==1">
                    <label>                    
                      <input type="radio" ng-model="full" name="optionsRadios" id="optionsRadios2" value="full" checked="@{{show_partial_or_full}}==1">
                      Full Payment
                    </label>
                  </div>
                <div class="radio" ng-click="selectPaymentType(partial);" >
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="partial" checked="@{{show_partial_or_full}}==0" ng-model="partial">
                      Partial Payment
                    </label>
                  </div>
                Your selected payment method is @{{partial_or_full}} payment method.
            </div>
        </div>          
          </div>              
            </div>          
          </div>             
            </div>          
        </div>     
        <div class="col-md-5">
          <div class="box box-widget widget-user">
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username">$ @{{amount_in_wallet}}</h3>
              <h5 class="widget-user-desc">Available Amount in Wallet</h5>
              <div class="widget-user-image">
              <img class="img-circle" src="/dashboard_theme/dist/img/c.gif" alt="User Avatar" style="width: 80px; height: 80px;">
            </div>
            </div>            
            <div class="box-footer">
            <span>You have $ @{{amount_in_wallet}} amount in your Wallet</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
        <div class="row">
        <div class="col-md-12">
          <div class="box box-widget widget-user-2">
            <div class="widget-user-header bg-aqua">
              <div class="widget-user-image">
                <img class="img-circle" src="/dashboard_theme/dist/img/v.png" alt="User Avatar" style="margin-top:-10px;">
              </div>             
              <h3 class="widget-user-desc">Have a Coupon Code? {{$assignment_id}} </h3>
            </div>            
            <div class="box-footer no-padding">
            <div >
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Enter Coupon Code" name="chechout_coupon" style="height:45px" ng-model="coupon">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat" ng-click="applyCoupon(coupon);" style="height:45px;width:100px;background:#00c0ef; " ng-disabled="@{{coupon_applied}}">Apply</button>
                    </span>
              </div>
                  @{{coupon_message}}
              <hr>
              <div >
          </div>
            </div>
          </div>             
            </div>
        </div>
      </div>
        </div>
        <div class="col-xs-6" style="background: #fff;">
          <p class="lead">Payment Summary</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>$ @{{payment_details.subtotal}}</td>
              </tr>
              <tr ng-if="payment_details.apply_coupon_discount_value.length>0">
                <th>Applied Coupon Discount(@{{payment_details.apply_coupon_discount_value}}):</th>
                <td>$ @{{payment_details.coupon_discount_balance}}</td>
              </tr>
              <tr>
                <th>Payment Through Wallet</th>
                <td>$ @{{payment_details.paying_through_wallet}}</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>$ @{{payment_details.net_payable_amount}}</td>
              </tr>
            </table>
          </div>


          <div class="col-md-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"></span>
              <span class="info-box-number">You are paying through Wallet: </span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <div class="col-lg-12">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox" checked="enabled_wallet" name="payment_wallet_check" ng-model="check_wallet" ng-click="updateWallet(check_wallet);">
                        </span>
                        <p>Balance in your wallet after payment is complete is $ @{{remaining_wallet_balance_after_wallet_is_selected}}</p>
                  </div>
                </div>
                  
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="row no-print">
        <div class="col-xs-12">
       
         <?php
        $paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
        $paypal_id='mohit.0880@gmail.com'; // Business email ID
        ?> 
<div class="product">            
    <div class="btn">
    <form action="<?php echo $paypal_url; ?>" method="POST" name="frmPayPal1" enctype="multipart/form-data">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="Best Assignment Expert">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="partial_or_full" value="510">
    <input type="hidden" name="coupon_applied" value="MyCoupon">
    <input type="hidden" name="amount" value="1">
    <input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="cancel_return" value="http://bestassignmentexperts.com/return-cancel-payment">
    <input type="hidden" name="return" value="http://bestassignmentexperts.com/return-successful-payment">
    
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    
         
       
            
            
            
            <button type="submit" name ="submit" class="btn btn-success pull-right">
          <p>PAY $@{{payment_details.net_payable_amount}}</p>
           
          <p class="lead">Pay with Secured Payment Method</p>
          <img src="/dashboard_theme/dist/img/credit/visa.png" alt="Visa">
          <img src="/dashboard_theme/dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="/dashboard_theme/dist/img/credit/american-express.png" alt="American Express">
          <img src="/dashboard_theme/dist/img/credit/paypal2.png" alt="Paypal">
          
          </button>
        
         </form> 
    </div>
</div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
  </div> -->
  <style type="text/css">
  .timeline>.time-label>span {
    font-weight: 600;
    padding: 19px;
    display: block;
    background-color: #fff;
    border-radius: 4px;
    /* padding-left: 28px; */
    margin-left: 15px;
}
.info-box-icon {
    
    height: 150px;
    width: 157px;
    text-align: center;
    font-size: 45px;
    
}
.info-box-number {
    
    font-size: 30px;
}

</style>
<div class="content-wrapper " ng-app="checkoutApp" ng-controller="checkoutCtrl" >
    
   <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="https://cdn2.iconfinder.com/data/icons/color-svg-vector-icons-2/512/total_cost-512.png" alt="User profile picture">
              <h3 class="profile-username text-center">Checkout</h3>
              <ul class="list-group list-group-unbordered">                
                <li class="list-group-item">
                  <b>Assignments Id</b> <a href="assignment-details/{{$assignment_id}}" class="pull-right badge bg-aqua"><span style="padding: 10px;margin: auto;margin-top: -6px;">{{$show_assignment_id}}</span></a>
                </li>
               <!--  <li class="list-group-item">
                  <b>Total Amount</b> 
                  <a class="pull-right badge bg-blue">$ 12</a>
                </li> -->                
              </ul>              
            </div>
          </div>


          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Have a Coupon Code?</h3>
            </div>
            <div class="box-body">
              <div class="input-group margin">
                <input type="text" class="form-control" placeholder="Enter Coupon Code" name="chechout_coupon" ng-model="coupon">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat" ng-click="applyCoupon(coupon);" ng-disabled="@{{coupon_applied}}">Apply</button>
                    </span>
              </div>
               <p style="padding:5px; font-weight: bold; color: green;" ng-if="coupon_message.length>0">@{{coupon_message}}</p>
            </div>
            <!-- /.box-body -->
          </div>








          <div >
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><img class="img-circle" src="http://cdn2.bigcommerce.com/server5100/09ec3/product_images/uploaded_images/ptg-coupon-code-photo.jpg?t=1421191889" alt="User Avatar" style="width: 100px; height: 100px; margin-top: 20px;"></span>

            <div class="info-box-content">
              <span class="info-box-text">Available Amount in Wallet</span>
              <span class="info-box-number">$ @{{amount_in_wallet}}</span>


             
              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <input type="checkbox" ng-checked="enabled_wallet=='true'" name="payment_wallet_check" ng-model="check_wallet" ng-disabled="amount_in_wallet<=0" ng-click="updateWallet(check_wallet);" style="width: 20px;height: 20px;margin: 0px;margin-left: 30%;">              <label for="wallet-checkbox">Pay through Wallet</label>

                  <span class="progress-description" style="font-size: 16px;font-weight: bold;">
                   You are going to pay $ @{{payment_details.paying_through_wallet}} from your wallet.
                  </span>
            </div>
            Balance in your wallet after payment is complete is $ @{{remaining_wallet_balance_after_wallet_is_selected}}
          </div>
        </div>

        <button class="btn bg-purple btn-flat margin" style="margin-left: 0px;"><a class="btn bg-purple btn-flat margin" href="/my-wallet">Add Money to wallet </a></button>













        </div>



        <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Select Your Payment Type </h3>
            </div>
            <div class="box-body">
           <div class="form-group">                 
                  <div class="radio" ng-click="selectPaymentType(full);" ng-if="show_partial_or_full==1">
                    <label>                    
                      <input type="radio" ng-model="full" name="optionsRadios" id="optionsRadios2" value="full" ng-checked="@{{partial_or_full}}=='full'">
                      Full Payment
                    </label>
                  </div>
                <div class="radio" ng-click="selectPaymentType(partial);" >
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="partial" ng-checked="@{{partial_or_full}}=='partial'" ng-model="partial">
                      Partial Payment
                    </label>
                  </div>
            </div>
            </div>
            </div>
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-aqua-active">
                   Payment Summary for Assignment <span style="color: #000;font-weight: bold;font-size: 16px;">{{$show_assignment_id}}</span>
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-envelope bg-blue"></i>

              <div class="timeline-item">

                <h3 class="timeline-header"><a href="#">Total Order Amount :  </a> $ @{{payment_details.subtotal}}</h3>

                
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-user bg-aqua"></i>

              <div class="timeline-item">

                <h3 class="timeline-header no-border"><a href="#">Payment Type :</a> <span style="font-weight: bold;color: rgb(243, 156, 18);">@{{partial_or_full}} payment</span></h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">

                <h3 class="timeline-header"><a href="#">Order Description</a> </h3>

                <div class="timeline-body">
                 <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>$ @{{payment_details.subtotal}}</td>
              </tr>
              <tr ng-if="payment_details.apply_coupon_discount_value.length>0" style="color: green;">
                <th>Applied Coupon Discount(@{{payment_details.apply_coupon_discount_value}}):</th>
                <td>- $ @{{payment_details.coupon_discount_balance}}</td>
              </tr>
              <tr ng-if="payment_details.paying_through_wallet.length>0||payment_details.paying_through_wallet.length!=null||payment_details.paying_through_wallet.length!=''" style="color: orange">
                <th>Payment Through Wallet</th>
                <td>- $ @{{payment_details.paying_through_wallet}}</td>
              </tr>
              <tr >
                <th>Net Payable Amount:</th>
                <td>$ @{{payment_details.net_payable_amount}}</td>
              </tr>
            </table>
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
        <!-- /.col -->
  <div ng-if="payment_details.net_payable_amount>0">
  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="mailtest.anil@gmail.com">
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
  <input type="hidden" name="cancel_return" value="http://bestassignmentexperts.com/return-cancel-payment">
  <input type="hidden" name="return" value="http://bestassignmentexperts.com/successful-payment">
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_paynow_cc_144x47.png" alt="Pay Now" style="margin-left: 50px;">
</form>
</div>
<div ng-if="payment_details.net_payable_amount<=0">        
  <form action="/successful-payment" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="mailtest.anil@gmail.com">
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
  <input type="hidden" name="cancel_return" value="http://bestassignmentexperts.com/return-cancel-payment">
  <input type="hidden" name="return" value="http://bestassignmentexperts.com/successful-payment">
  <input type="image" name="submit"
    src="http://www.pd4pic.com/images/blue-button-trace-confirm-photo-confirmation.png" alt="" style="margin-left: 50px; width: 100px">
</form>
    
    
</div>   
        
        
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