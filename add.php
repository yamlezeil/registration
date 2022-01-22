<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$stmt = $db->prepare("INSERT INTO user (idnumber,firstname, lastname,gender,bday,program,yearlevel) VALUES (:idnumber, :firstname, :lastname,:gender,:bday,:program,:yearlevel )");
			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $stmt->execute(array(':idnumber' => $_POST['idnumber'], ':firstname' => $_POST['firstname'] , ':lastname' => $_POST['lastname'] , ':gender' => $_POST['gender'], ':bday' => $_POST['bday'], ':program' => $_POST['program'], ':yearlevel' => $_POST['yearlevel'])) ) ? 'Data added successfully' : 'Something went wrong. Cannot add member';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: index.php');
	
?>