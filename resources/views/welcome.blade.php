<!DOCTYPE html>
<html lang="en">
<head>
<title>Australia Best Assignment Help Online With Best Australian Experts</title>
<meta name="description" content="BestAssignmentexperts is an online Platform for all Academic Assignment writing service.Hire Australian,US,Uk assignment writing experts">
<meta name="keywords" content="Best Assignment Help, assignment help online, online assignment help, buy assignment, assignment helper, assignment expert, assignment writing, assignment writing service "/>

  @include('layout.header')

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" hreflang="en"/>
 
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" hreflang="en"/>


   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
   <script src="/theme/js/jquery.min.js"></script>  
   
   <style>
   #ui-datepicker-div {
   top: 370px!important;
}
.high-quality{
	background: url(/theme/img/high-quality.png);
	padding: 1px;
    background-repeat: no-repeat;
    background-position: center center;
}
  </style>  

 @if(Session::has('send_mail_callback'))
                                     <div class="info-boxes confirmation-message" id="confirm"><span>{{session()->get('send_mail_callback')}}</span></div>
         @endif
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
         
       <div class="container-fluid">
    <div class="row">
        <div id="sg-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!--<ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1" class=""></li>
                <li data-target="#carousel" data-slide-to="2" class=""></li>
                <li data-target="#carousel" data-slide-to="3" class=""></li>
            </ol>-->
            <!-- Carousel items -->
          <div class="carousel-inner carousel-zoom">
                <div class="item active"><img class="img-responsive" alt="Best-Assignment-Help" src="/theme/img/images/SliderImages/Best-Assignment-Help.png">
                  <div class="carousel-caption">
                    <h1  data-animation="animated zoomInLeft" class="cap-txt ">We are Happy to assist you</h1>
                    <p data-animation="animated bounceInDown">Don’t worry about the complexity of Assignments, we are here to help you out.</p>
                   
                  </div>
                </div>
               <div class="item"><img class="img-responsive" alt="assignment-expert" src="/theme/img/images/SliderImages/assignment-expert.jpg">
                  <div class="carousel-caption">
                    <h1 data-animation="animated zoomInLeft" class="cap-txt">We have the best Experts for you</h1>
                    <p data-animation="animated bounceInDown">Delivering premium quality work is our first priority. We have<br/>mostly PhD experts with ample of experience in writing.</p>
                    
                  </div>
                </div>
                <div class="item"><img class="img-responsive" alt="assignment-helper" src="/theme/img/images/SliderImages/assignment-helper.png">
                  <div class="carousel-caption animated slideInLeft">
                    <h1 data-animation="animated zoomInLeft" class="cap-txt">Trust the instinct of 1000's of students.</h1>
                    <p data-animation="animated bounceInDown">As a part of our journey towards success, we are<br/>now a trust of more than thousand students.</p>
                  
                  </div>
                </div>
                    <div class="item"><img class="img-responsive" alt="assignment-help-online" src="/theme/img/images/SliderImages/assignment-help-online.png">
                  <div class="carousel-caption animated slideInLeft">
                    <h1 data-animation="animated zoomInLeft" class="cap-txt">Order now to improve your grades</h1>
                    <p data-animation="animated bounceInDown">We have the best writing experts for<br/>you in affordable price.</p>
                  
                  </div>
                </div>

            <!-- Carousel nav 
            <a class="carousel-control left" href="#sg-carousel" data-slide="prev">‹</a>
            <a class="carousel-control right" href="#sg-carousel" data-slide="next">›</a> -->
        </div> 
    </div>
</div>
        


              <div class="place-order-mobile-hide place_order_welcome">




     <main ng-app="myApp" ng-controller="myCtrl" ng-cloak>
    <section class="signup-placeorder" >
        <div class="grid-row">
            <div class="login-block" >
                <div class="logo place-order">
                                 
              @if(Session('status'))
<div class = "alert alert-success">
  {{Session('status')}}
</div>
@endif  
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
                    <div class="form-group">

                        <div class="grid-buttons ">
                        <div class="row grid-flexs">
                            <button ng-click="count = count - 1" ng-disabled="count < 1" class="cws-button border-radius icon-left col-sm-1"><i class="fa fa-minus"></i></button>
                            
                            <input class="login-input col-sm-10 ng-pristine ng-valid" placeholder="Pages" name="count" ng-model="count" type="text" numbers-only>

                            <button ng-click="count = count + 1" class="cws-button border-radius icon-left col-sm-1"><i class="fa fa-plus"></i></button>

                            </div>
                           @{{count * 250}}  Words

                        </div>
                 
                    </div>
                    
                    <button ng-click="placeOrderDetails(place_order, count)" class="button-fullwidth cws-button bt-color-3 border-radius button-ordering">Submit</button>
                </form>

                <form class="login-form" name="place-order-signup" ng-if="showPlaceOrderForm != 'true'" action="/create-user-from-place-order-page" method="POST" enctype="multipart/form-data" novalidate="" ng-cloak>
                   <div class="form-group file files-upload">
                        <input type="file" class="login-input file-upload" placeholder="Choose a File" name="uploaded_file1[]" required="" multiple="true">
	
                    <span class="input-icon file_span">
                            <i class="fa fa-paperclip file_fa"></i>
                        </span>    
                    </div>
                    <div class="form-group refercence">
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
                    
                    <div class="form-group form-flex order-form-mrgin">



                  <select name="country_code" value="{{ Input::old('country_code') }}" class="setheight dara form-control select-height set-height" ng-init="initialize()"> 
                     <option value="+1" {{ ((Input::old("country_code"))=="+1")? "selected":""  }}>USA
                    <option value="+44" {{ ((Input::old("country_code"))=="+44")? "selected":""  }}>UK 
                    
                    <option value="+213" {{ ((Input::old("country_code"))=="+213")? "selected":""  }}>Algeria 
                    <option value="+376" {{ ((Input::old("country_code"))=="+376")? "selected":""  }}>Andorra  
                    <option value="+244" {{ ((Input::old("country_code"))=="+244")? "selected":""  }}>Angola
                    <option value="+1264" {{ ((Input::old("country_code"))=="+1264")? "selected":""  }}>Anguilla 
                    <option value="+1268" {{ ((Input::old("country_code"))=="+1268")? "selected":""  }}>Antigua &amp; Barbuda 
                    <option value="+599" {{ ((Input::old("country_code"))=="+599")? "selected":""  }}>Antilles (Dutch)  
                    <option value="+54" {{ ((Input::old("country_code"))=="+54")? "selected":"" }}>Argentina 
                    <option value="+374" {{ ((Input::old("country_code"))=="+374")? "selected":""  }}>Armenia 
                    <option value="+297" {{ ((Input::old("country_code"))=="+297")? "selected":""  }}>Aruba 
                    <option value="+247" {{ ((Input::old("country_code"))=="+247")? "selected":""  }}>Ascension Island 
                    <option value="+61" {{ ((Input::old("country_code"))=="+61")? "selected":""  }}>Australia 
                    <option value="+43" {{ ((Input::old("country_code"))=="+43")? "selected":""  }}>Austria 
                    <option value="+994" {{ ((Input::old("country_code"))=="+994")? "selected":""  }}>Azerbaijan 
                    <option value="+1242" {{ ((Input::old("country_code"))=="+1242")? "selected":""  }}>Bahamas 
                    <option value="+973" {{ ((Input::old("country_code"))=="+973")? "selected":""  }}>Bahrain 
                    <option value="+880" {{ ((Input::old("country_code"))=="+880")? "selected":""  }}>Bangladesh 
                    <option value="+1246" {{ ((Input::old("country_code"))=="+1246")? "selected":"" }}>Barbados 
                    <option value="+375" {{ ((Input::old("country_code"))=="+375")? "selected":""  }}>Belarus 
                    <option value="+32" {{ ((Input::old("country_code"))=="+32")? "selected":""  }}>Belgium 
                    <option value="+501" {{ ((Input::old("country_code"))=="+501")? "selected":""  }}>Belize 
                    <option value="+229" {{ ((Input::old("country_code"))=="+299")? "selected":""  }}>Benin 
                    <option value="+1441" {{ ((Input::old("country_code"))=="+1441")? "selected":""  }}>Bermuda 
                     <option value="+975" {{ ((Input::old("country_code"))=="+975")? "selected":""  }}>Bhutan
                    <option value="+591" {{ ((Input::old("country_code"))=="+591")? "selected":""  }}>Bolivia 
                    <option value="+387" {{ ((Input::old("country_code"))=="+387")? "selected":""  }}>Bosnia Herzegovina  
                    <option value="+267" {{ ((Input::old("country_code"))=="+267")? "selected":""  }}>Botswana  
                    <option value="+55" {{ ((Input::old("country_code"))=="+55")? "selected":""  }}>Brazil  
                    <option value="+673" {{ ((Input::old("country_code"))=="+673")? "selected":"" }}>Brunei 
                    <option value="+359" {{ ((Input::old("country_code"))=="+359")? "selected":""  }}>Bulgaria 
                    <option value="+226" {{ ((Input::old("country_code"))=="+226")? "selected":"" }}>Burkina Faso 
                    <option value="+257" {{ ((Input::old("country_code"))=="+257")? "selected":""  }}>Burundi 
                    <option value="+855" {{ ((Input::old("country_code"))=="+855")? "selected":""  }}>Cambodia
                    <option value="+237" {{ ((Input::old("country_code"))=="+237")? "selected":""  }}>Cameroon 
                    <option value="+1" {{ ((Input::old("country_code"))=="+1")? "selected":"" }}>Canada 
                    <option value="+238" {{ ((Input::old("country_code"))=="+238")? "selected":""  }}>Cape Verde Islands 
                    <option value="+1345" {{ ((Input::old("country_code"))=="+1345")? "selected":""  }}>Cayman Islands 
                    <option value="+236" {{ ((Input::old("country_code"))=="+236")? "selected":""  }}>Central African Republic 
                    <option value="+56" {{ ((Input::old("country_code"))=="+56")? "selected":""  }}>Chile 
                    <option value="+86" {{ ((Input::old("country_code"))=="+86")? "selected":""  }}>China 
                    <option value="+57" {{ ((Input::old("country_code"))=="+57")? "selected":""  }}>Colombia 
                    <option value="+269" {{ ((Input::old("country_code"))=="+269")? "selected":""  }}>Comoros 
                    <option value="+242" {{ ((Input::old("country_code"))=="+242")? "selected":""  }}>Congo 
                    <option value="+682" {{ ((Input::old("country_code"))=="+682")? "selected":""  }}>Cook Islands
                    <option value="+506" {{ ((Input::old("country_code"))=="+506")? "selected":"" }}>Costa Rica 
                    <option value="+385" {{ ((Input::old("country_code"))=="+385")? "selected":""  }}>Croatia 
                    <option value="+53" {{ ((Input::old("country_code"))=="+53")? "selected":""  }}>Cuba 
                    <option value="+90392" {{ ((Input::old("country_code"))=="+90392")? "selected":""  }}>Cyprus North 
                    <option value="+357" {{ ((Input::old("country_code"))=="+357")? "selected":"" }}>Cyprus South 
                    <option value="+42" {{ ((Input::old("country_code"))=="+42")? "selected":"" }}>Czech Republic 
                    <option value="+45" {{ ((Input::old("country_code"))=="+45")? "selected":""  }}>Denmark 
                    <option value="+2463" {{ ((Input::old("country_code"))=="+2463")? "selected":""  }}>Diego Garcia 
                    <option value="+253" {{ ((Input::old("country_code"))=="+253")? "selected":""  }}>Djibouti 
                    <option value="+1809" {{ ((Input::old("country_code"))=="+1809")? "selected":"" }}>Dominica 
                    <option value="+1809" {{ ((Input::old("country_code"))=="+1809")? "selected":""  }}>Dominican Republic 
                    <option value="+593" {{ ((Input::old("country_code"))=="+593")? "selected":""  }}>Ecuador 
                    <option value="+20" {{ ((Input::old("country_code"))=="+20")? "selected":""  }}>Egypt 
                    <option value="+353" {{ ((Input::old("country_code"))=="+553")? "selected":""  }}>Eire 
                    <option value="+503" {{ ((Input::old("country_code"))=="+503")? "selected":""  }}>El Salvador
                    <option value="+240" {{ ((Input::old("country_code"))=="+240")? "selected":""  }}>Equatorial Guinea 
                    <option value="+291" {{ ((Input::old("country_code"))=="+291")? "selected":""  }}>Eritrea 
                    <option value="+372" {{ ((Input::old("country_code"))=="+372")? "selected":""  }}>Estonia 
                    <option value="+251" {{ ((Input::old("country_code"))=="+251")? "selected":""  }}>Ethiopia 
                    <option value="+500" {{ ((Input::old("country_code"))=="+500")? "selected":""  }}>Falkland Islands 
                    <option value="+298" {{ ((Input::old("country_code"))=="+298")? "selected":""  }}>Faroe Islands 
                    <option value="+679" {{ ((Input::old("country_code"))=="+679")? "selected":"" }}>Fiji 
                    <option value="+358" {{ ((Input::old("country_code"))=="+358")? "selected":""  }}>Finland 
                    <option value="+33" {{ ((Input::old("country_code"))=="+33")? "selected":"" }}>France 
                    <option value="+594" {{ ((Input::old("country_code"))=="+594")? "selected":""  }}>French Guiana 
                    <option value="+689" {{ ((Input::old("country_code"))=="+689")? "selected":""  }}>French  
                    <option value="+241" {{ ((Input::old("country_code"))=="+241")? "selected":""  }}>Gabon 
                    <option value="+220" {{ ((Input::old("country_code"))=="+220")? "selected":"" }}>Gambia 
                    <option value="+7880" {{ ((Input::old("country_code"))=="+7880")? "selected":""  }}>Georgia 
                    <option value="+49" {{ ((Input::old("country_code"))=="+49")? "selected":"" }}>Germany  
                    <option value="+233" {{ ((Input::old("country_code"))=="+233")? "selected":""}}>Ghana 
                    <option value="+350" {{ ((Input::old("country_code"))=="+350")? "selected":"" }}>Gibraltar
                    <option value="+30" {{ ((Input::old("country_code"))=="+30")? "selected":""  }}>Greece
                    <option value="+299" {{ ((Input::old("country_code"))=="+299")? "selected":""  }}>Greenland 
                    <option value="+1473" {{ ((Input::old("country_code"))=="+1473")? "selected":""  }}>Grenada  
                    <option value="+590" {{ ((Input::old("country_code"))=="+590")? "selected":""  }}>Guadeloupe 
                    <option value="+671" {{ ((Input::old("country_code"))=="+671")? "selected":""  }}>Guam 
                    <option value="+502" {{ ((Input::old("country_code"))=="+502")? "selected":"" }}>Guatemala 
                    <option value="+224" {{ ((Input::old("country_code"))=="+224")? "selected":""  }}>Guinea 
                    <option value="+245" {{ ((Input::old("country_code"))=="+245")? "selected":""  }}>Guinea - Bissau  
                    <option value="+592" {{ ((Input::old("country_code"))=="+592")? "selected":""  }}>Guyana 
                    <option value="+509" {{ ((Input::old("country_code"))=="+509")? "selected":""  }}>Haiti 
                    <option value="+504" {{ ((Input::old("country_code"))=="+504")? "selected":""  }}>Honduras 
                    <option value="+852" {{ ((Input::old("country_code"))=="+852")? "selected":""  }}>Hong Kong  
                    <option value="+36" {{ ((Input::old("country_code"))=="+36")? "selected":"" }}>Hungary 
                    <option value="+354" {{ ((Input::old("country_code"))=="+354")? "selected":""  }}>Iceland 
                    <option value="+91" {{ ((Input::old("country_code"))=="+91")? "selected":""  }}>India 
                    <option value="+62" {{ ((Input::old("country_code"))=="+62")? "selected":""  }}>Indonesia 
                    <option value="+98" {{ ((Input::old("country_code"))=="+98")? "selected":""  }}>Iran 
                    <option value="+964" {{ ((Input::old("country_code"))=="+964")? "selected":""  }}>Iraq 
                    <option value="+972" {{ ((Input::old("country_code"))=="+972")? "selected":""  }}>Israel  
                    <option value="+39" {{ ((Input::old("country_code"))=="+39")? "selected":""  }}>Italy 
                    <option value="+225" {{ ((Input::old("country_code"))=="+225")? "selected":"" }}>Ivory Coast 
                    <option value="+1876" {{ ((Input::old("country_code"))=="+1876")? "selected":""  }}>Jamaica  
                    <option value="+81" {{ ((Input::old("country_code"))=="+81")? "selected":""  }}>Japan 
                    <option value="+962" {{ ((Input::old("country_code"))=="+962")? "selected":""  }}>Jordan 
                    <option value="+7"{{ ((Input::old("country_code"))=="+7")? "selected":""  }}>Kazakhstan  
                    <option value="+254" {{ ((Input::old("country_code"))=="+254")? "selected":""  }}>Kenya 
                    <option value="+686" {{ ((Input::old("country_code"))=="+686")? "selected":"" }}>Kiribati 
                    <option value="+850" {{ ((Input::old("country_code"))=="+850")? "selected":""  }}>Korea North  
                    <option value="+82" {{ ((Input::old("country_code"))=="+82")? "selected":"" }}>Korea South 
                    <option value="+965" {{ ((Input::old("country_code"))=="+965")? "selected":""  }}>Kuwait 
                    <option value="+996" {{ ((Input::old("country_code"))=="+996")? "selected":""  }}>Kyrgyzstan 
                    <option value="+856" {{ ((Input::old("country_code"))=="+856")? "selected":""  }}>Laos 
                    <option value="+371" {{ ((Input::old("country_code"))=="+371")? "selected":"" }}>Latvia 
                    <option value="+961" {{ ((Input::old("country_code"))=="+961")? "selected":""  }}>Lebanon 
                    <option value="+266" {{ ((Input::old("country_code"))=="+266")? "selected":""  }}>Lesotho 
                    <option value="+231" {{ ((Input::old("country_code"))=="+231")? "selected":""  }}>Liberia 
                    <option value="+218" {{ ((Input::old("country_code"))=="+218")? "selected":""  }}>Libya 
                    <option value="+417" {{ ((Input::old("country_code"))=="+417")? "selected":""  }}>Liechtenstein 
                    <option value="+370" {{ ((Input::old("country_code"))=="+370")? "selected":"" }}>Lithuania 
                    <option value="+352" {{ ((Input::old("country_code"))=="+352")? "selected":""  }}>Luxembourg 
                    <option value="+853" {{ ((Input::old("country_code"))=="+853")? "selected":""  }}>Macao
                    <option value="+389" {{ ((Input::old("country_code"))=="+389")? "selected":""  }}>Macedonia 
                    <option value="+261" {{ ((Input::old("country_code"))=="+261")? "selected":""  }}>Madagascar 
                    <option value="+265" {{ ((Input::old("country_code"))=="+265")? "selected":"" }}>Malawi  
                    <option value="+60" {{ ((Input::old("country_code"))=="+60")? "selected":""  }}>Malaysia 
                    <option value="+960" {{ ((Input::old("country_code"))=="+960")? "selected":""  }}>Maldives 
                    <option value="+223" {{ ((Input::old("country_code"))=="+223")? "selected":""  }}>Mali  
                    <option value="+356" {{ ((Input::old("country_code"))=="+356")? "selected":""  }}>Malta 
                    <option value="+692" {{ ((Input::old("country_code"))=="+692")? "selected":""  }}>Marshall Islands  
                    <option value="+596" {{ ((Input::old("country_code"))=="+596")? "selected":""  }}>Martinique 
                    <option value="+222" {{ ((Input::old("country_code"))=="222")? "selected":""  }}>Mauritania  
                    <option value="+269" {{ ((Input::old("country_code"))=="+269")? "selected":""  }}>Mayotte 
                    <option value="+52" {{ ((Input::old("country_code"))=="+52")? "selected":"" }}>Mexico 
                    <option value="+691" {{ ((Input::old("country_code"))=="+691")? "selected":""  }}>Micronesia 
                    <option value="+373" {{ ((Input::old("country_code"))=="+373")? "selected":""  }}>Moldova 
                    <option value="+377" {{ ((Input::old("country_code"))=="+377")? "selected":"" }}>Monaco
                    <option value="+976" {{ ((Input::old("country_code"))=="+976")? "selected":"" }}>Mongolia 
                    <option value="+1664" {{ ((Input::old("country_code"))=="+1664")? "selected":"" }}>Montserrat 
                    <option value="+212" {{ ((Input::old("country_code"))=="+212")? "selected":"" }}>Morocco 
                    <option value="+258" {{ ((Input::old("country_code"))=="+258")? "selected":""  }}>Mozambique 
                    <option value="+95" {{ ((Input::old("country_code"))=="+95")? "selected":""  }}>Myanmar 
                    <option value="+264" {{ ((Input::old("country_code"))=="+264")? "selected":""  }}>Namibia 
                    <option value="+674" {{ ((Input::old("country_code"))=="+674")? "selected":""  }}>Nauru) 
                    <option value="+977" {{ ((Input::old("country_code"))=="+977")? "selected":""  }}>Nepal 
                    <option value="+31" {{ ((Input::old("country_code"))=="+31")? "selected":""  }}>Netherlands 
                    <option value="+687" {{ ((Input::old("country_code"))=="+687")? "selected":""  }}>New Caledonia  
                    <option value="+64" {{ ((Input::old("country_code"))=="+64")? "selected":""}}>New Zealand 
                    <option value="+505" {{ ((Input::old("country_code"))=="+505")? "selected":""  }}>Nicaragua 
                    <option value="+227" {{ ((Input::old("country_code"))=="+227")? "selected":""  }}>Niger  
                    <option value="+234" {{ ((Input::old("country_code"))=="+234")? "selected":""  }}>Nigeria 
                    <option value="+683" {{ ((Input::old("country_code"))=="+683")? "selected":""  }}>Niue 
                    <option value="+672" {{ ((Input::old("country_code"))=="+672")? "selected":""  }}>Norfolk Islands  
                    <option value="+670" {{ ((Input::old("country_code"))=="+670")? "selected":""  }}>Northern Marianas  
                    <option value="+47" {{ ((Input::old("country_code"))=="+47")? "selected":""}}>Norway 
                    <option value="+968" {{ ((Input::old("country_code"))=="+968")? "selected":""  }}>Oman 
                    <option value="+680" {{ ((Input::old("country_code"))=="+680")? "selected":""  }}>Palau  
                    <option value="+507" {{ ((Input::old("country_code"))=="+507")? "selected":"" }}>Panama 
                    <option value="+675" {{ ((Input::old("country_code"))=="+675")? "selected":"" }}>Papua New Guinea 
                    <option value="+595" {{ ((Input::old("country_code"))=="+595")? "selected":""  }}>Paraguay 
                    <option value="+51" {{ ((Input::old("country_code"))=="+51")? "selected":""  }}>Peru
                    <option value="+63" {{ ((Input::old("country_code"))=="+63")? "selected":""  }}>Philippines 
                    <option value="+48" {{ ((Input::old("country_code"))=="+48")? "selected":""  }}>Poland  
                    <option value="+351" {{ ((Input::old("country_code"))=="+351")? "selected":""  }}>Portugal  
                    <option value="+1787" {{ ((Input::old("country_code"))=="+1787")? "selected":""  }}>Puerto Rico 
                    <option value="+974" {{ ((Input::old("country_code"))=="+974")? "selected":""  }}>Qatar  
                    <option value="+262" {{ ((Input::old("country_code"))=="+262")? "selected":"" }}>Reunion  
                    <option value="+40" {{ ((Input::old("country_code"))=="+40")? "selected":""  }}>Romania  
                    <option value="+7" {{ ((Input::old("country_code"))=="+7")? "selected":""  }}>Russia 
                    <option value="+250" {{ ((Input::old("country_code"))=="+250")? "selected":"" }}>Rwanda 
                    <option value="+378" {{ ((Input::old("country_code"))=="+378")? "selected":"" }}>San Marino 
                    <option value="+239" {{ ((Input::old("country_code"))=="+239")? "selected":""  }}>Sao Tome &amp; Principe 
                    <option value="+966" {{ ((Input::old("country_code"))=="+966")? "selected":""  }}>Saudi Arabia 
                    <option value="+221" {{ ((Input::old("country_code"))=="+221")? "selected":""  }}>Senegal 
                    <option value="+381" {{ ((Input::old("country_code"))=="+381")? "selected":"" }}>Serbia 
                    <option value="+248" {{ ((Input::old("country_code"))=="+248")? "selected":""  }}>Seychelles 
                    <option value="+232" {{ ((Input::old("country_code"))=="+232")? "selected":""  }}>Sierra Leone 
                    <option value="+65" {{ ((Input::old("country_code"))=="+65")? "selected":""  }}>Singapore  
                    <option value="+421" {{ ((Input::old("country_code"))=="+421")? "selected":"" }}>Slovak Republic  
                    <option value="+386" {{ ((Input::old("country_code"))=="+386")? "selected":"" }}>Slovenia  
                    <option value="+677" {{ ((Input::old("country_code"))=="+677")? "selected":""  }}>Solomon Islands 
                    <option value="+252" {{ ((Input::old("country_code"))=="+252")? "selected":""  }}>Somalia  
                    <option value="+27" {{ ((Input::old("country_code"))=="+27")? "selected":"" }}>South Africa 
                    <option value="+34" {{ ((Input::old("country_code"))=="+34")? "selected":""  }}>Spain  
                    <option value="+94" {{ ((Input::old("country_code"))=="+94")? "selected":""  }}>Sri Lanka 
                    <option value="+290" {{ ((Input::old("country_code"))=="+290")? "selected":""  }}>St. Helena  
                    <option value="+1869" {{ ((Input::old("country_code"))=="+1869")? "selected":""  }}>St. Kitts 
                    <option value="+1758" {{ ((Input::old("country_code"))=="+1758")? "selected":""  }}>St. Lucia  
                    <option value="+249" {{ ((Input::old("country_code"))=="+249")? "selected":""  }}>Sudan  
                    <option value="+597" {{ ((Input::old("country_code"))=="+597")? "selected":"" }}>Suriname 
                    <option value="+268" {{ ((Input::old("country_code"))=="+268")? "selected":""  }}>Swaziland  
                    <option value="+46" {{ ((Input::old("country_code"))=="+46")? "selected":"" }}>Sweden  
                    <option value="+41" {{ ((Input::old("country_code"))=="+41")? "selected":"" }}>Switzerland  
                    <option value="+963" {{ ((Input::old("country_code"))=="+963")? "selected":""  }}>Syria  
                    <option value="+886" {{ ((Input::old("country_code"))=="+886")? "selected":""  }}>Taiwan 
                    <option value="+7" {{ ((Input::old("country_code"))=="+7")? "selected":"" }}>Tajikstan  
                    <option value="+66" {{ ((Input::old("country_code"))=="+66")? "selected":""  }}>Thailand 
                    <option value="+228" {{ ((Input::old("country_code"))=="+228")? "selected":""  }}>Togo  
                    <option value="+676" {{ ((Input::old("country_code"))=="+676")? "selected":"" }}>Tonga 
                    <option value="+1868" {{ ((Input::old("country_code"))=="+1868")? "selected":""  }}>Trinidad &amp; Tobago  
                    <option value="+216" {{ ((Input::old("country_code"))=="+216")? "selected":"" }}>Tunisia 
                    <option value="+90" {{ ((Input::old("country_code"))=="+90")? "selected":""  }}>Turkey  
                    <option value="+7" {{ ((Input::old("country_code"))=="+7")? "selected":"" }}>Turkmenistan 
                    <option value="+993" {{ ((Input::old("country_code"))=="+993")? "selected":"" }}>Turkmenistan 
                    <option value="+1649" {{ ((Input::old("country_code"))=="+1649")? "selected":"" }}>Turks &amp; Caicos Islands 
                    <option value="+688" {{ ((Input::old("country_code"))=="+688")? "selected":""  }}>Tuvalu  
                    <option value="+256" {{ ((Input::old("country_code"))=="+256")? "selected":""  }}>Uganda  

                    <option value="+380" {{ ((Input::old("country_code"))=="+380")? "selected":""  }}>Ukraine  
                    <option value="+971" {{ ((Input::old("country_code"))=="+971")? "selected":""  }}>United Arab Emirates  
                    <option value="+598" {{ ((Input::old("country_code"))=="+598")? "selected":""  }}>Uruguay 

                    <option value="+7" {{ ((Input::old("country_code"))=="+7")? "selected":""  }}>Uzbekistan 
                    <option value="+678" {{ ((Input::old("country_code"))=="+678")? "selected":""  }}>Vanuatu 
                    <option value="+379" {{ ((Input::old("country_code"))=="+379")? "selected":""  }}>Vatican City 
                    <option value="+58" {{ ((Input::old("country_code"))=="+58")? "selected":""  }}>Venezuela  
                    <option value="+84" {{ ((Input::old("country_code"))=="+84")? "selected":""  }}>Vietnam 
                    <option value="+84" {{ ((Input::old("country_code"))=="+84")? "selected":""  }}>Virgin Islands - British 
                    <option value="+84" {{ ((Input::old("country_code"))=="+84")? "selected":""  }}>Virgin Islands - US 
                    <option value="+681" {{ ((Input::old("country_code"))=="+681")? "selected":""  }}>Wallis &amp; Futuna  
                    <option value="+969" {{ ((Input::old("country_code"))=="+969")? "selected":"" }}>Yemen (North) 
                    <option value="+967" {{ ((Input::old("country_code"))=="+967")? "selected":""  }}>Yemen (South) 
                    <option value="+381" {{ ((Input::old("country_code"))=="+381")? "selected":""  }}>Yugoslavia 
                    <option value="+243" {{ ((Input::old("country_code"))=="+243")? "selected":"" }}>Zaire  
                    <option value="+260" {{ ((Input::old("country_code"))=="+260")? "selected":""  }}>Zambia  
                    <option value="+263" {{ ((Input::old("country_code"))=="+263")? "selected":"" }}>Zimbabwe 
                </select>
                   
                  
                <input type="text" class="col-sm-3 data phone-code" name="phone_code" value="{{(Input::old('country_code')) ? Input::old('country_code'):"+1" }}" readonly="readonly" style="width: 40%;" />

                </div>

                <div class="form-group order-form-mrgin"> 
                <input type="number"  class="login-input" placeholder="Enter Phone Number" name="phone" ng-model="order.phone" minlength="2" maxlength="10">
                        <span class="input-icon">
                            <i class="fa fa-mobile-phone"></i>
                        </span>
                    </div>
                    <div class="form-group order-form-mrgin">               
                        <textarea type="text" class="login-input place-textarea" placeholder="Description" name="description" ng-model="order.description" required=""> </textarea>                      
                                 <span class="input-icon">
                                    <i class="fa fa-comments"></i>
                                </span>
                    </div>
                            <button type="submit" class="button-fullwidth cws-button bt-color-3 border-radius order-btn-pding">Sign Up</button>
                            <!--<button ng-click="back()" class="button-fullwidth cws-button bt-color-3 border-radius">Back</button>-->
                        
                </form>
                  <button ng-click="back()" class="button-fullwidth cws-button border-radius order-btn-pding1" ng-if="showPlaceOrderForm != 'true'" style="padding:10px;margin:2px;">Back</button>
                        
                    </div>
                </div>
            </section>
        </main>
       
       </div>
	   
        <!-- / revolution slider -->
        <hr class="divider-color">
        <!-- content -->
        <div id="home" class="page-content padding-none">        
         
            
           <div class="grid-row clear-fix padding-section1 choose-course">
                    <div class="container">
                        <div class="group-title-index">

                            <h2 class="center-title">Easy ordering System</h2>

                            <div class="bottom-title"><i class="fa fa-book bottom-icon icon-a-1-01-01"></i></div>
                        </div>
                        <div class="grid-col-row clear-fix choose-course-wrapper">
                            <div class="grid-col grid-col-4 grid-system-easy">
                                <div class="item-course item-1">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="fa fa-laptop icons-img icon-photocamera_1"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="">We are happy to hear 24X7.</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="">Order Assignment</a><i class="fa fa-long-arrow-right"></i></div>
                                 </div>
                            </div>
                            <div class="grid-col grid-col-4 grid-system-easy">
                                <div class="item-course item-2">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="fa fa-paypal icons-img icon-photocamera_1"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="">process the payment through- paypal, credit card, debit card or online banking</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="">Pay for Assignment</a><i class="fa fa-long-arrow-right"></i></div>
                              </div>
                            </div> 
                            <div class="grid-col grid-col-4 grid-system-easy">
                                <div class="item-course item-3">
                                    <div class="icon-circle">
                                        <div class="icon-background"><i class="high-quality icons-img icon-photocamera_1"></i></div>
                                        <div class="info">
                                            <div class="info-back"><a href="">You don't need to worry about the plagiarized content.</a></div>
                                        </div>
                                    </div>
                                    <div class="name-course"><a href="">Get high Quality Content</a><i class="fa fa-long-arrow-right"></i></div>
                              	</div>
                            </div>
                        </div>
                    </div>
                </div>
          
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
	
	 <div class="grid-col-row">
	 
	 <div class="grid-col grid-col-6">
                                    <img src="theme/img/images/different/Why-we-are-different.jpg" alt="Why-we-are-different" data-at2x="theme/img/images/different/Why-we-are-different.jpg" class="mrgin_tabs" >
                                    </div>
	<div class="grid-col grid-col-6">
	<h2>Why we are different</h2>
                                    <p>The quality of our work ensures proper delivery and plagiarism-free content provided by the panel of expert writers who work in our team. These writers are Doctorates and are capable enough to teach subjects and various disciplines suiting the needs of the students. In case, the student is not satisfied, the student can avail for a complete refund or avail for a rework.</p>
                              </div>
	
	  </div></div>
	
	
	
                                <div class="animated fadeIn" data-box="2">
                              <div class="grid-col-row"> 
                                    
	<div class="grid-col grid-col-6">
	<img src="theme/img/images/different/Quality.jpg" data-at2x="theme/img/images/different/Quality.jpg" alt="Quality"  class="mrgin_tabs">
                                   </div>                              
	<div class="grid-col grid-col-6">
	   <h2>Quality Assurance</h2>
                                    <p>The quality of our work ensures proper delivery and plagiarism-free content provided by the panel of expert writers who work in our team. These writers are Doctorates and are capable enough to teach subjects and various disciplines suiting the needs of the students. In case, the student is not satisfied, the student can avail for a complete refund or avail for a rework.</p>
                               </div> 
	
	
	  </div></div>
                                
	<div class="animated fadeIn" data-box="3">
                                   <div class="grid-col-row">
	   <div class="grid-col grid-col-6">
                                   <img src="theme/img/images/different/best-pricing-plans.jpg" data-at2x="theme/img/images/different/best-pricing-plans.jpg" alt="best-pricing-plans" class="mrgin_tabs" >
                                    </div>
	   <div class="grid-col grid-col-6">
	<h2> Best Pricing Plans</h2>
                                    <p>We, at Best Assignment Experts provide for the premium service at an affordable market price. Not just an affordable price but we can guarantee you won’t find any competitors in the market who can provide excellent quality under cheap cost. We can assure that if a competitor can maintain the same quality by beating our pricing, we will change our pricing policies.</p>
                               </div>
	
	 </div></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- / paralax section -->
            <hr class="divider-color"/>
            <!-- paralax section -->
            <div class="parallaxed">
                <div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
                    <img src="theme/img/parallax.png" alt="Best Assignment Experts">

                </div>
                <div class="them-mask bg-color-1"></div>
                <div class="grid-row">
                    <div class="grid-col-row clear-fix">
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block">
                                <i class="flaticon-book1"></i>
	<br/><span class="counter" data-count="100">100</span> + <div class="counter-name">Subjects</div>
                            </div>
                        </div>
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block">
                                <i class="flaticon-multiple"></i>
                                <br/><span class="counter" data-count="5000">5000</span> + <div class="counter-name">Students</div>

                               
                            </div>                          
                        </div>
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block">
                                <i class="fa fa-graduation-cap"></i>
                               
	<br/><span class="counter" data-count="1000">1000</span> + <div class="counter-name">Experts</div>
                            </div>
                        </div>
                        <div class="grid-col grid-col-3 alt">
                            <div class="counter-block last">
                                <i class="flaticon-calendar"></i>
	<br/><span class="counter" data-count="10000">10,000</span> + <div class="counter-name">Deliveries</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- paralax section -->
            <!-- parallax section -->
            
            <!-- parallax section -->
            <!-- section -->
            <section class="grid-row clear-fix padding-section">
                <h4 class="center-text">Suggested Experts</h4>
                <div class="grid-col-row">
                    <div class="grid-col grid-col-6">
                        <div class="item-instructor bg-color-1">
                            <a href="/place-order" class="instructor-avatar">
                                <img src="theme/img/images/ExpertsMonth/Management Assignment Expert.jpg"  alt="Management Assignment Expert">

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
                            <a href="/place-order" class="instructor-avatar">
                                <img src="theme/img/images/ExpertsMonth/Law Assignment Expert.jpg"  alt="Law Assignment Expert">
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
                            <a href="/place-order" class="instructor-avatar">
                                
                                <img src="theme/img/images/ExpertsMonth/Software Engineering Expert.jpeg"  alt="Software Engineering Expert">
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
                            <a href="/place-order" class="instructor-avatar">
                                <img src="theme/img/images/ExpertsMonth/Bio Medical Science Assignment Expert.jpg"  alt="Bio Medical Science Assignment Expert">
                            </a>
                            <div class="info-box">
                                <h3>James Carter</h3>
                                <span class="instructor-profession">Bio Medical Science Assignment Expert</span>
                                <div class="divider"></div>
                                <p></p>
                                <div class="social-link">
                                    <a href="/place-order" class="cws-button border-radius">Order Now</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
			<div class="parallaxed">
                <div class="parallax-image" data-parallax-left="0.5" data-parallax-top="0.3" data-parallax-scroll-speed="0.5">
                    <img src="theme/img/parallax.png" alt="BestAssignmentExperts">
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
			
            <!-- / section -->
            <hr class="divider-color" />          
           <section class="fullwidth-background testimonial padding-section">


                

                

                  
        <div class="container">
		<div class="row">
		  <h2 class="center-text">Testimonials</h2>
		<div class="carousel-reviews broun-block">
              
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner">
                    <div class="item active">
                	    <div class="col-md-4 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">Adamaris</a>
							    <div class="mark">My rating: <span class="rating-input">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							   <i class="fa fa-star" aria-hidden="true"></i>
							  <i class="fa fa-star" aria-hidden="true"></i>
								 </span></div>
						        <p> Wonderful experience with “BestAssignmentExperts.com”. Will be back with another work.</p>
							    <ins class="ab zmin sprite sprite-i-triangle block">
								<img src="theme/img/images/Testimonials/adamaris.jpg" class="img-circle" alt="adamaris"/>
								
								</ins>
								
					        </div>
							<div class="person-text rel">
                                 <a title="" href="#">Adamaris</a>
							   <span>(UK)</span>
								
							</div>
						</div>
            			<div class="col-md-4 col-sm-6 hidden-xs">
						    <div class="block-text rel zmin">
						        <a title="" href="#">John</a>
							    <div class="mark">My rating: <span class="rating-input">
							 <i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							  <i class="fa fa-star" aria-hidden="true"></i></span></div>
        				<p>Its been Really Wonderful to use Assignment Service,Will definitely come back for more assignment.</p>
					            <ins class="ab zmin sprite sprite-i-triangle block"> 
								<img src="theme/img/images/Testimonials/john.jpg" class="img-circle" alt="john"/></ins>
				            </div>
							<div class="person-text rel">
				               
						        <a title="" href="#">John</a>
								<span>(UK)</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
							<div class="block-text rel zmin">
								<a title="" href="#">Darren</a>
								<div class="mark">My rating: <span class="rating-input">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							 <i class="fa fa-star" aria-hidden="true"></i>
                                 <i class="fa fa-star" aria-hidden="true"></i></span></div>
    						<p>	Best Assignment Experts is Quick and effective service, On time and great content.Thanks for helping me and certailny use the service again.</p>
								<ins class="ab zmin sprite sprite-i-triangle block">
								  <img src="theme/img/images/Testimonials/darren.jpg" class="img-circle" alt="darren"/>
								</ins>
							</div>
							<div class="person-text rel">
				                  
								<a title="" href="#">Darren</a>
								<span>(UK)</span>
							</div>
						</div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a title="" href="#">Adamaris</a>
							    <div class="mark">My rating: <span class="rating-input">
                               <i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							   <i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							    <i class="fa fa-star" aria-hidden="true"></i> </span></div>
          <p> Wonderful experience with “BestAssignmentExperts.com”. Will be back with another work.</p>
							    <ins class="ab zmin sprite sprite-i-triangle block">
								  <img src="theme/img/images/Testimonials/adamaris.jpg" class="img-circle" alt="adamaris"/>
								</ins>
					        </div>
							<div class="person-text rel">
								
								<a title="" href="#">Adamaris</a>
								<span>(UK)</span>
							</div>
						</div>
            			<div class="col-md-4 col-sm-6 hidden-xs">
						    <div class="block-text rel zmin">
						        <a title="" href="#">John</a>
							    <div class="mark">My rating: <span class="rating-input">
								<i class="fa fa-star" aria-hidden="true"></i>
							    <i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							    </span></div>
               <p>  Its been Really Wonderful to use Assignment Service,Will definitely come back for more assignment.</p>
					            <ins class="ab zmin sprite sprite-i-triangle block">
				               <img src="theme/img/images/Testimonials/john.jpg" class="img-circle" alt="john"/>
								</ins>
				            </div>
							<div class="person-text rel">

						        <a title="" href="#">John</a>
								<span>(UK)</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
							<div class="block-text rel zmin">
								<a title="" href="#">Darren</a>
								<div class="mark">My rating: <span class="rating-input">
							    <i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							  <i class="fa fa-star" aria-hidden="true"></i>
							    </span></div>
    							<p>	Best Assignment Experts is Quick and effective service, On time and great content.Thanks for helping me and certailny use the service again..</p>
								<ins class="ab zmin sprite sprite-i-triangle block">
								 <img src="theme/img/images/Testimonials/darren.jpg" class="img-circle" alt="darren"/>
								</ins>
							</div>
							<div class="person-text rel">
							 
								<a title="" href="#">Darren</a>
								<span>(UK)</span>
							</div>
						</div>
                    </div>
                                  
                </div>
                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
          </div>
		  </div>
          </div>
		  </div>
		</section>

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
                            $('form').before('<div class="alert alert-success msg info-boxes confirmation-message confirm-msg" style="background: #f27c66"></div>');
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
$scope.initialize = function(){

 $('select[name^=country_code]').change(function()
     {
    
        $('.data').val($(".dara option:selected").val());
  
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
<!--Start of Connecto Script-->
<script type="text/javascript">
var _TConnecto = _TConnecto || {};
_TConnecto.licenseKey = 'z7JnUJj7Q7By0pSu';

(function() {
var con = document.createElement('script'); con.type = 'text/javascript';
var host = (document.location.protocol === 'http:') ? 'http://cdn' : 'https://server';
con.src = host + '.connecto.io/javascripts/connect.prod.min.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(con, s);
})();
</script>
<!--End of Connecto Script-->

<script type="text/javascript">
$(document).ready(function () {
    $('.nav-toggle').click(function () {
        var collapse_content_selector = $(this).attr('href');
        var toggle_switch = $(this);
        $(collapse_content_selector).toggle(function () {
            if ($(this).css('display') == 'none') {
                toggle_switch.html('See More');
            } else {
                toggle_switch.html('See Less');
            }
        });
    });

});
</script>
 