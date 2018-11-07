<?php
    
/*
     글을 작성하기 위한 form을 보여주는 php 파일
*/
    // tools.php에 만들어 둔 함수들을 사용하기 위해 불러온다 (java의 import 역할)
    require_once("tools.php");
    require_once("boardDao.php");

    $bdao = new boardDao();

    /*
        현재 로그인 한 user, 즉 현재 세션에 id가 저장되어 있는 user만 게시글을 작성할 수 있으므로, 비로그인한 경우 접근에 제한을 줘야 한다.
    */
    session_start();
    
    // session에 저장되어 있는 id를 userid 라는 변수로 저장해준다
    $userid = isset($_SESSION["id"])?($_SESSION["id"]):"";
    $name  = isset($_SESSION["name"])?($_SESSION["name"]):"";
    $nowBoard = isset($_SESSION["nowBoard"])?($_SESSION["nowBoard"]):"";
    $num = requestValue("num");

    // 만약 userid가 없다면 비로그인 상태이므로 접근 권한이 없다는 메세지를 띄운 두 board.php로 되돌아간다.
    if(!$userid){
        errorBack("접근 권한이 없습니다 ! ", "index.php");
    }

    if($nowBoard == "QnABoard"){
        $msg = $bdao->getBoard("qboard",$num);
    }else if($nowBoard == "reviewBoard"){
        $msg = $bdao->getBoard("rboard",$num);
    }else if($nowBoard == "marketBoard"){
        $msg = $bdao->getBoard("sboard",$num);
    }

?>

    <!doctype html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Write</title>

        <link href="css/blog.css" rel="stylesheet">


        <?php
            require_once("mdb.php");
        ?>

        <script src="ckeditor/ckeditor.js"></script>

    </head>


    <body>

       <?php
        require_once("logo.php");
       ?>        

       <div class="container" style="border: 1.5px solid #EAEAEA; border-radius: 20px;">

                <!-- 글 등록 버튼을 누르면 write 된다. 방식은 post -->
                <form action="modify.php?num=<?= $num ?>" method="post">
                    <div class="md-form">
                        <input id="input-char-counter" type="text" length="20" name="title" class="form-control" value="<?= $msg["title"] ?>" required>
                    </div>
                    <div class="md-form">
                      <input id="input-char-counter" type="text" length="4" class="form-control" name="writer" value="<?= $name ?>" readonly>
                    </div>
   
                    <div class="form-group">
                        <textarea name="content" id="editor1" rows="12" required><?= $msg["content"] ?></textarea>
                    </div>

  

                    <button type="submit" class="btn btn-secondary btn-sm">수정</button>
                    <!-- 목록보기 버튼을 누를 경우 board.php로 되돌아간다. -->
                    <button type="button" class="btn btn-secondary btn-sm" onclick="location.href='<?= $nowBoard ?>.php'">목록 보기</button>
                </form>
            </section>

    </div>
    <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
    </body>



    </html>