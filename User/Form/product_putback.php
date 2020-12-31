<?php
  $title = "ສິນຄ້າເບີກຈ່າຍແລ້ວນຳກັບເຂົ້າສາງຄືນ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>
<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b>ລາຍການ</b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="product-putback" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalemp">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ຂໍ້ມູນນຳສິນຄ້າກັບເຂົ້າສາງຄືນ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດສິນຄ້າ</label>
                                    <input type="hidden" name="add_putback" id="add_putback">
                                    <input type="text" name="code" id="code" class="form-control"
                                        placeholder="ລະຫັດສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>Serial Number</label>
                                    <input type="text" name="serial" id="serial" class="form-control"
                                        placeholder="Serial Number">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຈຳນວນ</label>
                                    <input type="number" min="0" name="qty" id="qty" class="form-control" placeholder="ຈຳນວນ">
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
                                    <input type="text" name="remark" id="remark" placeholder="ໝາຍເຫດ"
                                        class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-dismiss="modal">ຍົກເລີກ</button>
                            <button type="submit" name="btnSave" class="btn btn-outline-primary">ບັນທຶກ</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="clearfix"></div>
<br>
<div class="container-fluid font12">
    <div class="row">
        <div class="col-md-8">
        <?php
            $obj->select_putback();
            if(isset($_COOKIE['putback'])){
        ?>
            <div class="table-responsive">
                <table class="table" style="width: 1100px;">
                    <tr>
                        <th style="width: 150px;" scope="col">ສິນຄ້າ</th>
                        <th style="width: 150px;" scope="col">ລະຫັດສິນຄ້າ</th>
                        <th style="width: 150px;" scope="col">ຊື່ສິນຄ້າ</th>
                        <th style="width: 150px;" scope="col">Serial Number</th>
                        <th style="width: 80px;" scope="col">ຈຳນວນ</th>
                        <th style="width: 120px;" scope="col">ເລກທີຟອມເບີກ</th>
                        <th style="width: 120px;" scope="col">ລູກຄ້າ</th>
                        <th style="width: 100px;" scope="col">ໝາຍເຫດ</th>
                        <th style="width: 75px;"><a href="#" data-toggle="modal" data-target="#exampleModalClear" class="clear">ລ້າງ</a></th>
                    </tr>
                    <?php
                        foreach($cart_data as $row){
                    ?>
                    <tr>
                        <td style="display:none"><?php echo $row['serial'] ?></td>
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
                        <td><?php echo $row['qty'] ?> <?php echo $row['unit_name'] ?></td>
                        <td><?php echo $row['form_id'] ?></td>
                        <td><?php echo $row['company'] ?></td>
                        <td><?php echo $row['remark'] ?></td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                                class="fa fa-trash toolcolor btnDelete_pps"></a>&nbsp; &nbsp;
                        </td>
                        <?php
                        }
                        ?>
                    </tr>
                </table>
                <hr size="3" align="center" width="1100px;">
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
        <div class="col-lg-3 font12">
            <div class="row row-cols-1 row-cols-md-1">
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 align="center" class="card-title"></h5>
                            <p class="card-text">
                                <form action="product-putback" id="formSave" method="POST">
                                    <div class="row">

                                        <div class="col-md-12" align="center">

                                            <button type="button" name="btnAdd" class="btn btn-outline-success"
                                                data-toggle="modal" data-target="#exampleModal2">ບັນທຶກ</button>
                                            <div class="modal fade font14" id="exampleModal2" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" align="center">
                                                            ທ່ານຕ້ອງການຈະບັນທຶກຂໍ້ມູນການນຳສິນຄ້າກັບເຂົ້າສາງຄືນເຂົ້າໃນລະບົບ
                                                            ຫຼື ບໍ່ ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-secondary"
                                                                data-dismiss="modal">ຍົກເລີກ</button>
                                                            <button type="submit" name="btnSave_putback"
                                                                class="btn btn-outline-success">ບັນທຶກ</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.content-wrapper -->
<br>
<form action="product-putback" id="formClear" method="POST" enctype="multipart/form-data">
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
                    <button type="submit" name="clear_putback" class="btn btn-outline-danger">ລ້າງລາຍການ</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- modal form delete -->
<form action="product-putback" id="formDelete" method="POST" enctype="multipart/form-data">
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
                    <button type="submit" name="btnDelete_putback" class="btn btn-outline-danger">ລົບ</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- check form input not null -->
<script type="text/javascript">
const myform = document.getElementById('form1');
const add_putback = document.getElementById('add_putback');
const code = document.getElementById('code');
const serial = document.getElementById('serial');
const qty = document.getElementById('qty');
const form_id = document.getElementById('form_id');

myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const add_putbackValue = add_putback.value.trim();
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
        setErrorFor(qty, 'ກະລຸນາຈຳນວນ');
    } else {
        setSuccessFor(qty);
    }
    if (form_idValue === '') {
        setErrorFor(form_id, 'ກະລຸນາປ້ອນເລກທີຟອມເບີກ');
    } else {
        setSuccessFor(form_id);
    }
    if (codeValue !== '' && serialValue !== '' && qtyValue !== '' && form_idValue !== '') {
        document.getElementById("form1").action = "product-putback";
        document.getElementById("form1").submit();
    }
}
$('.btnDelete_pps').on('click', function() {
        $('#exampleModalDelete').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        console.log(data);
        $('#id').val(data[0]);
    });
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
  if(isset($_GET['code-serial-form'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ລະຫັດສິນຄ້າ ແລະ ໝາຍເລກ Serial Number ບໍ່ມີໃນການເບີກຈ່າຍສິນຄ້າ", "info");
    </script>';
  }
  if(isset($_GET['code-serial-form2'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ລະຫັດສິນຄ້າ, ໝາຍເລກ Serial Number ແລະ ເລກທີຟອມເບີກບໍ່ຕົງກັນ", "info");
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
<?php
    include ("../../header-footer/footer.php");
  ?>