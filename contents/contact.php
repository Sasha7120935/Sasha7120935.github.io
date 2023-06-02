<?php
/**
 * The content for displaying contact.
 *
 * @package Static Project
 * @subpackage WebAlex Theme
 * @since WebAlex Theme 1.0
 */

?>
<div id="contact" class="paddsection">
	<div class="contact-container">
		<div class="contact-block1">
			<div class="row">

				<div class="col-lg-6">
					<form action="" method="post" role="form" class="contactForm">
						<div class="row">

							<div id="sendmessage">Your message has been sent. Thank you!</div>
							<div id="errormessage"></div>

							<div class="col-lg-6">
								<div class="form-group contact-block1">
									<input type="text" name="name" class="form-control" id="name"
									       placeholder="Your Name" data-rule="minlen:4"
									       data-msg="Please enter at least 4 chars"/>
									<div class="validation"></div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<input type="email" class="form-control" name="email" id="email"
									       placeholder="Your Email" data-rule="email"
									       data-msg="Please enter a valid email"/>
									<div class="validation"></div>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" class="form-control" name="subject" id="subject"
									       placeholder="Subject" data-rule="minlen:4"
									       data-msg="Please enter at least 8 chars of subject"/>
									<div class="validation"></div>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<textarea class="form-control" name="message" rows="12" data-rule="required"
									          data-msg="Please write something for us" placeholder="Message"></textarea>
									<div class="validation"></div>
								</div>
							</div>

							<div class="col-lg-12">
								<input type="submit" class="btn btn-defeault btn-send" value="Send message">
							</div>

						</div>
					</form>
				</div>
				<div class="col-lg-6">
					<div class="contact-contact">
						<h2 class="mb-30">GET IN TOUCH</h2>
						<ul class="contact-details">
							<li><span>Prospect Field 20</span></li>
							<li><span>Dnipro</span></li>
							<li><span><a href="tel:+380501723550" target=”_blank”>+380501723550</a></span></li>
							<li><span><a href="mailto: abelous249@gmail.com"
							             target=”_blank”>abelous249@gmail.com</a></span></li>
						</ul>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
