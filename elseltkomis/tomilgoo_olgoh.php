<?php 
include("header.php");

$tomilolt='';
$bdugaar='';
$rdugaar='';
$email='';
$mergejil='';

if(isset($_POST['csubmit']))
{
  //  $tomilolt=$_POST['tdugaar'];
    $bdugaar=$_POST['bdugaar'];
    $tulbur = $_POST['tulbur'];
    $helber = $_POST['helber'];
   // $rdugaar=$_POST['rdugaar'];
   // $email=$_POST['email'];
   // $mergejil=$_POST['mergejil'];
    
  
  
    if(($sql=mysqli_query($con,"INSERT INTO `suraltsah_erh_avsan_elselgchid`(tomiloltId,BurtgeliinDugaar) VALUES (null,'{$bdugaar}')")) && ($sql2 = mysqli_query($con,"INSERT INTO `tulbur`(Id,BurtgeliinDugaar,TulsunHemjee,UurchlugdsunUdur,Tulburiig_yugaar_hiisen_be) VALUES(null,'$bdugaar','$tulbur',null,'$helber')")))
    {
         echo "true";}
         else {
        echo $bdugaar,$tulbur,$helber;
    }

$_SESSION['msg']="Client Details Upload successfully";
}
if(isset($_POST['csubmit']))
{
    echo "Insert data successfully";
    header("Location: tomilgoo.php");
}
?>

<body>
 
          <?php $ret=mysqli_query($con,"SELECT * FROM elsegch_burtgel as e, mergejil as m  WHERE BurtgeliinDugaar= '{$_GET['ID']}' AND e.Mergejil_Id=m.Mergejil_Id");
          

	  while($row=mysqli_fetch_array($ret))
	  
	  {?>
        <section id="main-content">
          <section class="wrapper">
          <h4 align="right"><a href="tomilgoo.php" >  < Буцах</a></h4>
            <h3><i class="fa fa-angle-right"></i>Томилолт олгох</h3>
                
                <div class="row">
                
                  
                      
                  <div class="col-md-12">
                      <div class="content-panel">
                
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg']=""; ?></p>
                           
                            <form class="form-horizontal style-form" name="registration" method="post" action="" enctype="multipart/form-data">

                            <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Томилолтын дугаар </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value=""  name="tdugaar"  placeholder="Томилолт автоматаар олгогдоно"disabled >
                            </div>
                        </div>
                            <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Бүртгэлийн дугаар </label>
                            <div class="col-sm-10">
                                <input type="text" class="disable" value="<?= $row['BurtgeliinDugaar']?>" placeholder="<?= $row['BurtgeliinDugaar']?>" name="bdugaar"   style="pointer-events:none;backround:grey;">
                            </div>
                        </div>
                        <!--Start First name -->
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">РД </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value=""  placeholder="<?= $row['RD']?>"name="rdugaar" disabled >
                            </div>
                        </div>
               
                        
                        
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Мэргэжил</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" placeholder="<?= $row['MergejilName']?>" name="hutulbur" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Төлбөр </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" name="tulbur" required >
                            </div>
                        </div>

                        <div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Төлбөр* </label>
								<div class="col-sm-10">
									<select  class="form-control" id="helber" name="helber" >
									<option value="" >Төлбөр юугаар төлсөн </option>
                                    <?php
									$sql = "select * from tulburiin_turul";
									$q = $con->query($sql);
									
									while($r = $q->fetch_assoc())
									{
									echo '<option value="'.$r['Id'].'" >'.$r['tulburiin_turul'].'</option>';
									}
									?>									
									
									</select>
								</div>
						</div>
                        <!--Start Submit button-->   
                        <div class="sign-up" style="margin-left:100px;">
                                <input type="reset" class="btn btn-theme" value="Reset">
                                <input type="submit" class="btn btn-theme" name="csubmit"  value="Submit" >
                                <div class="clear"> </div>
                        </div>
                            </form>
                        <!--End Submit button-->       
                      
                  </div>
              </div>
        </section>
      </section>
      
      <?php } ?>

        </div>

        <br><br>


    
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