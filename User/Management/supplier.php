<?php
  $title = "ຂໍ້ມູນຜູ້ສະນອງ";
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
          <form action="supplier.php" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalsupplier">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalsupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນຜູ້ສະນອງ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດຜູ້ສະນອງ</label>
                                      <input type="text" name="sup_id" id="sup_id" placeholder="ລະຫັດຜູ້ສະນອງ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ບໍ່ລິສັດ</label>
                                      <input type="text" name="company" id="company" placeholder="ຊື່ບໍ່ລິສັດ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເບີໂທລະສັບ</label>
                                      <input type="text" name="tel" id="tel" placeholder="ເບີໂທລະສັບ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເບີແຟັກ</label>
                                    <input type="text" name="fax" id="fax"  placeholder="ເບີແຟັກ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>  
                                      <small class="">Error message</small>                                  
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຕັ້ງບໍລິສັດ</label>
                                      <textarea name="address" id="address" cols="3" rows="3" placeholder="ທີ່ຕັ້ງບໍລິສັດ"></textarea>
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຢູ່ອີເມວ</label>
                                      <input type="text" name="email" id="email" placeholder="ທີ່ຢູ່ອີເມວ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຮູບພາບ</label>
                                      <input type="file" name="img_path" id="img_path">
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

          <form action="supplier.php" id="formUpdate" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນຜູ້ສະນອງ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ບໍລິສັດ</label>
                                      <input type="hidden" name="sup_id_update" id="sup_id_update" placeholder="ລະຫັດຜູ້ສະໜອງ">
                                      <input type="text" name="company_update" id="company_update" placeholder="ຊື່ຊື່ບໍລິສັດ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>        
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເບີໂທລະສັບ</label>
                                      <input type="text" name="tel_update" id="tel_update" placeholder="ເບີໂທລະສັບ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເບີແຟັກ</label>
                                      <input type="text" name="fax_update" id="fax_update" placeholder="ເບີແຟັກ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຢູ່ປັດຈຸບັນ</label>
                                      <textarea name="address_update" id="address_update" cols="3" rows="3" placeholder="ທີ່ຢູ່ປັດຈຸບັນ"></textarea>
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ທີ່ຢູ່ອີເມວ</label>
                                      <input type="text" name="email_update" id="email_update" placeholder="ທີ່ຢູ່ອີເມວ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຮູບພາບ</label>
                                      <input type="file" name="img_path_update" id="img_path_update">
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
            <th>ຊື່ບໍ່ລິສັດ</th>
            <th>ເບີໂທລະສັບ</th>
            <th>ເບີແຟັກ</th>
            <th>ທີ່ຢູ່ປັດຈຸບັນ</th>
            <th>ທີ່ຢູ່ອີເມວ</th>
            <th>ຮູບພາບ</th>
            <th></th>

        </tr>
        <tr>
            <td>1</td>
            <td>a</td>
            <td>b</td>
            <td>c</td>
            <td>d</td>
            <td>e@gmail.com</td>
            <td>
     
                    <a href="../../image/image.jpeg" target="_blank">
                      <img src="../../image/image.jpeg" class="img-circle elevation-2" alt="" width="30px">
                    </a>
    
            </td>
            <td>
            <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_auther"></a>&nbsp; &nbsp; 
              <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_auther"></a>
            </td>
        </tr>
      </table>
    </div>
  </div>

  <form action="supplier.php" id="formDelete" method="POST" enctype="multipart/form-data">
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


  <script type="text/javascript">
        const myform = document.getElementById('form1');
        const sup_id = document.getElementById('sup_id');
        const company = document.getElementById('company');
        const tel = document.getElementById('tel');
        myform.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputs();
        });

        function checkInputs(){
          const sup_idValue = sup_id.value.trim();
          const companyValue = company.value.trim();
          const telValue = tel.value.trim();
          
          if(sup_idValue === ''){
              setErrorFor(sup_id, 'ກະລຸນາປ້ອນລະຫັດຜູ້ສະໜອງ');
          }
          else{
            setSuccessFor(sup_id);
          }
          if(companyValue === ''){
            setErrorFor(company, 'ກະລຸນາປ້ອນຊື່ບໍລິສັດ');
          }
          else{
            setSuccessFor(company);
          }

          if(telValue === ''){
              setErrorFor(tel, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
          }
          else{
            setSuccessFor(tel);
          }
          if(companyValue !== '' && telValue !== '' && sup_idValue !== ''){
            document.getElementById("form1").action = "supplier.php";
            document.getElementById("form1").submit();
          }         
        }
        
      </script>

    <script type="text/javascript">
        const myformUpdate = document.getElementById('formUpdate');
        const sup_id_update = document.getElementById('sup_id_update');
        const company_update = document.getElementById('company_update');
        const tel_update = document.getElementById('tel_update');
        myformUpdate.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputsUpdate();
        });

        function checkInputsUpdate(){
          const company_updateValue = company_update.value.trim();
          const tel_updateValue = tel_update.value.trim();
          if(company_updateValue === ''){
              setErrorFor(company_update, 'ກະລຸນາປ້ອນຊື່ຜູ້ສະໜອງ');
          }
          else{
            setSuccessFor(company_update);
          }
          if(tel_updateValue === ''){
              setErrorFor(tel_update, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
          }
          else{
            setSuccessFor(tel_update);
          }
          if(company_updateValue !== '' && tel_updateValue !== '' && sup_id_updateValue !== ''){
            document.getElementById("formUpdate").action = "supplier.php";
            document.getElementById("formUpdate").submit();
          }
        }
          </script>
 <?php
    include ("../../header-footer/footer.php");
  ?>