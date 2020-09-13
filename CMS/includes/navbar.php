<ul id="menu">
<?php
	include 'includes/database.php';
	$query     = "SELECT * FROM categories";
	$result    = mysqli_query($con,$query);
	while($row = mysqli_fetch_assoc($result)){
		$category_id    = $row['category_id'];
		$category_title = $row['category_title'];
		echo "<li><a href='index.php?category=$category_id'>$category_title</a></li>";
	}
 ?>	
</ul>
<div>
	<form action="results.php" method="get" enctype="multipart/form-data" id="form">
		<input type="text" name="search_query">
		<input type="submit" name="search" value="Search">
	</form>
</div>
 				