<?php
	include 'includes/database.php';
	$query     = "SELECT * FROM posts";
	$result    = mysqli_query($con,$query);
	while($row = mysqli_fetch_assoc($result)){
		$post_id    = $row['post_id'];
		$post_title = $row['post_title'];
		$post_image = $row['post_image'];
		echo "<p class='sidebar_post_title'><a href='index.php?id=$post_id'>$post_title</a></p>";
		echo "<p align='center'><img src='admin/news_images/$post_image' width='150'></p>";
	}
?>	