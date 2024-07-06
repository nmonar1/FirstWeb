<?php
require_once("db_connect.php");
include_once("../templates/header.php");
include_once("../templates/nav.php");

$messageId = mysqli_real_escape_string($conn, $_GET["messageId"]);

$spot_msg = "SELECT * FROM `contact_us` WHERE messageId = '$messageId' LIMIT 1";
$spot_msg_res = $conn->query($spot_msg);
$spot_msg_row = $spot_msg_res->fetch_assoc();

if (isset($_POST["update_message"])) {
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);
    $messageId = mysqli_real_escape_string($conn, $_POST["messageId"]);

    $update_message = "UPDATE contact_us SET fullname = '$fullname', email = '$email', message = '$message' WHERE messageId='$messageId' LIMIT 1";
  
    if ($conn->query($update_message) === TRUE) {
        header("Location: view_contact_messages.php");
        exit();
    } else {
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
