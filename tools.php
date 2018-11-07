<?php

    define("NUM_LINES", 3);
    define("NUM_PAGE_LINKS", 4);

    /*
        자주 쓰이는 기능을 함수로 정리해 둔 php 파일
    */


    /* 
       user가 입력한 내용의 유무 여부를 확인한다.
       
       isset()이 true 라면 ?이후를 출력
       isset()이 false 라면 :이후를 출력하는 함수
    */
    function requestValue($component){
        
        return isset($_REQUEST[$component])?$_REQUEST[$component]:"";
    }

    // error 메세지 알림창을 띄우는 함수
    function errorBack($msg){
?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <script>
            //알림창으로 $msg를 띄운 후 이 전 페이지로 돌아간다.

            alert('<?= $msg ?>');
            history.back();

        </script>


    </body>

    </html>
    <?php
        exit();
    }
         
    // 성공 메세지 알림창을 띄운 뒤, 해당 url로 이동하는 함수
    function okGo($msg, $url) {
?>
        <!doctype html>
        <html>

        <head>
            <meta charset="utf-8">
        </head>

        <body>
            <script>
                //알림창으로 $msg를 띄운 후 지정한 페이지로 이동한다.
                alert('<?= $msg ?>');
                location.href = '<?= $url ?>';

            </script>
        </body>

        </html>
        <?php
        exit();
    }


    function Go($msg) {
?>
        <!doctype html>
        <html>

        <head>
            <meta charset="utf-8">
        </head>

        <body>
            <script>
                //알림창으로 $msg를 띄운 후 지정한 페이지로 이동한다.
                alert('<?= $msg ?>');
                history.back();

            </script>
        </body>

        </html>
        <?php
        exit();
    }
?>
