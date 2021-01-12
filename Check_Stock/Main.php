<?php
  $title = "ໜ້າຫຼັກ";
  $path = "../";
  $links = "";
  $session_path = "../";
  include ("../header-footer/header.php");
?>
<!-- <div class="row">
    <a href="<?php echo $links ?>Management/auther" class="m-a">
        <div class="btn btn-light mainlink">
            ຕຳແໜ່ງ
        </div>
    </a>
    <a href="<?php echo $links ?>Management/employee" class="m-a">
        <div class="btn btn-light mainlink">
            ພະນັກງານ
        </div>
    </a>
    <a href="<?php echo $links ?>Management/supplier" class="m-a">
        <div class="btn btn-light mainlink">
            ຜູ້ສະໜອງ
        </div>
    </a>
    <a href="<?php echo $links ?>Management/customer-status" class="m-a">
        <div class="btn btn-light mainlink">
            ສະຖານະລູກຄ້າ
        </div>
    </a>
    <a href="<?php echo $links ?>Management/customer" class="m-a">
        <div class="btn btn-light mainlink">
            ລູກຄ້າ
        </div>
    </a>
    <a href="<?php echo $links ?>Management/category" class="m-a">
        <div class="btn btn-light mainlink">
            ປະເພດ
        </div>
    </a>
    <a href="<?php echo $links ?>Management/unit" class="m-a">
        <div class="btn btn-light mainlink">
            ຫົວໜ່ວຍ
        </div>
    </a>
    <a href="<?php echo $links ?>Management/products" class="m-a">
        <div class="btn btn-light mainlink">
            ສິນຄ້າ
        </div>
    </a>
    <a href="<?php echo $links ?>Management/product-address" class="m-a">
        <div class="btn btn-light mainlink">
            ຂໍ້ມູນສາງ
        </div>
    </a>
    <a href="<?php echo $links ?>Management/brand" class="m-a">
        <div class="btn btn-light mainlink">
            ຍີ່ຫໍ້
        </div>
    </a>
    <a href="<?php echo $links ?>Management/rate" class="m-a">
        <div class="btn btn-light mainlink">
            ເລດເງີນ
        </div>
    </a>
    <a href="<?php echo $links ?>Import/import" class="m-a">
        <div class="btn btn-light mainlink">
            ນຳເຂົ້າສິນຄ້າ
        </div>
    </a>
    <a href="<?php echo $links ?>Form/form" class="m-a">
        <div class="btn btn-light mainlink">
            ສ້າງໃບສະເໜີເບີກສິນຄ້າ
        </div>
    </a>
    <a href="<?php echo $links ?>Form/accept" class="m-a">
        <div class="btn btn-light mainlink">
            ອະນຸມັດ
        </div>
    </a>
    <a href="<?php echo $links ?>Form/distribute" class="m-a">
        <div class="btn btn-light mainlink">
            ເບີກຈ່າຍສິນຄ້າ
        </div>
    </a>
    <a href="<?php echo $links ?>Form/product-putback" class="m-a">
        <div class="btn btn-light mainlink">
            ສິນຄ້າເບີກແລ້ວເກັບເຂົ້າສາງ
        </div>
    </a>
    <a href="<?php echo $links ?>Check/check-stock" class="m-a">
        <div class="btn btn-light mainlink">
            ນັບສະຕ໋ອກ
        </div>
    </a>
    <a href="<?php echo $links ?>Spare/spare-part" class="m-a">
        <div class="btn btn-light mainlink">
            ປ່ຽນອາໄຫຼ່
        </div>
    </a>
    <a href="<?php echo $links ?>Report/report-supplier" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານຜູ້ສະໜອງ
        </div>
    </a>
    <a href="<?php echo $links ?>Report/report-customer" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານລູກຄ້າ
        </div>
    </a>
    <a href="<?php echo $links ?>Report/report-employee" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານພະນັກງານ
        </div>
    </a>
    <a href="<?php echo $links ?>Report/report-product" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານສິນຄ້າ
        </div>
    </a>
    <a href="<?php echo $links ?>Report/report-stock" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານສະຕ໋ອກ
        </div>
    </a>
    <a href="<?php echo $links ?>Report/report-check-stock" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານການນັບສະຕ໋ອກ
        </div>
    </a>
    <a href="<?php echo $links ?>Report/report-warehouse" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານສາງເກັບຮັກສາ
        </div>
    </a>
    <a href="<?php echo $links ?>Report/report-distribute" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານການເບີກຈ່າຍສິນຄ້າ
        </div>
    </a>
    <a href="<?php echo $links ?>Report/report-product-putback" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານສິນຄ້າກັບເຂົ້າສາງຄືນ
        </div>
    </a>
</div> -->

<?php

if ($stt == 1){
    echo '<div class="row">
    <a href="';?><?php echo $links ?><?php echo 'Management/auther" class="m-a">
        <div class="btn btn-light mainlink">
            ຕຳແໜ່ງ
        </div>
    </a>
    <a href="';?><?php echo $links ?><?php echo 'Management/employee" class="m-a">
        <div class="btn btn-light mainlink">
            ພະນັກງານ
        </div>
    </a>
    
    
    <a href="';?><?php echo $links ?><?php echo 'Form/accept" class="m-a">
        <div class="btn btn-light mainlink">
            ອະນຸມັດ
        </div>
    </a>
    
    <a href="';?><?php echo $links ?><?php echo 'Report/report-supplier" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານຜູ້ສະໜອງ
        </div>
    </a>
    <a href="';?><?php echo $links ?><?php echo 'Report/report-customer" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານລູກຄ້າ
        </div>
    </a>
    <a href="';?><?php echo $links ?><?php echo 'Report/report-employee" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານພະນັກງານ
        </div>
    </a>
    <a href="';?><?php echo $links ?><?php echo 'Report/report-product" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານສິນຄ້າ
        </div>
    </a>
    <a href="';?><?php echo $links ?><?php echo 'Report/report-stock" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານສະຕ໋ອກ
        </div>
    </a>
    <a href="';?><?php echo $links ?><?php echo 'Report/report-check-stock" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານການນັບສະຕ໋ອກ
        </div>
    </a>
    <a href="';?><?php echo $links ?><?php echo 'Report/report-warehouse" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານສາງເກັບຮັກສາ
        </div>
    </a>
    <a href="';?><?php echo $links ?><?php echo 'Report/report-distribute" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານການເບີກຈ່າຍສິນຄ້າ
        </div>
    </a>
    <a href="';?><?php echo $links ?><?php echo 'Report/report-product-putback" class="m-a">
        <div class="btn btn-light mainlink">
            ລາຍງານສິນຄ້າກັບເຂົ້າສາງຄືນ
        </div>
    </a>
</div>';
}elseif($stt == 2){
    echo '<div class="row">
    <a href="';?><?php echo $links ?><?php echo 'Management/customer-status" class="m-a">
    <div class="btn btn-light mainlink">
        ສະຖານະລູກຄ້າ
    </div>
    </a>

    <a href="';?><?php echo $links ?><?php echo 'Management/customer" class="m-a">
    <div class="btn btn-light mainlink">
        ລູກຄ້າ
    </div>
    </a>
    <a href="';?><?php echo $links ?><?php echo 'Form/form" class="m-a">
    <div class="btn btn-light mainlink">
        ສ້າງໃບສະເໜີເບີກສິນຄ້າ
    </div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Form/accept" class="m-a">
    <div class="btn btn-light mainlink">
        ອະນຸມັດ
    </div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-product" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານສິນຄ້າ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-distribute" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານການເບີກຈ່າຍສິນຄ້າ
</div>
</a>
</div>
    ';
}elseif($stt == 3){
    echo '
    <div class="row">
    <a href="';?><?php echo $links ?><?php echo 'Spare/spare-part" class="m-a">
    <div class="btn btn-light mainlink">
        ປ່ຽນອາໄຫຼ່
    </div>
</a>
    <a href="';?><?php echo $links ?><?php echo 'Form/distribute" class="m-a">
    <div class="btn btn-light mainlink">
        ເບີກຈ່າຍສິນຄ້າ
    </div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Form/product-putback" class="m-a">
    <div class="btn btn-light mainlink">
        ສິນຄ້າເບີກແລ້ວເກັບເຂົ້າສາງ
    </div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Import/import" class="m-a">
<div class="btn btn-light mainlink">
    ນຳເຂົ້າສິນຄ້າ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Management/category" class="m-a">
<div class="btn btn-light mainlink">
    ປະເພດ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Management/unit" class="m-a">
<div class="btn btn-light mainlink">
    ຫົວໜ່ວຍ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Management/products" class="m-a">
<div class="btn btn-light mainlink">
    ສິນຄ້າ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Management/supplier" class="m-a">
<div class="btn btn-light mainlink">
    ຜູ້ສະໜອງ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-supplier" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານຜູ້ສະໜອງ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-customer" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານລູກຄ້າ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-employee" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານພະນັກງານ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-product" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານສິນຄ້າ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-stock" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານສະຕ໋ອກ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-check-stock" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານການນັບສະຕ໋ອກ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-warehouse" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານສາງເກັບຮັກສາ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-distribute" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານການເບີກຈ່າຍສິນຄ້າ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-product-putback" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານສິນຄ້າກັບເຂົ້າສາງຄືນ
</div>
</a>
</div>
    ';
}elseif($stt == 4){
    echo '
    <div class="row">

<a href="';?><?php echo $links ?><?php echo 'Check/check-stock" class="m-a">
<div class="btn btn-light mainlink">
    ນັບສະຕ໋ອກ
</div>
</a>
<a href="';?><?php echo $links ?><?php echo 'Report/report-check-stock" class="m-a">
<div class="btn btn-light mainlink">
    ລາຍງານການນັບສະຕ໋ອກ
</div>
</a>
</div>
    ';
}else{
    echo'';
}

 include ("../header-footer/footer.php");
?>