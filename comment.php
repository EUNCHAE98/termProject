<?php

	require_once("tools.php");
	require_once("boardDao.php");

	$cdao = new boardDao();

	session_start();

	// 댓글 writer 로 쓸 아이디랑 이름 받아온다웅
	$userid = isset($_SESSION["id"])?($_SESSION["id"]):"";
	$username = isset($_SESSION["name"])?($_SESSION["name"]):"";
	$nowBoard = isset($_SESSION["nowBoard"])?($_SESSION["nowBoard"]):"";

	$co_content = requestValue("co_content");
	$co_writer = $username;

	$board_idx= requestValue("num");

	if($nowBoard=="QnABoard"){
		$comment = "qcomment";
	}else if($nowBoard=="reviewBoard"){
		$comment = "rcomment";
	}else if($nowBoard=="marketBoard"){
		$comment = "scomment";
	}

	if($co_content){
		$cdao->insertComment($comment, $board_idx, $co_writer, $co_content);

		Go("댓글이 등록되었습니다 ! ");
	} else{
		errorBack("댓글 내용을 입력해주세요 ! ");
	}



?>