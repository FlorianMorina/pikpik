<?php
session_start();

if (!isset($_SESSION['femail'])) {
  // If the admin is not logged in, redirect to the signin page
  header("Location: signinAdmin.php");
  exit;

  // Check if the username starts with "ramazan" or "florian"
if (substr($_SESSION['femail'], 0, 7) != "ramazan" && substr($_SESSION['femail'], 0, 7) != "florian") {
    // If the username does not start with "ramazan" or "florian", show an error message
    echo "You are not authorized to access this page";
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=width-device, initial-scale=1.0">
        <title>Home | pikpik</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>

        <header>
            <div class="wrapper">
                <nav>
                    <div>
                        <a href="#"><img class="logo" src="images/logo/black-logo.png" alt="pikpik"></a>
                    </div>

                    <ul>
                        <li>
                            <a href="dashboard.html">Dashboard</a>
                        </li>

                        <li>
                            <a href="#menu-section">Food Menu</a>
                        </li>

                        <li>
                            <a href="order.html"><img class="shop-icon" src="images/icon/shop-icon.png" alt="shop-icon"></a>
                        </li>

                        <li>
                            <a href="logout.php" class="btn green">Log Out</a>
                        </li>
                    </ul>
                </nav>
                <!-- End of desktop navigation -->
    
                <nav class="mobile-nav">
                    <div class="logo">
                        <a href="#"><img class="logo" src="images/logo/black-logo.png" alt="pikpik"></a>
                    </div>
                    <div class="menu-icon">
                        <img src="images/icon/menu-icon.png" alt="">
                    </div>
                </nav>

                <div class="mobile-menu-container">
                    <div class="close-icon">
                        <img src="images/icon/close-icon.png" alt="">
                    </div>

                    <ul>
                        <li>
                            <a href="#features-sections" class="about-us">About Us</a>
                        </li>

                        <li>
                            <a href="#menu-section" class="food-menu">Food Menu</a>
                        </li>

                        <li>
                            <a href="#"><img class="shop-icon" src="images/icon/shop-icon.png" alt="shop-icon"></a>
                        </li>

                        <li>
                            <a href="signIn.php" class="btn green" style="color: white;">Sign In</a>
                        </li>
                    </ul>
                </div>

                <!-- End of mobile navigation menu -->

                <div class="main-section">
                    <div class="left">
                        <a href="#" class="btn light green">More than smart 🧠</a>
                        <h1>Your city is smart <br />
                            because you are smart
                        </h1>
                        <a href="#menu-section" class="btn green">Order Food</a>
                    </div>
                    <div class="right">
                        <img src="images/main.png" alt="main-image">
                    </div>
                </div>
            </div>
        </header>

        <!-- End of header section -->

        <section class="features-sections" id="features-sections">
            <div class="wrapper">
                <h6 class="green">What We Serve</h6>
                <h2>Our Features</h2>

                <div class="feature-cards">
                    <div class="feature-card">
                        <img class="taxi" src="images/icon/taxi.png" alt="taxi">
                        
                        <div class="info">
                            <h3>Call Your Taxi</h3>
                            <p>Looking for a fast and convenient way to call a taxi?</p>
                            <a href="#" class="btn white green">Coming Soon</a>
                        </div>
                    </div>

                    <div class="feature-card">
                        <img class="food" src="images/icon/food.png" alt="food">
                        
                        <div class="info">
                            <h3>Easy To Order</h3>
                            <p>With just a few clicks, you can order your favorite food.</p>
                            <a href="#menu-section" class="btn green">Order Now</a>
                        </div>
                    </div>

                    <div class="feature-card search">
                        <img class="smart-search" src="images/icon/smart-search.png" alt="smart search">
                        
                        <div class="info">
                            <h3>Smart Search</h3>
                            <p>Our algorithm will scour the internet for the best results in your area.</p>
                            <a href="#" class="btn white green">Coming Soon</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End of features section -->

        <section class="menu-section" id="menu-section">
            <div class="wrapper">
                <h6>Your Menu</h6>
                <h2>Menu That Always Makes You To Fall In Love</h2>

                <!-- <div class="filter-businesses">
                    <ul>
                        <li class="filter">
                            <a href="#" class="btn white black"><img src="images/icon/filter-icon.png" alt="filter">Filter</a>
                        </li>

                        <li>
                            <a href="#" class="btn white black"><img src="images/icon/business-icon.png" alt="business-logo">Business Name</a>
                        </li>
                        <li>
                            <a href="#" class="btn white black"><img src="images/icon/business-icon.png" alt="business-logo">Business Name</a>
                        </li>
                        <li>
                            <a href="#" class="btn white black"><img src="images/icon/business-icon.png" alt="business-logo">Business Name</a>
                        </li>
                        <li>
                            <a href="#" class="btn white black"><img src="images/icon/business-icon.png" alt="business-logo">Business Name</a>
                        </li>
                        <li>
                            <a href="#" class="btn white black"><img src="images/icon/business-icon.png" alt="business-logo">Business Name</a>
                        </li>
                        <li>
                            <a href="#" class="btn white black"><img src="images/icon/business-icon.png" alt="business-logo">Business Name</a>
                        </li>
                    </ul>
                </div> -->
                <div class="food-cards">

                        <div class="food-card">
                            <img src="images/icon/hambuger.png" alt="hamburger">
                            <div class="info">
                                <h3>Hamburger</h3>
                                <p>140g</p>
                                <h3 class="price">$2.50</h3>
                                <a href="#" class="btn white green add">Add To Card</a>
                            </div>
                        </div>
    
                        <div class="food-card">
                            <img src="images/3d/icon/meet.png" alt="meet">
                            <div class="info">
                                <h3>Meet</h3>
                                <p>200g</p>
                                <h3 class="price">$2.50</h3>
                                <a href="#" class="btn white green add">Add To Card</a>
                            </div>
                        </div>
    
                        <div class="food-card">
                            <img src="images/3d/icon/noodle.png" alt="noodle">
                            <div class="info">
                                <h3>Noodle</h3>
                                <p>100g</p>
                                <h3 class="price">$2.50</h3>
                                <a href="#" class="btn white green add">Add To Card</a>
                            </div>
                        </div>
    
                        <div class="food-card">
                            <img src="images/3d/icon/rice.png" alt="rice">
                            <div class="info">
                                <h3>Rice</h3>
                                <p>150g</p>
                                <h3 class="price">$2.50</h3>
                                <a href="#" class="btn white green add">Add To Card</a>
                            </div>
                        </div>
    
                        <div class="food-card">
                            <img src="images/3d/icon/salat.png" alt="Salat">
                            <div class="info">
                                <h3>Salat</h3>
                                <p>120g</p>
                                <h3 class="price">$2.50</h3>
                                <a href="#" class="btn white green add">Add To Card</a>
                            </div>
                        </div>
    
                        <div class="food-card">
                            <img src="images/3d/icon/grill.png" alt="grill">
                            <div class="info">
                                <h3>Grill</h3>
                                <p>200g</p>
                                <h3 class="price">$2.50</h3>
                                <a href="#" class="btn white green add">Add To Card</a>
                            </div>
                        </div>
    
                        <div class="food-card">
                            <img src="images/3d/icon/soymilk.png" alt="soymilk">
                            <div class="info">
                                <h3>Soymilk</h3>
                                <p>150g</p>
                                <h3 class="price">$2.50</h3>
                                <a href="#" class="btn white green add">Add To Card</a>
                            </div>
                        </div>
    
                        <div class="food-card">
                            <img src="images/3d/icon/6.png" alt="orange">
                            <div class="info">
                                <h3>Orange</h3>
                                <p>100g</p>
                                <h3 class="price">$2.50</h3>
                                <a href="#" class="btn white green add">Add To Card</a>
                            </div>
                        </div>
                </div>
                <!-- <div class="show-more">
                    <a href="#" class="btn white green">Show More</a>
                </div> -->
            </div>
        </section>

        <!-- End of food menu section -->

        <section class="testimonials-section">
            <div class="wrapper">
                <h2>Testimonials About Us</h2>
                <hr>

                <div class="testimonials">
                    <!-- <div class="left">
                        <a href="#" class="left arrow"><img src="images/icon/left-arrow.png" alt="left-arrow"></a>
                    </div> -->
        
                    <div class="testimonials-card">
                        <div class="left">
                            <img src="images/icon/farmer.png" alt="farmer">
                        </div>
                        <div class="right">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
                                enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                                nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <h4>Filan Fisteki</h4>
                            <p class="location">Rahovec, Kosovo</p>
                        </div>
                    </div>
        
                    <!-- <div class="right">
                        <a href="#" class="right arrow"><img src="images/icon/right-arrow.png" alt="right-arrow"></a>
                    </div> -->
                </div>
            </div>
        </section>

        <!-- End of testimonials section -->

        <section class="newsletter-section">
            <div class="wrapper">
                <h2>
                    Subscribe Newsletter & 
                    Get Letest News
                </h2>

                <form action="#">
                    <input id="message" type="text" placeholder="Enter your message">
                    <button id="subscribe-button1" class="subscribe-button">Subscribe</button>
                </form>
            </div>
        </section>


        <!-- End of newsletter section -->

        <footer>
            <div class="wrapper">
                <div class="links-container">
                    <div class="links">
                        <a href="#" class="logo"><img src="images/logo/black-logo.png" alt="pikpik"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        
                        <div class="social">
                            <a href="#"><img src="images/icon/facebook.png" alt=""></a>

                            <a href="#"><img src="images/icon/instagram.png" alt=""></a>

                            <a href="#"><img src="images/icon/linkedin.png" alt=""></a>
                        </div>
                    </div>

                    <div class="links">
                        <h3>Features</h3>

                        <ul>
                            <li>
                                <a href="#menu-section">Order Food</a>
                            </li>

                            <li>
                                <a href="#features-sections">Call Taxi</a>
                            </li>

                            <li>
                                <a href="#features-sections">Smart Search</a>
                            </li>
                        </ul>
                    </div>

                    <div class="links">
                        <h3>Business</h3>

                        <ul>
                            <li>
                                <a href="signIn.php">Sign In</a>
                            </li>

                            <li>
                                <a href="signUp.php">Register</a>
                            </li>
                        </ul>
                    </div>

                    <div class="links">
                        <h3>Contact Us</h3>

                        <ul>
                            <li>
                                <a href="contact.php">pikpik.info@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr>
                <p class="copyright">Copyright ©️ PikPik 2023 All right reserved</p>
            </div>
        </footer>

        <!-- End of footer section -->

        <script src="main.js"></script>
    </body>
</html>