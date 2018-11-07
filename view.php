<?php

session_start();

$userid = isset($_SESSION["id"])?($_SESSION["id"]):"";
$username = isset($_SESSION["name"])?($_SESSION["name"]):"";
$nowBoard = isset($_SESSION["nowBoard"])?($_SESSION["nowBoard"]):"";

$nowBoard_idx = isset($_SESSION["num"])?($_SESSION["num"]):"";

require_once("tools.php");
require_once("boardDao.php");
require_once("memberDao.php");

$bdao = new boardDao();
$mdao = new memberDao();

$num = requestValue("num");

       if($nowBoard == "QnABoard"){
            $msg = $bdao -> getBoard("qboard",$num);
            $bdao->increaseHits("qboard",$num);
        } else if($nowBoard == "reviewBoard"){
            $msg = $bdao -> getBoard("rboard",$num);
            $bdao->increaseHits("rboard",$num);
        } else if($nowBoard == "marketBoard"){
            $msg = $bdao -> getBoard("sboard",$num);
            $bdao->increaseHits("sboard",$num);
        }


 

    // 만약 세션에 저장된 id가 없다면
    if(!$userid){
        errorBack("접근 권한이 없습니다 ! ", "community.php");
    }
 

?>


 
    <!DOCTYPE html>
    <html>

    <head>

        <?php
            require_once("mdb.php");
        ?>
        <link href="css/view.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>


    </head>

<body>
    <?php
        require_once("logo.php");
    ?>


        <div class="container" style="border: 1.5px solid #EAEAEA; border-radius: 20px; margin-top: 1rem;">
           <!-- 얘 없으면 아이콘 개 커짐 -->
            <div class="row inbox">
<!-- 하얀 박스 크기 -->
                <div class="col-md-12">

                    <!--		하얀 박스 -->
                    <div class="panel panel-default ">

                        <div class="panel-body message">

                            


                            <div class="message-title" style="font-size: 1.5rem;">
                                <?= $msg["title"] ?>



                            </div>
                            <div class="header">

                                <?php
                                    if($nowBoard == "QnABoard"){
                                ?>
                                        <img class="avatar" src="img/6.png" style="margin-top: .5rem;">
                                <?php
                                    }
                                ?>

                                <?php
                                    if($nowBoard == "reviewBoard"){
                                ?>
                                        <img class="avatar" src="img/1.png" style="margin-top: .5rem;">
                                <?php
                                    }
                                ?>


                                <?php
                                    if($nowBoard == "marketBoard"){
                                ?>
                                        <img class="avatar" src="img/3.png" style="margin-top: .5rem;">
                                <?php
                                    }
                                ?>


                                <div class="from" style="padding-top: .5rem;">
                                    <span><?= $msg["writer"] ?></span>
                                    <!-- 해당 writer 와 일치하는 writer 의 게시글 목록 Dao 에 추가하기 -->
                                    <a href="memberBoard.php"> 작성글 보기 </a>
                                </div>
                                <div class="date"><span class="fa fa-paper-clip"></span>
                                    <?= $msg["regtime"] ?>
                                </div>

                                <div class="menu"></div>

                            </div>

                            <div class="content">
                                <blockquote>
                                    <?= $msg["content"] ?>
                                </blockquote>
                            </div>
                            <!--
					<ul>
						<li>
							<span class="label label-danger">zip</span> <b>bootstrap.zip</b> <i>(2,5MB)</i>
							<span class="quickMenu">
								<a href="#" class="fa fa-search"><i></i></a>
								<a href="#" class="fa fa-share"><i></i></a>
								<a href="#" class="fa fa-cloud-download"><i></i></a>
							</span>
						</li>
						<li>
							<span class="label label-info">txt</span> <b>readme.txt</b> <i>(7KB)</i>
							<span class="quickMenu">
								<a href="#" class="fa fa-search"><i></i></a>
								<a href="#" class="fa fa-share"><i></i></a>
								<a href="#" class="fa fa-cloud-download"><i></i></a>
							</span>
						</li>
						<li>
							<span class="label label-success">xls</span> <b>spreadsheet.xls</b> <i>(984KB)</i>
							<span class="quickMenu">
								<a href="#" class="fa fa-search"><i></i></a>
								<a href="#" class="fa fa-share"><i></i></a>
								<a href="#" class="fa fa-cloud-download"><i></i></a>
							</span>
						</li>
					</ul>		


-->




                    <span class="btn-group d-flex justify-content-end p-3">
                    <?php
                        
                        if($username != $msg["writer"]){
                            if($nowBoard == "marketBoard"){ 
                                ?>
                                    <a class="btn btn-link" data-toggle="modal" href="#myModal"><h5 class="fas fa-shopping-cart" style="color: #ff8c68;"> 구매할래요 ! </h5></a>
                            <?php

                                require_once("marketPop.php");
                            }
                            ?>
                    <button class="btn btn-link btn-lg" onclick="location.href='<?= $nowBoard ?>.php'"><h4 class="fa fa-arrow-left"></h4></button>
                    </span>  

                    <?php
    
                        } else {

                        ?>
                    <button class="btn btn-link btn-lg" onclick="location.href='<?= $nowBoard ?>.php'" style="width:2rem;" ><h4 class="fa fa-arrow-left"></h4></button>
                    <button class="btn btn-link btn-lg" onclick="location.href='modify_form.php?num=<?= $msg["num"] ?>'" style="width:2rem;" ><h4 class="fa fa-pencil"></h4></button>
                    <button class="btn btn-link btn-lg" onclick="location.href='delete.php?num=<?= $msg["num"] ?>'" style="width:2rem;" ><h4 class="fa fa-trash"></h4></button>
                    </span>
                    <?php 

                        }
                    
                    ?>



                        </div>

                    </div>

                    <?php
                        include("comment_form.php");
                    ?>

                </div>
                <!--/.col-->

            </div>
        </div>
        </div>

                        <footer class="blog-footer">
                <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                <p>
                    <a href="#">Back to top</a>
                </p>
            </footer>

        </body>

    </html>
