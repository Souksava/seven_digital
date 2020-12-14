<?php
  $title = "ຂໍ້ມູນຜູ້ສະໜອງ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
  include (''.$path.'oop/obj.php');
  
?>
<div style="width: 100%;">
    <div style="width: 48%; float: left;">
        <b><?php echo $title ?></b>&nbsp <img src="../../icon/hidemenu.ico" width="10px">
    </div>
    <div style="width: 46%; float: right;" align="right">
        <form action="supplier" id="form1" method="POST" enctype="multipart/form-data">
            <a href="#" data-toggle="modal" data-target="#exampleModalsupplier">
                <img src="../../icon/add.ico" alt="" width="25px">
            </a>
            <div class="modal fade" id="exampleModalsupplier" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນຜູ້ສະໜອງ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ລະຫັດຜູ້ສະໜອງ</label>
                                    <input type="text" name="sup_id" id="sup_id" placeholder="ລະຫັດຜູ້ສະໜອງ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ບໍ່ລິສັດ</label>
                                    <input type="text" name="company" id="company" placeholder="ຊື່ບໍ່ລິສັດ">
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
                                    <label>ເບີແຟັກ</label>
                                    <input type="text" name="fax" id="fax" placeholder="ເບີແຟັກ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ທີ່ຕັ້ງບໍລິສັດ</label>
                                    <textarea name="address" id="address" cols="3" rows="3"
                                        placeholder="ທີ່ຕັ້ງບໍລິສັດ"></textarea>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ທີ່ຢູ່ອີເມວ</label>
                                    <input type="text" name="email" id="email" placeholder="ທີ່ຢູ່ອີເມວ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຮູບພາບ</label>
                                    <input type="file" name="img_path" id="img_path" onchange="loadFile(event)">
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



        <form action="supplier.php" id="formUpdate" method="POST" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ແກ້ໄຂຂໍ້ມູນຜູ້ສະໜອງ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row" align="left">
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຊື່ບໍລິສັດ</label>
                                    <input type="hidden" name="sup_id_update" id="sup_id_update"
                                        placeholder="ລະຫັດຜູ້ສະໜອງ">
                                    <input type="text" name="company_update" id="company_update"
                                        placeholder="ຊື່ຊື່ບໍລິສັດ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເບີໂທລະສັບ</label>
                                    <input type="text" name="tel_update" id="tel_update" placeholder="ເບີໂທລະສັບ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ເບີແຟັກ</label>
                                    <input type="text" name="fax_update" id="fax_update" placeholder="ເບີແຟັກ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ທີ່ຢູ່ປັດຈຸບັນ</label>
                                    <textarea name="address_update" id="address_update" cols="3" rows="3"
                                        placeholder="ທີ່ຢູ່ປັດຈຸບັນ"></textarea>
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ທີ່ຢູ່ອີເມວ</label>
                                    <input type="text" name="email_update" id="email_update" placeholder="ທີ່ຢູ່ອີເມວ">
                                    <i class="fas fa-check-circle "></i>
                                    <i class="fas fa-exclamation-circle "></i>
                                    <small class="">Error message</small>
                                </div>
                                <div class="col-md-12 col-sm-6 form-control2">
                                    <label>ຮູບພາບ</label>
                                    <input type="file" name="img_path_update" id="img_path_update"
                                        onchange="loadFile2(event)">
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
    <?php
  $obj->select_supplier("%".$_POST['search']."%",'0');
  $output = '';
  if(mysqli_num_rows($resultsupplier) > 0){
    $output .= '
    <div class="table-responsive">
    <table class="table font12" style="width: 1500px;">
        <tr>
            <th>ລະຫັດຜູ້ໜອງ</th>
            <th>ຊື່ບໍ່ລິສັດ</th>
            <th>ເບີໂທລະສັບ</th>
            <th>ເບີແຟັກ</th>
            <th>ທີ່ຢູ່ປັດຈຸບັນ</th>
            <th>ທີ່ຢູ່ອີເມວ</th>
            <th>ຮູບພາບ</th>
            <th></th>

        </tr>
    ';
    foreach($resultsupplier as $row){
    $output .='
        <tr>
            <td>'.$row["sup_id"].'</td>
            <td>'.$row["company"].'</td>
            <td>'.$row["tel"].'</td>
            <td>'.$row["fax"].'</td>
            <td>'.$row["address"].'</td>
            <td>'.$row["email"].'</td>
            <td style="display:none;">'.$path.''.$row['img_path'].'</td>
            <td>
                <a href="../../image/image.jpeg" target="_blank">
                    <img src="../../image/image.jpeg" class="img-circle elevation-2" alt="" width="30px">
                </a>

            </td>
            <td>
                <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-pen toolcolor btnUpdate_sup"></a>&nbsp; &nbsp;
                <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                    class="fa fa-trash toolcolor btnDelete_sup"></a>
            </td>
        </tr>
        ';
        }
        $output .='
    </table>
</div>
    ';
    echo $output;
  }
  else{
      echo "No Data";
  }
    ?>
<!-- </div> -->
<!-- <div class="table-responsive">
    <table class="table font12" style="width: 1500px;">
        <tr>
            <th>ລະຫັດຜູ້ໜອງ</th>
            <th>ຊື່ບໍ່ລິສັດ</th>
            <th>ເບີໂທລະສັບ</th>
            <th>ເບີແຟັກ</th>
            <th>ທີ່ຢູ່ປັດຈຸບັນ</th>
            <th>ທີ່ຢູ່ອີເມວ</th>
            <th>ຮູບພາບ</th>
            <th></th>

        </tr>
        <tr>
            <td>1</td>
            <td>a</td>
            <td>b</td>
            <td>c</td>
            <td>d</td>
            <td>e@gmail.com</td>
            <td style="display:none;">../../image/image.jpeg</td>
            <td>
                <a href="../../image/image.jpeg" target="_blank">
                    <img src="../../image/image.jpeg" class="img-circle elevation-2" alt="" width="30px">
                </a>

            </td>
            <td>
                <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-pen toolcolor btnUpdate_sup"></a>&nbsp; &nbsp;
                <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                    class="fa fa-trash toolcolor btnDelete_sup"></a>
            </td>
        </tr>
    </table>
</div> -->

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

<form action="supplier.php" id="formDelete" method="POST" enctype="multipart/form-data">
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
const sup_id = document.getElementById('sup_id');
const company = document.getElementById('company');
const tel = document.getElementById('tel');
myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const sup_idValue = sup_id.value.trim();
    const companyValue = company.value.trim();
    const telValue = tel.value.trim();

    if (sup_idValue === '') {
        setErrorFor(sup_id, 'ກະລຸນາປ້ອນລະຫັດຜູ້ສະໜອງ');
    } else {
        setSuccessFor(sup_id);
    }
    if (companyValue === '') {
        setErrorFor(company, 'ກະລຸນາປ້ອນຊື່ບໍລິສັດ');
    } else {
        setSuccessFor(company);
    }

    if (telValue === '') {
        setErrorFor(tel, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
    } else {
        setSuccessFor(tel);
    }
    if (companyValue !== '' && telValue !== '' && sup_idValue !== '') {
        document.getElementById("form1").action = "supplier.php";
        document.getElementById("form1").submit();
    }
}
</script>

<script type="text/javascript">
const myformUpdate = document.getElementById('formUpdate');
const sup_id_update = document.getElementById('sup_id_update');
const company_update = document.getElementById('company_update');
const tel_update = document.getElementById('tel_update');
myformUpdate.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputsUpdate();
});

function checkInputsUpdate() {
    const company_updateValue = company_update.value.trim();
    const tel_updateValue = tel_update.value.trim();
    if (company_updateValue === '') {
        setErrorFor(company_update, 'ກະລຸນາປ້ອນຊື່ຜູ້ສະໜອງ');
    } else {
        setSuccessFor(company_update);
    }
    if (tel_updateValue === '') {
        setErrorFor(tel_update, 'ກະລຸນາປ້ອນເບີໂທລະສັບ');
    } else {
        setSuccessFor(tel_update);
    }
    if (company_updateValue !== '' && tel_updateValue !== '' && sup_id_updateValue !== '') {
        document.getElementById("formUpdate").action = "supplier.php";
        document.getElementById("formUpdate").submit();
    }
}
</script>

<!-- sweetalert -->
<?php
  // check if sup_id exist
  if(isset($_GET['id'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກລະຫັດຕຳແໜ່ງນີ້ມີແລ້ວ ກະລຸນາໃສ່ລະຫັດອື່ນທີ່ແຕກຕ່າງ !!", "info");
    </script>';
  }
    // check if company exist
    if(isset($_GET['company'])=='same'){
      echo'<script type="text/javascript">
      swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກຊື່ບໍ່ລິສັດນີ້ມີແລ້ວ ກະລຸນາໃສ່ຊື່ບໍ່ລິສັດທີ່ແຕກຕ່າງ !!", "info");
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
  //check if company_update exist
  if(isset($_GET['company_update'])=='same'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດເພີ່ມຂໍ້ມູນໄດ້ເນື່ອງຈາກຊື່ບໍ່ລິສັດນີ້ມີແລ້ວ ກະລຸນາໃສ່ຊື່ບໍ່ລິສັດທີ່ແຕກຕ່າງ !!", "info");
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
  // check if sup_id exist in stocks
  if(isset($_GET['delete'])=='warning'){
    echo'<script type="text/javascript">
    swal("", "ບໍ່ສາມາດລົບຂໍ້ມູນຜູ້ສະໜອງນີ້ໄ້ດເນື່ອງຈາກລະຫັດຜູ້ສະໜອງນີ້ເຄີຍໝູນໃຊ້ໃນຂໍ້ມູນນັບສະຕ໋ອກ", "error");
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

<!-- script preview image before upload -->
<script>
// var loadFile = function(event) {
//     var output = document.getElementById('output');
//     output.src = URL.createObjectURL(event.target.files[0]);
//     output.onload = function() {
//         URL.revokeObjectURL(output.src) // free memory
//     }
// };
// var loadFile2 = function(event) {
//     var output2 = document.getElementById('output2');
//     output2.src = URL.createObjectURL(event.target.files[0]);
//     output2.onload = function() {
//         URL.revokeObjectURL(output2.src) // free memory
//     }
// };
$(document).ready(function(){
    $('#search_text').keyup(function(){
        var txt = $(this).val();
        if(txt != ''){
            $.ajax({
                url:"supplier.php",
                method="post",
                data:{search:txt},
                dataType:"text",
                success:fun ction(data){
                    $('#result').html(data);
                }
            });
        }
        else{
            $('#result').html('');
            $.ajax({
                url:"supplier.php",
                method="post",
                data:{search:txt},
                dataType:"text",
                success:function(data){
                    $('#result').html(data);
                }
            });
        }
    });
});
</script>