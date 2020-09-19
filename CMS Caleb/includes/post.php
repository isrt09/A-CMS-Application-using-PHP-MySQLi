<?php 
  $sql    = "SELECT * FROM tbl_post";
  $result = mysqli_query($connection, $sql);
  while($row = mysqli_fetch_assoc($result)){
      $post_id        = $row['post_id'];
      $post_title   = $row['post_title'];
      $post_category  = $row['post_category'];
      $post_category_id= $row['category_id'];
      $post_content   = mysqli_real_escape_string($connection,$row['post_content']);
      $post_tags      = $row['post_tags'];
      $post_status    = $row['post_status'];
      $post_date      = $row['post_date'];
      $post_views     = $row['post_view'];
      $post_count     = $row['post_comment_counts'];
      $post_image     = $row['post_image']; 
      $post_author    = $row['post_author']; 

    ?>
      <div class="col-md-6">
      <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
        <img src="admin/uploads/<?php echo $post_image; ?>" alt="Image placeholder">
        <div class="blog-content-body">
          <div class="post-meta">
            <span class="author mr-2"><img src="admin/uploads/<?php echo $post_image; ?>" alt="Colorlib"><?php echo $post_author; ?></span>&bullet;
            <span class="mr-2"><?php echo $post_date; ?> </span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span><?php echo $post_count; ?> </span>
            <span class="ml-2"><?php echo $post_category; ?> </span>
          </div>
          <h2><?php echo $post_title; ?></h2>
          <p class="text-justify"><?php echo $post_content; ?> <br/><b>Tags: # <?php echo $post_tags; ?> </b></p>
        </div>
      </a>
    </div>
<?php
   }  
?>
     