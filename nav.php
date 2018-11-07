      

            <nav aria-label="Page navigation example">
              <ul class="pagination pg-blue justify-content-center">
      <?php
            if($startPage > 1)
        ?>
            <li class="page-item">
                      <a class="page-link" aria-label="Previous" href="?page=<?= $startPage - 1 ?>">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
            </li>
        <?php
            for($i = $startPage; $i<=$endPage; $i++){ 
                if($i == $currentPage){
        ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
            </li>
            <?php
                }else
            {
                ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
            </li>
            <?php
        }
    }

                if($endPage < $totalPages) {
            ?>

            <li class="page-item">
                      <a class="page-link" aria-label="Next" href="?page=<?= $endPage+1 ?>">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
            </li>

            <?php
                }

            ?>
          </ul>
        </nav>
    </div>