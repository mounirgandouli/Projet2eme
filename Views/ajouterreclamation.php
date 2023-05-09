<?php
    include_once '../Model/reclamation.php';
    include_once '../Controller/reclamationC.php';

    $error = "";

    // create reclamation
    $reclamation = null;

    // create an instance of the controller
    $reclamationC = new reclamationC();
    if (

		isset($_POST["typer"]) &&		
        isset($_POST["dater"]) &&
		isset($_POST["sujet"]) && 
        isset($_POST["dess"])
    ) {
        if (
			!empty($_POST['typer']) &&
            !empty($_POST["dater"]) && 
			!empty($_POST["sujet"]) && 
            !empty($_POST["dess"])
        ) {
            $reclamation = new reclamation(
                null,
				$_POST['typer'],
                $_POST['dater'], 
				$_POST['sujet'],
                $_POST['dess']

            );
            $reclamationC->ajouterreclamation($reclamation);
            header('location:afficherListereclamations.php');
        }
        else
            $error = "Missing information";
    }

    
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>Impact</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a href="afficherListereclamationsadmin.php">Panel</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="gallery.html">Nature</a></li>
              <li><a href="gallery.html">People</a></li>
              <li><a href="gallery.html">Architecture</a></li>
              <li><a href="gallery.html">Animals</a></li>
              <li><a href="gallery.html">Sports</a></li>
              <li><a href="gallery.html">Travel</a></li>
              <li class="dropdown"><a href="#"><span>Sub Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="afficherListereponses.php">reponse</a></li>
          <li><a href="afficherListereclamations.php" class="active">reclamation</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>reclamation</h2>
        

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->
    <body>
        <button><a href="afficherListereclamations.php">Retour à la liste des reclamations</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        <script>
            function validateForm() {
    let x = document.forms["myForm"]["typer"].value;
    if (x == "") {
      alert("type must be filled out");
      return false;
    }
    let Y = document.forms["myForm"]["sujet"].value;
    if (Y=="") {
      alert("sujet must be filled out");
      return false;
    }
    let w = document.forms["myForm"]["dater"].value;
    if (w=="") {
      alert("date must be filled out");
      return false;
    }
    let Z = document.forms["myForm"]["dess"].value;
    if (Z=="") {
      alert("dess of  must be filled out");
      return false;
    }

  }
        </script>
        <style>
table {
background-color: white;
  margin: 0 auto; /* Centers the table horizontally */
  width: 80%; /* Sets the width of the table */
  max-width: 800px; /* Sets the maximum width of the table */
  border-collapse: collapse; /* Collapses the borders between table cells */
}

td {

  padding: 10px; /* Adds padding around the table cells */
  text-align: left; /* Aligns the text to the left */
}

label {
    color: black;
  font-weight: bold; /* Makes the label text bold */
}
</style>
        <form name="myForm" action="" onsubmit="return validateForm()"method="POST">
            <table border="1" align="center">
				<tr>
                    <td>
                        <label for="typer">type de reclamation :
                        </label>
                    </td>
                    <td><input type="text" name="typer" id="typer" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="dater">date de reclamation :
                        </label>
                    </td>
                    <td><input type="date" name="dater" id="dater" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="sujet">sujet de reclamation:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="sujet" id="sujet">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dess">description de reclamation :
                        </label>
                    </td>
                    <td>
                        <input type="text" name="dess" id="dess">
                    </td>
                </tr>            
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html> <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Impact</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  
  
  <script>

    </script>

    <body>
    <html lan="en">
     <head> 
        </head>
        </body>
  



        <?php
  /*---------------------------------------------------------------*/
/*
    Titre : Traduire vos pages dans une autre langue                                                                      
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=817
    Auteur           : sheppy1                                                                                            
    Date édition     : 11 Jan 2019                                                                                        
    Date mise à jour : 19 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/

/*---------------------------------------------------------------*/?>
    <!DOCTYPE html> 
    <html lang="fr">
    <body> 
      
      
    <p>Translate this page in your preferred language:</p>
      
    <div id="google_translate_element"></div> 
      
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'en'},
 'google_translate_element'); 
    } 
    </script> 
      
    <script type="text/javascript"
 src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementIni
t"></script> 
      
   
    </body> 
    </html>


                                   
    <?php
/*---------------------------------------------------------------*/
/*
    Titre : Affiche date et heure dynamiquement                                                                           
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=664
    Date édition     : 16 Sept 2012                                                                                       
    Date mise à jour : 16 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                    
*/
/*---------------------------------------------------------------*/

define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH', dirname(__FILE__).DS);
define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME']).'/');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>AJAX refresh example</title>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script>
       function updateClock() {
    var now = new Date();
    var year = now.getFullYear();
    var month = now.getMonth() + 1;
    var day = now.getDate();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    var dateString = year + '-' + month + '-' + day;
    var timeString = hours + ':' + minutes + ':' + seconds;
    document.getElementById('date').innerHTML = dateString;
    document.getElementById('time').innerHTML = timeString;
}

setInterval(updateClock, 1000);

    </script>
</head>
<body>
    <div id="ajax-refresh">
        <?php include(BASE_PATH.'chat.php');?>
        <div id="date"></div>
<div id="time"></div>

</body>
</html>

  