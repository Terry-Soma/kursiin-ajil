<?php 
    session_start();
    include_once "config.php";
    $bdugaar = mysqli_real_escape_string($conn,$_POST['bdugaar']); 
    $password = mysqli_real_escape_string($conn,$_POST['password']); 
    $email = mysqli_real_escape_string($conn,$_POST['email']); 
    $ovog = mysqli_real_escape_string($conn,$_POST['ovog']); 
    $ner = mysqli_real_escape_string($conn,$_POST['ner']); 
    $rdugaar = mysqli_real_escape_string($conn,$_POST['rdugaar']); 
    $gdugaar = mysqli_real_escape_string($conn,$_POST['gdugaar']); 
    $surguuli = mysqli_real_escape_string($conn,$_POST['surguuli']); 
    $phone = mysqli_real_escape_string($conn,$_POST['phone']); 
    $aimag = mysqli_real_escape_string($conn,$_POST['aimag']); 
    if(!empty($bdugaar) && !empty($password) &&!empty($email) &&!empty($ovog) &&!empty($ner) &&!empty($rdugaar) && !empty($gdugaar) && !empty($surguuli) && !empty($phone)  && !empty($aimag))
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn,"SELECT Email FROM elsegch_burtgel WHERE Email = '{$email}'");

            if(mysqli_num_rows($sql) > 0){
                echo "$email - this email  already exist!";
            }else{
               
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


              
                }
      else{
        echo "All input field required";
    }
?>