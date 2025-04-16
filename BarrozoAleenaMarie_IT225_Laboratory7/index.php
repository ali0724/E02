<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Form</title>
    <link rel="stylesheet" href="../assets/css/style1.css">

</head>
<body>

<div class="container">

<h1 style="font-size: 60px;font-style:italic; margin-bottom: 0px">Welcome</h1>
<div style="text-align: center; margin-top: 5px; margin-bottom: 60px; color: white;">Submit a collection form/ View database</div>

        <div style="text-align: center;">
            <form action="pages/register/process.php" method="get">
                <button type="submit" class="index1_btn">Patient Data Collection Form</button><br>
            </form>

            <form action="pages/displaydata/display.php" method="get">
                <button type="submit" class="index1_btn">View Table</button><br>
               
            </form>

            <form action="../../pages/visit/visit_form.php" method="get">
                 <button type="submit" class="index1_btn">Visit and Treatment</button>
            
        </div>
        
</div>


</body>
</html>