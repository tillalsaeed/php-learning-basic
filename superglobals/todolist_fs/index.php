<?php

$todos = [];
if(file_exists('todo.json')){

    $json = file_get_contents('todo.json');
    $todos = json_decode($json, true);
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
    <form action="newtodo.php" method="post">
        <input type="text" name="todo_item" placeholder="Please enter todolist">
        <button>Submit</button>
    </form>

    <?php foreach($todos as $todoName =>  $todo ):?>
        <div>
            <form method="post" action="checked.php" style="display:inline-block;">
            <input type="hidden" name="change_todo" value="<?php echo $todoName; ?>" >
                <input type="checkbox" class="items" <?php echo $todo['completed'] ? 'checked' : ''; ?>>
            </form>
        <?php echo $todoName; ?>
        <form action="delete.php" method="post" style="display:inline-block;">
             <input type="hidden" name="delete_todo" value="<?php echo $todoName; ?>" >
            <button>Delete</button>
        </form>
    </div>
    
        <?php endforeach; ?>

        <script>
         const checkbox = document.querySelectorAll('.items');
         checkbox.forEach(item => {
            item.addEventListener("click", function(){
                this.parentNode.submit();
            })
         })
            </script>
</body>
</html>