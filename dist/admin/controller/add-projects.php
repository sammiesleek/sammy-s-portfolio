<?php
    include '../includes/config.php';

    $tittle =mysqli_real_escape_string( $conn,$_POST['pname'] );
    $Desc =mysqli_real_escape_string( $conn,$_POST['desc'] );
    $github =mysqli_real_escape_string( $conn,$_POST['github'] );
    $web =mysqli_real_escape_string( $conn,$_POST['web'] );
    // $image =mysqli_real_escape_string( $conn,$_POST['image'] );
    
    $cat =mysqli_real_escape_string( $conn,$_POST['cat'] );
    $owner = 'samyajai';
    $p_id= $owner.rand(time(),200);
    $v = false;

    
            if(!empty($tittle) && !empty($Desc) && !empty($web) && !empty($cat)){
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                    $extensions = ['png', 'jpeg', 'jpg'];
                    if(in_array($img_ext,$extensions) === true){

                        $time = time();
                        $new_img_name = $time.$img_name;
                    
                         $query = "INSERT INTO project (tittle,category,p_desc,github,web,p_image,project_id,published)   VALUES (?,?,?,?,?,?,?,?)";
                         $stmt=$conn->prepare($query);
                        if($stmt->bind_param('sssssssb',$tittle,$cat,$Desc,$github,$web,$new_img_name,$p_id,$v)){
                            if($stmt->execute()){
                                echo 'success';
                                move_uploaded_file($tmp_name, "../pimg/".$new_img_name);
                            }else{
                                echo 'error';
                            }
                        }else{
                            echo 'query error';
                        }
                    }
                    else{
                        echo 'enter a valid image';
                    }
                }else{
                    echo 'select image';
                }

                   
               
            }else{
                echo 'all fields are required';
            }
            
                      
            



        
    
// 

?>