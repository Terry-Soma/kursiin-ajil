<?php 

    include_once "dbconnection.php";
    $fname = mysqli_real_escape_string($conn,$_POST['fname']); 
    $lname = mysqli_real_escape_string($conn,$_POST['lname']); 
    $email = mysqli_real_escape_string($conn,$_POST['email']); 
    $password = mysqli_real_escape_string($conn,$_POST['password']); 
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password))
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - this email  already exist!";
            }else{
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];//getting user uploaded img name    
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    //let's explode image and get the last extension like jpg png
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);//here we get the extension of an user uploaded img file 

                    $extentions = ['png','jpeg','jpg'];// these are some valid img ext and we've store theme in array
                    if(in_array($img_ext, $extentions)===true){
                        $time = time(); //return current time
                    
                        //
                        $new_img_name= $time.$img_name;
                      if(move_uploaded_file($tmp_name,"../images/".$new_img_name)){
                          $status = "Active now";
                        $random_id = rand(time(),10000000);
                        $sql2 = mysqli_query($conn,"INSERT INTO users(unique_id,fname,lname,email,password,img,status)
                            VALUES({$random_id},'{$fname}','{$lname}', '{$email}', '{$password}','{$new_img_name}','{$status}')");
                        
                        if($sql2){
                            $sql3 = mysqli_query($conn,"SELECT * FROM users WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql3) >0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id']= $row['unique_id']; //using this session we used user unique_id int other php file
                                echo "success"; 

                            }

                        }else{
                            echo "Something went wrong!";
                        }

                      }  
                                
                    }else{
                        echo "Please select an image file -jpef,jpg,png!";
                    }


                }else{
                    echo "Please select an image file";
                }
            }
        }else{ 
            echo "$email - this is not a valid email";
        }

    }else{
        echo "All input field required";
    }
?>