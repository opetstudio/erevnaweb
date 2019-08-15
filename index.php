<?php
  require_once("dbconfig.php");
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Erevna Raya Teknologi</title>
  <meta name="description" content="Erevna Raya Teknologi">
  <meta name="keywords" content="Erevna Raya Teknologi ">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

  <div class="loader"></div>
  <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
               <img height="40" src="assets/img/Company Logo Shioullete White.png">
          	  </a>
            
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#main-header">Home</a></li>
                  <li class=""><a href="#feature">About</a></li>
                  <li class=""><a href="#service">Services</a></li>
                  <li class=""><a href="#portfolio">Portfolio</a></li>
                  <li class=""><a href="#contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="banner-info text-left wow fadeIn delay-05s">
              <div class="col-md-12 text-left">
                <h1 class="bnr-title"><br></h1>
                <h2 class="bnr-sub-title">PT. Erevna Raya Teknologi</h2>
                <p class="bnr-para">We centralized ads from thousands of websites that classified to many vertical in just one search.<br>We help our clients and partners by generating more traffic to their websites.</p>
              </div>
                <div class="brn-btn">
                  <a href="#" class="btn btn-more">More About Us</a>
                </div>
                <div class="text-center overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <div class="container ">
        <section id="feature" class="section-padding wow fadeIn delay-05s">
        <div class="row ">
        <div class="col-md-12 text-left">
            <h2 class="service-title pad-bt15">ABOUT US</h2>
            <div class="col-md-12 text-center">
            <?php
              $sql = 'SELECT *FROM content_web WHERE no=1 ';
		          $query = mysqli_query($dbconnect, $sql);
              $row = mysqli_fetch_array($query);
              echo $row['content_value'] . '</br/>';
              ?>            
              <hr class="bottom-line"> 
          <br>  
          </div>
          </div>
          <div class="row visimisi-data">
					<div class="wow fadeInUp col-sm-6">
						<div class="visimisi-content">
            <div class="col-md-12 text-center">
            <div class="item-img">
                <img src="assets/img/setiabudi-1.jpg" class="img-responsive">
              </div>
            </div>
          </div>
          </div>
					<div class="wow fadeInUp col-sm-6">
						<div class="visimisi-content">
            <div class="col-md-12 text-center">
              <div class="col-md-12 text-left">

              <!-- 
                <p class="sub-title pad-bt15"><span>PT. EREVNA RAYA TEKNOLOGI</span> we build smart payment method through comprehensive research, careful consideration together with the growth of digital era to make payment process even more efficient. With a development specialist team & experienced leader in banking, we consistently strive to be at the forefront of payment gateway technology.</p><br>
                <p class="sub-title pad-bt15"><span>Our company started with only 10 (ten) personel, currently, after years of experience, we are supported by more then 500 consultants and developers.</p>
              -->        
              <?php
              $sql = 'SELECT *FROM content_web WHERE no=2';
		          $query = mysqli_query($dbconnect, $sql);
              $row = mysqli_fetch_array($query);
              echo $row['content_value'] . '</br/>';
              ?>

            </div>
            </div>
          </div>
          </div>
				</div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <section id="service" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left">
            <h2 class="service-title pad-bt15">SERVICE & PRODUCT</h2>
            <hr class="bottom-line">
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>I T</span> Professional Services</h3>
              <p>We help you transform your business to enhance performance, effectiveness, efficiency and resilience. Together, we create a true competitive advantage based on the latest technologies to build the solution tailored specifically to your needs.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>I T</span>Custom Development</h3>
              <p>We understand that your company needs a cutting edge, efficient and easy to use solution that has a hight adoption rate, so our consultants can help you achieve your business goals with a custom developed solution.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>A</span>pplication Development</h3>
              <p>Play with Technology. Our mobile solutions are centered around the user. </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>P</span>ayment Gateway</h3>
              <p>Erevna Raya Teknologi offers various payment solution to facilitate your business needs. Whatever you need for financial technology, we will help you to actualize it.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <!---->
    <!---->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left">
            <h2 class="service-title pad-bt15">Our Recent Works</h2>
            <p class="sub-title pad-bt15"> </p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img src="assets/img/rayapay.png" class="img-responsive">
              <figcaption>
                <h2>Rayapay</h2>
                <p>A convenience for customers in the e-commerce payment process where many partners are incorporated in Rayapay, and are able to distribute the settlement process to the Bank or related E-Wallet according to the merchant's request.</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <a href="https://www.rayaku.id/">
                <img src="assets/img/rayaku.png" class="img-responsive">
                <figcaption>
                  <h2>Rayaku — A Brand New Messaging Application</h2>
                  <p>Rayaku is a communication app that allows you to connect with contacts around the world. You can easily message family, friends, and colleagues using Rayaku. Rayaku is available for Android and other devices.</p>
                </figcaption>
                </a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img src="assets/img/rayasem.png" class="img-responsive">
              <figcaption>
                <h2>Rayasem</h2>
                <p>A visionary search engine for classified ads. Find listings that you need among thousands from numerous classified portals, here in Rayasem.</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <!---->
    <!--<section id="blog" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left">
            <h2 class="service-title pad-bt15">Latest from our blog</h2>
            <p class="sub-title pad-bt15"> </p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="assets/img/blog01.jpg" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>This is Lorem ipsum heading.</h2>
                <div class="blog-comment">
                  <p>Posted In: <span>Legal Advice</span></p>
                  <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a> 15</span>
                    <span><a href="#"><i class="fa fa-eye"></i></a> 11</span></p>
                </div>
                <p>We cannot expect people to have respect for laws and orders until we teach respect to those we have entrusted to enforce those laws all the time. we always want to help people cordially.</p>
                <a href="" class="read-more">Read more →</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="assets/img/blog02.jpg" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>This is Lorem ipsum heading.</h2>
                <div class="blog-comment">
                  <p>Posted In: <span>Legal Advice</span></p>
                  <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a> 15</span>
                    <span><a href="#"><i class="fa fa-eye"></i></a> 11</span></p>
                </div>
                <p>We cannot expect people to have respect for laws and orders until we teach respect to those we have entrusted to enforce those laws all the time. we always want to help people cordially.</p>
                <a href="" class="read-more">Read more →</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="blog-sec">
              <div class="blog-img">
                <a href="">
                  <img src="assets/img/blog03.jpg" class="img-responsive">
                </a>
              </div>
              <div class="blog-info">
                <h2>This is Lorem ipsum heading.</h2>
                <div class="blog-comment">
                  <p>Posted In: <span>Legal Advice</span></p>
                  <p>
                    <span><a href="#"><i class="fa fa-comments"></i></a> 15</span>
                    <span><a href="#"><i class="fa fa-eye"></i></a> 11</span></p>
                </div>
                <p>We cannot expect people to have respect for laws and orders until we teach respect to those we have entrusted to enforce those laws all the time. we always want to help people cordially.</p>
                <a href="" class="read-more">Read more →</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!---->
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title pad-bt15">Keep in touch with us</h2>
            <p class="sub-title pad-bt15"> </p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="loction-info white">
              <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Atrium Setiabudi Level 6, Kav.62 Jalan HR. Rasuna Said <br>Daerah Khusus Ibukota Jakarta 12920</p>

              <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@erevnaraya.co.id</p>
              <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+62 853-4380-5673</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="insert.php" method="post" role="form" class="contactForm">
                <div class="col-md-6 padding-right-zero">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-submit">SEND NOW</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy; 2019 PT. Erevna Raya Teknologi. All Rights Reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Baker
            -->
          </div>
        </div>
      </div>
    </footer>
    <!---->
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/jquery.bxslider.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/contactform/contactform.js"></script>

</body>
</html>
