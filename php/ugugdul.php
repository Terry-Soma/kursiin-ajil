<?php 
$header='<div class="wrapp"> 
  <a href="">
    <div class="logo-container full-screen-table-demo" style="position:relative;">
      <div class="logo" style="min-width:60px;">
        <img style=" min-height: 60px;"src="./Imgs/schoolImage/'.$row['image_url'].'">
      </div>
      <div class="brand">
        '. $row['SchoolName'].'
      </div>
    </div>
  </a>
  <div class="fresh-table full-color-azure">
  <table id="fresh-table" class="table f-2">
    <thead>
      <th data-field="too">№</th>
      <th data-field="id">Хөтөлбөр</th>
      <th data-field="name">Мэргэжил</th>
      <th data-field="salary">Мэргэшил</th>
      <th data-field="country">Суурь шалгалт</th>
      <th data-field="city">Босго оноо</th>
      <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Бүртгүүлэх</th>
    </thead>
    <tbody>
    <tr>
        <td>'.$r.'</td>
        <td>'.$row['HutulburName'].'</td>
        <td>'. $row['MergejilName'].'</td>
        <td>'. $row['Mergeshil'] .'</td>
        <td>'. $row['SuuriShalgalt'].'</td>
        <td>'. $row['Bosgo_Onoo'].'</td>
        <td></td>
      </tr>';

$output ="";
while ($row = mysqli_fetch_assoc($rs)) {
	$r++;

$output.='
      <tr>
        <td>'.$r.'</td>
        <td>'.$row['HutulburName'].'</td>
        <td>'. $row['MergejilName'].'</td>
        <td>'. $row['Mergeshil'] .'</td>
        <td>'. $row['SuuriShalgalt'].'</td>
        <td>'. $row['Bosgo_Onoo'].'</td>
        <td></td>
      </tr>';

}

  $footer = '</tbody>
  </table>
</div>
</div>';

?>