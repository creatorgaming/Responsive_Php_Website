<?php

	$conn = mysqli_connect("localhost","root","","testdatabase");

	$query = "SELECT * FROM list";

	$records = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html>
<head>
	  
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	
	  <title>Testing Project Website</title>
	
	  <link href="css/style.css" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=VT323:400" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
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

	<br>
	<section>
		<table cellpadding="0" cellspacing="0" border="0">
		<div class="tbl-header">
			<thead>
				<tr>
					<th>SNo.</th>
					<th>Title</th>
					<th>Description</th>
					<th>Due Date</th>		
				</tr>
			</thead>
		</div>
		
			<tbody>
			<div class="contract">
				<?php

				while ($test = mysqli_fetch_assoc($records)) {

					echo '<tr class="contract">';

					echo '<td>'.$test['SNo'].'</td>';
					echo '<td>'.$test['Title'].'</td>';
					echo '<td>'.$test['Description'].'</td>';
					echo '<td>'.$test['DueDate'].'</td>';


					echo '<td>'.'<a href="php/delete.php?id='.$test['SNo'].'"><button>Delete</button></a>'.'</td>';
					echo '<td>'.'<a href="php/edit.php?id='.$test['SNo'].'"><button>Edit</button></a>'.'</td>';
					echo '<td>'.'<a href="php/view.php?id='.$test['SNo'].'"><button>View</button></a>'.'</td>';


					echo "</tr>";
					
				}

				?>
			</div>
				</tbody>
	</table>

	</section>

</body>
</html>