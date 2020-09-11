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
				<?php
					include 'includes/database.php';
					$query     = "SELECT * FROM categories";
					$result    = mysqli_query($con,$query);
					while($row = mysqli_fetch_assoc($result)){
						$category_id    = $row['category_id'];
						$category_title = $row['category_title'];
						echo "<li><a href='index.php?id=$category_id'>$category_title</a></li>";
					}
				 ?>		
			</ul>
		</div>
		<!-- Navigation End -->

		<!-- Main Content Start -->
		<div class="content">
			This is Content
		</div>
		<!-- Main Content End -->

		<!-- SideBar Start -->
		<div class="sidebar">
			<ul id="categories">
				<?php
					include 'includes/database.php';
					$query     = "SELECT * FROM categories";
					$result    = mysqli_query($con,$query);
					while($row = mysqli_fetch_assoc($result)){
						$category_id    = $row['category_id'];
						$category_title = $row['category_title'];
						echo "<li><a href='index.php?id=$category_id'>$category_title</a></li>";
					}
				 ?>											
			</ul>
		</div>
		<!-- SideBar End -->

		<!-- Footer Start -->
		<div class="footer">
			This is Footer
		</div>
		<!-- Footer End -->
	</div>
	<!-- Main Container End -->
</body>
</html>