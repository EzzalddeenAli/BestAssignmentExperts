<!-- page content -->
@include('layout.header')
	<div class="page-content woocommerce">
		<!-- map 
		<div class="container clear-fix">
			<div class="map wow fadeInUp">
				<div id="map" class="google-map"></div>
			</div>
		</div>
		 map -->
		<!-- contact form section -->
		<div class="grid-row clear-fix">
			<div class="grid-col-row">
				<div class="grid-col grid-col-8">
					<section>
						<h2>Contact us</h2>
						<div class="widget-contact-form">
							<!-- contact-form -->
							<div class="info-boxes error-message alert-boxes error-alert" id="feedback-form-errors">
								<strong>Attention!</strong>
								<div class="message"></div>
							</div>
							<div class="email_server_responce"></div>
							<form action="/query-email-sent-onpage" method="post" class="contact-form alt clear-fix">
								<input type="text" name="name" value="" size="40" placeholder="Your Name" aria-invalid="false" aria-required="true">
								<input type="text" name="email" value="" size="40" placeholder="Your Email" aria-required="true">
								<input type="text" name="subject" value="" size="40" placeholder="Subject" aria-invalid="false" aria-required="true">
								<textarea name="message"  cols="40" rows="3" placeholder="Your Message" aria-invalid="false" aria-required="true"></textarea>
								<input type="submit" value="Send" class="cws-button border-radius alt">
							</form>
							<!--/contact-form -->
						</div>
					</section>
				</div>
				<div class="grid-col grid-col-4 widget-address">
					<section>
						<h2>Our Offices</h2>
						<address>
							<p><strong class="fs-18">Phone number:</strong><br/>
								<a href="tel:610280065002">For instant help call us @ (+61) 0280065002</a><br/>
								
							</p>
							<p><strong class="fs-18">E-mail:</strong><br/>

								<a href="mailto:sales@bestassignmentexperts.com">sales@bestassignmentexperts.com </a><br/>
								<a href="mailto:contact@bestassignmentexperts.com">contact@bestassignmentexperts.com</a>
							</p>
							<p><strong class="fs-18">We are open:</strong><br/>
								<a href="tel:610280065002">Monday – Sunday (24X7)</a><br/>
								
							</p>
						</address>
					</section>
				</div>
			</div>
		</div>
		<!-- / contact form section -->
	</div>
	<!-- / page content -->
@include('layout.footer')
