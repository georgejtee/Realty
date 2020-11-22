
<?php if (session()->get('success')): ?>
<div class="alert alert-success alert-dismissible" role="alert" id="alerts">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong> <?= session()->get('success') ?></strong>
</div>

<?php endif; ?>

</main>
<footer>
	<!-- Footer Start-->
	<div class="footer-area footer-bg footer-padding">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
					<div class="single-footer-caption mb-50">
						<!-- logo -->
						<div class="footer-logo">
							<a href="index.html"><img src="<?= base_url('/assets/img/logo/realty-crowd-logo-transparent.png')?>" alt="Realty Crowd Peer to Peer Crowd Fundning"></a>
						</div>
						<div class="single-footer-caption mb-30">
							<div class="footer-tittle">
								<div class="footer-pera">
									<p>Seddo eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur pisicin elit, sed do eiusmod tempor.</p>
								</div>
							</div>
						</div>
						<!-- footer social -->
						<!--george-->
						<div class="footer-social">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fas fa-globe"></i></a>
							<a href="#"><i class="fab fa-behance"></i></a>
						</div>
					</div>

				</div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-5">
					<div class="single-footer-caption mb-50">
						<div class="footer-tittle">
							<h4>Quick Links</h4>
							<ul>
								<li><a href="index.html">T&Cs</a></li>
								<li><a href="about.html">Forms</a></li>
								<li><a href="#">Upcoming Events</a></li>
								<li><a href="blog.html">Top Investors</a></li>
								<li><a href="contact.html">Awards</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
					<div class="single-footer-caption mb-50">
						<div class="footer-tittle">
							<h4>Top Provinces</h4>
							<ul>
								<li><a href="#"></a>Gauteng Province</li>
								<li><a href="#">Western Cape Province</a></li>
								<li><a href="#">Eastern Cape Province</a></li>
								<li><a href="#">KwaZulu Natal Province</a></li>
								<li><a href="#">Northen Cape Province</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5">
					<div class="single-footer-caption mb-50">
						<div class="footer-tittle">
							<h4>Newsletter</h4>
							<div class="footer-pera footer-pera2">
								<p>For Lastest update Sign up here</p>
							</div>
							<!-- Form -->
							<div class="footer-form">
								<div id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part">
										<input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
										<div class="submit-btn">
											<button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">

												Subscribe <i class="ti-angle-double-right"></i></button>
											</div>
											<div class="mt-10 info"></div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer-bottom aera -->
		<div class="footer-bottom-area footer-bg">
			<div class="container">
				<div class="footer-border">
					<div class="row d-flex align-items-center">
						<div class="col-xl-12">
							<div class="footer-copy-right text-center">
								<p>
									Copyright &copy;<script>
										document.write(new Date().getFullYear());
									</script> All rights reserved | Developed by <a href="https://colorlib.com" target="_blank">Onesmus Digital Studios</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End-->
	</footer>

	<!-- JS here -->

	<!-- All JS Custom Plugins Link Here here -->


</body>
<script type="text/javascript">
	function myFunction() {
   $('#alerts').fadeIn(1000);
   setTimeout(function() { 
       $('#alerts').fadeOut(1000); 
   }, 5000);
}
</script>
</html>