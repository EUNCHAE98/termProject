<?php

    require_once("tools.php");
    require_once("memberDao.php");

$mdao = new memberDao();

// 사용자가 입력한 id와 pw를 변수로 받아옴
$id = requestValue("id");
$pw = requestValue("pw");

if($id && $pw){
    $member = $mdao->getMember($id);
    
        if($member && $member["pw"] == $pw){
        session_start();
        
        $_SESSION["id"] = $id;
        $_SESSION["name"] = $member["name"];
        
        $msg = "Slime, Smile ! " .$member["name"]. " 반갑습니다 ! ";
        Go($msg);
    }else{
        errorBack("등록된 회원이 아닙니다 ! ");
    }
}else{
    errorBack("모든 항목을 채워주세요 ! ");
}

?>
