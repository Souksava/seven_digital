<?php
  $title = "ຂໍ້ມູນຕຳແໜ່ງ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
  if(isset($_POST['btnDelete'])){
    $obj->delete_auther(trim($_POST['id']));
  }
  if(isset($_POST['auther_id'])){
    $obj->insert_auther(trim($_POST['auther_id']),trim($_POST['auther_name']));
  }
  if(isset($_POST['auther_name_update'])){
    $obj->update_auther(trim($_POST['auther_id_update']),trim($_POST['auther_name_update']));
  }
?>
<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b>ລາຍການຕຳແໜ່ງ</b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="auther" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalauther">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalauther" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <label>ລະຫັດຕຳແໜ່ງ</label>
                                    <input type="text" name="auther_id" id="auther_id" placeholder="ລະຫັດຕຳແໜ່ງ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                            </div>
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
      $obj->select_auther('%%','0');
      if(mysqli_num_rows($resultauther) > 0){
    ?>
<div class="table-responsive">
    <table class="table font12" style="width: 100%;">
        <tr>
            <th>ລະຫັດ</th>
            <th>ຊື່ຕຳແໜ່ງ</th>
            <th></th>

        </tr>
        <?php
            foreach($resultauther as $row){
        ?>
        <tr>
            <td><?php echo $row['auther_id'] ?></td>
            <td><?php echo $row['auther_name'] ?></td>
            <td>
                <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-pen toolcolor btnUpdate_auther"></a>&nbsp; &nbsp;
                <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                    class="fa fa-trash toolcolor btnDelete_auther"></a>
            </td>
        </tr>
        <?php
            }   
            mysqli_free_result($resultauther);  
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

</div>
<form action="auther" id="formUpdate" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                            <input type="hidden" id="auther_id_update" name="auther_id_update">
                            <input type="text" name="auther_name_update" id="auther_name_update" placeholder="ຊື່ຕຳແໜ່ງ">
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

<form action="auther" id="formDelete" method="POST" enctype="multipart/form-data">
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
const auther_id = document.getElementById('auther_id');
const auther_name = document.getElementById('auther_name');
myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const auther_idValue = auther_id.value.trim();
    const auther_nameValue = auther_name.value.trim();
    if (auther_idValue === '') {
        setErrorFor(auther_id, 'ກະລຸນາປ້ອນລະຫັດຕຳແໜ່ງ');
    } else {
        setSuccessFor(auther_id);
    }
    if (auther_nameValue === '') {
        setErrorFor(auther_name, 'ກະລຸນາປ້ອນຊື່ຕຳແໜ່ງ');
    } else {
        setSuccessFor(auther_name);
    }
    if (auther_idValue !== '' && auther_nameValue !== '' ) {
        document.getElementById("form1").action = "auther";
        document.getElementById("form1").submit();
    }
}
</script>

<script type="text/javascript">
const myformupdate = document.getElementById('formUpdate');
const auther_name_update = document.getElementById('auther_name_update');
myformupdate.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs2();
});

function checkInputs2() {
    const auther_name_updateValue = auther_name_update.value.trim();
    if (auther_name_updateValue === '') {
        setErrorFor(auther_name_update, 'ກະລຸນາປ້ອນຊື່ຕຳແໜ່ງ');
    } else {
        setSuccessFor(auther_name_update);
    }

    if (auther_name_updateValue !== '') {
        document.getElementById("formUpdate").action = "auther";
        document.getElementById("formUpdate").submit();
    }
}
$('.btnUpdate_auther').on('click', function() {
        $('#exampleModalUpdate').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#auther_id_update').val(data[0]);
        $('#auther_name_update').val(data[1]);

    })
    $('.btnDelete_auther').on('click', function() {
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
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກຊື່ຕຳແໜ່ງນີ້ມີແລ້ວ ກະລຸນາໃສ່ຊື່ອື່ນ !!", "info");
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
  // check if auther_id exist in table employee
  if(isset($_GET['delete'])=='fail'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຕຳແໜ່ງນີ້ໄດ້ເນື່ອງຈາກຕຳແໜ່ງນີ້ມີຢູ່ໃນຂໍ້ມູນພະນັກງານແລ້ວ", "warning");
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