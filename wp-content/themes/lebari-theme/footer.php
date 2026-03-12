<!-- Footer Style Three -->
<?php
$footer_contact1 = (string) get_field('footer_contact1');
$footer_contact2 = (string) get_field('footer_contact2');
$footer_email_raw = (string) get_field('footer_email');
$footer_email = sanitize_email($footer_email_raw);
$footer_tel_raw = (string) get_field('footer_tel');
$footer_tel_href = preg_replace('/[^0-9+]/', '', $footer_tel_raw);
?>
<footer class="footer-style-three" id="footer">
	<div class="icon-layer-one"
		style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-20.png)">
	</div>
	<div class="icon-layer-two"
		style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-17.png)">
	</div>
	<div class="icon-layer-three"
		style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/images2/icons/icon-24.png)">
	</div>
	<div class="auto-container">
		<div class="auto-container">
			<!-- Upper Box -->
			<div class="upper-box">
				<div class="row clearfix">
					<!-- Title Column -->
					<div class="title-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2><?php echo get_field('footer_title') ?></h2>
							<div class="text"><?php echo get_field('footer_subtitle') ?></div>
						</div>
					</div>
					<!-- Button Column -->
					<div class="button-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Button Box -->
							<div class="button-box">
								<a class="theme-btn btn-style-twelve" href="#quiz-popup"
									data-fancybox><?php echo get_field('footer_btn')['title'] ?>
								</a>
								<?php /*<span
								   class="icon"></span> */ ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Widgets Section-->
		<div class="widgets-section">
			<div class="row clearfix">

				<!-- Column -->
				<div class="big-column col-12">
					<div class="row clearfix justify-content-center align-items-center footer-contacts-row">

						<!-- Footer Column -->
						<div class="footer-column col-lg-5 col-md-6 col-sm-12">
							<div class="footer-widget logo-widget">
								<div class="logo">
									<a href="/"><img
											src="<?php echo get_template_directory_uri(); ?>/assets/img/images2/logo.png"
											alt="" /></a>
								</div>
							
							</div>
						</div>

						<!-- Footer Column -->
						<div class="footer-column col-lg-5 col-md-6 col-sm-12">
							<div class="footer-widget contact-widget">
								<h4>Контакты</h4>
								<ul class="contact-list contact-list--cards">
									<li class="contact-item contact-item-address">
										<span class="contact-label">Адрес</span>
										<span class="contact-value"><?php echo esc_html($footer_contact1); ?><br><?php echo esc_html($footer_contact2); ?></span>
									</li>
									<li class="contact-item contact-item-email">
										<span class="contact-label">Email</span>
										<a class="contact-value" href="mailto:<?php echo esc_attr($footer_email); ?>"><?php echo esc_html($footer_email_raw); ?></a>
									</li>
									<li class="contact-item contact-item-phone">
										<span class="contact-label">Телефон</span>
										<a class="contact-value" href="tel:<?php echo esc_attr($footer_tel_href); ?>"><?php echo esc_html($footer_tel_raw); ?></a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>

				

			</div>
		</div>

		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="copyright">Частная школа «Лесенка», Ставрополь</div>
			<div class="copyright" style="margin-top: 15px; color: #43b97d"><a href="https://sy3.ru"
					style="color: #43b97d">Создание и
					продвижение сайтов в
					Ставрополе - SY3.ru</a></div>
		</div>

	</div>
</footer>
<!-- End Footer Style Three -->

</div>
<!--End pagewrapper-->

<!-- Header Search -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-multiply"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/owl.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

<!-- Модалка с квизом -->
<div style="display: none;" id="quiz-popup">
	<div class="quiz-modal-wrapper" style="padding: 30px; max-width: 600px;">
		<?php echo do_shortcode('[quizle name="685d829bb2c2f"]'); ?>
	</div>
</div>


<?php wp_footer(); ?>

</body>

</html>