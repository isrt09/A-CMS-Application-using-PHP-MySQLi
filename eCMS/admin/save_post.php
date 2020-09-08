<form action="save_post.php" method="post" enctype="multipart/form-data">
	<table border="1px solid#000" align="center">
		<tr>
			<td>Post Name</td>
			<td><input type="text" name="post_name"></td>
		</tr>
		<tr>
			<td>Post Author</td>
			<td><input type="text" name="post_author"></td>
		</tr>
		<tr>
			<td>Post Image</td>
			<td><input type="file" name="post_image"></td>
		</tr>
		<tr>
			<td>Post Keywords</td>
			<td><input type="text" name="post_keywords"></td>
		</tr>
		<tr>
			<td>Post Content</td>
			<td><textarea name="post_content" cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="save" value="SAVE"></td>
		</tr>
	</table>
</form>
<?php
	include 'includes/dbConn.php';
	//$con = dbConnect(); 
	if(isset($_POST['save']))
	{		
		$name    = $_POST['post_name'];		
		$date     = date('d-m-y');
		$author   = $_POST['post_author'];
		$image    =  $_FILES['post_image']['name'];
		$image_tmp = $_FILES['post_image']['tmp_name'];
		$keywords = $_POST['post_keywords'];
		$content  = $_POST['post_content'];

		 move_uploaded_file($image_tmp,"../images/".$image);		
		
		$query = "INSERT INTO posts(post_name,post_date,post_author,post_image,post_keywords,post_content) 
						 VALUES('$name','$date','$author','$image','$keywords','$content')";		
		
		if(mysqli_query($con, $query)){
			echo "Yes";
		}
	}	
 ?>
