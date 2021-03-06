<?php

    require_once("tools.php");
    require_once("memberDao.php");

    session_start();

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
                <!-- 이미지 슬라이드 -->
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="padding: 10px 0;">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox" style="height: 25rem;">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg" alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg" alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
                <!-- 이미지 슬라이드 끝-->

<!-- Section: Blog v.2 -->
<section class="text-center my-5">

  <!-- Section heading -->
  <h3 class="h3-responsive my-3">슬라임의, 슬라임에 의한, 슬라임을 위한</h3>
  <!-- Section description -->
  <p class="dark-grey-text w-responsive mx-auto mb-2">of the slime, by the slime, for the slime</p>
  <p class="dark-grey-text w-responsive mx-auto mb-5">This is a Community of the slime, by the slime, for the slime</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        <img class="img-fluid" src="img/randomSC.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Category -->
      <a href="#!" class="deep-orange-text">
        <h6 class="font-weight-bold mb-3"><i class="fa fa-graduation-cap pr-2"></i>슬라임 소식지</h6>
      </a>
      <!-- Post title -->
      <h4 class="font-weight-bold mb-3"><strong>슬라임 랜덤박스 출시 ! </strong></h4>
      <!-- Post data -->
      <p>by <a class="font-weight-bold">깡졍마켓(@kjmarket_)</a>, 31/10/2018</p>
      <!-- Excerpt -->
      <p class="dark-grey-text">11/3일 깡졍마켓 수원역점에서 <br>
                                오후 2시부터 판매 개시! <br>
                                믿고 사는 띵이네 슬라임 ! <br>
                                품절되기 전에 어서 서두르세요 <br></p>
      <!-- Read more button -->
      <a class="btn btn-deep-orange btn-rounded btn-md">Read more</a>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">



      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        <img class="img-fluid" src="img/blogSC.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Category -->
      <a href="#!" class="pink-text">
        <h6 class="font-weight-bold mb-3"><i class="fa fa-map pr-2"></i>신상 슬라임 알림</h6>
      </a>
      <!-- Post title -->
      <h4 class="font-weight-bold mb-3"><strong>무지개 거미줄 슬라임</strong></h4>
      <!-- Post data -->
      <p>by <a class="font-weight-bold">마녀슬라임(@witch_slime_)</a> 31/10/2018</p>
      <!-- Excerpt -->
      <p class="dark-grey-text">할로윈을 맞이하여 다시 돌아온 마녀 슬라임의 시그니쳐 슬라임, 무지개 거미줄 !<br>
                                결에 좀더 힘을 주고 포슬포슬하게 리뉴얼 된 <br>
                                NEW 무지개 거미줄을 만나보세요 !</p>
      <!-- Read more button -->
      <a href="https://www.instagram.com/p/Bos-8jTHdVB/?taken-by=witch_slime_" class="btn btn-pink btn-rounded btn-md">Go TO</a>

    </div>
    <!-- Grid column -->


    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-0">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        <img class="img-fluid" src="img/reSC.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!-- Category -->
      <a href="#!" class="blue-text">
        <h6 class="font-weight-bold mb-3"><i class="fa fa-fire pr-2"></i>인기글</h6>
      </a>
      <!-- Post title -->
      <h4 class="font-weight-bold mb-3"><strong>❤️ 10월의 리뷰왕 ❤️</strong></h4>
      <!-- Post data -->
      <p>by <a class="font-weight-bold">LOVE슬라임LOVE</a> 21/10/2018</p>
      <!-- Excerpt -->
      <p class="dark-grey-text">게시글 글 내용 일부 불러오기<br>게시글 글 내용 일부 불러오기<br>게시글 글 내용 일부 불러오기<br>게시글 글 내용 일부 불러오기<br></p>
      <!-- Read more button -->
      <a href="#" class="btn btn-info btn-rounded btn-md">Go TO</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Blog v.2 -->
            </div>
            </body>



            <footer class="blog-footer">
                <p><a href="index.php">@Smile,Slime</a> built for Term Project by <a href="https://twitter.com/mdo">eunchae Kim</a></p>
                <p>
                    <a href="#">Back to top</a>
                </p>
            </footer>


    </html>
