<?php 


$keyword = '';

if(isset(isset($_GET['keyword']))){
    $keyword = $_GET['keyword'];

    echo $keyword;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="keyword" placeholder="Type and hit enter" value="<?php echo $Keyword ?>">
        <button>Search</button>
    </form>
</body>
</html>