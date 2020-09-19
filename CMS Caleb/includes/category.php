<div class="sidebar-box">
	<h3 class="heading">Categories</h3>
	<ul class="categories">
	  <?php
	  	 global $connection; 
	  	 $sql    = "SELECT * FROM tbl_category";
	  	 $result = mysqli_query($connection, $sql);
	  	 while($row = mysqli_fetch_array($result)){
	  	 	$category_name = $row['category_name'];?>
	     <li><a href="#"><?php echo $category_name; ?> <span>(12)</span></a></li>
	  	 <?php
	      }
	    ?>	  
	</ul>
</div>
<!-- END sidebar-box -->