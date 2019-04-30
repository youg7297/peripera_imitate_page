<?php
include("config.php");
$joinid = "";
$joinname = "";
$itc = "";
$re_id = "";
if(isset($_GET['joinid'])){
    $joinid = $_GET['joinid'];
    $sql = "SELECT count(*) FROM users WHERE userid = {$joinid}";
    $rs = $db->query($sql);
    $fet = $rs->fetch(PDO::FETCH_ASSOC);
    $row = $fet['count(*)'];
    $itc = "아이디";
    $re_id = "chk_id";
}
if(isset($_GET['joinname'])){
    $joinname = $_GET['joinname'];
    $sql = "SELECT count(*) FROM users WHERE username = {$joinname}";
    $rs = $db->query($sql);
    $fet = $rs->fetch(PDO::FETCH_ASSOC);
    $row = $fet['count(*)'];
    $itc = "닉네임";
    $re_id = "chk_nick";
}



?>

<script>
    var row="<?= $row[0] ?>";
    if(row==1){
        parent.document.getElementById("<?=$re_id?>").value="0";
        parent.alert("이미 사용중인 <?= $itc ?>입니다.");
    } else {
        parent.document.getElementById("<?=$re_id?>").value="1";
        parent.alert("사용 가능한<?= $itc?>입니다..");
    }
</script>