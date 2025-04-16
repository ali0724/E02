<?php
include "../../assets/db/dbcon.php"; // Include database connection


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($con, $_POST['middle_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $age = (int) $_POST['age']; 
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $nationality = mysqli_real_escape_string($con, $_POST['nationality']);

    // SQL Insert Query
    $sql = "INSERT INTO patients (first_name, middle_name, last_name, birthday, age, gender, nationality) 
            VALUES ('$first_name', '$middle_name', '$last_name', '$birthday', $age, '$gender', '$nationality')";

    // Execute the query
    if ($con->query($sql) === TRUE) {
        ("location: pages/register/process.php");
    
        
    
    } else {
        echo "Error: " . $con->error;
    }

    // Close connection
    $con->close();
}
?>
