<?php session_start();

$_SESSION['counter'] ??= 0;
$_SESSION['counter']++;
$_SESSION['username'] = "Tillal Saeed 2024";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<H1>You have visited paged <?php echo $_SESSION['counter']; ?></H1>
<a href="getsession.php">Get Session</a>

<!-- Cookies Store Information in Browser whereas Session Store in server
    -- When the session is created and that infromation save in server side it create unique session id and write the session id in the cookie and base of Session id which is exchanged in every request and response the server can understand who the browser is.
-->


    
</body>
</html>