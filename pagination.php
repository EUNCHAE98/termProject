
<?php
//pagination

$currentPage = requestValue("page");

if($currentPage < 1)
    $currentPage = 1;

    // totalCount 에는 start부터 count 만큼의 수의 게시글이 들어간다
    $totalCount = $bdao->getTotalCount($board);
    if($totalCount == 0){
        echo "<h1>등록된 게시글이 없습니다.<h1>";
        exit();
    }

    if($totalCount > 0){
        $startPage = floor(($currentPage-1)/NUM_PAGE_LINKS)*NUM_PAGE_LINKS+1;
        $endPage = $startPage + NUM_PAGE_LINKS - 1;

        $totalMsgs = $bdao->getTotalCount($board);
        $totalPages = ceil($totalMsgs/NUM_LINES);

        if ($endPage > $totalPages)
            $endPage = $totalPages;

        $prev = false;
        $next = false;

        if($startPage > 1)
            $prev = true;

        if($endPage < $totalPages)
            $next = true;
           
    }


    $startRecord = ($currentPage - 1)*NUM_LINES;
    $msgs = $bdao->getMsgs4page($board, $startRecord, NUM_LINES);

?>
