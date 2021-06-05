<?php include("header.php");


if(isset($_POST['submit']))
{
    $bdugaar=$_POST['bdugaar'];
    $ovog=$_POST['ovog'];
    $ner=$_POST['ner'];
    $rdugaar=$_POST['rdugaar'];
    $gdugaar=$_POST['gdugaar'];
    $surguuli=$_POST['surguuli'];
    $barimt=$_POST['barimt'];
    $phone=$_POST['phone'];
   
    // $uimg=$_FILES['uimg']['name']; //storing file name code
  
    $email=$_POST['email'];
    $hutulbur=$_POST['hutulbur'];
    $aimag=$_POST['aimag'];
    $bhuraamj=$_POST['bhuraamj'];

    // $msg=mysqli_query($con,"UPDATE `elsegch_burtgel` SET `BurtgeliinDugaar`='$bdugaar',`Ovog`='$ovog',`Ner`='$ner',`RD`='$rdugaar',`GerchilgeeniiDugaar`='$gdugaar',`TugssunSurguuli`='$surguuli',`BarimtaaUgsunEseh`=$barimt,`Mergejil_Id`='$hutulbur',`Utas_Dugaar`=$phone,`Email`='$email',`Aimag_Id`=$aimag,`BurtgeliinHuraamj`='$bhuraamj' where BurtgeliinDugaar='".$_GET['uid']."'");
	$msg=("UPDATE `elsegch_burtgel` SET `BurtgeliinDugaar`='$bdugaar',`Ovog`='$ovog',`Ner`='$ner',`RD`='$rdugaar',`GerchilgeeniiDugaar`='$gdugaar',`TugssunSurguuli`='$surguuli',`BarimtaaUgsunEseh`=$barimt,`Mergejil_Id`='$hutulbur',`Utas_Dugaar`=$phone,`Email`='$email',`Aimag_Id`=$aimag,`BurtgeliinHuraamj`='$bhuraamj' where BurtgeliinDugaar='".$_GET['uid']."'");
	if($msg !==""){
        if(mysqli_query($con,$msg))
        {
            echo "true";
        }
        echo "<br>";
    }
    
$_SESSION['msg']="Profile Updated successfully";
}
?>


  <body>

      <?php $ret=mysqli_query($con,"SELECT * FROM `elsegch_burtgel` WHERE BurtgeliinDugaar='".$_GET['uid']."' ");
	  while($row=mysqli_fetch_array($ret))
	  
	  {?>
      <section id="main-content">
          <section class="wrapper">
          <h4 align="right"><a href="welcome.php" >Буцах</a></h4>
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['Ner'];?>-н мэдээлэл</h3>
             	
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?= $_SESSION['msg']=""; ?></p>
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                           <!--Start first name-->
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Бүртгэлийн дугаар </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="bdugaar" value="<?php echo $row['BurtgeliinDugaar'];?>" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Нэр </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="ner" value="<?php echo $row['Ner'];?>" >
                              </div>
                          </div>
                          <!--End First Name-->
                          
                          <!--Start last name-->    
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Овог</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="ovog" value="<?php echo $row['Ovog'];?>" >
                              </div>
                          </div>
                          <!--End last name-->
                          
                          <!--Start username name -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Регистрийн дугаар </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="rdugaar" value="<?php echo $row['RD'];?>" >
                            </div>
                        </div>
                        <!--End username name -->   
                                
                        <!--Start Email name -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Мэйл хаяг  </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" value="<?php echo $row['Email'];?>" >
                            </div>
                        </div>
                        <!--End Email name -->

                        <!--Start Phone name -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Утасны дугаар </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" value="<?php echo $row['Utas_Dugaar'];?>" >
                            </div>
                        </div>
                        <!--End Phone name -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Гэрчилгээний дугаар </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="gdugaar" value="<?php echo $row['GerchilgeeniiDugaar'];?>" >
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Бүртгэлийн хураамж</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="bhuraamj" value="<?php echo $row['BurtgeliinHuraamj'];?>" >
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Баримтаа өгсөн эсэх</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="barimt" value="<?php echo $row['BarimtaaUgsunEseh'];?>" >
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Аймаг</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="aimag" value="<?php echo $row['Aimag_Id'];?>" >
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Төгссөн сургууль</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="surguuli" value="<?php echo $row['TugssunSurguuli'];?>" >
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Хөтөлбөр</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="hutulbur" value="<?php echo $row['Mergejil_Id'];?>" >
                            </div>
                        </div>
                          <div style="margin-left:100px;">
                          <input type="submit" name="submit" value="Update" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
        <?php } ?>
      </section></section>
    <script src="admin/assets/js/jquery.js"></script>
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="admin/assets/js/jquery.scrollTo.min.js"></script>
    <script src="admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin/assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
