<?php

		$conn = mysqli_connect("localhost","root","","testdatabase");

//Update Data
		$info = $_POST['id'];

		$title = $_POST['title'];
		$description = $_POST['description'];
		$duedate = $_POST['duedate'];

		if($duedate >= date('Y-m-d')){

			$update_query = "UPDATE list SET Title = '$title', Description = '$description',DueDate = '$duedate' WHERE SNo = '$info'";
			
			try{
				$update_result = mysqli_query($conn, $update_query);
				if($update_result){
					if(mysqli_affected_rows($conn) > 0){
							echo "data edited";
					}else{
							echo "data not edited";
					}
				}
			}catch(Exception $ex){
					echo ("error in editing".$ex->getMessage());
			}

		header("Location: ../index.php");

	}else{
		echo "Due Date is not in limit";
	}

?>