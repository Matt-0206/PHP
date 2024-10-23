


<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  



<?php
// script per il form

//Inizializzo le varibili dei form
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);

}

function test_input($data){

  $data = trim($data); // trim rimuove spazi bianchi da entrambe le parti di una stringa
  $data = stripslashes($data); // stripslashes rimuove slash e backslash dalla steringa
  $data = htmlspecialchars($data); // htmlspecialchars converte i tag HTML nel relativo valore letterale
  return $data; // ritorna $data

}

?>




<h2>PHP Form Validation Example</h2>


<!-- htmlspecialchars converte i tag HTML nel relativo valore letterale -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>





<?php
//echo "<h2>Your Input:</h2>";

echo $name;
echo "<br>";

echo $email;
echo "<br>";

echo $website;
echo "<br>";

echo $comment;
echo "<br>";

echo $gender;

?>

</body>
</html>