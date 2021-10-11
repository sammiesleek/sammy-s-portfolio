<?php
// include_once ('controller/edit_project.php');
include_once ('includes/config.php');

session_start();

include_once('controller/checklogin.php');
check_login();

    if(isset($_GET['project_id'])){
        $project_id = $_GET['project_id'];
        $sql = "SELECT * FROM project WHERE project_id=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param('s',$project_id);
        if($stmt->execute()){
            $result= $stmt->get_result();
            $row = $result->fetch_assoc();
            $itittle =$row['tittle'];
            $idesc =$row['p_desc'];
            $igithub =$row['github'];
            $iweb =$row['web'];
            $icat =$row['category'];
            
        }
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
    <title>Edit Projects</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
</head>

<body>
    <?php include('includes/header.php');?>
    <div class="ts-main-content">
        <?php include('includes/sidebar.php');?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Edit Projects </h2>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Edit courses</div>
                                    <div class="fill panel-body">
                                        <form method="post" class="form-horizontal">

                                            <div class="hr-dashed"></div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Project Name </label>
                                                <div class="col-sm-8">
                                                    <input type="text" value="<?php echo $itittle; ?>" name="pname"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Project Description</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="desc" id="cns"
                                                        value="<?php echo $idesc; ?>">

                                                </div>
                                            </div>
                                            <div style="display: none;  opacity:0; visibility:hidden"
                                                class="form-group">
                                                <label class="col-sm-2 control-label">Project Description</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="id" id="cns"
                                                        value="<?php echo $project_id; ?>">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Github link</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="github" id="cns"
                                                        value="<?php echo $igithub; ?>">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Web link</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="web" id="cns"
                                                        value="<?php echo $iweb; ?>">

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Image</label>
                                                <div class="col-sm-8">
                                                    <input type="file" class="form-control" name="image" id="cns"
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Category</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="cat" id="cns"
                                                        value="<?php echo $icat; ?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-8 col-sm-offset-2">

                                                <input class=" btn btn-primary" id="sub_mit" type="submit" name="submit"
                                                    value="Update Project">
                                            </div>
                                    </div>

                                    </form>

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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>
    <script src="js/edit_project.js"></script>

    </script>
</body>

</html>