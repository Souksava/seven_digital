<?php
  $title = "ສ້າງຟອມ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>
    <div class="container font14">
        <div class="row">
             <div class="col-md-8">
                 <form action="make2.php" id="form1" method="POST">
                     <div class="input-group">        
                         <input type="text" name="pro_id" value="12345678" placeholder="ລະຫັດສິນຄ້າ" class="form-control" autofocus>
                         <input type="number" min="0" name="qty" placeholder="ຈຳນວນ" class="form-control">
                         <div class="input-group-prepend">
                             <button type="submit" name="btnAdd" class="btn btn-outline-primary">ເພີ່ມລາຍການ</button>
                         </div>
                     </div>
                 </form>
             </div>
        </div>
     </div><br>
     <div class="container-fluid font12">
         <div class="row">
                  <div class="col-md-8">
                    ລາຍການສິນຄ້າ
                  <div class="table-responsive">
                      <table class="table" style="width: 700px;">
                          <tr>
                              <th style="width: 110px;" scope="col">ສິນຄ້າ</th>
                              <th style="width: 180px;" scope="col">ຊື່ສິນຄ້າ</th>
                              <th style="width: 180px;" scope="col">ລຸ້ນເຄື່ອງ</th>
                              <th style="width: 60px;" scope="col">ຈຳນວນ</th>
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
                          <br><h4 style="color: #CE3131;"> 99 ລາຍການ</h4> 
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
                                                    <button type="button" name="btnAdd" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal2">ບັນທຶກຟອມເບີກ</button>
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