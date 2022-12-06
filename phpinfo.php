<style>
  <?php include "style.css" ?>
</style>


<!-- PHP Syntax -->
<?php
echo " <h1>Welcome To PHP Page! </h1>";
?>
<hr>
<br>
<!-- Providing a variable -->
<?php
echo "<h2>Providing PHP variables.</h2>";
echo "<hr>";
$color = "blue";
$hobbie = "Listening Music";
$game = "Playing Badminton";
echo "My Favorite color is " . $color . "<br>" , "<br>";
echo "I love " . $hobbie . "<br>" , "<br>";
echo "I love " . $game . "<br>" , "<br>";
?>

<!-- Use of PHP eco statement -->
<?php
echo "<h2>PHP Echo statement.</h2>";
echo "<hr>";
echo "Use of PHP echo statement. <br> <br>";
echo "echo is widely used compare to print statement. <br> <br>";
echo "This ", "string ", "was ", "created ", "using ", "multiple parameters. <br> <br> ";
?>

<!--text and variables output with the echo statement -->
<?php
echo "<h2>Text and variables output with the echo statement.</h2>";
echo "<hr>";
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 3;
$y = 4;

echo "<h3>" . $txt1 . "</h3>";
echo "Study PHP at " . $txt2 . " version <br>";
echo $x + $y;
?>


<br>
<!-- Use of PHP Print -->
<?php
Print "<h2>PHP Print statement. </h2>";
echo "<hr>";
print "Use of PHP Print statement <br> <br>";
print "Print statement is rarely used";
?>

<!--text and variables output with the print statement -->
<?php
print "<h2>Text and variables output with the print statement.</h2>";
echo "<hr>";
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h3>" . $txt1 . "</h3>";
print "Study PHP at " . $txt2 . "<br> <br>";
print $x + $y;
?>

<br>
<!-- PHP Variables -->
<?php
echo "<h2>PHP Variables.</h2>";
echo "<hr>";
$txt = "This shows how to insert a variable with dollar sign and giving a value in text and numbers like ";
$x = 7;
echo $txt;
echo $x;
?>

<!-- PHP global variable scope -->
<?php
echo "<h2>Providing global scope variable.</h2>";
echo "<hr>";
$x = 5; // global scope
function myTest() {
  // providing variable x inside this function will generate an error
  echo "<p>Variable x inside function gives error, since variable won't work inside function: </p>";
} 
myTest();
// providing a variable outside the functions works
echo "<p>Variable x outside function is: $x </p>";
?>
<br>

<!-- PHP local variable scope -->
<?php
function mylocal() {
  $z = 5; // local scope
  echo "<p>Variable z inside function is: $z</p>";
}
mylocal();

// using x outside the function will generate an error
echo "<p>Variable z outside function will appear error since local variable won't work outside the function is: </p>";
?>
<br>

<!-- PHP Data Types -->
<!-- 1. String -->
<?php
echo "<h2>PHP Data Types.</h2>";
echo "<hr>";
echo "<h3>1. String</h3>";
$x = "Hello World!";
$y = "Welcome to PHP learning";
echo $x;
echo "<br> <br>";
echo  $y;
?>
<br>

<!-- 2. Integer -->
<?php
echo "<h3>2. Integers</h3>";
$x = 12345;
var_dump($x);
?>

<!-- 3. Float/Decimal -->
<?php
echo "<h3>3. Float/Decimal Numbers</h3>";
$x = 0.1234;
var_dump($x);
?>
<br>
<!-- STRING -->
<?php
echo "<h2>PHP String</h2>";
echo "<hr>";
echo "<h3>1. Length of String (PHP seems INTERESTING!) </h3>";
echo strlen("PHP seems INTERESTING!");
?> 
<br>
 
<?php
echo "<h3>2. Word count of String (I am learning PHP) </h3>";
echo str_word_count("I am learning PHP");
?>
<br>

<?php
echo "<h3>3. Reverse a String (Welcome to PHP)</h3>";
echo strrev("Welcome to PHP");
?>

<?php
echo "<h3>4. Search For a Text (headache) Within a String ( I had a headache now) </h3>";
echo strpos("I had a headache now", "headache");
?>

<?php
echo "<h3>5. Replace Text Within a String (Repalcing the word Hate by Love)</h3>";
echo str_replace("Hate", "Love", "I Hate Dechen!");
?>
<br>

<!-- PHP Math -->
<?php
echo "<h2>PHP Math</h2>";
echo "<hr>";
echo "<h3>1. Min (1, 90, -50, 100, 40) &nbsp; and &nbsp;  Max (0, 10, 70, -10, 50) function:</h3>";
echo (min(1, 90, -50, 100, 40));
echo "<br> <br>";
echo (max(0, 10, 70, -10, 50));
?>
<br>

<?php
echo "<h3>2. Round function (round the number 0.600)</h3>";
echo (round(0.600));
?>
<br>

<?php
echo "<h3>3. Random Function (random number between 50-100)</h3>";
echo (rand(50,100));
?>
<br>

<!-- PHP Constant -->
<!-- constant is created with the define function() -->

<?php
echo "<h2>PHP Constant</h2>";
echo "<hr>";
echo "<h3>1. case-sensitive constant name (GREETING &nbsp; Welcome to PHP page!):</h3>";
define ("GREETING", "Welcome to PHP page!");
echo GREETING;
?>
<br>
<?php
echo "<h3>2. case-insensitive constant name </h3>";
define ("GREETING", "Welcome to PHP page!", true);
echo greeting;
?>
<br>

<?php
echo "<h3>3. Constant Arreys</h3>";
define("country", [
  "Bhutan", "Singapore", "Korea"
]);
echo country[0];
?>
<br>
<!-- constant are usually global where the variable works outside the function -->      
<?php
echo "<h2>Constant are usually global where variables works outside the function.</h2>";
define("WELCOME", "Welcome to W3Schools.com!");

function myglobal() {
  echo WELCOME;
}
 
myglobal();
?>
<br>

<!-- PHP Conditional Statement -->
<?php
echo "<h2>Conditional Statement</h2>";
echo "<hr>";
 echo "<h3>1. If Statement</h3>";
$d = date("D");
if($d  = "Monday") {
  echo "Monday seems boring! <br>";
}

elseif($d != "Monday"){
echo "Other weekdays seems interesting!";
}

else{
    echo "But Saturday is my favorite day!!";
  }
?>
<br>

<!-- PHP Switch Statement -->

<?php
echo "<h2>PHP Switch Statement</h2>";
echo "<hr>";
$favcolor = "blue";
switch ($favcolor) {
case "red":
  echo "Your favorite color is red!!";
  break;
   case "blue":
    echo "Its seems that you like blue color!";
    break;
    case "green":
      echo "Green seems a nice color!";
      break;
      default:
      echo "Your favorite color is neither red, blue nor green!";
}
?>
<br>
<!-- PHP Loops -->
<?php
echo "<h2>PHP Loops</h2>";
echo "<hr>";
echo "<h3>1. While Loop</h3>";
$x = 1;
while ($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>
<br>

<?php
echo "<h3>2. Do while Loop</h3>";
$x = 1;
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 10);
?>
<br>

<?php
echo "<h3>3. For Loop</h3>";
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>
<br>

<!-- The foreach loop works only on arrays, and is used to loop through each key/value pair in an array. -->
<?php
echo "<h3>4. For Each Loop</h3>";
$color = array("red", "green", "blue", "yellow");
foreach($color as $value){
  echo "$value ";
}
?>
<br>

<?php
echo "<h3>5. PHP break and continue</h3>";  
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>
<br>

<!-- PHP Function -->
<?php
echo "<h2>PHP Function</h2>";
echo "<hr>";
function writeMsg(){
  echo "Welcome to PHP page!";
}
writeMsg();
?>
<br><br>
<!-- Function with argument -->
<?php
echo "<h3>1. Calling a function with argument.</h3>";
function familyName($fname){
echo "$fname Zangmo.<br>";
}
familyName ("Dechen");
familyName ("Dorji");
familyName ("Pema");
familyName ("Sangay");
?>
<br>
<?php
echo "<h3>2. Calling a function with two argument.</h3>";
function FriendsName($frname, $year){
  echo "$frname. Born in $year <br>";
}
FriendsName ("Pema Yangdon", "1996");
FriendsName ("Sangay Lhamo", "1998");
FriendsName ("Tenzin Wangmo", "1999");
?>
<br>

<!-- calling a function without a strict declearation -->

<?php
 echo "<h3>calling a function without a strict declearation</h3>";
 echo "<p> This is happening as we haven't add strict keyword to specify the data type where 5 days is read as int 5 by default </p>";
 function addNumbers(int $a, int $b) {
   return $a + $b;
}
echo addNumbers(5, "5 days"); 
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10 -->

?>

<!-- Array -->
<?php
echo "<h2>PHP Array.</h2>";
echo "<hr>";
$fastfood = array("Pizza", "Franch Fried", "Burgur");
echo "I like " . $fastfood[0] . ",  " . $fastfood[1] . ",  " . $fastfood[2] . "."; 
?>
<br>

<?php
echo "<h3>1. Indexed Arrays</h3>";
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
<br>

<!--Associate Array  -->
<?php
echo "<h2>2. Associate Array.</h2>";
$age = array("Dechen"=>"24", "Amire"=>"26", "Pema"=>"22");
echo "Dechen is " . $age['Dechen'] . " years old.";
?>
<br> <br>

<!-- Loop through an associate array -->
<?php
echo "<h3>3. Loop through an associate array.</h3>";
$age = array("Zangmo"=>"24", "Gurung"=>"26", "Yangdon"=>"26");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<br>

<!-- PHP Multidimensional Arrays -->

<?php
echo "<h2>Multidimensional Arrays</h2>";
echo "<hr>";
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
<br>
<!-- Sorting Array -->
<?php
echo "<h2>Sorting Array.</h2>";
echo "<hr>";
echo "<h3>1. Sort Array in a assending order.</h3>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
<br>

<?php
echo "<h3>1.1 Sort number array in a assending order. </h3>";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>
<br>


<!-- Array Descending Order -->
<?php
echo "<h2>Descending Order.</h2>";
echo "<hr>";
echo "<h3>Sort Array in a Descending order.</h3>";
$fruits = array("Watermelon", "Apple", "Mango");
rsort($fruits);

$arrlength = count($fruits);
for($x = 0; $x<$arrlength; $x++){
  echo $fruits[$x];
  echo "<br>";
}
?>
<br><br>




<!-- CREATED THE FORM IN ANOTHER FILE -->
<!-- PHP Form Handling -->
<!-- POST Method -->

<!-- <h2>PHP form with POST Method</h2><br>
<form action='welcome.php' method="post">
Name: <input type="text" name="name"><br><br>
Email: <input type="text" name="email"><br><br>
Password: <input type="password" name="passowrd"><br><br>
<input type="Submit">
</form> -->

<!-- PHP form with the get method -->
 <!-- <h2>PHP Form with the GET Method</h2> <br>
<form action="welcome .php" method="get">
Name: <input type="text" name="name"><br><br>
Email: <input type="text" name="email"><br><br>
Password: <input type="text" name="password"><br><br>
<input type="Submit"> <nbsp> Click to submit
</form>  -->

<!-- PHP Form and its Validation-->
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
  // if(empty($_POST["PhoneNumber"])){
  //   $phnumberErr = "Access to BTN number only";
  // }
  // else{
  //   $PnNumber = test_input($_POST["PnNumber"]);
  //   // Only valid Bhutanese Number
  //   if(!preg_match('/^[0-9] {8}+$/', $PnNumber)){
  //    $phnumberErr = "Valid only the BTN Number";
  //   }
  // }

echo "<br>";
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
   <!-- Mobile Number: <input type="number" name="PnNumber"> -->
  <!-- <span class="error">* 
     <!-- <?php echo $phnumberErr;?>    -->
</span>  
  <br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
// echo $PnNumber;
// echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
