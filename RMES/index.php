<?php
ini_set("display_errors", 1);
require_once(__DIR__."/config.php");
require_once(__DIR__."/include/header.php");
?>

<main>
  <div class="header">
    <img src="./image/globe.jpg" alt="Image Globe"/>

    <div class="description">
      <h1>Welcome to the global network of solidarity schools</h1>
      <p>This project was launched at the Lycée Réaumur in Laval.</p>
    </div>
  </div>

  <div class="container">
    <article>
      <h3>About Us</h3>
      <p>
        Our aim is to provide a cultural exchange between any school in the world.
      </p>
    </article>

    <article>
      <h3>Participating schools</h3>

      <div class="swiper slider-ecoles">
        <div class="swiper-wrapper"></div>
        <div class="swiper-pagination"></div>
      </div>
    </article>
  </div>
  
</main>

<?php require_once(__DIR__."/include/footer.php"); ?>
