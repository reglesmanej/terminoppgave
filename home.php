<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
    ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1> Hei, <?php echo $_SESSION['username']; ?> </h1>
    <a href="logout.php">Logg ut</a>
</body>
</html>

<?php
}
else {
    header("Location: index.php");
    exit();
}

?>