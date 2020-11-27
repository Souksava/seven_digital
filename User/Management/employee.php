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

          <form action="employee.php" id="formUpdate" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <textarea name="address2" id="address2" cols="3" rows="3"
                                        placeholder="ທີ່ຢູ່ປັດຈຸບັນ"></textarea>
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
                                    <input type="password" name="password2" id="password2"
                                        placeholder="ລະຫັດຜູ້ໃຊ້ລະບົບ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຢືນຢັນລະຫັດ</label>
                                    <input type="password" name="password_cf2" id="password_cf2"
                                        placeholder="ຢືນຢັນລະຫັດ">
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
                                    <input type="file" name="img_path2" id="img_path2" onchange="loadFile2(event)">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <img src="../../image/camera.jpg" id="output2" width="100%" height="250">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-dismiss="modal">ຍົກເລີກ</button>
                            <button type="submit" name="btnUpdate" id="Update" class="btn btn-outline-success"
                                onclick="">ແກ້ໄຂ</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="employee.php" id="formDelete" method="POST" enctype="multipart/form-data">
      <div class="modal fade" id="exampleModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <td style="display:none;">../../image/logo.png</td>
            <td>

                <a href="../../image/image.jpeg" target="_blank">
                    <img src="../../image/image.jpeg" class="img-circle elevation-2" alt="" width="30px">
                </a>

            </td>
            <td>
                <a href="#" data-toggle="modal" data-target="#exampleModalUpdate_emp"
                    class="fa fa-pen toolcolor btnUpdate_emp"></a>&nbsp; &nbsp;
                    <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_emp"></a>
            </td>
        </tr>
    </table>
</div>

<!-- pagination -->
<nav aria-label="Page navigation example">
<ul class="pagination">
<?php 

?>
    <li class="page-item"><button class="page-link" href="#">ກັບຄືນ</button></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><button class="page-link" href="#">ຕໍ່ໄປ</button></li>
  </ul>
</nav>

</div>

<!-- check form save input not null -->
<script type="text/javascript">
        const myform = document.getElementById('form1');
        const emp_id = document.getElementById('emp_id');
        const emp_name = document.getElementById('emp_name');
        const gender = document.getElementById('gender');
        const tel = document.getElementById('tel');
        const auther_id = document.getElementById('auther_id');
        const status = document.getElementById('status');
        myform.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputs();
        });
        function checkInputs(){
          const emp_idValue = emp_id.value.trim();
          const emp_nameValue = emp_name.value.trim();
          const genderValue = gender.value.trim();
          const telValue = tel.value.trim();
          const auther_idValue = auther_id.value.trim();
          const statusValue = status.value.trim();
          if(emp_idValue === ''){
            setErrorFor(emp_id, 'ກະລຸນາປ້ອນລະຫັດພະນັກງານ');
          }
          else{
            setSuccessFor(emp_id);
          }
          if(emp_nameValue === ''){
            setErrorFor(emp_name, 'ກະລຸນາປ້ອນຊື່ພະນັກງານ');
          }
          else{
            setSuccessFor(emp_name);
          }
          if(genderValue === ''){
            setErrorFor(gender, 'ກະລຸນາປ້ອນເພດພະນັກງານ');
          }
          else{
            setSuccessFor(gender);
          }
          if(telValue === ''){
            setErrorFor(tel, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
          }
          else{
            setSuccessFor(tel);
          }
          if(auther_idValue === ''){
            setErrorFor(auther_id, 'ກະລຸນາປ້ອນລະຫັດຕຳແໜ່ງ');
          }
          else{
            setSuccessFor(auther_id);
          }
          if(statusValue === ''){
            setErrorFor(status, 'ກະລຸນາປ້ອນລະຫັດຕຳແໜ່ງ');
          }
          else{
            setSuccessFor(status);
          }
          if(emp_idValue !== '' && emp_nameValue !== '' && genderValue !== '' && telValue !== '' && auther_idValue !== '' && statusValue !== ''){
            document.getElementById("form1").action = "employee.php";
            document.getElementById("form1").submit();
          }
        }
</script>

<!-- check form update input not null -->
<script type="text/javascript">
        const myformUpdate = document.getElementById('formUpdate');
        const emp_name2 = document.getElementById('emp_name2');
        const gender2 = document.getElementById('gender2');
        const tel2 = document.getElementById('tel2');
        const auther_id2 = document.getElementById('auther_id2');
        const status2 = document.getElementById('status2');
        myformUpdate.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputs2();
        });
        function checkInputs2(){
          const emp_name2Value = emp_name2.value.trim();
          const gender2Value = gender2.value.trim();
          const tel2Value = tel2.value.trim();
          const auther_id2Value = auther_id2.value.trim();
          const status2Value = status2.value.trim();
          if(emp_name2Value === ''){
            setErrorFor(emp_name2, 'ກະລຸນາປ້ອນຊື່ພະນັກງານ');
          }
          else{
            setSuccessFor(emp_name2);
          }
          if(gender2Value === ''){
            setErrorFor(gender2, 'ກະລຸນາປ້ອນເພດພະນັກງານ');
          }
          else{
            setSuccessFor(gender2);
          }
          if(tel2Value === ''){
            setErrorFor(tel2, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
          }
          else{
            setSuccessFor(tel2);
          }
          if(auther_id2Value === ''){
            setErrorFor(auther_id2, 'ກະລຸນາປ້ອນລະຫັດຕຳແໜ່ງ');
          }
          else{
            setSuccessFor(auther_id2);
          }
          if(status2Value === ''){
            setErrorFor(status2, 'ກະລຸນາປ້ອນລະຫັດຕຳແໜ່ງ');
          }
          else{
            setSuccessFor(status2);
          }
          if(emp_id2Value !== '' && emp_name2Value !== '' && gender2Value !== '' && tel2Value !== '' && auther_id2Value !== '' && status2Value !== ''){
            document.getElementById("formUpdate").action = "employee.php";
            document.getElementById("formUpdate").submit();
          }
        }
</script>






<!-- sweetalert -->
<?php 
// check id if exist
  if(isset($_GET['id'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດພະນັກງານນີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດອື່ນທີ່ແຕກຕ່າງ !!", "info");
    </script>';
  }
  // check if email if exist
  if(isset($_GET['email'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກອີເມວພະນັກງານນີ້ມີແລ້ວ ກະລຸນາໃສ່ອີເມວອື່ນທີ່ແຕກຕ່າງ !!", "info");
    </script>';
  }
  // check if pass if exist
  if(isset($_GET['pass'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດຜ່ານພະນັກງານນີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດຜ່ານອື່ນທີ່ແຕກຕ່າງ !!", "info");
    </script>';
  }
  // check save
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
  // check if email and password update exist
  if(isset($_GET['mp'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດແກ້ໄຂຂໍ້ມູນໄດ້ເນື່ອງຈາກອີເມວນີ້ມີແລ້ວ ກະລຸນາໃສ່ອີເມວອື່ນທີ່ແຕກຕ່າງ !!", "info");
    </script>';
  }
  // check update
  if(isset($_GET['update'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ແກ້ໄຂຂໍ້ມູນບໍ່ສຳເລັດ", "error");
    </script>';
  }
  if(isset($_GET['update2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ແກ້ໄຂຂໍ້ມູນສຳເລັດ", "success");
    </script>';
  }
  // check if emp_id exist in form table
  if(isset($_GET['form'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນພະນັກງານນີ້ໄດ້ເນື່ອງຈາກຕຳແໜ່ງນີ້ມີຢູ່ໃນຂໍ້ມູນຟອມເບີກແລ້ວ", "warning");
    </script>';
  }
    // check if emp_id exist in check_stock table
  if(isset($_GET['check'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນພະນັກງານນີ້ໄດ້ເນື່ອງຈາກຕຳແໜ່ງນີ້ມີຢູ່ໃນຂໍ້ມູນນັບສະຕ໋ອກແລ້ວ", "warning");
    </script>';
  }
    // check if emp_id exist in distribute table
  if(isset($_GET['dis'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນພະນັກງານນີ້ໄດ້ເນື່ອງຈາກຕຳແໜ່ງນີ້ມີຢູ່ໃນຂໍ້ມູນເບີກສິນຄ້າແລ້ວ", "warning");
    </script>';
  }
      // check if emp_id exist in product_putback_stock table
  if(isset($_GET['pps'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນພະນັກງານນີ້ໄດ້ເນື່ອງຈາກຕຳແໜ່ງນີ້ມີຢູ່ໃນຂໍ້ມູນເບີກນຳສິນຄ້າກັບຄືນແລ້ວ", "warning");
    </script>';
  }
      // check if emp_id exist in distribute table
  if(isset($_GET['stock'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນພະນັກງານນີ້ໄດ້ເນື່ອງຈາກຕຳແໜ່ງນີ້ມີຢູ່ໃນຂໍ້ມູນສາງສິນຄ້າແລ້ວ", "warning");
    </script>';
  }
  // check if emp_id exist in spare_part table
  if(isset($_GET['spare'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນພະນັກງານນີ້ໄດ້ເນື່ອງຈາກຕຳແໜ່ງນີ້ມີຢູ່ໃນຂໍ້ມູນປ່ຽນອາໄຫຼ່ສິນຄ້າແລ້ວ", "warning");
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

<!-- script preview image before upload -->
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
  var loadFile2 = function(event) {
    var output2 = document.getElementById('output2');
    output2.src = URL.createObjectURL(event.target.files[0]);
    output2.onload = function() {
      URL.revokeObjectURL(output2.src) // free memory
    }
  };
</script>
