<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume - Start Bootstrap Theme</title>

<?php
    require_once("mdb.php");
?>
    <link href="css/resume.min.css?after" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav" style="background-color: #02332d;">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Smile, Slime</span>
            <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/suS.jpg" onclick="location.href='index.php'">
        </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Smile, Slime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#openMarket">Open Market</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">Clear Slime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">Butter Slime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#skills">Crunch Slime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#interests">Jelly Cube Slime</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#awards">Jiggly Slime</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
            <div class="my-auto">
                <span class="logo mb-0">Smile,
            <span class="logo mb-0" style="color: #02332d;">Slime</span>
                </span>
                <div class="subheading mb-5">지금 슬라임을 사랑하지 않는 자, 모두 유죄
                </div>
                <p class="lead mb-5">문구점 100원짜리 슬라임에 울고 웃던 어린이들은 10년 뒤, 취미 생활을 위해 시간과 돈을 투자하는 어른으로 성장했습니다.<br/> 슬라임은 더 이상 문구점의, 그리고 아이들의 전유물이 아닙니다. <br/>슬라임을 마주하면서 다시 피어나는 동심, 그리고 어른스러워지는 팔 근육.<br/> 우리 Smlie, Slime 은 슬라임과 당신을 하나로 이어줍니다.</p>
                <p class="lead mb-7 font-italic">당신의 삶에 무궁무진한 슬라임이 깃들기를.</p>
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </section>


        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="openMarket">
            <div class="my-auto">
                <h3 class="openMarket mb-1">Slime Open Market Calendar</h3>

                <div class="resume-item d-flex flex-column flex-md-row mb-3">
                    <div class="resume-content mr-auto col-12">
                        <?php
                            require_once("calendar.php");
                        ?>
                    </div>
                </div>



            </div>

        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
            <div class="my-auto">
                <h2 class="clear mb-5">Clear Slime</h2>

                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto col-7">
                        <h3 class="mb-0">슬라임의 시초, '클리어 슬라임'</h3>
                       <div class="subheading mb-3">모든 것은 '클리어 슬라임' 에서 시작된다</div>
                        <p>물풀, 소다, 리뉴 및 붕사 등 최소한의 기본 재료로 만들어진 투명한 색상의 베이직 슬라임. 파츠나 색소, 향료, 클레이 등이 들어가는 다른 슬라임에 비해서 클리어 슬라임은 정말 기본 중의 기본!</p> 
                        <p>슬라임 중 가장 저렴하다는 것과 집에서도 쉽게 만들 수 있다는 장점이 있지만, 잠깐의 플레잉에도 기포가 생기기 쉬워 색이 금방 탁해진다는 치명적인 단점이 ! 보관 방법도 까다롭기 때문에 다른 슬라임에 비해 찾는 사람은 적은 편.</p>
                        <p>하지만 응용하기에는 클리어 슬라임만한게 없다. 무궁무진한 클리어 슬라임의 변화를 기대하시라 ! </p>
                    </div>
                    <div class="resume-date text-md-right">
                        <div class="s4_video">
                            <video width="350" height="350" autoplay loop poster="img/clearS.JPG">
                            <source src="video/clearS.mp4" type="video/mp4">
                                <script>
                                    document.querySelector('video').playbackRate = 1.7;
                                </script></video>
                        </div>
                    </div>
                </div>


            </div>

        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
             <div class="my-auto">
                <h2 class="butter mb-5">Butter Slime</h2>

                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto col-7">
                        <h3 class="mb-0">만지고 있어도 만지고 싶은 '버터 슬라임'</h3>
                        <div class="subheading mb-3">극락을 맛보고 싶다면 ? </div>
                        <p>마치 빵에 바르는 스프레드 질감의 그것 ! 아기 궁둥이 촉감의 그것 ! 이거라면 하루종일 만질 수 있을 것 같다는 후기가 난무할 만큼 버터 슬라임의 질감은 마치 극락을 오가는 듯한 부드러운 침구 세트 !</p> 
                        <p>클리어 슬라임에서 목공풀 및 쉐이빙폼이 추가되어 디폴트는 부드러운 질감을 가진 불투명의 하얀색 슬라임이다. 여기에 전분의 비율을 높이면 고급 쿠션을 만지는 듯한 댕댕하고 깔끔한 플레잉이, 글리세롤의 비율을 높이면 생크림을 반죽하는 듯한 지글리하고 고난이도의 플레잉이 가능하다. 질감에 집착하는 사람들이 주요 소비층이다보니, 다양한 커스텀 보단 기본에 충실한 컨셉이 多 ! </p>
                        <p>호불호가 존재할 수 없는 극락의 부드러움 ! 슬라임계 부동의 왕좌 ! </p>
                    </div>
                    <div class="resume-date text-md-right">
                        <div class="s4_video">
                            <video width="350" height="350" autoplay loop poster="img/a2S.JPG">
                            <source src="video/a2S.mp4" type="video/mp4"></video>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
            <div class="my-auto">
                <h2 class="crunch mb-5">Crunch Slime</h2>

           <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto col-7">
                        <h3 class="mb-0">내 입맛대로 커스텀 ! '크런치 슬라임'</h3>
                        <div class="subheading mb-3">! 오도독 오도독 오도독 ! </div>
                        <p>물풀, 소다, 리뉴 및 붕사 등 최소한의 기본 재료로 만들어진 투명한 색상의 베이직 슬라임. 파츠나 색소, 향료, 클레이 등이 들어가는 다른 슬라임에 비해서 클리어 슬라임은 정말 기본 중의 기본!</p> 
                        <p>슬라임 중 가장 저렴하다는 것과 집에서도 쉽게 만들 수 있다는 장점이 있지만, 잠깐의 플레잉에도 기포가 생기기 쉬워 색이 금방 탁해진다는 치명적인 단점이 ! 보관 방법도 까다롭기 때문에 다른 슬라임에 비해 찾는 사람은 적은 편.</p>
                        <p>하지만 응용하기에는 클리어 슬라임만한게 없다. 무궁무진한 클리어 슬라임의 변화를 기대하시라 ! </p>
                    </div>
                    <div class="resume-date text-md-right">
                        <div class="s4_video">
                            <video width="350" height="350" autoplay loop poster="img/biz2S.jpg">
                            <source src="video/biz2S.mp4" type="video/mp4"></video>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
             <div class="my-auto">
                <h2 class="jelly mb-5">Jelly Cube Slime</h2>

                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto col-7">
                        <h3 class="mb-0">슬라임의 이(異)세계, '젤리 큐브 슬라임'</h3>
                        <div class="subheading mb-3">단순한 스펀지가 아니다, 슬라임이 스며든 '젤리' 다 !</div>
                        <p>물풀, 소다, 리뉴 및 붕사 등 최소한의 기본 재료로 만들어진 투명한 색상의 베이직 슬라임. 파츠나 색소, 향료, 클레이 등이 들어가는 다른 슬라임에 비해서 클리어 슬라임은 정말 기본 중의 기본!</p> 
                        <p>슬라임 중 가장 저렴하다는 것과 집에서도 쉽게 만들 수 있다는 장점이 있지만, 잠깐의 플레잉에도 기포가 생기기 쉬워 색이 금방 탁해진다는 치명적인 단점이 ! 보관 방법도 까다롭기 때문에 다른 슬라임에 비해 찾는 사람은 적은 편.</p>
                        <p>하지만 응용하기에는 클리어 슬라임만한게 없다. 무궁무진한 클리어 슬라임의 변화를 기대하시라 ! </p>
                    </div>
                    <div class="resume-date text-md-right">
                        <div class="s4_video">
                            <video width="350" height="350" autoplay loop poster="img/jellyS.jpg">
                            <source src="video/jellyS.mp4" type="video/mp4"></video>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
              <div class="my-auto">
                <h2 class="elmer mb-5">Jiggly Slime</h2>

                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto col-7">
                        <h3 class="mb-0">어렵지만 짜릿한 플레잉, '지글리 슬라임'</h3>
                        <div class="subheading mb-3">정상에 통달한 자들만이 맛볼 수 있는 리그 !</div>
                        <p>물풀, 소다, 리뉴 및 붕사 등 최소한의 기본 재료로 만들어진 투명한 색상의 베이직 슬라임. 파츠나 색소, 향료, 클레이 등이 들어가는 다른 슬라임에 비해서 클리어 슬라임은 정말 기본 중의 기본!</p> 
                        <p>슬라임 중 가장 저렴하다는 것과 집에서도 쉽게 만들 수 있다는 장점이 있지만, 잠깐의 플레잉에도 기포가 생기기 쉬워 색이 금방 탁해진다는 치명적인 단점이 ! 보관 방법도 까다롭기 때문에 다른 슬라임에 비해 찾는 사람은 적은 편.</p>
                        <p>하지만 응용하기에는 클리어 슬라임만한게 없다. 무궁무진한 클리어 슬라임의 변화를 기대하시라 ! </p>
                    </div>
                    <div class="resume-date text-md-right">
                        <div class="s4_video">
                            <video width="350" height="350" autoplay loop poster="img/zS.jpg">
                            <source src="video/zS.mp4" type="video/mp4"></video>
                        </div>
                    </div>
                </div>


            </div>
        </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

</body>

</html>
