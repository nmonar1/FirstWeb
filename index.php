<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="css/index.css"> <!--link to css file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    
  <?php include_once("templates/nav.php");?>
  
    
    <h2><b>Welcome to Ethereal Essence Beauty!</b></h2>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
             
              <img src="images/Curly_Hair_Goals.jpeg" class="d-block w-100"alt="" class="image1">
  
            </div>
            <div class="carousel-item">
                <img src="images/shades.jpeg" class="d-block w-100"alt="" class="image2">
            </div>
            <div class="carousel-item">
                <img src="images/Clean_Girl_Aesthetic.jpeg" class="d-block w-100"alt="" class="image3">
  
            </div>
          </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <div class="container">
        <div class="image-container">
            <img src="images/owner.jpeg" alt="" class="image4"> 
         </div>

        <div class="sidebar">
            <h3>About</h3>
            <p>In 2016, a new beauty brand emerged, founded by Leilani Lindiwe, who had a profound love for beauty and a desire to revolutionize the industry. Later in 2018 Ethereal Essence Beauty quickly captured the hearts of consumers with its innovative, luxurious, and affordable beauty solutions that fused age-old wisdom with cutting-edge technology making sales take off. 
                Over the years, Ethereal Essence Beauty continued to gain momentum, earning a reputation for affordability and inclusivity. With Leilani's dedication...
            </p>
                <br>
                <a href="about.php">
                <button>Learn more</button>
                </a>
            </div>
    </div>
    
    <?php include_once("templates/footer.php");?>
</body>
</html>
