<?php
require_once("db_connect.php");
include_once("../templates/header.php");
include_once("../templates/nav.php");

if (isset($_GET["DelId"])) {
    $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);
    
    // SQL to delete a record
    $del_analysis = "DELETE FROM `skin_analysis` WHERE analysisId='$DelId' LIMIT 1";
    
    if ($conn->query($del_analysis) === TRUE) {
        header("Location: view_skin_analysis.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
<div class="header">
    <h1>Skin Analysis Feedback</h1>
</div>
        
<div class="row">
    <div class="content">
        <h1>Skin Analysis Feedback</h1>
        <p>Below are the feedbacks submitted through the skin analysis form.</p>
        <table>
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Skin Type</th>
                    <th>Skin Concerns</th>
                    <th>Allergies</th>
                    <th>Current Products</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
<?php
$select_analysis = "SELECT * FROM `skin_analysis` ORDER BY dateSubmitted DESC";
$sel_analysis_res = $conn->query($select_analysis);
$ca = 0;
if ($sel_analysis_res->num_rows > 0) {
    while ($sel_analysis_row = $sel_analysis_res->fetch_assoc()) {
        $ca++;
?>
                <tr>
                    <td><?php echo $ca; ?>.</td>
                    <td><?php echo htmlspecialchars($sel_analysis_row["fullname"]); ?></td>
                    <td><?php echo htmlspecialchars($sel_analysis_row["email"]); ?></td>
                    <td><?php echo htmlspecialchars($sel_analysis_row["age"]); ?></td>
                    <td><?php echo htmlspecialchars($sel_analysis_row["gender"]); ?></td>
                    <td><?php echo htmlspecialchars($sel_analysis_row["skin_type"]); ?></td>
                    <td><?php echo '<strong>' . substr(htmlspecialchars($sel_analysis_row["skin_concerns"]), 0, 25) . '...</strong>'; ?></td>
                    <td><?php echo htmlspecialchars($sel_analysis_row["allergies"]); ?></td>
                    <td><?php echo '<strong>' . substr(htmlspecialchars($sel_analysis_row["current_products"]), 0, 25) . '...</strong>'; ?></td>
                    <td><?php echo date("d-M-Y H:i", strtotime($sel_analysis_row["dateSubmitted"])); ?></td>
                    <td>[ <a href="?DelId=<?php echo $sel_analysis_row["analysisId"]; ?>" onclick="return confirm('Are you sure you want to delete this feedback permanently from the database?')">Del</a> ]</td>
                </tr>
<?php
    }
} else {
    echo "<tr><td colspan='11'>No results found</td></tr>";
}
?>
            </tbody>
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Skin Type</th>
                    <th>Skin Concerns</th>
                    <th>Allergies</th>
                    <th>Current Products</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
   
</div>      
<?php include_once("../templates/footer.php"); ?>
