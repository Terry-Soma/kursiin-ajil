<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <title>ИЗОУИС</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" />
    <script src="https://kit.fontawesome.com/8a206a71da.js" crossorigin="anonymous "></script>
    <link rel="stylesheet" href="css/main.css" /> 
    <!-- <link rel="stylesheet" href="./css/main.css" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="./css/info5.css">
    <style>
        .fit-image {
      width: 100%;
    object-fit: cover;
transform:translateX(50%);
}
    </style>
</head> 


<body>
    <header id="nav">
        <nav id="main-nav">
            <div class="container">
                <div class="logo">
                    <img src="./logos/logo.png" alt="logo" />
                </div>
                <ul style="font-size: 14px !important;">
                    <li><a href="index.html" >Эхлэл</a></li>
                    <li><a href="burtgelgod.php"class="current">Бүртгүүлэх</a></li>
                    <li><a href="hutulbur.php">Хөтөлбөрүүд</a></li>
                    <li><a href="#">Холбогдох</a></li>
                    <li><a href="login.php">Нэвтрэх</a></li>

                </ul>
            </div>
        </nav>
    </header>

    
    <div class="container">	
    <div class="flex justify-content-center align-items-center">
    <div class="form-wizard">
                <form action="" method="post" role="form" id="burtgel__form">
                    <div class="form-wizard-header">
                        <!-- <p>Fill all form field to go next step</p> -->
                        <ul class="list-unstyled form-wizard-steps clearfix">
                            <li class="active"><span>1</span></li>
                            <li><span>2</span></li>
                            <li><span>3</span></li>
                            <li><span>4</span></li>
                        </ul>
                    </div>
                    <fieldset class="wizard-fieldset show">
                        <h5>Ерөнхий мэдээлэл</h5>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="fname" name="bdugaar">
                            <label for="fname" class="wizard-form-text-label">Боловсролын үнэлгээний төвийн бүртгэлийн дугаар*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control wizard-required" id="lname" name="password">
                            <label for="lname" class="wizard-form-text-label">Нууц үг*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control wizard-required" id="lname2">
                            <label for="lname2" class="wizard-form-text-label">Нууц үг давтах*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                       
                    
                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Дараагийнх</a>
                        </div>
                    </fieldset>
                    <fieldset class="wizard-fieldset">
                        <h5>Нэмэлт мэдээлэл</h5>
                        <div class="form-group">
                            <input type="email" class="form-control wizard-required" id="email" name="email">
                            <label for="email" class="wizard-form-text-label">Е-мэйл хаяг*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="username" name="ovog">
                            <label for="username" class="wizard-form-text-label">Овог*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="username2" name="ner">
                            <label for="username2" class="wizard-form-text-label">Нэр*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                     
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="rdugaar" name="rdugaar">
                            <label for="rdugaar" class="wizard-form-text-label">Регистрийн дугаар*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Өмнөх</a>
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Дараагийнх</a>
                        </div>
                    </fieldset>
                    <fieldset class="wizard-fieldset">
                        <h5>Нэмэлт мэдээлэл</h5>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="bname" name="gdugaar">
                            <label for="bname" class="wizard-form-text-label">Гэрчилгээний дугаар*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="brname" name="surguuli">
                            <label for="brname" class="wizard-form-text-label">Төгссөн сургууль*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="acname" name="phone">
                            <label for="acname" class="wizard-form-text-label">Утасны дугаар*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="Old"></label>
                            <div class="row">
								<div class="col-sm-12">
									<select  class="form-control" id="aimag" name="aimag" >
                                        <?php
                            include "./php/config.php";
                            $rs = mysqli_query($con,"SELECT * FROM aimag");
                            if(!mysqli_num_rows($rs)>0){
                                echo "aldaa";

                            }else{
                                while($row = mysqli_fetch_assoc($rs)){
                                   echo'<option value="'.$row['id'].'" >'.$row['Aimag_Hot'].'</option>';
                                }
                            }
                            ?>
									
                                    </div>							
									
									</select>
								</div>
							</div>
                       
                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Өмнөх</a>
                            <a href="javascript:;" id="submit" class="form-wizard-next-btn a float-right" name="submit">Бүртгүүлэх</a>
                        </div>
                    </fieldset>
                    <fieldset class="wizard-fieldset">
                        <div class="form-card form-group">
                            <div class="row">
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>Амжилттай !</strong></h2> <br>
                            <div class="row justify-content-center" style="justify-content-center !important;">
                                <div class="" style="max-width:50%;"> 
                                <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> 
                            </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">Бүртгэл амжилттай хийгдлээ</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
</div>
</div>
     <script src="./javascript/info2.js"></script>
     <script src="./javascript/util/account.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
</body>
</html>