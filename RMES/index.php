<?php require_once("include/header.php") ?>

<main>
  <div class="header">
    <img src="./image/lycee_reaumur.jpg" alt="Image du lycée Réaumur"/>

    <div class="description">
      <h1>Bienvenue sur le réseau mondial des écoles solidaires</h1>
      <p>Ce projet a vu le jour au lycée Réaumur à Laval</p>
    </div>
  </div>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnfw_OXL1Ih40KgQqA3zxxxmJ7iGFgW_q7Cw&s" alt="">
      </div>
      <div class="swiper-slide">
        <img src="https://img.gothru.org/283/18358148799609536061/overlay/assets/20210223090220.BOuE7P.png?save=optimize" alt="">
      </div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      speed: 1000,
      autoplay: {
        delay: -1,
        disableOnInteraction: false,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      },
    });
  </script>
  
</main>

<?php require_once("include/footer.php")?>
