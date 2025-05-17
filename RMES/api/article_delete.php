<?php 
include("./bdd.php");

// On initialise la connexion à l'environnement
require_once realpath("../vendor/autoload.php");
use Dotenv\Dotenv; $dotenv = Dotenv::createImmutable("..");
$dotenv->load();

// On vérifie l'état des paramètres et de la connexion avant la suppression
if (isset($_COOKIE["connecter"]) && $_GET["id_article"])
{
  $bdd = new BDD($_ENV["BDD_SERVER"], $_ENV["BDD_USER_NAME"], "", $_ENV["BDD_NAME"]);
  $bdd->delete("article", "id_article", $_GET["id_article"]);
  echo json_encode(["success" => "article successfully deleted"]);
}
else 
{
  http_response_code(405);
  echo json_encode(["error" => "Forbidden method"]);
}
?>
