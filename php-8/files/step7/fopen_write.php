<?php 

    if(isset($_POST['putContents'])) {

        $file = fopen('C:/privates/write.txt', 'w');

        fwrite($file, $_POST['contents']);

        fclose($file);

    }
?>


<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Write Only</title>
    <style>
        label {
            font-weight: bold;
            display: inline-block;
            float: left;
            margin-right: 15px;
        }
        textarea {
            width: 400px;
            height: 125px;
        }
    </style>
</head>

<body>

    <!-- il form -->

<form name="writeFile" method="post" action="fopen_write.php">
    <p>
        <label for="contents">Write this to file:</label>
        <textarea name="contents" id="contents"></textarea>
    </p>
    <p>
        <input name="putContents" type="submit" value="Write to file">
    </p>
</form>


</body>
</html>