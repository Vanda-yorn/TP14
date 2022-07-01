<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex15</title>
</head>

<body>
    <!-- Starting/storing/retrieving a Session -->
    <?php 
    session_start();
    
    //store session data 
    $_SESSION["username"] = "nikita";
    $_SESSION["email"] = "nikita@example.com";

    //retrieve session data
    echo $_SESSION["username"];
    echo "<br>";
    echo $_SESSION["email"];
    ?>
</body>

</html>
