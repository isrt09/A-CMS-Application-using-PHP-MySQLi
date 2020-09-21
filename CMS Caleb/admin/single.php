<?php include('includes/header.php'); ?>
<body class="sb-nav-fixed">
        <?php include('includes/navbar.php'); ?>    

    <!-- MAIN CONTAINER STARTS-->
    <div id="layoutSidenav">
        <?php include('includes/sidebar.php'); ?>

        <!-- MAIN CONTENT STARTS -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4 text-center">Welcome to Administration Panel</h1>                   
                    <div class="row mt-5">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-header text-right">Posts</div>
                                    <div class="card-body text-center"><i class="fas fa-edit fa-7x"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="post.php?source=view_post">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-header text-right">Comments</div>
                                    <div class="card-body text-center"><i class="fas fa-comment fa-7x"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-header text-right">Users</div>
                                    <div class="card-body text-center"><i class="fas fa-user fa-7x"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-header text-right">Categories</div>
                                    <div class="card-body text-center"><i class="fas fa-file fa-7x"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="category.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
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