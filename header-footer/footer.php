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
<script type="text/javascript">
<?php
if($stt == 1){
?>
    function loadDocalert() {
            setInterval(function(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("alert_mananger").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "<?php echo $path ?>header-footer/alert_manager.php", true);
                xhttp.send();
            },1000);
        }
        loadDocalert(); 
<?php
}
if($stt == 2){
?>
  function loadDocalert2() {
            setInterval(function(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("alert_user").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "<?php echo $path ?>header-footer/alert_user.php", true);
                xhttp.send();
            },1000);
        }
        loadDocalert2(); 
<?php
}
?>
       
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
<script src="<?php echo $path ?>dist/js/loading.js"></script>
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
<script src="<?php echo $path ?>dist/js/jquery.highlight.js"></script>
<!-- <script src="<?php echo $path ?>dist/js/modal.js" type="text/javascript"></script> -->

<?php
      if($stt == 1){
?>
<script>
    function load_datalist() {
            setInterval(function(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("result_list").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "<?php echo $path ?>header-footer/fetch_list_manager.php", true);
                xhttp.send();
            },1000);
        }
        load_datalist(); 
   
</script>
<?php
      }
      if($stt == 2){
?>
<script>
     function load_datalist2() {
            setInterval(function(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("result_list_user").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "<?php echo $path ?>header-footer/fetch_list_user.php", true);
                xhttp.send();
            },1000);
        }
        load_datalist2(); 
   
</script>
<?php
      }
?>

<script>
$(window).load(function() {
    // Update Modal
    // delete import

    $('.btnDelete_import').on('click', function() {
        $('#exampleModalDelete').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        console.log(data);
        $('#id').val(data[0]);
    });
    // delete form
    $('.btnDelete_form').on('click', function() {
        $('#exampleModalDelete').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        console.log(data);
        $('#id').val(data[0]);
    });
    // delete accept
    $('.btnDelete_accept').on('click', function() {
        $('#exampleModalDelete').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        console.log(data);
        $('#id').val(data[0]);
    });
    // delete distribute
    $('.btnDelete_dist').on('click', function() {
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