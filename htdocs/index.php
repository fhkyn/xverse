<html>
<head>
<title>frederick hampton</title>
<link rel="stylesheet" href="/css/index.css">
</head>
<body>
	<h1 id="myHeader">Verse of the day</h1>

	<nav>
      <a href="crack/index.php"><strong>Crack</strong></a>
      <a href="indexa.php"><strong>Hello World</strong></a>
      <a href="index1.html"><strong>Cli Sites</strong></a>
      <a href="gp/"><strong>gp</strong></a>
      <a href="forms/"><strong>Forms</strong></a>
</nav>
<h1>Guessing Game</h1>
<p>
<?php
  if ( ! isset($_GET['guess']) ) { 
    echo("Missing guess parameter");
  } else if ( strlen($_GET['guess']) < 1 ) {
    echo("Your guess is too short");
  } else if ( ! is_numeric($_GET['guess']) ) {
    echo("Your guess is not a number");
  } else if ( $_GET['guess'] < 81 ) {
    echo("Your guess is too low");
  } else if ( $_GET['guess'] > 81 ) {
    echo("Your guess is too high");
  } else {
    echo("Congratulations - You are right");
  }
?>
</p>
</body>
</html>
  
