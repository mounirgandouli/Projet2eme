
<?php include("db.php"); ?>



<!DOCTYPE html>
<html>
<head>
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>L'Benna </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <script src="https://kit.fontawesome.com/ac87c673ce.js" crossorigin="anonymous"></script>
    <!-- endinject -->
    <link rel="shortcut icon" href="images/logo2.png" />


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
          <i class="fa fa-globe"></i> Liste des localisations disponibles sur notre site 
          <small class="pull-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <br>
        From
        <address>
          <strong>ElBenna </strong><br>
          Cité la gazelle-Ariana <br>
          Phone: (+216) (+216) 29 672 569<br>
          Email:ElBenna@gmail.com

        </address>
      </div>
      <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
       
                                    <th>Adresse de la localisation </th>
                                    <th>Pays de la localisation </th>
                                    <th>Description de la loalisation </th>
                                    
          
          </tr>
        </thead>
        <tbody>
          <?php

          

   $query = "SELECT * FROM localisation order by Pays_localisation asc"; 
          
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
                                        <td><?php echo $row['Adresse_localisation']; ?></td>
                                        <td><?php echo $row['Pays_localisation']; ?></td>
                                        <td><?php echo $row['Description_localisation']; ?></td>
                                       

            
          </tr>
          <?php } ?>
    </tbody>
</table>

    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>
