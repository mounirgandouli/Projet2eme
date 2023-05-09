<?php
	include '../Controller/reponseC.php';
	$reponseC = new reponseC();
	$listereponses = $reponseC->afficherreponsesorder(); 
?>
<style>
.my-table {
	background-color: white;
  border-collapse: collapse;
  width: 100%;
  font-size: 1em;
  font-family: Arial, sans-serif;
  color: #333;
}

.my-table th, .my-table td {
  padding: 0.5em;
  border: 1px solid #ccc;
}

.my-table th {
  background-color: #f7f7f7;
  text-align: left;
  font-weight: bold;
}

.my-table td {
  text-align: left;
}

.my-table td form {
  display: inline-block;
}

.my-table td a {
  display: inline-block;
  padding: 0.5em;
  background-color: #f44336;
  color: #fff;
  text-decoration: none;
  border-radius: 2px;
}

.my-table td a:hover {
  background-color: #d32f2f;
}
</style>
<html>
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
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>

	</head>
	<body>
	    <button><a href="ajouterreponse.php">Ajouter un reponse</a></button>
		<center><h1>Liste des reponses</h1></center>
		<input type="text" id="search-term" placeholder="Search">
		
    <button><a href="repo.php">trier par date</a></button>
		<table class="my-table" border="1" align="center" id="reponse-table">
			<tr>
				<th>idrep</th>
				<th>Type</th>
				<th>Date</th>
				<th>Sujet</th>
				<th>Description</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php foreach($listereponses as $reponse) { ?>
				<tr>
					<td><?php echo $reponse['idrep']; ?></td>
					<td><?php echo $reponse['IDR']; ?></td>
					<td><?php echo $reponse['dater']; ?></td>
					<td><?php echo $reponse['sujet']; ?></td>
					<td><?php echo $reponse['dess']; ?></td>

					<td>
						<form method="POST" action="modifierreponse.php">
							<input  type="submit" name="Modifier" value="Modifier">
							<input type="hidden" value=<?PHP echo $reponse['idrep']; ?> name="idrep">
						</form>
					</td>
					
					<td>
						<a href="supprimerreponse.php?idrep=<?php echo $reponse['idrep']; ?>">Supprimer</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	
	</body>
</html>

	
		
		
		
		

		<script>
	$(function() {
		$("#search-term").on("input", function() {
			var searchTerm = $(this).val().trim();
			
			if (searchTerm.length > 0) {
				$.ajax({
					url: "search-reponses.php",
					method: "POST",
					data: {searchTerm: searchTerm},
					dataType: "json",
					success: function(data) {
					
						var rowsHtml = "<tr>" +
                    "<th>idrep</th>" +
                    "<th>Type</th>" +
                    "<th>Date</th>" +
                    "<th>Sujet</th>" +
                    "<th>Description</th>" +
                    "<th>Modifier</th>" +
                    "<th>Supprimer</th>" +
                "</tr>";
						for (var i = 0; i < data.length; i++) {
							rowsHtml += "<tr>" +
								"<td>" + data[i].idrep + "</td>" +
								"<td>" + data[i].IDR + "</td>" +
								"<td>" + data[i].dater + "</td>" +
								"<td>" + data[i].sujet + "</td>" +
								"<td>" + data[i].dess + "</td>" +
								"<td>" +
									"<form method='POST' action='modifierreponse.php'>" +
										"<input type='submit' name='Modifier' value='Modifier'>" +
										"<input type='hidden' value='" + data[i].idrep + "' name='idrep'>" +
									"</form>" +
								"</td>" +
								"<td>" +
									"<a href='supprimerreponse.php?idrep=" + data[i].idrep + "'>Supprimer</a>" +
								"</td>" +
							"</tr>";
						}
						
						$("#reponse-table").html(rowsHtml);
					}
				});
			} else {
				location.reload();
			}
		});
	});
</script>
<style>
.my-table {
  border-collapse: collapse;
  width: 100%;
  font-size: 1em;
  font-family: Arial, sans-serif;
  color: #333;
}

.my-table th, .my-table td {
  padding: 0.5em;
  border: 1px solid #ccc;
}

.my-table th {
  background-color: #f7f7f7;
  text-align: left;
  font-weight: bold;
}

.my-table td {
  text-align: left;
}

.my-table td form {
  display: inline-block;
}

.my-table td a {
  display: inline-block;
  padding: 0.5em;
  background-color: #f44336;
  color: #fff;
  text-decoration: none;
  border-radius: 2px;
}

.my-table td a:hover {
  background-color: #d32f2f;
}
</style>


 <!-- ======= Footer ======= -->
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
	
