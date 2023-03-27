<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Home | Vewon Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit= 0" />
    

    <!-- BOOTSTRAP OFFLINE CDN -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
       

    <!-- FONT AWESOME ONLINE CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- SLICK CAROUSEL ONLINE CDN -->
    <link rel="stylesheet" href="slick/slick.css" />
    <!-- SPLIDE SLIDER LINK -->
    <link rel="stylesheet" href="splide/dist/css/splide.min.css">
    <link rel="stylesheet" href="splide/dist/css/themes/splide-sea-green.min.css">

    <!-- animate css link -->
    <link rel="stylesheet" href="animate_css/animate.css">

    <link rel="stylesheet" href="slick/slick-theme.css" />


    <link rel="stylesheet" href="fonts/icomoon/style.css">
    
    <!-- Footer Styling CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- animate css link -->


    

    <!-- GOOGLE MATERIAL ICONS ONLINE CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"> 

    <link rel="stylesheet" href="styles/reset.min.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/header-10.css" />
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"> 


    <link rel="stylesheet" href="styles/support.css" />


    <!-- FOR TOGGLE BAR STYLING -->
    <style type="text/css">
      @media only screen and (min-width: 940px) {
        .toggle_bar {
          display: none !important; 
        } 
      }



      /************ OFFCANVAS STYLING ************/
      /* .offcanvas{
        width: 34% !important;
      } */


      @media only screen and (min-width: 940px) and (max-width: 1400px) {
        .offcanvas {
          display: none !important; 
        } 
      } 

      @media only screen and (min-width: 480px) and (max-width: 580px) {
        .offcanvas {
          width: 40% !important; 
        } 
      }


      /* Scrollbar-effect------- */
      #accordian::-webkit-scrollbar {
        width: 5px;
        height: 8px;
      }

      #accordian::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: #e4e4e4;
      }
      #accordian::-webkit-scrollbar-thumb {
        background: #0089ff;
        border-radius: 10px;
        transition: 0.5s;
      }
      #accordian::-webkit-scrollbar-thumb:hover {
        background: #d5b14c;
        transition: 0.5s;
      }
      #accordian ul li a{
        color: #222121;
        text-decoration: none;
        font-size: 15px;
        display: block;
        padding: 12px 10px;
        transition: all 0.15s;
        position: relative;
        border-radius: 3px;
      }
      
      .filter{
         filter: brightness(0.7);
      }

      /* #accordian>ul.show-dropdown>li.active>a,
      #accordian>ul>li>ul.show-dropdown>li.active>a,
      #accordian>ul>li>ul>li>ul.show-dropdown>li.active>a,
      #accordian>ul>li>ul>li>ul>li>ul.show-dropdown>li.active>a,
      #accordian>ul>li>ul>li>ul>li>ul>li>ul.show-dropdown>li.active>a{
        background-color: #a8d4fb;
        color: #0089ff;
        box-shadow: 0px 1px 2px rgba(0, 137, 255, 0.2);
      } */

      #accordian>ul>li>ul,
      #accordian>ul>li>ul>li>ul,
      #accordian>ul>li>ul>li>ul>li>ul,
      #accordian>ul>li>ul>li>ul>li>ul>li>ul {
        display: none;
      }


      #accordian>ul>li.active>ul.show-dropdown,
      #accordian>ul>li>ul>li.active>ul.show-dropdown,
      #accordian>ul>li>ul>li>ul>li.active>ul.show-dropdown,
      #accordian>ul>li>ul>li>ul>li>ul>li.active>ul.show-dropdown {
        display: block;
      }

      #accordian>ul>li>ul,
      #accordian>ul>li>ul>li>ul,
      #accordian>ul>li>ul>li>ul>li>ul,
      #accordian>ul>li>ul>li>ul>li>ul>li>ul {
        padding-left: 0px;
      }

      #accordian a:not(:only-child):after {
        content: "\f105";
        position: absolute;
        right: 20px;
        top: 14px;
        font-size: 15px;
        font-family: "Font Awesome 5 Free";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
        font-weight: 900;
        transition: 0.5s;
      }

      #accordian .active>a:not(:only-child):after {
        transform: rotate(90deg);
      }

      .font{
        font-size: 15px;
        font-family: 'Poppins', sans-serif;
        font-weight: 800;
      }
      .font-child{
        font-size: 12px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
      }
      .search-bar{
        padding: 10px; 
        outline: none;
        background: #f3f3f3;
        border: 1px solid gray;
        border-radius: 20px;
        width: 200px;
        font-size: 1rem;
        font-family: "Arial", sans-serif;
      }

      .over-lay{
        position: absolute; 
        bottom: 0; 
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5); /* Black see-through */
        color: #f1f1f1; 
        width: 100%;
        transition: .5s ease;
        /* opacity:0; */
        color: white;
        font-size: 20px;
        padding: 20px;
        text-align: center;
      }
      .bg_content_card{
        background: url(https://www.ceres.org/sites/default/files/2018-04/RenewableEnergyBanner_1.jpg);
        background-size: cover;
        background-position: center;
        margin: 4rem 0;
        background-repeat: no-repeat;
        border-radius: 5px;
        width: auto;
        height: 82vh;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
      }
       @media only screen and (max-width: 480px){
        
       .bg_content_card{
        background:none;
        background-size: cover;
        background-position: center;
        margin: 4rem 0;
        background-repeat: no-repeat;
        border-radius: 5px;
        width: auto;
        height: 82vh;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
      }
}

      .detail_card{
        width: 350px;
        height: 300px;
        background: #fff;
        margin: 0 1rem;
        border-radius: 5px;
        /* position: absolute;
        right: 5rem; */
        padding: 4.8rem 2rem;
        font-size: 1.3rem;
        text-align: center;
      }

      @media only screen and (max-width: 480px){
        .detail_card{
          background: url(https://www.ceres.org/sites/default/files/2018-04/RenewableEnergyBanner_1.jpg);
          right: 0;
          border:1px solid black;
          color:white;
        }
      }

      .big_banner{
        background-image: url(https://d10lvax23vl53t.cloudfront.net/images/Article_Images/ImageForArticle_2253_16244395316852393.jpg);
        background-position: center;
        background-size: cover;
        margin: 4rem 0;
        width: 100%;
        height: 100vh;
        filter: brightness(0.9);
        display: flex;
        justify-content: center;
        align-items: center;
        background-repeat: no-repeat;
      }

      .banner__text{
        text-align: center;
      }

      .banner__text h4{
        color: white;
        font-size: 2rem;
        font-family: 'Poppins', sans-serif;
        font-weight: 590;
        text-align: center;
      }

      .banner__text span{
        color: white;
        font-size: 1.5rem;
        font-family: 'Montserrat', sans-serif;
        font-weight: 650;
        text-align: center;
      }
        @media only screen and (min-width:1400px){
        .site-header__start {
          margin-left:-80px !important; 
        }
        }
.navbar-nav li:hover > ul.dropdown-menu {
    display: block;
}
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
    top:0;
    left:100%;
    margin-top:-6px;
}
/* rotate caret on hover */
.dropdown-menu > li > a:hover:after {
    text-decoration: underline;
    transform: rotate(-90deg);
} 
.nav__item li a{
    padding: 12px 5px;
    font-size:16px;
}
h5{
    font-size:0% !important;
    font:none !important;
}

/* Logo-4 */

.color {
   -webkit-animation:colorchange 20s infinite alternate;
}

    @-webkit-keyframes colorchange {
      0% {
        
        color: blue;
      }
      
      10% {
        
        color: #8e44ad;
      }
      
      20% {
        
        color: #1abc9c;
      }
      
      30% {
        
        color: #d35400;
      }
      
      40% {
        
        color: blue;
      }
      
      50% {
        
        color: #34495e;
      }
      
      60% {
        
        color: blue;
      }
      
      70% {
        
        color: #2980b9;
      }
      80% {
     
        color: #f1c40f;
      }
      
      90% {
     
        color: #2980b9;
      }
      
      100% {
        
        color: pink;
      }
    }
.carousel-inner 
.carousel-item img{
    height:65vh;
}
.card-section1
.carousel-inner 
.carousel-item {
    height:50vh;
}


</style>




  </head>
  <body>
    <!-- Header Start -->
<?php require 'header.php'?>

    <!-- Header End -->


    <!--*********** CAROUSEL SLIDER ***********-->
    <!-- NEEDED CAROUSEL ENDS -->
    <div id="carouselExampleCaptions" class="carousel carousel-fade slide" data-bs-touch="true" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
       
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/banner1.jpeg" loading="lazy" class="d-block w-100 filter" alt="Welcome Page Image" >
        </div>
        <div class="carousel-item">
          <img src="img/banner02.jpeg" loading="lazy" class="d-block w-100 filter" alt="Welcome Page image">
        </div>
      </div>
    </div>

      <div class="container-fluid wrapper" id="container">
          <div class="row">
            <div class="col">
              <div class="title_section text-center">
                <h4 class="font fs-2 mt-4 mb-3">Our Solutions & Service</h4>
              </div>
            </div>
          </div>

        <!--************* CARD SECTION *************-->
        <div class="row d-flex mt-3" id="mob-top">
          <div class="col-md-12">
            <div class="flexible-block d-flex">
              <div class="row d-flex">
                <div class="col">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                        <a href="solution.php"><img src="img/card_img1.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Design Engineering and Energy Systems</h4>
                        </div></a>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="solution.php"><img src="img/card_img2.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Grid automation and Remote Monitoring</h4>
                        </div></a>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="solution.php"><img src="img/card_img3.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Customized Remote Web Portal Solutions</h4>
                        </div></a>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="solution.php"><img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Co-ordination Studies</h4>
                        </div></a>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="service.php"><img src="img/card_img4.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Installation, Testing and Commissioning</h4>
                        </div></a>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="service.php"><img src="img/card_img5.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Operation & Maintenance Contract Services</h4>
                        </div></a>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="service.php"><img src="img/card_img6.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Spare Parts Supply</h4>
                        </div></a>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                      <div class="card mb-3 hover">
                      <a href="service.php"><img src="img/card_img7.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Electro - Mechanical Services</h4>
                        </div></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--************* CARD SECTION END*************-->

             </div> 
           </div>
            <!-- ************* PRODUCT CAROUSEL *************  -->
          </div>
      <div class="container-fluid wrapper" id="container">
            <div class="row">
              <div class="col">
                <div class="title_section text-center">
                  <h4 class="font fs-2 mt-4 mb-3">Our Best Products</h4>
                </div>
              </div>
            </div>




             <!--************* CARD SECTION *************-->
        <div class="row d-flex mt-3" id="mob-top">
          <div class="col-md-12">
            <div class="flexible-block d-flex">
              <div class="row d-flex">
                <div class="col">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                        <a href="grid_automation_menu.php"><img src="img/transformer.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Transformer</h4>
                        </div></a>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                      <a href="small_business_menu.php"><img src="img/switch_gear.png" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Switch Gear</h4>
                        </div></a>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                      <a href="med_low_voltage_products_menu.php"><img src="img/Control-Relay-Panel.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Control & Relay Panels</h4>
                        </div></a>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                      <a href="renewable_storage_energy_menu.php"><img src="img/solar_panel.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Solar Panels</h4>
                        </div></a>
                         </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                      <a href="med_low_voltage_products_menu.php"><img src="img/elec_product.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Electronic Product</h4>
                        </div></a>
                      </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <div class="card mb-3 hover">
                      <a href="industrial_automation_menu.php"><img src="img/motor_starter.jpg" loading="lazy" class="card-img-top" alt="Image" style="position: relative;">
                        <div class="over-lay">
                          <h4 class="font">Motor Starter</h4>
                        </div></a>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
            <!--************* CARD SECTION END*************-->


</div>
           
           </div>
           </div>
        <!-- CARD SECTION 2 ENDS -->
              <div class="container-fluid wrapper" id="container">
       <div class="card-section1">
            <div class="row">
                <div class="col-md">
                    <div class="card mt-4 mb-3">
                        <div class="card-body">
                            <ul class="d-flex">
                                <li class="row no-gutters list-row">
                                    <div class="col-md-8 image-card-section">
                                        <div class="card-image">
    <div id="carouselExampleCaptions" class="carousel carousel-fade slide" data-bs-touch="true" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/banner1.jpeg" loading="lazy" class="d-block w-100 filter" alt="Welcome Page Image" >
        </div>
        <div class="carousel-item">
          <img src="img/banner02.jpeg" loading="lazy" class="d-block w-100 filter" alt="Welcome Page image">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
                                        </div>
                                    </div>


                                    <div class="col-md-4 card-text-section">
                                        <div class="">
                                            <h3>Card Title</h3>
                                        </div>

                                        <div class="card-textline-section">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus suscipit recusandae sed velit id alias dolores molestias libero! Expedita beatae tempora qui eaque ipsam laboriosam quibusdam, voluptate sapiente ducimus laborum.</p>
                                        </div>

                                        <div class="card-link-section">
                                            <a href="#">Start Here <i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
         





         
          
          
          
          <!-- WHATSAPP FLOATING SECTION -->
          <div class="whatsapp-section">
            <a href="https://wa.me/9880865733" class="whatsapp_float ripple" target="_blank"> <i class="fab fa-whatsapp whatsapp-icon"></i></a>
          </div>
        </div>
      </div>




<!-- ************* FOOTER  *************  -->
<footer class="footer-48201">
      
  <div class="container-fluid wrapper">
    <div class="row">
      <div class="col-md-4 pr-md-5">
          <a class="footer-site-logo d-block mb-4"><img src="img/rdegi.jpg" alt="Vewon Group Logo" width="200"></a>
          <p class="footer-text">Rdegi is a fastly growing IT company. We offer technology based solutions to clients.</p><br>
          <p class="footer-text"><b>Email:</b> info@rdegi.com</p>
          <p class="footer-text"><b>Phone:</b> +91 7845298544</p><br>
        <ul class="social list-unstyled">
          <li><a href="#"><span class="icon-facebook"></span></a></li>
          <li><a href="#"><span class="icon-twitter"></span></a></li>
          <li><a href="#"><span class="icon-linkedin"></span></a></li>
          <li><a href="#"><span class="icon-instagram"></span></a></li>
          <li><a href="#"><span class="icon-youtube-play"></span></a></li>
        </ul>
      </div>
       <div class="col-md mobile-top">
        <ul class="list-unstyled nav-links">
        <li><p class="title">HOME</p></li>
        <li><a class="dropdown-item" href="https://vewon.staging-rdegi.com/index716.php">Home</a></li>
        <li><a class="dropdown-item" href="https://vewon.staging-rdegi.com/our_solution.php">Our Product and Services</a></li>
        <li><a class="dropdown-item" href="https://vewon.staging-rdegi.com/support.php">Tech Support</a></li>
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
            <li><p class="title">Customer Services</p></li>
            <li><a class="dropdown-item" href="https://store.rdegi.com/product-category/auto-mobiles/" target="_blank">Online Sales - Automobiles</a></li>
            <li><a class="dropdown-item" href="https://store.rdegi.com/product-category/manufacturer/" target="_blank">Online Sales -Parts</a></li>
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
          <li><p class="title">Employee Services</p></li>
          <li><a href="https://optimaheat.rdegi.com/" target="_blank">Project Task Management</a></li>
          <li><a href="https://store.rdegi.com/" target="_blank">Accounting Management</a></li>
          <li><a href="https://smartdeal.staging-rdegi.com/" target="_blank">Inventory Management</a></li>
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
          <li><p class="title">HELPFUL LINKS</p></li>
          <li><a href="support.php">Tech Support</a></li>
          <li><a href="about_us.php">About Us</a></li>
          <!--<li><a href="#">Links 3</a></li>-->
          <!--<li><a href="#">Links 4</a></li>-->
          <!--<li><a href="#">Links 5</a></li>-->
        </ul>
      </div>
    </div> 

    <hr class="mt-4">

    <div class="row">
      <div class="col-12 text-center">
        <div class="copyright mt-3">
          <p><small>&copy; 2021 All Rights Reserved. Powered by Rdegi.</small></p>
        </div>
      </div>
    </div> 
  </div>
  
</footer>




   
    <!-- BOOTSTRAP OFFLINE CDN -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- SLCK CAROUSEL SLIDER ONLINE CDN -->
    <script src="bootstrap/js/jquery.min.js"></script>

    <script src="slick/slick.js"></script>


    <!-- SPLIDE SCRIPT -->
    <script src="splide/dist/js/splide.min.js"></script>


    <script src="js/header-10.js"></script>


    <script>
      // SLICK SLIDER SCRIPT
      $('.responsive').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    </script>
    
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>

     
    <!-- SPLIDE SLIDER SCRIPT -->
    <script>
      new Splide( '#splide', {
        type   : 'slider',
        perPage: 3,
        perMove: 1,
        breakpoints: {
          480: {
            perPage: 1,
          },
          640: {
            perPage: 2,
          },
          1400: {
            perPage: 3,
          },
        }
      } ).mount();
      </script>



      <script>
        // -------multilevel-accordian-menu---------
      $(document).ready(function() {
        $("#accordian a").click(function() {
          var link = $(this);
          var closest_ul = link.closest("ul");
          var parallel_active_links = closest_ul.find(".active")
          var closest_li = link.closest("li");
          var link_status = closest_li.hasClass("active");
          var count = 0;

          closest_ul.find("ul").slideUp(function() {
            if (++count == closest_ul.find("ul").length){
              parallel_active_links.removeClass("active");
              parallel_active_links.children("ul").removeClass("show-dropdown");
              link.not().children("ul").removeClass(".active");
            }
          });

          if (!link_status) {
              closest_li.children("ul").slideDown().addClass("show-dropdown");
              closest_li.addClass("active");
          }	

        })
      });






      // --------for-active-class-on-other-page-----------
    //jQuery(document).ready(function($){
        // Get current path and find target link

        //var path = window.location.pathname.split("/").pop();
      
        // Account for home page with empty path
        
        /*if ( path == '' ) {
          path = 'index.html';
        }*/
        
        //var target = $('#accordian li a[href="'+path+'"]');

        // Add active class to target link

        /*target.parents("li").addClass('active');
        target.parents("ul").addClass("show-dropdown");*/
    //});

      </script>





    

  </body>
</html>