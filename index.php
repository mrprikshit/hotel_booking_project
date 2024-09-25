<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PKT Hotel || Home</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/style.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/utility.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
	<span id="menu_icon" class="bi bi-list"></span>
	<header>
		<div class="cont">
			<div class="logo"><a href="index.html">PKT <span class="sur-logo">Hotel <span class="bi bi-house-door-fill"></a></div>
			<div class="menu">
				<ul class="ullist">
					<li class="linklist"><a class="listlink" href="#home-section">Home</a></li>
					<li class="linklist"><a class="listlink" href="aboutus.php">About</a></li>
					<li class="linklist"><a class="listlink" href="#rooms-section">Rooms</a></li>
					<li class="linklist"><a class="listlink" href="facilities.php">Facilities</a></li>
					<li class="linklist"><a class="listlink" href="#testimonial-section">Testinomels</a></li>
					<li class="linklist"><a class="listlink" href="#contact-section">Contact us</a></li>
				</ul>
			</div>
			<div class="signup_login_btn">
				<a href="otherpages/login.php"><button id="loginbtn" class="login_reg_btn"><i class="bi bi-lock-fill"></i> Login</button></a>
				<a id="login_link" href="otherpages/register.php"><button id="registerbtn" class="login_reg_btn"><i class="bi bi-person-fill"></i> Register</button></a>
			</div>
		</div>
	</header>
	<div id="home-section" class="hero-container">
		<div class="left-cont">
			<h3 class="welcome">Book the best rooms in low prices</h2>
			<a href="#rooms-section"><button class="book-now">Book now</button></a>
		</div>
		<div class="right-cont"><img class="right-img" src="images/hero.png"></div>
	</div>
	<!-- check abability -->
	<div class="ca-hero">
		<form>
		<h4 class="ca-h4">Check Abability</h4>
		<div class="ca-inputboxes">
		<div class="ca-check">
			<label>Check in</label>
			<input class="ca-date" type="date" name="">
		</div>
		<div class="ca-check">
			<label>Check out</label>
			<input class="ca-date" type="date" name="">
		</div>
		<div class="ca-check">
			<label>Adult</label>
			<select class="adult-cl-sel">
				<option class="adult-cl-opt">One</option>
				<option class="adult-cl-opt">Two</option>
				<option class="adult-cl-opt">Three</option>
			</select>
		</div>
		<div class="ca-check">
			<label>Children</label>
			<select class="adult-cl-sel">
				<option class="adult-cl-opt">One</option>
				<option class="adult-cl-opt">Two</option>
				<option class="adult-cl-opt">Three</option>
			</select>
		</div>
		</div>
		<div class="ca-check-btn d-f">
			<input id="ca-submit" class="btn m-10 w-f" type="submit" name="">
		</div>
	</form>
	</div>
	<br><br><br>
	<span id="rooms-section"></span>
	<br><br><br>
	<div class="our_rooms_sec">
		<h2 class="or_span">OurRooms</h2>
		<div class="our-room-boxes">
			<div class="room-box">
				<img class="room-img" src="images/img2.jpg">
				<h4 class="room-title">Simple room</h4>
				<h5 class="room-price"><i class="bi bi-currency-rupee"></i>200 per night</h5>
				<div class="room-features">
					<h5 class="features-h5">Features</h5>
					<ul class="features-ullist">
						<li class="features-list">3.Rooms</li>
						<li class="features-list">3.Bedrooms</li>
						<li class="features-list">3.Balcony</li>
						<li class="features-list">3.Sofa</li>
					</ul>
				</div>
				<div class="room-features">
					<h5 class="features-h5">Features</h5>
					<ul class="features-ullist">
						<li class="features-list">3.Rooms</li>
						<li class="features-list">3.Bedrooms</li>
						<li class="features-list">3.Balcony</li>
						<li class="features-list">3.Sofa</li>
					</ul>
				</div>
				<div class="rating-div">
					<h5 class="rating-h5">Rating</h5>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
				</div>
				<div class="rooms-btn">
					<button class="btn">Book Now</button>
					<button class="btn-trans">More Details</button>
				</div>
			</div>
			<div class="room-box">
				<img class="room-img" src="images/img2.jpg">
				<h4 class="room-title">Simple room</h4>
				<h5 class="room-price"><i class="bi bi-currency-rupee"></i>200 per night</h5>
				<div class="room-features">
					<h5 class="features-h5">Features</h5>
					<ul class="features-ullist">
						<li class="features-list">3 Rooms</li>
						<li class="features-list">3 Bedrooms</li>
						<li class="features-list">3 Balcony</li>
						<li class="features-list">3 Sofa</li>
					</ul>
				</div>
				<div class="room-features">
					<h5 class="features-h5">Features</h5>
					<ul class="features-ullist">
						<li class="features-list">3 Rooms</li>
						<li class="features-list">3 Bedrooms</li>
						<li class="features-list">3 Balcony</li>
						<li class="features-list">3 Sofa</li>
					</ul>
				</div>
				<div class="rating-div">
					<h5 class="rating-h5">Rating</h5>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
				</div>
				<div class="rooms-btn">
					<button class="btn">Book Now</button>
					<button class="btn-trans">More Details</button>
				</div>
			</div>
			<div class="room-box">
				<img class="room-img" src="images/img2.jpg">
				<h4 class="room-title">Simple room</h4>
				<h5 class="room-price"><i class="bi bi-currency-rupee"></i>200 per night</h5>
				<div class="room-features">
					<h5 class="features-h5">Features</h5>
					<ul class="features-ullist">
						<li class="features-list">3 Rooms</li>
						<li class="features-list">3 Bedrooms</li>
						<li class="features-list">3 Balcony</li>
						<li class="features-list">3 Sofa</li>
					</ul>
				</div>
				<div class="room-features">
					<h5 class="features-h5">Features</h5>
					<ul class="features-ullist">
						<li class="features-list">3 Rooms</li>
						<li class="features-list">3 Bedrooms</li>
						<li class="features-list">3 Balcony</li>
						<li class="features-list">3 Sofa</li>
					</ul>
				</div>
				<div class="rating-div">
					<h5 class="rating-h5">Rating</h5>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
					<span class="rating-stars"><i class="bi bi-star-fill color-y"></i></span>
				</div>
				<div class="rooms-btn">
					<button class="btn">Book Now</button>
					<button class="btn-trans">More Details</button>
				</div>
			</div>
		</div>
		<div class="sm-div">
		<a href="#"><button class="seemore_btn">More Rooms >>></button></a>
		</div>
	</div>
	<br><br><br>
	<span id="facilities-section"></span>
	<br><br><br>
	<div class="facilities_sec">
		<h2 class="facilities_h3">Our Facilities</h2>
		<div class="facilities_boxes">
			<div class="facilities_box">
				<i id="wifi-facilities-icon" class="bi bi-wifi"></i>
				<h2 class="facilities_name">wifi</h2>
			</div>
			<div class="facilities_box">
				<i id="wifi-facilities-icon" class="bi bi-wifi"></i>
				<h2 class="facilities_name">wifi</h2>
			</div>
			<div class="facilities_box">
				<i id="wifi-facilities-icon" class="bi bi-wifi"></i>
				<h2 class="facilities_name">wifi</h2>
			</div>
			<div class="facilities_box">
				<i id="wifi-facilities-icon" class="bi bi-wifi"></i>
				<h2 class="facilities_name">wifi</h2>
			</div>
		</div>
		<div class="sm-div">
			<a href="#"><button class="seemore_btn ta-c">More Facilities >>></button></a>
		</div>
	</div>
	<br><br><br>
	<span id="testimonial-section"></span>
	<br><br><br>
	<div class="testinomal_sec">
		<h2 class="testinomal_h2">Testinomal</h2>
		<div class="testinomal_boxes">
			<div class="testinomal_box">
				<h4 class="t-title">Random User</h4>
				<p class="about_user">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet molestiae distinctio sapiente cupiditate fugit neque architecto alias atque laudantium inventore?</p>
				<div class="t-user-rating">
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
				</div>
			</div>
			<div class="testinomal_box">
				<h4 class="t-title">Random User</h4>
				<p class="about_user">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet molestiae distinctio sapiente cupiditate fugit neque architecto alias atque laudantium inventore?</p>
				<div class="t-user-rating">
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
				</div>
			</div>
			<div class="testinomal_box">
				<h4 class="t-title">Random User</h4>
				<p class="about_user">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet molestiae distinctio sapiente cupiditate fugit neque architecto alias atque laudantium inventore?</p>
				<div class="t-user-rating">
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
				</div>
			</div>
			<div class="testinomal_box">
				<h4 class="t-title">Random User</h4>
				<p class="about_user">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet molestiae distinctio sapiente cupiditate fugit neque architecto alias atque laudantium inventore?</p>
				<div class="t-user-rating">
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
					<i class="bi bi-star-fill"></i>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
	<span id="contact-section"></span>
	<br><br><br>
	<h2 class="contact_h2">Get in touch</h2>
	<div class="contact_sec">
		<div class="contact_left_sec">
			<iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217947.23250842595!2d76.6602304!3d31.402400650000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39053f6d36e95435%3A0xdf4a00cf1fabaf65!2sBilaspur%2C%20Himachal%20Pradesh!5e0!3m2!1sen!2sin!4v1723785441215!5m2!1sen!2sin" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="contact_right_sec">
			<div class="mobile_no_sec">
				<h3>Call us</h3>
				<span><i class="bi bi-telephone-fill"></i> +91 9234638273</span>
				<span><i class="bi bi-telephone-fill"></i> +91 9723943023</span>
			</div>
			<div class="social_media_links">
				<h3>Follow us</h3>
				<a href="#"><span><i class="bi bi-whatsapp"></i> Whatsapp</span></a>
				<a href="#"><span><i class="bi bi-instagram"></i> Instagram</span></a>
				<a href="#"><span><i class="bi bi-youtube"></i> Youtube</span></a>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="about_page">
			<h4>PKT Hotel</h4>
			<p class="about_p">
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt unde minima totam? Magnam perferendis quibusdam eum hic distinctio reiciendis facere.
			</p>
		</div>
		<div class="footer_links">
			<h4>Links</h4>
			<ul class="footer_ullist">
				<li class="footer_linklist"><a class="footer_listlink" href="#">Home</a></li>
				<li class="footer_linklist"><a class="footer_listlink" href="#">About</a></li>
				<li class="footer_linklist"><a class="footer_listlink" href="#">Rooms</a></li>
				<li class="footer_linklist"><a class="footer_listlink" href="facilities.html">Facilities</a></li>
				<li class="footer_linklist"><a class="footer_listlink" href="#">Testimonial</a></li>
				<li class="footer_linklist"><a class="footer_listlink" href="#">Contact us</a></li>
			</ul>
		</div>
		<div class="footer_social_links">
			<h4>Follow us</h4>
			<ul class="social_ullist">
				<li class="social_linklist"><a class="social_listlink" href="#"><i class="bi bi-whatsapp"></i>  Whatsapp</a></li>
				<li class="social_linklist"><a class="social_listlink" href="#"><i class="bi bi-youtube"></i>  Youtube</a></li>
				<li class="social_linklist"><a class="social_listlink" href="#"><i class="bi bi-instagram"></i>  Instagram</a></li>
			</ul>
		</div>
	</div>
	<div class="footer_credit">Designed and Developed by <a href="#">PRIKSHIT</a></div>
<script type="text/javascript" src="javascript/script.js"></script>
</body>
</html>
