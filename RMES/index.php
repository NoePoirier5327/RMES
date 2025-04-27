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
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at iaculis augue. Ut lacinia, enim vel volutpat accumsan, justo lacus ultricies massa, varius vestibulum magna magna et nisl. Pellentesque a ullamcorper libero. Quisque elit enim, aliquet in dui a, mattis ultrices justo. Ut lectus est, porta eleifend tempor id, lacinia in justo. Curabitur at accumsan orci. Proin fermentum libero eget arcu mollis blandit. In tempor malesuada nulla eu porta. Pellentesque porta lectus quis neque pretium mollis. Praesent auctor dolor massa, eu laoreet eros ultricies nec. Nam vitae turpis lectus. Morbi quis pulvinar quam.
      </p>
      <p>
        Curabitur posuere neque ligula. Vivamus nec ex vel turpis fermentum aliquet. Morbi congue sollicitudin sapien vel semper. Donec imperdiet, tortor sed sagittis ultrices, massa metus aliquam nulla, eu laoreet tortor mi vel nunc. Donec placerat consectetur cursus. Cras maximus efficitur nisi vel elementum. Suspendisse sollicitudin metus sapien, nec auctor dui pretium eu. Curabitur vel tempor velit, nec sollicitudin felis. Nulla pharetra elit nisi, sit amet maximus nunc commodo nec. Fusce hendrerit hendrerit imperdiet. Nullam vel metus consectetur, posuere elit suscipit, pharetra metus. Aenean iaculis mollis velit, sit amet sodales arcu sollicitudin auctor. Vestibulum mollis dolor placerat est iaculis vulputate. 
      </p>
    </article>

    <article>
      <h3>Participating schools</h3>

      <div class="swiper slider-ecoles">
        <div class="swiper-wrapper">
          <!-- Schools list -->
          <div class="swiper-slide">
            <img src="./image/logos/reaumur.png" alt="Lycée Réaumur">
          </div>
          <div class="swiper-slide"><img src="https://placehold.co/400x500?text=Ecole\n1" alt=""></div>
          <div class="swiper-slide"><img src="https://placehold.co/400x500?text=Ecole\n2" alt=""></div>
          <div class="swiper-slide"><img src="https://placehold.co/400x500?text=Ecole\n3" alt=""></div>
          <div class="swiper-slide"><img src="https://placehold.co/400x500?text=Ecole\n4" alt=""></div>
          <div class="swiper-slide"><img src="https://placehold.co/400x500?text=Ecole\n5" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </article>
  </div>
  
</main>

<?php require_once(__DIR__."/include/footer.php"); ?>
