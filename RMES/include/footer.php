    <footer>
      <div class="copy">
        <h2><?= $CONFIG["name"] ?></h2>

        <img src="./image/logos/reaumur.png" alt="Lycée Réaumur">
      </div>

      <div class="swiper slider-devs">
        <div class="swiper-wrapper">
        <?php
              foreach($CONFIG["developers"] as $dev){
                $html = <<<EOT
                <div class="swiper-slide">
                  <img class="avatar" src="{$dev["picture"]}" alt="{$dev["name"]}">
                  <div class="text">
                    <p class="name">{$dev["name"]}</p>
                    <p class="job">{$dev["job"]}</p>
                    <a href="{$dev["website"]}" target="_blank">Open website <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                  </div>
                </div>
                EOT;
                echo $html;
              }
            ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </footer>

    <script src="./assets/script.js"></script>
  </body>
</html>
