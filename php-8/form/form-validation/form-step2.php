
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";

$name = $email = $gender = $comment = $website = "";

//CONTROLLO DEGLI ERRORI

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

  //controllo su campo name
  if(empty($_POST["name"])){

    $nameErr = "Nome è obbligatorio";

  }else{

    $name = test_input($_POST["name"]);

  }
  
  //controllo su campo email
  if(empty($_POST["email"])){

    $emailErr = "E-Mail è obbligatorio";

  }else{

    $email = test_input($_POST["email"]);

  }

  //controllo su campo gender
  if(empty($_POST["gender"])){

    $genderErr = "Genere è obbligatorio";

  }else{

    $gender = test_input($_POST["gender"]);

  }

  //controllo su campo website
  if(empty($_POST["website"])){

    $website = "";

  }else{

    $website = test_input($_POST["website"]);

  }

  //controllo su campo commnet
  if(empty($_POST["comment"])){

    $comment = "";

  }else{

    $commnet = test_input($_POST["comment"]);

  }
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
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;

?>

</body>
</html>