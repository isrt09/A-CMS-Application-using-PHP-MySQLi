<div class="col-md-8 offset-2">	
	    <h3 class="py-2 text-center"><b>ADD NEW POST</b></h3>
		<form action="includes/functions.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="post_title">Post Title</label>
			<input type="text" class="form-control" name="post_title">
		</div>
		<div class="form-group">
			<label for="post_category">Post Category</label>
			<select class="form-control" name="post_category">
				<?php
					$sql    = "SELECT * FROM tbl_category";
					$result = mysqli_query($connection, $sql); 
					while($row = mysqli_fetch_assoc($result)){						
						$category_name = $row['category_name'];
						echo "<option value='$category_name'>$category_name</option>";
					}
				 ?>		 
			</select>			
		</div> 
		<div class="form-group">
			<label for="category_id">Post Category ID</label>
			<select class="form-control" name="category_id">
				<?php
					$sql    = "SELECT * FROM tbl_category";
					$result = mysqli_query($connection, $sql); 
					while($row = mysqli_fetch_assoc($result)){						
						$category_id = $row['category_id'];
						echo "<option value='$category_id'>$category_id</option>";
					}
				 ?>		 
			</select>
		</div>
		<div class="form-group">
			<label for="post_author">Post Author</label>
			<input type="text" class="form-control" name="post_author">
		</div>
		<div class="form-group">
			<label for="post_tags">Post Tag</label>
			<input type="text" class="form-control" name="post_tags">
		</div>
		<div class="form-group">
			<label for="post_content">Post Content</label>
			<textarea name="post_content" id="" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="post_image">Post Image</label>
			<input type="file" class="form-control" name="post_image">
		</div>
		<div class="form-group">
			<label for="post_status">Post Status</label>
			<select name="post_status" id="" class="form-control">
				<option value="draft">Draft</option>
				<option value="published">Published</option>
			</select>
		</div>		
		<div class="form-group">			
			<input type="submit" class="btn btn-primary" name="publish">
		</div>
	</form>	
</div> 
