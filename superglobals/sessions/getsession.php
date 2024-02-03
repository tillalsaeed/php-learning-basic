<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Username</title>
</head>
<body>

<?php if($_SESSION['username'] !== "Waqas"){
    header("Location: sessions.php");
 
}?>
    
</body>
</html>