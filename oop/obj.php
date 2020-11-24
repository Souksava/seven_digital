<?php
$conn = mysqli_connect("Localhost", "root", "", "seven");
class obj{
    public $conn;
    public $search;
    //ຈັດການຂໍ້ມູນຕຳແໜ່ງ
    public static function select_auther($search){
        global $resultauther;
        global $conn;
        $resultauther = mysqli_query($conn,"call auther('$s');");
    }
    public static function insert_auther($auther_id,$auther_name){
        global $conn;
        $checkid = mysqli_query($conn,"select * from auther where auther_id='$auther_id'");
        $checkname = mysqli_query($conn,"select * from auther where auther_name='$auther_name'");
        if(mysqli_num_rows($checkid) > 0){
            echo"<script>";
            echo"window.location.href='auther?id=same';";
            echo"</script>";
        }
        else if(mysqli_num_rows($checkname) > 0){
            echo"<script>";
            echo"window.location.href='auther?name=same';";
            echo"</script>";
        }
        else{
            $result = mysqli_query($conn,"call insert_auther('$auther_id','$auther_name')");
            if(!$result){
                echo"<script>";
                echo"window.location.href='auther?save=fail';";
                echo"</script>";
            }
            else{
                echo"<script>";
                echo"window.location.href='auther?save2=success';";
                echo"</script>";
            }
        }

    }
    public static function update_auther($auther_id_update,$auther_name_update){
        global $conn;
    }
    //ສິ້ນສຸດການຈັດການຂໍ້ມູນຕຳແໜ່ງ
}
$obj = new obj();
// $obj->insert_auther('0061','ll');
// while($row = mysqli_fetch_array($resultauther,MYSQLI_ASSOC)){
//     echo $row['auther_id'];
//     echo $row['auther_name'];
// }

?>
