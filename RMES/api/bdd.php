<?php 
// classe permettant la connection à la bdd du site
class BDD 
{
  private mysqli $connection;
  
  /**
  * @brief Constructeur permettant d'initialiser la connection avec la base de données cible
  * @param string $serv_name -> au serveur sur lequel est hébergé la base de données par exemple "localhost"
  * @param string $user_name -> nom d'utilisateur ciblé sur le serveur
  * @param string $password -> mot de passe de l'utilisateur cible
  * @param string $bdd -> base de données à laquelle se connecter
  */
  public function __construct(string $serv_name, string $user_name, string $password, string $bdd)
  {
    $this->connection = new mysqli($serv_name, $user_name, $password, $bdd);
    if ($this->connection->connect_error)
    {
      die("Une erreur s'est produite lors de la connection à la base de donnée ".$this->connection->connect_error);
    }
  }
  
  /*
  * @brief Permet de fermer la connexion quand on ne se sert plus de l'objet courant
  */
  public function __destruct()
  {
    $this->connection->close();
  }

  /*
  * @brief Méthode permettant de récupérer les informations contenuent dans la table de la bdd choisit
  * @param string $table -> relation cible
  * @return mysqli_result -> tableau associatif contenant tout le contenu de la relation cible
  */
  public function get(string $table): mysqli_result
  { 
    return $this->connection->query("select * from ".$table.";"); 
  }

  /*
  * @brief Méthode permettant de récupérer des informations plus précise dans la base de données
  * @param string $table -> relation cible
  * @param string $id_verify -> paramètre de recherche, exemple "id_user"
  * @param string $id -> valeur à chercher dans la bdd
  * @return mysqli_result -> tableau associatif contenant les informations vouluent
  */
  public function get_where(string $table, string $id_verify, string $id): mysqli_result
  { 
    return $this->connection->query("select * from ".$table." where ".$id_verify."=".$id.";"); 
  }

  /*
  * @brief Méthode permettant d'ajouter des données dans une relation voulu
  * @param string $table -> relation cible
  * @param array $values -> array php contenant données à ajouter à la bdd
  */
  public function post(string $table, $values): void
  {
    $post = "insert into ".$table." values (";

    foreach ($values as $val)
    {
      if (is_string($val)) {$post .= "'".$val."',";}
      else {$post .= $val.",";}
    }

    // on supprime la virgule de trop à la fin de la chaine et on complète la commande
    $post = substr($post, 0, strlen($post)-1); $post .= ");";
    $this->connection->query($post);
  }

  /*
  * @brief Méthode permettant de mettre à jour une donnée dans la bdd
  * @param string $table -> relation cible
  * @param string $id_update -> cible de la mise à jour (si on veut mettre à jour un utilisateur ça serait "id_user")
  * @param string $id -> valeur ciblé
  * @param string $val_update -> valeur à mettre à jour ciblé (exemple, on veut modifier le nom de l'utilisateur donc "user_name")
  * @param string $val -> valeur de remplacement
  */
  public function put(string $table, string $id_update, string $id, string $val_update, string $val): void
  { 
    $this->connection->query("update ".$table." set ".$val_update." = ".$val." where ".$id_update." = ".$id.";"); 
  }

  /*
  * @brief Méthode permettant de supprimer une ligne de la bdd
  * @param string $table -> relation cible
  * @param string $id_del -> paramètre à cibler pour la suppression
  * @param string $id -> valeur à cibler pour la suppression
  */
  public function delete(string $table, string $id_del, string $id): void
  {
    $this->connection->query("delete from ".$table." where ".$id_del." = ".$id.";");
  }

  // Pas de méthode patch
};
?>
