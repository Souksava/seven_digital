<?php
  $title = "ຂໍ້ມູນພະນັກງານ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
  include (''.$path.'oop/obj.php');

  if(isset($_POST['btnDelete'])){
    $obj->delete_customer(trim($_POST['id']));
  }
  if(isset($_POST['cus_id'])){
    $obj->insert_customer(trim($_POST['cus_id']),trim($_POST['company']),trim($_POST['tel']),trim($_POST['email']),trim($_POST['address']),trim($_POST['stt_id']));
  }
  if(isset($_POST['cus_id_update'])){
    $obj->update_customer(trim($_POST['cus_id_update']),trim($_POST['company_update']),trim($_POST['tel_update']),trim($_POST['email_update']),trim($_POST['address_update']),trim($_POST['stt_id_update']));
  }
?>
<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b>ລາຍການລູກຄ້າ</b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="customer.php" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalcustomer">

                <img src="../../icon/add.ico" alt="" width="25px">

            </a>

            <div class="modal fade" id="exampleModalcustomer" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນລູກຄ້າ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດລູກຄ້າ</label>
                                    <input type="text" name="cus_id" id="cus_id" placeholder="ລະຫັດລູກຄ້າ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ບໍລີສັດ</label>
                                    <input type="text" name="company" id="company" placeholder="ຊື່ບໍລີສັດ">
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
                                    <label>ທີ່ຢູ່ປັດຈຸບັນ</label>
                                    <input type="text" name="address" id="address" placeholder="ທີ່ຢູ່ປັດຈຸບັນ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ອີເມວ</label>
                                    <input type="text" name="email" id="email" placeholder="ອີເມວ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ສະຖານະລູກຄ້າ</label>
                                    <select name="stt_id" id="stt_id">
                                        <option value="" disabled selected>--- ເລືອກສະຖານະລູກຄ້າ ---</option>
                                        <?php
                                        $obj->select_customer_status('%%','0');
                                            foreach($result_customer_status as $row2){
                                        ?>
                                        <option value="<?php echo $row2['stt_id'] ?>"><?php echo $row2['stt_name'] ?>
                                        </option>
                                        <?php
                                           }
                                           mysqli_free_result($result_customer_status);  
                                           mysqli_next_result($conn);
                                        ?>
                                    </select>
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
        <br>
        <form action="customer" id="formUpdate" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນລູກຄ້າ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ພະນັກງານ</label>
                                    <input type="hidden" name="emp_id2" id="emp_id2" placeholder="ລະຫັດພະນັກງານ">
                                    <input type="text" name="emp_name2" id="emp_name2" placeholder="ຊື່ພະນັກງານ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ນາມສະກຸນ</label>
                                    <input type="text" name="emp_surname2" id="emp_surname2" placeholder="ນາມສະກຸນ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເພດ</label>
                                    <select name="gender2" id="gender2">
                                        <option value="">--- ເລືອກເພດ ---</option>
                                        <option value="ຍິງ">ຍິງ</option>
                                        <option value="ຊາຍ">ຊາຍ</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຕຳແໜ່ງ</label>
                                    <select name="auther_id2" id="auther_id2">
                                        <option value="">--- ເລືອກຕຳແໜ່ງ ---</option>
                                        <?php
                                        $obj->select_auther('%%','0');
                                        // $resultauther = mysqli_query($conn,"select * from auther order by auther_name asc;"); 
                                        // while($rows = mysqli_fetch_array($resultauther)){
                                        foreach($resultauther as $rows){
                                        ?>
                                        <option value="<?php echo $rows['auther_id'] ?>">
                                            <?php echo $rows['auther_name'] ?></option>
                                        <?php
                                           }
                                           mysqli_free_result($resultauther);  
                                            mysqli_next_result($conn);
                                        ?>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ທີ່ຢູ່ປັດຈຸບັນ</label>
                                    <textarea name="address2" id="address2" cols="3" rows="3"
                                        placeholder="ທີ່ຢູ່ປັດຈຸບັນ"></textarea>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເບີໂທລະສັບ</label>
                                    <input type="text" name="tel2" id="tel2" placeholder="ເບີໂທລະສັບ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ທີ່ຢູ່ອີເມວ</label>
                                    <input type="text" name="email2" id="email2" placeholder="ທີ່ຢູ່ອີເມວ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດຜູ້ໃຊ້ລະບົບ</label>
                                    <input type="password" name="password2" id="password2"
                                        placeholder="ລະຫັດຜູ້ໃຊ້ລະບົບ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຢືນຢັນລະຫັດ</label>
                                    <input type="password" name="password_cf2" id="password_cf2"
                                        placeholder="ຢືນຢັນລະຫັດ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ສິດໃນການເຂົ້າໃຊ້ລະບົບ</label>
                                    <select name="status2" id="status2">
                                        <option value="">--- ເລືອກສິດໃນການເຂົ້າໃຊ້ລະບົບ ---</option>
                                        <option value="1">ຜູ້ຈັດການ</option>
                                        <option value="2">ຜູ້ນັບສະຕ໋ອກ</option>
                                    </select>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຮູບພາບ</label>
                                    <input type="file" name="img_path" id="img_path2" onchange="loadFile2(event)">
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

<div id="result"></div>
<div class="clearfix"></div><br>

<!-- <div class="table-responsive">
      <table class="table font12" style="width: 1500px;">
        <tr>
            <th>ລະຫັດສະຖານະລູກຄ້າ</th>
            <th>ຊື່ສະຖານະລູກຄ້າ</th>
            <th>ລະຫັດສະຖານະລູກຄ້າ</th>
            <th>ຊື່ສະຖານະລູກຄ້າ</th>
            <th>ລະຫັດສະຖານະລູກຄ້າ</th>
            <th>ຊື່ສະຖານະລູກຄ້າ</th>
            <th></th>

        </tr>
        <tr>
            <td>1</td>
            <td>c</td>
            <td>1</td>
            <td>c</td>
            <td>1</td>
            <td>c</td>
            <td>
            <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_cust"></a>&nbsp; &nbsp; 
              <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_cust"></a>
            </td>
        </tr>
      </table>
    </div> -->




</div>

<form action="employee" id="formDelete" method="POST" enctype="multipart/form-data">
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
                    <input type="" name="id" id="id">
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
const cus_id = document.getElementById('cus_id');
const company = document.getElementById('company');
const tel = document.getElementById('tel');
const stt_id = document.getElementById('stt_id');
myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const cus_idValue = cus_id.value.trim();
    const companyValue = company.value.trim();
    const telValue = tel.value.trim();
    const stt_idValue = stt_id.value.trim();

    if (cus_idValue === '') {
        setErrorFor(cus_id, 'ກະລຸນາປ້ອນລະຫັດລູກຄ້າ');
    } else {
        setSuccessFor(cus_id);
    }
    if (companyValue === '') {
        setErrorFor(company, 'ກະລຸນາປ້ອນຊື່ລູກຄ້າ');
    } else {
        setSuccessFor(company);
    }
    if (telValue === '') {
        setErrorFor(tel, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
    } else {
        setSuccessFor(tel);
    }
    if (stt_idValue === '') {
        setErrorFor(stt_id, 'ກະລຸນາປ້ອນລະຫັດສະຖານະລູກຄ້າ');
    } else {
        setSuccessFor(stt_id);
    }
    if (cus_idValue !== '' && companyValue !== '' && telValue !== '' && stt_idValue !== '') {
        document.getElementById("form1").action = "customer";
        document.getElementById("form1").submit();
    }
}
</script>

<script type="text/javascript">
const myformUpdate = document.getElementById('formUpdate');
const cus_id_update = document.getElementById('cus_id_update');
const company_update = document.getElementById('company_update');
const tel_update = document.getElementById('tel_update');
const stt_id_update = document.getElementById('stt_id_update');
myformUpdate.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputsUpdate();
});

function checkInputsUpdate() {
    const cus_id_updateValue = cus_id_update.value.trim();
    const company_updateValue = company_update.value.trim();
    const tel_updateValue = tel_update.value.trim();
    const stt_id_updateValue = stt_id_update.value.trim();


    if (company_updateValue === '') {
        setErrorFor(company_update, 'ກະລຸນາປ້ອນຊື່ລູກຄ້າ');
    } else {
        setSuccessFor(company_update);
    }
    if (tel_updateValue === '') {
        setErrorFor(tel_update, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
    } else {
        setSuccessFor(tel_update);
    }
    if (stt_id_updateValue === '') {
        setErrorFor(stt_id_update, 'ກະລຸນາປ້ອນລະຫັດສະຖານະລູກຄ້າ');
    } else {
        setSuccessFor(stt_id_update);
    }
    if (cus_id_updateValue !== '' && company_updateValue !== '' && tel_updateValue !== '' && stt_id_updateValue !==
        '') {
        document.getElementById("formUpdate").action = "customer";
        document.getElementById("formUpdate").submit();
    }
}
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
</script>

<!-- sweetalert -->
<?php
  // check if cus_id exist
  if(isset($_GET['id'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດສະຖານະລູກຄ້ານີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດອື່ນທີ່ແຕກຕ່າງ !!", "info");
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
  // check if customer_id exist in form
  if(isset($_GET['delete'])=='warning'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນຜູ້ສະໜອງນີ້ໄ້ດເນື່ອງຈາກລະຫັດລູກຄ້ານີ້ເຄີຍໝູນໃຊ້ໃນຂໍ້ມູນຟອມເບີກສິນຄ້າ", "error");
    </script>';
  }
    // check if customer_id exist in distribute
    if(isset($_GET['delete'])=='warning'){
      echo'<script type="text/javascript">
      swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນຜູ້ສະໜອງນີ້ໄ້ດເນື່ອງຈາກລະຫັດລູກຄ້ານີ້ເຄີຍໝູນໃຊ້ໃນຂໍ້ມູນຟອມເບີກສິນຄ້າ", "error");
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

<script>
$(document).ready(function() {

    load_data();

    function load_data(query, page) {
        $.ajax({
            url: "fetch_employee.php",
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