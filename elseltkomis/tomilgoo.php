<?php
include("header.php");
?>

 <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>Элсэгчдийн мэдээлэл</h3>            
                <div class="row">
                  <div class="col-md-12">
                      <div class="content-panel">
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
                                  <th>Томилох</th>
                              </tr>
                              </thead>
                              <tbody>
                              
                              <?php $ret=mysqli_query($con,"select e.*,m.MergejilName
                                                            from `elsegch_burtgel` as e, mergejil as m
                                                            where  e.Aimag_Id=1 AND m.Mergejil_Id = e.`Mergejil_Id`
                                                            AND  e.delete_status = '0' 
                                                            AND e.BurtgeliinDugaar not in
                                                            (select s.BurtgeliinDugaar 
                                                            from `elsegch_burtgel` as e,`suraltsah_erh_avsan_elselgchid` as s 
                                                            WHERE  s.BurtgeliinDugaar =e.BurtgeliinDugaar)");
                               $cnt=1;       
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['MergejilName'];?></td>
                                  <td><?php echo $row['RD'];?></td>
                                  <td><?php echo $row['BurtgeliinDugaar'];?></td>
                                  <td><?php echo $row['Email'];?></td>
                                  <td><?php echo $row['Utas_Dugaar'];?></td>
                                  <td><?php echo $row['BarimtaaUgsunEseh'];?></td>
                                  <td>
                                     <a href="tomilgoo_olgoh.php?ID=<?= $row['BurtgeliinDugaar'];?>"> 
                                     <button class="btn btn-success btn-xs">Томилгоо олгох</button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                                                           
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
        </section>
      </section>
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <!-- <script src="admin/assets/js/jquery.js"></script> -->
    <script src="../admin/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../admin/assets/js/jquery.scrollTo.min.js"></script>
    <!-- <script src="../javascript/datatables/jquery.dataTables.js" type="text/javascript"></script> -->
    <script src="../admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../admin/assets/js/common-scripts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
 
  <script>
     $(document).ready( function () {
    $('#table_id').DataTable();
} );</script>
</body>

</html>