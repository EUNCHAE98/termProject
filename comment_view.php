
	<?php

		require_once("tools.php");
		require_once("boardDao.php");

		$cdao = new boardDao();

		if($nowBoard=="QnABoard"){
			$comment = "qcomment";
		}else if($nowBoard=="reviewBoard"){
			$comment = "rcomment";
		}else if($nowBoard=="marketBoard"){
			$comment = "scomment";
		}
		
		$board_idx = requestValue("num");

		$comments = $cdao->getAllComment($comment, $board_idx);
		
		if($comment){
	?>
			<table class="table table-hover" style="width: 100%;">
               <?php foreach($comments as $row) :?>
                <tr>
                    <td style="width: 15%;"><?= $row["co_writer"] ?></td>
                    <td><?= $row["co_content"] ?></td>
                    <td style="width: 20%;"><?= $row["co_date"] ?>
                    <button class="close float-right" type="button" aria-label="Close">
					  <a href="deleteComment.php" aria-hidden="true">×</a>
					</button>
				</td>
                </tr>
                <?php endforeach ?>
            </table>

	<?php
		}else{}

	?>

