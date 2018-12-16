<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

  require_once'config.php';
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
    <div class="page-header">
        <h1>Bienvenue <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">Déconnexion</a>
    </p>
<h4>Gestion des évenements </h4>

<a href="ajouter.php?type=evenement">Ajouter un évenment</a>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php
  $sql = $pdo->query('SELECT * FROM evenement');

  while ($lEvent = $sql->fetch())
  {
  echo '  <tr>
      <th scope="row">'.$lEvent["id"].'</th>
      <td>'.$lEvent["titre"].'</td>
      <td><a href="modifier.php?idEvenement='.$lEvent["id"].'">Modifier</a></td>
    </tr>';
  }


 ?>

  </tbody>
</table>

<h4>Gestion des sports </h4>

<a href="ajouter.php?type=sport">Ajouter un sport</a>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php
  $sql = $pdo->query('SELECT * FROM sport');

  while ($leSport = $sql->fetch())
  {
  echo '  <tr>
      <th scope="row">'.$leSport["id"].'</th>
      <td>'.$leSport["nom"].'</td>
      <td><a href="modifier.php?idSport='.$leSport["id"].'">Modifier</a></td>
    </tr>';
  }


 ?>

  </tbody>
</table>


</body>
</html>
