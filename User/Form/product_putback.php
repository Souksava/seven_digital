<?php
  $title = "ສິນຄ້າເບີກຈ່າຍແລ້ວນຳກັບເຂົ້າສາງຄືນ ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>
<div class="row">
    <div class="col-md-8">
        <form action="export.php" id="formadd" method="POST">
            <div class="input-group">
                <input type="text" name="pro_id" placeholder="ລະຫັດສິນຄ້າ" class="form-control" autofocus>
                <input type="text" min="0" name="qty" placeholder="Serial Number" class="form-control">
                <input type="text" name="cus_id" placeholder="ລະຫັດລູກຄ້າ" class="form-control">
                <input type="number" min="0" name="qty" placeholder="ຈຳນວນ" class="form-control">
                <div class="input-group-prepend">
                    <button type="submit" name="btnAdd" class="btn btn-outline-primary">ເພີ່ມລາຍການ</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br>

<div class="container-fluid font12">
    <div class="row">
        <div class="col-md-8">
            ລາຍການສິນຄ້ານຳກັບເຂົ້າສາງຄືນ
            <div class="table-responsive">
                <table class="table" style="width: 1100px;">
                    <tr>
                        <th style="width: 110px;" scope="col">ລະຫັດສິນຄ້າ</th>
                        <th style="width: 110px;" scope="col">Serial Number</th>
                        <th style="width: 50px;" scope="col">ຈຳນວນ</th>
                        <th style="width: 80px;" scope="col">ຊື່ລູກຄ້າ</th>
                        <th style="width: 80px;" scope="col">ເລກທີຟອມເບີກ</th>
                        <th style="width: 150px;" scope="col">ໝາຍເຫດ</th>

                        <th style="width: 75px;"></th>
                    </tr>
                    <tr>
                        <td>12345678</td>
                        <td>12345678</td>
                        <td>50</td>
                        <td>0001</td>
                        <td>0001</td>
                        <td style="display:none;">9/10/2020</td>
                        <td style="display:none;">9:10:50</td>
                        <td>ດເ່ຫ້ກດສາເ້ຫສາກດເາ່</td>

                        <td>
                            <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                                class="fa fa-trash toolcolor btnDelete_sup"></a>&nbsp; &nbsp;
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
                            <form action="export.php" id="form1" method="POST">
                                <div class="row">
  
                                    <div class="col-md-12" align="right">
                                         <p style="color: #CE3131;">ຍອມລວມ 9 ສິນຄ້າ</p>
                                    </div>
                                    <hr size="3" align="center" width="100%">


                                    <div class="col-md-12" align="center">
                                        <button type="button" name="btnAdd" class="btn btn-outline-success"
                                            data-toggle="modal"
                                            data-target="#exampleModal2">ບັນທຶກຟອມນຳກັບເຂົ້າສາງຄືນ</button>
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
                                                        ທ່ານຕ້ອງການຈະບັນທຶກຂໍ້ມູນການນຳສິນຄ້າກັບເຂົ້າສາງຄືນເຂົ້າໃນລະບົບ
                                                        ຫຼື ບໍ່ ?

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