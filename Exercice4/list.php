<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Solicode Users</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/clipart1249120.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!--  icon  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous"> 
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- start Header -->
    <header id="header" class="header fixed-top">
        <div class=" container d-flex justify-content-between   ">
    
     
          
          <!-- .navbar -->
          <nav id="navbar" class="navbar mx-ul  "  style="margin-left:500px; ">
            <ul>
              <li><a href="create.php">New User</a></li>
              <li><a href="list.html">list Users</a></li>
     
     
            </ul>
          </nav>
          <!-- .navbar -->
    
        </div>
      </header>
      <!-- End Header -->






<br /><br />
<br /><br /> <br /><br /> <br /><br />

 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">


<div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>SoliUsers</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="">KAOUTAR IZI | AYMANE NASSER</a>
    </div>
  </div>
</footer>
<!-- End Footer -->




  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
  
</html>


<?php  

  
               
$content = file_get_contents("users.json");
$data = json_decode($content, true);
echo '<table class="table table-borderless">
<thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Tele</th>
    </tr>
</thead>';

foreach($data as $row){
echo'<table class="table table-borderless">

<tbody>
<td>'.$row["Name"].'</td>  <td>'.$row["lname"].'</td>  <td>'.$row["Tele"].'</td><br><br>
</tbody>
</table> ';


}


?>  