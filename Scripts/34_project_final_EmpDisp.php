<html lang="en" style="background-color: beige">
<?php
$userDetsQuery = $_GET['userDets'];
$userDets = array();
parse_str($userDetsQuery, $userDets);

$userName = $userDets[0];
$custNo = $userDets[1];

echo $userName;

echo $userName;

/**
 * Created by PhpStorm.
 * User: anmolsingh
 * Date: 2018-03-13
 * Time: 10:36 AM
 */
require "34_project_final_SQLQuery.php";
$conn = oraConnect();
if (!$conn) {
    exit;
}
else {
    print "Connected to Oracle!";
}
?>

<head>
    <meta charset="UTF-8">
    <title>PUser Home</title>
</head>
<body>
<div align="center" style="margin-bottom: 40px; margin-top: 20px; background-color: red">
    <b style="font-family: 'American Typewriter'; font-size: 30px">
        <a href="34_project_final_EmpDisp.php?userDets=<?php echo $userDetsQuery; ?>" style="text-decoration: none; color: #000000;">
            PharmTech
        </a>
    </b>
</div>
<div class="container" align="center" style="margin-top: 20px;">
    <a href="34_project_final_FillPrescription.php?userDets=<?php echo $userDetsQuery; ?>" style="text-decoration: none; color: #000000; font-size: 15px; font-family: 'American Typewriter';">
        Fill Prescriptions
    </a>
</div>
<div class="container" align="center" style="margin-top: 20px;">
    <a href="34_project_final_FillStock.php?userDets=<?php echo $userDetsQuery; ?>" style="text-decoration: none; color: #000000; font-size: 15px; font-family: 'American Typewriter';">
        Restock
    </a>
</div>
<div class="container" align="center" style="margin-top: 20px;">
    <a href="34_project_final_DeleteUser.php?userDets=<?php echo $userDetsQuery?>" style="text-decoration: none; color: #000000; font-size: 15px; font-family: 'American Typewriter';">
        Delete User
    </a>
</div>
<div class="container" align="center" style="margin-top: 20px;">
    <a href="../Interfaces/34_project_final_LoginPage.html" style="text-decoration: none; color: #000000; font-size: 15px; font-family: 'American Typewriter';">
        Logout
    </a>
</div>
</body>
</html>