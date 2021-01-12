<?php
  $title = "ຂໍ້ມູນສິນຄ້າ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");

  if(isset($_POST['btnDelete'])){
    $obj->delete_product(trim($_POST['id']));
  }
  if(isset($_POST['code'])){
    $obj->insert_product(trim($_POST['code']),trim($_POST['pro_name']),trim($_POST['gen']),trim($_POST['cate_id']),trim($_POST['unit_id']),trim($_POST['brand_id']),trim($_POST['qtyalert']),$_FILES['img_path']['name']);
  }
  if(isset($_POST['pro_name_update'])){
    $obj->update_product(trim($_POST['code_update']),trim($_POST['pro_name_update']),trim($_POST['gen_update']),trim($_POST['cate_id_update']),trim($_POST['unit_id_update']),trim($_POST['brand_id_update']),trim($_POST['qtyalert_update']),$_FILES['img_path']['name']);
  }
?>
<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b><?php echo $title?></b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="products" id="form1" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="code" id="code" placeholder="ລະຫັດສິນຄ້າ" class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ສິນຄ້າ</label>
                                    <input type="text" name="pro_name" id="pro_name" placeholder="ຊື່ສິນຄ້າ" class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລຸ້ນເຄື່ອງຂອງສິນຄ້າ</label>
                                    <input type="text" name="gen" id="gen" placeholder="ລຸ້ນເຄື່ອງຂອງສິນຄ້າ" class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ປະເພດສິນຄ້າ</label>
                                    <select name="cate_id" id="cate_id">
                                        <option value="" disabled selected>--- ເລືອກປະເພດສິນຄ້າ ---</option>
                                        <?php
                                        $obj->select_category('%%','0');
                                            foreach($resultcategory as $rowcate1){
                                        ?>
                                        <option value="<?php echo $rowcate1['cate_id'] ?>">
                                            <?php echo $rowcate1['cate_name'] ?>
                                        </option>
                                        <?php
                                           }
                                           mysqli_free_result($resultcategory);  
                                           mysqli_next_result($conn);
                                        ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຫົວໜ່ວຍສິນຄ້າ</label>
                                    <select name="unit_id" id="unit_id">
                                        <option value="" disabled selected>--- ເລືອກຫົວໜ່ວຍສິນຄ້າ ---</option>
                                        <?php
                                        $obj->select_unit('%%','0');
                                            foreach($resultunit as $rowunit1){
                                        ?>
                                        <option value="<?php echo $rowunit1['unit_id'] ?>">
                                            <?php echo $rowunit1['unit_name'] ?>
                                        </option>
                                        <?php
                                           }
                                           mysqli_free_result($resultunit);  
                                           mysqli_next_result($conn);
                                        ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຍີ່ຫໍ້ສິນຄ້າ</label>
                                    <select name="brand_id" id="brand_id">
                                        <option value="" disabled selected>--- ເລືອກຍີ່ຫໍ້ສິນຄ້າ ---</option>
                                        <?php
                                        $obj->select_brand('%%','0');
                                            foreach($resultbrand as $brand1){
                                        ?>
                                        <option value="<?php echo $brand1['brand_id'] ?>">
                                            <?php echo $brand1['brand_name'] ?>
                                        </option>
                                        <?php
                                           }
                                           mysqli_free_result($resultbrand);  
                                           mysqli_next_result($conn);
                                        ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເງື່ອນໄຂການສັ່ງຊື້</label>
                                    <input type="number" min="0" name="qtyalert" id="qtyalert" placeholder="ເງື່ອນໄຂການສັ່ງຊື້" class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຮູບພາບສິນຄ້າ</label>
                                    <input type="file" name="img_path" id="img_path" placeholder="ຮູບພາບສິນຄ້າ"
                                        onchange="loadFile(event)">
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
                            <button type="button" class="btn btn-outline-secondary"
                                data-dismiss="modal">ຍົກເລີກ</button>
                            <button type="submit" name="Save" id="Save" class="btn btn-outline-primary"
                                onclick="">ບັນທຶກ</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form action="products" id="formUpdate" method="POST" enctype="multipart/form-data">
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
                                        placeholder="ລະຫັດປະເພດສິນຄ້າ" >
                                    <input type="text" name="pro_name_update" id="pro_name_update"
                                        placeholder="ຊື່ສິນຄ້າ" class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລຸ້ນເຄື່ອງຂອງສິນຄ້າ</label>
                                    <input type="text" name="gen_update" id="gen_update"
                                        placeholder="ລຸ້ນເຄື່ອງຂອງສິນຄ້າ" class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ປະເພດສິນຄ້າ</label>
                                    <select name="cate_id_update" id="cate_id_update">
                                        <option value="" disabled selected>--- ເລືອກປະເພດສິນຄ້າ ---</option>
                                        <?php
                                        $obj->select_category('%%','0');
                                            foreach($resultcategory as $rowcate){
                                        ?>
                                        <option value="<?php echo $rowcate['cate_id'] ?>">
                                            <?php echo $rowcate['cate_name'] ?>
                                        </option>
                                        <?php
                                           }
                                           mysqli_free_result($resultcategory);  
                                           mysqli_next_result($conn);
                                        ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຫົວໜ່ວຍສິນຄ້າ</label>
                                    <select name="unit_id_update" id="unit_id_update">
                                        <option value="" disabled selected>--- ເລືອກຫົວໜ່ວຍສິນຄ້າ ---</option>
                                        <?php
                                        $obj->select_unit('%%','0');
                                            foreach($resultunit as $rowunit){
                                        ?>
                                        <option value="<?php echo $rowunit['unit_id'] ?>">
                                            <?php echo $rowunit['unit_name'] ?>
                                        </option>
                                        <?php
                                           }
                                           mysqli_free_result($resultunit);  
                                           mysqli_next_result($conn);
                                        ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຍີ່ຫໍ້ສິນຄ້າ</label>
                                    <select name="brand_id_update" id="brand_id_update">
                                        <option value="" disabled selected>--- ເລືອກຍີ່ຫໍ້ສິນຄ້າ ---</option>
                                        <?php
                                        $obj->select_brand('%%','0');
                                            foreach($resultbrand as $brand){
                                        ?>
                                        <option value="<?php echo $brand['brand_id'] ?>">
                                            <?php echo $brand['brand_name'] ?>
                                        </option>
                                        <?php
                                           }
                                           mysqli_free_result($resultbrand);  
                                           mysqli_next_result($conn);
                                        ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເງື່ອນໄຂການສັ່ງຊື້</label>
                                    <input type="number" min="0" name="qtyalert_update" id="qtyalert_update"
                                        placeholder="ເງື່ອນໄຂການສັ່ງຊື້" class="form-control">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຮູບພາບສິນຄ້າ</label>
                                    <input type="file" name="img_path" id="img_path"
                                        placeholder="ຮູບພາບສິນຄ້າ" onchange="loadFile2(event)" class="form-control">
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
    </div>
</div>
<div class="clearfix"></div><br>
<div id="result">result</div>

</div>



<form action="products" id="formDelete" method="POST" enctype="multipart/form-data">
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
const unit_id = document.getElementById('unit_id');
const brand_id = document.getElementById('brand_id');
const cate_id = document.getElementById('cate_id');
const qtyalert = document.getElementById('qtyalert');
myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const codeValue = code.value.trim();
    const pro_nameValue = pro_name.value.trim();
    const unit_idValue = unit_id.value.trim();
    const brand_idValue = brand_id.value.trim();
    const cate_idValue = cate_id.value.trim();
    const qtyalertValue = qtyalert.value.trim();


    if (codeValue === '') {
        setErrorFor(code, 'ກະລຸນາປ້ອນລະຫັດສິນຄ້າ');
    } else {
        setSuccessFor(code);
    }
    if (pro_nameValue === '') {
        setErrorFor(pro_name, 'ກະລຸນາປ້ອນຊື່ສິນຄ້າ');
    } else {
        setSuccessFor(pro_name);
    }
    if (unit_idValue === '') {
        setErrorFor(unit_id, 'ກະລຸນາເລືອກຫົວໜ່ວຍສິນຄ້າ');
    } else {
        setSuccessFor(unit_id);
    }
    if (cate_idValue === '') {
        setErrorFor(cate_id, 'ກະລຸນາເລືອກປະເພດສິນຄ້າ');
    } else {
        setSuccessFor(cate_id);
    }
    if (brand_idValue === '') {
        setErrorFor(brand_id, 'ກະລຸນາເລືອກຍີ່ຫໍ້ສິນຄ້າ');
    } else {
        setSuccessFor(brand_id);
    }
    if (qtyalertValue === '') {
        setErrorFor(qtyalert, 'ກະລຸນາປ້ອນເງື່ອນໄຂການສັ່ງຊື້');
    } else {
        setSuccessFor(qtyalert);
    }
    if (codeValue !== '' && unit_idValue !== '' && cate_idValue !== '' && brand_idValue !== '' && pro_nameValue !== '' && qtyalertValue !== '') {
        document.getElementById("form1").action = "products";
        document.getElementById("form1").submit();
    }
}
</script>

<script type="text/javascript">
const myformUpdate = document.getElementById('formUpdate');
const code_update = document.getElementById('code_update');
const pro_name_update = document.getElementById('pro_name_update');
const unit_id_update = document.getElementById('unit_id_update');
const brand_id_update = document.getElementById('brand_id_update');
const cate_id_update = document.getElementById('cate_id_update');
const qtyalert_update = document.getElementById('qtyalert_update');
myformUpdate.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputsUpdate();
});

function checkInputsUpdate() {
    const code_updateValue = code_update.value.trim();
    const pro_name_updateValue = pro_name_update.value.trim();
    const unit_id_updateValue = unit_id_update.value.trim();
    const brand_id_updateValue = brand_id_update.value.trim();
    const cate_id_updateValue = cate_id_update.value.trim();
    const qtyalert_updateValue = qtyalert_update.value.trim();
    if (code_updateValue === '') {
        setErrorFor(code_update, 'ກະລຸນາປ້ອນລະຫັດສິນຄ້າ');
    } else {
        setSuccessFor(code_update);
    }
    if (pro_name_updateValue === '') {
        setErrorFor(pro_name_update, 'ກະລຸນາປ້ອນຊື່ສິນຄ້າ');
    } else {
        setSuccessFor(pro_name_update);
    }
    if (unit_id_updateValue === '') {
        setErrorFor(unit_id_update, 'ກະລຸນາເລືອກຫົວໜ່ວຍສິນຄ້າ');
    } else {
        setSuccessFor(unit_id_update);
    }
    if (cate_id_updateValue === '') {
        setErrorFor(cate_id_update, 'ກະລຸນາເລືອກປະເພດສິນຄ້າ');
    } else {
        setSuccessFor(cate_id_update);
    }
    if (brand_id_updateValue === '') {
        setErrorFor(brand_id_update, 'ກະລຸນາເລືອກຍີ່ຫໍ້ສິນຄ້າ');
    } else {
        setSuccessFor(brand_id_update);
    }
    if (qtyalert_updateValue === '') {
        setErrorFor(qtyalert_update, 'ກະລຸນາປ້ອນເງື່ອນໄຂການສັ່ງຊື້');
    } else {
        setSuccessFor(qtyalert_update);
    }
    if (code_updateValue !== '' && unit_id_updateValue !== '' && cate_id_updateValue !== '' && brand_id_updateValue !== '' && pro_name_updateValue !== '' && qtyalert_updateValue !== '') {
        document.getElementById("formUpdate").action = "products";
        document.getElementById("formUpdate").submit();
    }
}
</script>

<!-- sweetalert -->
<?php
  // check if code exist
  if(isset($_GET['code'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດສິນຄ້ານີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດອື່ນທີ່ແຕກຕ່າງ !!", "info");
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
  // check if code_update exist
  if(isset($_GET['code_update'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດສິນຄ້ານີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດອື່ນທີ່ແຕກຕ່າງ !!", "info");
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
  // check if product code exist in stock
  if(isset($_GET['stock'])=='warning'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນສິນຄ້ານີ້ໄ້ດເນື່ອງຈາກລະຫັດສິນຄ້ານີ້ເຄີຍໝູນໃຊ້ໃນຂໍ້ມູນສະຕ໋ອກສິນຄ້າ", "error");
    </script>';
  }
  // check if product code exist in formDetails
  if(isset($_GET['formdetails'])=='warning'){
     echo'<script type="text/javascript">
     swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນສິນຄ້ານີ້ໄ້ດເນື່ອງຈາກລະຫັດສິນຄ້ານີ້ເຄີຍໝູນໃຊ້ໃນຂໍ້ມູນລາຍລະອຽດຟອມເບີກ", "error");
     </script>';
    }
// check if product code exist in distribute
    if(isset($_GET['dist'])=='warning'){
        echo'<script type="text/javascript">
        swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນສິນຄ້ານີ້ໄ້ດເນື່ອງຈາກລະຫັດສິນຄ້ານີ້ເຄີຍໝູນໃຊ້ໃນຂໍ້ມູນລາຍເບີກຈ່າຍສິນຄ້າ", "error");
        </script>';
    }
    // check if product code exist in product putback stock
  if(isset($_GET['pps'])=='warning'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນສິນຄ້ານີ້ໄ້ດເນື່ອງຈາກລະຫັດສິນຄ້ານີ້ເຄີຍໝູນໃຊ້ໃນຂໍ້ມູນນຳສິນຄ້າກັບຄືນ", "error");
    </script>';
  }
    // check if product code exist in check stock
    if(isset($_GET['check'])=='warning'){
        echo'<script type="text/javascript">
        swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນສິນຄ້ານີ້ໄ້ດເນື່ອງຈາກລະຫັດສິນຄ້ານີ້ເຄີຍໝູນໃຊ້ໃນຂໍ້ມູນນັບສະຕ໋ອກ", "error");
        </script>';
      }  
    // check if product code exist in spare parts
    if(isset($_GET['spare'])=='warning'){
        echo'<script type="text/javascript">
        swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນສິນຄ້ານີ້ໄ້ດເນື່ອງຈາກລະຫັດສິນຄ້ານີ້ເຄີຍໝູນໃຊ້ໃນຂໍ້ມູນປ່ຽນອາໄຫຼ່ສິນຄ້າ", "error");
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

$(document).ready(function() {

    load_data('%%','0');

    function load_data(query, page) {
        $.ajax({
            url: "fetch_product.php",
            method: "POST",
            data: {
                query: query,
                page: page
            },
            success: function(data) {
                $('#result').html(data);
            }
        });
    }
    $('#search').keyup(function() {
        var page = "0";
        var search = $(this).val();
        if (search != '') {
            load_data(search, page);
        } else {
            load_data('%%', page);
        }
    });
    $(document).on('click', '.page-links', function() {
        var page = this.id;
        console.log(page);
        var search = $('#search').val();
        if (search != '') {
            load_data(search, page);
        } else {
            load_data('%%', page);
        }
    });
});
</script>


<?php
    include ("../../header-footer/footer.php");
  ?>