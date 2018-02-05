<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>sql盲注</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
        <?php include("../../header.php") ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

        

            <div class="col-md-9">

               <?php 
                    include('home.php');
                        
                ?>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <?php include("../../info.php") ?>
</body>

</html>
