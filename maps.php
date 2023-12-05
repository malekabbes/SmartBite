<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  
  <title> Smart Restaurant </title>

  <?php include 'header.php' ; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .textCard{
        margin-top : 14px ; 
        font-size : 18px ; 
    }

    .butt{
        background-color : #ffbe33 ;
        border : none ;
    }

  </style>
</head>

<body class="sub_page">

  <?php  include 'navbar.php' ; ?>

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Find the nearest restaurants to your Location
        </h2>
      </div>
    
      <div class="row" style="margin-top: 40px; max-height: 600px; overflow:auto;">

            <div class="col">
                <div class="card" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                    <!-- Restaurant Image -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <!-- Restaurant Image -->
                                <img style="width: 100px; height : 100px" src="https://static.actu.fr/uploads/2022/12/316295096-10161144238112952-5357702820622569035-n.jpg" class="card-img-top" alt="Restaurant Image">
                            </div>
                            <div class="col">
                                <!-- Counter for "How much people are going to this restaurant" -->
                                <h5>
                                    KFC
                                </h5>
                                
                                <h5 class="textCard" style="color : #ffbe33 ; ">
                                    <i class="fa fa-hourglass"></i>
                                    Going : 3
                                </h5> 
                                <h5 class="textCard" style="color : green ; ">
                                    <i class="fa fa-check"></i>
                                    Already In : 9
                                </h5>  
                            </div>
                            <div class="col-auto">
                                    <!-- Round button for "Going" -->
                                    <button class="btn btn-primary butt" >
                                        <i class="fa fa-plus"></i> 
                                        Going
                                    </button>
                                </div>
                        </div>
                    </div> 
                </div>


                <div class="card" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; margin-top : 15px">
                    <!-- Restaurant Image -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <!-- Restaurant Image -->
                                <img style="width: 100px; height : 100px" src="https://api.halalfoodtrip.com/images/4170_b63b352b-e08d-c68d-6671-0c30344f957a.jpg" class="card-img-top" alt="Restaurant Image">
                            </div>
                            <div class="col">
                                <!-- Counter for "How much people are going to this restaurant" -->
                                <h5>
                                    O'Tacos
                                </h5>
                                <h5 class="textCard" style="color : #ffbe33 ; ">
                                    <i class="fa fa-hourglass"></i>
                                    Going : 12
                                </h5> 
                                <h5 class="textCard" style="color : green ; ">
                                    <i class="fa fa-check"></i>
                                    Already In : 8
                                </h5>  
                            </div>
                            <div class="col-auto">
                                    <!-- Round button for "Going" -->
                                    <button class="btn btn-primary butt" >
                                        <i class="fa fa-plus"></i> 
                                        Going
                                    </button>
                                </div>
                        </div>
                    </div> 
                </div>


                <div class="card" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; margin-top : 15px">
                    <!-- Restaurant Image -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <!-- Restaurant Image -->
                                <img style="width: 100px; height : 100px" src="https://www.pagesjaunes.fr/media/ugc/pizza_hut_07505600_104008308" class="card-img-top" alt="Restaurant Image">
                            </div>
                            <div class="col">
                                <h5>
                                    Pizza Hut
                                </h5>
                                <!-- Counter for "How much people are going to this restaurant" -->
                                <h5 class="textCard" style="color : #ffbe33 ; ">
                                    <i class="fa fa-hourglass"></i>
                                    Going : 1
                                </h5> 
                                <h5 class="textCard" style="color : green ; ">
                                    <i class="fa fa-check"></i>
                                    Already In : 27
                                </h5>  
                            </div>
                            <div class="col-auto">
                                    <!-- Round button for "Going" -->
                                    <button class="btn btn-primary butt" >
                                        <i class="fa fa-plus"></i> 
                                        Going
                                    </button>
                                </div>
                        </div>
                    </div> 
                </div>


                <div class="card" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; margin-top : 15px">
                    <!-- Restaurant Image -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <!-- Restaurant Image -->
                                <img style="width: 100px; height : 100px" src="https://media-cdn.tripadvisor.com/media/photo-s/13/2d/e5/6c/restaurant-turc.jpg" class="card-img-top" alt="Restaurant Image">
                            </div>
                            <div class="col">
                                <h5>
                                    Istanbul Grill
                                </h5>
                                
                                <!-- Counter for "How much people are going to this restaurant" -->
                                <h5 class="textCard" style="color : #ffbe33 ; ">
                                    <i class="fa fa-hourglass"></i>
                                    Going : 8
                                </h5> 
                                <h5 class="textCard" style="color : green ; ">
                                    <i class="fa fa-check"></i>
                                    Already In : 15
                                </h5>  
                            </div>
                            <div class="col-auto">
                                    <!-- Round button for "Going" -->
                                    <button class="btn btn-primary butt" >
                                        <i class="fa fa-plus"></i> 
                                        Going
                                    </button>
                                </div>
                        </div>
                    </div> 
                </div>

                


        </div>
        <div class="col">
            <div class="card" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; ">
                <!-- Google Maps Embed -->
                <iframe style="height : 600px;" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d24389.51158908039!2d2.3271663375004814!3d48.871581419396854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skfc%20maps!5e0!3m2!1sfr!2sfr!4v1701608055402!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
         
    </div>
</div>


    </div>   
  </section>

  <!-- end food section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a><br><br>
          &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
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