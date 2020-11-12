<?php
  $title = "ສ້າງຟອມ";
  $path="../../";
  $links = "../";
  $session_path = "../../";
  include ("../../header-footer/header.php");
?>
    <div style="width: 100%;">
        <b><?php echo $title ?></b>&nbsp <img src="<? echo $path ?>icon/hidemenu.ico" width="10px">
    </div><br>
    <form action="">
      <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="input-group">        
              <input type="text" name="pro_id"  placeholder="ລະຫັດສິນຄ້າ" class="form-control" autofocus>
              <div class="input-group-prepend">
                  <button type="submit" name="btnAdd" class="btn btn-outline-primary">ຄົ້ນຫາ</button>
              </div>
            </div>
          </div>
      </div>
    </form>
          <div class="table-responsive" style="text-align: center;">
            <table class="table font12" style="width: 1200px">
              <tr>
                <th>ສິນຄ້າ</th>
                <th>ລະຫັດສິນຄ້າ</th>
                <th>ຊື່ສິນຄ້າ</th>
                <th>ຊື່ສິນຄ້າ</th>
                <th>ຈຳນວນ</th>
                <th>ເງື່ອນໄຂການຜະລິດ</th>
                <th></th>
              </tr>
              <tr>
                  <td>
                      <a href="../../image/logo.png" target="_blank">
                        <img src="../../image/logo.png" class="img-circle elevation-2" alt="" width="30px">
                      </a>
                  </td>
                  <td>12345678</td>
                  <td>FUJI</td>
                  <td>SF235SGW2</td>
                  <td>30</td>
                  <td>50</td>
                  <td>
                      <a href="formdetail" class="fa fa-plus toolcolor"></a>&nbsp; &nbsp; 
                  </td>
              </tr>
            </table>
          </div>
  <!-- /.content-wrapper -->
  <br>
  <?php
    include ("../../header-footer/footer.php");
  ?>