<!DOCTYPE html>
<html>
<head>
	<title>ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
<div style="margin: auto;width: 60%;">
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	</div>
	<form id="fupForm" name="form1" method="POST">
		<div class="form-group">
			<label for="email">Name:</label>
			<input type="text" class="form-control" id="name" placeholder="Name" name="name">
		</div>
		<div class="form-group">
			<label for="pwd">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Phone:</label>
			<input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
		</div>
		<div class="form-group" >
			<label for="pwd">City:</label>
			<select name="city" id="city" class="form-control">
				<option value=""> Select </option>
				<option value="Lagos">Lagos</option>
				<option value="Abuja">Abuja</option>
				<option value="Abia">Abia</option>
			</select>
		</div>
	
		<button class="buttonload btn btn-primary" id="butsave" name="save" ><i class="fa fa-refresh fa-spin" style="display: none" id="loader"></i>
 Save Now
</button>
		
	</form>
</div>
<script src="script.js"></script>
</body>
</html>

