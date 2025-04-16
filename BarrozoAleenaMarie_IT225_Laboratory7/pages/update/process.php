<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Update Form</title>
    <link rel="stylesheet" href="../../assets/css/style1.css">
</head>
<body>
    
<div class="container-fluid">
   
<div class="container"> 
<a href="../../index.php" class="btn">back</a><br>
    <h2>Update Patient Form</h2>
    <form action="./pages/displaydata/display.php" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>

        <label for="middle_name">Middle Name:</label>
        <input type="text" name="middle_name"><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>

        <label for="birthday">Birthday:</label>
        <input type="date" name="birthday" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br>

        <label for="nationality">Nationality:</label>
        <input type="text" name="nationality" required><br>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>