<?php include_once 'visit.php'; ?>
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
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
         <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html">EM'DIABLÉS</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">

                 <li class="nav-item">
                    <a class="nav-link" href="nouveaute.php">Nouveauté</a>
                 </li>
                  <!-- <li class="nav-item">
                     <a class="nav-link" href="organigramme.php">Organigramme</a>
                  </li> -->
                  <li class="nav-item">
                     <a class="nav-link" href="evenement.php">Évenements</a>
                  </li>

                  <div class="dropdown">
                    <a class="nav-link" data-toggle="dropdown">
                      Résumé
                    </a>


                    <div class="dropdown-menu">
                      <?php require_once"admin/config.php";
                      $sql = $pdo->query('SELECT * FROM sport');
                      while ($leSport = $sql->fetch())
                      {
                      echo '<a class="dropdown-item" href="#">'.$leSport['nom'].'</a>';

                    }?>
                    </div>
                  </div>

                  <li class="nav-item">
                     <a class="nav-link" href="sponsor.php">Sponsors</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="video.php">Vidéo</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.php">Contact</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- corps de page -->
      <header class="masthead">
         <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
               <h1 class="mx-auto my-0 text-uppercase">EM'DIABLÉS</h1>
               <h2 class="text-white-50 mx-auto mt-2 mb-5">Le paradis nous est infernal, ici-bas on tient le Graal</h2>
               <a href="#about" class="btn btn-primary js-scroll-trigger" onclick="playVideo('295054545')">Découvrir</a>
            </div>
         </div>
      </header>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-body">
                  <iframe id="iframeYoutube" width="420" height="315"  src="https://player.vimeo.com/video/295054545" frameborder="0" allowfullscreen></iframe>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
               </div>
            </div>
         </div>
      </div>
      <script>
         $(document).ready(function(){
         $("#myModal").on("hidden.bs.modal",function(){
         $("#iframeYoutube").attr("src","#");
         })
         })

         function playVideo(vId){
         var iframe=document.getElementById("iframeYoutube");
         iframe.src="https://player.vimeo.com/video/"+vId;

         $("#myModal").modal("show");
         }
      </script>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for this template -->
      <script src="js/grayscale.js"></script>

    </body>
