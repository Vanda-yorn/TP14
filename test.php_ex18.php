<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>

    <form name="registration" id="registration" method="post" action="">
        <table width="400" border="0" align="center" cellpadding="4" cellspacing="1">
            <tr>
                <td>Employee Name:</td>
                <td><input name="emp_name" type="text" id="emp_name" value="<?php if(isset($name)){echo $name;} ?>"
                        <?php if(isset($code) && $code == 1){echo "class=errorMsg" ;} ?>></td>
            </tr>
            <tr>
                <td>Contact No.: </td>
                <td><input name="emp_number" type="text" id="emp_number"
                        value="<?php if(isset($number)){echo $number;} ?>"
                        <?php if(isset($code) && $code == 2){echo "class=errorMsg" ;}?>></td>
            </tr>
            <tr>
                <td> Personal Email: </td>
                <td><input name="emp_email" type="text" id="emp_email" value="<?php if(isset($email)){echo $email; }?>"
                        <?php if(isset($code) && $code == 3){echo "class=errorMsg" ;}?>></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>

</body>

</html>