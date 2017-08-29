<?php
	$conn = mysqli_connect("localhost","root","","testdatabase");
	$info = $_GET['id'];
	$query = "SELECT * FROM list WHERE SNo = $info";
	$records = mysqli_query($conn, $query);
	$test = mysqli_fetch_assoc($records);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Edit Record</title>
	
	<link href="../css/style.css" rel="stylesheet">
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

		<img src="../images/NAVBAR_LOGO.png" alt="logo" class="logo">
	
		<nav>
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../Add.php">Add Record</a></li>
			</ul>
		</nav>	

	</div>
</header>

<div class="form">
	<form action="update.php" method="post" id="editForm">
		
		<h2>Title</h2>
		<input type="text" name="title" value="<?php echo $test['Title']; ?>" /><br>
		
		<h2>Description</h2>
		<textarea name="description" rows="6" cols="40" form="editForm"><?php echo $test['Description']; ?></textarea><br>

		<h2>Due Date</h2>
		<input type="date" name="duedate" value="<?php echo $test['DueDate']; ?>"  min="2017-08-27" /><br>	
		<input type="submit" name="submit" value="Submit" class="submit">
		
		<input type="hidden" name="id" value="<?php echo "$info"; ?>" />	

	</form>
</div>
</body>
</html>

<!-- <?php
	
	// $conn = mysqli_connect("localhost","root","","testdatabase");

	// $SNo = $_GET['id'];
	// $query = "SELECT * FROM list WHERE SNo = $info";
	// $records = mysqli_query($conn, $query);
	// $test = mysqli_fetch_assoc($records);

	// if (isset($_POST['submit'])){

	// 		$title = $test["Title"];

	// 		$description = $test["Description"];

	// 		$update_query = "UPDATE List SET Title = $title, Description = $description  WHERE SNo = $SNo";
			
	// 		$update_result = mysqli_query($conn, $update_query);
			
	// 		if($update_result){
			
	// 			if(mysqli_affected_rows($conn) > 0){
	// 					echo "data deleted";
	// 			}else{
	// 					echo "data not deleted";
	// 			}
	// 		}
	// }
?> -->