<?php
  $title = "ນຳເຂົ້າສິນຄ້າ";
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
            <div class="modal fade" id="exampleModalemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <input type="text" placeholder="ລະຫັດສິນຄ້າ">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2"> 
                                        <label>Serial Number</label>
                                        <input type="text" class="form-control" placeholder="Serial Number">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2"> 
                                        <label>ຈຳນວນ</label>
                                        <input type="text" class="form-control" placeholder="ຈຳນວນ">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2"> 
                                        <label>ລາຄາ</label>
                                        <input type="text" class="form-control" placeholder="ລາຄາ">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2"> 
                                        <label>ເລກທີໃບສັ່ງຊື້ D.N.V</label>
                                        <input type="text" class="form-control" placeholder="ເລກທີໃບສັ່ງຊື້ D.N.V">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2"> 
                                        <label>ເລກທີບິນນຳເຂົ້າສິນຄ້າ</label>
                                        <input type="text" class="form-control" placeholder="ເລກທີບິນນຳເຂົ້າສິນຄ້າ">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12 col-sm-6 form-control2"> 
                                        <label>ໝາຍເຫດ</label>   
                                        <input type="text" name="pro_id"  placeholder="ໝາຍເຫດ" class="form-control">
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
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
                              <th style="width: 110px;" scope="col">ສິນຄ້າ</th>
                              <th style="width: 180px;" scope="col">ຊື່ສິນຄ້າ</th>
                              <th style="width: 180px;" scope="col">ລຸ້ນເຄື່ອງ</th>
                              <th style="width: 60px;" scope="col">ຈຳນວນ</th>
                              <th style="width: 60px;" scope="col">ລາຄາ</th>
                              <th style="width: 60px;" scope="col">ລວມ</th>
                              <th style="width: 75px;"></th>
                          </tr>
                          <tr>
                          <td>
                              <a href="../../image/logo.png" target="_blank">
                                <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                              </a>
                            </td>
                              <td>FUJI</td>
                              <td>2020</td>
                              <td> 
                                  99
                              </td>
                              <td> 
                                  10,000 ກີບ
                              </td>
                              <td> 
                                  990,000 ກີບ
                              </td>
                              <td>
                                  <a href="dellist.php" class="fa fa-trash toolcolor"></a>
                              </td>
                          </tr>
                      </table>
                      <hr size="3" align="center" width="100%">
                  </div>
                  <div align="right">
                      <div class="col-md-12 ">
                          ຍອມລວມ
                      </div>
                      <div class="col-md-12">
                          <br><h4 style="color: #CE3131;"> 990,000 ກີບ</h4> 
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
                                     <form action="#" id="formSave" method="POST">
                                         <div class="row">
                                             <div class="col-md-12">
                                                 ເລກທີບິນ: 1
                                             </div>
                                             <hr size="3" align="center" width="100%">
                                             <div class="col-md-12" align="center">
                                                    <button type="button" name="btnAdd" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal2">ບັນທຶກການນຳເຂົ້າ</button>
                                                    <div class="modal fade font14" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body" align="center">
                                                                    ທ່ານຕ້ອງການຈະບັນທຶກຂໍ້ມູນການຜະລິດນ້ຳດື່ມເຂົ້າໃນລະບົບ ຫຼື ບໍ່ ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                                                                    <button type="submit" name="btnSave" class="btn btn-outline-success">ບັນທຶກ</button>
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
  <?php
    include ("../../header-footer/footer.php");
  ?>