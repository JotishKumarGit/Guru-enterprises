<!-- This is for modal  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Welcome To Guru Enterprises
				</h1>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12 col-md-6 my-2">
						<input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
					</div>
					<div class="col-12 col-md-6 my-2">
						<input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
					</div>
					<div class="col-12  my-2">
						<input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" onclick="go()" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>
</div>

<script type="">
	function go() {
		var name = document.querySelector(".name").value;
		var email = document.querySelector(".email").value;
		var number = document.querySelector(".number").value;
		var url = "https://wa.me/919962935369?text=" +
			"Name: " +
			name + " " +
			"Number: " +
			number + " " +
			"Email :" + email;
		window.open(url, "_blank").focus();
	}
</script>


<script>
	function contact() {
		var na = document.querySelector(".name").value;
		var em = document.querySelector(".email").value;
		var phone = document.querySelector(".phone").value;
		// var depart = document.querySelector(".department").value;
		// var doct = document.querySelector(".doctor").value;
		// var date = document.querySelector(".date").value;
		var mes = document.querySelector(".message").value;
		var url1 = "https://wa.me/919962935369?text=" +
			"Name: " +
			na + " " +
			"Email: " +
			em + " " +
			"Phone :" + phone +
			// "Department :" + department +
			// "Doctors :" + doctor +
			// "Date:" + date +
			"Message :" + mes;
		window.open(url1, "_blank").focus();
	}
</script>


<!-- Start Newsletter Area -->
<section class="newsletter section">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6  col-12">
				<!-- Start Newsletter Form -->
				<div class="subscribe-text ">
					<h6>Sign up for newsletter</h6>
					<p class="">Stay informed and connected with Guru Enterprises! By signing up for our newsletter,
						you’ll receive the latest news, updates, and health tips directly in your inbox.</p>
				</div>
				<!-- End Newsletter Form -->
			</div>
			<div class="col-lg-6  col-12">
				<!-- Start Newsletter Form -->
				<div class="subscribe-form ">
					<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
						<input name="EMAIL" placeholder="Your email address" class="common-input"
							onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
							required="" type="email">
						<button class="btn">Subscribe</button>
					</form>
				</div>
				<!-- End Newsletter Form -->
			</div>
		</div>
	</div>
</section>
<!-- /End Newsletter Area -->

<!-- Footer Area -->
<footer id="footer" class="footer ">
	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-footer">
						<h2>Guru Enterprises</h2>
						<p>At Guru Enterprises, we are committed to providing innovative solutions and high-quality
							products that enhance the well-being of individuals and businesses alike. With a strong
							focus on customer satisfaction and industry expertise.</p>
						<!-- Social -->
						<ul class="social">
							<li><a href="#"><i class="icofont-facebook"></i></a></li>
							<li><a href="#"><i class="icofont-google-plus"></i></a></li>
							<li><a href="#"><i class="icofont-twitter"></i></a></li>
							<li><a href="#"><i class="icofont-vimeo"></i></a></li>
							<li><a href="#"><i class="icofont-pinterest"></i></a></li>
						</ul>
						<!-- End Social -->
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-12">
					<div class="single-footer f-link ">
						<h2 class="">Quick Links</h2>
						<div class="row ">
							<div class="col-lg-6 col-md-6 col-12">
								<ul>
									<li><a href="index.php">Home</a>
									</li>
									<li><a href="about.php">About</a>
									</li>
									<li><a href="product.php">Products</a></li>
									<li><a href="service.php">Services</a>
									</li>

									<li><a href="contact.php">Contact
										</a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-footer">
						<h2>Open Hours</h2>
						<p>At Guru Enterprises, we are here to serve you! Our hours of operation are designed to
							provide flexibility and convenience for all our customers.</p>
						<ul class="time-sidual">
							<li class="day">Monday - Sunday <span>9.00-6.00</span></li>

						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="single-footer">
						<h2>Newsletter</h2>
						<p>Stay connected with Guru Enterprises and keep up to date with the latest news,
							health tips, and exclusive offers by subscribing to our newsletter!</p>
						<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
							<input name="email" placeholder="Email Address" class="common-input"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
								required="" type="email">
							<button class="button"><i class="icofont icofont-paper-plane"></i></button>
						</form>
						<img src="./img/logo.webp" alt="" class="mt-4">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Footer Top -->
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12">
					<div class="copyright-content">
						<p>Guru Enterprises © Copyright 2019 | All Rights Reserved Design by <a
								href="https://web2export.com/" target="_blank">Web2Export</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->

<!-- jquery Min JS -->
<script src="js/jquery.min.js"></script>
<!-- jquery Migrate JS -->
<script src="js/jquery-migrate-3.0.0.js"></script>
<!-- jquery Ui JS -->
<script src="js/jquery-ui.min.js"></script>
<!-- Easing JS -->
<script src="js/easing.js"></script>
<!-- Color JS -->
<script src="js/colors.js"></script>
<!-- Popper JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="js/bootstrap-datepicker.js"></script>
<!-- Jquery Nav JS -->
<script src="js/jquery.nav.js"></script>
<!-- Slicknav JS -->
<script src="js/slicknav.min.js"></script>
<!-- ScrollUp JS -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Niceselect JS -->
<script src="js/niceselect.js"></script>
<!-- Tilt Jquery JS -->
<script src="js/tilt.jquery.min.js"></script>
<!-- Owl Carousel JS -->
<script src="js/owl-carousel.js"></script>
<!-- counterup JS -->
<script src="js/jquery.counterup.min.js"></script>
<!-- Steller JS -->
<script src="js/steller.js"></script>
<!-- Wow JS -->
<script src="js/wow.min.js"></script>
<!-- Magnific Popup JS -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Counter Up CDN JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
</body>

</html>