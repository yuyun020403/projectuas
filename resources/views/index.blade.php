<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Icecreamm</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/eskrim1.png" rel="icon">
    
    <!-- Google font -->
    <link href="https://fonts.cdnfonts.com/css/kids-donuts" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/dacherry" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    
    <!-- animasi -->
    <link rel="stylesheet" type="text/css" href="animate.css">

    <!-- coba uas css-->
    <link rel="stylesheet" href="../css/uas.css">
</head>

<body>
  
     <header>
        <div class="title-logo">
            <a href="/"><span style=" font-family: 'Kids Donuts', sans-serif;                                               
                color: #78C1F3;" >ICEE CREAMM</a>                                                               
          <div class="hamburger-nav-button">
            <button>
              <img src="img/hamburger-icon.svg" alt="Icon Hamburger" />
            </button>
          </div>
        </div>
        <nav>
          <ul>
            <li>
              <a href="#home" class="nav-active" >
                Home
              </a>
            </li>
            <li>
              <a href="#icecream" > Ice Cream </a>
            </li>
            <li>
              <a href="#history" > History </a>
            </li>
            <li>
              <a href="#buy" > Buy </a>
            </li>
            <li>
                <a href="#team" > Our Team </a>
            </li>

            @if (auth()->check() && auth()->user()->role != 'pelanggan')

            <li>
                <a href="{{ url('/toko/admin') }}" > Admin </a>
            </li>

            @endif
          </ul>
        </nav>
        <div class="button-search">
          <input type="text" placeholder="Search " />
          <button type="submit">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-search"
              viewBox="0 0 16 16"
            >
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
              ></path>
            </svg>
          </button>
        </div>

        <a class="" href="/">
            Back
        </a>

        <div class="list-menu-hamburger">
          <nav>
            <ul>
              <li>
                <a href="#home" class="nav-active" onclick="setActiveMenu()" >
                  Home
                </a>
              </li>
              <li>
                <a href="#icecream" onclick="setActiveMenu()" > Ice Cream </a>
              </li>
              <li>
                <a href="#history" onclick="setActiveMenu()"> History </a>
              </li>
              <li>
                <a href="#buy" onclick="setActiveMenu()"> Buy </a>
              </li>
              <li>
                <a href="#about" onclick="setActiveMenu()"> About </a>
              </li>
              <li>
                <a href="#team" onclick="setActiveMenu()"> Team </a>
              </li>
            </ul>
          </nav>
        </div>
      </header>
           <div id="home">
              <img src="../img/READY!..jpg" height="100%" width="100%" alt="">
            </div>
 <div >
        <div id="icecream">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" >
                 &nbsp; &nbsp;
       <div class="row">
        <div class="col-3">
            <img src="../img/coklat.png" alt="" width="100%" height="100%">
        </div>
        <div class="col-3">
            <img src="../img/vanila.png" alt="" width="100%" height="100%">
        </div>
        <div class="col-3">
            <img src="../img/mango.png" alt="" width="100%" height="100%">
        </div>
        <div class="col-3">
            <img src="../img/strawberry.png" alt="" width="100%" height="100%">
        </div>
       </div>
       <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
         &nbsp; &nbsp;
       <div class="row">
        <div class="col-3">
            <img src="../img/double.png" alt="" width="100%" height="100%">
        </div>
        <div class="col-3">
            <img src="../img/coklat.png" alt="" width="100%" height="100%">
        </div>
        <div class="col-3">
            <img src="../img/fruit.png" alt="" width="100%" height="100%">
        </div>
        <div class="col-3">
            <img src="../img/peanut.png" alt="" width="100%" height="100%">
        </div>
       </div>
       </div>
       <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
        &nbsp; &nbsp;
      <div class="row">
       <div class="col-3">
           <img src="../img/sunny.png" alt="" width="100%" height="100%">
       </div>
       <div class="col-3">
           <img src="../img/Less Sugar !.png" alt="" width="100%" height="100%">
       </div>
       <div class="col-3">
           <img src="../img/sweet.png" alt="" width="100%" height="100%">
       </div>
       <div class="col-3">
           <img src="../img/fruitt.png" alt="" width="100%" height="100%">
       </div>
      </div>
      </div>
    <div class="container-xxl py-5" id="history">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="animated infinite bounce" src="../img/eskrim1.png">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-5 mb-4" style="color: #FF9B9B;">History of Ice Cream</h1>
                    <p class="mb-4">There is an opinion which reveals that ice cream was discovered by the Chinese around 700 AD. 
                        This delicious sweet food was served cold and served as an offering by the Tang Emperor and from the Shang Dynasty.
                         The Tang Emperor was a culinary enthusiast.
                         The Chinese are said to have used to make holes to preserve ice to be enjoyed as a refreshing drink during the summer. 
                         This was conveyed by Luciana Polliotti, ice cream historian and head of the Gelato Museum in Bologna, Italy.
                    </p>
                </div>
            </div>
        </div>
    </div>
     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-5 mb-4" style="color: #FF9B9B;">Ice Cream Texture</h1>
                    <p class="mb-4">The initial texture of ice cream is not solid
                        Mentioning ice cream, many people imagine the texture is solid and completely frozen. Like ice cream bars in minimarkets to typical Italian gelato, which are relatively expensive nowadays. 
                        But the initial texture of ice cream when it was first created was not like that. The texture is even more watery and similar to drinkable shaved ice.
                         "Initially ice cream was just a frozen and refreshing drink to enjoy, especially in the hot summer months,".
                    </p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="animated infinite bounce" src="../img/eskrim2.png">
                </div>
            </div>
           
        </div>
    </div>
    <div class="container-xxl py-5" style="background-image: url(img/background.jpg);" id="buy">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; ">
                <h1 class="display-5 mb-5" style="color: #A76F6F;">We provide various flavors according to your favorite ice cream</h1>
                
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-item  pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="../img/coklat.png" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-dark"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Chocolate </h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="../img/fruit.png" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-dark"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0"> Fruit</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="../img/greentea.png" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-dark"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Greentea</h4>
                    </div>
                </div>
                <div class="project-item pe-5 pb-5">
                    <div class="project-img mb-3">
                        <img class="img-fluid rounded" src="../img/peanut.png" alt="">
                        <a href=""><i class="fa fa-link fa-3x text-dark"></i></a>
                    </div>
                    <div class="project-title">
                        <h4 class="mb-0">Peanut</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl feature py-5" style="background-image: url(img/background2.jpg);" id="about">
        <div class="container">
            <div class="row g-5 align-items-center" >
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded  fw-semi-bold py-1 px-3 " style="color: #AAC8A7;">About Us</p>
                    <h1 class="display-5 mb-4" style="color: #78C1F3;">we provide the best quality ice cream with a good process</h1>
                    <p class="mb-4">we are people who are happy to provide the best for all ice cream fans in the world,
                         with an extraordinary team and permit support that makes us even more confident in making our ice cream quality unquestionable,
                          from ingredients to packaging and also marketing.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x  mb-3" style="color: #AAC8A7;"></i>
                                        <h4 class="mb-3">Marketing</h4>
                                        <p class="mb-3">It has been sold to various regions to
                                             various countries with undoubted quality.</p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x  mb-3" style="color: #AAC8A7;"></i>
                                        <h4 class="mb-3">Manufacture permit</h4>
                                        <p class="mb-3">Obtain permits from various places as one of the supports for marketing and as a condition for the continuity of the manufacturing
                                             process for each of our products and for creating new innovations in our products.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn " data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x  mb-3" style="color: #AAC8A7;"></i>
                                <h4 class="mb-3">Guaranteed cleanliness</h4>
                                <p class="mb-3">Always with guaranteed health quality by having our own nutritionist specifically for our products by 
                                    checking from the time of manufacture to packaging to prevent unwanted things from happening.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
    <div class="container-xxl py-5" id="team">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-5" style="color: #AAC8A7;">Let's see our great Team!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-dark"></i>
                        </div>
                        If life is hard, let's make it light 🥊
                    </div>
                    <img class="rounded-circle mb-3" src="../img/lulu.jpg" alt="">
                    <h4>Lulu Aprilia</h4>
                    <span>Back End</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-dark"></i>
                        </div>
                        Just Pray to Allah 🤲✨ 

                    </div>
                    <img class="rounded-circle mb-3" src="../img/paiz.jpg" alt="">
                    <h4>Kemas.M.Fayiz</h4>
                    <span>Database</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-dark"></i>
                        </div>
                        live like larry!🤘
                    </div>
                    <img class="rounded-circle mb-3" src="../img/yuyun.jpg" alt="">
                    <h4>Yuyun Trisma</h4>
                    <span>Front End</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-dark"></i>
                        </div>
                        Can we relax for a bit 🤙
                    </div>
                    <img class="rounded-circle mb-3" src="../img/faris.jpg" alt="">
                    <h4>M.Faris</h4>
                    <span>Back End</span>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                        <div class="btn-square bg-white border rounded-circle">
                            <i class="fa fa-quote-right fa-2x text-dark"></i>
                        </div>
                        Just run first 🏃
                    </div>
                    <img class="rounded-circle mb-3" src="../img/selfy.jpg" alt="">
                    <h4>Selfy Amelia</h4>
                    <span>Back End</span>
                </div>
            </div>
        </div>
    </div>
    <audio controls >
        <source src="../music/mixue.mp3" type="audio/ogg">
        Your browser does not support the audio element.
      </audio>
      <img src="../img/mixue.png" width="400px" height="400px" alt="" class="animated infinite tada">
      <div class="container-fluid text-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s" style="background-image: url(img/background3.jpg);">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-dark mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Three street, Jakarta, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>086723456619</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>uwow@Icecreamm.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-dark rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-dark rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-dark rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-dark rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">eskrimkrim</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">kangeskrim</a> Distributed By <a
                    href="https://themewagon.com">LIKLIM</a>
                </div>
            </div>
        </div>
    </div>
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="lib/wow/wow.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/counterup/counterup.min.js"></script>
 
     <!-- Template Javascript -->
     <script src="../js/main.js"></script>
</body>
</html>