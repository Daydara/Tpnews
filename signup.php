<?php

define("MYSQL_HOST", "localhost");

define("MYSQL_USER", "root");

define("MYSQL_PASSWD", "wech24$$");

define("MYSQL_DB", "gasha_news");


try {
  $PDO= new PDO("mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DB,MYSQL_USER,MYSQL_PASSWD);

  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

} catch (PDOException $e) {

  $e->getMessage();

}

if(isset($_POST["submit"])){

  if($_POST["pseudo"]!="" && $_POST["mail"]!="" && $_POST["password"]!=""){

    $req = $PDO->prepare("INSERT INTO users (pseudo, mail, password) VALUES (:pseudo, :mail, :password)");

    $req->bindValue(":pseudo", $_POST["pseudo"]);

      $req->bindValue(":mail", $_POST["mail"]);

    $req->bindValue(":password", sha1($_POST["password"]));

    if($req->execute()){
      $login=$PDO->prepare("SELECT * FROM users WHERE pseudo=:pseudo AND password=:password");
      $login->bindValue(":pseudo", $_POST["pseudo"]);
      $login->bindValue(":password", sha1($_POST["password"]));
      $login->execute();
      $compte=$login->fetch();
      session_start();
      $_SESSION['id'] = $compte->id;
      $_SESSION['pseudo'] = $compte->pseudo;
      echo "compte enregistré";
    } else {
      echo "erreur";
    }
}
}

 ?>