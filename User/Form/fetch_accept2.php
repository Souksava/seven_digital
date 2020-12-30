<?php
  $path="../../";
  include (''.$path.'oop/obj.php');
//fetch.php
$output = '';
$amount = 0;



if(isset($_POST["query"]))
{
    $highlight = $_POST['query'];
        $obj->select_form2("%".$_POST['query']."%");
}
else
{
   $obj->select_form2("%%");
}
if(mysqli_num_rows($resultform2) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table font12" style="width: 1500px;">
    <tr>
    <th>ລະຫັດສິນຄ້າ</th>
    <th>ຊື່ສິນຄ້າ</th>
    <th>ລຸ້ນເຄື່ອງຂອງສິນຄ້າ</th>
    <th>ເງື່ອນໄຂການສັ່ງຊື້</th>
    <th>ຮູບພາບສິນຄ້າ</th>
    <th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($resultform2))
 {
  $output .= '
  <tr  class="result">
  <td>'.$row["code"].'</td>
  <td style="display: none;">'.$row["pro_name"].'</td>
  <td style="display: none;">'.$row["cate_id"].'</td>
  <td style="display: none;">'.$row["brand_id"].'</td>
  <td>'.$row["cate_name"].' '.$row["brand_name"].'<br>'.$row["pro_name"].'</td>
  <td>'.$row["gen"].'</td>
  <td style="display: none;">'.$row["unit_id"].'</td>
  <td style="display: none;">'.$row["qtyalert"].'</td>
  <td>'.$row["qtyalert"].' '.$row["unit_name"].'</td>
  <td style="display: none;">'.$row["img_path"].'</td>
  ';
  if($row['img_path'] != ''){
  $output .= '
  <td>
      <a href="'.$path.'image/'.$row['img_path'].'" target="_blank">
          <img src="'.$path.'image/'.$row['img_path'].'" class="img-circle elevation-2"
              alt="" width="55px">
      </a>
  </td>
  ';
  }
  else{
  $output .= '
  <td>
      <a href="'.$path.'image/image.jpeg" target="_blank">
          <img src="'.$path.'image/image.jpeg" class="img-circle elevation-2"
              alt="" width="55px">
      </a>
  </td>
  ';
  }
  $output .='
  <td>
  <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
      class="fa fa-plus toolcolor btnUpdate_form"></a>&nbsp; &nbsp;
</td>
 </tr>
  ';
 }
 mysqli_free_result($resultform2);  
 mysqli_next_result($conn);
 $output .='
   </table>
</div>
<br>
 ';
 echo $output;
else
{
 echo '<br>
 <hr size="1" width="90%">
<p align="center">ບໍ່ມີຂໍ້ມູນ</p>
<hr size="1" width="90%">
 ';
}
?>
