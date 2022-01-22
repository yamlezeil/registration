<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>USER REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5 d-flex justify-content-center row " >
		<div class="card float-left col-sm-6" style="width:500px;margin-top:20px ;">
		  <div class="card-body ">
					<div class="container-fluid">
						<form method="POST" action="add.php">

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label" style="position:relative; top:7px;">Idnumber:</label>
								</div>
								<div class="col-sm-10">
									<input required="" type="text" class="form-control" name="idnumber">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
								</div>
								<div class="col-sm-10">
									<input required="" type="text" class="form-control" name="firstname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
								</div>
								<div class="col-sm-10">
									<input required="" type="text" class="form-control" name="lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-2">
						    		<label for="gender" class="form-label" style="position:relative; top:7px;">Gender:</label>
								</div>
								<div class="col-sm-10">
									<select required="" class="form-control" id="gender" aria-label="Default select example" name="gender" >
							  			<option value="0">Female</option>
							  			<option value="1">Male</option>
									</select>
						    	</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label" style="position:relative; top:7px;">Birthday:</label>
								</div>
								<div class="col-sm-10">
									<input required="" type="date" class="form-control" name="bday">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label" style="position:relative; top:7px;">Program:</label>
								</div>
								<div class="col-sm-10">
									<input required="" type="text" class="form-control" name="program">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label" style="position:relative; top:7px;">Year Level:</label>
								</div>
								<div class="col-sm-10">
									<input required="" max="5" min="1" required type="number" class="form-control" name="yearlevel">
								</div>
							</div>
						</div> 
						<button type="submit" name="add" class="btn btn-primary col-sm-2"><span class="glyphicon glyphicon-floppy-disk"></span> register</a></button>
			</div>
                
			</form>
         </div>
        </div>
        <style type="text/css">
			input:invalid, select:invalid{
			border: 2px solid red;
			}
		</style>
				<table class="table table-bordered table-hover  float-righ col-sm-6" style="margin-top:20px; float: right;" >
				<thead >
					<th>ID</th>
					<th>Idnumber</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Gender</th>
					<th>Birthday</th>
					<th>Program</th>
					<th>Year Level</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						//include our connection
						include_once('connection.php');

						$database = new Connection();
    					$db = $database->open();
						try{	
						    $sql = 'SELECT * FROM user';
						    foreach ($db->query($sql) as $row) {
						    	?>
						    	<tr>
						    		<td><?php echo $row['id']; ?></td>
						    		<td><?php echo $row['idnumber']; ?></td>
						    		<td><?php echo $row['firstname']; ?></td>
						    		<td><?php echo $row['lastname']; ?></td>
						    		<td><?php echo $row['gender']; ?></td>
						    		<td><?php echo $row['bday']; ?></td>
						    		<td><?php echo $row['program']; ?></td>
						    		<td><?php echo $row['yearlevel']; ?></td>


						    		<td>
						    			<a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
						    			<a href="#delete_<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete</a>
						    		</td>
						    		<?php include('edit_delete_modal.php'); ?>
						    	</tr>
						    	<?php 
						    }
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						//close connection
						$database->close();

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>