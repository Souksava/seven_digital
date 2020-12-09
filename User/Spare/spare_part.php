<?php
  $title = "ຂໍ້ມູນປ່ຽນອາໄຫຼ່";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>
<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b><?php echo $title ?></b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="unit.php" id="form1" method="POST" enctype="multipart/form-data">
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
                                    <label>ລະຫັດປ່ຽນອາໄຫຼ່</label>
                                    <input type="text" placeholder="ລະຫັດປ່ຽນອາໄຫຼ່">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດສິນຄ້າທີ່ຖອດອາໄຫຼ່</label>
                                    <input type="text" placeholder="ລະຫັດສິນຄ້າທີ່ຖອດອາໄຫຼ່">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>Serial Number ສິນຄ້າທີ່ຖອດອາໄຫຼ່</label>
                                    <input type="text" class="form-control" placeholder="Serial Number ສິນຄ້າທີ່ຖອດອາໄຫຼ່">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ອາໄຫຼ່</label>
                                    <input type="text" class="form-control" placeholder="ຊື່ອາໄຫຼ່">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດສິນຄ້າທີ່ເອົາອາໄຫຼ່ໄປໃສ່</label>
                                    <input type="text" class="form-control" placeholder="ລະຫັດສິນຄ້າທີ່ເອົາອາໄຫຼ່ໄປໃສ່">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ສິນຄ້າ</label>
                                    <input type="text" class="form-control" placeholder="ຊື່ສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>Serial Number ສິນຄ້າທີ່ເອົາອາໄຫຼ່ໄປໃສ່</label>
                                    <input type="text" class="form-control"
                                        placeholder="ໝາຍເລກ Serial Number ສິນຄ້າທີ່ເອົາອາໄຫຼ່ໄປໃສ່">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ໝາຍເຫດ</label>
                                    <input type="text" name="pro_id" placeholder="ໝາຍເຫດ" class="form-control">
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
                        <th style="width: 180px;" scope="col">ລະຫັດປ່ຽນອາໄຫຼ່</th>
                        <th style="width: 100px;" scope="col">ລະຫັດສິນຄ້າທີ່ຖອດອາໄຫຼ່</th>
                        <th style="width: 300px;" scope="col">Serial Number ຖອດ</th>
                        <th style="width: 100px;" scope="col">ຊື່ອາໄຫຼ່</th>
                        <th style="width: 75px;" scope="col">ລະຫັດສິນຄ້າ</th>
                        <th style="width: 75px;" scope="col">ຊື່ສິນຄ້າ</th>
                        <th style="width: 75px;" scope="col">Serial Number ໃສ່</th>
                        <th style="width: 75px;" scope="col">ໝາຍເຫດ</th>
                    </tr>
                    <tr>
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
                            <form action="#" id="formSave" method="POST">
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