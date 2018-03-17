<!--@can('admin_access')
<a href='#'>Admin</a>
@endcan
@can('login_access')
<a href='#'>User</a> 
@endcan
Checked-->
<!DOCTYPE HTML>

<span style="visibility: visible; position: fixed; cursor: pointer; z-index: 2147483637;  width: 110px; height: 60px; left: 1174px; top: 345px; color: #0000FF; text-decoration: underline; cursor: pointer;" id="phplive_btn_1476310056" onclick="phplive_launch_chat_0(0)"></span>
<script type="text/javascript">

(function() {
var phplive_e_1476310056 = document.createElement("script") ;
phplive_e_1476310056.type = "text/javascript" ;
phplive_e_1476310056.async = true ;
phplive_e_1476310056.src = "/t2.phplivesupport.com/Anil3018/js/phplive_v2.js.php?v=0|1476310056|0|" ;
document.getElementById("phplive_btn_1476310056").appendChild( phplive_e_1476310056 ) ;
})() ;

</script> 
<style>.animationload 
 {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  z-index: 999999;
 }
 .animationload .loader 
 {
  width: 50px;
  height: 50px;
  font-size: 24px;
  text-align: center;
  position: absolute;
  left: 50%;
  top: 50%;
  background-image: url('theme/rs-plugin/assets/loader.gif');
  background-repeat: no-repeat;
  background-position: center;
  margin: -25px 0 0 -25px;
 }</style>
<html>
    @include('layout.header')
   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"/>
   <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
     <style type="text/css">
       #ui-datepicker-div {
    
    top: 130px !important;
    
}
    </style>
  
        <!-- / page header -->
        <!-- revolution slider -->
         @if(Session::has('site_mail_success'))
                                     <div class="info-boxes confirmation-message" id="confirm"><span>{{session()->get('site_mail_success')}}</span></div>
         @endif
          @if(Session::has('site_mail_error'))
                                     <div class="message_box error-box" id="confirm"><span>{{session()->get('site_mail_error')}}</span></div>
         @endif
         @if(Session::has('place_order_exception'))
                                     <div class="message_box error-box" id="confirm"><span>{{session()->get('place_order_exception')}}</span></div>
         @endif
         
        <div class="tp-banner-container" style="z-index: -1;">
        
            <div class="tp-banner-slider">
                <ul>
                    <li data-masterspeed="700">
                        <img src="theme/rs-plugin/assets/loader.gif" data-lazyload="theme/img/images/SliderImages/slider1.png" alt>
                        <div class="tp-caption sl-content align-left" data-x="['left','center','center','center']" data-hoffset="20" data-y="center" data-voffset="0"  data-width="['720px','600px','500px','300px']" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
                             data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
                            <div class="sl-title">We are Happy to assist you</div>
                            <p>Don’t worry about the complexity of Assignments, we are here to help you out.</p>
                            <!--<a href="/place-order" class="cws-button border-radius">Order Now <i class="fa fa-angle-double-right"></i></a>-->
                        </div>
                    </li>
                    <li data-masterspeed="700">
                        <img src="theme/rs-plugin/assets/loader.gif" data-lazyload="theme/img/images/SliderImages/Slider2.jpg" alt>
                        <div class="tp-caption sl-content align-right" data-x="['left','center','center','center']" data-hoffset="20" data-y="center" data-voffset="0"  data-width="['720px','600px','500px','300px']" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
                             data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
                            <div class="sl-title">We have the best Experts for you</div>
                            <p>Delivering premium quality work is our first priority. We have<br/>mostly PhD experts with ample of experience in writing. </p>
                            <!--<a href="/place-order" class="cws-button border-radius">Order Now <i class="fa fa-angle-double-right"></i></a>-->
                        </div>
                    </li>
                    <li data-masterspeed="700" data-transition="fade">
                        <img src="theme/rs-plugin/assets/loader.gif" data-lazyload="theme/img/images/SliderImages/Slider3.png" alt>
                        <div class="tp-caption sl-content align-center" data-x="['left','center','center','center']" data-hoffset="0" data-y="center" data-voffset="0"  data-width="['720px','600px','500px','300px']" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
                             data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
                            
                            <div class="sl-title">Trust the insticnt of 1000's of students.</div>
                            <p>As a part of our journey towards success, we are<br/>now a trust of more than thousand students.</p>
                            <!--<a href="/place-order" class="cws-button border-radius">Order Now <i class="fa fa-angle-double-right"></i></a>-->
                        </div>
                    </li> 
                    <li data-masterspeed="700" data-transition="fade">
                        <img src="theme/rs-plugin/assets/loader.gif" data-bgposition="center right"  data-lazyload="theme/img/images/SliderImages/slider4.png" alt>
                        <div class="tp-caption sl-content align-left" data-x="['left','center','center','center']" data-hoffset="20" data-y="center" data-voffset="40" data-width="['720px','600px','500px','300px']" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
                             data-transform_out="opacity:0;s:300;s:1000;" data-start="400">
                            <div class="sl-title">Order now to improve your grades</div>
                            <p>We have the best writing experts for<br/>you in affordable price.</p>
                            <!--<a href="/place-order" class="cws-button border-radius">Order Now <i class="fa fa-angle-double-right"></i></a>-->
                        </div>
                    </li>
                </ul>
            </div>
        </div>




        <div style="position: absolute;top:30%; width: 30%;left:40%;" class="place-order-mobile-hide">




     <main ng-app="myApp" ng-controller="myCtrl">
    <section class="signup-placeorder" >
        <div class="grid-row">
            <div class="login-block" >
                <div class="logo" style="margin: 0px">
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
                        <input type="text"  class="login-input" placeholder="Due date" name="place_order_duedate" ng-model="place_order.duedate" datepicker>
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
                        <!-- <span class="input-icon">
                            <i class="fa fa-envelope-o"></i>
                        </span> -->
                    </div>
                    <div class="form-group">
                        <label>Select Reference</label>
                        <select type="text" class="login-input" placeholder="Reference" name="place_order_reference" value="Select Reference">
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
                        <input type="text"  class="login-input" placeholder="Phone" name="phone" ng-model="order.phone" required="" numbers-only>
                        <span class="input-icon">
                            <i class="fa fa-mobile-phone"></i>
                        </span>
                    </div>
                    <div class="form-group">               
                        <textarea type="text" class="login-input" placeholder="Description" name="description" ng-model="order.description" required="" style="height: 70px;border: 1px solid #e6e6e6;width: 100%;padding: 10px;"> </textarea>                      
                                 <span class="input-icon">
                                    <i class="fa fa-comments"></i>
                                </span>
                    </div>
                            <button type="submit" class="button-fullwidth cws-button bt-color-3 border-radius">Sign Up</button>
                            <!--<button ng-click="back()" class="button-fullwidth cws-button bt-color-3 border-radius">Back</button>-->
                        
                </form>
                  <button ng-click="back()" class="button-fullwidth cws-button border-radius" ng-if="showPlaceOrderForm != 'true'" style="padding:10px;margin:2px;">Back</button>
                        
                    </div>
                </div>
            </section>
        </main>
       
       </div>
        <!-- / revolution slider -->
        <hr class="divider-color">
        <!-- content -->
        <div id="home" class="page-content padding-none">
            <!-- section -->
<!--        <section class="padding-section">
                    <div class="grid-row clear-fix">
                            <h2 class="center-text">Latest Courses</h2>
                            <div class="grid-col-row">
                                    <div class="grid-col grid-col-4">
                                             course item 
                                            <div class="course-item">
                                                    <div class="course-hover">
                                                            <img src="http://placehold.it/370x280" data-at2x="http://placehold.it/370x280" alt>
                                                            <div class="hover-bg bg-color-1"></div>
                                                            <a href="">Learn More</a>
                                                    </div>
                                                    <div class="course-name clear-fix">
                                                            <span class="price">$75</span>
                                                    <h3><a href="#">Science In The New Era</a></h3>
                                                            </div>
                                                    <div class="course-date bg-color-1 clear-fix">
                                                            <div class="day"><i class="fa fa-calendar"></i>11 January</div><div class="time"><i class="fa fa-clock-o"></i>At 3:00 pm</div>
                                                            <div class="divider"></div>
                                                            <div class="description">Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis</div>
                                                    </div>
                                            </div>
                                             / course item 
                                    </div>
                                    <div class="grid-col grid-col-4">
                                             course item 
                                            <div class="course-item">
                                                    <div class="course-hover">
                                                            <img src="http://placehold.it/370x280" data-at2x="http://placehold.it/370x280" alt="">
                                                            <div class="hover-bg bg-color-2"></div>
                                                            <a href="">Learn Morenore</a>
                                                    </div>
                                                    <div class="course-name clear-fix">
                                                            <span class="price">Free</span>
                                                    <h3><a href="#">Campus Party</a></h3>
                                                            </div>
                                                    <div class="course-date bg-color-2 clear-fix">
                                                            <div class="day"><i class="fa fa-calendar"></i>12 January</div><div class="time"><i class="fa fa-clock-o"></i>At 4:00 pm</div>
                                                            <div class="divider"></div>
                                                            <div class="description">Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis</div>
                                                    </div>
                                            </div>
                                             / course item 
                                    </div>
                                    <div class="grid-col grid-col-4">
                                             course item 
                                            <div class="course-item">
                                                    <div class="course-hover">
                                                            <img src="http://placehold.it/370x280" data-at2x="http://placehold.it/370x280" alt="">
                                                            <div class="hover-bg bg-color-3"></div>
                                                            <a href="">Learn More</a>
                                                    </div>
                                                    <div class="course-name clear-fix">
                                                            <span class="price">$45</span>
                                                    <h3><a href="#">Design Practice</a></h3>
                                                            </div>
                                                    <div class="course-date bg-color-3 clear-fix">
                                                            <div class="day"><i class="fa fa-calendar"></i>22 January</div><div class="time"><i class="fa fa-clock-o"></i>At 6:30 pm</div>
                                                            <div class="divider"></div>
                                                            <div class="description">Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis</div>
                                                    </div>
                                            </div>
                                             course item 
                                    </div>
                            </div>
                    </div>
            </section>-->
            <section class="fullwidth-background padding-section">
                <div class="grid-row clear-fix">
                    <h2 class="center-text">About Us</h2>
                    <div class="grid-col-row">
                        <div class="grid-col grid-col-6">
                            <h3>Know why we are exceptional and unique</h3>
                            <p>The reason for being the best is that we have advanced and accurate time monitoring software. Our software is impeccable and ensures the timely delivery of our solutions.</p>
                            <!-- accordions -->
                            <div class="accordions">
                                <!-- content-title -->
                                <div class="content-title active">UNIQUE CONTENT</div>
                                <!--/content-title -->
                                <!-- accordions content -->
                                <div class="content">Our professionals strive hard to provide unique and error free content.</div>
                                <!--/accordions content -->
                                <!-- content-title -->
                                <div class="content-title">24X7 SUPPORT</div>
                                <!--/content-title -->
                                <!-- accordions content -->
                                <div class="content">We believe in client satisfaction that's why we remain available to support anytime.</div>
                                <!--/accordions content -->
                                <!-- content-title -->
                                <div class="content-title">REFUND POLICY</div>
                                <!--/content-title -->
                                <!-- accordions content -->
                                <div class="content">Client satisfaction is the key to customer retention and we know it very well. Our incredible refund policy is designed just for you.</div>
                                <!--/accordions content -->
                                <!-- content-title -->
                                <div class="content-title">MORE THAN 1000 EXPERTs</div>
                                <!--/content-title -->
                                <!-- accordions content -->
                                <div class="content">We have a large team of highly qualified professional to serve you.</div>
                                <!--/accordions content -->
                            </div>
                            <!--/accordions -->
                            <a href="/about-us" class="cws-button bt-color-3 border-radius alt icon-right">View Detail<i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="grid-col grid-col-6">
                            <div class="owl-carousel full-width-slider">
                                <div class="gallery-item picture">
                                    <img src="theme/img/images/aboutus/about-us4.jpg" data-at2x="theme/img/images/aboutus/about-us4.jpg" alt>
                                </div>
                                <div class="gallery-item picture">
                                    <img src="theme/img/images/aboutus/about-us3.jpg" data-at2x="theme/img/images/aboutus/about-us3.jpg" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / section -->
            <hr class="divider-color" />
            <!-- section -->
<!--        <section class="fullwidth-background padding-section">
                    <div class="grid-row clear-fix">
                            <div class="grid-col-row">
                                    <div class="grid-col grid-col-6">
                                            <a href="" class="service-icon"><i class="flaticon-pie"></i></a>
                                            <a href="" class="service-icon"><i class="flaticon-medical"></i></a>
                                            <a href="" class="service-icon"><i class="flaticon-restaurant"></i></a>
                                            <a href="" class="service-icon"><i class="flaticon-website"></i></a>
                                            <a href="" class="service-icon"><i class="flaticon-hotel"></i></a>
                                            <a href="" class="service-icon"><i class="flaticon-web-programming"></i></a>
                                            <a href="" class="service-icon"><i class="flaticon-camera"></i></a>
                                            <a href="" class="service-icon"><i class="flaticon-speech"></i></a>
                                    </div>
                                    <div class="grid-col grid-col-6 clear-fix">
                                            <h2>Our Services</h2>
                                            <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at susp. Vivamus orci urna, ornare vitae tellus in, condimentum imperdiet eros. Maecea accumsan, massa nec vulputate congue. Maecenas nec odio et ante tincidunt creptus alarimus tempus.</p>
                                            <a href="" class="cws-button bt-color-3 border-radius alt icon-right float-right">Learn More<i class="fa fa-angle-right"></i></a>
                                    </div>
                            </div>
                    </div>
            </section>-->
            <!-- / section -->
            <!-- paralax section -->
            <div class="parallaxed">
                <div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
                    <img src="theme/img/parallax.png" alt="">

                </div>
                <div class="them-mask bg-color-1"></div>
                <div class="grid-row">
                    <div class="grid-col-row clear-fix">
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block">
                                <i class="flaticon-book1"></i>
                                <div class="counter" data-count="100">100+</div>
                               
                                <div class="counter-name">Subjects</div>
                            </div>
                        </div>
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block">
                                <i class="flaticon-multiple"></i>
                                <div class="counter" data-count="5000">5000+</div>

                                <div class="counter-name">Students</div>
                            </div>                          
                        </div>
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block">
                                <i class="fa fa-graduation-cap"></i>
                                <div class="counter" data-count="1000">1000+</div>
                                <div class="counter-name">Experts</div>
                            </div>
                        </div>
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block last">
                                <i class="flaticon-calendar"></i>
                                <div class="counter" data-count="10000">10,000+</div>
                                <div class="counter-name">Deliveries</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / paralax section -->
            <hr class="divider-color" />
            <!-- paralax section -->
            <!-- section -->
            <section class="fullwidth-background padding-section">
                <div class="grid-row">
                    <h2 class="center-text">Get Your Work Done in Just Three Steps</h2>
                    <!-- time line -->
                    <div class="time-line">
                        <div class="line-element">
                            <div class="action">
                                <div class="action-block">
                                    <span><i class="flaticon-magnifier"></i></span>
                                    <div class="text">
                                        <h3>Upload Assignment</h3>
                                        <p>We have a very easy process for uploading the assignment. You can upload your file in just two simple steps. We provide you with the best price quote for your assignment. We also have a direct chat facility that will help to discuss your specific requirements with us.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="level">
                                <div class="level-block">Step 1</div>
                            </div>
                        </div>
                        <div class="line-element color-2">
                            <div class="level">
                                <div class="level-block">Step 2</div>
                            </div>
                            <div class="action">
                                <div class="action-block">
                                    <span><i class="flaticon-computer"></i></span>
                                    <div class="text">
                                        <h3>Pay for Assignment</h3>
                                        <p>After the assignment upload, the next step is payment through our secured payment gateways. You can pay through a digital wallet or Paypal. In the case of not getting satisfied with our work, your payment will be refunded.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="line-element color-3">
                            <div class="action">
                                <div class="action-block">
                                    <span><i class="flaticon-shopping"></i></span>
                                    <div class="text">
                                        <h3>Get the Solution</h3>
                                        <p>After the final payment, your solution file is easily available to you in students panel. We love our students and dedicated to providing high-quality work to them. And in the case of non-satisfaction with our work, we also have rework or refund option available.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="level">
                                <div class="level-block">Step 3</div>
                            </div>
                        </div>
                    </div>
                    <!-- / time line -->
                </div>
            </section>
            <!-- / paralax section -->
            <hr class="divider-color" />
            <!-- paralax section -->
            <section class="fullwidth-background padding-section">
                <div class="grid-row clear-fix">
                    <div class="grid-col-row">
                        
                        <div class="grid-col grid-col-12 clear-fix">
                        <h2>Be the best with Best Assignment Experts</h2>
                            <p>We deliver world-class solutions to our service takers and to provide perfect work we hire PhD acquired experts. We have writers for each management, computers, software and many other fields. We pay extreme care while selecting our writer so that you can get the best.</p>
                        
                        <div class="grid-col grid-col-6">
                            
                           
                            
                            <a href="" class="service-icon"><i class="fa fa-book"></i></a>
                            <a href="" class="service-icon"><i class="fa fa-graduation-cap"></i></a>
                            <a href="" class="service-icon"><i class="flaticon-web-programming"></i></a>
                            <a href="" class="service-icon"><i class="fa fa-credit-card"></i></a>
                        </div>
                        
                            <div class="tabs-box">
                            <a href="#See-More" class="cws-button bt-color-3 border-radius alt icon-right float-right" data-boxs-tab="5">See More<i class="fa fa-angle-right"></i></a>
                            </div>
                            <br>
                            <br>
                            <br>

                            <div class="boxs-tab">
                            <div class="animated fadeIn" data-box="5">
                            <div >
                            <!-- <a href="" class="service-icon col-sm-1"><i class="fa fa-book"></i></a> -->
                            <h5>Highly Qualified Professionals</h5>
                            <p>
                            What is teaching if you don’t possess good quality teachers? We, at Best Assignments Experts ensure that the students are getting the right quality for their money. We hire only writing experts who are very qualified in their fields. It is very common to find faculties who possess Doctorate degrees and work with us.
                              
                            </p>
                            <br>
                            </div>

                            <div>
                            <h5>Quality work</h5>
                            <p>
                            Quality can’t be find in quantity. To ensure quality, you need to commit on proper talents and provide them a platform to thrive. We, at Best Assignments Experts assure the quality by hiring with a strict code and policy. The code is quite simple. Hire only top PhD writers who possess excellent academic record.
                              
                            </p>
                            <br>
                            </div>


                            <div>
                            <h5>Secure payment gateway</h5>
                            <p>
                            Money is the most important and sensitive factor that comes to play when we buy something from the market. It is similar with education when it is provided online by experts like Best Assignment Experts. We, at Best Assignment Experts use PayPal payment gateway for secure payment. So, relax about the bank details and credit cards. We use only secure payment gateway.
                              
                            </p>
                            <br>
                            </div>


                            <div>
                            <h5>24X7 Dedicated support</h5>
                            <p>
                            Being online is the keyword of the modern era. We, at Best Assignment Experts utilize the full amount of Internet facilities to prove ourselves efficient. Any students, who can’t understand a topic and want to understand it later after his lessons, can always refer to our 24x7 dedicated customer support for clarification.
                              
                            </p>
                            <br>
                            </div>


                            <div>
                            <h5>Plagiarism Free Report (if required by the student)</h5>
                            <p>
                            We, at Best Assignment Experts ensure the quality of our writing work by maintaining plagiarism-free contents. The team we work with has the efficiency to check for copying and filter the content quality. The content goes through a process of filtering after which it reaches the students as perfect study and course material.
                              
                            </p>
                            <br>
                            </div>


                            <div>
                            <h5>Rework Facility (if required)</h5>
                            <p>
                            In any endeavor, client satisfaction matters the most. We, at Best Assignment Experts prioritize student’s understanding to any topic or subject at the apex. In case the student doesn’t understand, we refund their money or rework on the topic as per the student requirements. As a student opts for rework, it only means that the process will continue until the student attains cognizance.
                              
                            </p>
                            <br>
                            </div>


                            <div>
                            <h5>Timely Delivery</h5>
                            <p>
                            We, at Best Assignment Experts provide for time monitoring software to ensure proper delivery of the solutions. It has a job tracker as well as mentions a delivery time to the students. Our experts ensure that the solution reaches the student within the time. If a solution doesn’t come within the time, the process goes to inability. It ensures that the writer will deliver the solutions in time.
                              
                            </p>
                            <br>

                            </div>


                            <div>
                            <h5>Best pricing plans</h5>
                            <p>
                            We, at Best Assignment Experts provide for the premium service at an affordable market price. Not just an affordable price but we can guarantee you won’t find any competitors in the market who can provide excellent quality under cheap cost. We can assure that if a competitor can maintain the same quality by beating our pricing, we will change our pricing policies.
                              
                            </p>
                            <br>
                            </div>


                            <div>
                            <h5>Refund options</h5>
                            <p>
                            Student satisfaction is important. In case a student doesn’t understand a topic, we provide a full refund of their money. If the student claims for a refund, we ensure 100% refund in accordance to our policies. Through our secure payment gateway of PayPal, we assure the students of a complete refund in case we are unable to resolve the queries of a student or recommend for a rework.
                              
                            </p>
                            <br>
                            </div>
                                  

                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- / paralax section -->
          
            <!-- paralax section -->
            <section class="padding-section">
                <div class="grid-row clear-fix">
                    <div class="grid-col-row">
                        <div class="grid-col">
                        <div class="tabs-box">
                                <a href="#Experts" data-boxs-tab="1" class="active">Why we are different</a>
                                <a href="#Quality" data-boxs-tab="2">Quality</a>
                                <a href="#Pricing" data-boxs-tab="3">Pricing</a>
                            </div>
                            <div class="boxs-tab">
                            
                                <div class="animated fadeIn active" data-box="1">
                                    <img src="theme/img/images/different/Quality2.jpg" data-at2x="theme/img/images/different/Quality2.jpg" alt >
                                    <h2>Why we are different</h2>
                                    <p>The quality of our work ensures proper delivery and plagiarism-free content provided by the panel of expert writers who work in our team. These writers are Doctorates and are capable enough to teach subjects and various disciplines suiting the needs of the students. In case, the student is not satisfied, the student can avail for a complete refund or avail for a rework.</p>
                                </div>
                                <div class="animated fadeIn" data-box="2">
                                    <img src="theme/img/images/different/Quality1.jpg" data-at2x="theme/img/images/different/Quality1.jpg" alt >
                                    <h2>Quality Assurance</h2>
                                    <p>The quality of our work ensures proper delivery and plagiarism-free content provided by the panel of expert writers who work in our team. These writers are Doctorates and are capable enough to teach subjects and various disciplines suiting the needs of the students. In case, the student is not satisfied, the student can avail for a complete refund or avail for a rework.</p>
                                </div>
                                <div class="animated fadeIn" data-box="3">
                                    <img src="theme/img/images/different/Quality3.jpg" data-at2x="theme/img/images/different/Quality3.jpg" alt >
                                    <h2> Best Pricing Plans</h2>
                                    <p>We, at Best Assignment Experts provide for the premium service at an affordable market price. Not just an affordable price but we can guarantee you won’t find any competitors in the market who can provide excellent quality under cheap cost. We can assure that if a competitor can maintain the same quality by beating our pricing, we will change our pricing policies.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- / paralax section -->
            <hr class="divider-color"/>
            <!-- paralax section -->
            '
            <!-- paralax section -->
            <!-- parallax section -->
            <div class="parallaxed">
                <div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
                    <img src="theme/img/parallax.png" alt="">
                </div>
                <div class="them-mask bg-color-2"></div>
                <div class="grid-row center-text">
                    <div class="font-style-1 margin-none">Get In Touch With Us</div>
                    <div class="divider-mini"></div>
                    <p class="parallax-text"></p>
                    <form action="/email-subscriber" class="subscribe" method="GET">
                        <input type="email" name="email" value="" size="40" placeholder="Enter your email" aria-required="true"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
            <!-- parallax section -->
            <!-- section -->
            <section class="grid-row clear-fix padding-section">
                <h2 class="center-text">Suggested Experts</h2>
                <div class="grid-col-row">
                    <div class="grid-col grid-col-6">
                        <div class="item-instructor bg-color-1">
                            <a href="page-profile.html" class="instructor-avatar">
                                <img src="theme/img/images/ExpertsMonth/experts1.jpg" data-at2x="theme/img/images/ExpertsMonth/experts1.jpg" alt>

                            </a>
                            <div class="info-box">
                                <h3>Jennifer Martinelli</h3>
                                <span class="instructor-profession">Management Assignment Expert</span>
                                <div class="divider"></div>
                                <p><!-- Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis. --></p>
                                <div class="social-link">
                                    <a href="/place-order" class="cws-button border-radius">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-instructor bg-color-3">
                            <a href="page-profile.html" class="instructor-avatar">
                                <img src="theme/img/images/ExpertsMonth/expert2.jpg" data-at2x="theme/img/images/ExpertsMonth/expert2.jpg" alt>
                            </a>
                            <div class="info-box">
                                <h3>Shaun Hayden</h3>
                                <span class="instructor-profession">Law Assignment Expert</span>
                                <div class="divider"></div>
                                <p><!-- Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis. --></p>
                                <div class="social-link">
                                    <a href="/place-order" class="cws-button border-radius">Order Now</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="grid-col grid-col-6">
                        <div class="item-instructor bg-color-2">
                            <a href="page-profile.html" class="instructor-avatar">
                                
                                <img src="theme/img/images/ExpertsMonth/experts2.jpeg" data-at2x="theme/img/images/ExpertsMonth/experts2.jpeg" alt>
                            </a>
                            <div class="info-box">
                                <h3>Lisa Morgan</h3>
                                <span class="instructor-profession">Software Engineering Expert</span>
                                <div class="divider"></div>
                                <p><!-- Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis. --></p>
                                <div class="social-link">
                                    <a href="/place-order" class="cws-button border-radius">Order Now</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="item-instructor bg-color-6">
                            <a href="page-profile.html" class="instructor-avatar">
                                <img src="theme/img/images/ExpertsMonth/expert4.jpg" data-at2x="theme/img/images/ExpertsMonth/expert4.jpg" alt>
                            </a>
                            <div class="info-box">
                                <h3>James Carter</h3>
                                <span class="instructor-profession">Bio Medical Science Assignment Expert</span>
                                <div class="divider"></div>
                                <p><!-- Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis. --></p>
                                <div class="social-link">
                                    <a href="/place-order" class="cws-button border-radius">Order Now</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / section -->
            <hr class="divider-color" />
            <!-- section -->
<!--        <section class="padding-section">
                    <div class="grid-row clear-fix">
                            <div class="grid-col-row">
                                    <div class="grid-col grid-col-6">
                                            <div class="video-player">
                                                    <iframe src="https://www.youtube.com/embed/rZsH88zNxRw"></iframe>
                                            </div>
                                    </div>
                                    <div class="grid-col grid-col-6 clear-fix">
                                            <h2>Learn More About Us From Video</h2>
                                            <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo at susp. Vivamus orci urna, ornare vitae tellus in, condimentum imperdiet eros. Maecea accumsan, massa nec vulputate congue.</p>
                                            <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                                            <br/>
                                            <br/>
                                            <br/>
                                            <br/>
                                            <a href="page-about-us.html" class="cws-button bt-color-3 border-radius alt icon-right float-right">Watch More<i class="fa fa-angle-right"></i></a>
                                    </div>
                            </div>
                    </div>
            </section>-->
            <!-- / section -->
            <!-- parallax section -->
            <!--<div class="parallaxed">
                <div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
                    <img src="theme/img/parallax.png" alt="">
                </div>
                <div class="them-mask bg-color-3"></div>
                <div class="grid-row center-text">
                   
                </div>
            </div>-->
            <!-- parallax section -->
            <!-- section -->
<!--        <section class="padding-section">
                    <div class="grid-row clear-fix">
                            <h2 class="center-text">Community Life</h2>
                            <div class="grid-col-row">
                                    <div class="grid-col grid-col-4">
                                            <div class="community color-1">
                                                    <h3>Events</h3>
                                                    <div class="community-logo">
                                                            <i class="flaticon-calendar"></i>
                                                    </div>
                                                    <div class="info-block">
                                                            <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis. Aliquam lorem ante, dapibus in.</p>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="grid-col grid-col-4">
                                            <div class="community">
                                                    <h3>Blog</h3>
                                                    <div class="community-logo">
                                                            <i class="flaticon-pencil"></i>
                                                    </div>
                                                    <div class="info-block">
                                                            <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis. Aliquam lorem ante, dapibus in.</p>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="grid-col grid-col-4">
                                            <div class="community color-2">
                                                    <h3>Publishers</h3>
                                                    <div class="community-logo">
                                                            <i class="flaticon-book1"></i>
                                                    </div>
                                                    <div class="info-block">
                                                            <p>Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis. Aliquam lorem ante, dapibus in.</p>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
            </section>-->
            <!-- / section -->
          
            <!-- section -->
            <section class="fullwidth-background testimonial padding-section">

            <div class="grid-row">

                <h2 class="center-text">Testimonials</h2>

                <div class="owl-carousel testimonials-carousel">

                    <div class="gallery-item">

                        <div class="quote-avatar-author clear-fix"><img src="theme/img/images/Testimonials/testimonialboy.png" data-at2x="theme/img/images/Testimonials/testimonialboy.png" alt=""><div class="author-info">Adamaris <br><span>(UK)</span></div></div>

                        <p>Wonderful experience with “BestAssignmentExperts.com”. Will be back with another work. </p>

                    </div>

                    <div class="gallery-item">

                        <div class="quote-avatar-author clear-fix"><img src="theme/img/images/Testimonials/testimonialgirl.png" data-at2x="theme/img/images/Testimonials/testimonialgirl.png" alt=""><div class="author-info">John<br><span>(UK)</span></div></div>

                        <p>Its been Really Wonderful to use Assignment Service,Will definitely come back for more assignment.</p>

                    </div>

                    <div class="gallery-item">

                        <div class="quote-avatar-author clear-fix"><img src="theme/img/images/Testimonials/testimonialboy.png" data-at2x="theme/img/images/Testimonials/testimonialboy.png" alt=""><div class="author-info">Darren<br><span>(UK)</span></div></div>

                        <p>Best Assignment Experts is Quick and effective service, On time and great content.Thanks for helping me and certailny use the service again.</p>

                    </div>

                </div>

            </div>

        </section>
            <!-- / section -->
            <!-- google map -->
           <!-- <div class="wow fadeInUp">
                <div id="map" class="google-map"></div>
            </div> -->
            <!-- / google map -->
        </div>
        <!-- / content -->
        <!-- footer -->

      @include('layout.footer')  
        
    
</html>
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
                $scope.back = function (e)
                {
                    $scope.showPlaceOrderForm = 'true';
                    e.preventDefault();

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
$(".animationload").delay(1).fadeOut("slow");
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
       // maxDate: '+6M',
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

 
<script>       
    $(document).ready(function()
    {  
    $("#confirm").fadeOut(15000);
    });
    </script>
