<?php


session_start();

$nowBoard = isset($_SESSION["nowBoard"])?($_SESSION["nowBoard"]):"";

require_once("tools.php");
require_once("boardDao.php");

$num = requestValue("num");

$bdao = new boardDao();


	if($nowBoard == "QnABoard"){
	    $bdao -> deleteBoard("qboard",$num);
	} else if($nowBoard == "reviewBoard"){
	    $bdao -> deleteBoard("rboard",$num);
	} else if($nowBoard == "marketBoard"){
	    $bdao -> deleteBoard("sboard",$num);
	}

	okGo("게시글이 삭제 되었습니다 ! ", "$nowBoard.php");

?>