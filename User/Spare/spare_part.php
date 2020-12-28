<?php
  $title = "ຂໍ້ມູນປ່ຽນອາໄຫຼ່";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>

<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b>ລາຍການປ່ຽນອາໄຫຼ່</b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="spare-part" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalemp">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ຂໍ້ມູນປ່ຽນອາໄຫຼ່</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດເຄື່ອງຖອດອາໄຫຼ່</label>
                                    <input type="hidden" name="add_spare" id="add_spare">
                                    <input type="text" name="code" id="code" class="form-control" placeholder="ລະຫັດເຄື່ອງຖອດອາໄຫຼ່">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>Serial Number ເຄື່ອງຖອດ</label>
                                    <input type="text" name="serialout" id="serialout" class="form-control" placeholder="Serial Number">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ອາໄຫຼ່</label>
                                    <input type="text" name="spare_part" id="spare_part" class="form-control" placeholder="ຊື່ອາໄຫຼ່">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດເຄື່ອງປ່ຽນ</label>
                                    <input type="text" name="pro_id" id="pro_id" class="form-control" placeholder="ລະຫັດເຄື່ອງປ່ຽນ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>Serial Number ເຄື່ອງປ່ຽນ</label>
                                    <input type="text" name="serialin" id="serialin" class="form-control" placeholder="Serial Number">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ໝາຍເຫດ</label>
                                    <input type="text" name="remark" id="remark" placeholder="ໝາຍເຫດ" class="form-control">
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
<div class="container-fluid font12">
    <div class="row">
        <div class="col-md-8">
        <?php
        $obj->select_spare_part();
        if(isset($_COOKIE['spare_parts'])){
        ?>
         <div class="table-responsive">
                <table class="table" style="width: 1450px;">
                    <tr>
                        <th style="width: 180px;" scope="col">ລະຫັດເຄື່ອງຖອດອາໄຫຼ່</th>
                        <th style="width: 200px;" scope="col">ຊື່ສິນຄ້າເຄື່ອງຖອດອາໄຫຼ່</th>
                        <th style="width: 180px;" scope="col">Serial Number ເຄື່ອງຖອດ</th>
                        <th style="width: 120px;" scope="col">ຊື່ອາໄຫຼ່</th>
                        <th style="width: 100px;" scope="col">ລະຫັດເຄື່ອງປ່ຽນ</th>
                        <th style="width: 100px;" scope="col">ຊື່ສິນຄ້າເຄື່ອງປ່ຽນ</th>
                        <th style="width: 180px;" scope="col">Serial Number ເຄື່ອງປ່ຽນ</th>
                        <th style="width: 100px;" scope="col">ໝາຍເຫດ</th>
                        <th style="width: 75px;"><a href="#" data-toggle="modal" data-target="#exampleModalClear" class="clear">ລ້າງ</a></th>
                    </tr>
                    <?php
                        foreach($cart_data as $row){
                    ?>
                    <tr>
                        <td style="display:none"><?php echo $row['id']?></td>
                        <td><?php echo $row['code']; ?></td>
                        <td>
                        <?php echo $row['cate_name']; ?><?php echo $row['brand_name']; ?> <br>
                        <?php echo $row['name']; ?>
                        </td>
                        <td><?php echo $row['serial']; ?></td>
                        <td><?php echo $row['spare']; ?></td>
                        <td><?php echo $row['code2']; ?></td>
                        <td>
                        <?php echo $row['cate_name']; ?> <?php echo $row['brand_name']; ?><br>
                        <?php echo $row['name2']; ?>
                        </td>
                        <td><?php echo $row['serial2']; ?></td>
                        <td><?php echo $row['remark']; ?></td>
                        
                        <td style="text-align: center;">
                            <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                                class="fa fa-trash toolcolor btnDelete_sp"></a>&nbsp; &nbsp;
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
                <hr size="3" align="center" width="1450px">
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
                            <form action="spare-part" id="formSave" method="POST">
                                <div class="row">
                                    <div class="col-md-12" align="center">
                                        <button type="button" name="btnAdd" class="btn btn-outline-success"
                                            data-toggle="modal"
                                            data-target="#exampleModal2">ບັນທຶກການປ່ຽນອາໄຫຼ່</button>
                                        <div class="modal fade font14" id="exampleModal2" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        ທ່ານຕ້ອງການຈະບັນທຶກຂໍ້ມູນການປ່ຽນອາໄຫຼ່ເຂົ້າໃນລະບົບ ຫຼື ບໍ່ ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-dismiss="modal">ຍົກເລີກ</button>
                                                        <button type="submit" name="btnSave_spare"
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

<!-- modal form delete -->
<form action="spare-part" id="formDelete" method="POST" enctype="multipart/form-data">
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
                    <button type="submit" name="btnDelete_spare" class="btn btn-outline-danger">ລົບ</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form action="spare-part" id="formClear" method="POST" enctype="multipart/form-data">
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
                    <button type="submit" name="clear_spare" class="btn btn-outline-danger">ລ້າງລາຍການ</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- check form input not null -->
<script type="text/javascript">
const myform = document.getElementById('form1');
const add_spare = document.getElementById('add_spare');
const code = document.getElementById('code');
const serialout = document.getElementById('serialout');
const spare_part = document.getElementById('spare_part');
const pro_id = document.getElementById('pro_id');
const serialin = document.getElementById('serialin');

myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const add_spareValue = add_spare.value.trim();
    const codeValue = code.value.trim();
    const serialoutValue = serialout.value.trim();
    const spare_partValue = spare_part.value.trim();
    const pro_idValue = pro_id.value.trim();
    const serialinValue = serialin.value.trim();
    if (codeValue === '') {
        setErrorFor(code, 'ກະລຸນາປ້ອນລະຫັດສິນຄ້າທີ່ຖອດອາໄຫຼ່');
    } else {
        setSuccessFor(code);
    }
    if (serialoutValue === '') {
        setErrorFor(serialout, 'ກະລຸນາປ້ອນໝາຍເລກ Serial Number ສິນຄ້າທີ່ຖອດອາໄຫຼ່');
    } else {
        setSuccessFor(serialout);
    }
    if (spare_partValue === '') {
        setErrorFor(spare_part, 'ກະລຸນາປ້ອນຊື່ອາໄຫຼ່');
    } else {
        setSuccessFor(spare_part);
    }
    if (pro_idValue === '') {
        setErrorFor(pro_id, 'ກະລຸນາປ້ອນລະຫັດສິນຄ້າທີ່ເອົາອາໄຫຼ່ໄປໃສ່');
    } else {
        setSuccessFor(pro_id);
    }
    if (serialinValue === '') {
        setErrorFor(serialin, 'ກະລຸນາປ້ອນໝາຍເລກ Serial Number ສິນຄ້າທີ່ເອົາອາໄຫຼ່ໄປໃສ່');
    } else {
        setSuccessFor(serialin);
    }
    if (codeValue !== '' && serialoutValue !== '' && spare_partValue !== '' && pro_idValue !== '' && serialinValue !== '') {
        document.getElementById("form1").action = "spare-part";
        document.getElementById("form1").submit();
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
    swal("", "ລະຫັດສິນຄ້າ ແລະ ໝາຍເລກ Serial ເຄື່ອງຖອດອາໄຫຼ່ ບໍ່ມີໃນລະບົບ !", "info");
    </script>';
  }
  if(isset($_GET['code2'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ລະຫັດສິນຄ້າເຄື່ອງປ່ຽນອາໄຫຼ່ບໍ່ມີໃນລະບົບ !", "info");
    </script>';
  }
  if(isset($_GET['code-serial2'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ລະຫັດສິນຄ້າ ແລະ ໝາຍເລກ Serial ເຄື່ອງປ່ຽນອາໄຫຼ່ ບໍ່ມີໃນລະບົບ !", "info");
    </script>';
  }
  if(isset($_GET['qty'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ລະຫັດສິນຄ້າ ແລະ ໝາຍເລກ Serial ເຄື່ອງຖອດອາໄຫຼ່ບໍ່ມີໃນສະຕ໋ອກ !", "info");
    </script>';
  }
  if(isset($_GET['qty2'])=='null'){
    echo'<script type="text/javascript">
    swal("", "ລະຫັດສິນຄ້າ ແລະ ໝາຍເລກ Serial ເຄື່ອງປ່ຽນອາໄຫຼ່ບໍ່ມີໃນສະຕ໋ອກ !", "info");
    </script>';
  }
  if(isset($_GET['code-in'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມລາຍການໄດ້ເນື່ອງຈາກລະຫັດສິນຄ້າເຄື່ອງຖອດ ແລະ ເຄື່ອງປ່ຽນອາໄຫຼ່ແມ່ນລະຫັດດຽວກັນ !", "error");
    </script>';
  }
?>
<?php
    include ("../../header-footer/footer.php");
  ?>