<?php

	$conn = mysqli_connect("localhost","root","","testdatabase");
	
	//Delete Data
		$info = $_GET['id'];
		$delete_query = "DELETE FROM list WHERE SNo = $info";
		
		try{
			$delete_result = mysqli_query($conn, $delete_query);
			if($delete_result){
				if(mysqli_affected_rows($conn) > 0){
						echo "data deleted";
				}else{
						echo "data not deleted";
				}
			}
		}catch(Exception $ex){
				echo ("error in deleting".$ex->getMessage());
		}

		header("Location: ../index.php");
?>