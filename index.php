<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ajax Project With Php</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body class="badge-dark">
	<!-- Registration Button -->
	<div class="row">
		<div class="col">
			<div class="card mt-5">
				<div class="card-title ml-5 my-2">
					<button type="button" class="btb btn-primary" data-toggle="modal" data-target="#Registration">Add New User</button>
				</div>
				<div class="card-body">
					<p id="delete-message" class="text-dark"></p>
					<div id="table"></div>
				</div>
			</div>
		</div>
	</div>


	<!-- Registration modal -->
	<div class="modal" id="Registration">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="text-dark">Registration Form</h3>
				</div>
				<div class="modal-body">
					<p id="message" class="text-dark"></p>
					<form >
						<input type="text" class="form-control my-2" placeholder="User Name" id="UserName">
						<input type="text" class="form-control my-2" placeholder="User Email" id="UserEmail">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" id="btn_register">Register Now</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- update modal -->
	<div class="modal" id="update">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="text-dark">Update Form</h3>
				</div>
				<div class="modal-body">
					<p id="up-message" class="text-dark"></p>
					<form >
						<input type="hidden" class="form-control my-2" placeholder="User Email" id="Up_User_ID">
						<input type="text" class="form-control my-2" placeholder="User Name" id="Up_UserName">
						<input type="text" class="form-control my-2" placeholder="User Email" id="Up_UserEmail">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" id="btn_update">Update Now</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Close</button>
				</div>
			</div>
		</div>
	</div>


	<!-- delete modal -->
	<div class="modal" id="delete">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="text-dark">Delete Record</h3>
				</div>
				<div class="modal-body">
					<p class="text-dark">Do you want to delete the record?</p>
					<button type="button" class="btn btn-success" id="btn_delete_record">Delete Now</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal" id="btn_close">Close</button>
				</div>
			</div>
		</div>
	</div>


	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/myjs.js"></script>
</body>
</html>