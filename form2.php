<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <!-- PHP Validation Form -->
        <div>
<?php
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $commentErr = $websiteErr = "";

if $_SERVER(["REQUEST_MODE"] == "POST"){
  if (empty($_POST["name"])){
    $nameErr = "Name is required";
  }
  else{
    $name = test_input($_POST["name"]);
    // check if the name contains letters and white space

if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
    $nameErr = "Only letters and white space allowed"
}
  }

}








?>





        </div>
        




    </body>



</html>
