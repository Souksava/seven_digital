<?php
  $path="../../";
  include (''.$path.'oop/obj.php');
//fetch.php
      $obj->select_pro_addr('%%','0');
      if(mysqli_num_rows($result_pro_addr) > 0){
    ?>
<div class="table-responsive">
    <table class="table font12" style="width: 100%;">
        <tr>
            <th>ລະຫັດທີ່ຢູສາງສິນຄ້າ</th>
            <th>ທີ່ຢູສາງສິນຄ້າ</th>
            <th></th>

        </tr>
        <?php
            foreach($result_pro_addr as $row){
        ?>
        <tr>
            <td><?php echo $row['pro_ad'] ?></td>
            <td><?php echo $row['addr_name'] ?></td>
            <td>
                <a href="#" data-toggle="modal" data-target="#exampleModalUpdate"
                    class="fa fa-pen toolcolor btnUpdate_addr"></a>&nbsp; &nbsp;
                <a href="#" data-toggle="modal" data-target="#exampleModalDelete"
                    class="fa fa-trash toolcolor btnDelete_addr"></a>
            </td>
        </tr>
        <?php
            }   
            mysqli_free_result($result_pro_addr);  
            mysqli_next_result($conn);
        ?>
    </table>
</div>
<?php
          } 
          else{
        ?>
                    <hr size="1" width="90%">
              <p align="center">ຍັງບໍ່ມີຂໍ້ມູນ</p>
            <hr size="1" width="90%">
        <?php
          }
        ?>