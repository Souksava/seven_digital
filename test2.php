<?php


$md5 = '123';
$flag = Check_Valid_Md5_String($md5);
if ($flag){ // flag true means string is a valid md5 encrypation
echo 'valid md5 string';
}else{
echo md5($md5);
}

//this function will check the string
function Check_Valid_Md5_String($md5=''){
if(empty($md5)) return false;
return preg_match('/^[a-f0-9]{32}$/', $md5);
}
?>