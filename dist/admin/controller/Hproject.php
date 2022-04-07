<?php
session_start();
include('../includes/config.php');

$root =
$output = "";
$sql = "SELECT * FROM project";
$stmt =$conn->prepare($sql);
if($stmt->execute()){
	$result = $stmt->get_result();
	$count = $result->num_rows;
	if($count > 0){
        while($row =$result->fetch_assoc()){

            $output .= '

                      <div class="item">
                        <div class="bx">
                            <img src="admin/pimg/'.$row['p_image'].'" alt="">
                        </div>
                        <div class="details">
                            <a href="#" class="name"> '.$row['tittle'].'</a>
                            <p class="info"> '.$row['p_desc'].'</p>
                            <div class="view">
                                <a href=" '.$row['github'].'" class="lnk"><i class="icon icofont-github"></i></a>
                                <a href=" '.$row['web'].'" class="lnk"><i class="icon icofont-web"></i></a>
                            </div>
                        </div>
                    </div>


            ';
        
        }
        echo $output;
	}else{
		echo 'no project';
	}
}else{
    echo 'error';
}