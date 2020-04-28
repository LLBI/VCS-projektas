<?php 
    require __DIR__ . '/app/contact-form.php';
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Liolė Website Description">
    <meta name="keywords" content="keyword 1, keyword 2">
    <title>Liolė Website</title>
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7206ef5964.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--HEADER-->
    <header class="noselect">
        <div id="top-fix" class="nav-top"></div>
        <div id="navpos">
            <div id="navpos-change" class="logo-menu row">
            <div class="logo noselect">
                <img src="images/liole_logo.png" alt="liole logo">
            </div>
            <nav id="menu-fix">
                <ul id="menu" class="nav-bar">
                    <li><a class="toHome" href="#">Home</a></li>
                    <li><a class="toServices" href="#">Services</a></li>
                    <li><a class="toPortfolio" href="#">Portfolio</a></li>
                    <li><a class="toAbout" href="#">About</a></li>
                    <li><a class="toContact" href="#">Contact</a></li>
                </ul>
            </nav>
           <i id="toggle-menu" class="fa fa-bars noselect"></i>
            </div>
        </div>
        <div class="banner-main row">
            <div class="banner-text">
                <h1>Welcome To Our Studio!</h1>
                <p>IT'S NICE TO MEET YOU</p>
            </div>    
            <div class="banner-button">
                <a class="btn banner-btn" href="#">TELL ME MORE</a>
            </div>
        </div>
    </header>
    <!--/HEADER-->
    <!--SERVICES SECTION-->
    <section id="services">
        <div class="services section-padding">
            <div class="services-main">
                <div class="section-title">
                    <h2>Services</h2>
                </div>
                <div class="section-description">
                    <p>Proin iaculis purus consequat sem cure.</p> 
                </div>
            </div>
            <div class="services-content row">
                <div class="services-item">
                    <div class="services-icon">
                        <div class="fa-stack fa-2x">
                            <i class="far fa-circle fa-stack-2x"></i>
                            <i class="fas fa-wine-glass-alt fa-stack-1x"></i>
                        </div>
                    </div>
                    <div class="services-icon-title">
                        E-Commerce
                    </div>
                    <div class="services-icon-text">
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="services-icon">
                        <div class="fa-stack fa-2x">
                            <i class="far fa-circle fa-stack-2x"></i>
                            <i class="far fa-heart fa-stack-1x"></i>
                        </div>
                    </div>
                    <div class="services-icon-title">
                        Responsive Web
                    </div>
                    <div class="services-icon-text">
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                    </div>
                </div>
                <div class="services-item">
                    <div class="services-icon">
                        <div class="fa-stack fa-2x">
                            <i class="far fa-circle fa-stack-2x"></i>
                            <i class="far fa-lightbulb fa-stack-1x"></i>
                        </div>
                    </div>
                    <div class="services-icon-title">
                        Web Security
                    </div>
                    <div class="services-icon-text">
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/SERVICES SECTION-->
    <!--PORTFOLIO-->
    <section id="portfolioTop">
        <div class="portfolio section-padding">
            <div class="row">
                <div class="portfolio-main">
                    <div class="section-title">
                        <h2>our portfolio</h2>
                    </div>
                    <div class="section-description">
                        <p>Proin iaculis purus consequat sem cure.</p>
                    </div>
                </div>
                <div class="portfolio-cards">
                    <div class="card">
                        <a id="gallery1"><img src="images/portfolio/portfolio_01.jpg" alt="card1"></a>
                        <div class="card-text">
                            <h3>Card</h3>
                            <p>Proin iaculis purus. </p>
                        </div>
                    </div>
                    <div class="card">
                        <a id="gallery2"><img src="images/portfolio/portfolio_02.jpg" alt="card2"></a>
                        <div class="card-text">
                            <h3>Card</h3>
                            <p>Proin iaculis purus. </p>
                        </div>
                    </div>
                    <div class="card">
                        <a id="gallery3"><img src="images/portfolio/portfolio_03.jpg" alt="card3"></a>
                        <div class="card-text">
                            <h3>Card</h3>
                            <p>Proin iaculis purus. </p>
                        </div>
                    </div>
                    <div class="card">
                        <a id="gallery4"><img src="images/portfolio/portfolio_04.jpg" alt="card4"></a>
                        <div class="card-text">
                            <h3>Card</h3>
                            <p>Proin iaculis purus. </p>
                        </div>
                    </div>
                    <div class="card">
                        <a id="gallery5"><img src="images/portfolio/portfolio_05.jpg" alt="card5"></a>
                        <div class="card-text">
                            <h3>Card</h3>
                            <p>Proin iaculis purus. </p>
                        </div>
                    </div>
                    <div class="card">
                        <a id="gallery6"><img src="images/portfolio/portfolio_06.jpg" alt="card6"></a>
                        <div class="card-text">
                            <h3>Card</h3>
                            <p>Proin iaculis purus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/PORTFOLIO-->
    <!--ABOUT US-->
    <section id="about">
        <div class="about-us section-padding row">
            <div class="about-us-main">
                <div class="section-title">
                    <h2>About us</h2>
                </div>
                <div class="section-description">
                    <p>Proin iaculis purus consequat sem cure.</p>
                </div>
            </div>
            <div class="about-us-content">
                <div class="timeline tl-left">
                    <img src="images/about_us/about_us01.jpg" alt="timeline">
                    <div class="about-us-text">
                        <h3><span>July 2010</span><br>
                        Our Humble Beginnings</h3>
                        <p>Proin iaculis purus consequat sem cure 
                        digni ssim. Donec porttitora entum suscipit 
                        aenean rhoncus posuere odio in tincidunt. Proin 
                        iaculis.</p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="timeline tl-right">
                    <img src="images/about_us/about_us02.jpg" alt="timeline">
                    <div class="about-us-text">
                    <h3><span>January 2011</span><br>
                        Facing Startup Battles
                    </h3>
                    <p>Proin iaculis purus consequat sem cure 
                    digni ssim. Donec porttitora entum suscipit 
                    aenean rhoncus posuere odio in tincidunt. Proin 
                    iaculis purus consequat sem cure digni 
                    ssim. Donec porttitora entum suscipit.</p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="timeline tl-left">
                    <img src="images/about_us/about_us03.jpg" alt="timeline">
                    <div class="about-us-text">
                    <h3><span>December 2012</span><br>
                        Enter The Dark Days
                    </h3>
                    <p>Proin iaculis purus consequat sem cure 
                    digni ssim. Donec porttitora entum suscipit 
                    aenean rhoncus posuere odio in tincidunt. Proin 
                    iaculis.</p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="timeline tl-right">
                    <img src="images/about_us/about_us04.jpg" alt="timeline">
                    <div class="about-us-text">
                    <h3><span>February 2014</span><br>
                        Our Triumph
                    </h3>
                    <p>Proin iaculis purus consequat sem cure 
                    digni ssim. Donec porttitora entum suscipit 
                    aenean rhoncus posuere odio in tincidunt. Proin 
                    iaculis purus consequat sem cure digni 
                    ssim. Donec porttitora entum suscipit.</p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class=" tl-right">
                    <div class="timeline-end">
                    <p>Our <br>Story <br>Continues <br>...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ABOUT US-->
    <!--TEAM-->
    <section id="team">
        <div class="team section-padding">
            <div class="row">
                    <div class="team-main">
                        <div class="section-title">
                            <h2>Our amazing team</h2>
                        </div>
                        <div class="section-description">
                            <p>Proin iaculis purus consequat sem cure.</p>
                        </div>
                    </div>
                <div class="team-members">
                    <div class="member">
                        <img src="images/team/portrait01.jpg" alt="member01">
                        <div class="member-text">
                            <h3>Jane Doe</h3>
                            <p>Marketer</p>
                            <div class="member-social-media">
                                <div class="fa-stack fa-1x active">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </div>
                                <div class="member-social-media">
                                    <div class="fa-stack fa-1x active">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="member">
                        <img src="images/team/portrait02.jpg" alt="member01">
                        <div class="member-text">
                            <h3>Jane Doe</h3>
                            <p>Coder</p>
                            <div class="member-social-media">
                                <div class="fa-stack fa-1x active">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </div>
                                <div class="member-social-media">
                                    <div class="fa-stack fa-1x active">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="member">
                        <img src="images/team/portrait03.jpg" alt="member01">
                        <div class="member-text">
                            <h3>John Doe</h3>
                            <p>Designer</p>
                            <div class="member-social-media">
                                <div class="fa-stack fa-1x active">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </div>
                                <div class="member-social-media">
                                    <div class="fa-stack fa-1x active">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                    </div>
                                </div>
                        </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-bottom-text">
                    <p>Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit  
                    aenean rhoncus posuere odio in tincidunt proin iaculis.</p>
                </div>
        </div>
    </section>
    <!--/TEAM-->
    <!--CONTACTS-->
    <section id="contact">
        <div class="contact-us section-padding">
            <div class="row">
                <div class="contact-main">
                    <div class="section-title contact-title">
                        <h2>Contact us</h2>
                    </div>
                    <div class="section-description">
                        <p>Proin iaculis purus consequat sem cure.</p>
                    </div>
                </div>
                <div class="contact-form-content">
                    <form class="contact-form" action="index.php" method="post">
                        <div class="contact-row">
                            <div class="contact-column">
                                <input type="text" name="name" placeholder="Your Name*" required>
                                <input type="email" name="email" placeholder="Your Email*" required>
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="contact-text-area">
                                 <textarea name="message" rows="13" placeholder="Your Message*" required></textarea>
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-form">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--/CONTACTS-->
    <!--FOOTER-->
    <footer>
        <div class="footer-main">
            <div class="footer-content row">
                <div class="copyright">
                    <h4>&copy; Copyright <?php echo date('Y'). ' '; ?>Website.com</h4>
                </div>
                <div class="social-media">
                    <div class="fa-stack fa-2x active">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                    </div>
                    <div class="fa-stack fa-2x active">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!--/FOOTER-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
