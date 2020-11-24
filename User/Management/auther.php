<?php
  $title = "ຂໍ້ມູນຕຳແໜ່ງ";
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
                              <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນຕຳແໜ່ງ</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <div class="row" align="left">
                                  <div class="col-md-12 col-sm-6 form-control2">
                                      <label>ຊື່ຕຳແໜ່ງ</label>
                                      <input type="text" name="auther_name" id="auther_name" placeholder="ຊື່ຕຳແໜ່ງ">
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
    <div class="table-responsive">
      <table class="table font12" style="width: 100%;">
        <tr>
            <th>ລະຫັດ</th>
            <th>ຊື່ຕຳແໜ່ງ</th>
            <th></th>

        </tr>
        <tr>
            <td>1</td>
            <td>ໄອທີ</td>
            <td>
              <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_auther"></a>&nbsp; &nbsp; 
              <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_auther"></a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>ບັນຊີ</td>
            <td>
              <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_auther"></a>&nbsp; &nbsp; 
              <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_auther"></a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>ຜູ້ຈັດການ</td>
            <td>
              <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_auther"></a>&nbsp; &nbsp; 
              <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_auther"></a>
            </td>
        </tr>
      </table>
    </div>

    <!-- pagination -->
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">ກັບຄືນ</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">ຕໍ່ໄປ</a></li>
  </ul>
</nav>

  </div>
  <form action="auther.php" id="formupdate" method="POST" enctype="multipart/form-data">
      <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນຕຳແໜ່ງ</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    <div class="row" align="left">
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຊື່ຕຳແໜ່ງ</label>
                            <input type="hidden" id="auther_id2" name="auther_id2">
                            <input type="text" name="auther_name2" id="auther_name2" placeholder="ຊື່ຕຳແໜ່ງ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnUpdate" class="btn btn-outline-success">ແກ້ໄຂ</button>
                   </div>
                </div>
            </div>
        </div>
      </form>
      <form action="auther.php" id="formDelete" method="POST" enctype="multipart/form-data">
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
                          <input type="hidden" name="del_id" id="del_id">
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
        const auther_name = document.getElementById('auther_name');
        myform.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputs();
        });

        function checkInputs(){
          const auther_nameValue = auther_name.value.trim();
          if(auther_nameValue === ''){
            setErrorFor(auther_name, 'ກະລຸນາປ້ອນຊື່ຕຳແໜ່ງ');
          }
          else{
            setSuccessFor(auther_name);
          }

          if(auther_nameValue !== ''){
            document.getElementById("form1").action = "auther";
            document.getElementById("form1").submit();
          }
        }
      </script>
  <?php
    include ("../../header-footer/footer.php");
  ?>