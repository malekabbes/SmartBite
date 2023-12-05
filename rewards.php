<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  
  <title> Smart Restaurant </title>

  <?php include 'header.php' ; ?>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style>
    .butt{
            background-color : #ffbe33 ;
            border : none ;
            color : black ; 
        }
  </style>
</head>

<body class="sub_page">

  <?php  include 'navbar.php' ; ?>

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h1>
          Our Rewards
        </h1>
      </div>

      <h4 style="margin-top : 40px ">
          You currently have <i class='fas fa-coins'></i> <span style="font-weight : bold"> 450 points. </span>
      </h4>
      <div>
        You can redeem your points for the following food !
      </div>

      <div class="filters-content">
        <div class="row grid">
          
           
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box" >
              <div  style="background-color : #4D906C ; ">
                <div class="img-box">
                  <img src="images/f7.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Cheese Burger
                  </h5>
                  <p>
                    Restaurant : KFC
                  </p>
                  <div class="options">
 

                    <button class="btn btn-primary butt">
                      <i class="fa fa-plus"></i> 
                      Redeem for <span style="font-weight : bold"> 320 points </span>
                    </button>
                    
                     
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box" >
              <div  style="background-color : #4D906C ; ">
                <div class="img-box">
                  <img src="images/f8.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Chicken Burger
                  </h5>
                  <p>
                    Restaurant : McDonald's
                  </p>
                  <div class="options">
 

                    <button class="btn btn-primary butt">
                      <i class="fa fa-plus"></i> 
                      Redeem for <span style="font-weight : bold"> 490 points </span>
                    </button>
                    
                     
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box" >
              <div  style="background-color : #4D906C ; ">
                <div class="img-box">
                  <img src="images/f9.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Pasta Carbonara
                  </h5>
                  <p>
                    Restaurant : Pasta Box
                  </p>
                  <div class="options">
 

                    <button class="btn btn-primary butt">
                      <i class="fa fa-plus"></i> 
                      Redeem for <span style="font-weight : bold"> 510 points </span>
                    </button>
                    
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
           





      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

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