<?php
//session -> 프로세스들 사이에서 통신을 하기 위해 메시지 교화를 통해 서로를 인식한 이후부터 통신을 마칠 때까지의 기간을 의미
//사용자의 로그인 정보를 계속해서 사용할 수 있도록 해줌
session_start(); //세션 초기화
//db 연결
$db = new PDO("mysql:host=localhost; dbname=peripera; charset=utf8","root","");

$loginname = "";
$loginid = "";
$login = false;

if( isset($_SESSION['loginname']) ) { //isset -> 확인할 변수명
	$loginname = $_SESSION['loginname'];
}
if( isset($_SESSION['loginid']) ) {
	$loginid = $_SESSION['loginid'];
}
if( $loginname && $loginid ) {
	$login = true;
}