<?php
  $title = "ຂໍ້ມູນສາງສິນຄ້າ ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
  if(isset($_POST['btnDelete'])){
    $obj->delete_pro_addr(trim($_POST['id']));
  }
  if(isset($_POST['addr_name'])){
    $obj->insert_pro_addr(trim($_POST['addr_name']));
  }
  if(isset($_POST['addr_name_update'])){
    $obj->update_pro_addr(trim($_POST['pro_ad_update']),trim($_POST['addr_name_update']));
  }
?>
<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b>ລາຍການ<?php echo $title ?></b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="product-address" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModaladdr">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModaladdr" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນສາງສິນຄ້າ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ທີ່ຢູສິນຄ້າ</label>
                                    <input type="text" name="addr_name" id="addr_name" placeholder="ທີ່ຢູສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-dismiss="modal">ຍົກເລີກ</button>
                            <button type="submit" name="btnSave" class="btn btn-outline-primary">ບັນທຶກ</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="clearfix"></div><br>
<?php
      $obj->select_pro_addr('%%','0');
      if(mysqli_num_rows($result_pro_addr) > 0){
    ?>
<div class="table-responsive">
    <table class="table font12" style="width: 100%;">
        <tr>
            <th>ລະຫັດທີ່ຢູສາງສິນຄ້າ</th>
            <th>ທີ່ຢູສາງສິນຄ້າ</th>
            <th></th>

        </tr>
        <?php
            foreach($result_pro_addr as $row){
        ?>
        <tr>
            <td><?php echo $row['pro_ad'] ?></td>
            <td><?php echo $row['addr_name'] ?></td>
            <td>
                <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-pen toolcolor btnUpdate_addr"></a>&nbsp; &nbsp;
                <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                    class="fa fa-trash toolcolor btnDelete_addr"></a>
            </td>
        </tr>
        <?php
            }   
            mysqli_free_result($result_pro_addr);  
            mysqli_next_result($conn);
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

<form action="product-address" id="formUpdate" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນສາງສິນຄ້າ </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" align="left">
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ທີ່ຢູສິນຄ້າ</label>
                            <input type="hidden" id="pro_ad_update" name="pro_ad_update">
                            <input type="text" name="addr_name_update" id="addr_name_update" placeholder="ທີ່ຢູສິນຄ້າ">
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

<form action="product-address" id="formDelete" method="POST" enctype="multipart/form-data">
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

<!-- check form input not null -->
<script type="text/javascript">
const myform = document.getElementById('form1');
const addr_name = document.getElementById('addr_name');
myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const addr_nameValue = addr_name.value.trim();
    if (addr_nameValue === '') {
        setErrorFor(addr_name, 'ກະລຸນາປ້ອນທີ່ຢູສິນຄ້າ');
    } else {
        setSuccessFor(addr_name);
    }

    if (addr_nameValue !== '') {
        document.getElementById("form1").action = "product-address";
        document.getElementById("form1").submit();
    }
}
</script>

<script type="text/javascript">
const myformupdate = document.getElementById('formUpdate');
const pro_ad_update = document.getElementById('pro_ad_update');
const addr_name_update = document.getElementById('addr_name_update');
myformupdate.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs2();
});

function checkInputs2() {
    const addr_name_updateValue = addr_name_update.value.trim();
    if (addr_name_updateValue === '') {
        setErrorFor(addr_name_update, 'ກະລຸນາປ້ອນທີ່ຢູສິນຄ້າ');
    } else {
        setSuccessFor(addr_name_update);
    }

    if (addr_name_updateValue !== '') {
        document.getElementById("formUpdate").action = "product-address";
        document.getElementById("formUpdate").submit();
    }
}
    // update product address
    $('.btnUpdate_addr').on('click', function() {
        $('#exampleModalUpdate').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#pro_ad_update').val(data[0]);
        $('#addr_name_update').val(data[1]);
    });

        // delete product address
        $('.btnDelete_addr').on('click', function() {
        $('#exampleModalDelete').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#id').val(data[0]);
    });
</script>


<!-- sweetalert -->
<?php  
// check if auther_id exist
  if(isset($_GET['id'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດຕຳແໜ່ງນີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດອື່ນ !!", "info");
    </script>';
  }
  // check if auther_name exist
  if(isset($_GET['name'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກຊື່ຕຳແໜ່ງນີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດອື່ນ !!", "info");
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
  // check if auther_name_update exist
  if(isset($_GET['name_update'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດແກ້ໄຂຂໍ້ມູນໄດ້ເນື່ອງຈາກຊື່ຕຳແໜ່ງນີ້ມີແລ້ວ ກະລຸນາໃສ່ຊື່ອື່ນ !!", "info");
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
  // check if auther_ide exist in table employee
  if(isset($_GET['delete'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຕຳແໜ່ງນີ້ໄດ້ເນື່ອງຈາກຕຳແໜ່ງນີ້ມີຢູ່ໃນຂໍ້ມູນພະນັກງານແລ້ວ", "warning");
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