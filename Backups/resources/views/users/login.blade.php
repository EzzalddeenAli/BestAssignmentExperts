@include('layout.header')
<main>
            
		<section class="fullwidth-background bg-2">
                    
             
			<div class="grid-row">
                            
				<div class="login-block">
					<div class="logo">
						<img src="../theme/img/images/logo.jpg" data-at2x='../theme/img/images/logo.jpg' alt style="width: 250px;">
						
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
                                <a href="<?= URL::to('/users/register') ?>" class="button-fullwidth cws-button bt-color-3 border-radius alt">REGISTER</a>
                            
                        </form>
                    </div>
				</div>
			</div>
		</section>
	</main>
	@include('layout.footer')
      <script>       
    $(document).ready(function()
    {  
    $("#confirm").fadeOut(11000);
    });
    </script>
