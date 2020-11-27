<!-- Content Wrapper. Contains page content -->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 </strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</script>
<!-- jQuery -->
<script src="<?php echo $path ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo $path ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo $path ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $path ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $path ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo $path ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo $path ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $path ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $path ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo $path ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tcususdominus Bootstrap 4 -->
<script src="<?php echo $path ?>plugins/tcususdominus-bootstrap-4/js/tcususdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $path ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $path ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $path ?>dist/js/adminlte.js"></script>
<script src="<?php echo $path ?>dist/js/style.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
          // Update Modal
          $('.btnUpdate_auther').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#auther_id2').val(data[0]);
                $('#auther_name2').val(data[1]);

          });
// update employee
          $('.btnUpdate_emp').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#emp_id2').val(data[0]);
                $('#emp_name2').val(data[1]);
                $('#emp_surname2').val(data[2]);
                $('#gender2').val(data[3]);
                $('#tel2').val(data[4]);
                $('#address2').val(data[5]);
                $('#auther_id2').val(data[6]);
                $('#email2').val(data[8]);
                $('#password2').val(data[9]);
                $('#password_cf2').val(data[9]);
                $('#status2').val(data[10]);
                document.getElementById("output2").src = (data[12]);
          });
// update supplier
          $('.btnUpdate_sup').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#sup_id_update').val(data[0]);
                $('#company_update').val(data[1]);
                $('#tel_update').val(data[2]);
                $('#fax_update').val(data[3]);
                $('#address_update').val(data[4]);
                $('#email_update').val(data[5]);
                $('#img_path_update').val(data[6]);
          });
// update customer status
          $('.btnUpdate_customer_status').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#stt_id_update').val(data[0]);
                $('#stt_name_update').val(data[1]);
          });
// update customer status
          $('.btnUpdate_customer_status').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#stt_id_update').val(data[0]);
                $('#stt_name_update').val(data[1]);
          });
// update customer
          $('.btnUpdate_customer').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#cus_id_update').val(data[0]);
                $('#company_update').val(data[1]);
                $('#tel_update').val(data[2]);
                $('#address_update').val(data[3]);
                $('#email_update').val(data[4]);
                $('#stt_id_update').val(data[5]);
          });

          // update category
          $('.btnUpdate_cat').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#cate_id_update').val(data[0]);
                $('#cate_name_update').val(data[1]);
          });

                    // update unit
          $('.btnUpdate_unit').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#unit_id_update').val(data[0]);
                $('#unit_name_update').val(data[1]);
          });

                              // update product
                              $('.btnUpdate_prod').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#code_update').val(data[0]);
                $('#pro_name_update').val(data[1]);
                $('#gen_update').val(data[2]);
                $('#cate_id_update').val(data[3]);
                $('#unit_id_update').val(data[4]);
                $('#brand_id_update').val(data[5]);
                $('#qtyalert_update').val(data[6]);
                $('#img_path_update').val(data[7]);
          });

          
// update product address
              $('.btnUpdate_addr').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#pro_ad_update').val(data[0]);
                $('#addr_name_update').val(data[1]);
          });

// update brand
               $('.btnUpdate_brand').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#brand_id_update').val(data[0]);
                $('#brand_name_update').val(data[1]);
          });
// update rate
$('.btnUpdate_rate').on('click', function(){
              $('#exampleModalUpdate').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                  return $(this).text();
                }).get();

                console.log(data); 

                $('#rate_id_update').val(data[0]);
                $('#rate_buy_update').val(data[1]);
                $('#rate_sell_update').val(data[2]);
          });          

          // Delete Modal________________________________________________________________________________________________
          // delete auther
          $('.btnDelete_auther').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#del_id').val(data[0]);
          });
          // delete employee
          $('.btnDelete_emp').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#id').val(data[0]);
          });
                    // delete supplier
                    $('.btnDelete_sup').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#id').val(data[0]);
          });

                              // delete customer_status
                              $('.btnDelete_customer_status').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#id').val(data[0]);
          });

                              // delete customer
                              $('.btnDelete_cust').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#id').val(data[0]);
          });


                                        // delete category
                                        $('.btnDelete_cat').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#id').val(data[0]);
          });

                                                  // delete unit
                                                  $('.btnDelete_unit').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#id').val(data[0]);
          });

// delete product
                $('.btnDelete_prod').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#id').val(data[0]);
          });


// delete product address
                $('.btnDelete_addr').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#id').val(data[0]);
          });

          // delete brand
          $('.btnDelete_brand').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#id').val(data[0]);
          });
          // delete rate
          $('.btnDelete_rate').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#id').val(data[0]);
          });          
      });
  </script>
</body>
</html>

