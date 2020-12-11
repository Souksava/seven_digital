<?php
  $title = "ສ້າງຟອມ";
  $path = "../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>
<div style="width: 100%;">
    <b><?php echo $title ?></b>&nbsp <img src="<?php echo $path ?>icon/hidemenu.ico" width="10px">
</div><br>
<div style="width: 46%; float: right;" align="right">
        <form action="employee.php" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalemp">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນພະນັກງານ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດພະນັກງານ</label>
                                      <input type="text" name="emp_id" id="emp_id"  placeholder="ລະຫັດພະນັກງານ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ພະນັກງານ</label>
                                      <input type="text" name="emp_name" id="emp_name"  placeholder="ຊື່ພະນັກງານ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ນາມສະກຸນ</label>
                                      <input type="text" name="emp_surname" id="emp_surname" placeholder="ນາມສະກຸນ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເພດ</label>
                                    <select name="gender" id="gender">
                                        <option value="">--- ເລືອກເພດ ---</option>
                                        <option value="ຍິງ">ຍິງ</option>
                                        <option value="ຊາຍ">ຊາຍ</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຕຳແໜ່ງ</label>
                                    <select name="auther_id" id="auther_id">
                                        <option value="">--- ເລືອກເລືອກຕຳແໜ່ງ ---</option>
                                        <option value="001">ໄອທີ</option>
                                        <option value="002">ຜູ້ຈັດການ</option>
                                        <option value="003">ບັນຊີ</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຢູ່ປັດຈຸບັນ</label>
                                      <textarea name="address" id="address" cols="3" rows="3" placeholder="ທີ່ຢູ່ປັດຈຸບັນ"></textarea>
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເບີໂທລະສັບ</label>
                                      <input type="text" name="tel" id="tel"  placeholder="ເບີໂທລະສັບ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຢູ່ອີເມວ</label>
                                      <input type="text" name="email" id="email"  placeholder="ທີ່ຢູ່ອີເມວ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດຜູ້ໃຊ້ລະບົບ</label>
                                      <input type="password" name="password" id="password"  placeholder="ລະຫັດຜູ້ໃຊ້ລະບົບ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຢືນຢັນລະຫັດ</label>
                                    <input type="password" name="password_cf" id="password_cf"  placeholder="ຢືນຢັນລະຫັດ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ສິດໃນການເຂົ້າໃຊ້ລະບົບ</label>
                                    <select name="status" id="status" >
                                      <option value="">--- ເລືອກສິດໃນການເຂົ້າໃຊ້ລະບົບ ---</option>
                                      <option value="0001">ຜູ້ເບີກສິນຄ້າ</option>
                                      <option value="0002">ຜູ້ອະນຸມັດ</option>
                                      <option value="0003">ຜູ້ເບີກຈ່າຍ</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຮູບພາບ</label>
                                      <input type="file" name="img_path" id="img_path" onchange="loadFile(event)">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <img src="../../image/camera.jpg" id="output" width="100%" height="250">
                                  </div>  
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                              <button type="submit" name="Save" id="Save" class="btn btn-outline-primary" onclick="">ບັນທຶກ</button>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
          
<div class="row">
    <div class="col-md-7">

        <div class="table-responsive" style="text-align: center;">
            <table class="table font12" style="width: 900px">
                <tr>
                    <th style="width: 50px">ສິນຄ້າ</th>
                    <th style="width: 150px">ລະຫັດສິນຄ້າ</th>
                    <th>ຊື່ສິນຄ້າ</th>
                    <th>ລຸ້ນເຄື່ອງຂອງສິນຄ້າ</th>
                    <th style="width: 50px">ຈຳນວນ</th>
                    <th style="width: 120px">ເງື່ອນໄຂການຜະລິດ</th>
                    <th style="width: 30px"></th>
                </tr>
                <tr>
                    <td style="display:none;">../../image/logo.png</td>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="../../image/product.png"
                                width="30px">
                        </a>
                    </td>
                    <td>12345678910234</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>1000</td>
                    <td>50</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                            class="fa fa-plus toolcolor btnUpdate_form"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="../../image/logo.png" target="_blank">
                            <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                        </a>
                    </td>
                    <td>12345678</td>
                    <td>FUJI</td>
                    <td>SF235SGW2</td>
                    <td>30</td>
                    <td>50</td>
                    <td>
                        <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp;
                    </td>
                </tr>
            </table>
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
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h5 align="center" class="card-title"></h5>
                <p class="card-text">
                <form action="form" id="form2" method="POST">
                    <div>
                        ເລກທີບິນ: 1
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-control2">
                                <br>
                                <select name="cus_id" id="cus_id" class="selectcenter">
                                    <option value="" disabled selected>--- ເລືອກລູກຄ້າ ---</option>
                                    <option value="a"> A</option>
                                    <option value="b"> B</option>
                                </select>
                                <i class="fas fa-check-circle "></i>
                                <i class="fas fa-exclamation-circle "></i>
                                <small class="">Error message</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-control2">
                                <br>
                                <input type="text" name="packing" id="packing" 
                                    placeholder="Packing No">
                                <i class="fas fa-check-circle "></i>
                                <i class="fas fa-exclamation-circle "></i>
                                <small class="">Error message</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <br>
                            <div align="center-right">
                                <button type="button" name="btnAdd" class="btn btn-outline-success btn-lg"
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
                                                ທ່ານຕ້ອງການຈະບັນທຶກຂໍ້ມູນຟອມເຂົ້າໃນລະບົບ ຫຼື ບໍ່ ?
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

                    <div class="table-responsive2" style="text-align: center;">
                        <table class="table font12" style="width: 700px">
                            <tr>
                                <th style="width: 50px">ສິນຄ້າ</th>
                                <th style="width: 150px">ລະຫັດສິນຄ້າ</th>
                                <th>ຊື່ສິນຄ້າ</th>
                                <th>ລຸ້ນເຄື່ອງຂອງສິນຄ້າ</th>
                                <th style="width: 50px">ຈຳນວນ</th>

                                <th style="width: 30px"></th>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                                        class="fa fa-trash toolcolor btnDelete_sup"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="formdetail" class="fa fa-trash toolcolor"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-md-12" align="right">
                        <br>
                        <h4 style="color: #CE3131;"> 99 ລາຍການ</h4>
                    </div>


                </form>
                </p>
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

<!-- modal form add -->
<form action="form" id="formUpdate" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນສ້າງຟອມ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" align="left">
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຮູບສິນຄ້າ</label>
                            <div class="col-md-12 col-sm-6 form-control2">
                                <img src="../../image/product.png" alt="../../image/product.png" id="output2"
                                    width="100%" height="250">
                            </div>
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຈຳນວນ</label>
                            <input type="number" min="1" name="qty" id="qty" placeholder="ຈຳນວນ">
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

<!-- check form input not null -->
<script type="text/javascript">
const myform = document.getElementById('formUpdate');
const qty = document.getElementById('qty');

myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const qtyValue = qty.value.trim();
    if (qtyValue === '') {
        setErrorFor(qty, 'ກະລຸນາປ້ອນຈຳນວນ');
    } else {
        setSuccessFor(qty);
    }
    if (qtyValue !== '') {
        document.getElementById("formUpdate").action = "form";
        document.getElementById("formUpdate").submit();
    }
}
const getform = document.getElementById('form2');
const cus_id = document.getElementById('cus_id');
const packing = document.getElementById('packing');
getform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs2();
});

function checkInputs2() {
    const cus_idValue = cus_id.value.trim();
    const packingValue = packing.value.trim();
    if (cus_idValue === '') {
        setErrorFor(cus_id, 'ກະລຸນາປ້ອນລູກຄ້າ');
    } else {
        setSuccessFor(cus_id);
    }
    if (packingValue === '') {
        setErrorFor(packing, 'ກະລຸນາປ້ອນ Packing No');
    } else {
        setSuccessFor(packing);
    }
    if (cus_idValue !== '' && packingValue !== '') {
        document.getElementById("form2").action = "form";
        document.getElementById("form2").submit();
    }
}
</script>

<!-- check form input not null -->
<script type="text/javascript">

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


<!-- /.content-wrapper -->
<br>
<?php
    include ("../../header-footer/footer.php");
  ?>