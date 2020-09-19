<?php include('db.php'); ?>

<?php
	// ========================== Category Module ==========================
	// ADD Category	
	function add_category(){
		global $connection;
		if(isset($_POST['save_category'])){
			if(empty($_POST['category_name'])){
				header('location: ../category.php?category_not_empty');
			}else{
				$category_name = $_POST['category_name'];
				$sql = "INSERT INTO tbl_category(category_name) VALUES('$category_name')";
				$result = mysqli_query($connection,$sql);
				if(!$result){
					die("Could not send data".mysql_error($connection));
				}else{
					header('location: ../category.php?category_added_smile');
				}
			}
		}
	}
	// Show Category	
	function show_category(){
		global $connection;
		$sql = "SELECT * FROM tbl_category";
		$result = mysqli_query($connection,$sql);
		while($row = mysqli_fetch_array($result)){
			$category_id   = $row['category_id'];
			$category_name = $row['category_name'];
			echo 
			"	
				<tr>
					<td>$category_id</td>
					<td>$category_name</td>					
					<td>
					    <a href='category.php?id=$category_id' class='btn btn-sm btn-success'>EDIT</a>
					    <a onclick='confirmDelete();' href='category.php?delete=$category_id' class='btn btn-sm btn-danger'>DELETE</a>
					</td>					
				</tr>
			";
			
		}
	}
	// Delete Category
	function delete_category(){		
		global $connection;
		if(isset($_GET['delete'])){
			$category_id = $_GET['delete'];
			$sql = "DELETE FROM tbl_category WHERE category_id = $category_id";
			$result = mysqli_query($connection,$sql);
			if(!$result){
				die("Could not delete data".mysql_error($connection));
			}else{
				header('location:category.php');
			}
		}
	}
	// ADD Post
	function add_post(){
		global $connection;
		if(isset($_POST['publish'])){			
			$post_title   	    = $_POST['post_title'];
			$post_author        = $_POST['post_author'];
			$post_category      = $_POST['post_category'];
			$post_category_id   = $_POST['category_id'];
			$post_content       = $_POST['post_content'];
			$post_tags          = $_POST['post_tags'];
			$post_status        = $_POST['post_status'];
			$post_date          = date('d-m-y');
			$post_views			= 0;
			$post_comment_counts= 0;
			$post_image			= $_FILES['post_image']['name'];
			$post_image_tmp		= $_FILES['post_image']['tmp_name'];			
			$photo 				= move_uploaded_file($post_image_tmp, '../uploads/'.$post_image);
			$sql = "INSERT INTO `tbl_post`(`category_id`, `post_title`, `post_content`, `post_image`, `post_category`, `post_tags`, `post_comment_counts`, `post_view`, `post_date`, `post_author`, `post_status`) VALUES ('$post_category_id','$post_title','$post_content','$post_image','$post_category','$post_tags','$post_comment_counts','$post_views','$post_date','$post_author','$post_status')";
			
			$result = mysqli_query($connection, $sql);
			if(!$result){
				die("Could not send data".mysql_error($connection));
				header('location: ../post.php?source=add_new');				
			}else{
				header('location: ../post.php?source=post_added');				
			}
		}
	}
	

	// ========================== Post Module ==========================
	// Show Posts
	function show_post(){
		global $connection;
		$sql = "SELECT * FROM tbl_post";
		$result = mysqli_query($connection, $sql);
		while($row = mysqli_fetch_array($result)){
			$post_id   	    = $row['post_id'];
			$post_title 	= $row['post_title'];
			$post_category 	= $row['post_category'];
			$post_category_id= $row['category_id'];
			$post_content   = mysqli_real_escape_string($connection,$row['post_content']);
			$post_tags      = $row['post_tags'];
			$post_status    = $row['post_status'];
			$post_date      = $row['post_date'];
			$post_views     = $row['post_view'];
			$post_count     = $row['post_comment_counts'];
			$post_image     = $row['post_image'];
			echo "
				<tr>
				   <td>$post_id </td>
				   <td>$post_title</td>
				   <td>$post_category</td>
				   <td>$post_category_id</td>
				   <td>$post_content</td>
				   <td>$post_tags</td>
				   <td>$post_status</td>
				   <td>$post_date</td>
				   <td>$post_views</td>
				   <td>$post_count</td>
				   <td><img src='uploads/$post_image' width='100'></td>
				   <td><a href='post.php?approve=$post_id' class='btn btn-sm btn-dark'>APPROVE</td>
				   <td><a href='post.php?unapprove=$post_id' class='btn btn-sm btn-warning'>APPROVE</td>
				   <td>
				   		<a href='post.php?unapprove=$post_id' class='btn btn-sm btn-success'>EDIT</a>
				   		<a href='post.php?unapprove=$post_id' class='btn btn-sm btn-danger'>DELETE</a>		
				   </td>				   
				</tr>
			";
		}
	}

	// CallBack Function Lists  ................
	add_category();
	delete_category();	
	add_post();

 ?>		

