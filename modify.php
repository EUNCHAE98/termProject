
    <?php

session_start();

$nowBoard = isset($_SESSION["nowBoard"])?($_SESSION["nowBoard"]):"";

require_once("tools.php");
require_once("boardDao.php");

$bdao = new boardDao();

$num = requestValue("num");

$title = requestValue("title");
$writer = requestValue("writer");
$content = requestValue("content");

if($title && $writer && $content){
	    if($nowBoard == "QnABoard"){
	        $bdao->updateBoard("qboard",$title,$writer,$content,$num);
	    }else if($nowBoard == "reviewBoard"){
	        $bdao->updateBoard("rboard",$title,$writer,$content,$num);
	    }else if($nowBoard == "marketBoard"){
	        $bdao->updateBoard("sboard",$title,$writer,$content,$num);
	    }
        okGo("글이 수정되었습니다 ! ","$nowBoard.php");
    }else{ // 모든 항목이 채워지지 않았을 경우
        errorBack("모든 항목이 빈칸 없이 입력 되어야 합니다 ! ");
    }


?>
