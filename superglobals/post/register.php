<?php

$errors = [];
$username = '';
$email = '';
$password = '';
$repassword = '';
$cvlink = '';
define('REQUIRED_FIELD_ERROR', 'This field is required');



if(isset($_SERVER['REQUEST_METHOD']) == 'POST'){
        $username = post_data('username');
    $email = post_data('email');
    $password = post_data('password');
    $repassword = post_data('repassword');
    $cvlink = post_data('cvlink');

    var_dump($username,$email,$password,$repassword,$cvlink);

    if(!$username){
                 $errors['username'] = REQUIRED_FIELD_ERROR;
               
             } else if(strlen($username) < 6 || strlen($username) > 16){
                 $errors['username'] = "Username must be at least 6 characters and maximum length 16";
             }

        if(!$email){
        $errors['email'] = REQUIRED_FIELD_ERROR;
       
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'This field must be a valid email address';

        
    };

        if(!$password){
        $errors['password'] = REQUIRED_FIELD_ERROR;
       
    };
    if(!$repassword || $password != $repassword){
        $errors['repassword'] = REQUIRED_FIELD_ERROR;
       
    };

        if($password && $repassword && strcmp($password, $repassword) != 0){
        $errors['repassword'] = "This must match the password field";
    };

    if($cvlink && !filter_var($cvlink, FILTER_VALIDATE_URL)){
                $errors['cvlink'] = 'Please provide a valid URL';
               
            };

            if(empty($errors)){
                echo "Everythings is good";
            }

}


    function post_data($field){
        $_POST[$field] ??= '';
        
        return htmlspecialchars(stripslashes($_POST[$field]));
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register </title>
</head>
<body>
<form action="" method="post">
    <input type="text" value="<?php echo $username ?>" name="username" id="username" placeholder="username" class="<?php (isset($errors['username'])) ? 'invalid' : ''; ?>">
    <div class="error"><?php echo $errors['username'] ?? ''; ?></div>
    <input type="email" value="<?php echo $email ?>" name="email" id="email" placeholder="email" class="<?php (isset($errors['email'])) ? 'invalid' : ''; ?>">
    <div class="error"><?php echo $errors['email'] ?? ''; ?></div>
    <input type="password" value="<?php echo $password ?>" name="password" id="password" placeholder="password"  class="<?php (isset($errors['password'])) ? 'invalid' : ''; ?>">
    <div class="error"><?php echo $errors['password'] ?? ''; ?></div>

    <input type="password" value="<?php echo $repassword ?>"  name="repassword" id="repassword" placeholder="repassword"  class="<?php (isset($errors['repassword'])) ? 'invalid' : ''; ?>">
    <div class="error"><?php echo $errors['repassword'] ?? ''; ?></div>

    <input type="text" value="<?php echo $cvlink ?>" name="cvlink" id="cvlink" placeholder="Cvlink"  class="<?php (isset($errors['cvlink'])) ? 'invalid' : ''; ?>">
    <div class="error"><?php echo $errors['cvlink'] ?? ''; ?></div>

    <button>Register</button>


</form>
    
</body>
</html>