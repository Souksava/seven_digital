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



          });


          // Delete Modal
          $('.btnDelete_auther').on('click', function(){
                $('#exampleModalDelete').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                    return $(this).text();
                  }).get();

                  console.log(data); 

                  $('#del_id').val(data[0]);
          });
      });
  </script>
</body>
</html>

