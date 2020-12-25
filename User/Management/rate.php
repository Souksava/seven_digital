<?php
  $title = "ຂໍ້ມູນເລດເງີນ ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ('../../header-footer/header.php');
  if(isset($_POST['btnDelete'])){
    $obj->delete_rate(trim($_POST['id']));
  }
  if(isset($_POST['rate_id'])){
    $obj->insert_rate(trim($_POST['rate_id']),trim($_POST['rate_buy']),trim($_POST['rate_sell']));
  }
  if(isset($_POST['rate_id_update'])){
    $obj->update_rate(trim($_POST['rate_id_update']),trim($_POST['rate_buy_update']),trim($_POST['rate_sell_update']));
  }
?>
    <div style="width: 100%;">
        <div style="width: 48%; float: left;">
          <b><?php echo $title ?></b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
        </div>
        <div style="width: 46%; float: right;" align="right">
          <form action="rate" id="formSave" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalrate">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalrate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນເລດເງີນ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ລະຫັດເລດເງີນ </label>
                                      <input type="text" name="rate_id" id="rate_id" placeholder="ລະຫັດເລດເງີນ ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label></label>
                                      <input type="text" name="rate_buy" id="rate_buy" placeholder="ເລດເງິນຊື້">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label></label>
                                      <input type="text" name="rate_sell" id="rate_sell" placeholder="ເລດເງິນຂາຍ">
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

          <form action="rate" id="formUpdate" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນເລດເງີນ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເລດເງີນຊື້</label>
                                      <input type="hidden" name="rate_id_update" id="rate_id_update" placeholder="ລະຫັດເລດເງິນ">
                                      <input type="text" name="rate_buy_update" id="rate_buy_update" placeholder="ເລດເງິນຊື້">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>   
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ເລດເງີນຂາຍ</label>
                                      <input type="text" name="rate_sell_update" id="rate_sell_update" placeholder="ເລດເງິນຂາຍ">
                                      <i class="fas fa-check-circle "></i>
                                      <i class="fas fa-exclamation-circle "></i>
                                      <small class="">Error message</small>
                                  </div>                                         
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                              <button type="submit" name="update" id="btnUpdate" class="btn btn-outline-success">ແກ້ໄຂ</button>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
          
        </div>
    </div>
    <div class="clearfix"></div><br>
    <?php
      $obj->select_rate("%%","0");
      if(mysqli_num_rows($resultrate) > 0){
    ?>
    <div class="table-responsive">
      <table class="table font12" style="width: 1500px;">
        <tr>
            <th>ລະຫັດເລດເງິນ</th>
            <th>ເລດເງິນຊື້</th>
            <th>ເລດເງິນຂາຍ</th>
            <th></th>
        </tr>
        <?php
            foreach($resultrate as $row){
        ?>
        <tr>
            <td><?php echo $row['rate_id'] ?></td>
            <td><?php echo $row['rate_buy'] ?></td>
            <td><?php echo $row['rate_sell'] ?></td>
            <td>
            <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_rate"></a>&nbsp; &nbsp; 
              <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_rate"></a>
            </td>
        </tr>
        <?php
            }
        ?>
      </table>
    </div>
    <?php
          } 
          else{
        ?>
            <hr size="1" width="90%">
              <p align="center">ຍັງບໍ່ມີຂໍ້ມູນ</p>
            <hr size="1" width="90%">
        <?php
          }
        ?>



  </div>

  <form action="rate" id="formDelete" method="POST" enctype="multipart/form-data">
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
        const myform = document.getElementById('formSave');
        const rate_id = document.getElementById('rate_id');
        const rate_buy = document.getElementById('rate_buy');
        const rate_sell = document.getElementById('rate_sell');
        myform.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputs();
        });

        function checkInputs(){
          const rate_idValue = rate_id.value.trim();
          const rate_buyValue = rate_buy.value.trim();
          const rate_sellValue = rate_sell.value.trim();
          if(rate_idValue === ''){
              setErrorFor(rate_id, 'ກະລຸນາປ້ອນລະຫັດເລດເງິນ');
          }
          else{
            setSuccessFor(rate_id);
          }
          if(rate_buyValue === ''){
            setErrorFor(rate_buy, 'ກະລຸນາປ້ອນເລດເງິນຊື້');
          }
          else{
            setSuccessFor(rate_buy);
          }   
          if(rate_sellValue === ''){
            setErrorFor(rate_sell, 'ເລດເງິນຂາຍ');
          }
          else{
            setSuccessFor(rate_sell);
          }     
          if(rate_idValue !== ''  && rate_buyValue !== '' && rate_sellValue !== ''){
            document.getElementById("formSave").action = "rate";
            document.getElementById("formSave").submit();
          }         
        }
        
      </script>

<!-- check update rate not null -->
    <script type="text/javascript">
        const myformUpdate = document.getElementById('formUpdate');
        const rate_id_update = document.getElementById('rate_id_update');
        const rate_buy_update = document.getElementById('rate_buy_update');
        const rate_sell_update = document.getElementById('rate_sell_update');
        myformUpdate.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputsUpdate();
        });

        function checkInputsUpdate(){
          const rate_buy_updateValue = rate_buy_update.value.trim();
          const rate_sell_updateValue = rate_sell_update.value.trim();
          if(rate_buy_updateValue === ''){
              setErrorFor(rate_buy_update, 'ກະລຸນາປ້ອນເລດເງິນຊື້');
          }
          else{
            setSuccessFor(rate_buy_update);
          }
          if(rate_sell_updateValue === ''){
              setErrorFor(rate_sell_update, 'ເລດເງິນຂາຍ');
          }
          else{
            setSuccessFor(rate_sell_update);
          }
          if(rate_buy_updateValue !== '' &&  rate_sell_updateValue !== ''){
            document.getElementById("formUpdate").action = "rate";
            document.getElementById("formUpdate").submit();
          }
        }
          </script>

<!-- sweetalert -->
<?php
  // check if rate_id exist
  if(isset($_GET['rate'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດເລດເງິນນີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດອື່ນທີ່ແຕກຕ່າງ !!", "info");
    </script>';
  }
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

  //check update
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
  // check if rateid exist in stock
  if(isset($_GET['delete'])=='warning'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນນີ້ໄ້ດເນື່ອງຈາກລະຫັດເລດເງິນນີ້ເຄີຍໝູນໃຊ້ໃນຂໍ້ມູນນັບສະຕ໋ອກ", "error");
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