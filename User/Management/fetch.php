<?php
  $path="../../";
  include (''.$path.'oop/obj.php');
//fetch.php
$output = '';
// if(isset($_POST["query"]))
// {
//  $search = mysqli_real_escape_string($connect, $_POST["query"]);
//  $query = "SELECT * FROM employee WHERE emp_id LIKE '%".$search."%'";
// }
// else
// {
//  $query = "SELECT * FROM employee ORDER BY emp_id";
// }
if(isset($_POST["query"]))
{
   $obj->select_customer($_POST['query'],"0");
}
else
{
   $obj->select_customer("%%","0");
}
// $result = mysqli_query($connect, $query);
// if(mysqli_num_rows($result) > 0)
if(mysqli_num_rows($resultcustomer) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table font12" style="width: 1500px;">
    <tr>
     <th>Customer ID</th>
     <th>Company</th>
     <th>Tel</th>
     <th>Address</th>
     <th>Email</th>
     <th>Status</th>
     <th></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($resultcustomer))
 {
  $output .= '
   <tr>
    <td>'.$row["cus_id"].'</td>
    <td>'.$row["company"].'</td>
    <td>'.$row["tel"].'</td>
    <td>'.$row["address"].'</td>
    <td>'.$row["email"].'</td>
    <td style="display: none;">'.$row["stt_id"].'</td>
    <td>'.$row["stt_name"].'</td>
    <td>
    <a href="#" data-toggle="modal" data-target="#exampleModalUpdate" class="fa fa-pen toolcolor btnUpdate_cust"></a>&nbsp; &nbsp; 
      <a href="#" data-toggle="modal" data-target="#exampleModalDelete" class="fa fa-trash toolcolor btnDelete_cust"></a>
    </td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo '<br>
 <hr size="1" width="90%">
<p align="center">ບໍ່ມີຂໍ້ມູນ</p>
<hr size="1" width="90%">
 ';
}

?>

<script type="text/javascript">
    // update customer
    $('.btnUpdate_cust').on('click', function() {
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
</script>