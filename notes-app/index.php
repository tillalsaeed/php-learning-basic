<?php
 require_once "./includes/CURD.php";




// Create
$post = [];
if(isset($_SERVER['REQUEST_METHOD']) == 'POST'){
    $post = $_POST;
    $db->setNotes($post,"notes");


}

//  Read
$getNot  = $db->getNotes("notes");


// Update


// Delete
if(isset($_POST['submit'])){
    
    $id = $_POST['delete_note'];
    $db->removeNotes($id, 'notes');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes App</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="title" placeholder="Please Enter Title">
    <textarea name="description"  id="" cols="30" rows="10" placholder="Note Description"></textarea>
    <button>New Notes</button>
</form>

<?php

if(isset($getNot)):

while($row = mysqli_fetch_array($getNot)):


?>

<h2><b><?php


echo (isset($_GET['message']) == "successfully") ? 'Data Update Successfully' : ''; ?></b></h2>

<h1><?php echo $row['title']; ?></h1>
<p><?php echo $row['description']; ?></p>
<em><?php echo $row['date']; ?></em>
<div>
<form action="" method="post" style="display:inline-block;">
    <input type="hidden" name="submit">
    <input name="delete_note" type="hidden" value="<?php echo $row['id']; ?>">
<button>Delete</button>
</form>

<form action="update.php" method="post" style="display:inline-block;">
    <input name="id" type="hidden" value="<?php echo $row['id']; ?>">
<button>Update</button>
</form>
</div>

<?php endwhile; endif;?>
    
</body>
</html>