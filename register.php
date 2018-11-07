<?php

require_once("tools.php");
require_once("memberDao.php");

$mdao = new memberDao();

$name = requestValue("Rname");
$id = requestValue("Rid");
$pw = requestValue("Rpw");


if($name && $id && $pw){
    if($mdao->getMember($id)){
        errorBack("이미 사용 중인 아이디 입니다 ! ");
    }else {
        $mdao -> insertMember($name, $id, $pw);
        $msg = "Welcome to be a part of Smile, Slime ! " .$name. " ! ";
        
        Go($msg);
    }
}else {
    errorBack("모든 입력란을 채워주세요 ! ");
}

?>