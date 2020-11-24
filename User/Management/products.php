<?php
  $title = "ຂໍ້ມູນສິນຄ້າ";
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
        <form action="products.php" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalunit">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalunit" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນສິນຄ້າ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span a ria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດສິນຄ້າ</label>
                                    <input type="text" name="code" id="code" placeholder="ລະຫັດສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ສິນຄ້າ</label>
                                    <input type="text" name="pro_name" id="pro_name" placeholder="ຊື່ສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລຸ້ນເຄື່ອງຂອງສິນຄ້າ</label>
                                    <input type="text" name="gen" id="gen" placeholder="ລຸ້ນເຄື່ອງຂອງສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດປະເພດສິນຄ້າ</label>
                                    <input type="text" name="cate_id" id="cate_id" placeholder="ລະຫັດປະເພດສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດຫົວໜວ່ຍສິນຄ້າ</label>
                                    <input type="text" name="unit_id" id="unit_id" placeholder="ລະຫັດຫົວໜວ່ຍສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດຍີ່ຫໍ້</label>
                                    <input type="text" name="brand_id" id="brand_id" placeholder="ລະຫັດຍີ່ຫໍ້">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເງື່ອນໄຂການສັ່ງຊື້</label>
                                    <input type="text" name="qtyalert" id="qtyalert" placeholder="ເງື່ອນໄຂການສັ່ງຊື້">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຮູບພາບສິນຄ້າ</label>
                                    <input type="text" name="img_path" id="img_path" placeholder="ຮູບພາບສິນຄ້າ">
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

        <form action="products.php" id="formUpdate" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນສິນຄ້າ </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ສິນຄ້າ</label>
                                    <input type="hidden" name="code_update" id="code_update"
                                        placeholder="ລະຫັດປະເພດສິນຄ້າ">
                                    <input type="text" name="pro_name_update" id="pro_name_update"
                                        placeholder="ຊື່ສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລຸ້ນເຄື່ອງຂອງສິນຄ້າ</label>
                                    <input type="text" name="gen" id="gen" placeholder="ລຸ້ນເຄື່ອງຂອງສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດປະເພດສິນຄ້າ</label>
                                    <input type="text" name="cate_id" id="cate_id" placeholder="ລະຫັດປະເພດສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດຫົວໜວ່ຍສິນຄ້າ</label>
                                    <input type="text" name="unit_id" id="unit_id" placeholder="ລະຫັດຫົວໜວ່ຍສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດຍີ່ຫໍ້</label>
                                    <input type="text" name="brand_id" id="brand_id" placeholder="ລະຫັດຍີ່ຫໍ້">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເງື່ອນໄຂການສັ່ງຊື້</label>
                                    <input type="text" name="qtyalert" id="qtyalert" placeholder="ເງື່ອນໄຂການສັ່ງຊື້">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຮູບພາບສິນຄ້າ</label>
                                    <input type="text" name="img_path" id="img_path" placeholder="ຮູບພາບສິນຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
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
            <th>ລະຫັດສິນຄ້າ</th>
            <th>ຊື່ສິນຄ້າ</th>
            <th>ລຸ້ນເຄື່ອງຂອງສິນຄ້າ</th>
            <th>ລະຫັດປະເພດສິນຄ້າ</th>
            <th>ລະຫັດຫົວໜວ່ຍສິນຄ້າ</th>
            <th>ລະຫັດຍີ່ຫໍ້</th>
            <th>ເງື່ອນໄຂການສັ່ງຊື້</th>
            <th>ຮູບພາບສິນຄ້າ</th>
            <th></th>
        </tr>
        <tr>
            <td>1</td>
            <td>a</td>
            <td>b</td>
            <td>c</td>
            <td>c</td>
            <td>c</td>
            <td>c</td>
            <td>

                <a href="../../image/image.jpeg" target="_blank">
                    <img src="../../image/image.jpeg" class="img-circle elevation-2" alt="" width="30px">
                </a>

            </td>
            <td>
                <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-pen toolcolor btnUpdate_auther"></a>&nbsp; &nbsp;
                <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                    class="fa fa-trash toolcolor btnDelete_auther"></a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>a</td>
            <td>b</td>
            <td>c</td>
            <td>c</td>
            <td>c</td>
            <td>c</td>
            <td>

                <a href="../../image/image.jpeg" target="_blank">
                    <img src="../../image/image.jpeg" class="img-circle elevation-2" alt="" width="30px">
                </a>

            </td>
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
const code = document.getElementById('code');
const pro_name = document.getElementById('pro_name');
const cate_id = document.getElementById('cate_id');
const unit_id = document.getElementById('unit_id');
const brand_id = document.getElementById('brand_id');
const qtyalert = document.getElementById('qtyalert');
myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const codeValue = code.value.trim();
    const pro_nameValue = pro_name.value.trim();
    const cate_idValue = cate_id.value.trim();
    const unit_idValue = unit_id.value.trim();
    const brand_idValue = brand_id.value.trim();
    const qtyalertValue = qtyalert.value.trim();

    if (codeValue === '') {
        setErrorFor(code, 'ກະລຸນາປ້ອນລະຫັດສິນຄ້າ');
    } else {
        setSuccessFor(code);
    }
    if (pro_nameValue === '') {
        setErrorFor(pro_name, 'ກະລຸນາປ້ອນລະຫັດປະເພດສິນຄ້າ');
    } else {
        setSuccessFor(pro_name);
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