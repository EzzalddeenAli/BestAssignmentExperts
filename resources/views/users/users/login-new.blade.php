<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>Login with BestAssignmentExperts and get Instant Help | Best Assignment Experts</title>
<meta name="description" content="Accounting Assignment help| US and Canada Best Writing Services">
 <link hreflang="en" media="all" type="text/css" rel="stylesheet" href="https://www.bestassignmentexperts.com/theme/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
	<style>
	.signup .left {
    width: 88%;
    float: left;
    background: url(../theme/img/images/sign-up-leftbg.jpg) repeat top center;
}
	
	.signup .left .top {
    padding: 10% 15% 10% 15%;
}

.signup .left .top h1 {
        color: #fff;
    font-size: 28px;
    font-weight: 400;
    line-height: 35px;
}

.signup .left .top hr {
    width: 80px;
    background: #fff;
    border: none;
    margin: 20px 0;
	    height: 1px;
}
	.signup .left .top p {
    font-size: 15px;
    color: #fff;
    font-weight: 100;
}

.signup .left .top a {
    background: #18bb7c;
    margin-top: 5px;
    padding: 7px 30px;
    text-transform: uppercase;
    color: #fff;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-top-left-radius: 10px;
    -ms-border-top-left-radius: 10px;
    -moz-border-top-left-radius: 10px;
    -webkit-border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    -ms-border-bottom-right-radius: 10px;
    -moz-border-bottom-right-radius: 10px;
    -webkit-border-bottom-right-radius: 10px;
	   font-weight: 600;
	    border: 2px solid #18bb7c;
}


.signup .left .top a:hover {
    border: 2px solid #18bb7c;
    background-color: #fff;
    color: #000;
    font-weight: 600;
	}

.cntnr{
	margin:0px;
	padding:0px;
}

.login-block {
margin: 110px auto;
    width: 100%;
    max-width: 100%;
       background: transparent;
    padding: 0;
    box-shadow: none;
}

.log_h5{
	text-align: right;
   margin: 25px -145px 0px 0px;
}

body {
  
    background-color: #f2f2f2;
}

	</style>
	
	<!-- page content -->
	
	
	<div class="page-content container clear-fix cntnr">

		<div class="grid-col-row">
		
		
		<div class="grid-col grid-col-6">
		
		<div class="signup clearfix">
	<div class="left">
    	<div class="top">
        	<h1>Top Quality Assignment Help and Writing Service</h1>
            <hr>
        	<p>Over 50,000 Satisfied Students, In-house team of 150 Ex-Professors for completing your project.</p>
			<a href="https://www.bestassignmentexperts.com/place-order">Order Now</a>
        </div>
        <div class="bottom">
        	<img src="../theme/img/images/sign-up.jpg" alt="" style="width:100%">
        </div>
    </div>
</div>
		</div>
	
	<div class="grid-col grid-col-6">
				<!-- main content -->
				<main>
					<section class="clear-fix">
					
					<div class="log_h5">
					
					<h5><a href="https://www.bestassignmentexperts.com/"><i class="fa fa-arrow-circle-left"></i> Back To Home</a></h5>
					</div>
					
						<div class="login-block">
					<div class="logo">
						<img src="../theme/img/images/logo.png" data-at2x='../theme/img/images/logo.png' alt="Best Assignment Experts" style="width: 250px;">
						
					</div>      
                                     @if(Session::has('registration'))
                                     <div class='info-boxes confirmation-message' id="confirm"><span>{{session()->get('registration')}}</span></div>
                                     @endif
					<!-- <a href="#" class="facebook cws-button border-radius half-button">Facebook</a>
					<a href="#" class="twitter cws-button border-radius half-button">Twitter</a> -->
					
                                         {!! Html::ul($errors->all(), array('class'=>'alert alert-danger errors')) !!}
                                          <form action="<?=URL::to('/users/login')?>" method="post" id="form-signin" class="form-signin login-form">
                            
                                
								
								<div class="input-group form-group">
                                    <input type="text" class="form-control login-input" name="email" placeholder="example@gmail.com">
                                    <span class="input-icon">
								<i class="fa fa-user"></i>
							</span>
                                </div>
                                <div class="input-group form-group">
                                    <input type="password" class="form-control login-input" name="password" placeholder="Password">
                                    <span class="input-icon">
								<i class="fa fa-lock"></i>
							</span>
                                </div>
								
							
                            
                            
                                <p class="small">
                                    <a href="<?= URL::to('/password/email') ?>"><b>Have you forgotten your password ? </b></a>
                                    
                                </p>   
                            
                                <button type="submit" class="button-fullwidth cws-button bt-color-3 border-radius">LOGIN</button>
                                <h1 style="font-family: 'Raleway'"><a href="<?= URL::to('/users/register') ?>" class="button-fullwidth cws-button bt-color-3 border-radius alt">REGISTER</a></h1>
                            
                        </form>
                    </div>
					</section>
					
				
					
				</main>
				<!-- / main content -->
			</div>
	
			
			
			
		</div>
	</div>
	<!-- / page content -->
  <script>       
    $(document).ready(function()
    {  
    $("#confirm").fadeOut(11000);
    });
    </script>
