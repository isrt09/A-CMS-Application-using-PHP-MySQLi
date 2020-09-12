<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>POST FORM</title>
</head>
<body bgcolor="#F999">
	<form action="insert_post.php" method="post" enctype="multipart/form-data">
		<table border="5px solid#000" align="center" width="800">
		<tr>
			<td colspan="2" align="center"><h1>POST PUBLISH FORM</h1></td>
		</tr>
		<tr>
			<td align="right">POST TITLE</td>
			<td><input type="text" name="post_title"></td>
		</tr>
		<tr>
			<td align="right">POST CATEGORY</td>
			<td>
				<select name="category" id="">
					<option value="">Select a Category</option>
					<?php 
						include 'includes/database.php';
						$query  = "SELECT * FROM categories";
						$result = mysqli_query($con, $query);
						while($row = mysqli_fetch_assoc($result))
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
			<td align="right">POST AUTHOR</td>
			<td><input type="text" name="post_author"></td>
		</tr>
		<tr>
			<td align="right">POST KEYWORDS</td>
			<td><input type="text" name="post_keywords"></td>
		</tr>
		<tr>
			<td align="right">POST IMAGE</td>
			<td><input type="file" name="post_image"></td>
		</tr>
		<tr>
			<td align="right">POST CONTENT</td>
			<td><textarea name="post_content" id="" cols="80" rows="10"></textarea></td>
		</tr>
		<tr>
			<td align="right"></td>
			<td><input type="submit" name="save" value="PUBLISH"></td>
		</tr>
	</table>
	</form>
</body>
</html>
<?php 
	include 'includes/database.php';
	if(isset($_POST['save'])){
		$post_title		= $_POST['post_title'];
		$post_category	= $_POST['category'];
		$post_author	= $_POST['post_author'];
		$post_keywords	= $_POST['post_keywords'];
		$post_date  	= date('d-m-y');
		$post_image		= $_FILES['post_image']['name'];
		$post_image_tmp	= $_FILES['post_image']['tmp_name'];
		$post_content	= $_POST['post_content'];

		move_uploaded_file($post_image_tmp, 'news_images/'.$post_image);
		if($post_title == "" OR $post_content=="" OR $post_keywords=="" OR $post_author=='' OR $post_category==""){
			echo "<script>alert('Please Fill Up the Fields')</script>";
			exit();
		}else{
			$query = "INSERT INTO posts(category_id,post_title,post_date,post_author,post_keywords,post_image,post_content) 
			VALUES('$post_category','$post_title','$post_date','$post_author','$post_keywords','$post_image','$post_content')";
			$result = mysqli_query($con, $query);
			if($result){
				echo "<script>alert('Post Successfully Published!')</script>";
			}else{
				echo "<script>alert('Post Fail to Publis!')</script>";
			}
		}
	}

 ?>

 