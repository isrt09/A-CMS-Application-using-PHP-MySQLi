<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>New Post</title>
</head>
<body>
	<form method="POST" action="insert_post.php">
		<table width="600" align="center" border="10">
			<tr>
				<td align="center" bgcolor="yellow" colspan="2"><h1>Insert New Post</h1></td>
			</tr>
			<tr>
				<td>POST TITLE</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>POST CONTENT</td>
				<td><textarea name="content" id="" cols="30" rows="30"></textarea></td>
			</tr>
			<tr>
				<td>POST AUTHOR</td>
				<td><input type="text" name="author"></td>
			</tr>			
			<tr>
				<td>POST KEYWORDS</td>
				<td><input type="text" name="keyword"></td>
			</tr>
			<!-- <tr>
				<td>POST IMAGE</td>
				<td><input type="file" name="image"></td>
			</tr> -->
			<tr>				
				<td colspan="6" align="center"><input type="submit" name="save_post" value="Publish Now"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
	include 'includes/dbConn.php';		

	if(isset($_POST['save_post']))
	{
		$post_title  	= $_POST['title'];		
		$post_content 	= $_POST['content'];		
		$post_author 	= $_POST['author'];		
		$post_keyword 	= $_POST['keyword'];
		$post_date 		= date('d-m-y');		
		// $post_image 	= $_FILES['image']['name'];		
		// $image_tmp   	= $_FILES['image']['tmp_name'];				

		move_uploaded_file($image_tmp, "../images/$post_image");

		if($post_title=="" or $post_content=="" or $post_author=="" or $post_keywords==""){
			echo "<script>alert('Please Fill Up the fields corretly!')</script>";
			exit();			
		}else{
			
			if(mysqli_query($con, 'INSERT INTO posts(post_title,post_date,post_author,post_keyword,post_content) VALUES($post_title,$post_date,$post_author,$post_keyword,$post_content,$post_content)')){
				echo "<h1>Insert Post Saved Successfully!!</h1>";
			}
		}
		
	}	
 ?>