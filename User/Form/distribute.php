<?php
  $title = "ເບີກສິນຄ້າ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>
<div class="row">
<div class="col-md-12">
<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b><?php echo $title ?></b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="distribute" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalemp">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ນຳເຂົ້າສິນຄ້າ</h5>
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
</div>
</div>


<br>

<div class="container-fluid font12">
    <div class="row">
        <div class="col-md-8">
            ລາຍການສິນຄ້າ
            <div class="table-responsive">
                <table class="table" style="width: 1100px;">
                    <tr>
                        <th style="width: 110px;" scope="col">ສິນຄ້າ</th>
                        <th style="width: 110px;" scope="col">ລະຫັດສິນຄ້າ</th>
                        <th style="width: 110px;" scope="col">Serial Number</th>
                        <th style="width: 180px;" scope="col">ຊື່ສິນຄ້າ</th>
                        <th style="width: 180px;" scope="col">ລຸ້ນເຄື່ອງ</th>
                        <th style="width: 80px;" scope="col">ຈຳນວນ</th>
                        <th style="width: 75px;"></th>
                    </tr>
                    <tr>
                        <td scope="row"><img src="../../image/logo.png" alt="" style="width: 100px;heigt: 100px;"></td>
                        <td>12345678</td>
                        <td>SD5345SWD</td>
                        <td>FUJI</td>
                        <td>2020</td>
                        <td>9</td>
                        <td>
                        <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                                class="fa fa-trash toolcolor btnDelete_sup"></a>&nbsp; &nbsp;
                        </td>
                    </tr>
                </table>
                <hr size="3" align="center" width="100%">
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

        <div class="col-lg-3 font12">
            <div class="row row-cols-1 row-cols-md-1">
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 align="center" class="card-title"></h5>
                            <p class="card-text">
                            <form action="distribute" id="form1" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                    ຍອມລວມ
                                    </div>
                                    <div class="col-md-6" align="right">
                                         <h4 style="color: #CE3131;"> 9 ສິນຄ້າ</h4>
                                    </div>
                                    <div class="col-md-12" align="center">
                                        <button type="button" name="btnAdd" class="btn btn-outline-success"
                                            data-toggle="modal"
                                            data-target="#exampleModal2">ດຳເນີນການເບີກສິນຄ້າ</button>
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
                                                        ທ່ານຕ້ອງການດຳເນີນການເບີກສິນຄ້າ ຫຼື ບໍ່ ?

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-dismiss="modal">ຍົກເລີກ</button>
                                                        <button type="submit" name="btnSave"
                                                            class="btn btn-outline-success">ດຳເນີນການ</button>
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

<!-- modal form delete -->
<form action="form" id="formDelete" method="POST" enctype="multipart/form-data">
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
        const myform = document.getElementById('form1');
        const code = document.getElementById('code');
        const serial = document.getElementById('serial');
        const qty = document.getElementById('qty');
        const form_id = document.getElementById('form_id');
        myform.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputs();
        });
        function checkInputs(){
          const codeValue = code.value.trim();
          const serialValue = serial.value.trim();
          const qtyValue = qty.value.trim();
          const form_idValue = form_id.value.trim();
          if(codeValue === ''){
            setErrorFor(code, 'ກະລຸນາປ້ອນລະຫັດສິນຄ້າ');
          }
          else{
            setSuccessFor(code);
          }
          if(serialValue === ''){
            setErrorFor(serial, 'ກະລຸນາປ້ອນໝາຍເລກ Serial Number');
          }
          else{
            setSuccessFor(serial);
          }
          if(qtyValue === ''){
            setErrorFor(qty, 'ກະລຸນາປ້ອນຈຳນວນ');
          }
          else{
            setSuccessFor(qty);
          }
          if(form_idValue === ''){
            setErrorFor(form_id, 'ກະລຸນາປ້ອນເລກທີຟອມເບີກ');
          }
          else{
            setSuccessFor(form_id);
          }        
          if(codeValue !== '' && serial !=='' && serialValue !== '' && qtyValue !== '' && form_idValue !== '' ){
            document.getElementById("form1").action = "distribute";
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
    swal("", "ລົບຂໍ້ຂໍ້ມູນບໍ່ສຳເລັດ", "error");
    </script>';
  }
  if(isset($_GET['del2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ລົບຂໍ້ຂໍ້ມູນສຳເລັດ", "success");
    </script>';
  }
?>





<?php
    include ("../../header-footer/footer.php");
  ?>