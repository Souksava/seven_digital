<?php
  $title = "ຂໍ້ມູນຫົວໜ່ວຍສິນຄ້າ ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>
<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b><?php echo $title?></b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="unit.php" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalunit">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalunit" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນຫົວໜ່ວຍສິນຄ້າ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span a ria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດຫົວໜ່ວຍສິນຄ້າ</label>
                                    <input type="text" name="unit_id" id="unit_id" placeholder="ລະຫັດຫົວໜ່ວຍສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ຫົວໜ່ວຍສິນຄ້າ</label>
                                    <input type="text" name="unit_name" id="unit_name" placeholder="ຊື່ຫົວໜ່ວຍສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-dismiss="modal">ຍົກເລີກ</button>
                            <button type="submit" name="Save" id="Save" class="btn btn-outline-primary"
                                onclick="">ບັນທຶກ</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="unit.php" id="formUpdate" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນຫົວໜ່ວຍສິນຄ້າ </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ຫົວໜ່ວຍສິນຄ້າ</label>
                                    <input type="hidden" name="unit_id_update" id="unit_id_update"
                                        placeholder="ລະຫັດປະເພດສິນຄ້າ">
                                    <input type="text" name="unit_name_update" id="unit_name_update"
                                        placeholder="ຊື່ຫົວໜ່ວຍສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small class="">Error message</small>
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
    </div>
</div>
<div class="clearfix"></div><br>
<div class="table-responsive">
    <table class="table font12" style="width: 1500px;">
        <tr>
            <th>ລະຫັດຫົວໜ່ວຍສິນຄ້າ</th>
            <th>ຊື່ຫົວໜ່ວຍສິນຄ້າ</th>
            <th></th>

        </tr>
        <tr>
            <td>1</td>
            <td>c</td>
            <td>
                <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-pen toolcolor btnUpdate_auther"></a>&nbsp; &nbsp;
                <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                    class="fa fa-trash toolcolor btnDelete_auther"></a>
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

<form action="unit.php" id="formDelete" method="POST" enctype="multipart/form-data">
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


<script type="text/javascript">
const myform = document.getElementById('form1');
const unit_id = document.getElementById('unit_id');
const unit_name = document.getElementById('unit_name');
myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const unit_idValue = unit_id.value.trim();
    const unit_nameValue = unit_name.value.trim();

    if (unit_idValue === '') {
        setErrorFor(unit_id, 'ກະລຸນາປ້ອນລະຫັດປະເພດສິນຄ້າ');
    } else {
        setSuccessFor(unit_id);
    }
    if (unit_nameValue === '') {
        setErrorFor(unit_name, 'ກະລຸນາປ້ອນຊື່ປະເພດສິນຄ້າ');
    } else {
        setSuccessFor(unit_name);
    }
    if (unit_nameValue !== '' && unit_idValue !== '') {
        document.getElementById("form1").action = "unit.php";
        document.getElementById("form1").submit();
    }
}
</script>

<script type="text/javascript">
const myformUpdate = document.getElementById('formUpdate');
const unit_name_update = document.getElementById('unit_name_update');
myformUpdate.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputsUpdate();
});

function checkInputsUpdate() {
    const unit_name_updateValue = unit_name_update.value.trim();
    if (unit_name_updateValue === '') {
        setErrorFor(unit_name_update, 'ກະລຸນາປ້ອນລະຫັດປະເພດສິນຄ້າ');
    } else {
        setSuccessFor(unit_name_update);
    }
    if (unit_name_updateValue !== '') {
        document.getElementById("formUpdate").action = "unit.php";
        document.getElementById("formUpdate").submit();
    }
}
</script>
<?php
    include ("../../header-footer/footer.php");
  ?>