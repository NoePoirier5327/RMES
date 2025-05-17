<?php 
include("./bdd.php");

// On initialise la connection avec l'environnement
require_once realpath("../vendor/autoload.php");
use Dotenv\Dotenv; $dotenv = Dotenv::createImmutable("..");
$dotenv->load();

// On vérifie si on est connecté et si les données en paramètre sont correctes
if (isset($_COOKIE["connecter"]) && isset($_GET["id_article"]))
{
  $bdd = new BDD($_ENV["BDD_SERVER"], $_ENV["BDD_USER_NAME"], "", $_ENV["BDD_NAME"]);
  
  if (isset($_GET["content"])) { $bdd->put("article", "id_article", $_GET["id_article"], "content", $_GET["content"]); }
  if (isset($_GET["title"])) { $bdd->put("article", "id_article", $_GET["id_article"], "title", $_GET["title"]); }
  if (isset($_GET["green"])) { $bdd->put("article", "id_article", $_GET["id_article"], "actif", $_GET["green"]); }
  
  if (isset($_GET["content"]) || isset($_GET["title"]) || isset($_GET["green"])) 
  { echo json_encode(["success" => "article successfully modified"]); }
  else { echo json_encode(["warning" => "Nothing in parametre so noting has been modified"]); }
}
else 
{
  http_response_code(405);
  echo json_encode(["error" => "Forbidden method"]);
}
?>
