<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$idnumber = $_POST['idnumber'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$gender = $_POST['gender'];
			$bday = $_POST['bday'];
			$program = $_POST['program'];
			$yearlevel = $_POST['yearlevel'];

			$sql = "UPDATE user SET  idnumber = '$idnumber', firstname = '$firstname', lastname = '$lastname', gender = '$gender', bday = '$bday', program = '$program', yearlevel = '$yearlevel' WHERE id = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Data updated successfully' : 'Something went wrong. Cannot update member';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Fill up edit form first';
	}

	header('location: index.php');

?>