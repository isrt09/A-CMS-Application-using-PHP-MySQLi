<?php include('includes/header.php'); ?>
<body class="sb-nav-fixed">
		<?php include('includes/navbar.php'); ?>	

    <!-- MAIN CONTAINER STARTS-->
    <div id="layoutSidenav">
    	<?php include('includes/sidebar.php'); ?>

	    <!-- MAIN CONTENT STARTS -->
	    <div id="layoutSidenav_content">
	        <main>
	            <div class="container">
	                <h1 class="mt-4 text-center">Welcome to Administration Panel</h1>
                    <ol class="breadcrumb mb-4">
                       <li class="breadcrumb-item active">Category</li>
                    </ol>
                    <div class="container">                        
                        <div class="row">                            
                            <h3 class="py-3" align="center">ADD CATEGORY</h3>
                            <div class="col-md-12">
                                <form action="includes/functions.php" method="post">
                                    <div class="form-group">
                                        <input type="text" name="category_name" class="form-control" placeholder="Category Name ...">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="save_category" class="btn btn-primary" value="Add Category">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <h3 class="py-3" ">VIEW ALL CATEGORIES</h3>
                                <table class="table table-bordered table-striped table-hover">
                                <thead class="text-center">
                                    <th>Category ID</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </thead> 
                                <tbody class="text-center">
                                    <?php show_category(); ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
	            </div>
	        </main>
	        <?php include('includes/footer.php'); ?>
	    </div>
	    <!-- MAIN CONTENT ENDS -->
    </div>
    <!-- MAIN CONTAINER ENDS-->

    <!-- ALL JAVASCRIPTS HERE -->
	<script src="js/jquery-3.5.1.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/scripts.js"></script>
    <script src="js/Chart.min.js" ></script>
    <script src="js/chart-area-demo.js"></script>
    <script src="js/chart-bar-demo.js"></script>
    <script src="js/jquery.dataTables.min.js" ></script>
    <script src="js/dataTables.bootstrap4.min.js" ></script>
    <script src="js/datatables-demo.js"></script>
    <!-- ALL JAVASCRIPTS ENDS -->
</body>
</html>