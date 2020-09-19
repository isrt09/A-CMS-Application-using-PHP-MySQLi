    <div class="sidebar-box">
      <h3 class="heading">Tags</h3>
       <?php 
          $sql    = "SELECT * FROM tbl_post";
          $result = mysqli_query($connection, $sql);
          while($row = mysqli_fetch_assoc($result)){
            $post_tags = $row['post_tags']; 
        ?>
          <ul class="tags">   
            <li><a href="#"><?php echo $post_tags; ?></a></li>        
          </ul>    
      <?php }
      ?>
</div>
<!-- END sidebar -->