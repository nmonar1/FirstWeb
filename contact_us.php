<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact_us.css">
    
</head>
<body>
<?php include_once("templates/nav.php");?>
   
    <div class="container">
        <h1>Get in touch with us !</h1>
        
        <h2>Address:</h2>
        <ul>
            <li>Ethereal Essence Beauty</li>
            <li> Yaya Centre 1st floor</li>
            <li>Arwings Kodhek Road</li>
            
        </ul>
        
        <h2>Phone:</h2>
        <ul>
            <li>Customer Service: 07111222333</li>
        </ul>
        
        <h2>Email:</h2>
        <ul>
            <li>General Inquiries:information@etherealessencebeauty.com</a></li>
            <li>Customer Support:support@etherealessencebeauty.com</a></li>
        </ul>
        
        <h2>Social Media:</h2>
        <ul>
            <li>Facebook: <a href="https://www.facebook.com/EtherealEssencesss">EtherealEssenceBeauty</a></li>
            <li>Instagram: <a href="https://www.instagram.com/EtherealEssencesss">EtherealEssenceBeauty</a></li>
            <li>X: <a href="https://twitter.com/EtherealEssencesss">EtherealEssenceBeauty</a></li>
        </ul>
        
        <h2>Contact Form:</h2>
        <form action="">
            <label for="Fn">Fullname:</label><br>
            <input type ="text" id = "Fn"placeholder="enter name"><br>
    
            <label for="email">Email:</label><br>
            <input type ="text" id = "email"placeholder="email address"><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>

            <input type="submit" value="Send">
            
    
        </form>

        
        <h2>Operating Hours:</h2>
        <ul>
            <li>Monday - Friday: 8:00 AM - 6:00 PM</li>
            <li>Saturday: 10:00 AM - 5:00 PM</li>
            <li><b>Closed on Sundays and Public holidays</b></li>
        </ul>
    </div>
</body>
<?php include_once("templates/footer.php");?>
</html>
    
