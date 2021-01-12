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
   $obj->select_employee("%".$_POST['query']."%",$page);
}
else
{
   $obj->select_employee("%%",$page);
}
if(mysqli_num_rows($resultemployee) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table font12" style="width: 1500px;">
    <tr>
        <th>ລະຫັດ</th>
        <th>ຊື່ພະນັກງານ</th>
        <th>ນາມສະກຸນ</th>
        <th>ເພດ</th>
        <th>ເບີໂທລະສັບ</th>
        <th>ທີ່ຢູ່ປັດຈຸບັນ</th>
        <th>ຕຳແໜ່ງ</th>
        <th>ທີ່ຢູ່ອີເມວ</th>
        <th>ລະຫັດເຂົ້າໃຊ້ລະບົບ</th>
        <th>ສິດເຂົ້າໃຊ້ລະບົບ</th>
        <th>ຮູບພາບ</th>
        <th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($resultemployee))
 {
  $output .= '
   <tr  class="result">
    <td>'.$row["emp_id"].'</td>
    <td>'.$row["emp_name"].'</td>
    <td>'.$row["emp_surname"].'</td>
    <td>'.$row["gender"].'</td>
    <td>'.$row["tel"].'</td>
    <td>'.$row["address"].'</td>
    <td style="display: none;">'.$row["auther_id"].'</td>
    <td>'.$row["auther_name"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["pass"].'</td>
    <td style="display: none;">'.$row["stt_id"].'</td>
    <td>'.$row["stt_name"].'</td>
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
            <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_emp"></a>&nbsp; &nbsp; 
            <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_emp"></a>
        </td>
   </tr>
  ';
 }
 mysqli_free_result($resultemployee);  
 mysqli_next_result($conn);
 $output .='
   </table>
</div>
 ';
 echo $output;
 
 if(isset($_POST["query"]))
 {
   $obj->select_employee_count("%".$_POST['query']."%");
 }
 else
 {
    $obj->select_employee_count("%%");
 }
   $count = mysqli_num_rows($resultemployee_count);
   mysqli_free_result($resultemployee_count);  
   mysqli_next_result($conn);
   $a = ceil($count/15);
   if(isset($_POST['page'])){
      if($_POST['page'] > 1){
         $previous = $_POST['page'] - 1;
         echo '      
         <nav aria-label="...">
            <ul class="pagination">
               <li class="page-item">
                  <a href="#" class="btn btn-danger page-links" id="'.$previous.'" style="color: white!important;" value="'.$previous.'">ກັບຄືນ</a>
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
                        <a href="#" class="btn btn-success page-links" id="'.$next.'" value="'.$next.'" style="color: white!important;" href="#">ໜ້າຖັດໄປ</a>
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
   $('.btnDelete_emp').on('click', function() {
        $('#exampleModalDelete').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#id').val(data[0]);
    });
    $('.btnUpdate_emp').on('click', function() {
        $('#exampleModalUpdate').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
    
        console.log(data);

        $('#emp_id2').val(data[0]);
        $('#emp_name2').val(data[1]);
        $('#emp_surname2').val(data[2]);
        $('#gender2').val(data[3]);
        $('#tel2').val(data[4]);
        $('#address2').val(data[5]);
        $('#auther_id2').val(data[6]);
        $('#email2').val(data[8]);
        $('#password2').val(data[9]);
        $('#password_cf2').val(data[9]);
        $('#status2').val(data[10]);
        if(data[12] === ''){
            document.getElementById("output2").src = ('<?php echo $path ?>image/camera.jpg');
        }
        else{
            document.getElementById("output2").src = ('<?php echo $path ?>image/'+data[12]);
        }
     
    });
</script>