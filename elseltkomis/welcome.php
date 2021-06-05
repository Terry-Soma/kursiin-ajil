    <?php
    include("header.php");
    ?>
    
        <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>Элсэгчдийн мэдээлэл </h3>
            
                <div class="row">
                
                  
              
<?php
$id = "";

if(isset($_GET['Bagsh_Id'])){
	$id = $_GET['Bagsh_Id'];

}

if(isset($_GET['action']) && $_GET['action']=="delete"){
    $con->query("UPDATE  elsegch_burtgel set delete_status = '1'  WHERE BurtgeliinDugaar='".$_GET['ID']."'");	
   // ("location: welcome.php");
    }

?>
                  <div class="col-md-12">
                      <div class="content-panel">
                      
                      <!-- <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search..." />
     <div class="result"></div> 
    </div> -->


    
                          <!-- <table class="table table-striped table-advance table-hover" id="tSortable22"> -->

                              <div id="row" class="result"><h4><i class="fa fa-angle-right"></i>Нийт элсэгчид</h4>
                           
                              <hr>
                              <table id="table_id" class="display table table-striped table-advance table-hover ">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th class="hidden-phone">Мэргэжил</th>
                                  <th>РД</th>
                                  <th>Бүртгэлийн дугаар</th>
                                  <th>Мэйл хаяг</th>
                                  <th>Утасны дугаар</th>
                                  <th>Баримтаа өгсөн эсэх</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              
                                  <?php  
                                  $ret=mysqli_query($con,
                                  "SELECT e.*,m.MergejilName
                                  FROM `elsegch_burtgel` as e,
                                  mergejil as m
                                  where e.Aimag_Id='{$_SESSION['aimag_Id']}' and 
                                  e.delete_status=0 AND e.Mergejil_Id= m.Mergejil_Id
                                  ORDER BY m.Mergejil_Id");
                                  if(mysqli_num_rows($ret) >0){
                                    $cnt=1;
                                    while($row=mysqli_fetch_array($ret))
                                    {?>

                          
                              
                              <tr>
                              <td><?= $cnt;?></td>
                              <td><?= $row['MergejilName'];?></td>
                                  <td><?= $row['RD'];?></td>
                                  <td><?= $row['BurtgeliinDugaar'];?></td>
                                  <td><?= $row['Email'];?></td>
                                  <td><?= $row['Utas_Dugaar'];?></td>
                                  <td><?= $row['BarimtaaUgsunEseh'];?></td>
                                  
                                  <td>
                                     <a href="update-clients.php?uid=<?=  $row['BurtgeliinDugaar'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <a href="welcome.php?action=delete&ID=<?= $row['BurtgeliinDugaar'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Устгахдаа итгэлтэй байна уу?');"
                                     
                                     ><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }}
                                else{
                                    echo"Elsegch alga baina <br><br>";
                                }
                              ?>
                                                           
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
        </section>
      </section>
     
      


        

    <script src="../admin/assets/js/jquery.js"></script>
    <script src="../admin/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../admin/assets/js/jquery.scrollTo.min.js"></script>
    <!-- <script src="../javascript/datatables/jquery.dataTables.js" type="text/javascript"></script> -->
    <script src="../admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../admin/assets/js/common-scripts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  <script>
     $(document).ready( function () {
    $('#table_id').DataTable();
} );</script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
 
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</body>

</html>