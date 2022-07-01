<html> 
<head> 
 <meta charset="utf-8"> 
 <title>Employee Information Sample HTML Form</title> 
 <style type="text/css" > 
  .errorMsg{border:1px solid red; } 
  .message{color: red; font-weight:bold; } 
 </style> 
</head> 
<body> 
    <h3>$$$TP14: EXERCICE PAGE 18$$$</h3> 
    <?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?> 
    <form name= "registration" id= "registration" method= "post" action= "registration4.php"> 
    <table width= "400" border= "0" align="center" cellpadding= "4" cellspacing= "1"> 
    <tr> 
    <td>Employee Name:</td> 
    <td><input name= "emp_name" type= "text" id="emp_name" value="<?php if(isset($name)){echo $name;} ?>" 
    <?php if(isset($code) && $code == 1){echo "class=errorMsg" ;} ?> ></td> 
    </tr> 
    <tr> 
    <td>Contact No.: </td> 
    <td><input name= "emp_number" type= "text" id= "emp_number" value="<?php if(isset($number)){echo $number;} ?>" 
    <?php if(isset($code) && $code == 2){echo "class=errorMsg" ;}?> ></td> 
    </tr> 
    <tr> 
    <td> Personal Email: </td> 
    <td><input name= "emp_email" type= "text" id= "emp_email" value="<?php if(isset($email)){echo $email; }?>" 
    <?php if(isset($code) && $code == 3){echo "class=errorMsg" ;}?> ></td> 
    </tr> 
    <tr> 
    <td></td> 
    <td><input type= "submit" name= "Submit" value= "Submit"></td> 
    </tr> 
    </table> 
    </form> 
</body> 
</html>