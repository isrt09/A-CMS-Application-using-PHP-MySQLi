<?php include('includes/header.php'); ?> 
<?php include('includes/navigation.php'); ?> 

<section class="site-section pt-5 pb-5">
   <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel owl-theme home-slider">
                <div>
                  <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_1.jpg'); ">
                    <div class="text half-to-full">
                      <span class="category mb-5">Food</span>
                      <div class="post-meta">                        
                        <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>                        
                      </div>
                      <h3>How to Find the Video Games of Your Youth</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                    </div>
                  </a>
                </div>
                <div>
                  <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_2.jpg'); ">
                    <div class="text half-to-full">
                      <span class="category mb-5">Travel</span>
                      <div class="post-meta">                        
                        <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>                        
                      </div>
                      <h3>How to Find the Video Games of Your Youth</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                    </div>
                  </a>
                </div>
                <div>
                  <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_3.jpg'); ">
                    <div class="text half-to-full">
                      <span class="category mb-5">Sports</span>
                      <div class="post-meta">                        
                        <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>                        
                      </div>
                      <h3>How to Find the Video Games of Your Youth</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                    </div>
                  </a>
                </div>
              </div>              
            </div>
          </div>          
   </div>
</section>
<!-- END section -->
<section class="site-section py-sm">
   <div class="container">
      <div class="row">
           <div class="col-md-6">
           <h2 class="mb-4">Latest Posts</h2>
            </div>
      </div>
      <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
			  <div class="row">
			     <?php include('includes/post.php'); ?> 
			  </div>
			  <div class="row mt-5">
			    <div class="col-md-12 text-center">
			      <nav aria-label="Page navigation" class="text-center">
			        <ul class="pagination">
			          <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
			          <li class="page-item"><a class="page-link" href="#">1</a></li>
			          <li class="page-item"><a class="page-link" href="#">2</a></li>
			          <li class="page-item"><a class="page-link" href="#">3</a></li>
			          <li class="page-item"><a class="page-link" href="#">4</a></li>
			          <li class="page-item"><a class="page-link" href="#">5</a></li>
			          <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
			        </ul>
			      </nav>
			    </div>
			  </div>                          
			</div>
            <!-- END main-content -->
      <div class="col-md-12 col-lg-4 sidebar">
	     	<div class="sidebar-box search-form-wrap">
		        <form action="#" class="search-form">
		            <div class="form-group">
			              <span class="icon fa fa-search"></span>
			              <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
		            </div>
		        </form>
	     	</div>                  
			<?php include('includes/sidebar.php'); ?>          
	  		<?php include('includes/category.php'); ?>          			    
		    <?php include('includes/tags.php'); ?> 
		  	</div>                        
      </div>
   </div>
</section>    
<?php include('includes/footer.php'); ?> 