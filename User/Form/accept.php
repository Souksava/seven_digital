<?php
  $title = "ອະນຸມັດຟອມເບີກ";
  $path = "../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>

<div style="width: 100%;">
    <b>ລາຍການຟອມເບີກ</b>&nbsp <img src="<?php echo $path ?>icon/hidemenu.ico" width="10px">
</div>
<div class="row">
    <div class="col-md-7">
        <?php
        $page = 0;
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }
        $obj->select_form($page);
        if(mysqli_num_rows($resultform) > 0){
    ?>
        <div class="table-responsive" style="text-align: center;">
            <table class="table font12" style="width: 1000px">
                <tr>
                    <th style="width: 100px">ເລກທີຟອມ</th>
                    <th style="width: 150px">ຜູ້ສ້າງຟອມ</th>
                    <th style="width: 150px">ລູກຄ້າ</th>
                    <th style="width: 100px">ຈຳນວນທັງໝົດ</th>
                    <th style="width: 120px">Packing No</th>
                    <th style="width: 80px">ວັນທີ</th>
                    <th style="width: 80px">ເວລາ</th>
                    <th style="width: 100px">ສະຖານະ</th>
                    <th style="width: 30px"></th>
                </tr>
                <?php
                    foreach($resultform as $row){
                ?>
                <tr>
                    <td><?php echo $row['form_id'] ?></td>
                    <td><?php echo $row['emp_name'] ?></td>
                    <td><?php echo $row['company'] ?></td>
                    <td><?php echo $row['amount'] ?></td>
                    <td><?php echo $row['packing_no'] ?></td>
                    <td><?php echo date("d/m/Y",strtotime($row["form_date"])) ?></td>
                    <td><?php echo $row['form_time'] ?></td>
                    <td><?php echo $row['stt_accept'] ?></td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                            class="fa fa-info toolcolor btnUpdate_accept"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <?php
                    }
                    mysqli_free_result($resultform);  
                    mysqli_next_result($conn);
                ?>
            </table>
        </div>
        <?php
             $obj->select_form_count();
             $count = mysqli_num_rows($resultform_count);
             mysqli_free_result($resultform_count);  
             mysqli_next_result($conn);
             $a = ceil($count/15);
             if(isset($_GET['page'])){
                if($_GET['page'] > 1){
                   $previous = $_GET['page'] - 1;
                   echo '      
                   <nav aria-label="...">
                      <ul class="pagination">
                         <li class="page-item">
                            <a href="accept?page='.$previous.'" class="btn btn-danger page-links" id="'.$previous.'" style="color: white!important;" value="'.$previous.'">ກັບຄືນ</a>
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
             if(isset($_GET['page'])){
                $page_next = $_GET['page'];
                $page_next2 = $_GET['page'];
                if($_GET['page'] == 0 || $_GET['page'] == ''){
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
                      <a href="accept?page='.$b.'" id="'.$b.'" class="btn btn-danger page-link page-links" value="'.$b.'">'.$b.'</a>
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
                                  <a href="accept?page='.$next.'" class="btn btn-success page-links" id="'.$next.'" value="'.$next.'" style="color: white!important;" href="#">ໜ້າຖັດໄປ</a>
                               </li>
                            </ul>
                         </nav>
          ';
          
                }
                else{
                   echo'';
                }
        ?>
        <?php
        }
        else{
            echo'
            <div align="center">
                <hr size="1" style="width: 90%;"/>
                    ຍັງບໍ່ມີຂໍ້ມູນ
                <hr size="1" style="width: 90%;"/>
            </div>
        ';
        }
    ?>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h5 align="center" class="card-title"></h5>
                <form action="accept" id="formadd" method="POST">
                    <input type="hidden" name="form_id" id="form_id">
                    <p class="card-text">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <button type="button" name="Discard" class="btn btn-outline-danger"
                                        data-toggle="modal" data-target="#exampleModal_discard">ບໍ່ອະນຸມັດ</button>
                                    <div class="modal fade font14" id="exampleModal_discard" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body" align="center">
                                                    ທ່ານບໍ່ຕ້ອງການອະນຸມັດຟອມເບີກ ຫຼື ບໍ່ ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-dismiss="modal">ຍົກເລີກ</button>
                                                    <button type="submit" name="btnDiscard"
                                                        class="btn btn-outline-danger">ບໍ່ອະນຸມັດ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div align="right">
                                    <button type="button" name="btnAdd" class="btn btn-outline-success"
                                        data-toggle="modal" data-target="#exampleModal2">ອະນຸມັດ</button>
                                    <div class="modal fade font14" id="exampleModal2" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body" align="center">
                                                    ທ່ານຕ້ອງການອະນຸມັດຟອມເບີກ ຫຼື ບໍ່ ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-dismiss="modal">ຍົກເລີກ</button>
                                                    <button type="submit" name="btnAccept"
                                                        class="btn btn-outline-success">ອະນຸມັດ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <div id="result"></div>
        </div>
    </div>
    </p>
    </form>
</div>
</div>
</div>
</div>
</div>
<?php
    if(isset($_POST['btnDiscard'])){
        $form_id = $_POST['form_id'];
        $accpet = mysqli_query($conn,"update form set stt_accept='ບໍ່ອະນຸມັດ' where form_id='$form_id'");
        if(!$accpet){
            echo"<script>";
            echo"window.location.href='accept?Discard=fail';";
            echo"</script>";
        }
        else{
            echo"<script>";
            echo"window.location.href='accept?Discard2=success';";
            echo"</script>";
        }
    }
    if(isset($_POST['btnAccept'])){
        $form_id = $_POST['form_id'];
        $accpet = mysqli_query($conn,"update form set stt_accept='ອະນຸມັດ' where form_id='$form_id'");
        if(!$accpet){
            echo"<script>";
            echo"window.location.href='accept?Accept=fail';";
            echo"</script>";
        }
        else{
            echo"<script>";
            echo"window.location.href='accept?Accept2=success';";
            echo"</script>";
        }
    }
?>
<!-- sweetalert -->
<?php
  //check save
  if(isset($_GET['Discard'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ການບໍ່ອະນຸມັດຟອມເບິກຜິດພາດ", "error");
    </script>';
  }
  if(isset($_GET['Discard2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ການບໍ່ອະນຸມັດຟອມເບີກສຳເລັດ", "success");
    </script>';
  }
  if(isset($_GET['Accept'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ການອະນຸມັດຟອມເບິກຜິດພາດ", "error");
    </script>';
  }
  if(isset($_GET['Accept2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ການອະນຸມັດຟອມເບີກສຳເລັດ", "success");
    </script>';
  }
?>

<script>
$(window).load(function() {

load_data('0');

function load_data(query) {
    $.ajax({
        url: "fetch_accept.php",
        method: "POST",
        data: {
            query:query
        },
        success: function(data) {
            $('#result').html(data);
        }
    });
}
    $('.btnUpdate_accept').on('click', function() {
        // $('#exampleModalUpdate').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);
        $('#form_id').val(data[0]);
    });
    $(document).on('click', '.btnUpdate_accept', function() {
        var form_id = $('#form_id').val();
        console.log(form_id);
        if (form_id != '') {
            load_data(form_id);
        } else {
            load_data('0');
        }
    });
});
</script>
<!-- /.content-wrapper -->
<br>
<?php
    include ("../../header-footer/footer.php");
  ?>