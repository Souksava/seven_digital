<?php
  $title = "ລາຍງານເບີກຈ່າຍສິນຄ້າ";
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
        <button type="button" class="btn btn-sm btn-danger"> &nbsp; PDF &nbsp;</button> 
    </div>

</div>

<div class="clearfix">
    <!-- button search report -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
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
            <th>ລະຫັດການເບີກ</th>
            <th>ລະຫັດສິນຄ້າ</th>
            <th>ໝາຍເລກ Serial</th>
            <th>ຈຳນວນ</th>
            <th>ລະຫັດພະນັກງານຜູ້ເບີກຈ່າຍ</th>
            <th>ເລກທີຟອມເບີກ</th>
            <th>ວັນທີເບີກຈ່າຍສິນຄ້າ</th>
            <th>ເວລາເບີກຈ່າຍສິນຄ້າ</th>
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