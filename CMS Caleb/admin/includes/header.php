<?php ob_start(); ?>
<?php include('db.php'); ?>
<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<!-- HEADER STARTS -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS || ADMIN</title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />        
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet"  />
    <script src="js/all.min.js" ></script>
    <script>
        function confirmDelete(){
            return confirm("Are you sure Delete Data?!");
        }
    </script>
</head>
<!-- HEADER ENDS -->