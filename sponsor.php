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
      <style>
         .row {
         margin-bottom: 2em;
         }
         .card-title {
         text-align: center;
         font-weight: bold;
         }
         .intro {
         margin-top: 2em;
         background-color: #f8f9fa!important;
         text-align: center;
         font-size: 25px;
         }
         body {
         background-color: #f8f9fa!important;
         }
         #masque{
         visibility: hidden;
         }
      </style>
   </head>
   <body id="page-top">
      <?php require_once 'menu.html'; ?>
      <div class="intro">
         Vous souhaitez faire partie de nos sponsors / partenaires ? <br> Contactez-nous à l'adresse mail suivante : <a href="mailto:polesponsors@emdiables.fr">polesponsors@emdiables.fr</a>
      </div>
      <section id="projects" class="projects-section bg-light">
         <div class="container">
            <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-9">
                  <div class="card-deck">
                     <div class="card">
                        <img class="card-img-top" src="img/infini.png" alt="Card image cap" width="259" height="180">
                        <div class="card-body">
                           <h5 class="card-title">INFINI CAB</h5>
                           <p class="card-text">INFINI CAB, l'application VTC disponible à Strasbourg et ses environs. Nous intervenons aussi bien pour des trajets professionnels que privés.</p>
                        </div>
                        <div class="card-footer">
                           <a href="https://www.infinicab.fr" target="_blank">
                           <small class="text-muted">En savoir plus</small>
                           </a>
                        </div>
                     </div>
                     <div class="card">
                        <img class="card-img-top" src="img/pumpkin.jpg" alt="Card image cap" width="259" height="180">
                        <div class="card-body">
                           <h5 class="card-title">Pumpkin</h5>
                           <p class="card-text">Pumpkin est une application mobile conviviale qui permet les paiements et remboursements spontanés et décompléxés entre amis !</p>
                        </div>
                        <div class="card-footer">
                           <a href="https://pumpkin-app.co" target="_blank">
                           <small class="text-muted">En savoir plus</small>
                           </a>
                        </div>
                     </div>
                     <div class="card">
                        <img class="card-img-top" src="img/pacific.jpg" alt="Card image cap" width="259" height="180">
                        <div class="card-body">
                           <h5 class="card-title">PACIFIC</h5>
                           <p class="card-text">L’instant Pacific, c’est avant tout un moment de détente, de plaisir et de fraîcheur. Surfant sur la vague du bien-être, Pacific vous invite à un voyage de saveurs variées et gourmandes. Pacific, une boisson légère sans alcool, 0 sucre et 0 calorie à consommer sans modération.</p>
                        </div>
                        <div class="card-footer">
                           <a href="https://www.pernod-ricard.com/fr-fr/ricard/nos-marques/pacific/" target="_blank">
                           <small class="text-muted">En savoir plus</small>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-1"></div>
            </div>
            <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-9">
                  <div class="card-deck">
                     <div class="card">
                        <img class="card-img-top" src="img/lescognees.png" alt="Card image cap" width="259" height="180">
                        <div class="card-body">
                           <h5 class="card-title">Les Cognées</h5>
                           <p class="card-text">Les Cognées est le premier centre de lancer de haches en France. Grâce aux conseils de nos instructeurs, vous deviendrez rapidement un expert du lancer de haches.</p>
                        </div>
                        <div class="card-footer">
                           <a href="https://lescognees.com" target="_blank">
                           <small class="text-muted">En savoir plus</small>
                           </a>
                        </div>
                     </div>
                     <div class="card">
                        <img class="card-img-top" src="img/recit.jpg" alt="Card image cap" width="259" height="180">
                        <div class="card-body">
                           <h5 class="card-title">Recit</h5>
                           <p class="card-text">Vous n'avez jamais été aussi proche de vos consommateurs.</p>
                        </div>
                        <div class="card-footer">
                           <a href="https://www.facebook.com/agencerecit/" target="_blank">
                           <small class="text-muted">En savoir plus</small>
                           </a>
                        </div>
                     </div>
                     <div class="card">
                        <img class="card-img-top" src="img/cros.jpg" alt="Card image cap" width="259" height="180">
                        <div class="card-body">
                           <h5 class="card-title">CrossFit Strasbourg</h5>
                           <p class="card-text">CrossFit Strasbourg  vous guidera et vous enseignera des mouvements fonctionnels, qui vous apporteront de nombreux bénéfices pour votre santé. En plus  d'embélir votre apparence  et d'améliorer  votre forme, (physique et mentale),  participera à la prévention des blessures et douleurs en améliorant votre force fonctionnelle.</p>
                        </div>
                        <div class="card-footer">
                           <a href="https://www.crossfitstrasbourg.com" target="_blank">
                           <small class="text-muted">En savoir plus</small>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-9">
                  <div class="card-deck">
                     <div class="card">
                        <img class="card-img-top" src="img/laser.jpg" alt="Card image cap" width="259" height="180">
                        <div class="card-body">
                           <h5 class="card-title">Lasermaxx Strasbourg</h5>
                           <p class="card-text">Un lasergame sur 2 niveaux pour un max de sensation, et un mini golf intérieur fluorescent, ideal pour une sortie entre amies, en famille ou pour un team building ou une sortie étudiante.</p>
                        </div>
                        <div class="card-footer">
                           <a href="https://www.lasermaxxstrasbourg.com/" target="_blank">
                           <small class="text-muted">En savoir plus</small>
                           </a>
                        </div>
                     </div>
                     <div class="card">
                        <img class="card-img-top" src="img/cochon.jpg" alt="Card image cap" width="259" height="180">
                        <div class="card-body">
                           <h5 class="card-title">Les 3 Ptits cochons</h5>
                           <p class="card-text">
                              Les 3 Ptits cochons, épicerie fine spécialisée en salaisons et bretzels locaux.
                              A ce jour vous pouvez retrouver leur nombreuses variétés de saucissons dans les deux boutiques (situées à grand rue et place d’Austerlitz) et également un peu moins d’une quinzaine de variétés de bretzel faites mains et extrêmement délicieuses. Vous y retrouverez également des bières, vins, jus et terrines d’Alsace pour accompagner votre apéro.
                           </p>
                        </div>
                        <div class="card-footer">
                           <a href="http://www.les3ptiscochons.fr" target="_blank">
                           <small class="text-muted">En savoir plus</small>
                           </a>
                        </div>
                     </div>
                     <div class="card" id="masque">
                        <img class="card-img-top" src="img/pacific.jpg" alt="Card image cap" width="259" height="180">
                        <div class="card-body">
                           <h5 class="card-title">PACIFIC</h5>
                           <p class="card-text">L’instant Pacific, c’est avant tout un moment de détente, de plaisir et de fraîcheur. Surfant sur la vague du bien-être, Pacific vous invite à un voyage de saveurs variées et gourmandes. Pacific, une boisson légère sans alcool, 0 sucre et 0 calorie à consommer sans modération.</p>
                        </div>
                        <div class="card-footer">
                           <a href="https://www.pernod-ricard.com/fr-fr/ricard/nos-marques/pacific/" target="_blank">
                           <small class="text-muted">En savoir plus</small>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-1"></div>
            </div>
         </div>
      </section>
      <?php require_once 'footer.html'; ?>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for this template -->
      <script src="js/grayscale.js"></script>
   </body>
