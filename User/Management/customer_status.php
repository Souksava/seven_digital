<?php
  $title = "ຂໍ້ມູນສະຖານະລູກຄ້າ";
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
          <form action="customer_status.php" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalcustomer_status">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalcustomer_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນສະຖານະລູກຄ້າ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດສະຖານະລູກຄ້າ</label>
                                      <input type="text" name="stt_id" id="stt_id" placeholder="ລະຫັດສະຖານະລູກຄ້າ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ສະຖານະລູກຄ້າ</label>
                                      <input type="text" name="stt_name" id="stt_name" placeholder="ຊື່ສະຖານະລູກຄ້າ">
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

          <form action="customer_status.php" id="formUpdate" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນສະຖານະລູກຄ້າ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ສະຖານະລູກຄ້າ</label>
                                      <input type="hidden" name="stt_id_update" id="stt_id_update" placeholder="ລະຫັດສະຖານະລູກຄ້າ">
                                      <input type="text" name="stt_name_update" id="stt_name_update" placeholder="ຊື່ສະຖານະລູກຄ້າ">
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
            <th>ລະຫັດສະຖານະລູກຄ້າ</th>
            <th>ຊື່ສະຖານະລູກຄ້າ</th>
            <th></th>

        </tr>
        <tr>
            <td>1</td>
            <td>c</td>
            <td>
            <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_auther"></a>&nbsp; &nbsp; 
              <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_auther"></a>
            </td>
        </tr>
      </table>
    </div>
  </div>

  <form action="customer_status.php" id="formDelete" method="POST" enctype="multipart/form-data">
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
        const stt_id = document.getElementById('stt_id');
        const stt_name = document.getElementById('stt_name');
        myform.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputs();
        });

        function checkInputs(){
          const stt_idValue = stt_id.value.trim();
          const stt_nameValue = stt_name.value.trim();
          
          if(stt_idValue === ''){
              setErrorFor(stt_id, 'ກະລຸນາປ້ອນລະຫັດສະຖານະລູກຄ້າ');
          }
          else{
            setSuccessFor(stt_id);
          }
          if(stt_nameValue === ''){
            setErrorFor(stt_name, 'ກະລຸນາປ້ອນຊື່ສະຖານະລູກຄ້າ');
          }
          else{
            setSuccessFor(stt_name);
          }        
          if(stt_nameValue !== ''  && stt_idValue !== ''){
            document.getElementById("form1").action = "customer_status.php";
            document.getElementById("form1").submit();
          }         
        }
        
      </script>

    <script type="text/javascript">
        const myformUpdate = document.getElementById('formUpdate');
        const stt_name_update = document.getElementById('stt_name_update');
        myformUpdate.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputsUpdate();
        });

        function checkInputsUpdate(){
          const stt_name_updateValue = stt_name_update.value.trim();
          if(stt_name_updateValue === ''){
              setErrorFor(stt_name_update, 'ກະລຸນາປ້ອນສະຖານະລູກຄ້າ');
          }
          else{
            setSuccessFor(stt_name_update);
          }
          if(stt_name_updateValue !== '' ){
            document.getElementById("formUpdate").action = "customer_status.php";
            document.getElementById("formUpdate").submit();
          }
        }
          </script>
 <?php
    include ("../../header-footer/footer.php");
  ?>