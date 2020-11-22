<?php
	
	$title = $_POST['title'];
	$description = $_POST['description'];
	$duedate = $_POST['duedate'];

	if($duedate >= date('Y-m-d')){

		$conn = mysqli_connect("localhost","root","","testdatabase");

		$query = "INSERT INTO List(Title, Description, DueDate) VALUES ('$title','$description','$duedate')";
		
		if(mysqli_query($conn, $query)){
			echo "query saved";
			header("Location: ../index.php");
		}else{
			echo "query not saved";
		}
		
	}else{
		echo "Date Exeded";
	}
	
?>