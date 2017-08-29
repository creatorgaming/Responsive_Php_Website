<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Add Record</title>
	
	<link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=VT323:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
	<!--[if lt IE 9]>
	     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<header>
	<div class="container">

		<img src="images/NAVBAR_LOGO.png" alt="logo" class="logo">
	
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="Add.php">Add Record</a></li>
			</ul>
		</nav>	

	</div>
</header>

	<div class="form">
	<form action="php/add_file.php" method="post" id="form1">
		<h2>Title</h2>
		<input type="text" name="title" placeholder="Title">
		<h2>Description</h2>
		<textarea name="description" rows="6" cols="40" form="form1" placeholder="Enter Text Here..."></textarea>
		<h2>Due Date</h2>
		<input type="date" name="duedate" min="2017-08-27">
		<br>
		<input type="submit" name="submit" class="submit">
	</form>
	</div>

</body>
</html>