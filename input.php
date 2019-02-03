<?php 
	require_once 'base.php';
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
	$music = mysqli_real_escape_string($conn, $_REQUEST['music']);
	$movie = mysqli_real_escape_string($conn, $_REQUEST['movie']);
	$school = mysqli_real_escape_string($conn, $_REQUEST['school']);
	$major = mysqli_real_escape_string($conn, $_REQUEST['major']);
	
	
	
	$sql = "INSERT INTO interests (fname, music, movie, school, major) VALUES ('$fname', '$music', '$movie', '$school', '$major')";
	
	if (mysqli_query($conn,$sql)) {
		echo "<script> location.href='index.php'; </script>";
        exit;
		echo "<script>alert('Interests Added!');</script>";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	
	mysqli_close($conn);
?>



