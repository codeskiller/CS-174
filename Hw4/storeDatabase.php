<?php
	$algo = $_POST['algo'];
	$title = $_POST['title'];
	$inputdata = $_POST['inputdata'];
	$data = hash( string $md5 , string $inputdata [, bool $raw_output = false ] ) // FALSE outputs lowercase hexits.
		

	//data should be md5 hashed using PHP's hash
	store($md5, $title, $data); //into database table

	function store($md5, $title, $data) {

		$servername ="locolhost";
		$username = "root";
		$password ="";
		$dbname = "myDB";
		//Create Connection
		$connect = mysqli_connect($servername, $username, $password, $dbname);
		//check connection
		if(!connect) {
			die("Connection fail: ". mysql_connect_error());
		}
		$query ="INSERT INTO FOO (md5, title, data) VALUES ('$md5', '$title', '$data')";
		if(mysqli_query($connect, $query)) {
			echo "New record created sucessfully <br/>";
		}
		else {
			echo "Error:". $query. "<br>". mysqli_error($connect);
		
		mysqli_close($connect)	
	}
?>