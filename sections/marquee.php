<?php 
$clients = [
    [
        "id" => "1",
        "imgUrl" => "./assets/img/logo-1.png",
    ],
        [
        "id" => "2",
        "imgUrl" => "./assets/img/logo-2.png",
    ],
        [
        "id" => "3",
        "imgUrl" => "./assets/img/logo-3.png",
    ],
        [
        "id" => "4",
        "imgUrl" => "./assets/img/logo-4.png",
    ],
        [
        "id" => "5",
        "imgUrl" => "./assets/img/logo-5.png",
    ],
        [
        "id" => "6",
        "imgUrl" => "./assets/img/logo-6.png",
    ],
]
?>

<section class="marquee">
  <div class="content">
    <?php foreach ($clients as $client): ?>
      <div class="box">
        <div class="box-img">
          <img src="<?= $client['imgUrl']; ?>" alt="" class="img-box">
        </div>
      </div>
    <?php endforeach; ?>

    <?php foreach ($clients as $client): ?>
      <div class="box">
        <div class="box-img">
          <img src="<?= $client['imgUrl']; ?>" alt="" class="img-box">
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
