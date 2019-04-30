<?php
include("config.php");
$joinname = "";
$joinid = "";
$joinpw = "";
$email = "";
if(isset($_POST['joinname'])) {
	$joinname = $_POST['joinname'];
}
if(isset($_POST['joinid'])) { //post -> 수행하는 것, 보안유지
	$joinid = $_POST['joinid'];
}
if(isset($_POST['joinpw'])) {
	$joinpw = $_POST['joinpw'];
}
if(isset($_POST['email'])) {
	$email = $_POST['email'];
}
if($joinname && $joinid && $joinpw) {
    $sql = "INSERT INTO users (username, userid, userpw, email)"; 
    $sql .= " VALUES ('{$joinname}', '{$joinid}', SHA1('{$joinpw}'), '{$email}');";
    echo $sql;
    if($db->query($sql)){
        echo "<script>alert('회원가입에 성공했습니다. 로그인창으로 이동합니다.');</script>";
        echo "<script>setTimeout(function(){location.href = 'login.php';}, 1000);</script>";
    } else {
        echo "<script>alert('회원가입 실패'); history.back(); </script>";
    }
    

}


?>