<?php
  $title = "ລາຍງານພະນັກງານ";
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

    <button type="button" class="btn btn-sm btn-primary">Word </button>
    <button type="button" class="btn btn-sm btn-success">Excel</button>
    <button type="button" class="btn btn-sm btn-danger"> &nbsp; PDF &nbsp;</button> <br><br>
    </div>


</div>

<div class="clearfix">
<!-- button search report -->
<form class="form-inline ml-3">
    <div class="input-group input-group-sm">                                         
        <input class="form-control form-control-navbar" type="search" placeholder="ຄົ້ນຫາ" aria-label="Search" >  
        <div class="input-group-append"> 
        <button type="button" class="btn btn-sm btn-outline-warning">&nbsp;&nbsp; ສະແດງລາຍການ &nbsp;&nbsp;</button>
        </div>
    </div>
</form>
</div><br>

<div class="table-responsive">



    <table class="table font12" style="width: 1500px;">

        <tr>
            <th>ລະຫັດ</th>
            <th>ຊື່ພະນັກງານ</th>
            <th>ນາມສະກຸນ</th>
            <th>ເພດ</th>
            <th>ເບີໂທລະສັບ</th>
            <th>ທີ່ຢູ່ປັດຈຸບັນ</th>
            <th>ຕຳແໜ່ງ</th>
            <th>ທີ່ຢູ່ອີເມວ</th>
            <th>ລະຫັດຜູ້ໃຊ້ລະບົບ</th>
            <th>ສິດຂົ້າໃຊ້ລະບົບ</th>
            <th>ຮູບພາບ</th>
        </tr>
        <tr>
            <td>E001</td>
            <td>ສຸກສະຫວັດ</td>
            <td>ພົງພະໂຍສິດ</td>
            <td>ຊາຍ</td>
            <td>+856 20 5509 9269</td>
            <td>ບ້ານ ດົງປ່າແລບ ເມືອງ ຈັນທະບູລີ ນະຄອນຫຼວງວຽງຈັນ</td>
            <td style="display:none;">001</td>
            <td>ໄອທີ</td>
            <td>Souksavath@sevendigital.com</td>
            <td>D23dSDf24f23fsnfls</td>
            <td style="display:none;">0001</td>
            <td>ຜູ້ເບີກສິນຄ້າ</td>
            <td style="display:none;">../../image/logo.png</td>
            <td>

                <a href="../../image/image.jpeg" target="_blank">
                    <img src="../../image/image.jpeg" class="img-circle elevation-2" alt="" width="30px">
                </a>

            </td>

        </tr>
        <tr>
            <td>E001</td>
            <td>ສຸກສະຫວັດ</td>
            <td>ພົງພະໂຍສິດ</td>
            <td>ຊາຍ</td>
            <td>+856 20 5509 9269</td>
            <td>ບ້ານ ດົງປ່າແລບ ເມືອງ ຈັນທະບູລີ ນະຄອນຫຼວງວຽງຈັນ</td>
            <td style="display:none;">001</td>
            <td>ໄອທີ</td>
            <td>Souksavath@sevendigital.com</td>
            <td>D23dSDf24f23fsnfls</td>
            <td style="display:none;">0001</td>
            <td>ຜູ້ເບີກສິນຄ້າ</td>
            <td style="display:none;">../../image/logo.png</td>
            <td>

                <a href="../../image/image.jpeg" target="_blank">
                    <img src="../../image/image.jpeg" class="img-circle elevation-2" alt="" width="30px">
                </a>

            </td>

        </tr>
    </table>
</div>

<!-- pagination -->
<nav aria-label="Page navigation example">
<ul class="pagination">
<?php 

?>
    <li class="page-item"><button class="page-link" href="#">ກັບຄືນ</button></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><button class="page-link" href="#">ຕໍ່ໄປ</button></li>
  </ul>
</nav>

</div>




<?php
    include ("../../header-footer/footer.php");
  ?>

