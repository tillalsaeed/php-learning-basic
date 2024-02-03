<?php 

$errormsg = "";

if(isset($_FILES["file"])){
    
    $file = $_FILES["file"];
    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $ext = strtolower($ext);
    if($file['size'] > 5 * 1024 * 1024){
        $errormsg = "You cannot upload bigger file than 5mb";
    } else if(!in_array($ext, ['png', 'jpg', 'jpeg', 'svg'])){
        $errormsg = "You cannot upload this type of file";

    } else {
        move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]['name']);

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo $errormsg; ?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="">
    <button>Submit</button>
</form>
    
</body>
</html>