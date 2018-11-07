<!--
    
    슬라임 커뮤니티 (슬.사.모) main homepage

-->
<?php

    require_once("tools.php");
    require_once("memberDao.php");

    $mdao = new memberDao();

?>

<!DOCTYPE html>
<html>

<head>
    <title>슬라임을 사랑하는 사람들의 모임</title>
    <!-- Meta -->
    <meta charset="utf-8">
<?php
    require_once("mdb.php");
?>
    <link href="css/index.css" rel="stylesheet">
</head>

<body>

    <div class="page-back">
 
 <div class="container">

    <header class="blog_header py-3">
        <!-- info랑 login버튼들 부분 -->
        <div class="row flex-nowrap justify-content-between align-items-center">
            <!-- header info 부분 -->
            <div class="mr-auto p-2">
                <span class="text-muted">PHP TERM PROJECT BY EUNCHAE</span>
            </div>
            <!-- header info 끝 -->


            <!-- login/register or logout/update 부분 -->
            <div class="d-flex justify-content-end">

   <?php

    $id = isset($_SESSION["id"])?($_SESSION["id"]):"";
    $name = isset($_SESSION["name"])?($_SESSION["name"]):"";
                        
    require_once("tools.php");
    require_once("memberDao.php");
                        
    $mdao = new memberDao();
                        
    $member = $mdao -> getMember($id);
    

    // 만약 세션에 id가 없다면 로그인 하지 않은 user 이므로
    if(!$id){
?>

                    <!-- login 부분 -->
                    <button data-toggle="modal" data-target="#orangeModalSubscription" class="btn btn-link bt-sm">LOGIN</button>

                    <!-- modal 시작 -->
                    <div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header text-center" style="background-color: #02332d;">
                            <h4 class="modal-title white-text w-100 py-2" style="font-family: 'Julius Sans One';">LOGIN</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="white-text">&times;</span>
                            </button>
                        </div>

                        <form action="login.php" method="post">
                        <!--Body-->
                        <div class="modal-body">
                            <div class="md-form mb-5">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="form3" class="form-control validate" name="id" placeholder="ID">
                            </div>

                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="form2" class="form-control validate" name="pw" placeholder="PASSWORD">
                            </div>
                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-outline-warning waves-effect">Login</button>
                        </div>
                    </form>
                    </div>
                    <!--/.Content-->
                    </div>
                    </div>

                    <!-- modal 끝 -->
                    <!-- login 부분 끝 -->

                    <!-- register 부분 -->
                    
<button data-toggle="modal" data-target="#orangeModalSubscription-1" class="btn btn-link bt-sm">REGISTER</button>
                   <div class="modal fade" id="orangeModalSubscription-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header text-center" style="background-color: #02332d;">
                            <h4 class="modal-title white-text w-100 py-2" style="font-family: 'Julius Sans One';">REGISTER</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="white-text">&times;</span>
                            </button>
                        </div>

                        <form action="register.php" method="post">
                        <!--Body-->
                        <div class="modal-body">
                            <div class="md-form mb-5">
                                <i class="fa fa-tag prefix grey-text"></i>
                                <input type="text" id="form3" class="form-control validate" name="Rname" placeholder="NAME">
                            </div>

                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="form2" class="form-control validate" name="Rid" placeholder="ID">
                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="form2" class="form-control validate" name="Rpw" placeholder="PASSWORD">
                            </div>
                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-outline-warning waves-effect">Register</button>
                        </div>
                    </form>
                    </div>
                    <!--/.Content-->
                    </div>
                    </div>

                    <!-- modal 끝 -->
                    <!-- register 부분 끝 -->


                    <?php
    // 세션에 id가 있다면 로그인 한 user 이므로
    } else{
?>
                        <!-- logout 부분 -->
                        <button class="btn btn-link bt-sm" onclick="location.href='logout.php'">LOGOUT</button>
                        <!-- logout 부분 끝 -->

                        <!-- update 부분 -->
                        <button data-toggle="modal" data-target="#orangeModalSubscription-2" class="btn btn-link bt-sm">UPDATE</button>
                    <div class="modal fade" id="orangeModalSubscription-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-notify" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header text-center" style="background-color: #02332d;">
                            <h4 class="modal-title white-text w-100 py-2" style="font-family: 'Julius Sans One';">UPDATE</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="white-text">&times;</span>
                            </button>
                        </div>

                        <form action="update.php" method="post">
                        <!--Body-->
                        <div class="modal-body">
                            <div class="md-form mb-5">
                                <i class="fa fa-tag prefix grey-text"></i>
                                <input type="text" id="form3" class="form-control validate" name="Uname" value="<?= $member["name"] ?>">
                            </div>

                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="form2" class="form-control validate" name="Rid" value="<?= $member["id"] ?>" readonly>
                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="form2" class="form-control validate" name="Rpw" value="<?= $member["pw"] ?>">
                            </div>
                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-outline-warning waves-effect">Update</button>
                        </div>
                    </form>
                    </div>
                    <!--/.Content-->
                    </div>
                    </div>

                    <!-- modal 끝 -->
                        <!-- update 부분 끝 -->

                        <?php
    }
?>

            </div>
            <!-- login/register or logout/update 부분 끝 -->
        </div>
        <!-- info랑 login버튼들 부분 끝-->

            <!-- logo 부분 -->
            <div class="header_cont">
                <div class="logo_s" style="color: #fff;">슬라임을 모르고 살기엔, 인생은 너무 길다 </div>
                <div class="logo" style="color: #fff;">Smile , <span class="logo_h">Slime</span></div>
                <!--
                <p> 슬라임을 사랑하는 사람들이 모여 슬라임을 사랑하는 사람들이 모여 </p>
                <p>슬라임을 사랑하는 사람들의 모임 슬라임을 사랑하는 사람들의 모임 슬라임을 사랑하는 사람들의 모임</p>
-->
            </div>
            <!-- logo 부분 끝-->
        </header>
        <!-- 전체 header 끝 -->

        <!-- about슬라임, 슬라임community 버튼이 위치하는 곳-->
        <div class="content_nav">
            <button class="btn btn_link about_btn" type="button" onclick="location.href='about.php'">ABOUT 'SLIME'</button>
            <button class="btn btn_link community_btn" type="button" onclick="location.href='community.php'">
            'SLIME' COMMUNITY</button>
        </div>

        <!--
        <div class="content_slide">

            <div class="slider">
                <div class="slide">
                    <div class="img1"></div>
                </div>

                <div class="slide">
                    <div class="img2"></div>
                </div>

                <div class="slide">
                    <div class="img3"></div>
                </div>

                <div class="slide">
                    <div class="img4"></div>
                </div>

            </div>
        </div>
-->

        <div class="content_v">
            <div class="s1_video">
                <video width="260" height="260" autoplay loop poster="img/s1.JPG">
              <source src="video/pinkS.mp4" type="video/mp4"></video>
            </div>
            <div class="s2_video">
                <video width="260" height="260" autoplay loop poster="img/s2.JPG">
              <source src="video/heartS.mp4" type="video/mp4"></video>
            </div>
            <div class="s3_video">
                <video width="260" height="260" autoplay loop poster="img/s3.JPG">
              <source src="video/ichigoS.mp4" type="video/mp4"></video>
            </div>
            <div class="s4_video">
                <video width="260" height="260" autoplay loop poster="img/s4.JPG">
              <source src="video/bizS.mp4" type="video/mp4"></video>
            </div>
        </div>

    </div>
</div>


            <footer class="blog-footer">
                <p><a href="index.php">@Smile,Slime</a> built for Term Project by <a href="https://twitter.com/mdo">eunchae Kim</a></p>
                <p>
                    <a href="#">Back to top</a>
                </p>
            </footer>
</body>

</html>
