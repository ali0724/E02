<?php
// visit_form.php

// Connect to DB
$conn = new mysqli("localhost", "root", "", "hospital_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch patient list
$patients = $conn->query("SELECT patientID, first_name, last_name FROM patients ORDER BY last_name");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visit and Treatment</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">
</head>
<body>

<div class="container">
<a href="../../index.php" class="btn">back</a><br>
    <h1 style="text-align: center;">Visit and Treatment Form</h1>
    <form action="process_visit.php" method="post" style="max-width: 500px; margin: auto;">
        <label for="patient_id">Select Patient:</label><br>
        <select id="patient_id" name="patient_id" required>
            <option value="">-- Select Patient --</option>
            <?php while($row = $patients->fetch_assoc()): ?>
                <option value="<?= $row['patientID'] ?>">
                    <?= $row['last_name'] . ", " . $row['first_name'] ?>
                </option>
            <?php endwhile; ?>
        </select><br><br>

        <label for="visit_date">Visit Date:</label><br>
        <input type="date" id="visit_date" name="visit_date" required><br><br>

        <label for="symptoms">Symptoms:</label><br>
        <textarea name="symptoms" rows="3" required></textarea><br><br>

        <label for="diagnosis">Diagnosis:</label><br>
        <textarea name="diagnosis" rows="3" required></textarea><br><br>

        <label for="treatment">Treatment:</label><br>
        <textarea name="treatment" rows="3" required></textarea><br><br>

        <label for="followup_date">Follow-up Date:</label><br>
        <input type="date" name="followup_date"><br><br>

        <button type="submit" class="index1_btn">Submit</button>
    </form>
</div>

</body>
</html>
