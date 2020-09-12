<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Content Management System || CMS</title>
	<link rel="stylesheet" href="styles/style.css" media="all">
</head>
<body>
	<!-- Main Container Start -->
	<div class="container">
		<!-- Header Start -->	
		<div class="head">			
			<img id="logo" src="images/logo.png" alt="" >
			<img id="banner" src="images/ad_banner.gif" alt="">
		</div>
		<!-- Header End -->

		<!-- Navigation Start -->		
		<div class="navbar">
			<ul id="menu">
				<?php include_once 'includes/navbar.php'; ?>
			</ul>
			<div>
				<form action="result.php" method="get" enctype="multipart/form-data" id="form">
					<input type="text" name="search_query">
					<input type="submit" name="search" value="Search">
				</form>
			</div>
		</div>
		<!-- Navigation End -->

		<!-- Main Content Start -->
		<div class="content">
			<?php include_once 'includes/post_content.php'; ?>			
			<?php include_once 'includes/category_content.php'; ?>			
		</div>
		<!-- Main Content End -->		
		<!-- SideBar Start -->
		<div class="sidebar">
			<h1 class="title">Recent Posts</h1>
			<ul id="categories">
				<?php include 'includes/sidebar.php'; ?>										
			</ul>
		</div>
		<!-- SideBar End -->

		<!-- Footer Start -->
		<div class="footer">
			<h1 style="text-align: center; padding: 40px;">All Rights Reserved &copy 2020 || www.mazedur.com</h1>
		</div>
		<!-- Footer End -->
	</div>
	<!-- Main Container End -->
</body>
</html>