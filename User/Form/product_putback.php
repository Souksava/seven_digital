<?php
  $title = "ສິນຄ້າເບີກຈ່າຍແລ້ວນຳກັບເຂົ້າສາງຄືນ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>
<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b>ລາຍການສິນຄ້ານຳກັບເຂົ້າສາງຄືນ</b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
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
                                    <input type="text" name="code" id="code" class="form-control" placeholder="ລະຫັດສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>Serial Number</label>
                                    <input type="text" name="serial" id="serial" class="form-control" placeholder="Serial Number">
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
                                    <input type="text" name="form_id" id="form_id" class="form-control" placeholder="ເລກທີຟອມເບີກ">
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
<div class="clearfix"></div><br>
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
<br>
<div class="container-fluid font12">
    <div class="row">
        <div class="col-md-8">
            ລາຍການສິນຄ້າ
            <div class="table-responsive">
                <table class="table" style="width: 1100px;">
                    <tr>
                        <th style="width: 150px;" scope="col">ລະຫັດສິນຄ້າ</th>
                        <th style="width: 150px;" scope="col">ຊື່ສິນຄ້າ</th>
                        <th style="width: 150px;" scope="col">Serial Number</th>
                        <th style="width: 80px;" scope="col">ຈຳນວນ</th>
                        <th style="width: 80px;" scope="col">ເລກທີຟອມເບີກ</th>
                        <th style="width: 75px;" scope="col">ໝາຍເຫດ</th>
                        <th style="width: 50px;" scope="col"></th>
                    </tr>
                    <tr>
                    <td style="display:none">1</td>
                        <td>2525252525</td>
                        <td>2625125152</td>
                        <td>50</td>
                        <td>200</td>
                        <td>001</td>
                        <td>sfklglskfdglksdfgsdfg</td>
                        <td style="display:none">12/09/2020</td>
                        <td style="display:none">12:10:50</td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                                class="fa fa-trash toolcolor btnDelete_pps"></a>&nbsp; &nbsp;
                        </td>
                    </tr>
                </table>
                <hr size="3" align="center" width="100%">
            </div>
            <!-- pagination -->
            <br>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><button class="page-link" href="#">ກັບຄືນ</button></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><button class="page-link" href="#">ຕໍ່ໄປ</button></li>
                </ul>
            </nav>

        </div>
        <div class="col-lg-3 font12">
            <div class="row row-cols-1 row-cols-md-1">
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 align="center" class="card-title"></h5>
                            <p class="card-text">
                            <form action="#" id="formSave" method="POST">
                                <div class="row">
                                <div class="col-md-12 form-control2">
                                        <label>ລູກຄ້າ</label>
                                        <select name="sup_id" id="sup_id" class="selectcenter">
                                            <option value="" disabled selected>--- ລູກຄ້າ ---</option>
                                            <option value="a">ສາງ A</option>
                                            <option value="a">ສາງ B</option>
                                        </select>
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12" align="center">
                                    
                                        <button type="button" name="btnAdd" class="btn btn-outline-success"
                                            data-toggle="modal"
                                            data-target="#exampleModal2">ບັນທຶກການນຳສິນຄ້າກັບເຂົ້າສາງຄືນ</button>
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
                                                        ທ່ານຕ້ອງການຈະບັນທຶກຂໍ້ມູນການນຳສິນຄ້າກັບເຂົ້າສາງຄືນເຂົ້າໃນລະບົບ ຫຼື ບໍ່ ?
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
const serial = document.getElementById('serial');
const qty = document.getElementById('qty');
const form_id = document.getElementById('form_id');

myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
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
        setSuccessFor(serialout);
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
    if (codeValue !== '' && serialValue !== '' && qtyValue !== '' && form_idValue !== '' && form_idValue !== '') {
        document.getElementById("form1").action = "product-putback";
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