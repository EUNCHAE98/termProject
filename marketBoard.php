<?php

require_once("boardDao.php");
require_once("tools.php");

$bdao = new boardDao();
$msgs = $bdao->getAllBoard("sboard");

$num = requestValue("num");

session_start();
                            
$_SESSION["nowBoard"] = "marketBoard";
$board = "sboard";

require_once("pagination.php")

?>

  <!DOCTYPE html>
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

            <!-- Card deck -->
                <div class="card-deck">
          <?php foreach($msgs as $row) :?>
       


  <!-- Card -->
  <div class="card col-4" style="padding:0px;">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="img/rillyS.jpg" alt="Card image cap" style="height: 360px; width: 360px;">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h5 class="card-title"><?= $row["title"] ?></h5>
      <p class="card-title"><?= $row["writer"] ?></p>
      <p class="card-title"><?= $row["regtime"] ?></p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-grey btn-md" onclick="location.href='view.php?num=<?= $row["num"] ?>'">사러 가기</button>

    </div>

  </div>
  <!-- Card -->
  <?php endforeach ?>


  </div>
  <!-- Card -->

</div>
<!-- Card deck --> 
        <form action="write_form_market.php" method="post">
        <div class="col-14 d-flex justify-content-end">
            <button type="submit" class="btn btn-warning">글쓰기</button>
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


