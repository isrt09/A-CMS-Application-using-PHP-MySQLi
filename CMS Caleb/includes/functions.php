<?php 	
	include 'admin/includes/db.php';
	function show_category(){
		global $connection;
		$query  = "SELECT * FROM tbl_category";
		$result = mysqli_query($connection, $query);
		while($row = mysqli_fetch_array($result)){
			$category_id   = $row['category_id'];
			$category_name = $row['category_name'];
			echo 
			"
				<li class='nav-item'>
                  <a class='nav-link' href='category.php'><b>$category_name</b></a>
                </li>				 

			";
		}	
	}
 ?>

