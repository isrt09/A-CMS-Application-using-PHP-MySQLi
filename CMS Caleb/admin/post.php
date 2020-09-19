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
                    <ol class="breadcrumb mb-4">
                       <li class="breadcrumb-item active">POST</li>
                    </ol>
                    <div class="container">                        
                        <div class="row">
                        <?php 
                            if(isset($_GET['source'])){
                                $source = $_GET['source'];
                                switch($source){
                                    case 'add_new':
                                    include 'includes/add_post.php';
                                    break;

                                    default:
                                    include 'includes/view_post.php';
                                    break;
                                }                               
                            }                                                       
                         ?>
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