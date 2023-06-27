<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, "BrilliantBookstore");
$sql = "SELECT * FROM tblbooks WHERE featured=1";
$featured = $con->query($sql);
?>
<div class="d-flex flex-row mx-5 p-2">
  <?php
  while ($product = mysqli_fetch_assoc($featured)) :
  ?>

    <div class="card mx-2 g-col-4" style="width: 18rem;">
      <img src="<?= $product['image']; ?>" alt="<?= $product['book_name']; ?>">
      <div class="card-body">
        <h4 class="text-center"><?= $product['book_name']; ?></h4>
        <button class="btn btn-secondary mx-2">R <?= $product['book_price']; ?></button>
        <p class=""><?= $product['book_description']; ?></p>
        <p>Author: <?= $product['book_author']; ?></p>
        <p>Released: <?= $product['book_year_of_release']; ?></p>
        <p>Publisher: <?= $product['pulisher_name']; ?></p>

      </div>
    </div>
  <?php endwhile; ?>
</div>