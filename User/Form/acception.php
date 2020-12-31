<?php
  $title = "ການອະນຸມັດ";
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
        <div id="result2"></div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h5 align="center" class="card-title"></h5>
                    <p class="card-text">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <button type="button" name="Discard" class="btn btn-outline-danger"
                                        data-toggle="modal" data-target="#exampleModal_discard">ລົບຟອມເບີກ</button>
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
                                                    ທ່ານບໍ່ຕ້ອງການລົບຟອມເບີກ ຫຼື ບໍ່ ?
                                                </div>
                                                <form action="accept" id="formadd" method="POST">
                                                <input type="hidden" name="form_id" id="form_id">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-dismiss="modal">ຍົກເລີກ</button>
                                                    <button type="submit" name="btnDiscard"
                                                        class="btn btn-outline-danger">ລົບ</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div align="right">
                                    <button type="button" name="btnAdd" class="btn btn-outline-success"
                                        data-toggle="modal" data-target="#exampleModal2">ພິມຟອມເບີກ</button>
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
                                                    ທ່ານຕ້ອງການພິມລາຍງານ ຫຼື ບໍ່ ?
                                                </div>
                                                <form action="#" id="FormReport" method="POST">
                                                <input type="hidden" name="form_id_Report" id="form_id_Report">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-dismiss="modal">ຍົກເລີກ</button>
                                                    <button type="submit" name="btnAccept"
                                                        class="btn btn-outline-success">ພິມລາຍງານ</button>
                                                </div>
                                                </form>
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
    var search = $('#search').val();
    if (search != '') {

    }
    else{
        var search = "%%";
    }
    var page = 0;
    var emp_id = '<?php echo $_SESSION['emp_id'] ?>';
load_data(search,page,emp_id);
load_data2();

function load_data(query,page,emp_id) {
    $.ajax({
        url: "fetch_accept2.php",
        method: "POST",
        data: {
            query:query,
            page:page,
            emp_id:emp_id
        },
        success: function(data) {
            $('#result2').html(data);
        }
    });
}
    $('#search').keyup(function() {
        var page = 0;
        var emp_id = '<?php echo $_SESSION['emp_id'] ?>';
        var search = $(this).val();
        if (search != '') {
            load_data(search,page,emp_id);
        } else {
            load_data('%%',page);
        }
    });
    $(document).on('click', '.page-links', function() {
        var page = this.id;
        var emp_id = '<?php echo $_SESSION['emp_id'] ?>';
        console.log(page);
        var search = $('#search').val();
        if (search != '') {
            load_data(search,page,emp_id);
        } else {
            load_data('%%',page,emp_id);
        }
    });
    function load_data2(query) {
    $.ajax({
        url: "fetch_accept.php",
        method: "POST",
        data: {
            query: query
        },
        success: function(data) {
            $('#result').html(data);
        }
    });
    }
    $(document).on('click', '.btnUpdate_accept', function() {
        var form_id = $('#form_id').val();
        console.log(form_id);
        if (form_id != '') {
            load_data2(form_id);
        } else {
            load_data2();
        }
    });
});
</script>
<!-- /.content-wrapper -->
<br>
<?php
    include ("../../header-footer/footer.php");
  ?>