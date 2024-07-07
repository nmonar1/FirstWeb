<?php
require_once("db_connect.php");
include_once("../templates/header.php");
include_once("../templates/nav.php");

$analysisId = mysqli_real_escape_string($conn, $_GET["analysisId"]);

$spot_analysis = "SELECT * FROM `skin_analysis` WHERE analysisId = '$analysisId' LIMIT 1";
$spot_analysis_res = $conn->query($spot_analysis);
$spot_analysis_row = $spot_analysis_res->fetch_assoc();

if (isset($_POST["update_analysis"])) {
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $skin_type = mysqli_real_escape_string($conn, $_POST["skin_type"]);
    $skin_concerns = mysqli_real_escape_string($conn, $_POST["skin_concerns"]);
    $allergies = mysqli_real_escape_string($conn, $_POST["allergies"]);
    $current_products = mysqli_real_escape_string($conn, $_POST["current_products"]);
    $analysisId = mysqli_real_escape_string($conn, $_POST["analysisId"]);

    $update_analysis = "UPDATE skin_analysis SET fullname = '$fullname', email = '$email', age = '$age', gender = '$gender', skin_type = '$skin_type', skin_concerns = '$skin_concerns', allergies = '$allergies', current_products = '$current_products' WHERE analysisId='$analysisId' LIMIT 1";
  
    if ($conn->query($update_analysis) === TRUE) {
        header("Location: view_skin_analysis.php");
        exit();
    } else {
        echo "Error: " . $update_analysis . "<br>" . $conn->error;
    }
}
?>


<link rel="stylesheet" href="../css/contact_us.css">
<div class="header">
    <h1>Update Skin Analysis Feedback</h1>
</div>

<div class="row">
    <div class="content">
        
        <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contact_form">
            <label for="Fn">Fullname:</label><br>
            <input type="text" name="fullname" id="Fn" placeholder="Fullname" required value="<?php print $spot_analysis_row["fullname"]; ?>"><br><br>

            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" placeholder="Email address" required value="<?php print $spot_analysis_row["email"]; ?>"><br><br>

            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" placeholder="Age" required value="<?php print $spot_analysis_row["age"]; ?>"><br><br>

            <label for="gender">Gender:</label><br>
            <select name="gender" id="gender" required>
                <option value="<?php print $spot_analysis_row["gender"]; ?>"><?php print $spot_analysis_row["gender"]; ?></option>
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="non_binary">Non-binary</option>
                <option value="prefer_not_to_say">Prefer not to say</option>
            </select><br><br>

            <label for="skin_type">Skin Type:</label><br>
            <select name="skin_type" id="skin_type" required>
                <option value="<?php print $spot_analysis_row["skin_type"]; ?>"><?php print $spot_analysis_row["skin_type"]; ?></option>
                <option value="normal">Normal</option>
                <option value="dry">Dry</option>
                <option value="oily">Oily</option>
                <option value="combination">Combination</option>
                <option value="sensitive">Sensitive</option>
            </select><br><br>

            <label for="skin_concerns">Skin Concerns:</label><br>
            <textarea cols="30" rows="7" name="skin_concerns" id="skin_concerns" required><?php print $spot_analysis_row["skin_concerns"]; ?></textarea><br><br>

            <label for="allergies">Allergies:</label><br>
            <textarea cols="30" rows="7" name="allergies" id="allergies"><?php print $spot_analysis_row["allergies"]; ?></textarea><br><br>

            <label for="current_products">Current Products:</label><br>
            <textarea cols="30" rows="7" name="current_products" id="current_products"><?php print $spot_analysis_row["current_products"]; ?></textarea><br><br>

            <input type="submit" name="update_analysis" value="Update Analysis" >
            <input type="hidden" name="analysisId" value="<?php print $spot_analysis_row["analysisId"]; ?>" >
        </form>
    </div>
</div>

<?php include_once("../templates/footer.php"); ?>
