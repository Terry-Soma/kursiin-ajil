
<?php 
include("header.php");

// if(isset($_SESSION['aimag_Id']))
// {
  // $aimag=$_SESSION['aimag_Id'];
// }

if(isset($_POST['csubmit']))
{


$msg='';
    $bdugaar=$_POST['bdugaar'];
    $ovog=$_POST['ovog'];
    $ner=$_POST['ner'];
    $rdugaar=$_POST['rdugaar'];
    $gdugaar=$_POST['gdugaar'];
    $surguuli=$_POST['surguuli'];
    $barimt=$_POST['barimt'];
    $phone=$_POST['phone'];
   

  
    $email=$_POST['email'];
    $hutulbur=$_POST['hutulbur'];
    $bhuraamj=$_POST['bhuraamj'];


    //$aimag=$_POST['aimag'];


  
    if(isset($_FILES['image'])){
        $img_name = $_FILES['image']['name'];//getting user uploaded img name    
        $img_type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        //let's explode image and get the last extension like jpg png
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);//here we get the extension of an user uploaded img file 

        $extentions = ['png','jpeg','jpg'];// these are some valid img ext and we've store theme in array
        if(in_array($img_ext, $extentions)===true){
         
            $new_img_name= $rdugaar.$img_name;
            
          if(move_uploaded_file($tmp_name,"../elseltimages/".$new_img_name)){
             
           
    $msg=("INSERT INTO `elsegch_burtgel`(`BurtgeliinDugaar`, `Ovog`, `Ner`, `RD`, `GerchilgeeniiDugaar`, `TugssunSurguuli`, `BarimtaaUgsunEseh`, `Mergejil_Id`, `Utas_Dugaar`, `Email`, `Aimag_Id`, `zuragUrl`, `BurtgeliinHuraamj`) VALUES ('$bdugaar','$ovog','$ner','$rdugaar','$gdugaar','$surguuli','$barimt','$hutulbur','$phone','$email',{$_SESSION['aimag_Id']},'$new_img_name','$bhuraamj')");

           

          }  
                    
        }else{
            echo "Please select an image file -jpef,jpg,png!";
        }


    }else{
        echo "Please select an image file";
    }

    echo $msg;

// $_SESSION['msg']="Client Details Upload successfully";

if($msg !==""){
    if(mysqli_query($con,$msg))
    {
        echo "success";
    }
    else { echo "gg";}
   
}
}
if(isset($_POST['csubmit']))
{
    echo "Insert data successfully";
   header("Location: welcome.php");
}


?>


        <section id="main-content">
          <section class="wrapper">
          <h4 align="right"><a href="welcome.php" >Буцах</a></h4>
            <h3><i class="fa fa-angle-right"></i>Элсэгчийн мэдээлэл оруулах</h3>
            
            <?php $msg=''; $msg;?>
                
                <div class="row">
                      
                  <div class="col-md-12">
                      <div class="content-panel">
                      <p align="center" style="color:#F00;"><?php echo $_SESSION['msg']=""; ?></p>
                           
                            <form class="form-horizontal style-form" name="registration" method="post" action="" enctype="multipart/form-data">

                            <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Бүртгэлийн дугаар </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value=""  name="bdugaar" required >
                            </div>
                        </div>

                         <!--Start Last name -->
                         <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Овог </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" name="ovog"  required >
                            </div>
                        </div>
                        <!--End Last name -->
                        <!--Start First name -->
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Нэр </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value=""  name="ner" required >
                            </div>
                        </div>
                        <!--End First name -->  


                       

                        <!--Start username name -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Регистрийн дугаар </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" name="rdugaar" placeholder="__******" required >  
                            </div>
                        </div>
                        <!--End username name -->   
                                
                        <!--Start Email name -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Мэйл хаяг </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" name="email" required >
                            </div>
                        </div>
                        <!--End Email name -->

                        <!--Start Phone name -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Утасны дугаар </label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" value="" name="phone" required >
                            </div>
                        </div>
                        <!--End Phone name -->

                        <!--Start image name -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Цээж зураг </label>
                                <div class="col-sm-10">
                                <input type="file" name="image" required />
                            </div>
                        </div>
                <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Гэрчилгээний дугаар </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" name="gdugaar" required >
                            </div>
                        </div>
                        <!--End plan name -->

                        <!--Start Plan Price -->
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Бүртгэлийн хураамж </label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="Хураамж төлсөн бол 1 төлөөгүй бол 0 гэж оруулна"
                                 name="bhuraamj" required >
                            </div>
                        </div>
                      
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Баримтаа өгсөн эсэх </label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="Баримтаа өгсөн бол 1 төлөөгүй бол 0 гэж оруулна" name="barimt" required >
                            </div>
                        </div>

                    
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Төгссөн сургууль </label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" value="" name="surguuli" required >
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Мэргэжил сонгох </label>
                                <div class="col-sm-10">
                                <select  class="form-control" id="hutulbur" name="hutulbur" >
									<option value="" >энд дарж мэргэжил сонгох</option>
									
                                    <?php
									$sql = "select * from mergejil order by Mergejil_Id asc";
									$q = $con->query($sql);
									while($r = $q->fetch_assoc())
									{
									echo '<option value="'.$r['Mergejil_Id'].'">'.$r['MergejilName'].'</option>';
									}
									?>									
									
									</select> 
                            </div>
                        </div> 
                        
                        <!--Start Submit button-->   
                        <div class="sign-up" style="margin-left:100px;">
                                <input type="reset" class="btn btn-theme" value="Устгах">
                                <input type="submit" class="btn btn-theme" name="csubmit"  value="Upload" >
                                <div class="clear"> </div>
                        </div>
                            </form>
                        <!--End Submit button-->       
                      
                  </div>
              </div>
        </section>
      </section>
      


        </div>

        <br><br>


    
    <script src="admin/assets/js/jquery.js"></script>
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="admin/assets/js/jquery.scrollTo.min.js"></script>
    <script src="admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="admin/assets/js/common-scripts.js"></script>
  <!-- <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script> -->
</body>

</html>
