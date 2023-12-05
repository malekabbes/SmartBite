<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  
  <title> Smart Restaurant </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://unpkg.com/feather-icons"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
  <?php include 'header.php' ; ?>
  <link rel="stylesheet" href="css/diet.css">
  <script src="js/diet.js"></script>

</head>

<body class="sub_page">

  <?php  include 'navbar.php' ; ?>

  <!-- food section -->


  <section class="food_section layout_padding">
    <div class="container" style="width : 60% ;">
      <div class="heading_container heading_center">
        <h2>
          IMC Calculator / Generator
        </h2>
      </div>

      <form id="bmiForm" class="form1">
        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" name="weight" required>

        <label for="height">Height (cm):</label>
        <input type="number" id="height" name="height" required>

        <button type="button" onclick="calculateBMI()">Calculate BMI</button>
        <button type="button" class="menu-gen" onclick="generateMenu()" >Generate menus</button>

        <div id="result" class="alert alert-success" role="alert" ></div>
        <div class="loader-container">
        <span class="loader" id="loader" style="display:none;"></span>
        </div>

    </form>


  </section>
  <br><br>
  <?php include './floatingmenu.php'; ?>

<div id="generatedmenus" class="alert">

</div>


  <!-- footer section -->
  <?php include 'footer.php'; ?>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>