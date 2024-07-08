<?php
// Include the database connection file
require_once("db_connect.php");

// Include the header and navigation templates
include_once("../templates/header.php");
include_once("../templates/nav.php");

// Sanitize the messageId received from the GET request to prevent SQL injection
$messageId = mysqli_real_escape_string($conn, $_GET["messageId"]);

// Fetch the message from the contact_us table based on the messageId
$spot_msg = "SELECT * FROM `contact_us` WHERE messageId = '$messageId' LIMIT 1";
$spot_msg_res = $conn->query($spot_msg);
$spot_msg_row = $spot_msg_res->fetch_assoc();

// Check if the form to update the message has been submitted
if (isset($_POST["update_message"])) {
    // Sanitize the input fields received from the POST request to prevent SQL injection
    //mysqli_real_escape_string is used to escape all special characters for use in an SQL query.
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);
    $messageId = mysqli_real_escape_string($conn, $_POST["messageId"]);
    


    // Update the message in the contact_us table based on the messageId
    $update_message = "UPDATE contact_us SET fullname = '$fullname', email = '$email', message = '$message' WHERE messageId='$messageId' LIMIT 1";

    // Check if the update query was successful and redirect to the view_contact_messages page
    if ($conn->query($update_message) === TRUE) {
        //Redirects the user to the view_contact_messages.php page if the update was successful.
        header("Location: view_contact_messages.php");
        exit();

    } else {
        // Display an error message if the update query failed
        echo "Error: " . $update_message . "<br>" . $conn->error;
    }
}
?>


<link rel="stylesheet" href="../css/contact_us.css">
<div class="header">
    <h1>Update Contact Message</h1>
</div>

<div class="row">
    <div class="content">
        
        <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form">
            <label for="Fn">Fullname:</label><br>
            <input type="text" name="fullname" id="Fn" placeholder="Fullname" required value="<?php print $spot_msg_row["fullname"]; ?>"><br><br>

            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" placeholder="Email address" required value="<?php print $spot_msg_row["email"]; ?>"><br><br>
            
            <label for="ms">Message:</label><br>
            <textarea cols="30" rows="7" name="message" id="ms" required><?php print $spot_msg_row["message"]; ?></textarea><br><br>
            
            <input type="submit" name="update_message" value="Update Message" >
            <input type="hidden" name="messageId" value="<?php print $spot_msg_row["messageId"]; ?>" >
        </form>
    </div>
</div>

<?php include_once("../templates/footer.php"); ?>
