<?php
while ($row = mysqli_fetch_assoc($rs)) {
    $r = explode(',',$row['SuuriShalgalt']);
                 // echo '<pre>';
                 // echo print_r($r);
                 // echo '</pre>';
                 $SuuriShalgalt = "";
                 foreach ($r as $key => $value) {
                     // $arr[3] will be updated with each value from $arr...
                     $SuuriShalgalt.= $value.'<br>';}
    $output='<h1>'.$row['SchoolName'].'</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0"> 
            <thead>
                <tr>
                    <th>Хөтөлбөр</th>
                    <th>Мэргэжил</th>
                    <th>Мэргэшил</th>
                    <th>Босго Оноо</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                <tr>
                    <td>'.$row['HutulburName'].'</td>
                    <td>'. $row['MergejilName'].'</td>
                    <td>'. $row['Mergeshil'].'</td>
                    <td>'. $SuuriShalgalt.'</td>
            </tr>
            
        </tbody>
    </table>
</div>
</section>';
   
}

?>