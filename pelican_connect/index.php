<!Doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<div class="container">
<h1 id="title">Pelicanconnect</h1>
</header>
<div class="bar">
	<div class="text">
		Search for members by School:
	</div> <!-- Text End -->
	<select id="dropdown">
	</select>
	<button class="button">Search</button>
</div> <!-- Bar End -->

<div id=results>
</div> <!-- Results End -->

<div class="bar">
	<div class="text">
		Add a member to the database:
	</div> <!-- Text End -->
</div> <!-- Bar End -->

<div id=form>
	<form action="post_data.php" method="post">
		<br>
		Name:<br>
		<input type="text" name="name" value=""><br><br>
		Email:<br>
		<input type="text" name="email" value=""><br><br>
		Address:<br>
		<input type="text" name="address" value=""><br><br>
		School(s):<br>
		<input type="text" name="school" value=""><br>
		<input type="text" name="school2" value=""><br>
		<input type="text" name="school3" value=""><br>
		<input type="text" name="school4" value=""><br>
		<input type="submit" value="Submit"><br>
</form>
</div> <!-- Form End -->
</div> <!-- Container End -->
</body>
</html>