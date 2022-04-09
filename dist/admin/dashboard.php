<?php
session_start();
include('includes/config.php');
include('controller/checklogin.php');
check_login();

// project 

$sql ="SELECT * FROM project";
$stm =$conn->prepare($sql);
$stm->execute();
$result= $stm->get_result();
$count = $result->num_rows;
if($count < 2){
    $hd = 'Project';
}else{
    $hd = 'Projects';
}

// review 

$sql ="SELECT * FROM review";
$stm =$conn->prepare($sql);
$stm->execute();
$result= $stm->get_result();
$rcount = $result->num_rows;
if($count < 2){
    $rv = 'Review';
}else{
    $rv = 'Reviews';
}

// message 
$sql3 ="SELECT * FROM message";
$stm =$conn->prepare($sql3);
$stm->execute();
$result= $stm->get_result();
$mcount = $result->num_rows;
if($count < 2){
    $ms = 'Message';
}else{
    $ms = 'Messages';
}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>DashBoard</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <?php include("includes/header.php");?>

    <div class="ts-main-content">
        <?php include("includes/sidebar.php");?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title" style="margin-top:4%">Dashboard</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-primary text-light">
                                                <div class="stat-panel text-center">
                                                    <div class="stat-panel-number h1 "><?php echo $count ;?></div>
                                                    <div class="stat-panel-title text-uppercase"> <?php echo $hd ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="manage-projects.php" class="block-anchor panel-footer">Full Detail
                                                <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-success text-light">
                                                <div class="stat-panel text-center">
                                                    <div class="stat-panel-number h1 "><?php echo $rcount ;?></div>
                                                    <div class="stat-panel-title text-uppercase"><?php echo $rv ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="reviews.php" class="block-anchor panel-footer text-center">See
                                                All &nbsp; <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body bk-info text-light">
                                                <div class="stat-panel text-center">
                                                    <div class="stat-panel-number h1 "><?php echo $ms ?></div>
                                                    <div class="stat-panel-title text-uppercase">
                                                        <?php echo $mcount ?> </div>
                                                </div>
                                            </div>
                                            <a href="messages.php" class="block-anchor panel-footer text-center">See
                                                All
                                                &nbsp; <i class="fa fa-arrow-right"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>





                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>


</body>

</html>