<!DOCTYPE HTML5>
<html lang="en">
    <head>
    <title>Reviews - Bestassignmentexperts.com</title>
    <meta name="description" content="About US|Assignment help|Project Management help USA">
    <link hreflang="en" media="all" type="text/css" rel="stylesheet" href="/theme/css/custum.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>

  
 
    @include('layout.header')

    <!-- page content -->
    <div class="page-content container clear-fix">
        <div class="grid-col-row">
            <div class="grid-col grid-col-9">
    
                <!-- main content -->
                 

                <div class="reviews clearfix">
                    <div class="left-rating">
                        <span>{{round($data['averageReview'], 1)}} <small>Average Reviews</small></span>

                        <div class="star-main">
                            <div class="star-section">
                                <strong>5 &nbsp;&nbsp;<i class="fa fa-star" aria-hidden="true"></i></strong>
                            
                                <div class="related-box">
                                    @if(count($data['fiveStarReviews']) >=100)
                                    <div class="related-box-in" style="width: 100%;">&nbsp;</div>
                                    @elseif(count($data['fiveStarReviews']) >=90 && count($data['fiveStarReviews']) <=100 )
                                    <div class="related-box-in" style="width: 90%;">&nbsp;</div>
                                    @elseif(count($data['fiveStarReviews']) >=80 && count($data['fiveStarReviews']) <=90 )
                                    <div class="related-box-in" style="width: 80%;">&nbsp;</div>
                                    @elseif(count($data['fiveStarReviews']) >=70 && count($data['fiveStarReviews']) <=80 )
                                    <div class="related-box-in" style="width: 70%;">&nbsp;</div>
                                    @elseif(count($data['fiveStarReviews']) >=60 && count($data['fiveStarReviews']) <=70 )
                                    <div class="related-box-in" style="width: 60%;">&nbsp;</div>
                                     @elseif(count($data['fiveStarReviews']) >=50 && count($data['fiveStarReviews']) <=60 )
                                    <div class="related-box-in" style="width: 50%;">&nbsp;</div>
                                     @elseif(count($data['fiveStarReviews']) >=40 && count($data['fiveStarReviews']) <=50 )
                                    <div class="related-box-in" style="width: 40%;">&nbsp;</div>
                                     @elseif(count($data['fiveStarReviews']) >=30 && count($data['fiveStarReviews']) <=40 )
                                    <div class="related-box-in" style="width: 30%;">&nbsp;</div>
                                     @elseif(count($data['fiveStarReviews']) >=20 && count($data['fiveStarReviews']) <=30 )
                                    <div class="related-box-in" style="width: 20%;">&nbsp;</div>
                                     @elseif(count($data['fiveStarReviews']) >=10 && count($data['fiveStarReviews']) <=20 )
                                    <div class="related-box-in" style="width: 10%;">&nbsp;</div>
                                     @elseif(count($data['fiveStarReviews']) >=0 && count($data['fiveStarReviews']) <=10 )
                                    <div class="related-box-in" style="width: 0%;">&nbsp;</div>
                                    @endif
                                </div> <!-- related-box-in -->
                                <p>{{count($data['fiveStarReviews'])}}</p>
                            </div>

                            <!-- star-section -->
                            <div class="star-section">
                                <strong>4 &nbsp;&nbsp;<i class="fa fa-star" aria-hidden="true"></i></strong>
                                
                                <div class="related-box">
                                    @if(count($data['fourStarReviews']) >=100)
                                    <div class="related-box-in" style="width: 100%;">&nbsp;</div>
                                    @elseif(count($data['fourStarReviews']) >=90 && count($data['fourStarReviews']) <=100 )
                                    <div class="related-box-in" style="width: 90%;">&nbsp;</div>
                                    @elseif(count($data['fourStarReviews']) >=80 && count($data['fourStarReviews']) <=90 )
                                    <div class="related-box-in" style="width: 80%;">&nbsp;</div>
                                    @elseif(count($data['fourStarReviews']) >=70 && count($data['fourStarReviews']) <=80 )
                                    <div class="related-box-in" style="width: 70%;">&nbsp;</div>
                                    @elseif(count($data['fourStarReviews']) >=60 && count($data['fourStarReviews']) <=70 )
                                    <div class="related-box-in" style="width: 60%;">&nbsp;</div>
                                     @elseif(count($data['fourStarReviews']) >=50 && count($data['fourStarReviews']) <=60 )
                                    <div class="related-box-in" style="width: 50%;">&nbsp;</div>
                                     @elseif(count($data['fourStarReviews']) >=40 && count($data['fourStarReviews']) <=50 )
                                    <div class="related-box-in" style="width: 40%;">&nbsp;</div>
                                     @elseif(count($data['fourStarReviews']) >=30 && count($data['fourStarReviews']) <=40 )
                                    <div class="related-box-in" style="width: 30%;">&nbsp;</div>
                                     @elseif(count($data['fourStarReviews']) >=20 && count($data['fourStarReviews']) <=30 )
                                    <div class="related-box-in" style="width: 20%;">&nbsp;</div>
                                     @elseif(count($data['fourStarReviews']) >=10 && count($data['fourStarReviews']) <=20 )
                                    <div class="related-box-in" style="width: 10%;">&nbsp;</div>
                                     @elseif(count($data['fourStarReviews']) >=0 && count($data['fourStarReviews']) <=10 )
                                    <div class="related-box-in" style="width: 0%;">&nbsp;</div>
                                    @endif
                                </div> <!-- related-box-in -->

                                <!-- related-box -->
                                <p>{{count($data['fourStarReviews'])}}</p>
                            </div>

                            <!-- star-section -->
                            <div class="star-section clearfix">
                                <strong>3&nbsp;&nbsp; <i class="fa fa-star" aria-hidden="true"></i></strong>

                                <div class="related-box">
                                    @if(count($data['threeStarReviews']) >=100)
                                    <div class="related-box-in" style="width: 100%;">&nbsp;</div>
                                    @elseif(count($data['threeStarReviews']) >=90 && count($data['threeStarReviews']) <=100 )
                                    <div class="related-box-in" style="width: 90%;">&nbsp;</div>
                                    @elseif(count($data['threeStarReviews']) >=80 && count($data['threeStarReviews']) <=90 )
                                    <div class="related-box-in" style="width: 80%;">&nbsp;</div>
                                    @elseif(count($data['threeStarReviews']) >=70 && count($data['threeStarReviews']) <=80 )
                                    <div class="related-box-in" style="width: 70%;">&nbsp;</div>
                                    @elseif(count($data['threeStarReviews']) >=60 && count($data['threeStarReviews']) <=70 )
                                    <div class="related-box-in" style="width: 60%;">&nbsp;</div>
                                     @elseif(count($data['threeStarReviews']) >=50 && count($data['threeStarReviews']) <=60 )
                                    <div class="related-box-in" style="width: 50%;">&nbsp;</div>
                                     @elseif(count($data['threeStarReviews']) >=40 && count($data['threeStarReviews']) <=50 )
                                    <div class="related-box-in" style="width: 40%;">&nbsp;</div>
                                     @elseif(count($data['threeStarReviews']) >=30 && count($data['threeStarReviews']) <=40 )
                                    <div class="related-box-in" style="width: 30%;">&nbsp;</div>
                                     @elseif(count($data['threeStarReviews']) >=20 && count($data['threeStarReviews']) <=30 )
                                    <div class="related-box-in" style="width: 20%;">&nbsp;</div>
                                     @elseif(count($data['threeStarReviews']) >=10 && count($data['threeStarReviews']) <=20 )
                                    <div class="related-box-in" style="width: 10%;">&nbsp;</div>
                                     @elseif(count($data['threeStarReviews']) >=0 && count($data['threeStarReviews']) <=10 )
                                    <div class="related-box-in" style="width: 0%;">&nbsp;</div>
                                    @endif                                </div><!-- related-box-in -->

                                <!-- related-box-->
                                <p>{{count($data['threeStarReviews'])}}</p>
                            </div>

                            <!-- star-section -->
                            <div class="star-section clearfix">
                                <strong>2&nbsp;&nbsp; <i class="fa fa-star" aria-hidden="true"></i></strong>

                                <div class="related-box">
                                    @if(count($data['twoStarReviews']) >=100)
                                    <div class="related-box-in" style="width: 100%;">&nbsp;</div>
                                    @elseif(count($data['twoStarReviews']) >=90 && count($data['twoStarReviews']) <=100 )
                                    <div class="related-box-in" style="width: 90%;">&nbsp;</div>
                                    @elseif(count($data['twoStarReviews']) >=80 && count($data['twoStarReviews']) <=90 )
                                    <div class="related-box-in" style="width: 80%;">&nbsp;</div>
                                    @elseif(count($data['twoStarReviews']) >=70 && count($data['twoStarReviews']) <=80 )
                                    <div class="related-box-in" style="width: 70%;">&nbsp;</div>
                                    @elseif(count($data['twoStarReviews']) >=60 && count($data['twoStarReviews']) <=70 )
                                    <div class="related-box-in" style="width: 60%;">&nbsp;</div>
                                     @elseif(count($data['twoStarReviews']) >=50 && count($data['twoStarReviews']) <=60 )
                                    <div class="related-box-in" style="width: 50%;">&nbsp;</div>
                                     @elseif(count($data['twoStarReviews']) >=40 && count($data['twoStarReviews']) <=50 )
                                    <div class="related-box-in" style="width: 40%;">&nbsp;</div>
                                     @elseif(count($data['twoStarReviews']) >=30 && count($data['twoStarReviews']) <=40 )
                                    <div class="related-box-in" style="width: 30%;">&nbsp;</div>
                                     @elseif(count($data['twoStarReviews']) >=20 && count($data['twoStarReviews']) <=30 )
                                    <div class="related-box-in" style="width: 20%;">&nbsp;</div>
                                     @elseif(count($data['twoStarReviews']) >=10 && count($data['twoStarReviews']) <=20 )
                                    <div class="related-box-in" style="width: 10%;">&nbsp;</div>
                                     @elseif(count($data['twoStarReviews']) >=0 && count($data['twoStarReviews']) <=10 )
                                    <div class="related-box-in" style="width: 0%;">&nbsp;</div>
                                    @endif
                                </div><!-- related-box-in -->

                                <!-- related-box -->
                                <p>{{count($data['twoStarReviews'])}}</p>
                            </div> 
                        </div><!-- star-section -->
                    </div>    

                    <div class="right-ratingx">
                        <form action="/view-all-reviews" id="ratingId">
                            <select name="find_rating" form="ratingId" class="selector" onchange="this.form.submit()">
                                @if($data['findRating'])
                                <option value='selected star' >{{$data['findRating']}}</option>
                                @else
                                <option value='selected star' >All</option>
                                @endif
                                <option value='All'>All</option>
                                <!-- <option value='1'>1 Star Rating</option> -->
                                <option value='2 Star Rating'>2 Star Rating</option> 
                                <option value='3 Star Rating'>3 Star Rating</option>
                                <option value='4 Star Rating' >4 Star Rating</option>
                                <option value='5 Star Rating'>5 Star Rating</option>
                            </select>

                            <p class="flex-containe">
                                <a role="button" href="#" data-toggle="modal" class="btn btn-lg btn-primary" 
                                data-target="#myModal" role="button">Write a Review</a>
                            </p>
                        </form>
                    </div>
                </div>

                <div id="revies_filerts_block">
                    <div id="lode_more_0" class="review_load_more"> 
                        <input name="" id="page" type="hidden" value="0">
                    </div>

                    @if($data['publish_reviews'])
                        @foreach($data['publish_reviews'] as $data)
                    <div class="top_test_div">
                        <div class="inner_div">
                            <span class="title">{{$data->review_title}}
                                @if($data->total_rating == 5)
                                <img src="theme/img/reviews/5_star.png" alt="5_star.png">
                                @elseif($data->total_rating == 4)
                                <img src="theme/img/reviews/4_star.png" alt="4_star.png">
                                @elseif($data->total_rating == 3)
                                <img src="theme/img/reviews/3_star.png" alt="3_star.png">
                                @elseif($data->total_rating == 2)
                                <img src="theme/img/reviews/2_star.png" alt="2_star.png">
                                @else
                                <img src="theme/img/reviews/5_star.png" alt="5_star.png">
                                @endif
                            </span>
                            
                            <p class="test_p">{{$data->review}}</p>
                            <div class="date">
                                {{date('d/m/Y', strtotime($data->date))}}
                                <img src="https://www.instantassignmenthelp.com.au/images/calendr-icon.png" alt="img"/>
                            </div>
                        </div>
                       
                        <p class="sandy">{{$data->name}}, {{$data->location}}</p>
                       
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
            
            @include('layout.right-sidebar')
        </div>
    </div> 

    <!-- / page content -->
    <div class="modal fade animated slideInRight" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-smll" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-center">
                    Share Your Reviews!
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="fadeandscale_close ">×</span>
                    </button>
                </div>
        
                <div class="modal-body">
                    <div class="row">
                        <form  class="login-form" id="surveyForm">
                                        
                    <div class="field">
                        <label for="servicesRatings">1. Our Sales Rating</label>
                        <fieldset class="stars" id="servicesRatings" name="salesRating">
                            <input type="radio" id="servicesRating-5" name="salesRating" value="5" />
                            <label for="servicesRating-5"></label>
                            <input type="radio" id="servicesRating-4" name="salesRating" value="4" />
                            <label for="servicesRating-4"></label>
                            <input type="radio" id="servicesRating-3" name="salesRating" value="3" checked="checked" />
                            <label for="servicesRating-3"></label>
                            <input type="radio" id="servicesRating-2" name="salesRating" value="2" />
                            <label for="servicesRating-2"></label>
                            <input type="radio" id="servicesRating-1" name="salesRating" value="1" />
                            <label for="servicesRating-1"></label>
                        </fieldset>
                    </div>
                    <div class="field">
                        <label for="supportRatings">2. Our Support Rating</label>
                        <fieldset class="stars" id="supportRatings" name="supportRating">
                            <input type="radio" id="supportRating-5" name="supportRating" value="5" />
                            <label for="supportRating-5"></label>
                            <input type="radio" id="supportRating-4" name="supportRating" value="4" />
                            <label for="supportRating-4"></label>
                            <input type="radio" id="supportRating-3" name="supportRating" value="3" checked="checked" />
                            <label for="supportRating-3"></label>
                            <input type="radio" id="supportRating-2" name="supportRating" value="2" />
                            <label for="supportRating-2"></label>
                            <input type="radio" id="supportRating-1" name="supportRating" value="1" />
                            <label for="supportRating-1"></label>
                        </fieldset>
                    </div>
                    <div class="field">
                        <label for="satisfactionRatings">3. Overall Satisfaction</label>
                        <fieldset class="stars" id="satisfactionRatings" name="satisfactionRating">
                            <input type="radio" id="satisfactionRating-5" name="satisfactionRating" value="5" />
                            <label for="satisfactionRating-5"></label>
                            <input type="radio" id="satisfactionRating-4" name="satisfactionRating" value="4" />
                            <label for="satisfactionRating-4"></label>
                            <input type="radio" id="satisfactionRating-3" name="satisfactionRating" value="3" checked="checked" />
                            <label for="satisfactionRating-3"></label>
                            <input type="radio" id="satisfactionRating-2" name="satisfactionRating" value="2" />
                            <label for="satisfactionRating-2"></label>
                            <input type="radio" id="satisfactionRating-1" name="satisfactionRating" value="1" />
                            <label for="satisfactionRating-1"></label>
                        </fieldset>
                    </div>
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }} required-field-block">
                            <input type="text" id="title" class="login-input" maxlength="50" name="title" placeholder=" Enter Review Title" required>
                    <div class="required-icon">
               
                     <div class="text">*</div>
           
                       </div>
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                        
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} required-field-block">
                            <input type="text" id="name" class="login-input" maxlength="35" name="name" placeholder=" Enter Name" required>
                            <div class="required-icon">
               
                     <div class="text">*</div>
           
                       </div>
<span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                   
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <input type="email" id="email" class="login-input" name="email" placeholder=" Enter email (optional)">
                             <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        
                        <div class="form-group {{ $errors->has('country_code') ? 'has-error' : '' }} required-field-block">
                            <select name="country_code"  id="country_code" class="setheight1" required> 
                                <option value="" >Select Country</option>
                                <option value="Afghanistan" >Afghanistan</option>
                                <option value="Albania" >Albania</option>
                                <option value="Algeria" >Algeria</option>
                                <option value="American Samoa(684)" >American Samoa(684)</option>
                                <option value="American Samoa(1)" >American Samoa(1)</option>
                                <option value="Andorra" >Andorra</option>
                                <option value="Angola" >Angola</option>
                                <option value="Anguilla(1)" >Anguilla(1)</option>
                                <option value="Anguilla(264)" >Anguilla(264)</option>
                                <option value="Antarctica" >Antarctica</option>
                                <option value="Antigua and Barbuda(268)" >Antigua and Barbuda(268)</option>
                                <option value="Antigua and Barbuda(1)" >Antigua and Barbuda(1)</option>
                                <option value="Argentina" >Argentina</option>
                                <option value="Armenia" >Armenia</option>
                                <option value="Aruba" >Aruba</option>
                                <option value="Australia" >Australia</option>
                                <option value="Austria" >Austria</option>
                                <option value="Azerbaijan" >Azerbaijan</option>
                                <option value="Bahamas(1)" >Bahamas(1)</option>
                                <option value="Bahamas(242)" >Bahamas(242)</option>
                                <option value="Bahrain" >Bahrain</option>
                                <option value="Bangladesh" >Bangladesh</option>
                                <option value="Barbados(1)" >Barbados(1)</option>
                                <option value="Barbados(246)" >Barbados(246)</option>
                                <option value="Belarus" >Belarus</option>
                                <option value="Belgium" >Belgium</option>
                                <option value="Belize" >Belize</option>
                                <option value="Benin" >Benin</option>
                                <option value="Bermuda(1)" >Bermuda(1)</option>
                                <option value="Bermuda(441)" >Bermuda(441)</option>
                                <option value="Bhutan" >Bhutan</option>
                                <option value="Bolivia" >Bolivia</option>
                                <option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
                                <option value="Botswana" >Botswana</option>
                                <option value="Bouvet Island" >Bouvet Island</option>
                                <option value="Brazil" >Brazil</option>
                                <option value="British Indian Ocean Territory" >British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam" >Brunei Darussalam</option>
                                <option value="Bulgaria" >Bulgaria</option>
                                <option value="Burkina Faso" >Burkina Faso</option>
                                <option value="Burundi" >Burundi</option>
                                <option value="Cambodia" >Cambodia</option>
                                <option value="Cameroon" >Cameroon</option>
                                <option value="Canada" >Canada</option>
                                <option value="Cape Verde" >Cape Verde</option>
                                <option value="Cayman Islands(345)" >Cayman Islands(345)</option>
                                <option value="Cayman Islands(1)" >Cayman Islands(1)</option>
                                <option value="Central African Republic" >Central African Republic</option>
                                <option value="Chad" >Chad</option>
                                <option value="Chile" >Chile</option>
                                <option value="China" >China</option>
                                <option value="Christmas Island" >Christmas Island</option>
                                <option value="Cocos (Keeling) Islands" >Cocos (Keeling) Islands</option>
                                <option value="Colombia" >Colombia</option>
                                <option value="Comoros" >Comoros</option>
                                <option value="Congo" >Congo</option>
                                <option value="Cook Islands" >Cook Islands</option>
                                <option value="Costa Rica" >Costa Rica</option>
                                <option value="Cote D'Ivoire" >Cote D'Ivoire</option>
                                <option value="Croatia" >Croatia</option>
                                <option value="Cuba" >Cuba</option>
                                <option value="Cyprus" >Cyprus</option>
                                <option value="Czech Republic" >Czech Republic</option>
                                <option value="Denmark" >Denmark</option>
                                <option value="Djibouti" >Djibouti</option>
                                <option value="Dominica(1)" >Dominica(1)</option>
                                <option value="Dominica(767)" >Dominica(767)</option>
                                <option value="Dominican Republic(1)" >Dominican Republic(1)</option>
                                <option value="Dominican Republic(809)" >Dominican Republic(809)</option>
                                <option value="Dominican Republic(829)" >Dominican Republic(829)</option>
                                <option value="Dominican Republic(849)" >Dominican Republic(849)</option>
                                <option value="East Timor" >East Timor</option>
                                <option value="Ecuador" >Ecuador</option>
                                <option value="Egypt" >Egypt</option>
                                <option value="El Salvador" >El Salvador</option>
                                <option value="Equatorial Guinea" >Equatorial Guinea</option>
                                <option value="Eritrea" >Eritrea</option>
                                <option value="Estonia" >Estonia</option>
                                <option value="Ethiopia" >Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)" >Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands" >Faroe Islands</option>
                                <option value="Fiji" >Fiji</option>
                                <option value="Finland" >Finland</option>
                                <option value="France, Metropolitan" >France, Metropolitan</option>
                                <option value="French Guiana" >French Guiana</option>
                                <option value="French Polynesia" >French Polynesia</option>
                                <option value="French Southern Territories" >French Southern Territories</option>
                                <option value="Gabon" >Gabon</option>
                                <option value="Gambia" >Gambia</option>
                                <option value="Georgia" >Georgia</option>
                                <option value="Germany" >Germany</option>
                                <option value="Ghana" >Ghana</option>
                                <option value="Gibraltar" >Gibraltar</option>
                                <option value="Greece" >Greece</option>
                                <option value="Greenland" >Greenland</option>
                                <option value="Grenada(1)" >Grenada(1)</option>
                                <option value="Grenada(473)" >Grenada(473)</option>
                                <option value="Guadeloupe" >Guadeloupe</option>
                                <option value="Guam" >Guam</option>
                                <option value="Guam" >Guam</option>
                                <option value="Guatemala" >Guatemala</option>
                                <option value="Guinea" >Guinea</option>
                                <option value="Guinea-Bissau" >Guinea-Bissau</option>
                                <option value="Guyana" >Guyana</option>
                                <option value="Haiti" >Haiti</option>
                                <option value="Heard and Mc Donald Islands" >Heard and Mc Donald Islands</option>
                                <option value="Honduras" >Honduras</option>
                                <option value="Hong Kong" >Hong Kong</option>
                                <option value="Hungary" >Hungary</option>
                                <option value="Iceland" >Iceland</option>
                                <option value="India" >India</option>
                                <option value="Indonesia" >Indonesia</option>
                                <option value="Iran (Islamic Republic of)" >Iran (Islamic Republic of)</option>
                                <option value="Iraq" >Iraq</option>
                                <option value="Ireland" >Ireland</option>
                                <option value="Israel" >Israel</option>
                                <option value="Italy" >Italy</option>
                                <option value="Jamaica(1)" >Jamaica(1)</option>
                                <option value="Jamaica(876)" >Jamaica(876)</option>
                                <option value="Japan" >Japan</option>
                                <option value="Jordan" >Jordan</option>
                                <option value="Kazakhstan" >Kazakhstan</option>
                                <option value="Kenya" >Kenya</option>
                                <option value="Kiribati" >Kiribati</option>
                                <option value="North Korea" >North Korea</option>
                                <option value="Republic of Korea" >Republic of Korea</option>
                                <option value="Kuwait" >Kuwait</option>
                                <option value="Kyrgyzstan" >Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic" >Lao People's Democratic Republic</option>
                                <option value="Latvia" >Latvia</option>
                                <option value="Lebanon" >Lebanon</option>
                                <option value="Lesotho" >Lesotho</option>
                                <option value="Liberia" >Liberia</option>
                                <option value="Libyan Arab Jamahiriya" >Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein" >Liechtenstein</option>
                                <option value="Lithuania" >Lithuania</option>
                                <option value="Luxembourg" >Luxembourg</option>
                                <option value="Macau" >Macau</option>
                                <option value="FYROM" >FYROM</option>
                                <option value="Madagascar" >Madagascar</option>
                                <option value="Malawi" >Malawi</option>
                                <option value="Malaysia" >Malaysia</option>
                                <option value="Maldives" >Maldives</option>
                                <option value="Mali" >Mali</option>
                                <option value="Malta" >Malta</option>
                                <option value="Marshall Islands" >Marshall Islands</option>
                                <option value="Martinique" >Martinique</option>
                                <option value="Mauritania" >Mauritania</option>
                                <option value="Mauritius" >Mauritius</option>
                                <option value="Mayotte" >Mayotte</option>
                                <option value="Mexico" >Mexico</option>
                                <option value="Federated States of Micronesia" >Federated States of Micronesia</option>
                                <option value="Republic of Moldova" >Republic of Moldova</option>
                                <option value="Monaco" >Monaco</option>
                                <option value="Mongolia" >Mongolia</option>
                                <option value="Montserrat" >Montserrat</option>
                                <option value="Montserrat" >Montserrat</option>
                                <option value="Morocco" >Morocco</option>
                                <option value="Mozambique" >Mozambique</option>
                                <option value="Myanmar" >Myanmar</option>
                                <option value="Namibia" >Namibia</option>
                                <option value="Nauru" >Nauru</option>
                                <option value="Nepal" >Nepal</option>
                                <option value="Netherlands" >Netherlands</option>
                                <option value="Netherlands Antilles" >Netherlands Antilles</option>
                                <option value="New Caledonia" >New Caledonia</option>
                                <option value="New Zealand" >New Zealand</option>
                                <option value="Nicaragua" >Nicaragua</option>
                                <option value="Niger" >Niger</option>
                                <option value="Nigeria" >Nigeria</option>
                                <option value="Niue" >Niue</option>
                                <option value="Norfolk Island" >Norfolk Island</option>
                                <option value="Northern Mariana Islands(1)" >Northern Mariana Islands(1)</option>
                                <option value="Northern Mariana Islands(670)" >Northern Mariana Islands(670)</option>
                                <option value="Norway" >Norway</option>
                                <option value="Oman" >Oman</option>
                                <option value="Pakistan" >Pakistan</option>
                                <option value="Palau" >Palau</option>
                                <option value="Panama" >Panama</option>
                                <option value="Papua New Guinea" >Papua New Guinea</option>
                                <option value="Paraguay" >Paraguay</option>
                                <option value="Peru" >Peru</option>
                                <option value="Philippines" >Philippines</option>
                                <option value="Pitcairn" >Pitcairn</option>
                                <option value="Poland" >Poland</option>
                                <option value="Portugal" >Portugal</option>
                                <option value="Puerto Rico(1)" >Puerto Rico(1)</option>
                                <option value="Puerto Rico(787)" >Puerto Rico(787)</option>
                                <option value="Puerto Rico(939)" >Puerto Rico(939)</option>
                                <option value="Qatar" >Qatar</option>
                                <option value="Reunion" >Reunion</option>
                                <option value="Romania" >Romania</option>
                                <option value="Russian Federation" >Russian Federation</option>
                                <option value="Rwanda" >Rwanda</option>
                                <option value="Saint Kitts and Nevis(1)" >Saint Kitts and Nevis(1)</option>
                                <option value="Saint Kitts and Nevis(869)" >Saint Kitts and Nevis(869)</option>
                                <option value="Saint Lucia(758)" >Saint Lucia(758)</option>
                                <option value="Saint Lucia(1)" >Saint Lucia(1)</option>
                                <option value="Saint Vincent and the Grenadines(784)" >Saint Vincent and the Grenadines(784)</option>
                                <option value="Saint Vincent and the Grenadines(1)" >Saint Vincent and the Grenadines(1)</option>
                                <option value="Samoa" >Samoa</option>
                                <option value="San Marino" >San Marino</option>
                                <option value="Sao Tome and Principe" >Sao Tome and Principe</option>
                                <option value="Saudi Arabia" >Saudi Arabia</option>
                                <option value="Senegal" >Senegal</option>
                                <option value="Seychelles" >Seychelles</option>
                                <option value="Sierra Leone" >Sierra Leone</option>
                                <option value="Singapore" >Singapore</option>
                                <option value="Slovak Republic" >Slovak Republic</option>
                                <option value="Slovenia" >Slovenia</option>
                                <option value="Solomon Islands" >Solomon Islands</option>
                                <option value="Somalia" >Somalia</option>
                                <option value="South Africa" >South Africa</option>
                                <option value="South Georgia & South Sandwich Islands" >South Georgia & South Sandwich Islands</option>
                                <option value="Spain" >Spain</option>
                                <option value="Sri Lanka" >Sri Lanka</option>
                                <option value="St. Helena" >St. Helena</option>
                                <option value="St. Pierre and Miquelon" >St. Pierre and Miquelon</option>
                                <option value="Sudan" >Sudan</option>
                                <option value="Suriname" >Suriname</option>
                                <option value="Svalbard and Jan Mayen Islands" >Svalbard and Jan Mayen Islands</option>
                                <option value="Swaziland" >Swaziland</option>
                                <option value="Sweden" >Sweden</option>
                                <option value="Switzerland" >Switzerland</option>
                                <option value="Syrian Arab Republic" >Syrian Arab Republic</option>
                                <option value="Taiwan" >Taiwan</option>
                                <option value="Tajikistan" >Tajikistan</option>
                                <option value="Tanzania, United Republic of" >Tanzania, United Republic of</option>
                                <option value="Thailand" >Thailand</option>
                                <option value="Togo" >Togo</option>
                                <option value="Tokelau" >Tokelau</option>
                                <option value="Tonga" >Tonga</option>
                                <option value="Trinidad and Tobago(868)" >Trinidad and Tobago(868)</option>
                                <option value="Trinidad and Tobago(1)" >Trinidad and Tobago(1)</option>
                                <option value="Tunisia" >Tunisia</option>
                                <option value="Turkey" >Turkey</option>
                                <option value="Turkmenistan" >Turkmenistan</option>
                                <option value="Turks and Caicos Islands(649)" >Turks and Caicos Islands(649)</option>
                                <option value="Turks and Caicos Islands(1)" >Turks and Caicos Islands(1)</option>
                                <option value="Tuvalu" >Tuvalu</option>
                                <option value="Uganda" >Uganda</option>
                                <option value="Ukraine" >Ukraine</option>
                                <option value="United Arab Emirates" >United Arab Emirates</option>
                                <option value="United Kingdom" >United Kingdom</option>
                                <option value="United States" >United States</option>
                                <option value="United States Minor Outlying Islands(340)" >United States Minor Outlying Islands(340)</option>
                                <option value="United States Minor Outlying Islands(1)" >United States Minor Outlying Islands(1)</option>
                                <option value="Uruguay" >Uruguay</option>
                                <option value="Uzbekistan" >Uzbekistan</option>
                                <option value="Vanuatu" >Vanuatu</option>
                                <option value="Vatican City State (Holy See)" >Vatican City State (Holy See)</option>
                                <option value="Venezuela" >Venezuela</option>
                                <option value="Viet Nam" >Viet Nam</option>
                                <option value="Virgin Islands(1)" >Virgin Islands(1)</option>
                                <option value="Virgin Islands British(284)" >Virgin Islands British(284)</option>
                                <option value="Virgin Islands U.S.(340)" >Virgin Islands U.S.(340)</option>
                                <option value="Wallis and Futuna Islands" >Wallis and Futuna Islands</option>
                                <option value="Western Sahara" >Western Sahara</option>
                                <option value="Yemen" >Yemen</option>
                                <option value="Democratic Republic of Congo" >Democratic Republic of Congo</option>
                                <option value="Zambia" >Zambia</option>
                                <option value="Zimbabwe" >Zimbabwe</option>
                                <option value="Jersey(44)" >Jersey(44)</option>
                                <option value="Jersey(1534)" >Jersey(1534)</option>
                                <option value="Guernsey(1481)" >Guernsey(1481)</option>
                                <option value="Guernsey(44)" >Guernsey(44)</option>
                                <option value="Montenegro" >Montenegro</option>
                                <option value="Serbia" >Serbia</option>
                                <option value="Aaland Islands" >Aaland Islands</option>
                                <option value="Bonaire, Sint Eustatius and Saba" >Bonaire, Sint Eustatius and Saba</option>
                                <option value="Curacao" >Curacao</option>
                                <option value="Palestinian Territory, Occupied" >Palestinian Territory, Occupied</option>
                                <option value="South Sudan" >South Sudan</option>
                                <option value="St. Barthelemy" >St. Barthelemy</option>
                                <option value="St. Martin (French part)" >St. Martin (French part)</option>
                                <option value="Canary Islands" >Canary Islands</option>
                            </select>
                  <div class="required-icon">
               
                     <div class="text">*</div>
           
                       </div>
                            <span class="text-danger">{{ $errors->first('country_code') }}</span>

                        </div> 
     
                        <div class="form-group {{ $errors->has('review') ? 'has-error' : '' }} required-field-block">
                            <textarea class="login-input1" name="review" id="review" minlength="4" placeholder="Reviews"></textarea>
                               <div class="required-icon">
               
                     <div class="text">*</div>
           
                       </div>
                            <span class="text-danger">{{ $errors->first('review') }}</span>
                        </div>
         
                        <div class="clear"></div>

                        <center><div class="g-recaptcha"  data-sitekey="6LeSaysUAAAAAN2Hwoz0YR0f9R35utPbnhxkdSnS"></div> 
                        <!--  <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>  --></center>
 
            <button class="btn_star" id=" review_submit" name ="review_submit" type='submit' value='Submit'>Submit</button> 

                  </form>                          
                </div>
            </div>
        </div>
    </div>
</div>

@include('layout.footer')

<script src="theme/js/paginathing.js"></script> 

<script type="text/javascript">
    $('#revies_filerts_block').paginathing(
    {
        perPage: 10,
        limitPagination:2,
        insertAfter: '#revies_filerts_block'
    });
</script>  

<script>       
    $(document).ready(function()
    {  
    $("#confirm").fadeOut(11000);
    });
</script>
  

<script>
$(document).ready(function(){
$('#surveyForm').submit(function(){
// show that something is loading$('#response').html("<b>Loading response...</b>");

// Call ajax for pass data to other place
$.ajax({
type: 'POST',
url: '/add-reviews',
data: $(this).serialize() // getting filed value in serialize form
})
.done(function(data){ // if getting done then call.

// show the response
//$('#response').html(data);
 $("#surveyForm").get(0).reset();
 grecaptcha.reset();

alert( "Thank you for your review and for choosing Best Assignment Experts. Our Team is Currently reviewing it and we shall published soon." );

//location.reload();

})
.fail(function() { // if fail then getting message
// just in case posting your form failed
$("#surveyForm").get(0).reset();
 grecaptcha.reset();

alert( "sorry your review are not submit. please fill all the fileds correctly" );

});
// to prevent refreshing the whole page page
return false;

});
});
</script>
