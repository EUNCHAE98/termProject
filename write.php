<?php

session_start();

$nowBoard = isset($_SESSION["nowBoard"])?($_SESSION["nowBoard"]):"";

require_once("tools.php");
require_once("boardDao.php");

$bdao = new boardDao();

$title = requestValue("title");
$writer = requestValue("writer");
$content = requestValue("content");

if($title && $writer && $content){
        if($nowBoard == "QnABoard"){
            $bdao -> insertBoard("qboard",$title, $writer, $content);
        } else if($nowBoard == "reviewBoard"){
            $bdao -> insertBoard("rboard",$title, $writer, $content);
        } else if($nowBoard == "marketBoard"){
            $bdao -> insertBoard("sboard",$title, $writer, $content);
        }
        okGo("글이 등록되었습니다 ! ","$nowBoard.php");
    }else{ // 모든 항목이 채워지지 않았을 경우
        errorBack("모든 항목이 빈칸 없이 입력 되어야 합니다 ! ");
    }


?>
