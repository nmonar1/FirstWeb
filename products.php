<?php include_once("templates/header.php");?> <!-- gives a warning  when there is an error and still displays the page and shows an
 error in the header section-->
<body>
<?php require_once("templates/nav.php");?> <!-- gives a fatal error when there is an error and does not display the whole page  -->
<title>Products</title>
<link rel="stylesheet" href="css/products.css">
<div class="container">
    <div class="row image-row">
        <div class="image-container">
            <img src="images/conditioner.jpeg" alt="" class="image1">
            <p class="caption">Conditioner</p>
        </div>
        <div class="image-container">
            <img src="images/scalp_serum.jpeg" alt="" class="image2">
            <p class="caption">Scalp serum</p>
        </div>
        <div class="image-container">
            <img src="images/Hair_oil.jpeg" alt="" class="image3">
            <p class="caption">Hair oil</p>
        </div>
    </div>
</div>
<a href="haircare.php">
<button >Show more</button>
</a>
<div class="container">
    <div class="row image-row">
        <div class="image-container">
            <img src="images/lip_treatment.jpeg" alt="" class="image1">
            <p class="caption2">Lip gloss kit</p>
        </div>
        <div class="image-container">
            <img src="images/blush.jpeg" alt="" class="image2">
            <p class="caption2">Blush</p>
        </div>
        <div class="image-container">
            <img src="images/eyeshadow_palette.jpeg" alt="" class="image3">
            <p class="caption">Eyeshadow Palette</p>
        </div>
    </div>
</div>
<a href="makeup.php">
    <button >Show more</button>
    </a>
<div class="container">
    <div class="row image-row">
        <div class="image-container">
            <img src="images/glycolic_acid.jpeg" alt="" class="image1">
            <p class="caption">Glycolic acid</p>
        </div>
        <div class="image-container">
            <img src="images/cleanser.jpeg" alt="" class="image2">
            <p class="caption">Cleanser</p>
        </div>
        <div class="image-container">
            <img src="images/sunscreen.jpeg" alt="" class="image3">
            <p class="caption">Sunscreen SPF 50</p>
        </div>
    </div>
</div>
<a href="skincare.php">
    <button >Show more</button>
    </a>
</body>
<br>
	
<?php include_once("templates/footer.php");?>
</html>