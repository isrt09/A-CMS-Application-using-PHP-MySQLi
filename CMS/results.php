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
			<?php include_once 'includes/navbar.php'; ?>			
		</div>
		<!-- Navigation End -->

		<!-- Main Content Start -->
		<div class="content">
			<?php
			if(isset($_GET['search'])){					
				$get_search = $_GET['search_query'];
				$query  = "SELECT * FROM posts WHERE post_keywords like '%$get_search%' ";
				$result = mysqli_query($con, $query);
				while($row = mysqli_fetch_assoc($result)){
				$post_id = $row['post_id'];
				$title   = $row['post_title'];
				$author  = $row['post_author'];
				$keyword = $row['post_keywords'];										
				$date    = $row['post_date'];										
				$photo   = $row['post_image'];										
				$content = substr($row['post_content'], 0,300);
				echo "
				<h2 id='head'><a href='details.php?id=$post_id'>$title</a></h2><br/>
				<span><b>Author : </b><i>$author</i></span>,&nbsp;<span><b>Keywords : </b>$keyword</span>,&nbsp;<span><b>Published dated by : </b>$date</span>								
				<a href='details.php?id=$post_id'><img src='admin/news_images/$photo' width='100' height='100'></a>
				<div>$content <a href='details.php?id=$post_id' style='float: right;' id='rmlink'>READ MORE</a></div><br/>
				";										
				}			
			}
		?>	
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