<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>Login with BestAssignmentExperts and get Instant Help | Best Assignment Experts</title>
<meta name="description" content="Finance Assignment Help| USA, UK and Canada Best Writing Services">
<link hreflang="en" media="all" type="text/css" rel="stylesheet" href="https://www.bestassignmentexperts.com/theme/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 @include('layout.header')

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/theme/css/register.css">


<style>		
header.only-color{
display:none!important;
}	
	
	footer{
		display:none!important;
	}
	
</style>
	
	<!-- page content -->
	
	
	<div class="page-content container clear-fix cntnr">

		<div class="grid-col-row">
		
		
		<div class="grid-col grid-col-6">
		
		<div class="signup clearfix">
	<div class="left">
	  <div class="bottom">
        	<img src="../theme/img/images/sign-up.jpg" alt=""  class="bottom_img" style="width:100%">
        </div>
	
    	<div class="top">
        	<h1>Best Quality Assignment Help and Writing Service</h1>
            <hr>
        	<p>Over 50,000 Satisfied Students, In-house team of 150 Ex-Professors for completing your project.</p>
			<a href="https://www.bestassignmentexperts.com/place-order">Order Now</a>
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
					
					
				
<div class="row" id="login-box">





  <div class="left1">
  
 <div class="login-block">
					<div class="logo">
						<img src="../theme/img/images/logo.jpg" data-at2x='../theme/img/images/logo.jpg' alt="Best Assignment Experts" class="logo_img">
						
					</div>
                                      @if(Session::has('registration'))
                                     <div class='info-boxes confirmation-message' id="confirm" style="background: #f27c66"><span>{{session()->get('registration')}}</span></div>
                                     @endif
                                    {!! Html::ul($errors->all(), array('class'=>'error
s')) !!}                               {!! Form::open(array('url' => 'users/register','clas
s'=>'form-signin login-form')) !!}
					<form action="users/register" method="post" id="form-signin" class="form-signin login-form">
						<div class="form-group">
                                                    {!! Form::text('name', null, array('class' => 'form­c
ontrol login-input','placeholder' => 'Name')) !!}
							
							<span class="input-icon">
								<i class="fa fa-user"></i>
							</span>
						</div>
						<div class="form-group">
							{!! Form::text('email', null, array('class' => 'form­
control login-input','placeholder' => 'Email')) !!}
							<span class="input-icon">
								<i class="fa fa-envelope-o"></i>
							</span>
						</div>
						<div class="form-group">
                                                     {!! Form::password('password', array('class' => 'for
m­control login-input', 'placeholder' => 'Password')) !!}
							<span class="input-icon">
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<div class="form-group">
                                                    {!! Form::password('password_confirmation',['clas
s'=>'form­control login-input' ,'placeholder'=>'Confirm Password']) !!}
							<span class="input-icon">
								<i class="fa fa-lock"></i>
							</span>
						</div>
                                            
                                            	<div class="form-group">
                                                    {!! Form::text('referral_code', null, array('class' => 'form­c
ontrol login-input','placeholder' => 'Referal Code (Optional)')) !!}
							
							<span class="input-icon">
								<i class="fa fa-group"></i>
							</span>
						</div>
                                            
                                            
                                            {!! Form::submit('Sign Up' , array('class' => 'button-fullwidth cws-button bt-color-3 border-radius')) !!}
                                <h1 style="font-family: 'Raleway'"><a href="<?= URL::to('/users/login') ?>" class="button-fullwidth cws-button bt-color-3 border-radius alt">LOGIN</a></h1>
					{!! Form::close() !!}
				</div>
  </div>
  

  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <a href="/auth/facebook" target="_blank"><button class="social-signin facebook">Log in with facebook</button></a>
     <a href="/auth/google" target="_blank"><button class="social-signin google">Log in with Google+</button></a>
   
  </div>
  <div class="or">OR</div>
  
  

	</div>				
					
					</section>
					
				
					
				</main>
				<!-- / main content -->
			</div>
	
			
			
			
		</div>
	</div>
	
	<!--small devices-->
	<main class="main1">
	
		<section class="fullwidth-background bg-2">
		
		
		
			<div class="grid-row">
			
				<div class="login-block">
					<div class="logo">
							<img src="../theme/img/images/logo.jpg" data-at2x='../theme/img/images/logo.jpg' alt="Best Assignment Experts" class="logo_img">
						
					</div>
					 @if(Session::has('registration'))
                                     <div class='info-boxes confirmation-message' id="confirm" style="background: #f27c66"><span>{{session()->get('registration')}}</span></div>
                                     @endif
                                    {!! Html::ul($errors->all(), array('class'=>'error
s')) !!}                               {!! Form::open(array('url' => 'users/register','clas
s'=>'form-signin login-form')) !!}
					
					<a href="/auth/facebook" target="_blank" class="facebook cws-button border-radius half-button">Facebook</a>
					<a href="/auth/google"  target="_blank" class="google cws-button border-radius half-button">Google+</a>


					<div class="clear-both"></div>
					<div class="login-or">
						<hr class="hr-or">
						<span class="span-or">or</span>
					</div>
					<form action="users/register" method="post" id="form-signin" class="form-signin login-form">
						
							<div class="form-group">
                                                    {!! Form::text('name', null, array('class' => 'form­c
ontrol login-input','placeholder' => 'Name')) !!}
							
							<span class="input-icon">
								<i class="fa fa-user"></i>
							</span>
						</div>
						<div class="form-group">
							{!! Form::text('email', null, array('class' => 'form­
control login-input','placeholder' => 'Email')) !!}
							<span class="input-icon">
								<i class="fa fa-envelope-o"></i>
							</span>
						</div>
						
						
						
						<div class="form-group">
                                                     {!! Form::password('password', array('class' => 'for
m­control login-input', 'placeholder' => 'Password')) !!}
							<span class="input-icon">
								<i class="fa fa-lock"></i>
							</span>
						</div>
						<div class="form-group">
                                                    {!! Form::password('password_confirmation',['clas
s'=>'form­control login-input' ,'placeholder'=>'Confirm Password']) !!}
							<span class="input-icon">
								<i class="fa fa-lock"></i>
							</span>
						</div>
                               
						       
                                            	<div class="form-group">
                                                    {!! Form::text('referral_code', null, array('class' => 'form­c
ontrol login-input','placeholder' => 'Referal Code (Optional)')) !!}
							
							<span class="input-icon">
								<i class="fa fa-group"></i>
							</span>
						</div>
						
						     {!! Form::submit('Sign Up' , array('class' => 'button-fullwidth cws-button bt-color-3 border-radius')) !!}
                               <a href="<?= URL::to('/users/login') ?>" class="button-fullwidth cws-button bt-color-3 border-radius alt">LOGIN</a></h1>
					{!! Form::close() !!}
						
						
						
						
						
						
						
					
					</form>
				</div>
			</div>
			<div class="log_h51">
					
					<h5><a href="https://www.bestassignmentexperts.com/"><i class="fa fa-arrow-circle-left"></i> Back To Home</a></h5>
					</div>
		</section>
	</main>

	
	<!-- end small devices-->
	
	
	
		
	 @include('layout.footer')
	
	
	
	<!-- / page content -->
  <script>       
    $(document).ready(function()
    {  
    $("#confirm").fadeOut(11000);
    });
    </script>
