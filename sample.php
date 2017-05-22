<?php
		session_start();
		$id = session_id();
		$log = array('time' => time(), 'ip' => $_SERVER['REMOTE_ADDR'], 'url' => $_SERVER['REQUEST_URI']);
		$searched = $_POST['pac-input'];;
?>
<!DOCTYPE HTML>
<HTML>
	<HEAD></HEAD>
	<BODY>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "sample";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: ".$conn->connect_error);
			} 
			$sql = "INSERT INTO user_data (ID,IP_Address,Searched) VALUES ('".$id."', '".$log['ip']."','".$searched."')";
			if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
			} else {
				echo "Error: ".$sql."<br>".$conn->error;
			}
			$conn->close();
		?>
	</BODY>
</HTML>