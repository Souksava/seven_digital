<?php
    $conn = mysqli_connect("Localhost", "root", "", "seven");
    date_default_timezone_set("Asia/Bangkok");
    $datenow = time();
    $Date = date("Y-m-d",$datenow);
    $Time = date("H:i:s",$datenow);
    class employee{
        public $conn;
        public static function select_employee($search,$page){//method ດຶງຂໍ້ມູນພະນັກງານມາສະແດງ
            global $conn;
            global $resultemployee; 
            global $resultauther; 
            $resultemployee = mysqli_query($conn,"call employee('$search','$page')");    
            $resultauther = mysqli_query($conn,"select * from auther order by auther_name asc;");    
        }
        public static function select_auther($search,$page){//method ດຶງຂໍ້ມູນພະນັກງານມາສະແດງ
            global $conn;
            global $resultauther;   
            $resultauther = mysqli_query($conn,"select * from auther order by auther_name asc;");    
            // global $resultauther;//ຕັ້ງໂຕປ່ຽນຢູ່ພາຍໃນ class ເອົາໄປໃຊ້ນອກ class
            // global $conn; //ດຶງຕົວປ່ຽນພາຍນອກ class ມາໃຊ້
            // $resultauther = mysqli_query($conn,"call auther('$search','$page');");
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
                                $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
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
                            $path2 = __DIR__.DIRECTORY_SEPARATOR.$path.'image'.DIRECTORY_SEPARATOR.$data['img_path'];
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
    }
    $obj = new employee();
    $auther = new employee();
?>