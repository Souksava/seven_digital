<?php
$conn = mysqli_connect("Localhost", "root", "", "seven");
date_default_timezone_set("Asia/Bangkok");
$datenow = time();
$Date = date("Y-m-d",$datenow);
$Time = date("H:i:s",$datenow);
class obj{
    public $conn;
    public $search;
    //ຈັດການຂໍ້ມູນຕຳແໜ່ງ
    public static function select_auther($search,$page){
        // method ຂອງການດຶງຂໍ້ມູນຕຳແໜ່ງມາສະແດງ
        global $resultauther;//ຕັ້ງໂຕປ່ຽນຢູ່ພາຍໃນ class ເອົາໄປໃຊ້ນອກ class
        global $conn; //ດຶງຕົວປ່ຽນພາຍນອກ class ມາໃຊ້
        $resultauther = mysqli_query($conn,"call auther('$search','$page');"); 
    }
    public static function insert_auther($auther_id,$auther_name){
        global $conn;
        // method ຂອງການບັນທຶກຂໍ້ມູນຕຳແໜ່ງ
        $checkid = mysqli_query($conn,"select * from auther where auther_id='$auther_id'"); //ກວດສອບວ່າລະຫັດຕຳແໜ່ງນີ້ມີຫຼືຍັງ
        $checkname = mysqli_query($conn,"select * from auther where auther_name='$auther_name'");// ກວດສອບວ່າຊື່ຕຳແໜ່ງນີ້ມີຫຼືຍັງ
        if(mysqli_num_rows($checkid) > 0){  //ກວດສອບວ່າລະຫັດຕຳແໜ່ງນີ້ມີຫຼືຍັງ
            echo"<script>";
            echo"window.location.href='auther?id=same';";
            echo"</script>";
        }
        else if(mysqli_num_rows($checkname) > 0){// ກວດສອບວ່າຊື່ຕຳແໜ່ງນີ້ມີຫຼືຍັງ
            echo"<script>";
            echo"window.location.href='auther?name=same';";
            echo"</script>";
        }
        else{
            //ຄຳສັ່ງບັນທຶກຂໍ້ມູນຕຳແໜ່ງ
            $result = mysqli_query($conn,"call insert_auther('$auther_id','$auther_name')");
            if(!$result){ //ກວດສອບການບັນທຶກຂໍ້ມູນຖ້າເກີດຂໍ້ຜິດພາດໃຫ້ມາເຮັດວຽກຢູ່ນີ້
                echo"<script>";
                echo"window.location.href='auther?save=fail';";
                echo"</script>";
            }
            else{//ກວດສອບການບັນທຶກຂໍ້ມູນຖ້າບໍ່ມີຂໍ້ຜິດພາດໃຫ້ມາເຮັດວຽກຢູ່ນີ້
                echo"<script>";
                echo"window.location.href='auther?save2=success';";
                echo"</script>";
            }
        }

    }
    public static function update_auther($auther_id_update,$auther_name_update){
        global $conn;
        $checkname = mysqli_query($conn,"select * from auther where auther_name='$auther_name_update'");//ກວດສອບການແກ້ໄຂວ່າຕຳແໜ່ງນີ້ມີແລ້ວຫຼືຍັງ
        if(mysqli_num_rows($checkname) > 0){
            echo"<script>";
            echo"window.location.href='auther?name_update=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call update_auther('$auther_id_update','$auther_name_update')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='auther?update=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='auther?update2=success';";
                echo"</script>";
            }
        }
    }
    public static function delete_auther($auther_id){
        global $conn;
        $check_id = mysqli_query($conn,"select * from employee where auther_id='$auther_id'");//ກວດສອບວ່າລະຫັດຕຳແໜ່ງນີ້ມີຢູ່ໃນຕາຕະລາງພະນັກງານບໍ່
        if(mysqli_num_rows($check_id) > 0){
            echo"<script>";
            echo"window.location.href='auther?delete=fail';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call delete_auther('$auther_id')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='auther?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='auther?del2=success';";
                echo"</script>";
            }
        }
    }
    //ສິ້ນສຸດການຈັດການຂໍ້ມູນຕຳແໜ່ງ
    // ຈັດການຂໍ້ມູນພະນັກງານ
    public static function select_employee($search,$page){//method ດຶງຂໍ້ມູນພະນັກງານມາສະແດງ
        global $conn;
        global $resultemployee; 
        $resultemployee = mysqli_query($conn,"call employee('$search','$page')");      
    }
    public static function select_employee_count($search){//method ດຶງຂໍ້ມູນພະນັກງານມາສະແດງ
        global $conn;
        global $resultemployee_count; 
        $resultemployee_count = mysqli_query($conn,"call employee_count('$search')");      
    }
    
    public static function insert_employee($emp_id,$name,$surname,$gender,$tel,$address,$email,$pass,$auther_id,$sttid,$img_path){//method ທີ່ໃຊ້ໃນການໃນການບັນທຶກຂໍ້ມູນພະນັກງານ
        global $conn;
        global $path;
        $check_id = mysqli_query($conn,"select * from employee where emp_id='$emp_id'");//ກວດສອບລະຫັດພະນັກງານວ່າມີແລ້ວ ຫຼື ຍັງ
        $check_email = mysqli_query($conn,"select * from employee where email='$email'");//ກວດສອບອີເມວວ່າມີແລ້ວ ຫຼື ຍັງ
        $check_pass = mysqli_query($conn,"select * from employee where pass='$pass'");//ກວດສອບວ່າລະຫັດນີ້ມີແລ້ວ ຫຼື ຍັງ
        if(mysqli_num_rows($check_id) > 0){
            echo"<script>";
            echo"window.location.href='employee?id=same';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_email) > 0){
            echo"<script>";
            echo"window.location.href='employee?email=same';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_pass) > 0){
            echo"<script>";
            echo"window.location.href='employee?pass=same';";
            echo"</script>";
        }
        else{
            if($img_path == ""){//ກວດສອບຄ່າຟາຍຮູບມາວ່າເປັນຄ່າວ່າງ ຫຼື ບໍ່
                $Pro_image = '';
            }
            else{//ຖ້າຄ່າຟາຍຮູບບໍ່ເປັນຄ່າວ່າງໃຫ້ເຮັດວຽກໃນຈຸດນີ້
                $ext = pathinfo(basename($_FILES['img_path']['name']), PATHINFO_EXTENSION);
                $new_image_name = 'seven_'.uniqid().".".$ext;
                $image_path = $path.'image/';
                $upload_path = $image_path.$new_image_name;
                move_uploaded_file($_FILES['img_path']['tmp_name'], $upload_path);
                $Pro_image = $new_image_name;
            }
            $result = mysqli_query($conn,"call insert_employee('$emp_id','$name','$surname','$gender','$tel','$address','$email','$pass','$auther_id','$sttid','$Pro_image')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='employee?save=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='employee?save2=success';";
                echo"</script>";
            }
        }
    }
    public static function select_status(){
        global $conn;
        global $resutlstatus;
        $resutlstatus = mysqli_query($conn,"select * from emp_status order by stt_name;");
    }
    public static function update_employee($emp_id,$name,$surname,$gender,$tel,$address,$email,$pass,$auther_id,$sttid,$img_path){
        global $conn;
        global $path;
        $resultmp = mysqli_query($conn,"select * from employee where emp_id='$emp_id'");//ດຶງຄ່າອີເມວ ແລະ ລະຫັດຜ່ານ ໂດຍໃຊ້ໄອດີພະນັກງານ
        $rowmp = mysqli_fetch_array($resultmp,MYSQLI_ASSOC);
        $get_img = mysqli_query($conn, "select img_path from employee where emp_id='$emp_id'");
        $data = mysqli_fetch_array($get_img,MYSQLI_ASSOC);
        if($email == $rowmp['email'] && $pass == $rowmp['pass']){//ຖ້າອີເມວ ແລະ ລະຫັດຜ່ານທັງ 2 ຄືກັນກັບອີເມວ ແລະ ລະຫັດຜ່ານຂອງລະໄອດີພະນັກງານ ແມ່ນທຳການອັບເດດຂໍ້ມູນ
            if($img_path == ""){//ກວດສອບຄ່າຟາຍຮູບມາວ່າເປັນຄ່າວ່າງ ຫຼື ບໍ່
                $Pro_image = $data['img_path'];
            }
            else{//ຖ້າຄ່າຟາຍຮູບບໍ່ເປັນຄ່າວ່າງໃຫ້ເຮັດວຽກໃນຈຸດນີ້
                $ext = pathinfo(basename($_FILES['img_path']['name']), PATHINFO_EXTENSION);
                $new_image_name = 'seven_'.uniqid().".".$ext;
                $image_path = $path.'image/';
                $upload_path = $image_path.$new_image_name;
                move_uploaded_file($_FILES['img_path']['tmp_name'], $upload_path);
                $Pro_image = $new_image_name;
                // $path2 = __DIR__.DIRECTORY_SEPARATOR.$image_path.DIRECTORY_SEPARATOR.$data['img_path']; //cant find path
                $path2 = $image_path.$data['img_path'];
                if(file_exists($path2) && !empty($data['img_path'])){
                    unlink($path2);                  
                }
            }
            $result = mysqli_query($conn,"call update_employee('$emp_id','$name','$surname','$gender','$tel','$address','$email',$pass,'$auther_id','$sttid','$Pro_image')");
            // $result = mysqli_query($conn,"update employee set emp_name='$name',emp_surname='$surname',gender='$gender',tel='$tel',address='$address',email='$email',pass='$pass',auther_id='$auther_id',stt_id='$sttid',img_path='$Pro_image' where emp_id ='$emp_id'");
            if(!$result){
                echo"<script>";
                echo"window.location.href='employee?update=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='employee?update2=success';";
                echo"</script>";
            }
        }
        else{//ຖ້າວ່າອີເມວ ແລະ ລະຫັດຜ່ານ ບໍ່ຄືກັນກັບໄອດີພະນັກງານແມ່ນໃຫ້ເຮັດວຽກໃນຈຸດນີ້
            if($email != $rowmp['email'] || $pass != $rowmp['pass']){
                $check_email = mysqli_query($conn,"select * from employee where email='$email';");//ກວດສອບອີເມວທີ່ປ້ອນເຂົ້າມາວ່າມີບໍ່
                $check_pass = mysqli_query($conn,"select * from employee where pass='$pass';");//ກວດສອບລະຫັດຜ່ານທີ່ປ້ອນເຂົ້າມາວ່າມີບໍ່
                if(mysqli_num_rows($check_email) > 0){//ຖ້າອີມວທີ່ປ້ອນເຂົ້າມານັ້ນມີຄົນໃຊ້ແລ້ວໃຫ້ກວດລະຫັດເຂົ້າສູ່ລະບົບ
                    if(mysqli_num_rows($check_pass) > 0){//ຖ້າລະຫັດຜ່ານ ຫຼື ອີເມວຄືກັນກັບຄົນອື່ນແມ່ນໃຫ້ເຮັດວຽກໜ້ານີ້
                        echo"<script>";
                        echo"window.location.href='employee?mp=same';";
                        echo"</script>";
                    }
                    else{//ຖ້າອີເມວຄືກັນ ແຕ່ລະຫັດຜ່ານແຕກຕ່າງໃຫ້ທຳການອັບເດດ
                        if($img_path == ""){//ກວດສອບຄ່າຟາຍຮູບມາວ່າເປັນຄ່າວ່າງ ຫຼື ບໍ່
                            $Pro_image = $data['img_path'];
                        }
                        else{//ຖ້າຄ່າຟາຍຮູບບໍ່ເປັນຄ່າວ່າງໃຫ້ເຮັດວຽກໃນຈຸດນີ້
                            $ext = pathinfo(basename($_FILES['img_path']['name']), PATHINFO_EXTENSION);
                            $new_image_name = 'seven_'.uniqid().".".$ext;
                            $image_path = $path.'image/';
                            $upload_path = $image_path.$new_image_name;
                            move_uploaded_file($_FILES['img_path']['tmp_name'], $upload_path);
                            $Pro_image = $new_image_name;
                            $path2 = $image_path.$data['img_path'];
                            if(file_exists($path2) && !empty($data['img_path'])){
                                unlink($path2);
                                
                            }
                        }
                        $result = mysqli_query($conn,"call update_employee('$emp_id','$name','$surname','$gender','$tel','$address','$email','$pass','$auther_id','$sttid','$Pro_image')");
                        if(!$result){
                            echo"<script>";
                            echo"window.location.href='employee?update=fail';";
                            echo"</script>";
                        }
                        else{
                            echo"<script>";
                            echo"window.location.href='employee?update2=success';";
                            echo"</script>";
                        }
                    }
                }
                else if(mysqli_num_rows($check_pass) > 0){//ຖ້າລະຫັດຜ່ານທີ່ປ້ອນເຂົ້າມານັ້ນມີຄົນໃຊ້ແລ້ວໃຫ້ກວດສອບອີເມວ
                    if(mysqli_num_rows($check_email) > 0){//ຖ້າອີເມວ ຫຼື ລະຫັດຜ່ານຄືກັນກັບຂອງຄົນອື່ນແມ່ນໃຫ້ເຮັດວຽກໜ້ານີ້
                        echo"<script>";
                        echo"window.location.href='employee?mp=same';";
                        echo"</script>";
                    }
                    else{
                        if($img_path == ""){//ກວດສອບຄ່າຟາຍຮູບມາວ່າເປັນຄ່າວ່າງ ຫຼື ບໍ່
                            $Pro_image = $data['img_path'];
                        }
                        else{//ຖ້າຄ່າຟາຍຮູບບໍ່ເປັນຄ່າວ່າງໃຫ້ເຮັດວຽກໃນຈຸດນີ້
                            $ext = pathinfo(basename($_FILES['img_path']['name']), PATHINFO_EXTENSION);
                            $new_image_name = 'seven_'.uniqid().".".$ext;
                            $image_path = $path.'image/';
                            $upload_path = $image_path.$new_image_name;
                            move_uploaded_file($_FILES['img_path']['tmp_name'], $upload_path);
                            $Pro_image = $new_image_name;
                            $path2 = $image_path.$data['img_path'];
                            if(file_exists($path2) && !empty($data['img_path'])){
                                unlink($path2);
                                
                            }
                        }
                        $result = mysqli_query($conn,"call update_employee('$emp_id','$name','$surname','$gender','$tel','$address','$email','$pass','$auther_id','$sttid','$Pro_image')");
                        if(!$result){
                            echo"<script>";
                            echo"window.location.href='employee?update=fail';";
                            echo"</script>";
                        }
                        else{
                            echo"<script>";
                            echo"window.location.href='employee?update2=success';";
                            echo"</script>";
                        }
                    }
                }
                else{//ກໍລະນີທີ່ອີເມວ ແລະ ລະຫັດຜ່ານບໍ່ຄືໃຜເລີຍແມ່ນໃຫ້ເຮັດວຽກໃນຈຸດນີ້
                    if($img_path == ""){//ກວດສອບຄ່າຟາຍຮູບມາວ່າເປັນຄ່າວ່າງ ຫຼື ບໍ່
                        $Pro_image = $data['img_path'];
                    }
                    else{//ຖ້າຄ່າຟາຍຮູບບໍ່ເປັນຄ່າວ່າງໃຫ້ເຮັດວຽກໃນຈຸດນີ້
                        $ext = pathinfo(basename($_FILES['img_path']['name']), PATHINFO_EXTENSION);
                        $new_image_name = 'seven_'.uniqid().".".$ext;
                        $image_path = $path.'image/';
                        $upload_path = $image_path.$new_image_name;
                        move_uploaded_file($_FILES['img_path']['tmp_name'], $upload_path);
                        $Pro_image = $new_image_name;
                        $path2 = $image_path.$data['img_path'];
                        if(file_exists($path2) && !empty($data['img_path'])){
                            unlink($path2);
                            
                        }
                    }
                    $result = mysqli_query($conn,"call update_employee('$emp_id','$name','$surname','$gender','$tel','$address','$email','$pass','$auther_id','$sttid','$Pro_image')");
                    if(!$result){
                        echo"<script>";
                        echo"window.location.href='employee?update=fail';";
                        echo"</script>";
                    }
                    else{
                        echo"<script>";
                        echo"window.location.href='employee?update2=success';";
                        echo"</script>";
                    }
                }
            }
        }

        
    }
    public static function delete_employee($emp_id){//method ລົບຂໍ້ມູນພະນັກງານ
        global $conn;
        global $path;
        $check_form = mysqli_query($conn,"select * from form where emp_id='$emp_id'");//ກວດສອບຕາຕະລາງຟອມວ່າມີລະຫັດພະນັກງານບໍ່
        $check_check = mysqli_query($conn,"select * from check_stock where emp_id='$emp_id'");//ກວດສອບຕາຕະລາງນັບສະຕ໋ອກວ່າມີລະຫັດພະນັກງານບໍ່
        $check_dis = mysqli_query($conn,"select * from distribute where emp_id='$emp_id'");//ກວດສອບຕາຕະລາງເບີກຈ່າຍສິນຄ້າວ່າມີລະຫັດພະນັກງານບໍ່
        $check_pps = mysqli_query($conn,"select * from product_putback_stock where emp_id='$emp_id'");//ກວດສອບຕາຕະລາງເບີກຈ່າຍສິນຄ່າແລ້ວນຳກັບມາຄືນວ່າມີລະຫັດພະນັກງານບໍ່
        $check_spare = mysqli_query($conn,"select * from spare_part where emp_id='$emp_id'");//ກວດສອບຕາຕະລາງປ່ຽນອາໄຫຼ່ເຄື່ອງວ່າມີລະຫັດພະນັກງານບໍ່
        $check_stock = mysqli_query($conn,"select * from stocks where emp_id='$emp_id'");//ກວດສອບຕາຕະລາງສະຕ໋ອກວ່າມີລະຫັດພະນັກງານບໍ່
        if(mysqli_num_rows($check_form) > 0){
            echo"<script>";
            echo"window.location.href='employee?form=fail';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_check) > 0){
            echo"<script>";
            echo"window.location.href='employee?check=fail';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_dis) > 0){
            echo"<script>";
            echo"window.location.href='employee?dis=fail';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_pps) > 0){
            echo"<script>";
            echo"window.location.href='employee?pps=fail';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_spare) > 0){
            echo"<script>";
            echo"window.location.href='employee?spare=fail';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_stock) > 0){
            echo"<script>";
            echo"window.location.href='employee?stock=fail';";
            echo"</script>";
        }
        else{
            $get_img = mysqli_query($conn, "select  img_path from employee where emp_id='$emp_id'");
            $data = mysqli_fetch_array($get_img, MYSQLI_ASSOC);
            $path2 = $path.'image/'.$data['img_path'];
            if(file_exists($path2) && !empty($data['img_path'])){
                unlink($path2);        
            }
            $result = mysqli_query($conn,"call delete_employee('$emp_id')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='employee?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='employee?del2=success';";
                echo"</script>";
            }
        }
    }
    //ສິ້ນສຸດການຈັດການຂໍ້ມູນພະນັກງານ


    //ຈັດການຂໍ້ມູນຜູ້ສະໜອງ
    public static function select_supplier($search,$page){//method ດຶງຂໍ້ມູນຜູ້ສະໜອງມາສະແດງ
        global $conn;
        global $resultsupplier;
        $resultsupplier = mysqli_query($conn,"call supplier('$search','$page')");
    }
    public static function select_supplier_count($search){//method ດຶງຂໍ້ມູນຜູ້ສະໜອງມາສະແດງ
        global $conn;
        global $resultsupplier_count;
        $resultsupplier_count = mysqli_query($conn,"call supplier_count('$search')");
    }
    public static function insert_supplier($sup_id,$company,$tel,$fax,$address,$email,$img_path){
        global $conn;
        global $path;
        $check_id = mysqli_query($conn,"select * from supplier where sup_id = '$sup_id'");
        $check_name = mysqli_query($conn,"select * from supplier where company='$company'");
        if(mysqli_num_rows($check_id) > 0){//ກວດສອບລະຫັດ
            echo"<script>";
            echo"window.location.href='supplier?id=same';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_name) > 0){//ກວດສອບຊື່
            echo"<script>";
            echo"window.location.href='supplier?company=same';";
            echo"</script>";
        }
        else{
            if($img_path == ""){//ກວດສອບຄ່າຟາຍຮູບມາວ່າເປັນຄ່າວ່າງ ຫຼື ບໍ່
                $Pro_image = '';
            }
            else{//ຖ້າຄ່າຟາຍຮູບບໍ່ເປັນຄ່າວ່າງໃຫ້ເຮັດວຽກໃນຈຸດນີ້
                $ext = pathinfo(basename($_FILES['img_path']['name']), PATHINFO_EXTENSION);
                $new_image_name = 'seven_'.uniqid().".".$ext;
                $image_path = $path.'image/';
                $upload_path = $image_path.$new_image_name;
                move_uploaded_file($_FILES['img_path']['tmp_name'], $upload_path);
                $Pro_image = $new_image_name;
            }
            $result = mysqli_query($conn,"call insert_supplier('$sup_id','$company','$tel','$fax','$address','$email','$Pro_image')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='supplier?save=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='supplier?save2=success';";
                echo"</script>";
            }
        }
    }
    public static function delete_supplier($sup_id){ // method ໃຊ້ໃນການລົບຂໍ້ມູນຜູ້ສະໜອງ
        global $conn;
        global $path;
        $check_stock = mysqli_query($conn,"select * from stock where sup_id='$sup_id'");
        if(mysqli_num_rows($check_stock) > 0){
            echo"<script>";
            echo"window.location.href='supplier?del=fail';";
            echo"</script>";
        }
        else{
            $get_img = mysqli_query($conn, "select  img_path from supplier where sup_id='$sup_id'");
            $data = mysqli_fetch_array($get_img, MYSQLI_ASSOC);
            $path2 = $path."image/".$data['img_path'];
            if(file_exists($path2) && !empty($data['img_path'])){
                unlink($path2);    
            }
            $result = mysqli_query($conn,"call delete_supplier('$sup_id')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='supplier?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='supplier?del2=success';";
                echo"</script>";
            }
        }
    }
    public static function update_supplier($sup_id,$company,$tel,$fax,$address,$email,$img_path){// method ໃຊ້ໃນການແກ້ໄຂຂໍ້ມູນຜູ້ສະໜອງ
        global $conn;
        global $path;
        $check = mysqli_query($conn,"select * from supplier where sup_id='$sup_id'");//ກວດສອບວ່າຊື່ຂອງຜູ້ສະໜອງນີ້ໄອດີນີ້ແມ່ນຄືເກົ່າຫຼືບໍ່
        $rowcheck = mysqli_fetch_array($check,MYSQLI_ASSOC);
        $get_img = mysqli_query($conn, "select img_path from supplier where sup_id='$sup_id'");//ດຶງຊື່ຟາຍຮູບພາບໂດຍໃຊ້ໄອດີ
        $data = mysqli_fetch_array($get_img, MYSQLI_ASSOC);
        $company_name = $rowcheck['company'];
        if($company_name == $company){//ກວດສອບວ່າຊື່ຂອງຜູ້ສະໜອງນີ້ໄອດີນີ້ແມ່ນຄືເກົ່າຫຼືບໍ່
            if($img_path == ""){//ກວດສອບຄ່າຟາຍຮູບມາວ່າເປັນຄ່າວ່າງ ຫຼື ບໍ່
                $Pro_image = $data['img_path'];
            }
            else{//ຖ້າຄ່າຟາຍຮູບບໍ່ເປັນຄ່າວ່າງໃຫ້ເຮັດວຽກໃນຈຸດນີ້
                $ext = pathinfo(basename($_FILES['img_path']['name']), PATHINFO_EXTENSION);
                $new_image_name = 'seven_'.uniqid().".".$ext;
                $image_path = $path.'image/';
                $upload_path = $image_path.$new_image_name;
                move_uploaded_file($_FILES['img_path']['tmp_name'], $upload_path);
                $Pro_image = $new_image_name;
                // $path2 = __DIR__.DIRECTORY_SEPARATOR.$image_path.DIRECTORY_SEPARATOR.$data['img_path']; //cant find path
                $path2 = $image_path.$data['img_path'];
                if(file_exists($path2) && !empty($data['img_path'])){
                    unlink($path2);                  
                }
            }
            $result = mysqli_query($conn,"call update_supplier('$sup_id','$company','$tel','$fax','$address','$email','$Pro_image')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='supplier?update=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='supplier?update2=success';";
                echo"</script>";
            }
        }
        else{// ຖ້າມີການປ່ຽນຊື່ບໍລິສັດໃຫ້ເຮັດວຽກໃນໜ້ານີ້
            $check_name = mysqli_query($conn,"select * from supplier where company='$company'");
            if(mysqli_num_rows($check_name) > 0){//ກວດສອບວ່າຊື່ບໍລິສັດທີ່ປ່ຽນໃໝ່ຕຳກັນກັບຊື່ອື່ນຢູ່ Database ຫຼື ບໍ່
                echo"<script>";
                echo"window.location.href='supplier?company=same';";
                echo"</script>";
            }
            else{//ຖ້າຊື່ບໍ່ຕຳກັນໃຫ້ທຳການອັບເດດ
                if($img_path == ""){//ກວດສອບຄ່າຟາຍຮູບມາວ່າເປັນຄ່າວ່າງ ຫຼື ບໍ່
                    $Pro_image = $data['img_path'];
                }
                else{//ຖ້າຄ່າຟາຍຮູບບໍ່ເປັນຄ່າວ່າງໃຫ້ເຮັດວຽກໃນຈຸດນີ້
                    $ext = pathinfo(basename($_FILES['img_path']['name']), PATHINFO_EXTENSION);
                    $new_image_name = 'seven_'.uniqid().".".$ext;
                    $image_path = $path.'image/';
                    $upload_path = $image_path.$new_image_name;
                    move_uploaded_file($_FILES['img_path']['tmp_name'], $upload_path);
                    $Pro_image = $new_image_name;
                    $path2 = $image_path.$data['img_path'];
                    if(file_exists($path2) && !empty($data['img_path'])){
                        unlink($path2);                  
                    }
                }
                $result = mysqli_query($conn,"call update_supplier('$sup_id','$company','$tel','$fax','$address','$email','$Pro_image')");
                if(!$result){
                    echo"<script>";
                    echo"window.location.href='supplier?update=fail';";
                    echo"</script>";
                }
                else{
                    echo"<script>";
                    echo"window.location.href='supplier?update2=success';";
                    echo"</script>";
                }
            }
        }
      
    }
     //ສິ້ນສຸດການຈັດການຂໍ້ມູນຜູ້ສະໜອງ

     //ຈັດການຂໍ້ມູນສະຖານະລູກຄ້າ
    public static function select_customer_status($search,$page){
        // method ຂອງການດຶງຂໍ້ມູນສະຖານະມາສະແດງ
        global $result_customer_status;//ຕັ້ງໂຕປ່ຽນຢູ່ພາຍໃນ class ເອົາໄປໃຊ້ນອກ class
        global $conn; //ດຶງຕົວປ່ຽນພາຍນອກ class ມາໃຊ້
        $result_customer_status = mysqli_query($conn,"call customer_status('$search','$page');");
    }
    public static function insert_customer_status($stt_id,$stt_name){//method ການບັນທຶກຂໍ້ມູນ
        global $conn;
        // method ຂອງການບັນທຶກຂໍ້ມູນສະຖານະລູກຄ້າ
        $checkid = mysqli_query($conn,"select * from customer_status where stt_id='$stt_id'"); //ກວດສອບວ່າລະຫັດຕຳແໜ່ງນີ້ມີຫຼືຍັງ
        $checkname = mysqli_query($conn,"select * from customer_status where stt_name='$stt_name'");// ກວດສອບວ່າຊື່ຕຳແໜ່ງນີ້ມີຫຼືຍັງ
        if(mysqli_num_rows($checkid) > 0){  //ກວດສອບວ່າລະຫັດສະຖານະນີ້ມີຫຼືຍັງ
            echo"<script>";
            echo"window.location.href='customer-status?id=same';";
            echo"</script>";
        }
        else if(mysqli_num_rows($checkname) > 0){// ກວດສອບວ່າຊື່ຕຳແໜ່ງນີ້ມີຫຼືຍັງ
            echo"<script>";
            echo"window.location.href='customer-status?sstname=same';";
            echo"</script>";
        }
        else{
            //ຄຳສັ່ງບັນທຶກຂໍ້ມູນຕຳແໜ່ງ
            $result = mysqli_query($conn,"call insert_customer_status('$stt_id','$stt_name')");
            if(!$result){ //ກວດສອບການບັນທຶກຂໍ້ມູນຖ້າເກີດຂໍ້ຜິດພາດໃຫ້ມາເຮັດວຽກຢູ່ນີ້
                echo"<script>";
                echo"window.location.href='customer-status?save=fail';";
                echo"</script>";
            }
            else{//ກວດສອບການບັນທຶກຂໍ້ມູນຖ້າບໍ່ມີຂໍ້ຜິດພາດໃຫ້ມາເຮັດວຽກຢູ່ນີ້
                echo"<script>";
                echo"window.location.href='customer-status?save2=success';";
                echo"</script>";
            }
        }

    }
    public static function update_customer_status($stt_id,$stt_name){// method ການແກ້ໄຂຂໍ້ມູນ
        global $conn;
        $checkname = mysqli_query($conn,"select * from customer_status where stt_name='$stt_name'");
        if(mysqli_num_rows($checkname) > 0){//ກວດສອບວ່າຊື່ສະຖານະນີ້ມີແລ້ວຫຼືຍັງ
            echo"<script>";
            echo"window.location.href='customer-status?sttname=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call update_customer_status('$stt_id','$stt_name')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='customer-status?update=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='customer-status?update2=success';";
                echo"</script>";
            }
        }
    }
    public static function delete_customer_status($stt_id){// method ການລົບຂໍ້ມູນ
        global $conn;
        $check_cus = mysqli_query($conn,"select * from customer where stt_id='$stt_id'");
        if(mysqli_num_rows($check_cus) > 0){//ກວດສອບໄອດີຂອງສະຖານະຢູ່ຕາຕະລາງລູກຄ້າ
            echo"<script>";
            echo"window.location.href='customer-status?delete=fail';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call delete_customer_status('$stt_id')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='customer-status?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='customer-status?del2=success';";
                echo"</script>";
            }
        }
    }
    //ສິນສຸດການຈັດການສະຖານະລູກຄ້າ

    //ຈັດການຂໍ້ມູນລູກຄ້າ
    public static function select_customer($search,$page){
        global $conn;
        global $resultcustomer;
        // if($search == ''){
        //     $search = mysqli_real_escape_string($conn, $search);
        // }
        $resultcustomer = mysqli_query($conn,"call customer('$search','$page')");
    }
    public static function select_customer_count($search){
        global $conn;
        global $resultcustomer_count;
        // if($search == ''){
        //     $search = mysqli_real_escape_string($conn, $search);
        // }
        $search = "%".$search."%";
        $resultcustomer_count = mysqli_query($conn,"call customer_count('$search')");
    }
    public static function insert_customer($cus_id,$company,$tel,$address,$email,$stt_id){
        global $conn;
        $check_id = mysqli_query($conn,"select * from customer where cus_id='$cus_id'");
        if(mysqli_num_rows($check_id) > 0){
            echo"<script>";
            echo"window.location.href='customer?id=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call insert_customer('$cus_id','$company','$tel','$address','$email','$stt_id')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='customer?save=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='customer?save2=success';";
                echo"</script>";
            }
        }
    }
    public static function delete_customer($cus_id){
        global $conn;
        $check_form = mysqli_query($conn,"select * from form where cus_id='$cus_id'");
        $check_putback = mysqli_query($conn,"select * from product_putback_stock where cus_id='$cus_id'");
        if(mysqli_num_rows($check_form) > 0){
            echo"<script>";
            echo"window.location.href='customer?form=fail';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_putback) > 0){
            echo"<script>";
            echo"window.location.href='customer?pps=fail';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call delete_customer('$cus_id')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='customer?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='customer?del2=success';";
                echo"</script>";
            }
        }
    }
    public static function update_customer($cus_id,$company,$tel,$address,$email,$stt_id){
        global $conn;
        $result = mysqli_query($conn,"call update_customer('$cus_id','$company','$tel','$address','$email','$stt_id')");
        if(!$result){
            echo"<script>";
            echo"window.location.href='customer?update=fail';";
            echo"</script>";
        }
        else{
            echo"<script>";
            echo"window.location.href='customer?update2=success';";
            echo"</script>";
        }
    }
    //ສິ້ນສຸດການຈັດການຂໍ້ມູນລູກຄ້າ

    //ຈັດການຂໍ້ມູນປະເພດສິນຄ້າ
    public static function select_category($search,$page){
        global $conn;
        global $resultcategory;
        $resultcategory = mysqli_query($conn,"call category('$search','$page')");
    }
    public static function insert_category($cate_name){
        global $conn;
        $check_id = mysqli_query($conn,"select * from category where cate_name='$cate_name'");
        if(mysqli_num_rows($check_id) > 0){
            echo"<script>";
            echo"window.location.href='category?name=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call insert_category('$cate_name')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='category?save=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='category?save2=success';";
                echo"</script>";
            }
        }
    }   
    public static function update_category($cate_id,$cate_name){
        global $conn;
        $check_id = mysqli_query($conn,"select * from category where cate_name='$cate_name'");
        if(mysqli_num_rows($check_id) > 0){
            echo"<script>";
            echo"window.location.href='category?name=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call update_category('$cate_id','$cate_name')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='category?update=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='category?update2=success';";
                echo"</script>";
            }
        }
    }
    public static function delete_category($cate_id){
        global $conn;
        $check_product = mysqli_query($conn,"select * from products where cate_id='$cate_id'");
        if(mysqli_num_rows($check_product) > 0){
            echo"<script>";
            echo"window.location.href='category?delete=fail';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call delete_category('$cate_id')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='category?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='category?del2=success';";
                echo"</script>";
            }
        }
    }

    //ສິ້ນສຸດການຈັດການຂໍ້ມູນປະເພດສິນຄ້າ


    //ຈັດການຂໍ້ມູນຫົວໜ່ວຍສິນຄ້າ
    public static function select_unit($search,$page){
        global $conn;
        global $resultunit;
        $resultunit = mysqli_query($conn,"call unit('$search','$page')");
    }
    public static function select_unit_count($search){//method ດຶງຂໍ້ມູນພະນັກງານມາສະແດງ
        global $conn;
        global $resultunit_count; 
        $resultunit_count = mysqli_query($conn,"call unit_count('$search')");      
    }
    public static function insert_unit($unit_name){
        global $conn;
        $check_name = mysqli_query($conn,"select * from unit where unit_name='$unit_name'");
        if(mysqli_num_rows($check_name) > 0){
            echo"<script>";
            echo"window.location.href='unit?name=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call insert_unit('$unit_name');");
            if(!$result){
                echo"<script>";
                echo"window.location.href='unit?save=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='unit?save2=success';";
                echo"</script>";
            }
        }
    }
    public static function update_unit($unit_id,$unit_name){
        global $conn;
        $check_name = mysqli_query($conn,"select * from unit where unit_name='$unit_name'");
        if(mysqli_num_rows($check_name) > 0){
            echo"<script>";
            echo"window.location.href='unit?name=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call update_unit('$unit_id','$unit_name');");
            if(!$result){
                echo"<script>";
                echo"window.location.href='unit?update=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='unit?update2=success';";
                echo"</script>";
            }
        }
    }
    public static function delete_unit($unit_id){
        global $conn;
        $check_product = mysqli_query($conn,"select * from products where unit_id='$unit_id'");
        if(mysqli_num_rows($check_product) > 0){
            echo"<script>";
            echo"window.location.href='unit?delete=fail';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call delete_unit('$unit_id')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='unit?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='unit?del2=success';";
                echo"</script>";
            }
        }
    }
    //ສິນສຸດການຈັດການຂໍ້ມູນຫົວໜ່ວຍສິນຄ້າ

    //ຈັດການຂໍ້ມູນຍີ່ຫໍ້ສິນຄ້າ
    public static function select_brand($search,$page){
        global $conn;
        global $resultbrand;
        $resultbrand = mysqli_query($conn,"call brand('$search','$page')");
    }
    public static function select_brand_count($search){//method ດຶງຂໍ້ມູນພະນັກງານມາສະແດງ
        global $conn;
        global $resultbrand_count; 
        $resultbrand_count = mysqli_query($conn,"call brand_count('$search')");      
    }
    public static function insert_brand($brand_name){
        global $conn;
        $check_name = mysqli_query($conn,"select * from brand where brand_name='$brand_name'");
        if(mysqli_num_rows($check_name) > 0){
            echo"<script>";
            echo"window.location.href='brand?name=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call insert_brand('$brand_name');");
            if(!$result){
                echo"<script>";
                echo"window.location.href='brand?save=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='brand?save2=success';";
                echo"</script>";
            }
        }
    }
    public static function update_brand($brand_id,$brand_name){
        global $conn;
        $check_name = mysqli_query($conn,"select * from brand where brand_name='$brand_name'");
        if(mysqli_num_rows($check_name) > 0){
            echo"<script>";
            echo"window.location.href='brand?name=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call update_brand('$brand_id','$brand_name')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='brand?update=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='brand?update2=success';";
                echo"</script>";
            }
        }
    }
    public static function delete_brand($brand_id){
        global $conn;
        $check_product = mysqli_query($conn,"select * from products where brand_id='$brand_id'");
        if(mysqli_num_rows($check_product) > 0){
            echo"<script>";
            echo"window.location.href='brand?delete=fail';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call delete_brand('$brand_id')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='brand?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='brand?del2=success';";
                echo"</script>";
            }
        }
    }
    //ສິນສຸດການຈັດການຂໍ້ມູນຍີ່ຫໍ້ສິນຄ້າ

    //ຈັດການຂໍ້ມູນອັດຕາແລກປ່ຽນ
    public static function select_rate($search,$page){
        global $conn;
        global $resultrate;
        $resultrate = mysqli_query($conn,"call rate('$search','$page')");
    }
    public static function insert_rate($rate_id,$rate_buy,$rate_sell){
        global $conn;
        $check_id = mysqli_query($conn,"select * from rate where rate_id='$rate_id'");
        if(mysqli_num_rows($check_id) > 0){
            echo"<script>";
            echo"window.location.href='rate?rate=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call insert_rate('$rate_id','$rate_buy','$rate_sell')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='rate?save=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='rate?save2=success';";
                echo"</script>";
            }
        }
    }
    public static function update_rate($rate_id,$rate_buy,$rate_sell){
        global $conn;
        $result = mysqli_query($conn,"call update_rate('$rate_id','$rate_buy','$rate_sell')");
        if(!$result){
            echo"<script>";
            echo"window.location.href='rate?update=fail';";
            echo"</script>";
        }
        else{
            echo"<script>";
            echo"window.location.href='rate?update2=success';";
            echo"</script>";
        }
    }
    public static function delete_rate($rate_id){
        global $conn;
        $check_stock = mysqli_query($conn,"select * from stocks where rate_id='$rate_id'");
        if(mysqli_num_rows($check_stock) > 0){
            echo"<script>";
            echo"window.location.href='rate?delete=fail';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call delete_rate('$rate_id')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='rate?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='rate?del2=success';";
                echo"</script>";
            }
        }
    }

    //ສິ້ນສຸດການຈັດການຂໍ້ມູນອັດຕາແລກປ່ຽນ

    //ຈັດການຂໍ້ມູນສາງ
    public static function select_pro_addr($search,$page){
        global $conn;
        global $result_pro_addr;
        $result_pro_addr = mysqli_query($conn,"call product_addr('$search','$page')");
    }
    public static function insert_pro_addr($addr_name){
        global $conn;
        $check_name = mysqli_query($conn,"select * from product_addr where addr_name='$addr_name'");
        if(mysqli_num_rows($check_name) > 0){
            echo"<script>";
            echo"window.location.href='product-address?name=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call insert_product_addr('$addr_name')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='product-address?save=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='product-address?save2=success';";
                echo"</script>";
            }
        }
    }
    public static function update_pro_addr($pro_ad,$addr_name){
        global $conn;
        $check_name = mysqli_query($conn,"select * from product_addr where addr_name='$addr_name'");
        if(mysqli_num_rows($check_name) > 0){
            echo"<script>";
            echo"window.location.href='product-address?name=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call update_product_addr('$pro_ad','$addr_name')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='product-address?update=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='product-address?update2=success';";
                echo"</script>";
            }
        }
    }
    public static function delete_pro_addr($pro_ad){
        global $conn;
        $check_stock = mysqli_query($conn,"select * from check_stock where pro_ad='$pro_ad'");
        if(mysqli_num_rows($check_stock) > 0){
            echo"<script>";
            echo"window.location.href='product-address?delete=fail';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call delete_product_addr('$pro_ad')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='product-address?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='product-address?del2=success';";
                echo"</script>";
            }
        }
    }
    //ສິ້ນສຸດຈັດການຂໍ້ມູນສາງ

     //ຈັດການຂໍ້ມູນ form
     public static function select_form($search,$page){
        // method ຂອງການດຶງຂໍ້ມູນສະຖານະມາສະແດງ
        global $resultform;//ຕັ້ງໂຕປ່ຽນຢູ່ພາຍໃນ class ເອົາໄປໃຊ້ນອກ class
        global $conn; //ດຶງຕົວປ່ຽນພາຍນອກ class ມາໃຊ້
        $resultform = mysqli_query($conn,"call form('$search','$page');");
    }
    public static function select_form_count($search){
        global $conn;
        global $resultform_count;
        global $path;
        $resultform_count = mysqli_query($conn,"call form_count('$search')");
    }


    //ຈັດການຂໍ້ມູນສິນຄ້າ
    public static function select_product($search,$page){
        global $conn;
        global $resultproduct;
        global $path;
        $resultproduct = mysqli_query($conn,"call products('$search','$page')");
    }
    public static function select_product_count($search){
        global $conn;
        global $resultproduct_count;
        global $path;
        $resultproduct_count = mysqli_query($conn,"call products_count('$search')");
    }
    public static function insert_product($code,$pro_name,$gen,$cate_id,$unit_id,$brand_id,$qtyalert,$img_path){
        global $conn;
        global $path;
        $check_id = mysqli_query($conn,"select * from products where code='$code'");
        if(mysqli_num_rows($check_id) > 0){
            echo"<script>";
            echo"window.location.href='products?code=same';";
            echo"</script>";
        }
        else{
            if($img_path == ""){//ກວດສອບຄ່າຟາຍຮູບມາວ່າເປັນຄ່າວ່າງ ຫຼື ບໍ່
                $Pro_image = '';
            }
            else{//ຖ້າຄ່າຟາຍຮູບບໍ່ເປັນຄ່າວ່າງໃຫ້ເຮັດວຽກໃນຈຸດນີ້
                $ext = pathinfo(basename($_FILES['img_path']['name']), PATHINFO_EXTENSION);
                $new_image_name = 'seven_'.uniqid().".".$ext;
                $image_path = $path.'image/';
                $upload_path = $image_path.$new_image_name;
                move_uploaded_file($_FILES['img_path']['tmp_name'], $upload_path);
                $Pro_image = $new_image_name;
            }
            $result = mysqli_query($conn,"call insert_products('$code','$pro_name','$gen','$cate_id','$unit_id','$brand_id','$qtyalert','$Pro_image')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='products?save=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='products?save2=success';";
                echo"</script>";
            }
        }

    }
    public static function update_product($code,$pro_name,$gen,$cate_id,$unit_id,$brand_id,$qtyalert,$img_path){
        global $conn;
        global $path;
        $check_id = mysqli_query($conn,"select * from products where code='$code'");
        if(mysqli_query($check_id) > 0){
            echo"<script>";
            echo"window.location.href='products?code=same';";
            echo"</script>";
        }
        else{
            $get_img = mysqli_query($conn, "select img_path from products where code='$code'");//ດຶງຊື່ຟາຍຮູບພາບໂດຍໃຊ້ໄອດີ
            $data = mysqli_fetch_array($get_img, MYSQLI_ASSOC);
            if($img_path == ""){//ກວດສອບຄ່າຟາຍຮູບມາວ່າເປັນຄ່າວ່າງ ຫຼື ບໍ່
                $Pro_image = $data['img_path'];
            }
            else{//ຖ້າຄ່າຟາຍຮູບບໍ່ເປັນຄ່າວ່າງໃຫ້ເຮັດວຽກໃນຈຸດນີ້
                $ext = pathinfo(basename($_FILES['img_path']['name']), PATHINFO_EXTENSION);
                $new_image_name = 'seven_'.uniqid().".".$ext;
                $image_path = $path.'image/';
                $upload_path = $image_path.$new_image_name;
                move_uploaded_file($_FILES['img_path']['tmp_name'], $upload_path);
                $Pro_image = $new_image_name;
                $path2 = $image_path.$data['img_path'];
                if(file_exists($path2) && !empty($data['img_path'])){
                    unlink($path2);
                    
                }
            }
            $result = mysqli_query($conn,"call update_products('$code','$pro_name','$gen','$cate_id','$unit_id','$brand_id','$qtyalert','$Pro_image');");
            if(!$result){
                echo"<script>";
                echo"window.location.href='products?update=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='products?update2=success';";
                echo"</script>";
            }
        }
    }
    public static function delete_product($code){
        global $conn;
        global $path;
        $check_stocks = mysqli_query($conn,"select * from stocks where code='$code'");//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງສະຕ໋ອກ
        $check_formdetail = mysqli_query($conn,"select * from formdetail where code='$code'");//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງລາຍລະອຽດຟອມ
        $check_distribute = mysqli_query($conn,"select * from distribute where code='$code'");//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງເບີກຈ່າຍສິນຄ້າ
        $check_pps = mysqli_query($conn,"select * from product_putback_stock where code='$code'");//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງສິນຄ້າເບີກຈ່າຍແລ້ວນຳກັບຄືນ
        $check_stock = mysqli_query($conn,"select * from check_stock where code='$code'");//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງນັບສະຕ໋ອກ
        $check_spare = mysqli_query($conn,"select * from spare_part where code='$code'");//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງປ່ຽນອາໄຫຼ່ສິນຄ້າ
        if(mysqli_num_rows($check_stocks) > 0){//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງສະຕ໋ອກ
            echo"<script>";
            echo"window.location.href='products?stock=fail';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_formdetail) > 0) {//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງລາຍລະອຽດຟອມ
            echo"<script>";
            echo"window.location.href='products?formdetail=fail';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_distribute) > 0) {//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງເບີກຈ່າຍສິນຄ້າ
            echo"<script>";
            echo"window.location.href='products?dis=fail';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_pps) > 0) {//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງສິນຄ້າເບີກຈ່າຍແລ້ວນຳກັບຄືນ
            echo"<script>";
            echo"window.location.href='products?pps=fail';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_stock) > 0) {//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງນັບສະຕ໋ອກ
            echo"<script>";
            echo"window.location.href='products?check=fail';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_spare) > 0) {//ກວດສອບລະຫັດສິນຄ້າຢູ່ໃນຕາຕະລາງປ່ຽນອາໄຫຼ່ສິນຄ້າ
            echo"<script>";
            echo"window.location.href='products?spare=fail';";
            echo"</script>";
        }
        else{
            $get_img = mysqli_query($conn, "select img_path from products where code='$code'");//ດຶງຊື່ຟາຍຮູບພາບໂດຍໃຊ້ໄອດີ
            $data = mysqli_fetch_array($get_img, MYSQLI_ASSOC);
            $path2 = $path."image/".$data['img_path'];
            if(file_exists($path2) && !empty($data['img_path'])){
                unlink($path2);
            }
            $result = mysqli_query($conn,"call delete_products('$code')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='products?del=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='products?del2=success';";
                echo"</script>";
            }
        }
    }
    //ສິ້ນສຸດການຈັດການຂໍ້ມູນສິນຄ້າ

    // Stock
    public static function cookie_stock($code,$serial,$qty,$price,$pro_no,$dnv,$import_no,$remark){
        global $conn;
        $check_code = mysqli_query($conn,"select * from products where code='$code'");
        $check_serail_stock = mysqli_query($conn,"select * from stocks where serial='$serial'");
        $check_pro_no = mysqli_query($conn,"select * from stocks where pro_no='$pro_no'");
       if(mysqli_num_rows($check_code) <= 0){
            echo"<script>";
            echo"window.location.href='import?code=null';";
            echo"</script>";
       }
       else if(mysqli_num_rows($check_serail_stock) > 0){
            echo"<script>";
            echo"window.location.href='import?serial=stock';";
            echo"</script>";
       }
       else if(mysqli_num_rows($check_pro_no) > 0){
        echo"<script>";
        echo"window.location.href='import?no=has';";
        echo"</script>";
   }
       else{
            $get_info = mysqli_fetch_array($check_code,MYSQLI_ASSOC);
            $img_path = $get_info['img_path'];
            $name = $get_info['pro_name'];
            $gen = $get_info['gen'];
            if(isset($_COOKIE['stock_list'])){//ກວດສອບວ່າຄຸກກີ້ stock_list ນັ້ນມີຄ່າຫຼືບໍ່
                $cookie_data = stripcslashes($_COOKIE['stock_list']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
                $cart_data = json_decode($cookie_data, true);//Decode ຄ່າຄຸກກີ້ອອກມາໃຫ້ອ່ານຄ່າເປັນ Array ໄດ້ໃນຮູບແບບ json
            }
            else{
                $cart_data = array();//ຖ້າຄຸກກີ້ບໍ່ມີຄ່າຂໍ້ມູນແລ້ວຕັ້ງໂຕປ່ຽນໃຫ້ເປັນອາເລ
            }
            $item_id_list = array_column($cart_data,'serial');//ຕັ້ງຄ່າ item_id_list ໃຫ້ມີຄ່າເທົ່າກັບ array $cart_data['serial']
            $item_pro_no = array_column($cart_data,'pro_no');
            if(in_array($serial,$item_id_list)){//ຖ້າວ່າ Serial ທີ່ປ້ອນມາທາງຄີບອດຕົງກັນກັບ Serial ທີ່ຢູ່ໃນ Array Cart_data ໃຫ້ເຮັດວຽກຈຸດນີ້
                echo"<script>";
                echo"window.location.href='import?serial-list=same';";
                echo"</script>";
            }
            else if(in_array($pro_no,$item_pro_no)){//ຖ້າວ່າ Serial ທີ່ປ້ອນມາທາງຄີບອດຕົງກັນກັບ Serial ທີ່ຢູ່ໃນ Array Cart_data ໃຫ້ເຮັດວຽກຈຸດນີ້
                echo"<script>";
                echo"window.location.href='import?list-no=same';";
                echo"</script>";
            }
            else{ // ຖ້າວ່າໄອດີບໍ່ຕົງກັນໃຫ້ເພີ່ມຂໍ້ມູນເຂົ້າໃນຄຸກກີ້
                $item_array = [//ເພີ່ມຂໍ້ມູນທີ່ຮັບມາຈາກຄີບອດເຂົ້າໄວ້ໃນຕົວປ່ຽນອາເລ $item_array
                    "code" => $code,
                    "serial" => $serial,
                    "img_path" => $img_path,
                    "name" => $name,
                    "gen" => $gen,
                    "qty" => $qty,
                    "price" => $price,
                    "pro_no" => $pro_no,
                    "dnv" => $dnv,
                    "import_no" => $import_no,
                    "remark" => $remark
                ];
                $cart_data[] = $item_array;//ເພີ່ມຂໍ້ມູນຈາກ $item_array ເຂົ້າໄປໃນ $cart_data
            }
            
            
            $item_data = json_encode($cart_data);//ປັບ item_data ໃຫ້ມັນສິ້ນສຸດການຮັບຂໍ້ມູນຈາກ $cart_data
            setcookie('stock_list',$item_data,time() + (86400 * 30));//ຕັ້ງຄ່າເວລາຄຸກກີ້
            echo"<script>";
            echo"window.location.href='import';";
            echo"</script>";
       }
    }
    public static function select_stock_list(){
        global $cart_data;
        if(isset($_COOKIE['stock_list'])){//ຕອນໂຫຼດກວດສອບວ່າຄຸກກີ້ມີຄ່າວ່າງຫຼືບໍ່
            $cookie_data = stripslashes($_COOKIE['stock_list']);//ຕັ້ງຄຸກກີ້ໃຫ້ເປັນ string
            $cart_data = json_decode($cookie_data, true);// ຕັ້ງຄຸກກີ້ໃຫ້ເປັນຮູບແບບ json
        }
    }
    public static function del_stock($serial){
        $cookie_data = stripcslashes($_COOKIE['stock_list']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
        $cart_data = json_decode($cookie_data, true);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນອາເລໃນຮູບແບບ json
        foreach($cart_data as $keys => $values){//ຊອກຫາຄ່າໄອດີຢູ່ໃນອາເລ
            if($cart_data[$keys]['serial'] == $serial){//ຖ້າໄອດີຕົງກັນໃຫ້ລົບຂໍ້ມູນ
                unset($cart_data[$keys]);//ລົບຂໍ້ມູນຢູ່ຄຸກກີ້ໝົດແຖວທີ່ມີໄອດີຕົງກັນ
                $item_data = json_encode($cart_data);//ໃຫ້ຈົບການສ້າງອາເລໃນຮູບແບບ json
                setcookie('stock_list',$item_data,time() + (86400 * 30));//ຕັ້ງເວລາຄຸກກີ້
                echo"<script>";
                echo"window.location.href='import';";
                echo"</script>";
            }
        }
    }
    public static function clear_stock(){
        setcookie("stock_list","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
        echo"<script>";
        echo"window.location.href='import';";
        echo"</script>";
    }
    public static function save_stock($sup_id,$rate_id,$emp_id){
        global $conn;
        global $Date;
        global $Time;
        $get_rate = mysqli_query($conn,"select * from rate");
        $rate = mysqli_fetch_array($get_rate,MYSQLI_ASSOC);
        $rate_buy = $rate['rate_buy'];
        if(isset($_COOKIE['stock_list'])){//ກວດສອບວ່າຄຸກກີ້ stock_list ນັ້ນມີຄ່າຫຼືບໍ່
            $cookie_data = stripcslashes($_COOKIE['stock_list']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
            $cart_data = json_decode($cookie_data, true);//Decode ຄ່າຄຸກກີ້ອອກມາໃຫ້ອ່ານຄ່າເປັນ Array ໄດ້ໃນຮູບແບບ json
            foreach($cart_data as $data){
                $code = $data['code'];
                $serial = $data['serial'];
                $qty = $data['qty'];
                $price = $data['price'];
                $dnv = $data['dnv'];
                $imp_no = $data['import_no'];
                $pro_no = $data['pro_no'];
                $remark = $data['remark'];
                $result = mysqli_query($conn,"insert into stocks(code,serial,qty,price,dnv,imp_no,imp_date,imp_time,pro_no,rate_id,rate,emp_id,sup_id,remark) values('$code','$serial','$qty','$price','$dnv','$imp_no','$Date','$Time','$pro_no','$rate_id','$rate_buy','$emp_id','$sup_id','$remark')");
            }
            if(!$result){
                echo"<script>";
                echo"window.location.href='import?save=fail';";
                echo"</script>";
            }
            else{
                setcookie("stock_list","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
                echo"<script>";
                echo"window.location.href='import?save2=success';";
                echo"</script>";
            }
        }
        else{
            echo"<script>";
            echo"window.location.href='import?list=null';";
            echo"</script>";
        }

    }
    // End Stock

    //Distribute Form
    public static function cookie_distribute($code,$serial,$qty,$form_id,$remark){
        global $conn;
        $check_code = mysqli_query($conn,"select * from products where code='$code'");
        $check_serail_stock = mysqli_query($conn,"select * from stocks where serial='$serial' and code='$code'");
        $stock_qty = mysqli_fetch_array($check_serail_stock,MYSQLI_ASSOC);
        $check_form = mysqli_query($conn,"select * from form where form_id='$form_id' and stt_accept='ອະນຸມັດ'");
        if(mysqli_num_rows($check_code) <= 0){
            echo"<script>";
            echo"window.location.href='distribute?code=null';";
            echo"</script>";
       }
       else if(mysqli_num_rows($check_serail_stock) <= 0){
            echo"<script>";
            echo"window.location.href='distribute?code-serial=null';";
            echo"</script>";
       }
       else if($stock_qty['qty'] < $qty){
        echo"<script>";
        echo"window.location.href='distribute?qty=than';";
        echo"</script>";
        }
        else if(mysqli_num_rows($check_form) <= 0){
            echo"<script>";
            echo"window.location.href='distribute?form=false';";
            echo"</script>";
       }
        else{
            if(isset($_COOKIE['distribute_list'])){//ກວດສອບວ່າຄຸກກີ້ distribute_list ນັ້ນມີຄ່າຫຼືບໍ່
                $cookie_data = stripcslashes($_COOKIE['distribute_list']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
                $cart_data = json_decode($cookie_data, true);//Decode ຄ່າຄຸກກີ້ອອກມາໃຫ້ອ່ານຄ່າເປັນ Array ໄດ້ໃນຮູບແບບ json
            }
            else{
                $cart_data = array();//ຖ້າຄຸກກີ້ບໍ່ມີຄ່າຂໍ້ມູນແລ້ວຕັ້ງໂຕປ່ຽນໃຫ້ເປັນອາເລ
            }
            $item_id_list = array_column($cart_data,'serial');//ຕັ້ງຄ່າ serial ໃຫ້ມີຄ່າເທົ່າກັບ array $cart_data['serial']
            if(in_array($serial,$item_id_list)){//ຖ້າວ່າ Serial ທີ່ປ້ອນມາທາງຄີບອດຕົງກັນກັບ Serial ທີ່ຢູ່ໃນ Array Cart_data ໃຫ້ເຮັດວຽກຈຸດນີ້
                echo"<script>";
                echo"window.location.href='distribute?serial-list=same';";
                echo"</script>";
            }
            else{ // ຖ້າວ່າໄອດີບໍ່ຕົງກັນໃຫ້ເພີ່ມຂໍ້ມູນເຂົ້າໃນຄຸກກີ້
                $get_info = mysqli_fetch_array($check_code,MYSQLI_ASSOC);
                $name = $get_info['pro_name'];
                $gen = $get_info['gen'];
                $img_path = $get_info['img_path'];
                $item_array = [//ເພີ່ມຂໍ້ມູນທີ່ຮັບມາຈາກຄີບອດເຂົ້າໄວ້ໃນຕົວປ່ຽນອາເລ $item_array
                    "code" => $code,
                    "serial" => $serial,
                    "img_path" => $img_path,
                    "name" => $name,
                    "gen" => $gen,
                    "qty" => $qty,
                    "form_id" => $form_id,
                    "remark" => $remark
                ];
                $cart_data[] = $item_array;//ເພີ່ມຂໍ້ມູນຈາກ $item_array ເຂົ້າໄປໃນ $cart_data
            }
            $item_data = json_encode($cart_data);//ປັບ item_data ໃຫ້ມັນສິ້ນສຸດການຮັບຂໍ້ມູນຈາກ $cart_data
            setcookie('distribute_list',$item_data,time() + (86400 * 30));//ຕັ້ງຄ່າເວລາຄຸກກີ້
            echo"<script>";
            echo"window.location.href='distribute';";
            echo"</script>";
        }
    }
    public static function select_distribute_list(){
        global $cart_data;
        if(isset($_COOKIE['distribute_list'])){//ຕອນໂຫຼດກວດສອບວ່າຄຸກກີ້ມີຄ່າວ່າງຫຼືບໍ່
            $cookie_data = stripslashes($_COOKIE['distribute_list']);//ຕັ້ງຄຸກກີ້ໃຫ້ເປັນ string
            $cart_data = json_decode($cookie_data, true);// ຕັ້ງຄຸກກີ້ໃຫ້ເປັນຮູບແບບ json
        }
    }
    public static function del_distribute($serial){
        $cookie_data = stripcslashes($_COOKIE['distribute_list']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
        $cart_data = json_decode($cookie_data, true);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນອາເລໃນຮູບແບບ json
        foreach($cart_data as $keys => $values){//ຊອກຫາຄ່າໄອດີຢູ່ໃນອາເລ
            if($cart_data[$keys]['serial'] == $serial){//ຖ້າໄອດີຕົງກັນໃຫ້ລົບຂໍ້ມູນ
                unset($cart_data[$keys]);//ລົບຂໍ້ມູນຢູ່ຄຸກກີ້ໝົດແຖວທີ່ມີໄອດີຕົງກັນ
                $item_data = json_encode($cart_data);//ໃຫ້ຈົບການສ້າງອາເລໃນຮູບແບບ json
                setcookie('distribute_list',$item_data,time() + (86400 * 30));//ຕັ້ງເວລາຄຸກກີ້
                echo"<script>";
                echo"window.location.href='distribute';";
                echo"</script>";
            }
        }
    }
    public static function clear_distribute(){
        setcookie("distribute_list","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
        echo"<script>";
        echo"window.location.href='distribute';";
        echo"</script>";
    }
    public static function save_distribute($emp_id){
        global $conn;
        global $Date;
        global $Time;
        if(isset($_COOKIE['distribute_list'])){//ກວດສອບວ່າຄຸກກີ້ stock_list ນັ້ນມີຄ່າຫຼືບໍ່
            $cookie_data = stripcslashes($_COOKIE['distribute_list']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
            $cart_data = json_decode($cookie_data, true);//Decode ຄ່າຄຸກກີ້ອອກມາໃຫ້ອ່ານຄ່າເປັນ Array ໄດ້ໃນຮູບແບບ json
            foreach($cart_data as $data){
                $code = $data['code'];
                $serial = $data['serial'];
                $qty = $data['qty'];
                $form_id = $data['form_id'];
                $remark = $data['remark'];
                $result = mysqli_query($conn,"call insert_distribute('$code','$serial','$qty','$emp_id','$form_id','$Date','$Time','$remark')");
                $update = mysqli_query($conn,"update stocks set qty=qty-'$qty' where code='$code' and serial='$serial'; ");
            }
            if(!$result){
                echo"<script>";
                echo"window.location.href='distribute?save=fail';";
                echo"</script>";
            }
            else{
                setcookie("distribute_list","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
                echo"<script>";
                echo"window.location.href='distribute?save2=success';";
                echo"</script>";
            }
        }
        else{
            echo"<script>";
            echo"window.location.href='import?list=null';";
            echo"</script>";
        }
    }
    // End Distribute

    //Check_Stock
    public static function cookie_check_stock($code,$serial,$qty,$remark){
        global $conn;
        $check_code = mysqli_query($conn,"select * from products where code='$code'");
        $check_serail_stock = mysqli_query($conn,"select * from stocks where serial='$serial' and code='$code'");
        if(mysqli_num_rows($check_code) <= 0){
            echo"<script>";
            echo"window.location.href='check-stock?code=null';";
            echo"</script>";
       }
       else if(mysqli_num_rows($check_serail_stock) <= 0){
            echo"<script>";
            echo"window.location.href='check-stock?code-serial=null';";
            echo"</script>";
       }
        else{
            if(isset($_COOKIE['check_stock'])){//ກວດສອບວ່າຄຸກກີ້ distribute_list ນັ້ນມີຄ່າຫຼືບໍ່
                $cookie_data = stripcslashes($_COOKIE['check_stock']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
                $cart_data = json_decode($cookie_data, true);//Decode ຄ່າຄຸກກີ້ອອກມາໃຫ້ອ່ານຄ່າເປັນ Array ໄດ້ໃນຮູບແບບ json
            }
            else{
                $cart_data = array();//ຖ້າຄຸກກີ້ບໍ່ມີຄ່າຂໍ້ມູນແລ້ວຕັ້ງໂຕປ່ຽນໃຫ້ເປັນອາເລ
            }
            $item_id_list = array_column($cart_data,'serial');//ຕັ້ງຄ່າ serial ໃຫ້ມີຄ່າເທົ່າກັບ array $cart_data['serial']
            if(in_array($serial,$item_id_list)){//ຖ້າວ່າ Serial ທີ່ປ້ອນມາທາງຄີບອດຕົງກັນກັບ Serial ທີ່ຢູ່ໃນ Array Cart_data ໃຫ້ເຮັດວຽກຈຸດນີ້
                echo"<script>";
                echo"window.location.href='check-stock?serial-list=same';";
                echo"</script>";
            }
            else{ // ຖ້າວ່າໄອດີບໍ່ຕົງກັນໃຫ້ເພີ່ມຂໍ້ມູນເຂົ້າໃນຄຸກກີ້
                $get_info = mysqli_fetch_array($check_code,MYSQLI_ASSOC);
                $name = $get_info['pro_name'];
                $gen = $get_info['gen'];
                $img_path = $get_info['img_path'];
                $item_array = [//ເພີ່ມຂໍ້ມູນທີ່ຮັບມາຈາກຄີບອດເຂົ້າໄວ້ໃນຕົວປ່ຽນອາເລ $item_array
                    "code" => $code,
                    "serial" => $serial,
                    "img_path" => $img_path,
                    "name" => $name,
                    "gen" => $gen,
                    "qty" => $qty,
                    "remark" => $remark
                ];
                $cart_data[] = $item_array;//ເພີ່ມຂໍ້ມູນຈາກ $item_array ເຂົ້າໄປໃນ $cart_data
            }
            $item_data = json_encode($cart_data);//ປັບ item_data ໃຫ້ມັນສິ້ນສຸດການຮັບຂໍ້ມູນຈາກ $cart_data
            setcookie('check_stock',$item_data,time() + (86400 * 30));//ຕັ້ງຄ່າເວລາຄຸກກີ້
            echo"<script>";
            echo"window.location.href='check-stock';";
            echo"</script>";
        
        }
    }
    public static function select_check_stock(){
        global $cart_data;
        if(isset($_COOKIE['check_stock'])){//ຕອນໂຫຼດກວດສອບວ່າຄຸກກີ້ມີຄ່າວ່າງຫຼືບໍ່
            $cookie_data = stripslashes($_COOKIE['check_stock']);//ຕັ້ງຄຸກກີ້ໃຫ້ເປັນ string
            $cart_data = json_decode($cookie_data, true);// ຕັ້ງຄຸກກີ້ໃຫ້ເປັນຮູບແບບ json
        }
    }
    public static function save_check_stock($emp_id,$pro_ad){
        global $conn;
        global $Date;
        global $Time;
        if(isset($_COOKIE['check_stock'])){//ກວດສອບວ່າຄຸກກີ້ stock_list ນັ້ນມີຄ່າຫຼືບໍ່
            $cookie_data = stripcslashes($_COOKIE['check_stock']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
            $cart_data = json_decode($cookie_data, true);//Decode ຄ່າຄຸກກີ້ອອກມາໃຫ້ອ່ານຄ່າເປັນ Array ໄດ້ໃນຮູບແບບ json
            foreach($cart_data as $data){
                $code = $data['code'];
                $serial = $data['serial'];
                $qty = $data['qty'];
                $remark = $data['remark'];
                $result = mysqli_query($conn,"call insert_check_stock('$code','$serial','$qty','$emp_id','$Date','$Time','$pro_ad','$remark')");
            }
            if(!$result){
                echo"<script>";
                echo"window.location.href='check-stock?save=fail';";
                echo"</script>";
            }
            else{
                setcookie("check_stock","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
                echo"<script>";
                echo"window.location.href='check-stock?save2=success';";
                echo"</script>";
            }
        }
        else{
            echo"<script>";
            echo"window.location.href='check-stock?list=null';";
            echo"</script>";
        }
    }
    public static function clear_check_stock(){
        setcookie("check_stock","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
        echo"<script>";
        echo"window.location.href='check-stock';";
        echo"</script>";
    }
    public static function del_check_stock($serial){
        $cookie_data = stripcslashes($_COOKIE['check_stock']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
        $cart_data = json_decode($cookie_data, true);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນອາເລໃນຮູບແບບ json
        foreach($cart_data as $keys => $values){//ຊອກຫາຄ່າໄອດີຢູ່ໃນອາເລ
            if($cart_data[$keys]['serial'] == $serial){//ຖ້າໄອດີຕົງກັນໃຫ້ລົບຂໍ້ມູນ
                unset($cart_data[$keys]);//ລົບຂໍ້ມູນຢູ່ຄຸກກີ້ໝົດແຖວທີ່ມີໄອດີຕົງກັນ
                $item_data = json_encode($cart_data);//ໃຫ້ຈົບການສ້າງອາເລໃນຮູບແບບ json
                setcookie('check_stock',$item_data,time() + (86400 * 30));//ຕັ້ງເວລາຄຸກກີ້
                echo"<script>";
                echo"window.location.href='check-stock';";
                echo"</script>";
            }
        }
    }
    //ສິ້ນສຸດການນັບສະຕ໋ອກ

    //spare_part ປ່ຽນອາໄຫຼ່
    public static function cookie_spare_part($code,$serial,$spare,$code2,$serial2,$remark){
        global $conn;
        $check_code = mysqli_query($conn,"select * from products where code='$code'");
        $check_serail_stock = mysqli_query($conn,"select * from stocks where serial='$serial' and code='$code'");
        $qty = mysqli_fetch_array($check_serail_stock,MYSQLI_ASSOC);
        $check_code2 = mysqli_query($conn,"select * from products where code='$code2'");
        $check_serail_stock2 = mysqli_query($conn,"select * from stocks where serial='$serial2' and code='$code2'");
        $qty2 = mysqli_fetch_array($check_serail_stock2,MYSQLI_ASSOC);
        if(mysqli_num_rows($check_code) <= 0){
            echo"<script>";
            echo"window.location.href='spare-part?code=null';";
            echo"</script>";
       }
       else if(mysqli_num_rows($check_serail_stock) <= 0){
            echo"<script>";
            echo"window.location.href='spare-part?code-serial=null';";
            echo"</script>";
       }
       else if(mysqli_num_rows($check_code2) <= 0){
            echo"<script>";
            echo"window.location.href='spare-part?code2=null';";
            echo"</script>";
        }
        else if(mysqli_num_rows($check_serail_stock2) <= 0){
            echo"<script>";
            echo"window.location.href='spare-part?code-serial2=null';";
            echo"</script>";
        }
        else if($qty['qty'] <= 0){
            echo"<script>";
            echo"window.location.href='spare-part?qty=null';";
            echo"</script>";
        }
        else if($qty2['qty'] <= 0){
            echo"<script>";
            echo"window.location.href='spare-part?qty2=null';";
            echo"</script>";
        }
        else if($code == $code2 && $serial == $serial2){
            echo"<script>";
            echo"window.location.href='spare-part?code-in=same';";
            echo"</script>";
        }
        else{
            if(isset($_COOKIE['spare_parts'])){//ກວດສອບວ່າຄຸກກີ້ spare_part ນັ້ນມີຄ່າຫຼືບໍ່
                $cookie_data = stripcslashes($_COOKIE['spare_parts']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
                $cart_data = json_decode($cookie_data, true);//Decode ຄ່າຄຸກກີ້ອອກມາໃຫ້ອ່ານຄ່າເປັນ Array ໄດ້ໃນຮູບແບບ json
            }
            else{
                $cart_data = array();//ຖ້າຄຸກກີ້ບໍ່ມີຄ່າຂໍ້ມູນແລ້ວຕັ້ງໂຕປ່ຽນໃຫ້ເປັນອາເລ
            }
             // ຖ້າວ່າໄອດີບໍ່ຕົງກັນໃຫ້ເພີ່ມຂໍ້ມູນເຂົ້າໃນຄຸກກີ້
                $get_info = mysqli_fetch_array($check_code,MYSQLI_ASSOC);
                $get_info2 = mysqli_fetch_array($check_code2,MYSQLI_ASSOC);
                $name = $get_info['pro_name'];
                $gen = $get_info['gen'];
                $name2 = $get_info2['pro_name'];
                $gen2 = $get_info2['gen'];
                $id = 'id_'.uniqid();
                $item_array = [//ເພີ່ມຂໍ້ມູນທີ່ຮັບມາຈາກຄີບອດເຂົ້າໄວ້ໃນຕົວປ່ຽນອາເລ $item_array
                    "id" => $id,
                    "code" => $code,
                    "serial" => $serial,
                    "name" => $name,
                    "gen" => $gen,
                    "spare" => $spare,
                    "code2" => $code2,
                    "serial2" => $serial2,
                    "name2" => $name2,
                    "gen2" => $gen2,
                    "remark" => $remark
                ];
            $cart_data[] = $item_array;//ເພີ່ມຂໍ້ມູນຈາກ $item_array ເຂົ້າໄປໃນ $cart_data
            $item_data = json_encode($cart_data);//ປັບ item_data ໃຫ້ມັນສິ້ນສຸດການຮັບຂໍ້ມູນຈາກ $cart_data
            setcookie('spare_parts',$item_data,time() + (86400 * 30));//ຕັ້ງຄ່າເວລາຄຸກກີ້
            echo"<script>";
            echo"window.location.href='spare-part';";
            echo"</script>";
        
        }
    }
    public static function del_spare_part($id){
        $cookie_data = stripcslashes($_COOKIE['spare_parts']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
        $cart_data = json_decode($cookie_data, true);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນອາເລໃນຮູບແບບ json
        foreach($cart_data as $keys => $values){//ຊອກຫາຄ່າໄອດີຢູ່ໃນອາເລ
            if($cart_data[$keys]['id'] == $id){//ຖ້າໄອດີຕົງກັນໃຫ້ລົບຂໍ້ມູນ
                unset($cart_data[$keys]);//ລົບຂໍ້ມູນຢູ່ຄຸກກີ້ໝົດແຖວທີ່ມີໄອດີຕົງກັນ
                $item_data = json_encode($cart_data);//ໃຫ້ຈົບການສ້າງອາເລໃນຮູບແບບ json
                setcookie('spare_parts',$item_data,time() + (86400 * 30));//ຕັ້ງເວລາຄຸກກີ້
                foreach($cart_data as $keys => $values){}
                if(!$cart_data[$keys]){
                    setcookie("spare_parts","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
                }
                echo"<script>";
                echo"window.location.href='spare-part';";
                echo"</script>";
            }
        }
    }
    public static function select_spare_part(){
        global $cart_data;
        if(isset($_COOKIE['spare_parts'])){//ຕອນໂຫຼດກວດສອບວ່າຄຸກກີ້ມີຄ່າວ່າງຫຼືບໍ່
            $cookie_data = stripslashes($_COOKIE['spare_parts']);//ຕັ້ງຄຸກກີ້ໃຫ້ເປັນ string
            $cart_data = json_decode($cookie_data, true);// ຕັ້ງຄຸກກີ້ໃຫ້ເປັນຮູບແບບ json
        }
    }
    public static function clear_spare_part(){
        setcookie("spare_parts","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
        echo"<script>";
        echo"window.location.href='spare-part';";
        echo"</script>";
    }
    public static function save_spare_part($emp_id){
        global $conn;
        global $Date;
        global $Time;
        if(isset($_COOKIE['spare_parts'])){//ກວດສອບວ່າຄຸກກີ້ stock_list ນັ້ນມີຄ່າຫຼືບໍ່
            $cookie_data = stripcslashes($_COOKIE['spare_parts']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
            $cart_data = json_decode($cookie_data, true);//Decode ຄ່າຄຸກກີ້ອອກມາໃຫ້ອ່ານຄ່າເປັນ Array ໄດ້ໃນຮູບແບບ json
            foreach($cart_data as $data){
                $code = $data['code'];
                $serial = $data['serial'];
                $spare = $data['spare'];
                $code2 = $data['code2'];
                $serial2 = $data['serial2'];
                $remark = $data['remark'];
                $result = mysqli_query($conn,"call insert_spare_part('$emp_id','$code','$serial','$spare','$code2','$serial2','$Date','$Time','$remark')");
            }
            if(!$result){
                echo"<script>";
                echo"window.location.href='spare-part?save=fail';";
                echo"</script>";
            }
            else{
                setcookie("spare_parts","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
                echo"<script>";
                echo"window.location.href='spare-part?save2=success';";
                echo"</script>";
            }
        }
        else{
            echo"<script>";
            echo"window.location.href='spare-part?list=null';";
            echo"</script>";
        }
    }
    //ສິ້ນສຸດການປ່ຽນອາໄຫຼ່

    //form
    public static function select_form_cookie(){
        global $cart_data;
        if(isset($_COOKIE['list_form'])){//ຕອນໂຫຼດກວດສອບວ່າຄຸກກີ້ມີຄ່າວ່າງຫຼືບໍ່
            $cookie_data = stripslashes($_COOKIE['list_form']);//ຕັ້ງຄຸກກີ້ໃຫ້ເປັນ string
            $cart_data = json_decode($cookie_data, true);// ຕັ້ງຄຸກກີ້ໃຫ້ເປັນຮູບແບບ json
        }
    }
    public static function cookie_form($code,$qty){
        global $conn;
        $check_qty = mysqli_query($conn,"select sum(qty) as qty from products p left join stocks s on p.code=s.code where s.code='$code' group by s.code");
        $qty_stock = mysqli_fetch_array($check_qty,MYSQLI_ASSOC);
        $q = $qty_stock['qty'];
        if($q <= 0){
            echo"<script>";
            echo"window.location.href='form?qty=0';";
            echo"</script>";
       }
       else if($qty > $qty_stock['qty']){
            echo"<script>";
            echo"window.location.href='form?input=than';";
            echo"</script>";
       }
        else{
            if(isset($_COOKIE['list_form'])){//ກວດສອບວ່າຄຸກກີ້ distribute_list ນັ້ນມີຄ່າຫຼືບໍ່
                $cookie_data = stripcslashes($_COOKIE['list_form']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
                $cart_data = json_decode($cookie_data, true);//Decode ຄ່າຄຸກກີ້ອອກມາໃຫ້ອ່ານຄ່າເປັນ Array ໄດ້ໃນຮູບແບບ json
            }
            else{
                $cart_data = array();//ຖ້າຄຸກກີ້ບໍ່ມີຄ່າຂໍ້ມູນແລ້ວຕັ້ງໂຕປ່ຽນໃຫ້ເປັນອາເລ
            }
            $item_id_list = array_column($cart_data,'code');//ຕັ້ງຄ່າ serial ໃຫ້ມີຄ່າເທົ່າກັບ array $cart_data['code']
            if(in_array($code,$item_id_list)){//ຖ້າວ່າໄອດີທີ່ປ້ອນມາທາງຄີບອດຕົງກັນກັບໄອດີທີ່ຢູ່ໃນ Array Cart_data ໃຫ້ເຮັດວຽກຈຸດນີ້
                foreach($cart_data as $keys => $values){//Loop ຂໍ້ມູນ cart_data ອອກມາເພື່ອຊອກຫາໄອດີທີ່ປ້ອນເຂົ້າມາກັບໄອດີທີ່ຢູ່ໃນ cart_data ທີ່ຕົງກັນ
                    if($cart_data[$keys]["code"] == $code){//ຖ້າຫາກວ່າຊອກຫາໄອດີທີຕົງກັນໄດ້ແລ້ວແມ່ນເຮັດວຽກດັ່ງນີ້
                        $cart_data[$keys]["qty"] = $cart_data[$keys]["qty"] + $qty;//ປັບໃຫ້ຈຳນວນຂອງ array cart_data ບວກໃຫ້ກັບຈຳນວນທີ່ປ້ອນເຂົ້າມາ
                    }
                }
            }
            else{ // ຖ້າວ່າໄອດີບໍ່ຕົງກັນໃຫ້ເພີ່ມຂໍ້ມູນເຂົ້າໃນຄຸກກີ້
                $getin = mysqli_query($conn,"select * from products where code='$code'");
                $get_info = mysqli_fetch_array($getin,MYSQLI_ASSOC);
                $name = $get_info['pro_name'];
                $gen = $get_info['gen'];
                $img_path = $get_info['img_path'];
                $item_array = [//ເພີ່ມຂໍ້ມູນທີ່ຮັບມາຈາກຄີບອດເຂົ້າໄວ້ໃນຕົວປ່ຽນອາເລ $item_array
                    "code" => $code,
                    "img_path" => $img_path,
                    "name" => $name,
                    "gen" => $gen,
                    "qty" => $qty,
                ];
                $cart_data[] = $item_array;//ເພີ່ມຂໍ້ມູນຈາກ $item_array ເຂົ້າໄປໃນ $cart_data
            }
            $item_data = json_encode($cart_data);//ປັບ item_data ໃຫ້ມັນສິ້ນສຸດການຮັບຂໍ້ມູນຈາກ $cart_data
            setcookie('list_form',$item_data,time() + (86400 * 30));//ຕັ້ງຄ່າເວລາຄຸກກີ້
            echo"<script>";
            echo"window.location.href='form';";
            echo"</script>";
        
        }
    }
    public static function clear_form(){
        setcookie("list_form","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
        echo"<script>";
        echo"window.location.href='form';";
        echo"</script>";
    }
    public static function del_form($code){
        $cookie_data = stripcslashes($_COOKIE['list_form']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
        $cart_data = json_decode($cookie_data, true);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນອາເລໃນຮູບແບບ json
        foreach($cart_data as $keys => $values){//ຊອກຫາຄ່າໄອດີຢູ່ໃນອາເລ
            if($cart_data[$keys]['code'] == $code){//ຖ້າໄອດີຕົງກັນໃຫ້ລົບຂໍ້ມູນ
                unset($cart_data[$keys]);//ລົບຂໍ້ມູນຢູ່ຄຸກກີ້ໝົດແຖວທີ່ມີໄອດີຕົງກັນ
                $item_data = json_encode($cart_data);//ໃຫ້ຈົບການສ້າງອາເລໃນຮູບແບບ json
                setcookie('list_form',$item_data,time() + (86400 * 30));//ຕັ້ງເວລາຄຸກກີ້
                foreach($cart_data as $keys => $values){}
                if(!$cart_data[$keys]){
                    setcookie("list_form","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
                }
                echo"<script>";
                echo"window.location.href='form';";
                echo"</script>";
            }
        }
    }
    public static function save_form($form_id,$emp_id,$cus_id,$amount,$packing_no){
        global $conn;
        global $Date;
        global $Time;
        $stt_accept = 'ຍັງບໍ່ອະນຸມັດ';
        $status = "ຍັງບໍ່ທັນເບີກ";
        $usr_acc = "";
        if(isset($_COOKIE['list_form'])){//ກວດສອບວ່າຄຸກກີ້ stock_list ນັ້ນມີຄ່າຫຼືບໍ່
            $cookie_data = stripcslashes($_COOKIE['list_form']);//ຕັ້ງຄ່າຄຸກກີ້ໃຫ້ເປັນ String
            $cart_data = json_decode($cookie_data, true);//Decode ຄ່າຄຸກກີ້ອອກມາໃຫ້ອ່ານຄ່າເປັນ Array ໄດ້ໃນຮູບແບບ json
            $result = mysqli_query($conn,"call insert_form('$form_id','$emp_id','$cus_id','$amount','$packing_no','$Date','$Time','$stt_accept','$status','$usr_acc')");
            mysqli_free_result($result);  
            mysqli_next_result($conn);
            if(!$result){
                echo"<script>";
                echo"window.location.href='form?save5=fail';";
                echo"</script>";
            }
            else{
                foreach($cart_data as $data){
                    $code = $data['code'];
                    $qty = $data['qty'];
                    $result2 = mysqli_query($conn,"call inser_form_detail('$code','$qty','$form_id')");
                    mysqli_free_result($result2);  
                    mysqli_next_result($conn);
                }
                if(!$result2){
                    echo"<script>";
                    echo"window.location.href='form?save=fail';";
                    echo"</script>";
                }
                else{
                    setcookie("list_form","",time() - 3600);//ຕັ້ງຄ່າໃຫ້ຄຸກກີ້ໃຫ້ເປັນຄ່າວ່າງ
                    echo"<script>";
                    echo"window.location.href='form?save2=success';";
                    echo"</script>";
                }
            }
           
        }
        else{
            echo"<script>";
            echo"window.location.href='form?list=null';";
            echo"</script>";
        }
    }
    // end form
}
$obj = new obj();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="obj.php" method="post" id="form1">
        <input type="text" name="code" placeholder="code">
        <input type="text" name="qty" placeholder="qty">
        <button type="submit" name="add">add</button>
        <button type="submit" name="save">save</button>
    </form>
    <a href="obj.php?clear=clear">clear</a>
    <?php
        if(isset($_POST['save'])){
            $obj->save_form('20','001','1','10','9');
        }
        if(isset($_GET['clear'])){
            $obj->clear_form();
        }
        if(isset($_GET['id'])){
            $obj->del_form($_GET['id']);
        }
        if(isset($_POST['add'])){
            $obj->cookie_form($_POST['code'],$_POST['qty']);
        }
        $obj->select_form_cookie();
        if(isset($_COOKIE['list_form'])){
    ?>
    <table>
        <?php
            foreach($cart_data as $keys => $values){
        ?>
        <tr>
            <td><?php echo $values["code"] ?></td>
            <td><?php echo $values["name"] ?></td>
            <td><?php echo $values["gen"] ?></td>
            <td><?php echo $values["qty"] ?></td>
            <td><a href="obj.php?id=<?php echo $values["code"]; ?>">delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <?php
        }
        else{
            echo '<br> NO Data';
        }
        // echo implode("|",$cart_data);
    ?>
</body>
</html>