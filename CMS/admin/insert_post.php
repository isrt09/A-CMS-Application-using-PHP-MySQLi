<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INSERT POST</title>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  	<script>tinymce.init({selector:'textarea'});</script>
</head>
<body bgcolor="#F999">	
	<form action="insert_post.php" method="post" enctype="multipart/form-data">
		<table border="2px solid#000" width="800" align="center">
			<tr>
				<td colspan="2" align="center"><h1>NEW POST</h1></td>
			</tr>
			<tr>
				<td>Post Title</td>
				<td><input type="text" name="post_title"></td>
			</tr>
			<tr>
				<td>Post Author</td>
				<td><input type="text" name="post_author"></td>
			</tr>
			<tr>
				<td>Post Keywords</td>
				<td><input type="text" name="post_keywords"></td>
			</tr>
			<tr>
				<td>Post Category</td>
				<td>
					<select name="post_category" id="">
						<option value="">Select a Category</option>
						<?php 
							include 'includes/database.php';
							$query  = "SELECT * FROM categories";
							$result = mysqli_query($con,$query);
							while($row = mysqli_fetch_array($result))
							{
								$category_id    = $row['category_id'];
								$category_title = $row['category_title'];
								echo "<option value='$category_id'>$category_title</option>";
							}
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Post Image</td>
				<td><input type="file" name="post_image"></td>
			</tr>
			<tr>
				<td>Post Content</td>
				<td><textarea name="post_content" id="" cols="80" rows="10"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save_post" value="SAVE"></td>
			</tr>
		</table>
	</form>
</body>
</html>