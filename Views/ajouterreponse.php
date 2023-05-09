<?php
    include_once '../Model/reponse.php';
    include_once '../Controller/reponseC.php';
    include '../Controller/reclamationC.php';
    include '../PHPMailer-master/PHPMailerAutoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;






    
    
    
    
    
    
    
    $error = "";

    // create reponse
    $reponse = null;

    // create an instance of the controller
    $reponseC = new reponseC();
    if (

		isset($_POST["IDR"]) &&		
        isset($_POST["dater"]) &&
		isset($_POST["sujet"]) && 
        isset($_POST["dess"])
    ) {
        if (
			!empty($_POST['IDR']) &&
            !empty($_POST["dater"]) && 
			!empty($_POST["sujet"]) && 
            !empty($_POST["dess"])
        ) {
            $reponse = new reponse(
                null,
				$_POST['IDR'],
                $_POST['dater'], 
				$_POST['sujet'],
                $_POST['dess']

            );
            $reponseC->ajouterreponse($reponse);
            header('location:afficherListereponses.php');
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
          <li><a href="afficherListereponses.php" class="active">reponse</a></li>
          <li><a href="afficherListereclamations.php" >reclamation</a></li>
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
            <h2>reponse</h2>
        

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

<head>

    <body>
        <button><a href="afficherListereponses.php">Retour à la liste des reponses</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        <script>
            function validateForm() {
    let x = document.forms["myForm"]["IDR"].value;
    if (x == "") {
      alert("reclamation must be filled out");
      return false;
    }
    let Y = document.forms["myForm"]["sujet"].value;
    if (Y=="") {
      alert("sujet must be filled out");
      return false;
    }
    let Z = document.forms["myForm"]["dess"].value;
    if (Z=="") {
      alert("dess of  must be filled out");
      return false;
    }

  }
        </script>
        
        <?php 
                    
                      $reclamationC = new reclamationC();
                      $resultats = $reclamationC->afficherreclamations();
                      ?>
        <form name="myForm" action="" onsubmit="return validateForm()"method="POST">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="IDR">Reclamation:</label>   </td>
                        <br>
                        <td> <select name="IDR" id="IDR" required>
        <option value="">--Please choose an option--</option>
        <?php foreach ($resultats as $value) { ?>
            <option value="<?php echo $value['IDR']; ?>"><?php echo $value['sujet']; ?></option>
        <?php } ?></td>    </tr>
    </select>       
                <tr>
                    <td>
                        <label for="dater">date de reponse :
                        </label>
                    </td>
                    <td><input type="date" name="dater" id="dater" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="sujet">sujet de reponse:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="sujet" id="sujet">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dess">description de reponse :
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

</body>

</html>