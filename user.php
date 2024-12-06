<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Salon X</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-bar-left">
                        <div class="text">
                            <p>24 HOURS</p>
                            <p>7 DAYS</p>
                        </div>
                        <div class="text">
                            <p>CALL US FOR APPOINTMENT</p>
                            <p>0303-0303030</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Salon X</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
           <?php  
           session_start();
             if (isset($_SESSION["uemail"])) {
                # code...
                if ($_SESSION["urole"]=="Admin") {
                    # code...
                    header("location:admin.php");
                }
                else { ?>
                    
             

           
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="user.php" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="price.html" class="nav-item nav-link">Price</a>
                    <a href="team.html" class="nav-item nav-link">Barber</a>
                    <a href="portfolio.html" class="nav-item nav-link">Gallery</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="appointment.php" class="nav-item nav-link">Appointment</a>
                    <a href="payment.php" class="nav-item nav-link">Payment</a>
                    <a href="logout.php" class="nav-item nav-link bg-danger">logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
    <?php  }


}

?>

    <!-- Hero Start -->
    <div class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-text">
                        <h1>THE ULTIMATE DESTINATION FOR THE MODERN MAN</h1>
                        <P>"REVEAL THE BEST VERSION OF YOURSELF"</P>
                        <a class="btn" href="portfolio.html">Check Out</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="img/hero.png" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Video Modal Start-->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <p>Learn About Us</p>
                        <h2>25 Years Experience</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            Step into our salon and indulge in a world of pampering and relaxation. Our expert stylists
                            and barbers will treat you to a personalized experience, tailoring their skills to bring out
                            the best in you. From the soothing ambiance to the refreshing beverages, every detail is
                            designed to make you feel at ease. As we work our magic on your hair, beard, and grooming
                            needs, you'll be transformed from the inside out, leaving you feeling refreshed,
                            revitalized, and ready to take on the world with confidence and style
                        </p>
                        <a class="btn" href="about.html">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Salon Services</p>
                <h2>Best Salon and Barber Services for You</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-1.jpg" alt="Image">
                        </div>
                        <h3>Hair Cut</h3>
                        <p>
                            A great haircut is more than just a trim, it's a transformation. It's a fresh start, a new
                            look, and a confidence boost. Our expert stylists will work with you to craft a cut that
                            perfectly complements your face shape, hair type, and personal style. From sleek and
                            sophisticated to bold and edgy, we'll help you find the perfect look that makes you feel
                            like the best version of yourself
                        </p>
                        <a class="btn" href="about.html">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-2.jpg" alt="Image">
                        </div>
                        <h3>Beard Style</h3>
                        <p>
                            From rugged and raw to sleek and
                            sophisticated, our expert barbers will help you find the perfect beard style to match your
                            unique personality and flair. Whether you're looking for a scruffy stubble or a meticulously
                            groomed masterpiece, we'll work with you to craft a beard that complements your features and
                            makes you feel confident and commanding
                        </p>
                        <a class="btn" href="about.html">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/service-3.jpg" alt="Image">
                        </div>
                        <h3>Color & Wash</h3>
                        <p>
                            Unlock a new you with our vibrant hair color services. From subtle, natural tones to bold,
                            head-turning hues, our expert colorists will help you find the perfect shade to match your
                            style and personality. And, keep your locks looking luscious and healthy with our nourishing
                            hair wash treatments, carefully crafted to leave your hair feeling soft, looking shiny, and
                            full of life
                        </p>
                        <a class="btn" href="about.html">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Start -->
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Best Pricing</p>
                <h2>We Provide Best Price in the City</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-1.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Hair Cut</h2>
                            <h3>$9.99</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-2.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Hair Wash</h2>
                            <h3>$10.99</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-3.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Hair Color</h2>
                            <h3>$11.99</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-4.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Hair Shave</h2>
                            <h3>$12.99</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-5.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Hair Straight</h2>
                            <h3>$13.99</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-6.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Facial</h2>
                            <h3>$14.99</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-7.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Shampoo</h2>
                            <h3>$15.99</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-8.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Beard Trim</h2>
                            <h3>$16.99</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-9.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Beard Shave</h2>
                            <h3>$17.99</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-10.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Wedding Cut</h2>
                            <h3>$18.99</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-11.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Clean Up</h2>
                            <h3>$19.99</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/price-12.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Massage</h2>
                            <h3>$20.99</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Testimonial Start -->
    <div class="testimonial">
        <div class="container">
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <img src="img/testimonial-1.jpg" alt="Image">
                    <p>
                        Great service, excellent haircut, and a relaxed atmosphere. Highly recommend!
                        Always leave feeling refreshed and revitalized. Top-notch grooming experience.
                    </p>
                    <h2>Benjamin Andrew</h2>
                    <h3>Model</h3>
                </div>
                <div class="testimonial-item">
                    <img src="img/testimonial-2.jpg" alt="Image">
                    <p>
                        Exceptional service, attention to detail, and a great cup of coffee to boot!
                        The perfect blend of style, skill, and camaraderie. My go-to spot for all my grooming needs.
                    </p>
                    <h2>Peter Devereux</h2>
                    <h3>Musician</h3>
                </div>
                <div class="testimonial-item">
                    <img src="img/testimonial-3.jpg" alt="Image">
                    <p>
                        Consistently excellent service, great advice, and a fantastic atmosphere. Highly recommended!
                        A cut above the rest! Professional, friendly, and talented team. Won't go anywhere else.
                    </p>
                    <h2>Abraham Benjamin</h2>
                    <h3>Influncer</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Barber Team</p>
                <h2>Meet Our Hair Cut Expert Barber</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>Master Barber</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Dylan Adams</h2>
                            <p>Hair Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Gloria Edwards</h2>
                            <p>Beard Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Josh Dunn</h2>
                            <p>Color Expert</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Latest From Blog</p>
                <h2>Learn More from Latest Barber Blog</h2>
            </div>
            <div class="owl-carousel blog-carousel">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-1.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Hair Cut</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>31-Dec-2023</p>
                    </div>
                    <div class="blog-text">
                        <h2>Hair Cut</h2>
                        <p>
                            A great haircut is more than just a trim, it's a transformation. It's a fresh start, a new
                            look, and a confidence boost. Our expert stylists will work with you to craft a cut that
                            perfectly complements your face shape, hair type, and personal style. From sleek and
                            sophisticated to bold and edgy, we'll help you find the perfect look that makes you feel
                            like the best version of yourself.
                        </p>
                        <a class="btn" href="about.html">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-2.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Beard Style</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>23-Feb-2023</p>
                    </div>
                    <div class="blog-text">
                        <h2>Bread Style</h2>
                        <p>
                            Elevate your look with a beard that makes a statement. From rugged and raw to sleek and
                            sophisticated, our expert barbers will help you find the perfect beard style to match your
                            unique personality and flair. Whether you're looking for a scruffy stubble or a meticulously
                            groomed masterpiece, we'll work with you to craft a beard that complements your features and
                            makes you alive.
                        </p>
                        <a class="btn" href="about.html">Read More<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-3.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Color & Wash</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>29-Feb-2024</p>
                    </div>
                    <div class="blog-text">
                        <h2>Color & Wash</h2>
                        <p>
                            Unlock a new you with our vibrant hair color services. From subtle, natural tones to bold,
                            head-turning hues, our expert colorists will help you find the perfect shade to match your
                            style and personality. And, keep your locks looking luscious and healthy with our nourishing
                            hair wash treatments, carefully crafted to leave your hair feeling soft, looking shiny, and
                            full of life.
                        </p>
                        <a class="btn" href="about.html">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-4.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Hair Cut</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>31-Dec-2023</p>
                    </div>
                    <div class="blog-text">
                        <h2>Hair Cut</h2>
                        <p>
                            A great haircut is more than just a trim, it's a transformation. It's a fresh start, a new
                            look, and a confidence boost. Our expert stylists will work with you to craft a cut that
                            perfectly complements your face shape, hair type, and personal style. From sleek and
                            sophisticated to bold and edgy, we'll help you find the perfect look that makes you feel
                            like the best version of yourself.
                        </p>
                        <a class="btn" href="about.html">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-5.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Beard Style</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>23-Feb-2023</p>
                    </div>
                    <div class="blog-text">
                        <h2>Beard Style</h2>
                        <p>
                            Elevate your look with a beard that makes a statement. From rugged and raw to sleek and
                            sophisticated, our expert barbers will help you find the perfect beard style to match your
                            unique personality and flair. Whether you're looking for a scruffy stubble or a meticulously
                            groomed masterpiece, we'll work with you to craft a beard that complements your features and
                            makes you alive.
                        </p>
                        <a class="btn" href="about.html">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-6.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Color & Wash</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>29-Feb-2024</p>
                    </div>
                    <div class="blog-text">
                        <h2>Color & Wash</h2>
                        <p>
                            Unlock a new you with our vibrant hair color services. From subtle, natural tones to bold,
                            head-turning hues, our expert colorists will help you find the perfect shade to match your
                            style and personality. And, keep your locks looking luscious and healthy with our nourishing
                            hair wash treatments, carefully crafted to leave your hair feeling soft, looking shiny, and
                            full of life.
                        </p>
                        <a class="btn" href="about.html">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-contact">
                                <h2>Salon Address</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Karachi Pakistan</p>
                                <p><i class="fa fa-phone-alt"></i>0303-0303030</p>
                                <p><i class="fa fa-envelope"></i>salon@gmail.com</p>
                                <div class="footer-social">
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-link">
                                <h2>Quick Links</h2>
                                <a href="">Terms of use</a>
                                <a href="">Privacy policy</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="footer-newsletter">
                        <h2>Newsletter</h2>
                        <p>
                            Stay ahead of the curve with our latest newsletter, featuring exclusive promotions, expert
                            tips, and the latest trends in men's grooming. From new service launches to special offers,
                            be the first to know what's happening at [Salon Management]!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="#">Salon Management</a>, All Right Reserved.</p>
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="">theworldwidemanager</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>