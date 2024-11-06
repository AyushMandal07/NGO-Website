<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
    //Database connection

    $conn = new mysqli("localhost","root","","signin");
    if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into signindetails( name,  email, password) values(?, ?, ?)");
        $stmt->bind_param("sss", $name,  $email, $password);
        $execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		//include "C:\wamp64\www\bhaskarweb\index4.html";
		$stmt->close();
		$conn->close();
	}
?>
    


