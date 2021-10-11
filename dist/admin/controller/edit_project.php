<?php
    require_once ('../includes/config.php');


    
    
    
    
        // die('ss');
            
            $tittle =mysqli_real_escape_string( $conn,$_POST['pname'] );
            $Desc =mysqli_real_escape_string( $conn,$_POST['desc'] );
            $github =mysqli_real_escape_string( $conn,$_POST['github'] );
            $web =mysqli_real_escape_string( $conn,$_POST['web'] );
            $cat =mysqli_real_escape_string( $conn,$_POST['cat'] );
            $id =mysqli_real_escape_string( $conn,$_POST['id'] );
        
            // die($id);
            
            
            if(!empty($_POST['pname']) && !empty($_POST['desc']) && !empty($_POST['github']) && !empty($_POST['web']) && !empty($_POST['cat']) && !empty($_POST['id'])){
                
                if(!empty($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                    $extensions = ['png', 'jpeg', 'jpg'];
                    if(in_array($img_ext,$extensions) === true){
                        
                        $time = time();
                        $new_img_name = $time.$img_name;
                    
                        $query = "UPDATE  project SET tittle=?, category =?, p_desc=?, github=?, web=? ,p_image=?    WHERE project_id=?";
                        $stmt=$conn->prepare($query);
                        if($stmt->bind_param('sssssss',$tittle,$cat,$Desc,$github,$web,$new_img_name,$id)){
                            if($stmt->execute()){
                                move_uploaded_file($tmp_name, "../pimg/".$new_img_name);
                                
                                echo 'success';
                                
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