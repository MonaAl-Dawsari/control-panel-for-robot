<!-- UI control panel  for Robots  -->


<?php


//required variables to connect with the local database
$servername = "localhost";
$username = "root";
$password = "";
$db = "control_pannel";

//server name, user name , password , database
$conn = mysqli_connect($servername, $username, $password,$db);

 //next block for send the respone to the DB

 	//Forwards
 	if (isset($_POST['Forwards'])) { 
	$sql = "INSERT INTO conrol_pannel_table(`Forwards`, `Left`, `STOP`, `Right`, `Backwards`)
	VALUES  ('F', '', '', '', '')";

	if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	} else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	}

	//Backwards
	if (isset($_POST['Backwards'])) {
	$sql = "INSERT INTO `conrol_pannel_table` (`Forwards`, `Left`, `STOP`, `Right`, `Backwards`) 
	VALUES ('', '', '', '', 'B');";
	
	if ($conn->query($sql) === TRUE) {
	  //echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	}

	//Right
	if (isset($_POST['Right'])) {
	$sql = "INSERT INTO `conrol_pannel_table` (`Forwards`, `Left`, `STOP`, `Right`, `Backwards`) 
	VALUES ('', '', '', 'R', '');";
	
	if ($conn->query($sql) === TRUE) {
	  //echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}	
	$conn->close();
	}

	//Left
	if (isset($_POST['Left'])) {
	$sql = "INSERT INTO `conrol_pannel_table` (`Forwards`, `Left`, `STOP`, `Right`, `Backwards`) 
	VALUES ('', 'L', '', '', '');";
	
	if ($conn->query($sql) === TRUE) {
	  //echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
		}

    //STOP
	if (isset($_POST['STOP'])) {
	$sql = "INSERT INTO `conrol_pannel_table` (`Forwards`, `Left`, `STOP`, `Right`, `Backwards`) 
	VALUES ('', '', 'S', '', '');";
	
	if ($conn->query($sql) === TRUE) {
	  //echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
	}
	
 //  mysqli_close($conn);
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>control panel</title>
	<main>Fight!</main>

	<link rel="stylesheet" href="styles.css"> <!-- to link css -->

</head>

<body>
	<div class="container">
		<form action="" method="post">
			<input type="hidden" name="action" value="submit" />

			<h1>

				<input id="Forwards" type="submit" name="Forwards" value="Forwards" <button class="other_btn"
					type="button" id="Forwards" input type="submit">
				</button>
			</h1>

			<h2>

				<input id="Left" type="submit" name="Left" value="Left" <button class="other_btn"
					type="button" id="Left" input type="submit">
				</button>


				<input id="STOP" type="submit" name="STOP" value="STOP" <button class="stopbtn" type="button"
					id="STOP" input type="submit">
				</button>


				<input id="Right" type="submit" name="Right" value="Right" <button class="other_btn"
					type="button" id="Right" input type="submit">
				</button>

			</h2>

			<h3>
				<input id="Backwards" type="submit" name="Backwards" value="Backwards" <button
					class="other_btn" type="button" id="Backwards" input type="submit">
				</button>

			</h3>

		</form>

	</div>

</body>

</html>