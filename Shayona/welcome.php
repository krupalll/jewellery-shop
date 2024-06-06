<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Product Page</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- <base href="../Shayona-html/"> -->
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
            <span> Shayona </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="jewellery.html">Jewellery </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
              
              </ul>
            </div>
            <div class="quote_btn-container">
              <a href="">
                <img src="images/cart.png" alt="" />
                <!-- <div class="cart_number"><b id="c"></b></div> -->
                <!-- aane dropdown ma nakhvanu che ,cart vadu div-->
                <div class="cart">
                  Total items- <b id="c"></b><br /><br />
                  <ul id="hello"></ul>
                </div>
              </a>
              <form class="form-inline">
                <button class="btn my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div class="design-box">
        <img src="images/design-1.png" alt="" />
      </div>
      
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
              01
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">
              02
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">
              03
            </li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr />
                    </h2>
                    <h1>Jewellery</h1>
                    <p>
                      Lorem ipsum dolor sit amet consec tetur adipiscing elit
                      elit at felislacinia aptent taciti sociosqu ad litora
                      torquent per conubia nostra
                    </p>
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr />
                    </h2>
                    <h1>Jewellery</h1>
                    <p>
                      Lorem ipsum dolor sit amet consec tetur adipiscing elit
                      elit at felislacinia aptent taciti sociosqu ad litora
                      torquent per conubia nostra
                    </p>
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> New Collection</span>
                      <hr />
                    </h2>
                    <h1>Jewellery</h1>
                    <p>
                      Lorem ipsum dolor sit amet consec tetur adipiscing elit
                      elit at felislacinia aptent taciti sociosqu ad litora
                      torquent per conubia nostra
                    </p>
                    <div>
                      <a href="">Shop Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- item section -->

  <div class="item_section layout_padding2">
    <div class="container">
      <div class="item_container">
        <div class="box">
          <div class="price">
            <h6>Best PRICE</h6>
          </div>
          <div class="img-box">
            <img src="images/i-1.png" alt="" />
          </div>
          <div class="name">
            <h5>Bracelet</h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>Best PRICE</h6>
          </div>
          <div class="img-box">
            <img src="images/i-2.png" alt="" />
          </div>
          <div class="name">
            <h5>Ring</h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>Best PRICE</h6>
          </div>
          <div class="img-box">
            <img src="images/i-3.png" alt="" />
          </div>
          <div class="name">
            <h5>Earings</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end item section -->

  <!-- about section -->

  <section class="about_section layout_padding2-top layout_padding-bottom">
    
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>About Jewellery Shop</h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet,
              consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis
              nostrud
            </p>
            <div>
              <a href="about.html"> Read More </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- price section -->

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Our Jewellery Price</h2>
      </div>
      <div class="price_container">
        <div class="box">
          <div class="name">
            <h6>Diamond Ring</h6>
          </div>
          <div class="img-box">
            <img src="images/p-1.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>&#x20B9;<span>1000.00</span></h5>
            <!-- <a href=""onclick="add('Diamond Ring')"> Add to cart </a> -->
            <input type="button" value="Add to cart" onclick="add('Diamond Ring')">
          </div>
        </div>
        <div class="box">
          <div class="name">
            <h6>Diamond Ring</h6>
          </div>
          <div class="img-box">
            <img src="images/i-2.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>&#x20B9;<span>1000.00</span></h5>
            <!-- <a href=""onclick="add('Diamond Ring')"> Add to cart </a> -->
            <input type="button" value="Add to cart" onclick="add('Diamond Ring')">
          </div>
        </div>
        <div class="box">
          <div class="name">
            <h6>Diamond Ring</h6>
          </div>
          <div class="img-box">
            <img src="images/i-3.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>&#x20B9;<span>1000.00</span></h5>
            <!-- <a href="" onclick="add('Diamond Ring')"> Add to cart </a> -->
            <input type="button" value="Add to cart" onclick="add('Diamond Ring')">
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="jewellery.html" class="price_btn"> See More </a>
      </div>
    </div>
  </section>

  <!-- end price section -->

  <!-- ring section -->

  <section class="ring_section layout_padding">
    <div class="design-box">
      <img src="images/design-1.png" alt="" />
    </div>
    <div class="container">
      <div class="ring_container layout_padding2">
        <div class="row">
          <div class="col-md-5">
            <div class="detail-box">
              <h4>special</h4>
              <h2>Wedding Ring</h2>
              <a href="" onclick="add('Wedding Ring')"> Add to cart </a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="img-box">
              <img src="images/ring-img.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end ring section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="design-box">
      <!-- <img src="images/design-2.png" alt=""> -->
    </div>
    <div class="container">
      <div class="">
        <h2 class="">Contact Us</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex">
              <button>SEND</button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
              <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe width="770" height="510" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=indus university ahamedabd&t=&z=10&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                  <style>
                    .gmap_canvas {
                      overflow: hidden;
                      background: none !important;
                      height: 500x;
                      width: 500px;
                      margin-right: 10px;
                    }
                  </style>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section">
    <div class="container">
      <div class="info_container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <a href="">
                <img src="images/logo.png" alt="" />
                <span> Shayona </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="https://maps.app.goo.gl/mQgFoNqwnHfAY1JX7" target="_blank">
                <img src="images/location.png" alt="" />
                <span> Address </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="images/phone.png" alt="" />
                <span> +91 9723457512</span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="images/mail.png" alt="" />
                <span> Shayona@gmail.com </span>
              </a>
            </div>
          </div>
        </div>
        <div class="info_form">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">Newsletter</h5>
          </div>
          <form action="">
            <div class="email_box">
              <label for="email2">Enter Your Email</label>
              <input type="text" id="email2" />
            </div>
            <div>
              <button>subscribe</button>
            </div>
          </form>
        </div>
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">Follow Us</h5>
          </div>
          <div class="social_box">
            <a href="https://www.facebook.com/profile.php?id=100052408311176&mibextid=ZbWKwL" target="_blank">
              <img src="images/fb.png" alt="" />
            </a>
            <a href="">
              <img src="images/twitter.png" alt="" />
            </a>
            <a href="https://www.linkedin.com/in/krupal-patel-81795b238" target="_blank">
              <img src="images/linkedin.png" alt="" />
            </a>
            <a href="https://www.instagram.com/krupal_000/" target="_blank">
              <img src="images/insta.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://html.design/"> Purv and Krupal</a>
      <br />
      <b>IU2141230143</b> &nbsp; <b>IU2141230182</b>
    </p>
  </section>
  <!-- footer section -->
  <script>
    var x = 0;
      document.getElementById("c").innerHTML = x;
      if (x < 6) {
        function add(val) {
          document.getElementById("hello").innerHTML +=
            "<li>" +
            val +
            "&nbsp <input type='button' value='X' onclick='remove()'></li>";
            x++;
            document.getElementById("c").innerText = x;
          
        }
        
          
        
      }
     
      

      // removing script
      function remove() {
        let listItem = document.getElementsByTagName("li");
        for (var i = 0; i < listItem.length; i++) {
          listItem[i].onclick = function () {
            this.parentNode.removeChild(this);
          };
        }
        x = x - 1;
        document.getElementById("c").innerHTML = x;
      }
  </script>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- <script src="addtocart.js"></script> -->
</body>

</html>