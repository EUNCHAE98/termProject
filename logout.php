<?php 
    require_once("tools.php");

    session_start();

    unset($_SESSION["id"]);
    unset($_SESSION["name"]);

    Go("로그아웃 되었습니다 ! ");
    
?>