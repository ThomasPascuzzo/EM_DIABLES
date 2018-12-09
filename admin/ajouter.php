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


if ($_GET["type"] == "evenement")
{

echo "<h4> Gestion des evenments </h4>";
echo '
<form action="traitement.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="formGroupExampleInput">Titre</label>
    <input type="text" class="form-control" name="titre" placeholder="Titre">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput">Image</label>
    <input type="file" class="form-control" name="image">
  </div>

  <div class="form-group">
   <label for="exampleFormControlTextarea1">Contenu</label>
   <textarea class="form-control" name="corps" rows="3"></textarea>
 </div>

  <input type="submit" class="btn btn-primary" value="Valider"></button>

</form>
';
}

else {
  echo 'error';
}?>

</body>
</html>
