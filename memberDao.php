<?php

class memberDao{
    
    private $db;
    
    public function __construct() {
        try{
            $this -> db = new PDO("mysql:host=localhost;dbname=php","root","");
            $this -> db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            exit($e->getMessage());
        }
    }
    
    function getMember($id){
        try{
            $pstmt = $this->db->prepare("select * from smember where id=:id");
            $pstmt->bindValue(":id",$id,PDO::PARAM_STR);
            $pstmt->execute();
            
            $result = $pstmt->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            exit($e->getMessage());
        }
        return $result;
    }
    
    function insertMember($name, $id, $pw){
        try{
            $pstmt = $this->db->prepare("insert into smember(name, id, pw) values(:name, :id, :pw)");
            
            $pstmt->bindValue(":name",$name,PDO::PARAM_STR);
            $pstmt->bindValue(":id",$id,PDO::PARAM_STR);
            $pstmt->bindValue(":pw",$pw,PDO::PARAM_STR);
            
            $pstmt->execute();
        }catch(PDOException $e){
            exit($e->getMessage());
        }
    }
    
    function updateMember($name, $id, $pw){
        try{
            $pstmt = $this->db->prepare("update smember set name=:name, pw=:pw where id=:id");
             
            $pstmt->bindValue(":name",$name,PDO::PARAM_STR);
            $pstmt->bindValue(":id",$id,PDO::PARAM_STR);
            $pstmt->bindValue(":pw",$pw,PDO::PARAM_STR);
            
            $pstmt->execute();
        }catch(PDOException $e){
            exit($e->getMessage());
        }
    }
}
?>