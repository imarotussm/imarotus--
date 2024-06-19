<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body {
            font-family: cursive;
            background-color: #eab1ccf3;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php 
    $name = $_POST['name']; 
    echo "<center>Name : <b>$name</b></center><br>"; 
     
    $email = $_POST['email']; 
    echo "<center>Email : <b>$email</b></center><br>"; 
     
    $message = $_POST['message']; 
    echo "<center>Message : <b>$message</b></center>"; 
    ?>
</body>
</html>
