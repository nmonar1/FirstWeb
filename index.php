<?php include_once("templates/header.php");?> <!-- Include the header template -->
<?php include_once("templates/nav.php");?> <!-- Include the navigation template -->
<title>Home</title>
<!-- Link to CSS file -->
<link rel="stylesheet" href="css/index.css"> 
<!-- Link to Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <!-- Link to Bootstrap JS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Link to Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- Link to Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  
    <h2><b>Welcome to Ethereal Essence Beauty!</b></h2>

    <!-- Bootstrap carousel for image slideshow -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- First image in the carousel -->
            <div class="carousel-item active">
                <img src="images/Curly_Hair_Goals.jpeg" class="d-block w-100" alt="Curly Hair Goals">
            </div>
            <!-- Second image in the carousel -->
            <div class="carousel-item">
                <img src="images/shades.jpeg" class="d-block w-100" alt="Shades">
            </div>
            <!-- Third image in the carousel -->
            <div class="carousel-item">
                <img src="images/Clean_Girl_Aesthetic.jpeg" class="d-block w-100" alt="Clean Girl Aesthetic">
            </div>
        </div>
        <!-- Carousel previous control -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <!-- Carousel next control -->
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Main content container -->
    <div class="container">
        <!-- Image container for the owner -->
        <div class="image-container">
            <img src="images/owner.jpeg" alt="Owner" class="image4">
        </div>

        <!-- Sidebar with About section -->
        <div class="sidebar">
            <h3>About</h3>
            <p>
                In 2016, a new beauty brand emerged, founded by Leilani Lindiwe, who had a profound love for beauty and a desire to revolutionize the industry. Later in 2018 Ethereal Essence Beauty quickly captured the hearts of consumers with its innovative, luxurious, and affordable beauty solutions that fused age-old wisdom with cutting-edge technology making sales take off. 
                Over the years, Ethereal Essence Beauty continued to gain momentum, earning a reputation for affordability and inclusivity. With Leilani's dedication...
            </p>
            <br>
            <a href="about.php">
                <button>Learn more</button> <!-- Button to link to the 'About' page -->
            </a>
        </div>
    </div>

    <?php include_once("templates/footer.php");?> <!-- Include the footer template -->
</body>
</html>
