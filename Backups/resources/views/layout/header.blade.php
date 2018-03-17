<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>
    <title>Home - Best Assignment Experts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <!-- style -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <!--<link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="fi/flaticon.css">
    <link rel="stylesheet" href="css/main.css">
    
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" href="css/animate.css"> -->
    <!--styles -->
    
      {!! Html::style('theme/img/favicon.png') !!}
    
    {!! Html::style('theme/css/font-awesome.css') !!}
    {!! Html::style('theme/fi/flaticon.css') !!}
    {!! Html::style('theme/css/main.css') !!}
    {!! Html::style('theme/css/jquery.fancybox.css') !!}
    {!! Html::style('theme/css/owl.carousel.css') !!}
    {!! Html::style('theme/rs-plugin/css/settings.css') !!}
    {!! Html::style('theme/css/animate.css') !!}
    {!! Html::style('dashboard_theme/plugins/datepicker/datepicker3.css') !!}

        {!! Html::style('dashboard_theme/plugins/datatables/dataTables.bootstrap.css') !!}

        {!! Html::style('dashboard_theme/plugins/daterangepicker/daterangepicker.css') !!}

</head> 

    <!-- page header -->
    <header class="only-color">
        <!-- header top panel -->
        <div class="page-header-top">
            <div class="grid-row clear-fix">
                <address>
                    <a href="#" class="phone-number"><i class="fa fa-phone"></i>(+61) 0280065002</a>
                    <a href="#" class="email"><i class="fa fa-envelope-o"></i>sales@bestassignmentexperts.com</a>
                    <a href="#" class="email"><i class="fa fa-skype"></i>BestAssignment Expert</a>                    

                </address>
                <div class="header-top-panel">
                    <!-- <a href="" class="fa fa-shopping-cart"></a> -->
                    <!--<a href="<?= URL::to('/users/login') ?>" class="fa fa-user login-icon search-open" style="width: 150px;"> &nbsp;Login/Register</a>&nbsp;-->
                    <a href="<?= URL::to('/place-order') ?>"  class="login-icon search-open" style="width:140px;">&nbsp;<i class="fa fa-shopping-cart "></i> Place Order</a>
                   <!--  <div id="top_social_links_wrapper">
                        <div class="share-toggle-button"><i class="share-icon fa fa-share-alt"></i></div>
                        <div class="cws_social_links"><a href="https://plus.google.com/" class="cws_social_link" title="Google +"><i class="share-icon fa fa-google-plus" style="transform: matrix(0, 0, 0, 0, 0, 0);"></i></a><a href="http://twitter.com/" class="cws_social_link" title="Twitter"><i class="share-icon fa fa-twitter"></i></a><a href="http://facebook.com" class="cws_social_link" title="Facebook"><i class="share-icon fa fa-facebook"></i></a><a href="http://dribbble.com" class="cws_social_link" title="Dribbble"><i class="share-icon fa fa-dribbble"></i></a></div>
                    </div> -->
                   <!--  <a href="#" class="search-open"><i class="fa fa-search"></i></a>
                    <form action="#" class="clear-fix">
                        <input type="text" placeholder="Search" class="clear-fix">
                    </form> -->

                </div>
            </div>
        </div>
        <!-- / header top panel -->
        <!-- sticky menu -->
        <div class="sticky-wrapper">
            <div class="sticky-menu">
                <div class="grid-row clear-fix">
                    <!-- logo -->
                    <a href="/" class="logo">
                        <img src="/theme/img/images/logo.jpg"  data-at2x="/theme/img/images/logo.jpg" alt>
                        
                    </a>
                    <!-- / logo -->
                    <nav class="main-nav">
                        <ul class="clear-fix">
                            <li>
                                <a href="<?= URL::to('/') ?>" class="active">Home</a>
                            </li>
                            
                            <li class="col-sm-2">
                                <a href="<?= URL::to('about-us') ?>">About-Us</a>
                               
                            </li>
                            <li class="megamenu">
                                <a href="<?= URL::to('#') ?>">Our Services</a>
                                <!-- sub mega menu -->
                                <ul class="clear-fix" >
                                    <li class="col-sm-2"><div class="header-megamenu">Management Assignment Help</div>
                                        <ul>
                                             
                                            <li><a href="<?= URL::to('/project-management-help') ?>">Project Management <br>&nbsp;Help</a></li>
                                            
                                            <li><a href="<?= URL::to('/market-analysis-assignment-help') ?>">Market Analysis <br>&nbsp; Assignment Help</a></li>
                                            <!-- <li><a href="<?= URL::to('/market-research-assignment-help') ?>">Market Research<br>&nbsp; Assignment Help</a></li> -->
                                            <li><a href="<?= URL::to('/human-resource-assignment-help') ?>">Human Resource <br>&nbsp;Assignment Help</a></li>
                                             <li><a href="<?= URL::to('/management-assignment-help') ?>">Management Assignment<br>&nbsp; Help</a></li>
                                            <li><a href="<?= URL::to('/hospitality-management') ?>">Hospitality Management</a></li>
                                            <li>
                                                <br>



                                            </li>
                                            <!-- <li><a href="page-faq.html">Faq Page</a></li>
                                            <li><a href="page-sitemap.html">SiteMap</a></li>
                                            <li><a href="page-404.html">404 Page</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <div class="header-megamenu">Computer Assignment Help</div>
                                        <ul>
                                            
                                            <li><a href="<?= URL::to('/data-base-management-system') ?>">Database Management<br>&nbsp; System</a></li>
                                            <!-- <li><a href="<?= URL::to('/information-system') ?>">Information System</a></li> -->
                                            <li><a href="<?= URL::to('/information-technology-assignment-help') ?>">Information Technology <br>&nbsp;Assignment Help</a></li>
                                            <li><a href="<?= URL::to('/content-management-system') ?>">Content Management <br>&nbsp;System</a></li>
                                            

                                        </ul>
                                    </li>

                                    <li class="col-sm-2"><div class="header-megamenu">Marketing Assignment<br>&nbsp; Help</div>
                                        <ul>
                                            <!-- <li><a href="<?= URL::to('/email-marketing') ?>">Email Marketing</a></li> -->
                                            <!-- <li><a href="<?= URL::to('/compaign-management') ?>">Campaign management</a></li> -->
                                            <!-- <li><a href="<?= URL::to('/press-release') ?>">Press Release(Pr)</a></li> -->
                                            <li><a href="<?= URL::to('/social-media-marketing') ?>">Social Media <br>&nbsp;Marketing</a></li>
                                            <li><a href="<?= URL::to('/search-engine-optimization') ?>">Search Engine <br>&nbsp;Optimization</a></li>
                                            <li><a href="<?= URL::to('/marketing-assignment-help') ?>">Marketing Assignment 
                                                    <br>&nbsp;Help</a></li>
                                            <!-- <li><a href="<?= URL::to('/marketing-assignment-help') ?>">Marketing Assignment<br>&nbsp; Help</a></li> -->
                                        </ul>
                                        <img src="/theme/img/images/dropdown/1.png" alt>
                                    </li>
                                    <li class="col-sm-2"><div class="header-megamenu">Computer Programming Help</div>
                                        <ul>
                                        <li><a href="<?= URL::to('/computer-assignment') ?>">Computer Assignment<br>&nbsp; Help</a></li>
                                             <li><a href="<?= URL::to('/computer-programming-help') ?>">Computer Programming<br>&nbsp; Help</a></li>
                                            <li>
                                            <a href="<?= URL::to('/intro-to-datasructure') ?>">Introduction to Data <br>&nbsp;Structure</a></li>
                                            <!-- <li><a href="<?= URL::to('/intro-to-php') ?>">Introduction to PHP</a></li> -->
                                            <!-- <li><a href="<?= URL::to('/intro-to-js') ?>">Introduction to<br>&nbsp; Javascript</a></li> -->
                                            <!-- <li><a href="<?= URL::to('/intro-to-dotnet') ?>">Introduction to .Net<br>&nbsp; Framework</a></li>
                                            <li><a href="<?= URL::to('/intro-to-c-programming') ?>">Introduction to C<br>&nbsp; Programming</a></li> -->
                                        </ul>
                                        <img src="/theme/img/images/dropdown/2.png" alt>
                                    </li>
                                     
                                    <li><div class="header-megamenu">Academic Assignment Help</div>
                                        <ul>
                                            <li><a href="<?= URL::to('/academic-writing-services') ?>">Academic Writing<br>&nbsp; Services</a></li>
                                            <li><a href="<?= URL::to('/cheap-assignment-writing-services') ?>">Cheap Assignment<br>&nbsp; Writing Services</a></li>

                                            <li><a href="<?= URL::to('/best-assignment-writing-services') ?>">Best Assignment<br>&nbsp; Writing Services</a></li>
                                            
                                            
                                        </ul>
                                        <img src="/theme/img/images/dropdown/4.png" alt>
                                    </li>
                                    <li class="col-sm-2"><div class="header-megamenu">Technical Assignment Help</div>
                                        <ul>
                                             <li><a href="<?= URL::to('/technical-writing-services') ?>">Technical Writing <br>&nbsp;Services</a></li>

                                            <li><a href="<?= URL::to('/best-assignment-help') ?>">Best Assignment<br> &nbsp; Help</a></li>
                                            <li><a href="<?= URL::to('/article-writing-help') ?>">Article Writing<br> &nbsp;Help</a></li>
                                        </ul>
                                        <img src="/theme/img/images/dropdown/3.png" alt>
                                    </li> 
                                </ul>
                                <!-- / sub mega menu -->
                            </li>
                            <li>
                                <a href="<?= URL::to('/subjects') ?>">Subjects</a>
                                <!-- sub menu -->
                                
                                <!-- / sub menu -->
                            </li>
                            <li>
                                <a href="<?= URL::to('/faq') ?>">Faq</a>
                                <!-- sub menu -->
                               
                                <!-- / sub menu -->
                            </li>
                            <li>
                                <a href="<?= URL::to('/offers') ?>">Offers</a>
                                <!-- sub menu -->
                               
                                <!-- / sub menu -->
                            </li>
                            <li>
                                <a href="<?= URL::to('/contact-us')?>">Contact Us</a>
                            </li>
                            <li>
                                <a href="<?= URL::to('/users/login') ?>">Login/Register</a>
                                <!-- sub menu -->
                               
                                <!-- / sub menu -->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sticky menu -->
        <!--Begin Comm100 Live Chat Code-->
<div id="comm100-button-136"></div>
<script type="text/javascript">
  var Comm100API=Comm100API||{};(function(t){function e(e){var a=document.createElement("script"),c=document.getElementsByTagName("script")[0];a.type="text/javascript",a.async=!0,a.src=e+t.site_id,c.parentNode.insertBefore(a,c)}t.chat_buttons=t.chat_buttons||[],t.chat_buttons.push({code_plan:136,div_id:"comm100-button-136"}),t.site_id=223133,t.main_code_plan=136,e("https://chatserver.comm100.com/livechat.ashx?siteId="),setTimeout(function(){t.loaded||e("https://hostedmax.comm100.com/chatserver/livechat.ashx?siteId=")},5e3)})(Comm100API||{})
</script>
<!--End Comm100 Live Chat Code-->
<style>
#comm100-float-button-2{
background: url(http://mobilexachtay.vn/images/noidung/images/Live_Support.gif) 0% 0% no-repeat scroll transparent !important;
    left: 1100px !important;
    top: 570px !important;
    bottom:0px !important;
}
</style>
    </header>
