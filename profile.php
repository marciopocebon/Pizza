<?php include('connection.php');
if(!isset($_SESSION['user']))
{
	header('location:index.php');
	exit;
}
?>
<!doctype html>
<html lang="en">
<head>
<title>Profile</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food Recipe a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<!-- gallery -->
<link rel="stylesheet" href="css/lightGallery.css" type="text/css" media="all" />
<!-- //gallery -->

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- font-awesome-icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome-icons -->

<!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //google fonts -->

</head>
	
<body>


<div class="banner-header banner2">
	<div class="banner-dott1">
		<!--header-->
		<div class="header">
		<div class="container-fluid">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="user.php">π MEMBER</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown"><img src="user.png" width="50px" height="50px"/><b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="user.php"><?php echo $_SESSION['user']['Firstname'] ?></a></li>
										<li><a href="updateuser.php?Userid=<?php echo $_SESSION['user']['Userid']?>">Edit</a></li>
									</ul>
							  </li>
							<li><a href="changepwduser.php?Userid=<?php echo $_SESSION['user']['Userid']?>">Change Password</a></li>
							<li><a href="contact1.php">Contact</a></li>
							<li><a href="user.php">WELCOME <?php echo $_SESSION['user']['Firstname']?> !</a></li>
							<li><a href="logout.php">Sign Out</a></li>
							<li><a href="cart.php"><img src="cart.png" width="50px" height="50px"/></a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
		<!--//header-->
	</div>
</div>
<!-- // banner -->

<div id="gallery" class="gallery_main">
		<div class="container">
			<h2 class="heading">Your<span>Profile</span></h2>
			<p class="heading"><font size="5" face="Agency FB"><u><?php echo $_SESSION['user']['Firstname'] ?></u></font></p>
			<?php if(!empty($_GET['Userid']))
{
	$Userid=$_GET['Userid'];
	$getPrevData=mysqli_query($connect, "SELECT * FROM userprofile WHERE Userid='$Userid'");
	if(mysqli_num_rows($getPrevData)==1)
		$row=mysqli_fetch_array($getPrevData);
}
?>
	<br><br><br><table align="center" width="50%" style="outline-style:solid;background-color:#e0e0d1">
		<tr>
			<td><b>Your Name</b></td>
			<td>:<?php echo $row['Firstname'].$row['Lastname']?></td>
		</tr>
		<tr>
			<td><b>Date of Birth</b></td>
			<td>:<?php echo $row['Dateofbirth']?></td>
		</tr>
		<tr>
			<td><b>Gender</b></td>
			<td>:<?php echo $row['Gender']?></td>
		</tr>
		<tr>
			<td><b>Street</b></td>
			<td>:<?php echo $row['Street'] ?></td>
		</tr>
		<tr>
			<td><b>Location</b></td>
			<td>:<?php echo $row['Location'] ?></td>
		</tr>
		<tr>
			<td><b>City</b></td>
			<td>:<?php echo $row['City'] ?></td>
		</tr>
		<tr>
			<td><b>State</b></td>
			<td>:<?php echo $row['State'] ?></td>
		</tr>
		<tr>
			<td><b>Pincode</b></td>
			<td>:<?php echo $row['Pincode'] ?></td>
		</tr>
		<tr>
			<td><b>Mob. Number</b></td>
			<td>:<?php echo $row['MobileNo'] ?></td>
		</tr>
		<tr>
			<td><b>Email ID</b></td>
			<td>:<?php echo $row['EmailId'] ?></td>
		</tr>
	</table><br><br><br>
</div></div>
<div class="footer w3ls">
	<div class="container">
		<div class="footer-main">
			<div class="footer-top">
				<div class="col-md-4 ftr-grid fg1">
					<h3>opening timings</h3>
					<p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Mon - friday</span> : 9am to 8pm</p>
					<p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Saturday</span> : 9am to 5pm</p>
					<p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Sunday</span> : 6am to 11pm</p>
				</div>
				<div class="col-md-4 ftr-grid fg2 mid-gd">
					<h3>Our Address</h3>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>Aamtala Sukanta Pally, Near Saraitikar More, Golapbag.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>(+91) 3988 3988</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p><a href="mailto:info@example.com">despacito.pizza@gmail.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 ftr-grid fg2">
					<h3>Recent posts</h3>
					<p>SAVE THE PLANET, IT'S THE ONLY PLACE WHERE YOU GET DESPACITO PIZZA.</p>
					<div class="more-button">
						<a href="#">Read more</a>
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
</div>
 <div class="copyrights">
	<div class="container">
		<div class="copyright">
			<p>&copy; 2018 Life for π All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		<div class="social-icons">
			<ul>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- Footer -->	

	<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>
<!-- //gallery -->


<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>

<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>