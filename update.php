<?php

require_once("tools.php");
require_once("memberDao.php");

$mdao = new memberDao();

session_start();

$sid = isset($_SESSION["id"])?($_SESSION["id"]):"";

$id = requestValue("Uid");
$pw = requestValue("Upw");
$name = requestValue("Uname");

if($id == $sid){
    if($id && $pw && $name){
        $mdao->updateMember($name, $id, $pw);
        
        $_SESSION["Uid"] = $id;
        $_SESSION["Uname"] = $name;
        
        Go("회원 정보가 수정되었습니다 ! ", "index.php");
    }else{
        errorback("모든 항목을 다 채워주세요 ! ");
    }
    }else{
        errorback("접근 권한이 없습니다 ! ");
}


?>