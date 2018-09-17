	<?php
	$pagename='Contact';
	include('head.php');?>	
		
		<div class="main-container">
		<section class="contact-thirds">
		<li class="overlay">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" src="img/contact-bg.jpg">
						</div>
				<div class="container">
					<div class="row">
							<div class="col-sm-12 text-center">
								<h1 class='shoreline contact-header'>sending love notes</h1>
								<p class='contact-quote'>“You might not have been my first love<br>
but you were the love that made<br>
all other loves seem<br>
irrelevant.”<br><br>

- Rupi Kaur -</p>
							</div>
					</div>
					
					<div class="row">
						
						
						<div class="col-sm-12">
							<div class="form-wrapper clearfix">
								<form class="form-contact email-form">
									<div class="inputs-wrapper">
									<div class='col-sm-6'>
										<input class="form-name validate-required" type="text" placeholder="Name" name="name">
										<input class="form-email validate-required validate-email" type="text" placeholder="Email" name="email">
										<input class="form-subject" type="text" placeholder="Subject" name="subject">
									</div>
									<div class='col-sm-6'>
										<textarea class="form-message validate-required" name="message" placeholder="Message"></textarea>
										</div>
									</div>
									<div class='col-sm-2 col-sm-offset-10'>
									<input type="submit" class="send-form" value="Send"></div>
									<div class="form-success">
										<span class="text-white">Message sent - Thanks for your enquiry</span>
									</div>
									<div class="form-error">
										Please complete all fields correctly
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class='pre-footer'></div>
			</section>
		</div>
		<?php include('footer.php'); include('foot.php');?>		