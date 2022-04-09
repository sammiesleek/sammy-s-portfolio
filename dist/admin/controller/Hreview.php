<?php
session_start();
include('../includes/config.php');
$val= 1;
$root =
$output = "";
$sql = "SELECT * FROM review WHERE Sts=?";
$stmt =$conn->prepare($sql);
$stmt->bind_param('i',$val );
if($stmt->execute()){
	$result = $stmt->get_result();
	$count = $result->num_rows;
	if($count > 0){

        while($row =$result->fetch_assoc()){


            $output .= '
               
                    <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="testi-avatar"><img src="review/rpmg/'.$row['img'].'"></div>
                                        <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                        <div class="testimonials-text">
                                            <div class="listing-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>'.$row['review'].'</p>
                                            <a href="#" class="text-link"></a>
                                            <div class="testimonials-avatar">
                                                <h3>'.$row['u_name'].'</h3>
                                               <h4 style="display:none">Owner</h4>
                                            </div>
                                        </div>
                                        <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                                    </div>
                                </div>


            ';
        
        }
        echo $output;
	}else{
		echo 'no Review';
	}
}else{
    echo 'error';
}