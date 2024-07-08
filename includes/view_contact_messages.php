<?php

require_once("db_connect.php");

// Include the header template
include_once("../templates/header.php");

// Include the navigation template
include_once("../templates/nav.php");

// Check if the 'DelId' parameter is set in the URL
if (isset($_GET["DelId"])) {
    // Escape special characters in the 'DelId' parameter to prevent SQL injection
    $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);
    
    // SQL query to delete a record from the 'contact_us' table where the messageId matches 'DelId'
    $del_msg = "DELETE FROM `contact_us` WHERE messageId='$DelId' LIMIT 1";
    
    // Execute the SQL query and check if it was successful
    if ($conn->query($del_msg) === TRUE) {
        // If the query was successful, redirect to 'view_contact_messages.php'
        header("Location: view_contact_messages.php");
        exit();
    } else {
        // If there was an error, display an error message
        echo "Error deleting record: " . $conn->error;
    }
}
?>

 <link rel="stylesheet" href="../css/contact_us.css">
<div class="header">
    <h1>Contact Form Messages</h1>
</div>
        
<div class="row">
    <div class="content">
        <h1>Messages</h1>
        <p>Below are the messages submitted through the contact form.</p>
        <table>
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
<?php
$select_msg = "SELECT * FROM `contact_us` ORDER BY dateSubmitted DESC";
$sel_msg_res = $conn->query($select_msg);
$cm = 0;
if ($sel_msg_res->num_rows > 0) {
    while ($sel_msg_row = $sel_msg_res->fetch_assoc()) {
        $cm++;
?>
                <tr>
                    <td><?php echo $cm; ?>.</td>
                    <td><?php echo htmlspecialchars($sel_msg_row["fullname"]); ?></td>
                    <td><?php echo htmlspecialchars($sel_msg_row["email"]); ?></td>
                    <td><?php echo '<strong>' . substr(htmlspecialchars($sel_msg_row["message"]), 0, 25) . '...</strong>'; ?></td>
                    <td><?php echo date("d-M-Y H:i", strtotime($sel_msg_row["dateSubmitted"])); ?></td>
                   
                    <td>[ <a href="?DelId=<?php echo $sel_msg_row["messageId"]; ?>" onclick="return confirm('Are you sure you want to delete this message permanently from the database?')">Del</a> ] 
                    [ <a href="update_contact.php?messageId=<?php echo $sel_msg_row["messageId"]; ?>">Edit</a> ]</td>

                </tr>

<?php
    }
} else {
    echo "<tr><td colspan='6'>No results found</td></tr>";
}
?>
            </tbody>
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
    
</div>      
<?php include_once("../templates/footer.php"); ?>
