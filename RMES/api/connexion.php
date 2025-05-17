<?php 
include("./bdd.php");

require_once realpath("../vendor/autoload.php");
use Dotenv\Dotenv; $dotenv = Dotenv::createImmutable("..");
$dotenv->load();

// On vérifie le contenu du token
if (isset($_GET["token"])) 
{
  setcookie("test", true, time() + 1200);
  // On décode le token
  $decodedToken = urldecode($_GET["token"]);
  if ($decodedToken === false) 
  {
    http_response_code(400); // Bad Request
    echo json_encode(["error" => "Invalid token format - URL"]);
    return;
  }

  $decode = json_decode($decodedToken, true);
  if (json_last_error() !== JSON_ERROR_NONE) 
  {
    http_response_code(400); // Bad Request
    echo json_encode(["error" => "Invalid token format - JSON", "json_decoded" => $decode, "json_undecoded" => $decodedToken]);
    return;
  }

  // On vérifie si le token contient des données valides
  $bdd = new BDD($_ENV["BDD_SERVER"], $_ENV["BDD_USER_NAME"], "", $_ENV["BDD_NAME"]);
  $users = $bdd->get("user");

  // On se connecte
  $to_return = ["connecter" => false, "error" => "Invalid login or password"]; // par défaut, on n'est pas connecté
  foreach ($users as $user)
  {
    // Hachage du mot de passe fourni par l'utilisateur
    if ($decode["identifiant"] == $user["identifiant"] && hash_equals($user["mot_de_passe"], $decode["mot_de_passe"])) 
    { 
      $to_return = ["connecter" => true, "id" => $user["id_user"]];
      break; // On a pas besoin de chercher plus vu qu'on a trouvé
    }
  }
  echo json_encode($to_return);
} 
else // Si le token de connexion n'est pas valide, on renvoie une erreur
{
  http_response_code(405);
  echo json_encode(["error" => "Forbidden method"]);
}
?>
