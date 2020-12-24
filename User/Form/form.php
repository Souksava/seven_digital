<?php
  $title = "ສ້າງຟອມ";
  $path = "../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
  include (''.$path.'oop/obj.php');
?>

<div style="width: 100%;">
    <b>ລາຍການຟອມ</b>&nbsp <img src="<?php echo $path ?>icon/hidemenu.ico" width="10px">
</div>
<br>
<div class="row">
    <div class="col-md-7">
        <div id="result"></div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h5 align="center" class="card-title"></h5>
                <p class="card-text">
                <form action="form" id="form2" method="POST">
                    <div>
                        ເລກທີຟອມເບີກ: 1
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-control2">
                                <select name="cus_id" id="cus_id" class="selectcenter">
                                    <option value="" disabled selected>--- ເລືອກລູກຄ້າ ---</option>
                                    <option value="a"> A</option>
                                    <option value="b"> B</option>
                                </select>
                                <i class="fas fa-check-circle "></i>
                                <i class="fas fa-exclamation-circle "></i>
                                <small class="">Error message</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-control2">
                                <input type="text" name="packing" id="packing" placeholder="Packing No">
                                <i class="fas fa-check-circle "></i>
                                <i class="fas fa-exclamation-circle "></i>
                                <small class="">Error message</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div align="center-right">
                                <button type="button" name="btnAdd" class="btn btn-outline-success btn-block"
                                    data-toggle="modal" data-target="#exampleModal2"
                                    style="padding: 8px 0px 8px 0px">ບັນທຶກຟອມ</button>
                                <div class="modal fade font14" id="exampleModal2" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body" align="center">
                                                ທ່ານຕ້ອງການຈະບັນທຶກຂໍ້ມູນຟອມເຂົ້າໃນລະບົບ ຫຼື ບໍ່ ?
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
                    </div>

                    <div class="table-responsive2" style="text-align: center;">
                        <table class="table font12" style="width: 700px">
                            <tr>
                                <th style="width: 50px">ສິນຄ້າ</th>
                                <th style="width: 150px">ລະຫັດສິນຄ້າ</th>
                                <th>ຊື່ສິນຄ້າ</th>
                                <th>ລຸ້ນເຄື່ອງຂອງສິນຄ້າ</th>
                                <th style="width: 50px">ຈຳນວນ</th>

                                <th style="width: 30px"></th>
                            </tr>
                            <tr>
                                <td>
                                    <a href="../../image/logo.png" target="_blank">
                                        <img src="../../image/logo.png" class="img-circle elevation-2" alt=""
                                            width="30px">
                                    </a>
                                </td>
                                <td style="display:none">1</td>
                                <td>12345678</td>
                                <td>FUJI</td>
                                <td>SF235SGW2</td>
                                <td>30</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                                        class="fa fa-trash toolcolor btnDelete_form"></a>&nbsp; &nbsp;
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12" align="right">
                        <br>
                        <h4 style="color: #CE3131;"> 99 ລາຍການ</h4>
                    </div>
                </form>
                </p>
            </div>
        </div>
    </div>
</div>


<!-- modal form delete -->
<form action="form" id="formDelete" method="POST" enctype="multipart/form-data">
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

<!-- modal form add -->
<form action="form" id="formUpdate" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ເພີ່ມຂໍ້ມູນສ້າງຟອມ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" align="left">
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຮູບສິນຄ້າ</label>
                            <div class="col-md-12 col-sm-6 form-control2">
                                <img src="../../image/camera.jpg" id="output2" width="100%" height="250">
                            </div>
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                        <div class="col-md-12 col-sm-6 form-control2">
                            <label>ຈຳນວນ</label>
                            <input type="hidden" name="pro_id" id="pro_id" >
                            <input type="number" min="1" name="qty" id="qty" placeholder="ຈຳນວນ">
                            <i class="fas fa-check-circle "></i>
                            <i class="fas fa-exclamation-circle "></i>
                            <small class="">Error message</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                    <button type="submit" name="btnUpdate" id="Update" class="btn btn-outline-success"
                        onclick="">ເພີ່ມ</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- check form input not null -->
<script type="text/javascript">
const myform = document.getElementById('formUpdate');
const qty = document.getElementById('qty');

myform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const qtyValue = qty.value.trim();
    if (qtyValue === '') {
        setErrorFor(qty, 'ກະລຸນາປ້ອນຈຳນວນ');
    } else {
        setSuccessFor(qty);
    }
    if (qtyValue !== '') {
        document.getElementById("formUpdate").action = "form";
        document.getElementById("formUpdate").submit();
    }
}
const getform = document.getElementById('form2');
const cus_id = document.getElementById('cus_id');
const packing = document.getElementById('packing');
getform.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs2();
});

function checkInputs2() {
    const cus_idValue = cus_id.value.trim();
    const packingValue = packing.value.trim();
    if (cus_idValue === '') {
        setErrorFor(cus_id, 'ກະລຸນາປ້ອນລູກຄ້າ');
    } else {
        setSuccessFor(cus_id);
    }
    if (packingValue === '') {
        setErrorFor(packing, 'ກະລຸນາປ້ອນ Packing No');
    } else {
        setSuccessFor(packing);
    }
    if (cus_idValue !== '' && packingValue !== '') {
        document.getElementById("form2").action = "form";
        document.getElementById("form2").submit();
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

<script>
$(document).ready(function() {

    load_data();

    function load_data(query, page) {
        $.ajax({
            url: "fetch_form.php",
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


<!-- /.content-wrapper -->
<br>
<?php
    include ("../../header-footer/footer.php");
  ?>