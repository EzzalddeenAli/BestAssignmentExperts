<?php
use \App\Test;
use App\User;



    /* User Authentication */
    Route::get('/users/login', 'Auth\AuthController@getLogin');
    Route::post('/users/login', 'Auth\AuthController@postLogin');
    Route::get('/users/logout', 'Auth\AuthController@getLogout');
    Route::get('/users/register', 'Auth\AuthController@getRegister');
    Route::post('/users/register', 'Auth\AuthController@postRegister');
    Route::any('expert/fileentry/get/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get']);

    Route::get('/password/email','Auth\PasswordController@getEmail');
    Route::post('/password/email','Auth\PasswordController@postEmail');
    Route::get('/password/reset/{token}','Auth\PasswordController@getReset');
    Route::post('/password/reset','Auth\PasswordController@postReset');
    
    /*Route::get('/password/email', function()
    {
        return View('users.forget-password');
    });
    Route::post('/retrive-forgotten-password','UserController@retrieveForgottenPassword');*/

   /*  **End User Authentication**  */ 
    
   
    Route::get('/', function() 
    {
    return View('/welcome');
    });
    Route::get('/email-subscriber','MainSitePageController@emailSubscriber');
    Route::post('/query-email-sent-onpage','MainSitePageController@queryEmailFromFooterSitePage');
  //  Route::get('/query-email-sent-oninner','MainSitePageController@queryEmailFromRightsidebarSitePage');

   
    /* Service Url on dashboard */
            Route::get('/project-management-help', function () {
                return view('/main-site-pages.services.project-management-help');
            });
            Route::get('/marketing-assignment-help', function () {
                return view('/main-site-pages.services.marketing-assignment-help');
            });
            Route::get('/market-analysis-assignment-help', function () {
                return view('/main-site-pages.services.market-analysis-assignment-help');
            });
            Route::get('/market-research-assignment-help', function () {
                return view('/main-site-pages.services.market-research-assignment-help');
            });
            Route::get('/human-resource-assignment-help', function () {
                return view('/main-site-pages.services.human-resource-assignment-help');
            });
            Route::get('/management-assignment-help', function () {
                return view('/main-site-pages.services.management-assignment-help');
            });
            Route::get('/hospitality-management', function () {
                return view('/main-site-pages.services.hospitality-management');
            });
            Route::get('/computer-assignment', function () {
                return view('/main-site-pages.services.computer-assignment');
            });
            Route::get('/computer-programming-help', function () {
                return view('/main-site-pages.services.computer-programming-help');
            });
            Route::get('/data-base-management-system', function () {
                return view('/main-site-pages.services.data-base-management-system');
            });
            Route::get('/information-system', function () {
                return view('/main-site-pages.services.information-system');
            });
            Route::get('/information-technology-assignment-help', function () {
                return view('/main-site-pages.services.information-technology-assignment-help');
            });
            Route::get('/content-management-system', function () {
                return view('/main-site-pages.services.content-management-system');
            });
            Route::get('/dbms', function () {
                return view('/main-site-pages.services.dbms');
            });
            Route::get('/email-marketing', function () {
                return view('/main-site-pages.services.email-marketing');
            });
            Route::get('/compaign-management', function () {
                return view('/main-site-pages.services.compaign-management');
            });
            Route::get('/press-release', function () {
                return view('/main-site-pages.services.press-release');
            });
            Route::get('/social-media-marketing', function () {
                return view('/main-site-pages.services.social-media-marketing');
            });
            Route::get('/search-engine-optimization', function () {
                return view('/main-site-pages.services.search-engine-optimization');
            });
            Route::get('/road-show-marketing', function () {
                return view('/main-site-pages.services.road-show-marketing');
            });
            Route::get('/intro-to-datasructure', function () {
                return view('/main-site-pages.services.intro-to-datasructure');
            });
            Route::get('/intro-to-php', function () {
                return view('/main-site-pages.services.intro-to-php');
            });
            Route::get('/project-management-help', function () {
                return view('/main-site-pages.services.project-management-help');
            });
            Route::get('/intro-to-js', function () {
                return view('/main-site-pages.services.intro-to-js');
            });
            Route::get('/intro-to-dotnet', function () {
                return view('/main-site-pages.services.intro-to-dotnet');
            });
            Route::get('/intro-to-C-programming', function () {
                return view('/main-site-pages.services.intro-to-c-programming');
            });
            Route::get('/manual-testing-vs-automation-testing', function () {
                return view('/main-site-pages.services.manual-testing-vs-automation-testing');
            });
            Route::get('/performance-testing', function () {
                return view('/main-site-pages.services.performance-testing');
            });
            Route::get('/blackbox-vs-whitebox-testing', function () {
                return view('/main-site-pages.services.blackbox-vs-whitebox-testing');
            });
            Route::get('/functional-testing', function () {
                return view('/main-site-pages.services.functional-testing');
            });
            Route::get('/regression-testing', function () {
                return view('/main-site-pages.services.regression-testing');
            });
            Route::get('/academic-writing-services', function () {
                return view('/main-site-pages.services.academic-writing-services');
            });
            Route::get('/cheap-assignment-writing-services', function () {
                return view('/main-site-pages.services.cheap-assignment-writing-services');
            });
            Route::get('/best-assignment-writing-services', function () {
                return view('/main-site-pages.services.best-assignment-writing-services');
            });

            Route::get('/technical-writing-services', function () {
                return view('/main-site-pages.services.technical-writing-services');
            });

            Route::get('/best-assignment-help', function () {
                return view('/main-site-pages.services.best-assignment-help');
            });

            Route::get('/article-writing-help', function () {
                return view('/main-site-pages.services.article-writing-help');
            });

           

            /* End of Services Url */


            
            /* * **Header Urls****** */
            Route::get('/contact-us', function () {
                return view('/main-site-pages.contact-us.contact-us');
            });
            Route::get('/about-us', function () {
                return view('/main-site-pages.about-us.about-us');
            });
            Route::get('/subjects', function () {
                return view('/main-site-pages.subjects.subjects');
            });
            Route::get('/faq', function () {
                return view('/main-site-pages.faq.faq');
            });
            Route::get('/offers', function () {
                return view('/main-site-pages.offers.offers');
            });

            Route::get('/place-order', function () {
                return view('/main-site-pages.place-order.place-order');
            });

            /*  **End  Headers Urls** */
            Route::get('/403-forbidden/oops-not-autorized', function () {
                return view('errors.403');
            });
            


/* **Authenticated User MiddleWare** */

       Route::post('add','FileEntryController@add');
        Route::group(['middleware' => 'auth'], function() 
         {
            Route::get('403-forbidden/are-you-authorize??', function () 
            {
                return view('errors.403');
            });

            Route::get('/users/dashboard', 'DashboardController@dashboardController');
            Route::get('/add-assignment', 'AssignmentController@addAssignment');
            Route::get('/my-assignment', 'AssignmentController@showAssignment');
            Route::get('/my-referral', 'ReferralController@getReferral');

            Route::any('/successful-payment', 'Amount\OrderController@onSuccessfulPayment');
            Route::any('/failed-payment', function()
	   {
 		return view('dashboard.payment-fail');
	   });
            Route::any('/paypal-wallet-amount-success', 'Amount\WalletController@addAmountInWalletViaPaypal');
            Route::any('/paypal-wallet-amount-cancel', 'Amount\WalletController@cancelAmountInWalletViaPaypal');
            Route::post('/put/assignment/data', 'AssignmentController@putAssignmetData');
            ///Route::post('/submit-assignment-data', 'ReferralController@getReferral');    
            Route::get('/my-wallet', 'Amount\WalletController@showWalletPage');
            Route::get('/my-profile', 'UserController@myProfile');

            Route::post('/update-profile', 'UserController@updateProfile');
            Route::any('/pay-now', 'Amount\OrderController@paypalPayment');
            Route::any('/payment-order-submission/paynow', 'Amount\CheckoutController@onCheckoutPage');
            Route::get('/assignment-details/{id}', 'AssignmentController@showAssignmentDetails');
            Route::get('/assingment-details-for-admin/{id}', 'AdminControllers\AssignmentController@showAssignmentDetailsOnAdminSide');
            Route::get('/my-orders', 'Amount\OrderController@orderDetailsPageOnStudentSide');
            Route::get('/pending-assignments', 'AdminControllers\AssignmentController@showPendingAssignment');
            Route::get('/send-quick-mail', 'DashboardController@sendSmipleMail');

            Route::get('fileentry', 'FileEntryController@index');
            Route::get('fileentry/get/{filename}', ['as' => 'getentry', 'uses' => 'FileEntryController@get']);
            Route::get('/generate-token', 'BitSixAuthTokenController@generateTokenForBit6Authentication');
            Route::any('/check-order', 'SendResponseController@getAssignmentAsOrderId');
            Route::any('/check-order1', 'SendResponseController@getOrderId');
            Route::any('/return-successful-payment', 'Amount\OrderController@returnUrlOnSuccessfulPayment');
            Route::any('/return-cancel-payment', 'Amount\OrderController@returnUrlOnCancelPayment');
            
            /**Search **/
             Route::get('/search-order-id',      'SearchUserController@searchOrderId');
             //Route::get('/searach-assignment-id', 'SearchUserController@searchAssignmentId');
            Route::post('/comment-sent', 'CommentController@storeTextMessage');
            /**Search**/


            
            
            
            
            
            
            
            
            
            
            
            
            /*Authenticated User Web Service*/
            Route::any('/chekout-data-response', 'WebServices\CheckOutController@checkOutPageLoadFirstTime');
            Route::any('/chekout-data-response-onclick', 'WebServices\CheckOutController@checkOutPageafterFirstTime');
            Route::post('/get-currency-on-calculator', 'WebServices\CurrencyDataController@getCurrencyDataForCalculator');
            Route::any('/change/currency', 'WebServices\CheckOutController@changeCurrency');
            
            /* End of Authenticated User Web Service*/
            
            
            
            /* ****Admin Access Routes****  */
            
           Route::group(['middleware' => 'roleCheck'], function() 
           {
               
                
                Route::get('/currency-calculator', 'Amount\OrderController@getDataForCurrencyCalculation');
                Route::post('/send-mail-by-admin', 'NotificationController@sendMailForFastContact');
                Route::get('/get-token', 'Amount\PayPalToken@process_payment');
                Route::get('/plan-with-currency', 'AdminControllers\CurrencyController@getplanData');

                Route::post('/plan-with-currency', 'AdminControllers\CurrencyController@postPlanData');
                Route::any('/admin-check', 'AdminControllers\AdminDashboardController@getDashboardData');
                Route::any('/create-coupon', 'AdminControllers\CouponController@createCoupons');
                
                Route::get('/order-details-for-admin', 'Amount\OrderController@orderDetailsPageOnAdminSide');
                Route::get('/show-assignment-details/{id}', 'AdminControllers\AssignmentController@showAssignmentDetailsOnAdminSide');
                Route::get('/complete-assignment', 'AdminControllers\AssignmentController@completeAssignment');
                
                Route::any('/show-students', 'AdminControllers\StudentController@showStudents');
                Route::any('/show-experts', 'AdminControllers\ExpertController@showExperts');
                Route::any('/show-completed-assignments', 'AdminControllers\AssignmentController@showCompletedAssignment');

                Route::any('/show-priority-assignments', 'AdminControllers\AssignmentController@showPriorityAssignment');
                Route::get('/assignment-request', 'AdminControllers\AssignmentController@showAssignmentRequest');
                Route::get('/expired-assignments', 'AdminControllers\AssignmentController@showExpiredAssignment');

                Route::get('/paypal-link-generator', 'AdminControllers\PaypalController@generatepaypalLink');
                Route::any('/delete-student', 'AdminControllers\StudentController@deleteStudent');
                Route::any('/block-student', 'AdminControllers\StudentController@blockStudent');
                Route::any('/unblock-student', 'AdminControllers\StudentController@unblockStudent');
                
                Route::get('/student-profile/{id}', 'AdminControllers\StudentController@showStudentProfile');
                Route::post('/student-profile/{id}', 'AdminControllers\StudentController@updateStudent');
                Route::get('/expert-profile/{id}', 'AdminControllers\ExpertController@showExpertProfile');

                Route::post('/expert-profile/{id}', 'AdminControllers\ExpertController@updateExpert');
                Route::get('/on-my-profile/{id}', 'AdminControllers\UserController@showAdminProfile');
                Route::post('/on-my-profile/{id}', 'AdminControllers\UserController@updateAdmin');


                Route::any('/delete-expert', 'AdminControllers\ExpertController@deleteExpert');
                Route::any('/block-expert', 'AdminControllers\ExpertController@blockExpert');
                Route::any('/update-expert', 'AdminControllers\ExpertController@updateExpert');
                Route::any('/unblock-expert', 'AdminControllers\ExpertController@unblockExpert');
                

                Route::get('/create-user', 'AdminControllers\UserController@createUser');
                Route::post('/create-user', 'AdminControllers\UserController@createUserPostData');
                /*Remove This url as we need to call  a function only*/
                Route::any('/get-list-of-available-experts',     'AdminControllers\ExpertController@getListOfAvailableExperts');
                Route::any('/assign-assignment-manually',        'AdminControllers\ExpertController@assignAssignmentManually');
                //25/10/2016
                Route::any('/post-coupon-data',   'AdminControllers\CouponController@postCouponData');
                Route::any('/show-coupons',   'AdminControllers\CouponController@showCoupons');
                /**For Expert*/
                Route::any('/submit-assignment-with-solution',   'AdminControllers\ExpertController@AsubmitAssignmentWithSolution');
                //Route::any('/assignmnet-acceptance',) ;
                /**/
                Route::any('/assign-expert-manually', 'AdminControllers\AssignExpertController@assignExpertManually');
                Route::get('/check', 'Amount\CurrencyValueController@convertCurrency');
                Route::post('/add-amount-in-user-wallet','AdminControllers\StudentController@addAmountInUserWallet');
                /*****/
                //Searched Data
                Route::get('/search-admin-student', 'AdminControllers\SearchAdminController@searchStudents');
                Route::get('/search-admin-expert', 'AdminControllers\SearchAdminController@searchExperts');
                //Route::get('/search-admin-assignment', 'AdminControllers\SearchAdminController@serachAssignmentId');
                Route::get('/search-order', 'AdminControllers\SearchAdminController@searchOrders');
                
                Route::any('/send-rework-request/{id}', 'AdminControllers\AssignmentController@sendReworkRequest');
                /****/
                
                
                Route::any('/expert-rework-assignments', 'AdminControllers\AssignmentController@expertReworkRequest');
                
            
           
           });
           /* ****End of Admin Acess Routes*** */
     });
        /* **End of Authenticated UserMiddleware**  */
         
         
    
        /*  **Web Services without Authentication** */
        Route::post('/place-order/check/user', 'WebServices\PlaceOrderController@checkUser');
        Route::get('/search-admin-student-id', 'AdminControllers\SearchAdminController@serachStudentById');
        Route::post('/create-user-from-place-order-page', 'WebServices\PlaceOrderController@createUserAndRedirectToDashboard');  

        Route::get('/send/push', 'WebServices\PlaceOrderController@sendPush');
        Route::get('/send/msg', 'WebServices\PlaceOrderController@sendMessage');
        Route::get('/send/msg', 'WebServices\PlaceOrderController@sendMessage');
        /*  **End of Web Service without Authentication**  */         

       
            Route::get('/my-chat', 'ChatController@myConverstation');






 
