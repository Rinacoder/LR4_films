<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Основная страница</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body>
	<div class="all">
	<?php
	require "modal_windows.php";
	require "header.php";
?>
  
  <article id="article">
  	<div class="container">
  		<div class="films">
  			<a href="#" class="posterid">
  			<img src="img/2.jpg" class="poster">
  			<h2>Райя и последний дракон</h2>
	  		</a>
	  		<a href="#" class="posterid">
	  			<img src="img/3.jpg" class="poster">
	  			<h2>Джокер</h2>
	  		</a>
	  		<a href="#" class="posterid">
	  			<img src="img/1.jpg" class="poster">
	  			<h2>Форма голоса</h2>
	  		</a>
	  		<a href="#" class="posterid">
	  			<img src="img/4.jpg" class="poster">
	  			<h2>Менталист</h2>
	  		</a>
	  		<a href="#" class ="posterid">
	  			<img src="img/5.jpg" class="poster">
	  			<h2>Шерлок</h2>
	  		</a>	
  		</div>
  	</div>
  </article>
  
  
  <?php
	require "nav.php";
	require "footer.php";
?>

<script src="js/main.js"></script>
<script src="js/pass.js"></script>
  </div>
  
</body>
