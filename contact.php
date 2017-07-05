<?php include('header.php'); ?>
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap" style="padding-top:10px">




				<div class="container clearfix" style="padding-top:40px">

									<!-- Postcontent
									============================================= -->
									<div class="postcontent nobottommargin">

										<h3>Send us an Email</h3>

										<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

										<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail-new.php" method="post" novalidate="novalidate">

											<div class="form-process"></div>

											<div class="col_one_third">
												<label for="template-contactform-name">Name <small>*</small></label>
												<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" aria-required="true">
											</div>

											<div class="col_one_third">
												<label for="template-contactform-email">Email <small>*</small></label>
												<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" aria-required="true">
											</div>

											<div class="col_one_third col_last">
												<label for="template-contactform-phone">Phone</label>
												<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control">
											</div>

											<div class="clear"></div>

											<div class="col_two_third">
												<label for="template-contactform-subject">Subject <small>*</small></label>
												<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" aria-required="true">
											</div>

											<div class="col_one_third col_last">
												<label for="template-contactform-service">Services</label>
												<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
													<option value="">-- Select One --</option>
													<option value="Wordpress">Wordpress</option>
													<option value="PHP / MySQL">PHP / MySQL</option>
													<option value="HTML5 / CSS3">HTML5 / CSS3</option>
													<option value="Graphic Design">Graphic Design</option>
												</select>
											</div>

											<div class="clear"></div>

											<div class="col_full" style="display: none;">
												<label for="template-contactform-nophone">Phone</label>
												<input type="text" id="template-contactform-nophone" name="template-contactform-nophone" class="sm-form-control" value="">
											</div>

											<div class="col_full">
												<label for="template-contactform-message">Message <small>*</small></label>
												<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30" aria-required="true"></textarea>
											</div>

											<div class="col_full">
												<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
											</div>

										</form>

										<script type="text/javascript">

											$("#template-contactform").validate({
												submitHandler: function(form) {
													$('.form-process').fadeIn();
													$(form).ajaxSubmit({
														target: '#contact-form-result',
														success: function() {
															$('.form-process').fadeOut();
															$(form).find('.sm-form-control').val('');
															$('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
															SEMICOLON.widget.notifications($('#contact-form-result'));
														}
													});
												}
											});

											$('#template-contactform-nophone').parent().hide();

										</script>

									</div><!-- .postcontent end -->

									<!-- Sidebar
									============================================= -->
									<div class="sidebar col_last nobottommargin">

										<address>
											<strong>Headquarters:</strong><br>
											7ShineTech Electrical Services<br>
Duke House<br>
15 Seymour Street<br>
Woolwich<br>
London<br>
SE18 6SX<br>
										</address>
										<abbr title="Phone Number"><strong>Phone:</strong></abbr> 0208 317 4933<br>
										<abbr title="Phone Number"><strong>Phone:</strong></abbr> 0793 072 5746<br>
										<abbr title="Email Address"><strong>Email:</strong></abbr> info@shinetech.com



										<div class="widget noborder notoppadding">

											<a href="#" class="social-icon si-small si-dark si-facebook">
												<i class="icon-facebook"></i>
												<i class="icon-facebook"></i>
											</a>

											<a href="#" class="social-icon si-small si-dark si-twitter">
												<i class="icon-twitter"></i>
												<i class="icon-twitter"></i>
											</a>

											<a href="#" class="social-icon si-small si-dark si-dribbble">
												<i class="icon-dribbble"></i>
												<i class="icon-dribbble"></i>
											</a>

											<a href="#" class="social-icon si-small si-dark si-forrst">
												<i class="icon-forrst"></i>
												<i class="icon-forrst"></i>
											</a>

											<a href="#" class="social-icon si-small si-dark si-pinterest">
												<i class="icon-pinterest"></i>
												<i class="icon-pinterest"></i>
											</a>

											<a href="#" class="social-icon si-small si-dark si-gplus">
												<i class="icon-gplus"></i>
												<i class="icon-gplus"></i>
											</a>

										</div>

									</div><!-- .sidebar end -->

								</div>










			</div>
			<div id="map" class="with-border">

		</section><!-- #content end -->

		<?php include('footer.php'); ?>
