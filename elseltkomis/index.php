<?php
session_start();
require_once('dbconnection.php');
$error = '';
if(isset($_POST['login']))
{
// anhaa is booboo
 $username =  mysqli_real_escape_string($con,trim($_POST['username']));
 $password =  mysqli_real_escape_string($con,$_POST['password']);
 if($username=='' || $password=='')
 {
 $error='All fields are required';
 }

 $rs= mysqli_query($con,"SELECT * FROM bagsh as b, elseltiin_komis_tomilgoo as e  WHERE (b.Bagsh_Id= e.Bagsh_Id) AND (b.Bagsh_mail ='{$username}' AND e.Pass = '{$password}')");

if(mysqli_num_rows($rs)>0)
{
$row = mysqli_fetch_assoc($rs);
$extra="welcome.php";
	// $_SESSION['unique_id']= $row['unique_id']; 
	$_SESSION['tomilogch_Ner']= $row['Bagsh_Name']; 
	$_SESSION['mail']= $row['Bagsh_mail']; 
	$_SESSION['aimag_Id']= $row['Aimag_Id']; 
	$host=$_SERVER['HTTP_HOST'];
	$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
 	header("location:http://$host$uri/$extra");
	exit();

}else
{
	echo "<script>alert('Invalid username or password');</script>";
	$extra="index.php";
	$host  = $_SERVER['HTTP_HOST'];
	$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	header("location:http://$host$uri/$extra");
	exit();
}

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/New_Login.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" />
</head>

<body>
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">
            <div class="form-header">
                <h1>Элсэлт Комис</h1>
            </div>
            <div class="form-content">
                <form role="form" action="" method="POST">
                                    <hr />
									<?php
									if($error!='')
									{									
									echo '<h5 class="text-danger text-center">'.$error.'</h5>';
									}
									?>			
                    <div class="form-group">
                        <label for="username">Нэвтрэх нэрээ оруул</label>
                        <input type="text" id="username" name="username" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="password">Нууц үгээ оруулн</label>
                        <input type="password" id="password" name="password" required="required" />
                    </div>
                    <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="login">Нэвтрэх</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>