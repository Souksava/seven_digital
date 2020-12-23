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
<!-- <form action="make2.php" id="form1" method="POST">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"> 
                <label>ລະຫັດສິນຄ້າ</label>
                <input type="text" class="form-control" placeholder="ລະຫັດສິນຄ້າ"><br>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"> 
                <label>Serial Number</label>
                <input type="text" class="form-control" placeholder="Serial Number"><br>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"> 
                <label>ຈຳນວນ</label>
                <input type="text" class="form-control" placeholder="ຈຳນວນ"><br>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"> 
                <label>ລາຄາ</label>
                <input type="text" class="form-control" placeholder="ລາຄາ"><br>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"> 
                <label>ເລກທີໃບສັ່ງຊື້ D.N.V</label>
                <input type="text" class="form-control" placeholder="ເລກທີໃບສັ່ງຊື້ D.N.V"><br>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"> 
                <label>ເລກທີບິນນຳເຂົ້າສິນຄ້າ</label>
                <input type="text" class="form-control" placeholder="ເລກທີບິນນຳເຂົ້າສິນຄ້າ"><br>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"> 
                <label>ໝາຍເຫດ</label>
                <div class="input-group">        
                    <input type="text" name="pro_id"  placeholder="ໝາຍເຫດ" class="form-control">
                    <div class="input-group-prepend">
                        <button type="submit" name="btnAdd" class="btn btn-outline-primary">ເພີ່ມລາຍການ</button>
                    </div>
                </div>
            </div>
        </div>
    </form> -->

<div class="container-fluid font12">
    <div class="row">
        <div class="col-md-8">
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
                        <th style="width: 100px; text-align: center">ລ້າງລາຍການ</th>
                    </tr>
                    <tr>
                        <td style="display:none">1</td>
                        <td>2525252525</td>
                        <td>2625125152</td>
                        <td>50</td>
                        <td>sfklglskfdglksdfgsdfg</td>
                        <td>sfklglskfdglksdfgsdfg</td>
                        <td>sfklglskfdglksdfgsdfg</td>
                        <td>sfklglskfdglksdfgsdfg</td>
                        <td>sfklglskfdglksdfgsdfg</td>
                        <td style="display:none">12/09/2020</td>
                        <td style="display:none">12:10:50</td>
                        
                        <td style="text-align: center;">
                            <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                                class="fa fa-trash toolcolor btnDelete_sp"></a>&nbsp; &nbsp;
                        </td>
                    </tr>
                </table>
                <hr size="3" align="center" width="100%">
            </div>
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
                                                        <button type="submit" name="btnSave"
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
                    <button type="submit" name="btnDelete" class="btn btn-outline-danger">ລົບ</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- check form input not null -->
<script type="text/javascript">
const myform = document.getElementById('form1');
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
  // check delete
  if(isset($_GET['del'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ລົບຂໍ້ມູນບໍ່ສຳເລັດ", "error");
    </script>';
  }
  if(isset($_GET['del2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ລົບຂໍ້ມູນສຳເລັດ", "success");
    </script>';
  }
?>
<?php
    include ("../../header-footer/footer.php");
  ?>