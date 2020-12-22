<?php
  $path="../../";
  include (''.$path.'oop/obj.php');
//fetch.php
$output = '';
if(isset($_POST['page'])){
   $page = $_POST['page'];
   if($page == '' || $page == 0 || $page == 1){
      $page = 0;
      }
      else{
         $page = ($page*15)-15;
      }
}
else{
   $page = 0;
}
if(isset($_POST["query"]))
{
   $highlight = $_POST['query'];
   $obj->select_supplier("%".$_POST['query']."%",$page);
}
else
{
   $obj->select_supplier("%%",$page);
}
if(mysqli_num_rows($resultsupplier) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table font12" style="width: 1500px;">
    <tr>
        <th>ລະຫັດຜູ້ໜອງ</th>
        <th>ຊື່ບໍ່ລິສັດ</th>
        <th>ເບີໂທລະສັບ</th>
        <th>ເບີແຟັກ</th>
        <th>ທີ່ຢູ່ປັດຈຸບັນ</th>
        <th>ທີ່ຢູ່ອີເມວ</th>
        <th>ຮູບພາບ</th>
        <th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($resultsupplier))
 {
  $output .= '
   <tr  class="result">
   <td>'.$row["sup_id"].'</td>
   <td>'.$row["company"].'</td>
   <td>'.$row["tel"].'</td>
   <td>'.$row["fax"].'</td>
   <td>'.$row["address"].'</td>
   <td>'.$row["email"].'</td>
   <td style="display:none;">'.$row['img_path'].'</td>
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
            <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_sup"></a>&nbsp; &nbsp; 
            <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_sup"></a>
        </td>
   </tr>
  ';
 }
 mysqli_free_result($resultsupplier);  
 mysqli_next_result($conn);
 $output .='
   </table>
</div>
 ';
 echo $output;
 
 if(isset($_POST["query"]))
 {
   $obj->select_supplier_count("%".$_POST['query']."%");
 }
 else
 {
    $obj->select_supplier_count("%%");
 }
   $count = mysqli_num_rows($resultsupplier_count);
   mysqli_free_result($resultsupplier_count);  
   mysqli_next_result($conn);
   $a = ceil($count/15);
   if(isset($_POST['page'])){
      if($_POST['page'] > 1){
         $previous = $_POST['page'] - 1;
         echo '      
         <nav aria-label="...">
            <ul class="pagination">
               <li class="page-item">
                  <a href="#" class="btn btn-danger page-links" id="'.$previous.'" style="color: white!important;" value="'.$previous.'">Previous</a>
               </li>
       ';
      }
      else{
         echo' <nav aria-label="...">
                  <ul class="pagination">';
      }
   }
   else{
      echo' <nav aria-label="...">
               <ul class="pagination">';
   }
   $i = 0;
   $page_next = 0;
   $page_next2 = 1;
   if(isset($_POST['page'])){
      $page_next = $_POST['page'];
      $page_next2 = $_POST['page'];
      if($_POST['page'] == 0 || $_POST['page'] == ''){
         $page_next2 = 1;
      }
   }
   for($b=1;$b<=$a;$b++){
      $i = $b;
      if($page_next2 == $b){
         echo '
         <li class="page-item active" aria-current="page">
            <span class="page-link">
            '.$b.'
            <span class="sr-only">(current)</span>
            </span>
         </li>
         ';
      }
      else{
         echo '
         <li class="page-item">
            <a href="#" id="'.$b.'" class="btn btn-danger page-link page-links" value="'.$b.'">'.$b.'</a>
         </li>
         ';
      }
   }
     if($page_next == 0){
        $page_next = 1;
     }
      if($page_next < $i){
         if($page_next == 0){
            $page_next += 1;
         }
         $next = $page_next + 1;
         echo '      

                     <li class="page-item">
                        <a href="#" class="btn btn-success page-links" id="'.$next.'" value="'.$next.'" style="color: white!important;" href="#">Next</a>
                     </li>
                  </ul>
               </nav>
';

      }
      else{
         echo'';
      }
   
}
else
{
 echo '<br>
 <hr size="1" width="90%">
<p align="center">ບໍ່ມີຂໍ້ມູນ</p>
<hr size="1" width="90%">
 ';
}
?>
<script type="text/javascript">
var highlight = "<?php echo $_POST['query']; ?>";
$('.result').highlight([highlight]);
</script>