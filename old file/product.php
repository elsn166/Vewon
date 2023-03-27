<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit= 0" />
    <title>Products | Vewon Group</title>

    <!-- BOOTSTRAP OFFLINE CDN -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       
    <!-- FONT AWESOME ONLINE CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- SLICK CAROUSEL ONLINE CDN -->
    <link rel="stylesheet" href="slick/slick.css" />


    <link rel="stylesheet" href="slick/slick-theme.css" />


    <!-- FOOTER STYLING -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/style.css">

    
    <!-- GOOGLE MATERIAL ICONS ONLINE CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"> 

    <link rel="stylesheet" href="styles/reset.min.css" />
    <link rel="stylesheet" href="styles/product_style.css" />
    <link rel="stylesheet" href="styles/header-10.css" />


    
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

      /* @media only screen and (min-width: 480px) and (max-width: 580px) {
        .offcanvas {
          width: 40% !important; 
        } 
      } */


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
        padding: 12px 15px;
        transition: all 0.15s;
        position: relative;
        border-radius: 3px;
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
        padding-left: 20px;
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
    </style>





  </head>
  <body>
    <!-- Header Start -->
    <header class="site-header">
      <div class="site-header__top">
        <div class="wrapper site-header__wrapper">
          <!-- <div class="site-header__start">
            <ul class="">
              <li class=""><a href="#">About</a></li>
              <li class=""><a href="#">Contact</a></li>
            </ul>
          </div> -->
          <div class="site-header__middle">
            <a href="index.php" class="brand" title="Vewon Group"><img src="img/vewonlogo.png" alt=""></a>
          </div>
          <!-- ******* LOGIN BUTTON ******* -->
          <div class="site-header__end">
            <a class="doc-link" href="#">My documents <i class="material-icons-outlined external_link">open_in_new</i></a>

            <a href="login.php" class="button text-capitalize text-decoration-none login" title="If you already have an account"><i class="fas fa-sign-in-alt"></i> login</a>
            
          </div>
        </div>
      </div>
      <div class="site-header__bottom">
        <div class="wrapper site-header__wrapper" id="bottom_wrapper">
          <div class="site-header__start">
            <form action="" method="" role="search" class="search-form">
              <input type="search" name="search" class="search-bar" placeholder="Search...">
            </form>




            <!-- <div class="search">
              <button class="search__toggle" aria-label="Open search">
                Search
              </button>
              <form class="search__form" action="">
                <label class="sr-only" for="search">Search</label>
                <input
                  type="search"
                  name=""
                  id="search"
                  placeholder="Search for"
                />
              </form>
            </div> -->
          </div>

          <div class="site-header__middle">
            <i class="fas fa-bars toggle_bar" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" style="position: absolute; right: 1rem; top: 1.5rem; cursor: pointer;"></i>
            <!-- <button class="nav__toggle" aria-expanded="false" type="button">
              menu
            </button> -->
            <ul class="nav__wrapper">
              <li class="nav__item text-capitalize dropdown">
                <a href="#" class="text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false" id="dropdown">product</a>
                  <ul class="dropdown-menu" aria-labelledby="#dropdown">
                    <li><a class="dropdown-item" href="med_low_voltage_products_menu.php">MV and LV</a></li>
                    <li><a class="dropdown-item" href="building_automation_menu.php">Building Automation</a></li>
                    <li><a class="dropdown-item" href="renewable_storage_energy_menu.php">Renewable & Energy Storage</a></li>
                    <li><a class="dropdown-item" href="grid_automation_menu.php">Grid Automation</a></li>
                    <li><a class="dropdown-item" href="critical_power_menu.php">Critical & Industrial Power</a></li>
                  </ul>
              </li>
              <li class="nav__item text-capitalize dropdown">
                <a href="solution.php" class="text-decoration-none">solution</a>
                <!-- <ul class="dropdown-menu" aria-labelledby="#dropdown">
                  <li><a class="dropdown-item" href="solution.php">Solution 1</a></li>
                  <li><a class="dropdown-item" href="solution.php">Solution 2</a></li>
                  <li><a class="dropdown-item" href="solution.php">Solution 3</a></li>
                  <li><a class="dropdown-item" href="solution.php">Solution 4</a></li>
                  <li><a class="dropdown-item" href="solution.php">Solution 5</a></li>
                </ul> -->
              </li>
              <li class="nav__item text-capitalize dropdown">
                <a href="#" class="text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">service</a>
                <ul class="dropdown-menu" aria-labelledby="#dropdown">
                  <li><a class="dropdown-item" href="service.php">Service 1</a></li>
                  <li><a class="dropdown-item" href="service.php">Service 2</a></li>
                  <li><a class="dropdown-item" href="service.php">Service 3</a></li>
                  <li><a class="dropdown-item" href="service.php">Service 4</a></li>
                  <li><a class="dropdown-item" href="service.php">Service 5</a></li>
                </ul>
              </li>
              <li class="nav__item text-capitalize"><a href="support.php" class="text-decoration-none">tech support</a></li>
              <li class="nav__item text-capitalize"><a href="about_us.php" class="text-decoration-none">about us</a></li>
            </ul>
          </div>

          <div class="site-header--end"></div>
            <a class="text-decoration-none text-capitalize reg" href="register.php" target="_blank" title="Create a new account"><i class="far fa-edit"></i> register</a>
          </div>
        </div>
      </div>
    </header>






    <!-- OFFCANVAS FOR MOBILE DEVICES -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel" style="opacity: 0;user-select: none;">Offcanvas</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div id="accordian">
          <ul class="show-dropdown">
              <li>
                  <a class="font" href="javascript:void(0);"><i class="fas fa-tag"></i>&nbsp;Products</a>
                  <ul>
                    <li><a class="font-child" href="med_low_voltage_products_menu.php">MV and LV</a></li>
                    <li><a class="font-child" href="building_automation_menu.php">Building Automation</a></li>
                    <li><a class="font-child" href="renewable_storage_energy_menu.php">Renewable & Energy Storage</a></li>
                    <li><a class="font-child" href="grid_automation_menu.php">Grid Automation</a></li>
                    <li><a class="font-child" href="critical_power_menu.php">Critical & Industrial Power</a></li>
                  </ul>
              </li>

              <li>
                <a class="font" href="solution.php"><i class="far fa-lightbulb"></i>&nbsp;Solutions</a>
                <!-- <ul>
                  <li><a class="font-child" href="solution.php">Solution 1</a></li>
                  <li><a class="font-child" href="solution.php">Solution 2</a></li>
                  <li><a class="font-child" href="solution.php">Solution 3</a></li>
                  <li><a class="font-child" href="solution.php">Solution 4</a></li>
                  <li><a class="font-child" href="solution.php">Solution 5</a></li>
                </ul> -->
              </li>

              <li>
                <a class="font" href="javascript:void(0);"><i class="fas fa-tools"></i>&nbsp;Services</a>
                <ul>
                  <li><a class="font-child" href="service.php">Services 1</a></li>
                  <li><a class="font-child" href="service.php">Services 2</a></li>
                  <li><a class="font-child" href="service.php">Services 3</a></li>
                  <li><a class="font-child" href="service.php">Services 4</a></li>
                  <li><a class="font-child" href="service.php">Services 5</a></li>
                </ul>
              </li>

              <li class=""><a href="support.php" class="font"><i class="far fa-handshake"></i>&nbsp;Tech Support</a></li>
              <li class=""><a href="about_us.php" class="font"><i class="fas fa-info-circle"></i>&nbsp;About Us</a></li>
            </ul>
        </div>
        <div class="login-button">
          <a href="login.php" class="btn btn-outline-primary btn-block text-decoration-none mob-login w-100 mb-2">Login</a>
        </div>

        <div class="register-button">
          <a href="register.php" class="btn btn-outline-primary btn-block text-decoration-none w-100 mob-reg">Register</a>
        </div>
      </div>
    </div>


    <!-- Header End -->
    
  

      <!--********** MAIN CONTENT TOP NAV ***********-->
      <div class="top-row">
        <ul>
          <li class="">
            <a href="small_business_menu.php">
              <div class="icons-sec">
                <i class="material-icons-outlined material-icons">home</i>
              </div>
              <div class="title-sec">
                Small Business
              </div>
            </a>
          </li>

          <li>
            <a href="med_low_voltage_products_menu.php">
              <div class="icons-sec">
                <i class="material-icons-outlined material-icons">precision_manufacturing</i>
              </div>
              <div class="title-sec">
                Medium & Low Voltage Products
              </div>
            </a>
          </li>

          <li>
            <a href="building_automation_menu.php">
              <div class="icons-sec">
                <i class="material-icons-outlined material-icons">business</i>
              </div>
              <div class="title-sec">
                Building Automation
              </div>
            </a>
          </li>

          <li>
            <a href="renewable_storage_energy_menu.php">
              <div class="icons-sec">
                <i class="material-icons-outlined material-icons">wb_sunny</i>
                <i class="material-icons-outlined material-icons">air</i>
              </div>
              <div class="title-sec">
                Renewable Energy and Energy Storage
              </div>
            </a>
          </li>

          <li>
            <a href="access_to_energy_menu.php">
              <div class="icons-sec">
                <i class="material-icons-outlined material-icons">bolt</i>
              </div>
              <div class="title-sec">
                Access to Energy
              </div>
            </a>
          </li>

          <li>
            <a href="grid_automation_menu.php">
              <div class="icons-sec">
                <i class="material-icons-outlined material-icons">equalizer</i>
              </div>
              <div class="title-sec">
                Grid Automation
              </div>
            </a>
          </li>

          <li>
            <a href="critical_power_menu.php">
              <div class="icons-sec">
                <i class="material-icons-outlined material-icons">electrical_services</i>
              </div>
              <div class="title-sec">
                Critical Power
              </div>
            </a>
          </li>

          <li>
            <a href="industrial_automation_menu.php">
              <div class="icons-sec">
                <i class="material-icons-outlined material-icons">construction</i>
              </div>
              <div class="title-sec">
                Industrial Automation
              </div>
            </a>
          </li>
        </ul>
      </div>
      <!--********** MAIN CONTENT TOP NAV ENDS***********-->







      <!--************ MOBILE TOP NAV CARD ************-->
      <div class="container-fluid wrapper">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card mobile-card">
              <div class="card-body">
                <ul class="list-unstyled">
                  <li class="card-list">
                    <a href="small_business_menu.php">
                      <span><i class="material-icons-outlined material-icons">home</i> Small Business</span>
                      <i class="fas fa-angle-right"></i></a>
                    </a>
                  </li>

                  <li class="card-list">
                    <a href="med_low_voltage_products_menu.php"><span><i class="material-icons-outlined material-icons">precision_manufacturing</i> Low Voltage Products</span>
                    <i class="fas fa-angle-right"></i></a>
                  </li>

                  <li class="card-list">
                    <a href="building_automation_menu.php"><span><i class="material-icons-outlined material-icons">business</i> Building Automation</span>
                    <i class="fas fa-angle-right"></i></a>
                  </li>

                  <li class="card-list">
                    <a href="renewable_storage_energy_menu.php"><span><i class="material-icons-outlined material-icons">wb_sunny</i> Renewable Energy and Energy Storage</span>
                    <i class="fas fa-angle-right"></i></a>
                  </li>

                  <li class="card-list">
                    <a href="access_to_energy_menu.php"><span><i class="material-icons-outlined material-icons">bolt</i> Access to Energy</span>
                    <i class="fas fa-angle-right"></i></a>
                  </li>

                  <li class="card-list">
                    <a href="grid_automation_menu.php"><span><i class="material-icons-outlined material-icons">equalizer</i> Grid Automation</span>
                    <i class="fas fa-angle-right"></i></a>
                  </li>

                  <li class="card-list">
                    <a href="critical_power_menu.php"><span><i class="material-icons-outlined material-icons">electrical_services</i> Critical Power</span>
                    <i class="fas fa-angle-right"></i></a>
                  </li>

                  <li class="card-list">
                    <a href="industrial_automation_menu.php"><span><i class="material-icons-outlined material-icons">construction</i> Industrial Automation</span>
                    <i class="fas fa-angle-right"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--************ MOBILE TOP NAV CARD ENDS ************-->











      <!--********** PRODUCTS CARDS ROW 1 STARTS ***********-->
      <div class="container-fluid wrapper">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-md-3 col-sm-12 mb-3">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv1.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div> 

              <div class="col-md-3 col-sm-12 mb-3">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv2.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-3 col-sm-12 mb-3">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv3.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-3 col-sm-12 mb-3">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv4.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        

      <!-- ********** PRODUCTS CARDS ROW 2 *********** -->
        <div class="row">
          <div class="col-12 mb-3">
            <div class="row">
              <div class="col-md-3 col-sm-12">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv5.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-3 col-sm-12">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv6.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-3 col-sm-12">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv7.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-3 col-sm-12">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv8.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>


      <!-- ********** PRODUCTS CARDS ROW 3 *********** -->
        <div class="row">
          <div class="col-12 mb-3">
            <div class="row">
              <div class="col-md-3 col-sm-12">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv9.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-3 col-sm-12">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv10.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-3 col-sm-12">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv11.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-3 col-sm-12">
                <a href="product_menu_items.php" class="text-decoration-none text-dark">
                  <div class="card h-100 mb-3">
                    <img src="img/product1/lv-and-mv12.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                      <h5 class="text-center mb-2">MV and LV Products</h5>
                      <p class="card-text text-muted text-center">Product Info Text</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ********** PRODUCTS CARDS ROW 1 ENDS *********** -->


    <!-- WHATSAPP FLOATING SECTION -->
      <div class="whatsapp-section">
        <a href="https://wa.me/9790864096" class="whatsapp_float ripple" target="_blank"> <i class="fab fa-whatsapp whatsapp-icon"></i></a>
      </div>
      













<!-- ************* FOOTER  *************  -->
<footer class="footer-48201">
      
  <div class="container-fluid wrapper">
    <div class="row">
      <div class="col-md-4 pr-md-5">
          <a class="footer-site-logo d-block mb-4"><img src="img/vewonlogo2.png" alt="Vewon Group Logo" width="200"></a>
          <p class="footer-text">Vewon is a fastly growing electrical and mechanical service company. We offer technology based solutions to clients.</p><br>
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
          <li><p class="title">PRODUCTS</p></li>
          <li><a href="med_low_voltage_products_menu.php">MV and LV Systems</a></li>
          <li><a href="building_automation_menu.php">Building Automation</a></li>
          <li><a href="renewable_storage_energy_menu.php">Renewable & Energy Storage</a></li>
          <li><a href="grid_automation_menu.php">Grid Automation</a></li>
          <li><a href="critical_power_menu.php">Critical & Industrial Power</a></li>
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
          <li><p class="title">SOLUTIONS</p></li>
          <li><a href="solution.php">Design Engineering and Energy Systems</a></li>
          <li><a href="solution.php">Remote Monitoring</a></li>
          <li><a href="solution.php">Testing and Commissioning</a></li>
          <li><a href="solution.php">Co-ordination Studies</a></li>
          <!--<li><a href="#">Links 5</a></li>-->
        </ul>
      </div>
      <div class="col-md">
        <ul class="list-unstyled nav-links">
          <li><p class="title">SERVICES</p></li>
          <li><a href="service.php">Installation and Maintenance</a></li>
          <li><a href="service.php">Portal based Solutions</a></li>
          <li><a href="service.php">High Quality Spare Parts</a></li>
          <!--<li><a href="#">Links 4</a></li>-->
          <!--<li><a href="#">Links 5</a></li>-->
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
          <p><small>&copy; 2021 All Rights Reserved. Powered by Dbot Digital.</small></p>
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
        slidesToShow: 1,
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