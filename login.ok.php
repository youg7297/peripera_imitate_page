<?php
include("config.php");
$userid = "";
$userpw = "";
if(isset($_POST['userid'])) { //post -> 수행하는 것, 보안유지
	$userid = $_POST['userid'];
}
if(isset($_POST['userpw'])) {
	$userpw = $_POST['userpw'];
}
if( $userid && $userpw ) {
	$sql = "SELECT * FROM users "; 
	$sql .= "WHERE userid='{$userid}' ";
    $sql .= "AND userpw=sha1('{$userpw}')"; //sha1 -> 암호화
    echo $sql;
    if( $rs = $db->query($sql) ) { //sql 데이터 형식의 query() 메소드 사용
        if($user = $rs->fetch());
        print_r($user);
        $_SESSION['loginname'] = $user['username'];
        $_SESSION['loginid'] = $user['userid'];
	}
}
if($_SESSION['loginname'] != ""){
    header("Location: index.php");
} else {
    echo "<script>alert('로그인 실패'); history.back(); </script>";
}

?>