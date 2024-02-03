<?php
require_once "./includes/CURD.php";


if(isset($_POST['submit'])){

  $id = $_POST["submit"];
  $db->updateNotes('notes', $id, $_POST);
}


if(isset($_POST['id'])):

    $id = $_POST['id'];
   
    $result = $db->getNotesById('notes', $id);

   $row = mysqli_fetch_array($result);




?>


<form action="" method="post">
    <input type="hidden" name="submit" value="<?php echo $id; ?>">
    <input type="text" name="title" placeholder="Please Enter Title" value="<?php echo $row["title"]; ?>">
    <textarea name="description"  id="" cols="30" rows="10" placholder=""><?php echo $row["description"]; ?></textarea>
    <button>New Notes</button>
</form>

<?php



endif;


