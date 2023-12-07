<?php
session_start();
include "db_connect.php";

if(isset($_POST['brukernavn']) && isset($_POST['passord'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


$brukernavn = validate($_POST['brukernavn']);
$passord = validate($_POST['passord']);

if(empty($brukernavn)) {
    header ("Location: index.php?error=Username is required!");
    exit();
}
else if(empty($passord)) {
    header ("Location: index.php?error=Password is required!");
    exit();
}

$sql = "insert into kunde(username, password) values ('$brukernavn', '$passord')"; 

$result = mysqli_query($conn, $sql);
header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>



<h1></h1>
<div class="registrer">
<form  method="post">
    <h2>Registrer:</h2>
    <label>Bruker: </label>
    <input type="text" name="brukernavn" placeholder="Brukernavn"><br/>
    <label>Passord: </label>
    <input type="password" name="passord" placeholder="Passord"><br/>
    <label>E-post</label>
    <input type="text" name="e-post"><br>
    <label>Telefon nummer</label>
    <input type="text" name="nummer"><br>
    <label>Adresse </label>
    <input type="text" name="Adresse"><br>
    <button type="submit">Registrer</button><br/>
</form>

<a href="index.php">Log in</a>
</div>
</body>
</html>