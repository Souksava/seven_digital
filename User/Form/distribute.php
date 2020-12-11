<?php
  $title = "ເບີກສິນຄ້າ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
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
                            <input type="text" name="remark" id="remark" class="form-control" placeholder="ໝາຍເຫດ">
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


<br>
<div style="width: 100%;">
    <b>ລາຍການ<?php echo $title ?></b>&nbsp <img src="<?php echo $path ?>icon/hidemenu.ico" width="10px">
</div>

<div class="container-fluid font12">
    <div class="row">
        <div class="col-md-7">
            <div class="table-responsive">
                <table class="table" style="width: 1000px;">
                    <tr>
                        <th style="width: 30px;">ສິນຄ້າ</th>
                        <th>ລະຫັດສິນຄ້າ</th>
                        <th>ຊື່ສິນຄ້າ</th>
                        <th>ລຸ້ນເຄື່ອງ</th>
                        <th>ຈຳນວນ</th>
                        <th style="width: 90px;">ຜູ້ສ້າງຟອມ</th>
                        <th>ເລກທີ</th>
                        <th style="width: 90px;">ລູກຄ້າ</th>
                        <th style="width: 100px;">ໝາຍເຫດ</th>
                        <th style="width: 90px;">ສະຖານະ</th>
                        <th style="width: 30px;"></th>
                    </tr>
                    <tr>
                        <td style="display:none;">../../image/logo.png</td>
                        <td scope="row"><img src="../../image/logo.png" alt="" style="width: 30px;heigt: 100px;"></td>
                        <td>12345678</td>
                        <td>SD5345SWD</td>
                        <td>FUJI</td>
                        <td>2020</td>
                        <td>9</td>
                        <td>2020</td>
                        <td>9</td>
                        <td>remarkabcd</td>
                        <td>9</td>
                        <td style="display:none;">11/12/2020</td>
                        <td style="display:none;">9:10:50</td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                                class="fa fa-plus toolcolor btnUpdate_dist"></a>&nbsp; &nbsp;
                        </td>
                    </tr>
                </table>
            </div>

            <div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <!-- pagination -->
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
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 align="center" class="card-title"></h5>
                    <p class="card-text">
                    <form action="#" id="formadd" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                ເລກທີບິນ: 1
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
                                                    <button type="submit" name="btnSave"
                                                        class="btn btn-outline-success">ບັນທຶກ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="table-responsive2" style="text-align: center;">
                            <table class="table font12" style="width: 700px">
                            <tr>
                        <th>ສິນຄ້າ</th>
                        <th>ລະຫັດສິນຄ້າ</th>
                        <th>ຊື່ສິນຄ້າ</th>
                        <th>ລຸ້ນເຄື່ອງ</th>
                        <th>ຈຳນວນ</th>
                        <th>ເລກທີ</th>
                        <th>ໝາຍເຫດ</th>
                        <th style="width: 30px;"></th>
                    </tr>
                    <tr>
                        <td style="display:none;">../../image/logo.png</td>
                        <td scope="row"><img src="../../image/logo.png" alt="" style="width: 30px;heigt: 100px;"></td>
                        <td>12345678</td>
                        <td>SD5345SWD</td>
                        <td>FUJI</td>
                        <td>2020</td>
                        <td>2020</td>
                        <td>remarkabcd</td>
                        <td style="display:none;">1</td>
                        <td>
                        <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                                class="fa fa-trash toolcolor btnDelete_dist"></a>&nbsp; &nbsp;
                        </td>
                    </tr>
                            </table>
                        </div>
                </div>
                <div class="col-md-12" align="right">
                    <br>
                    <h4 style="color: #CE3131;"> 99 ລາຍການ</h4>
                </div>

            </div>
            </form>
            </p>
        </div>
    </div>
</div>
</div>
</div>

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
                    <button type="submit" name="btnDelete" class="btn btn-outline-danger">ລົບ</button>
                </div>
            </div>
        </div>
    </div>
</form>


<!-- check form import input not null -->
<script type="text/javascript">
const myform = document.getElementById('formUpdate');
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