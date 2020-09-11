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
			<?php 
				$query  = "SELECT * FROM posts ORDER BY rand() LIMIT 0, 5";
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
					<h2 id='head'>$title</h2><br/>
					<span><b>Author : </b><i>$author</i></span>,&nbsp;<span><b>Keywords : </b>$keyword</span>,&nbsp;<span><b>Published dated by : </b>$date</span>								
					<img src='admin/news_images/$photo' width='100' height='100'>
					<div>$content <a href='details.php?id=$post_id' style='float: right;' id='rmlink'>READ MORE</a></div><br/>





					";										
				}
			?>				
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