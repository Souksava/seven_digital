<?php
$conn = mysqli_connect("Localhost", "root", "", "seven");
class obj{
    public $conn;
    public $search;
    //ຈັດການຂໍ້ມູນຕຳແໜ່ງ
    public static function select_auther($search){
        // method ຂອງການດຶງຂໍ້ມູນຕຳແໜ່ງມາສະແດງ
        global $resultauther;//ຕັ້ງໂຕປ່ຽນຢູ່ພາຍໃນ class ເອົາໄປໃຊ້ນອກ class
        global $conn; //ດຶງຕົວປ່ຽນພາຍນອກ class ມາໃຊ້
        $resultauther = mysqli_query($conn,"call auther('$s');");
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
    public static function select_employee($search){//method ດຶງຂໍ້ມູນພະນັກງານມາສະແດງ
        global $conn;
        global $resultemployee; 
        $resultemployee = mysqli_query($conn,"call employee('$search')");
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
    public static function select_supplier($search){//method ດຶງຂໍ້ມູນຜູ້ສະໜອງມາສະແດງ
        global $conn;
        global $resultsupplier;
        $resultsupplier = mysqli_query($conn,"call supplier('$search')");
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
}
$obj = new obj();
$obj->update_supplier('2','d','0202','021','vt','test@hotmail.com','ee');
// $obj->select_supplier('%%');
// while($row = mysqli_fetch_array($resultsupplier,MYSQLI_ASSOC)){
//     echo $row['sup_id'];
//     echo $row['company']."<br>";
// }

?>
