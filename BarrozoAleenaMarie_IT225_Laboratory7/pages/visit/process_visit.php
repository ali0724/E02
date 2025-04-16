<?php
$conn = new mysqli("localhost", "root", "", "hospital_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$patient_id = intval($_POST['patient_id']);
$visit_date = $_POST['visit_date'];
$symptoms = $_POST['symptoms'];
$diagnosis = $_POST['diagnosis'];
$treatment = $_POST['treatment'];
$followup_date = $_POST['followup_date'] ?: null;

$sql = "INSERT INTO visit_treatment (patient_id, visit_date, symptoms, diagnosis, treatment, followup_date) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isssss", $patient_id, $visit_date, $symptoms, $diagnosis, $treatment, $followup_date);

if ($stmt->execute()) {
    echo "<h2 style='text-align: center;'>Visit record added successfully!</h2>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
