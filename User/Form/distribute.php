<?php
  $title = "ເບີກສິນຄ້າ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
  $amount = 0;
?>
<form action="distribute" id="formUpdate" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ຂໍ້ມູນເບີກສິນຄ້າ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" align="left">
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຮູບພາບ</label>
                            <img src="../../image/camera.jpg" id="output2" width="100%" height="250">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ລະຫັດສິນຄ້າ</label>
                            <input type="text" name="code" id="code" class="form-control" placeholder="ລະຫັດສິນຄ້າ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>Serial Number</label>
                            <input type="hidden" name="add_distribute" id="add_distribute">
                            <input type="text" name="serial" id="serial" class="form-control"
                                placeholder="Serial Number">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຈຳນວນ</label>
                            <input type="text" name="qty" id="qty" class="form-control" placeholder="ຈຳນວນ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ເລກທີຟອມເບີກ</label>
                            <input type="text" name="form_id" id="form_id" class="form-control"
                                placeholder="ເລກທີຟອມເບີກ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ໝາຍເຫດ</label>
                            <input type="text" name="remark" id="remark" placeholder="ໝາຍເຫດ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnUpdate" id="Update" class="btn btn-outline-success"
                        onclick="">ເພີ່ມ</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
    if(isset($alert)){
        echo $alert;
    }
?>

<div style="width: 100%;">
    <b>ລາຍການ<?php echo $title ?></b>&nbsp <img src="<?php echo $path ?>icon/hidemenu.ico" width="10px">
</div>

<div class="container-fluid font12">
    <div class="row">
        <div class="col-md-7">
            <div id="result"></div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 align="center" class="card-title"></h5>
                    <p class="card-text">
                        <form action="distribute" id="formsave" method="POST">
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <div align="right">
                                        <button type="button" name="btnAdd" class="btn btn-outline-success"
                                            data-toggle="modal" data-target="#exampleModal2">ບັນທຶກຟອມເບີກ</button>
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
                                                        ທ່ານຕ້ອງການຈະບັນທຶກຂໍ້ມູນຟອມເບີກເຂົ້າໃນລະບົບ ຫຼື ບໍ່ ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-dismiss="modal">ຍົກເລີກ</button>
                                                        <button type="submit" name="btnSave_distribute"
                                                            class="btn btn-outline-success">ບັນທຶກ</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
                <?php
                    $obj->select_distribute_list();
                    if(isset($_COOKIE['distribute_list'])){
                ?>
                <div class="table-responsive2" style="text-align: center;">
                    <table class="table font12" style="width: 700px">
                        <tr>
                            <th>ສິນຄ້າ</th>
                            <th>ລະຫັດສິນຄ້າ</th>
                            <th>ຊື່ສິນຄ້າ</th>
                            <th>Serial</th>
                            <th>ລຸ້ນເຄື່ອງ</th>
                            <th>ຈຳນວນ</th>
                            <th>ເລກທີ</th>
                            <th>ໝາຍເຫດ</th>
                            <th style="width: 30px;"><a href="#" data-toggle="modal" data-target="#exampleModalClear" class="clear">ລ້າງ</a></th>
                        </tr>
                        <?php 
                            foreach($cart_data as $row){
                        ?>
                        <tr>
                            <td style="display:none;"><?php echo $row['serial'] ?></td>
                            <?php
                                if($row['img_path'] == ''){
                            ?>
                            <td scope="row"><img src="<?php echo $path ?>image/logo.png" alt=""
                                    style="width: 30px;heigt: 100px;">
                                <?php
                                }
                                else{
                            ?>
                            <td scope="row"><img src="<?php echo $path ?>image/<?php echo $row['img_path'] ?>" alt=""
                                    style="width: 30px;heigt: 100px;">
                                <?php
                                }
                            ?>
                            </td>
                            <td><?php echo $row['code'] ?></td>
                            <td>
                            <?php echo $row['cate_name'] ?> <?php echo $row['brand_name'] ?> <br>
                            <?php echo $row['name'] ?>
                            </td>
                            <td><?php echo $row['serial'] ?></td>
                            <td><?php echo $row['gen'] ?></td>
                            <td><?php echo $row['qty'] ?> <?php echo $row['unit_name'] ?></td>
                            <td><?php echo $row['form_id'] ?></td>
                           <td> <?php echo $row['remark'] ?></td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                                    class="fa fa-trash toolcolor btnDelete_dist"></a>&nbsp; &nbsp;
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
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
            <div class="col-md-12" align="right">
                <br>
                <h4 style="color: #CE3131;"> <?php echo $amount ?> ລາຍການ</h4>
            </div>

        </div>
        </form>
        </p>
    </div>
</div>
</div>
</div>
</div>
<form action="distribute" id="formClear" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalClear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ຢືນຢັນການລົບຂໍ້ມູນ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                
                    ທ່ານຕ້ອງການລ້າງລາຍການ ຫຼື ບໍ່ ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="clear_distribute" class="btn btn-outline-danger">ລ້າງ</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- modal form delete -->
<form action="distribute" id="formDelete" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ຢືນຢັນການລົບຂໍ້ມູນ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                    <input type="hidden" name="id" id="id">
                    ທ່ານຕ້ອງການລົບຂໍ້ມູນ ຫຼື ບໍ່ ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnDelete_distribute" class="btn btn-outline-danger">ລົບ</button>
                </div>
            </div>
        </div>
    </div>
</form>


<!-- check form import input not null -->
<script type="text/javascript">
const myform = document.getElementById('formUpdate');
const add_distribute = document.getElementById('add_distribute');
const code = document.getElementById('code');
const serial = document.getElementById('serial');
const qty = document.getElementById('qty');
const form_id = document.getElementById('form_id');
myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const add_distributeValue = add_distribute.value.trim();
    const codeValue = code.value.trim();
    const serialValue = serial.value.trim();
    const qtyValue = qty.value.trim();
    const form_idValue = form_id.value.trim();
    if (codeValue === '') {
        setErrorFor(code, 'ກະລຸນາປ້ອນລະຫັດສິນຄ້າ');
    } else {
        setSuccessFor(code);
    }
    if (serialValue === '') {
        setErrorFor(serial, 'ກະລຸນາປ້ອນໝາຍເລກ Serial Number');
    } else {
        setSuccessFor(serial);
    }
    if (qtyValue === '') {
        setErrorFor(qty, 'ກະລຸນາປ້ອນຈຳນວນ');
    } else {
        setSuccessFor(qty);
    }
    if (form_idValue === '') {
        setErrorFor(form_id, 'ກະລຸນາປ້ອນເລກທີຟອມເບີກ');
    } else {
        setSuccessFor(form_id);
    }
    if (codeValue !== '' && serial !== '' && serialValue !== '' && qtyValue !== '' && form_idValue !== '') {
        document.getElementById("formUpdate").action = "distribute";
        document.getElementById("formUpdate").submit();
    }
}
</script>


<!-- sweetalert -->
<?php
  //check save
  if(isset($_GET['save'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ບັນທຶກຂໍ້ມູນບໍ່ສຳເລັດ", "error");
    </script>';
  }
  if(isset($_GET['save2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ບັນທຶກຂໍ້ມູນສຳເລັດ", "success");
    </script>';
  }
  if(isset($_GET['code'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ລະຫັດສິນຄ້າບໍ່ມີໃນລະບົບ !", "info");
    </script>';
  }
  if(isset($_GET['code-serial'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ລະຫັດສິນຄ້າ ແລະ ໝາຍເລກ Serial ບໍ່ມີໃນລະບົບ !", "info");
    </script>';
  }
  if(isset($_GET['qty'])=='than'){
    echo'<script type="text/javascript">
    swal("", "ຈຳນວນເບີກສິນຄ້າເກີນກວ່າຈຳນວນສິນຄ້າຢູ່ໃນສະຕ໋ອກ ! ກະລຸນາປ້ອນຈຳນວນໃຫ້ນ້ອຍກວ່າ ຫຼື ເທົ່າກັບສະຕ໋ອກ", "info");
    </script>';
  }
  if(isset($_GET['form'])=='false'){
    echo'<script type="text/javascript">
    swal("", "ເລກທີຟອມເບີກຍັງບໍ່ທັນໄດ້ຮັບການອະນຸມັດ", "error");
    </script>';
  }
  if(isset($_GET['form2'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ເລກທີຟອມເບີກນີ້ບໍ່ມີໃນລະບົບ", "info");
    </script>';
  }
  if(isset($_GET['serial-list'])=='same'){
    echo'<script type="text/javascript">
    swal("", "Serial Number ນີ້ມີຢູ່ໃນລາຍການແລ້ວ", "info");
    </script>';
  }
  if(isset($_GET['list'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ກະລຸນາເພີ່ມລາຍການກ່ອນ !", "info");
    </script>';
  }
?>


<script>
$(document).ready(function() {

    load_data();

    function load_data(query, page) {
        $.ajax({
            url: "fetch_distribute.php",
            method: "POST",
            data: {
                query: query,
                page: page
            },
            success: function(data) {
                $('#result').html(data);
            }
        });
    }
    $('#search').keyup(function() {
        var page = "0";
        var search = $(this).val();
        if (search != '') {
            load_data(search, page);
        } else {
            load_data('%%', page);
        }
    });
    $(document).on('click', '.page-links', function() {
        var page = this.id;
        console.log(page);
        var search = $('#search').val();
        if (search != '') {
            load_data(search, page);
        } else {
            load_data('%%', page);
        }
    });
});
</script>


<?php
    include ("../../header-footer/footer.php");
  ?>