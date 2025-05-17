<?php 
// Attention! -> le paramètre $_GET["article"] doit être défini comme une liste

include("./bdd.php");

// On initialise la connection avec l'environnement
require_once realpath("../vendor/autoload.php");
use Dotenv\Dotenv; $dotenv = Dotenv::createImmutable("..");
$dotenv->load();

// On vérifie si on est connecté et si les données en paramètre sont correctes
if (isset($_COOKIE["connecter"]) && isset($_GET["article"]))
{
  $bdd = new BDD($_ENV["BDD_SERVER"], $_ENV["BDD_USER_NAME"], "", $_ENV["BDD_NAME"]);
  $bdd->post("article", $_GET["article"]);
  echo json_encode(["success" => "article successfully added"]);
}
else 
{
  http_response_code(405);
  echo json_encode(["error" => "Forbidden method"]);
}
?>
