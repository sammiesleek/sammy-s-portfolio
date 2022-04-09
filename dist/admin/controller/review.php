<?php
    include_once ('../includes/config.php');
    $name = mysqli_real_escape_string($conn,$_POST['uname']);
    $review = mysqli_real_escape_string($conn,$_POST['urv']);
    // $name = mysqli_real_escape_string($con,$_POST['uname']);
    $output="";
    $status=true;
    if(!empty($name) && !empty($review)){
        if(isset($_FILES['uimg'])){
                 $img_name = $_FILES['uimg']['name'];
                    $img_type = $_FILES['uimg']['type'];
                    $tmp_name = $_FILES['uimg']['tmp_name'];

                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                    $extensions = ['png', 'jpeg', 'jpg'];
                    if(in_array($img_ext,$extensions) === true){

                        $time = time();
                        $new_img_name = $time.$img_name;

                         $query = "INSERT INTO review (u_name,review,img,sts)   VALUES (?,?,?,?)";
                         $stmt=$conn->prepare($query);
                        if($stmt->bind_param('sssi',$name,$review, $new_img_name,$status)){
                            if($stmt->execute()){
                                move_uploaded_file($tmp_name, "../../review/rpmg/".$new_img_name,);
                                $output .='
                                    <p>Thank you for your review, it has been submitted.</p>
                                ';
                            }else{
                                 $output .='
                                    <p>An error as occured, please try again.</p>
                                ';
                            }


                        }else{
                            $output .= 
                            '<p>image should be a "jpeg","jpg" or "png"</p>
                            ';
                         }
                     }else{
                         $output .= 
                            '<p>image should be a "jpeg","jpg" or "png"</p>
                            ';
                     }
        }else{
            $output .= 
                            '<p>
                            Please, select an image.</p>
                            ';
        }
    }else{
         $output .= 
                            '<p>
                            fields cannot be empty.</p>
                            ';
    }
    echo $output;
?>