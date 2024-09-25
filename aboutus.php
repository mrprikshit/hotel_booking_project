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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- 	<link rel="stylesheet" type="text/css" href="stylesheet/sw/swiper.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/bs/bootstrap.css"> -->
</head>
<body>
	<span id="menu_icon" class="bi bi-list"></span>
	<header>
		<div class="cont">
			<div class="logo"><a href="index.php">PKT <span class="sur-logo">Hotel <span class="bi bi-house-door-fill"></a></div>
			<div class="menu">
				<ul class="ullist">
					<li class="linklist"><a class="listlink" href="index.php">Home</a></li>
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
    <!-- main section start -->
	 <br><br><br>
     <div class="aboutus_page_section">
        <div class="aboutus_heading">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam porro voluptatem iusto quae debitis molestiae a unde dolores, alias quod!</p>
        </div>
        <div class="about_owner">
            <div class="left_side">
                <h1>Lorem ipsum dolor sit.</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente molestias dolor laborum repellat, sint facilis dicta, magni vel tempore reprehenderit sit numquam fugit optio. Quo excepturi facere quae suscipit qui!</p>
            </div>
            <div class="right_side">
                <img src="images/profile.jpg" alt="">
            </div>
        </div>
        <div class="about_feature_section">
            <div class="about_feature_box">
                <img src="images/svg/customer_icon.png" alt="">
                <h2 class="about_feature">100+ ROOMS</h2>
            </div>
            <div class="about_feature_box">
                <img src="images/svg/facilities.png" alt="">
                <h2 class="about_feature">BEST FACILITIES</h2>
            </div>
            <div class="about_feature_box">
                <img src="images/svg/hotel_icon.png" alt="">
                <h2 class="about_feature">100+ ROOMS</h2>
            </div>
            <div class="about_feature_box">
                <img src="images/svg/reviews.png" alt="">
                <h2 class="about_feature">150+ REVIEWS</h2>
            </div>
        </div>
        <div class="management_section">
            <div class="management_heading">
                <h2>Management Team</h2>
            </div>
            <div class="team_pic">
                <div class="team_profile">
                    <img src="images/profile.jpg">
                    <div class="team_member_name">Random Name</div>
                </div>
                <div class="team_profile">
                    <img src="images/profile.jpg">
                    <div class="team_member_name">Random Name</div>
                </div>
                <div class="team_profile">
                    <img src="images/profile.jpg">
                    <div class="team_member_name">Random Name</div>
                </div>
                <div class="team_profile">
                    <img src="images/profile.jpg">
                    <div class="team_member_name">Random Name</div>
                </div>
            </div>
        </div>
     </div>
    <!-- footer start here -->
	<div style="bottom: 0;" class="footer">
		<div class="about_page">
			<h4>PKT Hotel</h4>
			<p class="about_p">
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt unde minima totam? Magnam perferendis quibusdam eum hic distinctio reiciendis facere.
			</p>
		</div>
		<div class="footer_links">
			<h4>Links</h4>
			<ul class="footer_ullist">
				<li class="footer_linklist"><a class="footer_listlink" href="index.html">Home</a></li>
				<li class="footer_linklist"><a class="footer_listlink" href="about.html">About</a></li>
				<li class="footer_linklist"><a class="footer_listlink" href="#">Rooms</a></li>
				<li class="footer_linklist"><a class="footer_listlink" href="#">Facilities</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
    <script type="text/javascript" src="javascript/script.js"></script>
<!-- <script type="text/javascript" src="stylesheet/bs/bootstrap.js"></script>
<script type="text/javascript" src="stylesheet/sw/swiper.js"></script> -->
</body>
</html>
