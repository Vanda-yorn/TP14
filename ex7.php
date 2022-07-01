<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex7</title>
</head>

<body>
    <?php
        $date = date("m-d");
        
        if($date == "01-10"){
            echo "Wishing you a very Happy Birthday";
        }elseif($date == "08-15"){
            echo "Happy Independence Day";
        }else{
            echo "TODAY: ".date("m-d-y");
            //nothing
        }
    ?>
</body>

</html>

