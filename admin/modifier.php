<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

<?php
require_once 'config.php';

if ($_GET["idEvenement"])
{
  $id = $_GET["idEvenement"];
  $sql = $pdo->query('SELECT * FROM evenement WHERE id = '.$id.'');

  $lEvent = $sql->fetch();

echo "<h4> Gestion des evenments </h4>";
echo '
<form action="traitement.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="formGroupExampleInput">Titre</label>
    <input type="text" class="form-control" name="titre" placeholder="Titre" value="'.$lEvent["titre"].'">
  </div>


  <div class="form-group">
   <label for="exampleFormControlTextarea1">Contenu</label>
   <textarea class="form-control" name="corps" rows="3">'.$lEvent["corps"].'</textarea>

 </div>
  <input id="idEvenement" name="idEvenement" type="hidden" value="'.$id.'">
  <input type="submit" class="btn btn-primary" value="Modifier"></button>

</form>
';
}

if ($_GET["idSport"])
{
  $id = $_GET["idSport"];
  $sql = $pdo->query('SELECT * FROM sport WHERE id = '.$id.'');

  $lEvent = $sql->fetch();

echo "<h4> Gestion des sports </h4>";
echo '
<form action="traitement.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="formGroupExampleInput">Titre</label>
    <input type="text" class="form-control" name="nomSportModifier" placeholder="Nom du Sport" value="'.$lEvent["nom"].'">
  </div>


  <input id="idSport" name="idSport" type="hidden" value="'.$id.'">
  <input type="submit" class="btn btn-primary" value="Modifier"></button>

</form>
';
}
?>

</body>
</html>
