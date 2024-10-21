<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Japan Journey</title>
    <link href="styles/journey.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <h1>Japan Journey </h1>
</header>
<div id="wrapper">
     <nav>
        <ul>
            <li><a href="index.php" id="here">Home</a></li>
            <li><a href="blog.php">Journal</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <h2>Images of Japan</h2>
      <p id="picCount">Displaying 1 to 6 of 8</p>
        <div id="gallery">
            <table id="thumbs">
                <tr>
					<!--This row needs to be repeated-->
                    <td><a href="gallery.php"><img src="images/thumbs/maiko.jpg" alt="" width="80" height="54"></a></td>
                </tr>
				<!-- Navigation link needs to go here -->
            </table>
            <figure id="main_image">
                <img src="images/maiko.jpg" alt="" width="340" height="205">
                <figcaption>Maiko&mdash;trainee geishas in Kyoto</figcaption>
            </figure>
        </div>
    </main>
     <footer>
        <p>&copy; 2006&ndash;2021 David Powers</p>
    </footer>
</div>
</body>
</html>