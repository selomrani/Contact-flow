<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Flow - Hero Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="heroCarousel" class="carousel slide hero-section" data-bs-ride="carousel">
        
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            
            <div class="carousel-item active">
                <div class="hero-overlay"></div> <img src="img/AAAABcuF-ASdk8ggKxXR_kgnbvX1BAotwohyNYWx_jn7ixfCdiToeoYBnF_pXm8sLOqG-yy9Rgu4dUtjKdaiX9QlT4j-tUKRmBouW4zz.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fw-bold">Welcome to Contact Flow</h1>
                    <p class="lead">Streamline your communication effortlessly.</p>
                    <a href="#contact" class="btn btn-primary btn-lg mt-3">Get Started</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-overlay"></div>
                <img src="img/87240dbd-5c19-11f0-b655-025327c09033.avif" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fw-bold">Connect Faster</h1>
                    <p class="lead">Our tools bridge the gap between you and your clients.</p>
                    <button class="btn btn-outline-light btn-lg mt-3">Learn More</button>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-overlay"></div>
                <img src="img/l-intro-1725389701.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fw-bold">Secure & Reliable</h1>
                    <p class="lead">Trust us to handle your data with care.</p>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container my-5">
        <h2>Rest of page content...</h2>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>