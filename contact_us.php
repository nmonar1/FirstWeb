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
        <form action="includes/submit_contact.php" method="post">
            <label for="Fn">Fullname:</label><br>
            <input type="text" id="Fn" name="fullname" placeholder="enter name" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="email address" required><br>

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
    <h2>Skin Analysis Form:</h2>
        <form action="submit_skin_analysis.php" method="post">
            <label for="name">Full Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required><br>

            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" placeholder="Enter your age" required><br>

            <label for="gender">Gender:</label><br>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Select your gender</option>
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="non_binary">Non-binary</option>
                <option value="prefer_not_to_say">Prefer not to say</option>
            </select><br>

            <label for="skin_type">Skin Type:</label><br>
            <select id="skin_type" name="skin_type" required>
                <option value="" disabled selected>Select your skin type</option>
                <option value="normal">Normal</option>
                <option value="dry">Dry</option>
                <option value="oily">Oily</option>
                <option value="combination">Combination</option>
                <option value="sensitive">Sensitive</option>
            </select><br>

            <label for="skin_concerns">Main Skin Concerns:</label><br>
            <textarea id="skin_concerns" name="skin_concerns" rows="4" placeholder="" required></textarea><br>

            <label for="allergies">Allergies:</label><br>
            <input type="text" id="allergies" name="allergies" placeholder=""><br>

            <label for="current_products">Current Skin Care Products:</label><br>
            <textarea id="current_products" name="current_products" rows="4" placeholder=""></textarea><br>
                <br>
            <input type="submit" value="Submit">
        </form>
        <br>
</body>
<?php include_once("templates/footer.php");?>
</html>
    
