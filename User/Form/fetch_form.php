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
   $obj->select_form("%".$_POST['query']."%",$page);
}
else
{
   $obj->select_form("%%",$page);
}
if(mysqli_num_rows($resultform) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table font12" style="width: 1500px;">
    <tr>
    <th style="width: 50px">ສິນຄ້າ</th>
    <th style="width: 150px">ລະຫັດສິນຄ້າ</th>
    <th>ຊື່ສິນຄ້າ</th>
    <th style="width: 150px">ວັນທີ</th>
    <th>ລຸ້ນເຄື່ອງຂອງສິນຄ້າ</th>
    <th style="width: 50px">ຈຳນວນ</th>
    <th style="width: 120px">ເງື່ອນໄຂການຜະລິດ</th>
    <th style="width: 30px"></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($resultform))
 {
  $output .= '
   <tr  class="result">
   <td style="display: none;">'.$row["form_id"].'</td>
    <td>'.$row["code"].'</td>

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
 mysqli_free_result($resultform);  
 mysqli_next_result($conn);
 $output .='
   </table>
</div>
<br>
 ';
 echo $output;
 
 if(isset($_POST["query"]))
 {
   $obj->select_form_count("%".$_POST['query']."%");
 }
 else
 {
    $obj->select_form_count("%%");
 }
   $count = mysqli_num_rows($resultform_count);
   mysqli_free_result($resultform_count);  
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