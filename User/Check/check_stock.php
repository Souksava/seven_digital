<?php
  $title = "ການນັບສະຕ໋ອກ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
  $amount = 0;
?>
<br>
<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b>ລາຍການສະຕ໋ອກ</b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="check-stock" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalemp">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ການນັບສະຕ໋ອກ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດສິນຄ້າ</label>
                                    <input type="text" name="code" id="code" class="form-control" placeholder="ລະຫັດສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>Serial Number</label>
                                    <input type="text" name="serial" id="serial" class="form-control" placeholder="Serial Number">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຈຳນວນ</label>
                                    <input type="number" min="0" name="qty" id="qty" class="form-control" placeholder="ຈຳນວນ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ໝາຍເຫດ</label>
                                    <input type="text" name="remark" id="remark" placeholder="ໝາຍເຫດ" class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-dismiss="modal">ຍົກເລີກ</button>
                            <button type="submit" name="btnAdd_check_stock" class="btn btn-outline-primary">ເພີ່ມລາຍການ</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="clearfix"></div>
<div class="container-fluid font12">
    <div class="row">
        <div class="col-md-8">
            <?php 
            $obj->select_check_stock();
            if(isset($_COOKIE['check_stock'])){
            ?>
            <div class="table-responsive">
                <table class="table" style="width: 1100px;">
                    <tr>
                        <th style="width: 180px;" scope="col">ລະຫັດສິນຄ້າ</th>
                        <th style="width: 180px;" scope="col">ຊື່ສິນຄ້າ</th>
                        <th style="width: 180px;" scope="col">Serial Number</th>
                        <th style="width: 60px;" scope="col">ຈຳນວນ</th>
                        <th style="width: 100px;" scope="col">ໝາຍເຫດ</th>
                        <th style="width: 50px;"></th>
                    </tr>
                    <?php
                        foreach($cart_data as $row){
                        $amount += $row['qty'];
                    ?>
                    <tr>
                        <td><?php echo $row['code'] ?></td>
                        <td>
                        <?php echo $row['cate_name'] ?> <?php echo $row['code'] ?>
                        </td>
                        <td>50</td>
                        <td>50</td>
                        <td>sfklglskfdglksdfgsdfg</td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                                class="fa fa-trash toolcolor btnDelete_check"></a>&nbsp; &nbsp;
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
                <hr size="3" align="center" width="100%">
            </div>
            <?php
            }
            else{
                echo'
                <div align="center">
                    <hr size="1" style="width: 90%;"/>
                        ຍັງບໍ່ມີຂໍ້ມູນ
                    <hr size="1" style="width: 90%;"/>
                </div>
            ';
            }
            ?>
            <!-- pagination -->
            <br>
        </div>
        <div class="col-lg-3 font12">
            <div class="row row-cols-1 row-cols-md-1">
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 align="center" class="card-title"></h5>
                            <p class="card-text">
                            <form action="check-stock" id="formSave" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                    ຍອມລວມ
                                    </div>
                                        <div class="col-md-6 " align="right">
                                             <h4 style="color: #CE3131;"> <?php echo $amount ?></h4>
                                        </div>
                                    <hr size="3" align="center" width="100%">
                                    <div class="col-md-12 form-control2">
                                        <label>ທີ່ຢູ່ຂອງສາງ</label>
                                        <select name="pro_addr" id="pro_addr" class="selectcenter">
                                            <option value="" disabled selected>--- ເລືອກທີ່ຢູ່ຂອງສາງ ---</option>
                                            <option value="a">ສາງ A</option>
                                            <option value="a">ສາງ B</option>
                                        </select>
                                        <i class="fas fa-check-circle "></i>
                                        <i class="fas fa-exclamation-circle "></i>
                                        <small class="">Error message</small>
                                    </div>
                                    <div class="col-md-12" align="center">

                                        <button type="button" name="btnAdd" class="btn btn-outline-success"
                                            data-toggle="modal" data-target="#exampleModal2">ບັນທຶກການນັບສະຕ໋ອກ</button>
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
                                                        ທ່ານຕ້ອງການຈະບັນທຶກຂໍ້ມູນການນັບສະຕ໋ອກເຂົ້າໃນລະບົບ ຫຼື ບໍ່ ?
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
<form action="check-stock" id="formDelete" method="POST" enctype="multipart/form-data">
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

<!-- check form import input not null -->
<script type="text/javascript">
        const myform = document.getElementById('form1');
        const code = document.getElementById('code');
        const serial = document.getElementById('serial');
        const qty = document.getElementById('qty');
        myform.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputs();
        });
        function checkInputs(){
          const codeValue = code.value.trim();
          const serialValue = serial.value.trim();
          const qtyValue = qty.value.trim();
          if(codeValue === ''){
            setErrorFor(code, 'ກະລຸນາປ້ອນລະຫັດສິນຄ້າ');
          }
          else{
            setSuccessFor(code);
          }
          if(serialValue === ''){
            setErrorFor(serial, 'ກະລຸນາປ້ອນໝາຍເລກ Serial Number');
          }
          else{
            setSuccessFor(serial);
          }
          if(qtyValue === ''){
            setErrorFor(qty, 'ກະລຸນາປ້ອນຈຳນວນ');
          }
          else{
            setSuccessFor(qty);
          }       
          if(codeValue !== '' && serial !=='' && serialValue !== '' && qtyValue !== ''){
            document.getElementById("form1").action = "check-stock";
            document.getElementById("form1").submit();
          }
        }
</script>

<!-- check form import input not null -->
<script type="text/javascript">
        const myform2 = document.getElementById('formSave');
        const pro_addr = document.getElementById('pro_addr');
        myform2.addEventListener('submit',(e) => {
          e.preventDefault();
        checkInputs2();
        });
        function checkInputs2(){
          const pro_addrValue = pro_addr.value.trim();
          if(pro_addrValue === ''){
            setErrorFor(pro_addr, 'ກະລຸນາປ້ອນເລືອກທີ່ຢູ່ຂອງສາງ');
          }
          else{
            setSuccessFor(pro_addr);
          }      
          if(pro_addrValue !== '' ){
            document.getElementById("formSave").action = "check-stock";
            document.getElementById("formSave").submit();
          }
        }
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
    swal("", "ລົບຂໍ້ມູນບໍ່ສຳເລັດ", "error");
    </script>';
  }
  if(isset($_GET['del2'])=='success'){
    echo'<script type="text/javascript">
    swal("", "ລົບຂໍ້ມູນສຳເລັດ", "success");
    </script>';
  }
?>

<?php
    include ("../../header-footer/footer.php");
  ?>