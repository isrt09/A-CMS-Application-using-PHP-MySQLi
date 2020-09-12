<?php
	if(isset($_GET['category'])){
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
			<h2 id='head'><a href='details.php?id=$post_id'>$title</a></h2><br/>
			<span><b>Author : </b><i>$author</i></span>,&nbsp;<span><b>Keywords : </b>$keyword</span>,&nbsp;<span><b>Published dated by : </b>$date</span>								
			<a href='details.php?id=$post_id'><img src='admin/news_images/$photo' width='100' height='100'></a>
			<div>$content <a href='details.php?id=$post_id' style='float: right;' id='rmlink'>READ MORE</a></div><br/>
			";										
		}	
	}else{

			if(isset($_GET['category'])){
			$category_id = $_GET['category'];
			$query  = "SELECT * FROM posts WHERE category_id = '$category_id'";
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
		
	}	
		
?>	

