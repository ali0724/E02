<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Table</title>
    <link rel="stylesheet" href="../../assets/css/style2.css">
</head>
<body>

<?php
include "../../assets/db/dbcon.php";

// --- Patient Records ---
echo "<h2>Patient Records</h2>";
$sql = "SELECT * FROM patients";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th>
            <th>Birthday</th><th>Age</th><th>Gender</th><th>Nationality</th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row["patientID"]}</td>
            <td>{$row["first_name"]}</td>
            <td>{$row["middle_name"]}</td>
            <td>{$row["last_name"]}</td>
            <td>{$row["birthday"]}</td>
            <td>{$row["age"]}</td>
            <td>{$row["gender"]}</td>
            <td>{$row["nationality"]}</td>
        </tr>";
    }
    echo "</table><br><br>";
} else {
    echo "No patient records found.<br><br>";
}

// --- Visit and Treatment Records ---
echo "<h2>Visit and Treatment Records</h2>";
$sql2 = "SELECT vt.*, p.first_name, p.last_name 
         FROM visit_treatment vt
         JOIN patients p ON vt.patient_id = p.patientID
         ORDER BY vt.visit_date DESC";

$result2 = $con->query($sql2);

if ($result2->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>ID</th><th>Patient</th><th>Visit Date</th><th>Symptoms</th>
            <th>Diagnosis</th><th>Treatment</th><th>Follow-up Date</th>
        </tr>";
    while ($row = $result2->fetch_assoc()) {
        echo "<tr>
            <td>{$row["id"]}</td>
            <td>{$row["last_name"]}, {$row["first_name"]}</td>
            <td>{$row["visit_date"]}</td>
            <td>{$row["symptoms"]}</td>
            <td>{$row["diagnosis"]}</td>
            <td>{$row["treatment"]}</td>
            <td>{$row["followup_date"]}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No visit/treatment records found.";
}

$con->close();

echo '<br><br><a href="../../index.php" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">Back to Home</a>';
?>

</body>
</html>
