<?php require_once("./include/header.php") ?>

<main>
  <form action="./chat.php" method="get">
    <input type="text" name="identifiant" value="Identifiant"/>
    <input type="password" name="mot_de_passe" value="Mot de passe"/>
    <button type="submit">Se connecter</button>
  </form>
</main>

<?php require_once("./include/footer.php") ?>
