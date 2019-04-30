<?php
include("config.php");
$title = "";
$content = "";
$writer = "";
$file = "";
$act = "";
$idx = 0;
$count = 0;
if( isset($_POST['title']) ) {
	$title = htmlspecialchars($_POST['title']); //xss 공격 방어
}
if( isset($_POST['content']) ) {
	$content = htmlspecialchars($_POST['content']);
}
if( isset($_POST['writer']) ) {
	$writer = htmlspecialchars($_POST['writer']);
}
if( isset($_POST['act']) ) {
	$act = $_POST['act'];
}
if( isset($_POST['idx']) ) {
	$idx = (int)$_POST['idx'];
}
echo "title={$title},  content={$content},  writer={$writer} idx = {$idx}";
// 삭제
if( $act != "del" ) {
	if( is_uploaded_file($_FILES['file']['tmp_name']) ) {
		$uppath = "uploads/";
		$upfile = basename($_FILES['file']['name']);
		$target = $uppath . $upfile;
		if( move_uploaded_file($_FILES['file']['tmp_name'], $target) ) {
			$file = $upfile;
		}
	}
}

if( $act == "add" ) {
    echo "add";
	if( $title && $content && $writer ) {
		$sql = "INSERT INTO board SET ";
		$sql .= "title=:title";
		$sql .= ", content=:content";
		$sql .= ", writer=:writer";
		$sql .= ", file=:file";
		$sql .= ", wdate=now()";
		$sql .= ", udate=now()";
		$rs = $db->prepare($sql); //SQL 구문을 반복적으로 실행
		$rs->bindParam(":title", $title);
		$rs->bindParam(":content", $content);
		$rs->bindParam(":writer", $writer);
		$rs->bindParam(":file", $file);
        $rs->execute();
	}
} else if ( $act == "update" ) {
	if( $title && $idx && $content && $writer ) {
		$sql = "UPDATE board SET ";
		$sql .= "title=:title";
		$sql .= ", content=:content";
		$sql .= ", udate=now()";
		if( $file ) $sql .= ", file=:file";
		$sql .= " WHERE idx={$idx}";
		$rs = $db->prepare($sql);
		$rs->bindParam(":title", $title); //레퍼런스 바인딩
		$rs->bindParam(":content", $content);
		if( $file ) $rs->bindParam(":file", $file);
		$rs->execute();
		echo $sql;
	}
} else if( $act == "del" ) {
	if( $id ) {
		$sql = "DELETE FROM board WHERE id={$id}";
		$rs = $db->query($sql);
		$count = $rs->rowCount();
	}
}

if( $act != "del" ) {
	header("Location: /peripera/board.php");
} else {
	echo $count;
} 