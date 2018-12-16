<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>EM'DIABLÉS</title>
      <!-- Bootstrap core CSS -->
      <!-- <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!-- Custom fonts for this template -->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/grayscale.css" rel="stylesheet">
      <link rel="icon" type="image/png" href="img/contactLogo.png" />
      <style>
         .img-fluid{
         margin-bottom: 1.5em;
         }
         div {
         text-align: justify;
         text-justify: inter-word;
         }
      </style>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129075238-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129075238-1');
</script>


   </head>
   <body id="page-top">
      <? require_once 'menu.php'; ?>
      <!-- Main Content -->
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

              <?php
              require_once"admin/config.php";
                $sql = $pdo->query('SELECT * FROM evenement ORDER BY evenement.date_creation DESC');

                while ($lEvent = $sql->fetch())
                {
                echo ' <div class="post-preview">
                   <h2 class="post-title">
                      '.$lEvent['titre'].'
                   </h2>
                   <img class="img-fluid" src="img/'.$lEvent['img'].'" alt="">
                   <p>
                      '.$lEvent['corps'].'
                   </p>
                </div>
                <hr>';
                }


               ?>


               <!-- Pager -->
               <div class="clearfix">
                  <a class="btn btn-primary float-right" href="#">Plus ancien &rarr;</a>
               </div>
            </div>
         </div>
      </div>
      <hr>
      <?php require_once 'footer.html'; ?>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for this template -->
      <script src="js/grayscale.js"></script>
   </body>
