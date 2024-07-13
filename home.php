<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
    <style>
    body {
      background-color: #393939;
    }
  </style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SCHEME NAVIGATOR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</HEAD>
<BODY>
	 <!-- ======= Header ======= -->
     <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="emblem.jpeg" alt=""><a href="index.html">Scheme Navigator</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <div class="search-form">
        <form action="/search" method="post">
          <input type="text" name="q" class="search-input" placeholder="Search here..." />
          <input type="submit" value="Search" class="search-submit" />
        </form>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">List Of Scheme</a></li>
          <li><a href="Filters.html"><button style="border-radius: 20px;background-color: #fafcfd;border-color: #fafcfd;">Filters</button></a></li>
          

        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/s5.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Scheme Navigator
              </span></h2>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s2.png)">
          <div class="carousel-container">
            <div class="container">
              <!-- <h2 class="animate__animated animate__fadeInDown"><img src="s1." alt=""></h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> -->
              <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/s3.png)">
          <div class="carousel-container">
            <div class="container">
              <!-- <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> -->
              <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <img src="wo.jpeg" alt="">
              <h4 class="title"><a href="Home Scheme.html">Women schemes</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <img src="edu.jpeg" alt="">
              <h4 class="title"><a href="Education Scheme.html">Education Scheme</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class=""></i></div>
              <img src="far.jpeg" alt="">
              <h4 class="title"><a href="Kishan Scheme.html">Farmer Scheme</a></h4>
              <p class="description"></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Schemes</h2>
         
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="allsch.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>All Government  Scheme</h3>
            <p class="fst-italic">
              There are a lot goverment schemes available for different criteria such as a annual income, some for farmers some for widow females and senior citizens, different types of schemes are applicable to various people. 
Curruntly it is hard to find the scheme that we are applicable to and sometimes ppl are not even aware about existing of the scheme. With this application we make people aware and the app suggest them the schemes that they are applicable to.
            </p>
           
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item">
            <li><style>
              .attractive-button {
                background-color: #393939;
                color: #fff;
                font-size: 16px;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                transition: background-color 0.3s ease;
              }
            
              .attractive-button:hover {
                background-color: #39ccf9;
              }
            
              .gradient-button {
                background-image: linear-gradient(#3aaffc, #34a7ff);
              }
            
              .animated-button {
                animation: pulse 1s infinite;
              }
            
              @keyframes pulse {
                0% {
                  transform: scale(1);
                }
                50% {
                  transform: scale(1.1);
                }
                100% {
                  transform: scale(1);
                }
              }
            </style> 
            
            <a href="Home Scheme.html"><button class="attractive-button animated-button">Women Schemes</button></a></li>
            
          </div>

          <div class="col-lg-4 col-md-6 content-item">
        
            <style>
              .attractive-button {
                background-color: #393939;
                color: #fff;
                font-size: 16px;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                transition: background-color 0.3s ease;
              }
            
              .attractive-button:hover {
                background-color: #39ccf9;
              }
            
              .gradient-button {
                background-image: linear-gradient(#3aaffc, #34a7ff);
              }
            
              .animated-button {
                animation: pulse 1s infinite;
              }
            
              @keyframes pulse {
                0% {
                  transform: scale(1);
                }
                50% {
                  transform: scale(1.1);
                }
                100% {
                  transform: scale(1);
                }
              }
            </style> 
            
            <a href="Hospital Scheme.html"><button class="attractive-button animated-button">Hospital Scheme</button></a></li>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            
            <style>
              .attractive-button {
                background-color: #393939;
                color: #fff;
                font-size: 16px;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                transition: background-color 0.3s ease;
              }
            
              .attractive-button:hover {
                background-color: #39ccf9;
              }
            
              .gradient-button {
                background-image: linear-gradient(#3aaffc, #34a7ff);
              }
            
              .animated-button {
                animation: pulse 1s infinite;
              }
            
              @keyframes pulse {
                0% {
                  transform: scale(1);
                }
                50% {
                  transform: scale(1.1);
                }
                100% {
                  transform: scale(1);
                }
              }
            </style> 
            
            <a href="Food Scheme.html"><button class="attractive-button animated-button">Food Scheme</button></a></li>
          </div>

        
        </div>

      </div>
    </section><!-- End Why Us Section -->

  
    <section id="services" class="services">
      <div class="container">

       

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
             <img src="National-Social-Assistance-Programme.jpg" alt="National-Social-Assistance-Programme">
              <h4><a href="https://nsap.nic.in//"> National Social Assistance scheme</a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
             <img src="s2.png" alt="s2.png">
                 <style>
                   /* Define the style for the link */
                   a {
                    color: rgb(22, 22, 22); /* Change this value to the desired color */
                     }
                  </style>
               <h4><a href="https://wcd.nic.in/bbbp-schemes//" > BBPD yojana </a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <img src="s3.png" alt="">
              <style>
                /* Define the style for the link */
                a {
                 color: rgb(22, 22, 22); /* Change this value to the desired color */
                  }
               </style>
              <h4><a href="https://pmkisan.gov.in//">PM Kisan yojana</a></h4>
              <p></p>
            </div>
          </div>

     
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>List of Important Schemes of Indian Government 2023 </h3>
            <p>Important Schemes of Indian Government: Complete details of All Schemes of Indian Government. Check List of Important Schemes of Indian Government</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://www.studyiq.com/articles/schemes-of-indian-government/">See More</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
        
         
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="jandhan.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Jan dhan yojna</h3>
            <p class="fst-italic">
              Pradhan Mantri Jan Dhan Yojana is a financial inclusion program of the Government of India open to Indian citizens, that aims to expand affordable access to financial services such as bank accounts, remittances, credit, insurance and pensions. 
                        </p>
            <div class="col-lg-3 cta-btn-container text-center">
              <style>
                .attractive-button {
                  background-color: #393939;
                  color: #fff;
                  font-size: 16px;
                  padding: 10px 20px;
                  border: none;
                  border-radius: 5px;
                  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                  transition: background-color 0.3s ease;
                }
              
                .attractive-button:hover {
                  background-color: #39ccf9;
                }
              
                .gradient-button {
                  background-image: linear-gradient(#3aaffc, #34a7ff);
                }
              
                .animated-button {
                  animation: pulse 1s infinite;
                }
              
                @keyframes pulse {
                  0% {
                    transform: scale(1);
                  }
                  50% {
                    transform: scale(1.1);
                  }
                  100% {
                    transform: scale(1);
                  }
                }
              </style> 
              
              <a class="cta-btn align-middle" href="https://pmjdy.gov.in//"><button class="attractive-button animated-button">Apply</button></a>
            </div>
          </div>
        </div>

      </div>
    </section>


    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
     
         
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="samarth.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Samarth Scheme</h3>
            <p class="fst-italic">
              Samarth (Scheme For Capacity Building In Textile Sector) is a flagship skill development scheme approved in continuation to the Integrated Skill Development Scheme for 12th FYP, Cabinet Committee of Economic Affairs.            </p>
            <div class="col-lg-3 cta-btn-container text-center">
              <style>
                .attractive-button {
                  background-color: #393939;
                  color: #fff;
                  font-size: 16px;
                  padding: 10px 20px;
                  border: none;
                  border-radius: 5px;
                  box-shadow: 0 2px 4px rgba(255, 253, 253, 0.2);
                  transition: background-color 0.3s ease;
                }
              
                .attractive-button:hover {
                  background-color: #39ccf9;
                }
              
                .gradient-button {
                  background-image: linear-gradient(#3aaffc, #34a7ff);
                }
              
                .animated-button {
                  animation: pulse 1s infinite;
                }
              
                @keyframes pulse {
                  0% {
                    transform: scale(1);
                  }
                  50% {
                    transform: scale(1.1);
                  }
                  100% {
                    transform: scale(1);
                  }
                }
              </style> 
              
              <a class="cta-btn align-middle" href="https://samarth-textiles.gov.in/"><button class="attractive-button animated-button">Apply</button></a>
            </div>
          </div>
        </div>

      </div>
    </section>



    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
     
         
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="CLSSAWAS.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>CLSS AWAS PORTAL</h3>
            <p class="fst-italic">
            CLSS (Credit Linked Subsidy Scheme) A Central Sector Scheme Interest subvention on home loans taken by eligible urban poor (EWS/LIG) for acquisition, construction or enhancement of house
             For the first time, Middle Income Group (MIG) has been included for a housing scheme in the country.</p>
            <div class="col-lg-3 cta-btn-container text-center">
              <style>
                .attractive-button {
                  background-color: #393939;
                  color: #fff;
                  font-size: 16px;
                  padding: 10px 20px;
                  border: none;
                  border-radius: 5px;
                  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                  transition: background-color 0.3s ease;
                }
              
                .attractive-button:hover {
                  background-color: #39ccf9;
                }
              
                .gradient-button {
                  background-image: linear-gradient(#3aaffc, #34a7ff);
                }
              
                .animated-button {
                  animation: pulse 1s infinite;
                }
              
                @keyframes pulse {
                  0% {
                    transform: scale(1);
                  }
                  50% {
                    transform: scale(1.1);
                  }
                  100% {
                    transform: scale(1);
                  }
                }
              </style> 
              
              <a class="cta-btn align-middle" href="https://pmay-urban.gov.in/clss"><button class="attractive-button animated-button">Apply</button></a>
            </div>
          </div>
        </div>

      </div>
    </section>



    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
    
         
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="pradhan.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3> Pradhan Mantri Jeevan Jyoti Bima Yojana</h3>
            <p class="fst-italic">
              Pradhan Mantri Jeevan Jyoti Bima Yojana is a Government-backed Life insurance scheme in India. It was originally mentioned in the year 2015 Budget speech by the then-Finance Minister, late Arun Jaitley in February 2015. It was formally launched by Prime Minister Narendra Modi on 9 May in Kolkata.            </p>
           
            <div class="col-lg-3 cta-btn-container text-center">
              <style>
                .attractive-button {
                  background-color: #393939;
                  color: #fff;
                  font-size: 16px;
                  padding: 10px 20px;
                  border: none;
                  border-radius: 5px;
                  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                  transition: background-color 0.3s ease;
                }
              
                .attractive-button:hover {
                  background-color: #39ccf9;
                }
              
                .gradient-button {
                  background-image: linear-gradient(#3aaffc, #34a7ff);
                }
              
                .animated-button {
                  animation: pulse 1s infinite;
                }
              
                @keyframes pulse {
                  0% {
                    transform: scale(1);
                  }
                  50% {
                    transform: scale(1.1);
                  }
                  100% {
                    transform: scale(1);
                  }
                }
              </style> 
              
              <a class="cta-btn align-middle" href="https://www.studyiq.com/articles/schemes-of-indian-government/"><button class="attractive-button animated-button">Apply</button></a>
            </div>
          </div>
        </div>

      </div>
    </section>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Scheme Navigator</h3>
    
      <div class="copyright">
        &copy; <strong><span>Scheme Navigator</span></strong>. 
      </div>
    
      
    </div>
  </footer><!-- End Footer -->

</body>
</BODY>
</HTML>
