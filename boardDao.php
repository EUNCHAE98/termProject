<?php

class boardDao{
    
    private $db;
    
    public function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=php","root","");
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $e){
            exit($e->getMessage());
        }
    }
    
    // 게시글 한 개 불러오는거
    function getBoard($board, $num){
        try{
            $pstmt = $this->db->prepare("select * from $board where num = :num");
            $pstmt -> bindValue(":num",$num,PDO::PARAM_INT);
            $pstmt -> execute();
            
            $result = $pstmt->fetch(PDO::FETCH_ASSOC);
            
        }catch(PDOException $e){
            exit($e->getMessage());
        }
            return $result;
        
    }
    
    // 게시글 전체 불러오는거
    function getAllBoard($board){
        try{
            $pstmt = $this->db->prepare("select * from $board order by num desc");
            $pstmt->execute();
            
            $result = $pstmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            exit($e->getMessage());
        }
        return $result;
    }

    // 작성자 게시글 따로 모아보기 
    function getSelectBoard($id){
        try{
            $pstmt = $this->db->prepare("select * from sboard where id = :id order by num desc");
            $pstmt->execute();


            $pstmt->bindValue(":id",$id,PDO::PARAM_STR);
            $result = $pstmt->fetchAll(PDO::FETCH_ASSOC);

        }catch(PDOException $e){
            exit($e->getMessage());
        }
        return $result;
    }
    
    //게시글 쓰기
    function insertBoard($board, $title, $writer, $content){
        try{
            $pstmt = $this->db->prepare("insert into $board(title, writer, content) values(:title, :writer, :content)");
            
            $pstmt->bindValue(":title",$title,PDO::PARAM_STR);
            $pstmt->bindValue(":writer",$writer,PDO::PARAM_STR);
            $pstmt->bindValue(":content",$content,PDO::PARAM_STR);
            
            $pstmt->execute();
        }catch(PDOException $e){
            exit($e->getMessage());
        }
        
    }

        //댓글 쓰기
    function insertComment($comment, $board_idx, $co_writer, $co_content){
        try{
            $pstmt = $this->db->prepare("insert into $comment(board_idx, co_writer, co_content) values(:board_idx, :co_writer, :co_content)");
                     
            $pstmt->bindValue(":board_idx", $board_idx, PDO::PARAM_INT);
            $pstmt->bindValue(":co_writer", $co_writer, PDO::PARAM_STR);
            $pstmt->bindValue(":co_content", $co_content, PDO::PARAM_STR);
            
            $pstmt->execute();
        }catch(PDOException $e){
            exit($e->getMessage());
        }
        
    }


        // 한 뷰에서 댓글 전부 불러오기
    function getAllComment($comment, $board_idx){
        try{
            $pstmt = $this->db->prepare("select * from $comment where board_idx = :board_idx order by co_id desc");

            $pstmt->bindValue(":board_idx", $board_idx, PDO::PARAM_INT);
            $pstmt->execute();
            
            $result = $pstmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            exit($e->getMessage());
        }
        return $result;
    }


    // 게시글 수정
    function updateBoard($board, $title, $writer, $content, $num){
        try{
            $pstmt = $this->db->prepare("update $board set title=:title, writer=:writer, content=:content where num=:num");
            
            $pstmt->bindValue(":num",$num,PDO::PARAM_INT);
            $pstmt->bindValue(":title",$title,PDO::PARAM_STR);
            $pstmt->bindValue(":writer",$writer,PDO::PARAM_STR);
            $pstmt->bindValue(":content",$content,PDO::PARAM_STR);
            
            $pstmt->execute();
        }catch(PDOException $e){
            exit($e->getMessage());
        }
        
    }
    


    // 게시글 삭제
    function deleteBoard($board, $num){
        try{
            $pstmt = $this->db->prepare("delete from $board where num=:num");
            
            $pstmt->bindValue(":num",$num,PDO::PARAM_INT);
            
            $pstmt->execute();
        }catch(PDOException $e){
            exit($e->getMessage());
        }
        
    }
    
    // 조회수 올리기
    function increaseHits($board, $num){
        try{
            $pstmt = $this->db->prepare("update $board set hits = hits + 1 where num=:num");
            $pstmt->bindValue(":num",$num,PDO::PARAM_INT);
            $pstmt->execute();
        }catch(PDOException $e){
            exit($e->getMessage());
        }
        
    }

    

    function getTotalCount($board){
        try{
            $pstmt = $this->db->prepare("select count(*) from $board");
            $pstmt->execute();
            $count = $pstmt->fetchColumn();
        }catch(PDOException $e){
            exit($e->getMessage());
        }
        return $count;
    }

    function getMsgs4page($board, $startRecord, $count){
        try{
            $pstmt = $this->db->prepare("select * from $board order by num desc limit :s, :c");
            $pstmt->bindValue(":s",$startRecord,PDO::PARAM_INT);
            $pstmt->bindValue(":c",$count,PDO::PARAM_INT);

            $pstmt->execute();
            $msgs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            exit($e->getMessage());
        }
        return $msgs;
    }
}


?>
