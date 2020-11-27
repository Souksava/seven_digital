<?php
$conn = mysqli_connect("Localhost", "root", "", "seven");
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
    public static function update_employee($emp_id,$name,$surname,$gender,$tel,$address,$email,$pass,$auther_id,$sttid,$img_path){
        global $conn;
        global $path;
        $resultmp = mysqli_query($conn,"select * from employee where emp_id='$emp_id'");//ດຶງຄ່າອີເມວ ແລະ ລະຫັດຜ່ານ ໂດຍໃຊ້ໄອດີພະນັກງານ
        $rowmp = mysqli_fetch_array($resultmp,MYSQLI_ASSOC);
        $get_img = mysqli_query($get_img, "select  img_path from employee where emp_id='$emp_id'");
        $data = mysqli_fetch_array($get_img, MYSQLI_ASSOC);
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
                $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
                if(file_exists($path2) && !empty($data['img_path'])){
                    unlink($path2);
                    
                }
            }
            $result = mysqli_query($conn,"call update_employee('$emp_id','$name','$surname','$gender','$tel','$address','$email','$pass','$auther_id','$sttid','$Pro_image')");
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
                            $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
                            if(file_exists($path2) && !empty($data['img_path'])){
                                unlink($path2);
                                
                            }
                        }
                        $result = mysqli_query($conn,"call update_employee('$emp_id','$name','$surname','$gender','$tel','$address','$email','$pass','$auther_id','$sttid','$Pro_image')");
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
                            $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
                            if(file_exists($path2) && !empty($data['img_path'])){
                                unlink($path2);
                                
                            }
                        }
                        $result = mysqli_query($conn,"call update_employee('$emp_id','$name','$surname','$gender','$tel','$address','$email','$pass','$auther_id','$sttid','$Pro_image')");
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
                        $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
                        if(file_exists($path2) && !empty($data['img_path'])){
                            unlink($path2);
                            
                        }
                    }
                    $result = mysqli_query($conn,"call update_employee('$emp_id','$name','$surname','$gender','$tel','$address','$email','$pass','$auther_id','$sttid','$Pro_image')");
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
            $get_img = mysqli_query($get_img, "select  img_path from employee where emp_id='$emp_id'");
            $data = mysqli_fetch_array($get_img, MYSQLI_ASSOC);
            $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
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
                echo"window.location.href='supplier?save=success';";
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
            $get_img = mysqli_query($get_img, "select  img_path from supplier where sup_id='$sup_id'");
            $data = mysqli_fetch_array($get_img, MYSQLI_ASSOC);
            $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
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
                $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
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
                    $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
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
            echo"window.location.href='customer-status?sstname=same';";
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
        $resultcustomer = mysqli_query($conn,"call customer('$search','$page')");
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
    public static function select_pro_adr($search,$page){
        global $conn;
        global $result_pro_adr;
        $result_pro_adr = mysqli_query($conn,"call product_addr('$search','$page')");
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


    //ຈັດການຂໍ້ມູນສິນຄ້າ
    public static function select_product($search,$page){
        global $conn;
        global $resultproduct;
        global $path;
        $resultproduct = mysqli_query($conn,"call products('$search','$page')");
    }
    public static function insert_product($code,$pro_name,$gen,$cate_id,$unit_id,$brand_id,$qtyalert,$img_path){
        global $conn;
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
                $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
                if(file_exists($path2) && !empty($data['img_path'])){
                    unlink($path2);
                    
                }
            }
            $result = mysqli_query($conn,"call update_products('$code','$pro_name','$gen','$cate_id','$unit_id','$brand_id','$qtyalert','$Pro_image');");
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
            $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
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

    public static function cookie_stock($item_id,$item_name,$item_price,$item_quantity){
        global $conn;
        global $item_data;
        $item_array = arrary(
            "item_id" -> $item_id,
            "item_name" -> $item_name,
            "item_price" -> $item_price,
            "item_quantity" -> $item_quantity,
        );
        $cart_data[] = $item_array;
        $item_data = json_encode($cart_data);
        setcookie('stock',$item_data,time() + (86400 * 30));
        echo $item_data['item_id'];
    }
}
$obj = new obj();
// $obj->cookie_stock('1','2','3','4');
// $obj->select_product('%%','0');
// while($row = mysqli_fetch_array($resultproduct,MYSQLI_ASSOC)){
//     echo $row['code']." ";
//     echo $row['pro_name']."<br>";
// }
$item_id = '1';
$item_name = '2';
$item_price = '3';
$item_quantity = '4';
$item_array = arrary(
    "item_id" -> $item_id,
    "item_name" -> $item_name,
    "item_price" -> $item_price,
    "item_quantity" -> $item_quantity,
);
$cart_data[] = $item_array;
$item_data = json_encode($cart_data);
setcookie('stock',$item_data,time() + (86400 * 30));
?>
