
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Data</h4></center>
            </div>
            <div class="modal-body">
				<div class="container-fluid mt-3 d-flex justify-content-center">
					<form method="POST" action="edit.php?id=<?php echo $row['id']; ?>">

						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label" style="position:relative; top:7px;">Idnumber:</label>
							</div>
							<div class="col-sm-10">
								<input required type="text" class="form-control" name="idnumber" value="<?php echo $row['idnumber']; ?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
							</div>
							<div class="col-sm-10">
								<input required type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']; ?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
							</div>
							<div class="col-sm-10">
								<input required type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-2">
					    		<label for="gender" class="form-label" style="position:relative; top:7px;">Gender:</label>
							</div>
							<div class="col-sm-10">
								<select required class="form-control" id="gender" aria-label="Default select example" name="gender" >
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
								<input required  type="date" class="form-control" name="bday" value="<?php echo $row['bday']; ?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label" style="position:relative; top:7px;">Program:</label>
							</div>
							<div class="col-sm-10">
								<input required type="text" class="form-control" name="program" value="<?php echo $row['program']; ?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-2">
								<label class="control-label" style="position:relative; top:7px;">Year Level:</label>
							</div>
							<div class="col-sm-10">
								<input  required max="5" min="1" required type="number" class="form-control" name="yearlevel"value="<?php echo $row['yearlevel']; ?>">
							</div>
						</div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Student</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['firstname'].' '.$row['lastname']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
