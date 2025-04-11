<?php 
require_once("./include/header.php");
$success = true;
error_reporting(E_ALL);
ini_set("display_errors", 1);

function connexion()
{
  echo "<main>";
    if (isset($_COOKIE['connecter'])) {if ($_COOKIE["connecter"] == false) {echo "<p class='red'>Incorrect login or password</p>";}}
    echo "<form action='./login.php' method='post'>";
      echo "<input name='identifiant' placeholder='Your login' type='text' required/>";
      echo "<input name='mot_de_passe' placeholder='Your password' type='password' required/>";
      echo "<button type='submit'>Log in</button>";
    echo "</form>";
  echo "</main>";
  
  // On crypte les données et créer les cookies avec le token
  if (isset($_POST["identifiant"]) && isset($_POST["mot_de_passe"]))
  {
    // On créer le token de connexion
    $data = urlencode(json_encode(["identifiant" => $_POST["identifiant"], "mot_de_passe" => hash($_ENV["HASH_KEY"], $_POST["mot_de_passe"])]));

    // On interroge l'api pour savoir si on est connecté
    $reponse = @file_get_contents("http://".$_ENV["SERVER"]."api/login?token=".$data);

    if ($reponse === FALSE) 
    {
      error_log("Erreur lors de l'accès à l'API : " . error_get_last()['message']);
      echo "<p class='red'>Erreur lors de la connexion à l'API.</p>";
      return; // on sort de la fonction
    }

    $reponse = json_decode($reponse, true);

    if (json_last_error() !== JSON_ERROR_NONE) 
    {
      echo "<p class='red'>Erreur lors du décodage de la réponse JSON.</p>";
      return;
    }

    // Si la réponse est favorable, on créer un cookie connecté et on propose de commencer à discuter
    if ($reponse == true) 
    {
      setcookie("connecter", true, time()+1200);
      echo "<a href='./chat.php'>Start to talk</a>";
    }
    else { setcookie("connecter", false, time()+1200); }
  }
}

function deja_connecter()
{
  echo "<main>";
    echo "<img src='./image/checked.webp' alt='You are logged'/>";
    echo "<h1>You are logged in</h1>";
  echo "</main>";
}

if (isset($_COOKIE["connecter"]))
{
  if ($_COOKIE["connecter"] == true) {deja_connecter();}
  else {connexion();}
}
else {connexion();} // Si le cookie n'est pas mis en place, on considère qu'on n'est pas connecté

require_once("./include/footer.php");
?>
