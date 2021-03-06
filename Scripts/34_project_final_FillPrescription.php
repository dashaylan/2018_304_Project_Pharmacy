<!DOCTYPE html>
<html lang="en" style="background-color: beige">

<head>
    <meta charset="UTF-8">
    <title>Pharmtech - Prescription</title>
</head>

<body>
<form action="34_project_final_Prescription.php?userDets=<?php echo $userDetsQuery; ?>" method="get">
    <div align="center" style="margin-bottom: 40px; margin-top: 20px; background-color: red">
        <b style="font-family: 'American Typewriter'; font-size: 30px">
            <a href="34_project_final_SQLConnect.php" style="text-decoration: none; color: #000000;">
                PharmTech
            </a>
        </b>
    </div>
    <div class="container" align="center">
        <input name="refill" type="number" min="0" name="refill" placeholder="Refill" required>
    </div>
    <div class="container" align="center">
        <input name="expire" type="date" name="expire" placeholder="Expiration (YYYY-MM-DD)" required>
    </div>
    <div class="container" align="center">
        <input name="c_num" type="number" name="c_num" placeholder="Customer Number" required>
    </div>
    <div class="container" align="center">
        <input name="u_name" type="text" name="u_name" placeholder="Username" required>
    </div>
    <div class="container" align="center">
        <input name="issued_d" type="date" name="issued_d" placeholder="Issued Date (YYYY-MM-DD)" required>
    </div>
    <div class="container" align="center" style="margin-top: 20px;">
        <button type="submit">Submit</button>
    </div>
</form>

</body>
