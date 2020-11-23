<?php
  $title = "ຂໍ້ມູນພະນັກງານ";
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
                                      <input type="text" name="emp_id" id="emp_id" class="form-control" placeholder="ລະຫັດພະນັກງານ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ພະນັກງານ</label>
                                      <input type="text" name="emp_name" id="emp_name" class="form-control"  placeholder="ຊື່ພະນັກງານ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ນາມສະກຸນ</label>
                                      <input type="text" name="emp_surname" id="emp_surname" class="form-control" placeholder="ນາມສະກຸນ">
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
                                      <textarea name="address" id="address" class="form-control" cols="3" rows="3" placeholder="ທີ່ຢູ່ປັດຈຸບັນ"></textarea>
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເບີໂທລະສັບ</label>
                                      <input type="text" name="tel" id="tel" class="form-control" placeholder="ເບີໂທລະສັບ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຢູ່ອີເມວ</label>
                                      <input type="text" name="email" id="email" class="form-control" placeholder="ທີ່ຢູ່ອີເມວ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດຜູ້ໃຊ້ລະບົບ</label>
                                      <input type="password" name="password" id="password" class="form-control" placeholder="ລະຫັດຜູ້ໃຊ້ລະບົບ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຢືນຢັນລະຫັດ</label>
                                    <input type="password" name="password_cf" id="password_cf" class="form-control" placeholder="ຢືນຢັນລະຫັດ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ສິດໃນການເຂົ້າໃຊ້ລະບົບ</label>
                                    <select name="auther_id" id="auther_id" >
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
                                      <input type="file" name="img_path" id="img_path" >
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
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
          <form action="employee.php" id="formUpdate" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModalUpdate_emp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນພະນັກງານ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ພະນັກງານ</label>
                                      <input type="hidden" name="emp_id2" id="emp_id2" placeholder="ລະຫັດພະນັກງານ">
                                      <input type="text" name="emp_name2" id="emp_name2" placeholder="ຊື່ພະນັກງານ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ນາມສະກຸນ</label>
                                      <input type="text" name="emp_surname2" id="emp_surname2" placeholder="ນາມສະກຸນ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເພດ</label>
                                    <select name="gender2" id="gender2">
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
                                    <select name="auther_id2" id="auther_id2">
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
                                      <textarea name="address2" id="address2" cols="3" rows="3" placeholder="ທີ່ຢູ່ປັດຈຸບັນ"></textarea>
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເບີໂທລະສັບ</label>
                                      <input type="text" name="tel2" id="tel2" placeholder="ເບີໂທລະສັບ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຢູ່ອີເມວ</label>
                                      <input type="text" name="email2" id="email2" placeholder="ທີ່ຢູ່ອີເມວ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດຜູ້ໃຊ້ລະບົບ</label>
                                      <input type="password" name="password2" id="password2" placeholder="ລະຫັດຜູ້ໃຊ້ລະບົບ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຢືນຢັນລະຫັດ</label>
                                    <input type="password" name="password_cf2" id="password_cf2" placeholder="ຢືນຢັນລະຫັດ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ສິດໃນການເຂົ້າໃຊ້ລະບົບ</label>
                                    <select name="status2" id="status2" >
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
                                      <input type="file" name="img_path2" id="img_path2">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                              <button type="submit" name="btnUpdate" id="Update" class="btn btn-outline-success" onclick="">ແກ້ໄຂ</button>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
        </div>
    </div>
    <div class="clearfix"></div><br>
    <div class="table-responsive">
      <table class="table font12" style="width: 1500px;">
        <tr>
            <th>ລະຫັດ</th>
            <th>ຊື່ພະນັກງານ</th>
            <th>ນາມສະກຸນ</th>
            <th>ເພດ</th>
            <th>ເບີໂທລະສັບ</th>
            <th>ທີ່ຢູ່ປັດຈຸບັນ</th>
            <th>ຕຳແໜ່ງ</th>
            <th>ທີ່ຢູ່ອີເມວ</th>
            <th>ລະຫັດຜູ້ໃຊ້ລະບົບ</th>
            <th>ສິດຂົ້າໃຊ້ລະບົບ</th>
            <th>ຮູບພາບ</th>
            <th></th>

        </tr>
        <tr>
            <td>E001</td>
            <td>ສຸກສະຫວັດ</td>
            <td>ພົງພະໂຍສິດ</td>
            <td>ຊາຍ</td>
            <td>+856 20 5509 9269</td>
            <td>ບ້ານ ດົງປ່າແລບ ເມືອງ ຈັນທະບູລີ ນະຄອນຫຼວງວຽງຈັນ</td>
            <td style="display:none;">001</td>
            <td>ໄອທີ</td>
            <td>Souksavath@sevendigital.com</td>
            <td>D23dSDf24f23fsnfls</td>
            <td style="display:none;">0001</td>
            <td>ຜູ້ເບີກສິນຄ້າ</td>
            <td>
     
                    <a href="../../image/image.jpeg" target="_blank">
                      <img src="../../image/image.jpeg" class="img-circle elevation-2" alt="" width="30px">
                    </a>
    
            </td>
            <td>
              <a href="#" data-toggle="modal" data-target="#exampleModalUpdate_emp" class="fa fa-pen toolcolor btnUpdate_emp"></a>&nbsp; &nbsp; 
              <a href="delEmp.php" class="fa fa-trash toolcolor"></a>
            </td>
        </tr>
      </table>
    </div>
  </div>

 
 <?php
    include ("../../header-footer/footer.php");
  ?>