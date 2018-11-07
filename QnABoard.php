<?php

require_once("boardDao.php");
require_once("tools.php");

$bdao = new boardDao();
$msgs = $bdao->getAllBoard("qboard");

session_start();
                            
$_SESSION["nowBoard"] = "QnABoard";
$board = "qboard";

require_once("pagination.php");

?>
<html>
    <head>
    
    <?php
        
        require_once("mdb.php");
    
    ?>
    <link href="css/blog.css" rel="stylesheet">
    </head>


<body>
   
   <?php
        require_once("logo.php");
    
    ?>
        <div class="slider-container">


            <!-- 이건 QnA 입니다~~~ 하는 이미지 -->

            <div class="carousel-inner" style="height:300px">
                <img src="img/jelly3.jpg" style="width:100%;">
            </div>

            <form action="write_form.php" method="post">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">writer</th>
                        <th scope="col">when</th>
                        <th scope="col">hit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($msgs as $row) :?>
                    <tr>
                        <th scope="row">
                            <?= $row["num"] ?>
                        </th>

                    <td><input type="button" class="btn btn-link" value="<?= $row["title"] ?>" onclick="location.href='view.php?num=<?= $row["num"]?>'"></td>
                        <td>
                            <?= $row["writer"] ?>
                        </td>
                        <td>
                            <?= $row["regtime"] ?>
                        </td>
                        <td>
                            <?= $row["hits"] ?>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="col-14 d-flex p-2 justify-content-end">
                <button type="submit" class="btn purple-gradient">글쓰기</button>
            </div>
        </form>


        <?php
            require_once("nav.php");
        ?>

        </div>

                        <footer class="blog-footer">
                <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                <p>
                    <a href="#">Back to top</a>
                </p>
            </footer>

    </body>


    </html>
