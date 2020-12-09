<?php
  $title = "ເບີກສິນຄ້າ";
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
                <input type="number" min="0" name="qty" placeholder="ຈຳນວນ" class="form-control">
                <div class="input-group-prepend">
                    <button type="submit" name="btnAdd" class="btn btn-outline-primary">ເພີ່ມລາຍການ</button>
                </div>
            </div>
        </form>
    </div>
</div><br>

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
                            <a href="#" class="fa fa-trash toolcolor"></a>
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
                            <form action="export.php" id="form1" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        ເລກທີບິນ: 1
                                    </div>
                                    <div class="col-md-6" align="right">
                                         <p style="color: #CE3131;">ຍອມລວມ 9 ສິນຄ້າ</p>
                                    </div>
                                    <hr size="3" align="center" width="100%">
                                    <div class="col-md-12 form-control2">
                                        <label>ພະນັກງານເບີກສິນຄ້າ</label>
                                        <select name="emp_id" id="emp_id">
                                            <option value="">ເລືອກພະນັກງານ</option>
                                            <option value="">ທ້າວ A</option>
                                            <option value="">ທ້າວ B</option>
                                        </select>
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 form-control2">
                                        <label>ລະຫັດລູກຄ້າ</label>
                                        <select name="emp_id" id="emp_id">
                                            <option value="">ເລຶອກລູກຄ້າ</option>
                                            <option value="">ລູກຄ້າ A</option>
                                            <option value="">ລູກຄ້າ B</option>
                                        </select>
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
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
<?php
    include ("../../header-footer/footer.php");
  ?>