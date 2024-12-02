<?php
if (isset($_POST['send'])) {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email information
    $to = "your-email@gmail.com"; // Your email address where you want to receive the form data
    $subject_line = "New message from: " . $name . " - " . $subject; // Subject of the email
    $headers = "From: " . $email . "\r\n"; // Email address of the person who filled the form
    $headers .= "Reply-To: " . $email . "\r\n"; // To allow you to reply to the person
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n"; // Ensures the message content is in HTML format

    // Message content (HTML format)
    $body = "
        <html>
        <head>
            <title>$subject_line</title>
        </head>
        <body>
            <h3>You have a new message from $name</h3>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        </body>
        </html>
    ";

    // Send the email
    if (mail($to, $subject_line, $body, $headers)) {
        echo "<p>Thank you for your message! We'll get back to you soon.</p>";
    } else {
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
}
?>

<?php
// Function to get the full URL
function get_current_url()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];
    return $protocol . $host . $uri;
}

// Get the canonical URL
$canonical_url = get_current_url();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tarun Plantations </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Tarun Plantations Company" name="keywords">
    <meta content="Tarun Plantations Company" name="description">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Tarun Plantations Company">
    <meta property="og:description" content="Tarun Plantations Company">
    <meta property="og:image" content=" ">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">

    <!-- Optional Open Graph Tags -->
    <meta property="og:site_name" content="Tarun Plantations Company">
    <meta property="og:locale" content="en_US">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Chart js npm -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="./" class="navbar-brand d-flex align-items-center text-center">
                    <!-- <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/coke-plant.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div> -->
                    <h3 class="m-0 text-primary">Tarun Plantations</h3>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#Amenities" class="nav-item nav-link">Amenities</a>
                        <a href="#features" class="nav-item nav-link">Features</a>
                        <a href="#plans" class="nav-item nav-link">Plan</a>
                        <a href="#location" class="nav-item nav-link">Location</a>
                        <a href="#faq" class="nav-item nav-link">FAQ</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Navbar End -->




        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4" style="font-size:40px;">Escape urban chaos and embrace
                        tranquility at Tarun Plantation</h1>
                    <p class="animated fadeIn mb-4 pb-2">Nestled in the picturesque landscapes of Ambeghar, Raigad, this
                        development offers scenic plots that promise a serene and fulfilling lifestyle. </p>

                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/about.avif" alt="carousel-1">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/project-1.png" alt="carousel-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <section id="about">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                <img class="img-fluid w-100" src="img/about.avif" alt="about">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn card-container" data-wow-delay="0.5s">


                            <div class="card">
                                <div class="card-header text-center">
                                    <h4>Tarun Plantations Company</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Location</td>
                                                <td>Ambeghar, Raigad, Maharashtra</td>
                                            </tr>
                                            <tr>
                                                <td>Area</td>
                                                <td>25 acres</td>
                                            </tr>
                                            <tr>
                                                <td>Total Plots</td>
                                                <td>182</td>
                                            </tr>
                                            <tr>
                                                <td>Plot Title</td>
                                                <td>Plot Title Separate 7/12 abstract of each plot</td>
                                            </tr>
                                            <tr>
                                                <td>Land Title</td>
                                                <td>Clear & Marketable title with N.A. Approval of 2013</td>
                                            </tr>
                                            <tr>
                                                <td>Possession </td>
                                                <td>Immediate & Registration deed </td>
                                            </tr>
                                            <tr>
                                                <td>RERA Approval</td>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>Completed</td>
                                            </tr>
                                            <tr>
                                                <td>Availability</td>
                                                <td>Selling Fast</td>
                                            </tr>
                                            <tr>
                                                <td>Price</td>
                                                <td>Dial - +91 9876543210</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->


        <!-- Amanites Start -->
        <section id="Amenities">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Amenities</h1>

                    </div>
                    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/swimming-pool.jpg"
                                    alt="Swimming Pool">
                                <div class="ps-3 mt-3 text-center">
                                    <h3 class="fw-bold mb-1">Swimming Pool</h3>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/club-house.jpg" alt="Club House">
                                <div class="ps-3 mt-3 text-center">
                                    <h4 class="fw-bold mb-1">Club House</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/park.jpg" alt="Park">
                                <div class="ps-3 mt-3 text-center">
                                    <h4 class="fw-bold mb-1">Landscape Garden</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/water-supply.jpg"
                                    alt="Water Supply">
                                <div class="ps-3 mt-3 text-center">
                                    <h4 class="fw-bold mb-1">Water supply from CIDCO</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/power-infa.jpg"
                                    alt="Power Infrastructure">
                                <div class="ps-3 mt-3 text-center">
                                    <h4 class="fw-bold mb-1">Power Infrastructure</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/wide-main.jpg" alt="artery road">
                                <div class="ps-3 mt-3 text-center">
                                    <h4 class="fw-bold mb-1">12 Mt. Wide Main Artery Road</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/internal-road.jpg"
                                    alt="internal road">
                                <div class="ps-3 mt-3 text-center">
                                    <h4 class="fw-bold mb-1">6-9 Mt. Wide Internal Road</h4>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="bg-white border rounded p-4">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/paved-compount.jpg"
                                    alt="Paved Compound">
                                <div class="ps-3 mt-3 text-center">
                                    <h4 class="fw-bold mb-1">Paved Compound</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Amanites End -->

        <!-- features start -->
        <section id="features">

            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Key Features</h1>

                </div>
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="specification-item">
                            <span class="icon">⭐</span>
                            <p class="specification-text mt-2">
                                Strategically located within the Karnala Sai Chirner new town (Third Bombay).
                                <a href="img/रायगड प्रदेशातील 124 गावे सुचना.pdf" class="blinking-link"
                                    target="_blank">(Govt Notification)</a>
                            </p>
                        </div>

                        <div class="specification-item">
                            <span class="icon">⭐</span>
                            <p class="specification-text mt-3">
                                The project falls under Regional Town Planning Maharashtra.
                            </p>
                        </div>
                        <div class="specification-item">
                            <span class="icon">⭐</span>
                            <p class="specification-text mt-3">
                                FSI- 1:1 (100%) with separate 7/12 abstract (Present).
                            </p>
                        </div>
                        <div class="specification-item">
                            <span class="icon">⭐</span>
                            <p class="specification-text mt-4">
                                Adjacent to Navi Mumbai Airport Influence Notified Area(NAINA)
                            </p>
                        </div>
                        <div class="specification-item">
                            <span class="icon">⭐</span>
                            <p class="specification-text mt-4">
                                Residents enjoy tranquil life in the project
                                <a href="https://maps.app.goo.gl/SyKoy8KcDXqsJyE48" class="blinking-link"
                                    target="_blank">(Click here)</a>
                            </p>
                        </div>


                    </div>
                    <!-- Right Column -->
                    <div class="col-md-6">

                        <div class="specification-item">
                            <span class="icon">⭐</span>
                            <p class="specification-text mt-3">
                                Easy access to NH66, PNP port and Pen railway station
                            </p>
                        </div>
                        <div class="specification-item">
                            <span class="icon">⭐</span>
                            <p class="specification-text mt-2">
                                Major tourist destinations like Karnala Bird Sanctuary, Ballaleshwar Ganesh Temple are
                                accessible in less than 1 hour.
                            </p>
                        </div>
                        <div class="specification-item">
                            <span class="icon">⭐</span>
                            <p class="specification-text mt-2">
                                HubSpot for discerning homebuyers and investors desiring a tranquil retreat.
                            </p>
                        </div>
                        <div class="specification-item">
                            <span class="icon">⭐</span>
                            <p class="specification-text mt-2">
                                Close to Chitrakutir Kalagram, a fully developed an artist colony comprised of 80
                                bungalows spread over 16 acres.
                            </p>
                        </div>
                        <div class="specification-item">
                            <span class="icon">⭐</span>
                            <p class="specification-text mt-4">
                                Surrounded by stunning sites for film and advertisement shoots
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Features end -->

        <!-- plans -->
        <section id="plans">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Plans</h1>

                    </div>

                    <div class="row">
                        <img src="img/3_page-0001.jpg" alt="Plan Image" height="950px" width="100%">
                    </div>
                </div>
            </div>
        </section>
        <!-- plans end -->


        <!-- Location Start -->
        <section id="location">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Nearby Locations</h1>

                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/road.png" alt="Icon">
                                    </div>
                                    <h6>Mumbai-Goa National Highway [66] via the Pen Bypass</h6>
                                    <span>5 minutes (3.5 KM) </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/airport.png" alt="Icon">
                                    </div>
                                    <h6>Navi Mumbai International Airport, Raigad</h6>
                                    <span>45 Min drive (36 KM) </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/point.png" alt="Icon">
                                    </div>
                                    <h6>South Mumbai/Nariman Point</h6>
                                    <span>1 hour drive (64 KM) </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <div class=" rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/railway.png" alt="Icon">
                                    </div>
                                    <h6><br>Pen<br> Railway station </h6>
                                    <span>10 min drive (6 KM) </span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <div class=" rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/route.png" alt="Icon">
                                    </div>
                                    <h6>Less than an<br> hour drive from from Alibug </h6>
                                    <span>34 KM</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/location.png" alt="Icon">
                                    </div>
                                    <h6><br>India’s largest theme park Adlabs Imagica </h6>
                                    <span>30 min drive (25 KM)</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/coke-plant.png" alt="Icon">
                                    </div>
                                    <h6><br>Coke Oven Plant, JSW Steel Ltd </h6>
                                    <span>16 min drive (16 KM)</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="img/shopping-bag.png" alt="Icon">
                                    </div>
                                    <h6><br>Pen<br>Market</h6>
                                    <span>10 min drive (2 KM) </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Location End -->

        <!-- FAQ Start -->
        <section id="faq">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h2 class="mb-3">Frequently Asked Questions</h2>

                    </div>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseOne" aria-expanded="true"
                                    aria-controls="faqCollapseOne">
                                    Where is Tarun Plantation located?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Tarun Plantation is offering plots at Village: Ambeghar, Pen Khopli Road, Taluka:
                                    Pen, District: Raigad, Maharashtra - 402107.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseTwo" aria-expanded="false"
                                    aria-controls="faqCollapseTwo">
                                    What is the size of Residential Plots?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The project offers 182 plots ranging in size from XXX to XXX square meters.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseThree" aria-expanded="false"
                                    aria-controls="faqCollapseThree">
                                    Why should one buy at Tarun Plantation?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Prime reason to buy plot at Tarun Plantation is strategic location, amenities and
                                    future growth potential.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseFour" aria-expanded="false"
                                    aria-controls="faqCollapseFour">
                                    What are the amenities of Tarun Plantation?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    • 12 Mt. Wide Main Artery Road<br>
                                    • 6-9 Mt. Wide Internal Road<br>
                                    • Club House<br>
                                    • Landscape Garden<br>
                                    • Swimming Pool<br>
                                    • Cycling Track<br>
                                    • Water supply from CIDCO<br>
                                    • Power Infrastructure<br>
                                    • Paved Compound


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseFive" aria-expanded="false"
                                    aria-controls="faqCollapseFive">
                                    Is Tarun Plantation a RERA approved project?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, Tarun Plantation is a RERA approved Non Agricultural plotted development.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ End -->



        <!-- EMI Calculator -->
        <div class="container mt-2">
            <h2 class="text-center">EMI Calculator</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                    <form id="emiForm">
                        <div class="mb-1">
                            <label for="loanAmount" class="form-label">Loan Amount (₹):</label>
                            <input type="range" class="form-range" id="loanAmount" min="50000" max="5000000"
                                step="10000" value="1000000">
                            <span id="loanAmountDisplay" class="fw-bold">₹1,000,000</span>
                        </div>
                        <div class="mb-1">
                            <label for="interestRate" class="form-label">Annual Interest Rate (%):</label>
                            <input type="range" class="form-range" id="interestRate" min="1" max="20" step="0.1"
                                value="10">
                            <span id="interestRateDisplay" class="fw-bold">10%</span>
                        </div>
                        <div class="mb-1">
                            <label for="loanTenure" class="form-label">Loan Tenure (years):</label>
                            <input type="range" class="form-range" id="loanTenure" min="1" max="30" step="1" value="10">
                            <span id="loanTenureDisplay" class="fw-bold">10 years</span>
                        </div>
                        <button type="button" class="btn btn-primary" id="calculateEMI">Calculate EMI</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="mt-2 text-center">
                        <h4>EMI: <span id="emiDisplay">₹0</span></h4>
                    </div>
                    <canvas id="emiChart"></canvas>

                </div>
            </div>
        </div>
        <!-- Emi Calculator End -->




        <div id="side-form" class="side-form hidden">
            <span class="close-icon" id="close-form">&times;</span>
            <h3 class="text-center mb-2">Book a Visit</h3>
            <form>
                <!-- Name Field -->
                <div class="mb-2">

                    <input type="text" class="form-control" id="name" placeholder="Name" required />
                </div>
                <!-- Email Address Field -->
                <div class="mb-2">

                    <input type="email" class="form-control" id="email" placeholder="Email" required />
                </div>
                <!-- Phone Field -->
                <div class="mb-2">
                    <input type="tel" class="form-control" id="phone" placeholder="Phone" required
                        pattern="^\+?[1-9]\d{1,14}$"
                        title="Phone number must be in international format (e.g. +1234567890)" />
                </div>

                <!-- Message Field -->
                <div class="mb-2">

                    <textarea class="form-control" id="message" rows="2" placeholder="Message"></textarea>
                </div>
                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>




        <!-- Contact Start -->
        <section id="contact">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">Contact Us</h1>

                    </div>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="row gy-4">
                                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">

                                    <div class="d-flex align-items-center bg-white rounded p-3"
                                        style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-map-marker-alt text-primary"></i>
                                        </div>
                                        <span>P4Q9+PM6, Taluka-Pen, Dist. Raigad, Ambeghar, Maharashtra 410201 </span>
                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">

                                    <div class="d-flex align-items-center bg-white rounded p-3"
                                        style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-envelope-open text-primary"></i>
                                        </div>
                                        <span>info@example.com</span>
                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">

                                    <div class="d-flex align-items-center bg-white rounded p-3"
                                        style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-phone-alt text-primary"></i>
                                        </div>
                                        <span>+012 345 6789</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <iframe class="position-relative rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d719.5041210225505!2d73.11850606946639!3d18.73927946891348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be80b1d8e64b7b5%3A0x366cbe46de7188fb!2sTarun%20Plantations%20Company!5e1!3m2!1sen!2sin!4v1732605346241!5m2!1sen!2sin"
                                frameborder="0" style="min-height: 400px; border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="col-md-6">
                            <div class="wow fadeInUp" data-wow-delay="0.5s">
                                <p class="mb-4">Contact us for expert real estate services, whether buying, selling, or
                                    renting. Our team offers personalized guidance, market insights, and dedicated
                                    support to help you achieve your property goals </p>
                                <form method="post">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Your Name" name="name" required>
                                                <label for="name">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Your Email" name="email" required>
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="subject"
                                                    placeholder="Subject" name="subject" required>
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here"
                                                    id="message" style="height: 150px" name="message"
                                                    required></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit" name="send">Send
                                                Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer  wow fadeIn" data-wow-delay="0.1s">

            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12 text-center mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Tarun Plantations</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <a href="https://wa.me/1234567890" target="_blank" class="btn btn-lg btn-primary btn-lg-square whatsapp"><i
                class="bi bi-whatsapp"></i></a>
        <a href="tel:+1234567890" class="btn btn-lg btn-secondary btn-lg-square call"><i
                class="bi bi-telephone"></i></a>
        <a href="#" class="btn btn-lg btn-dark btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>