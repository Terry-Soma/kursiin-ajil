<?php
include("header.php");
?>

<section id="main-content">
          <section class="wrapper">
          <form action="#" method="post" enctype="multipart/form-data">
            <input class="form" type="file" name="excel" accept=".xlsx" required>
            <input class="form btn btn-primary"  type="Submit" name="submit" id="sub">
        </form>
         
<?php
if(isset($_FILES['excel']['name'])){
    include "xlsx.php";
    if($con){
        $excel=SimpleXLSX::parse($_FILES['excel']['tmp_name']);
        echo "<pre>";	
        // print_r($excel->rows(1));
       
        for ($sheet=0; $sheet < sizeof($excel->sheetNames()) ; $sheet++) { 
        $rowcol=$excel->dimension($sheet);
        $i=0;
        if($rowcol[0]!=1 &&$rowcol[1]!=1){
            
        foreach ($excel->rows($sheet) as $key => $row) {
            //print_r($row);
            $q="";
            $too=0;
            foreach ($row as $key => $cell) {

                //print_r($cell);echo "<br>";
              
                if($i >0){
                 if($too ==10 ){
                        $q.= "'".$_SESSION['aimag_Id']. "',";
                    }
                    if($cell == "1")
                    {
                        $q.="1,";
                        
                    }else if($cell =="0") {
                        $q.="0,";
                    }
                    else if($cell !==""){
                        $q.="'".$cell. "',";

                    }
                    

                }
                $too++;

                
            }
            // if($i==0){
                $query="";
            // }else{
            //     $query.= "INSERT INTO ".$excel->sheetName($sheet)." values (".rtrim($q,",").");";
            // }
$i !==0 ? ($query= "INSERT INTO elsegch_burtgel(`BurtgeliinDugaar`, `Ovog`, `Ner`, `RD`, `GerchilgeeniiDugaar`, `TugssunSurguuli`, `BarimtaaUgsunEseh`, `Mergejil_Id`, `Utas_Dugaar`, `Email`, `Aimag_Id`, `zuragUrl`, `BurtgeliinHuraamj`) values (".rtrim($q,",").");") :"";
            echo $query;

            $i++;
            if($query !==""){
            if(mysqli_query($con,$query))
            {
                echo "true";
            }
            echo "<br>";
        }
        }
    }
        }
    }
}


?>

          </section>
          </section>

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