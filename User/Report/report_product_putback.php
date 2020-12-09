<?php
  $title = "ລາຍງານສິນຄ້າເບີກຈ່າຍແລ້ວນຳກັບເຂົ້າສາງຄືນ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php")
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
        <input class="form-control form-control-navbar" type="date" aria-label="Search">
        <input class="form-control form-control-navbar" type="date"aria-label="Search">
            <input class="form-control form-control-navbar" type="search" placeholder="ຄົ້ນຫາ" aria-label="Search">
            <div class="input-group-append">
                <button type="button" class="btn btn-sm btn-outline-warning">&nbsp;&nbsp; ສະແດງລາຍການ
                    &nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</div><br>

<div class="table-responsive">



    <table class="table font12" style="width: 1500px;">

        <tr>
            <th>ລະຫັດສິນຄ້າ</th>
            <th>ລະຫັດນຳສິນຄ້າກັບຄືນ</th>
            <th>ລະຫັດສິນຄ້າ</th>
            <th>ໝາຍເລກ Serial Number</th>
            <th>ຈຳນວນ</th>
            <th>ລະຫັດພະນັກງານຜູ້ຮັບເຄື່ອງ</th>
            <th>ລະຫັດລູກຄ້າ</th>
            <th>ເລກທີຟອມເບີກ</th>
            <th>ວັນທີນຳສິນຄ້າກັບຄືນ</th>
            <th>ເວລານຳສິນຄ້າກັບຄືນ</th>
            <th>ໝາຍເຫດ</th>

        </tr>
        <tr>
            <td>1</td>
            <td>c</td>
            <td>1</td>
            <td>c</td>
            <td>1</td>
            <td>c</td>
            <td>1</td>
            <td>c</td>
            <td>1</td>
            <td>c</td>
            <td>c</td>
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