<?php


// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


require_once'config.php';
if ($_POST["titre"] && $_FILES['image'] && $_POST["corps"])
{
  // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
      if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
      {
              // Testons si le fichier n'est pas trop gros
              if ($_FILES['image']['size'] <= 1000000)
              {
                      // Testons si l'extension est autorisée
                      $infosfichier = pathinfo($_FILES['image']['name']);
                      $extension_upload = $infosfichier['extension'];
                      $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                      if (in_array($extension_upload, $extensions_autorisees))
                      {
                              // On peut valider le fichier et le stocker définitivement
                              move_uploaded_file($_FILES['image']['tmp_name'], '/Applications/MAMP/htdocs/EM_DIABLES/img/' . basename($_FILES['image']['name']));

                      }
              }
      }

      // Insertion en base



      $req = $pdo->prepare('INSERT INTO evenement(id, titre, img, corps, date_creation) VALUES (null,:titre,:image,:corps, CURRENT_TIMESTAMP())');
      $req->execute(array(
        'titre' => $_POST["titre"],
        'image' => $_FILES['image']['name'],
        'corps' => $_POST["corps"]

        ));

      echo 'L \' évenement a bien été ajouté !';
      echo '<br><a href="welcome.php">Retour</a>';

}

 ?>
