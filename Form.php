<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../asset/css/animate.css">
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-default">	
			<center><h3>Registrations Form</h3></center>
		</nav>
		<div class="row">
			<div class="col-md-12">
				
				<div class="col-md-4">
					<div class="animated fadeInDown"> 
						<form  action="Logic.php" class="animated zoomIn " method="POST" name="simpan">
						
							<div class="form-group">
								<p style="color:red;">*<label style="color:black;"> No. Identity</label></p>
								<input type="text" name="id" class="form-control" onmouseleave="check()">
								<p id="mId"></p>
							</div>

							<div class="form-group">
								<p style="color:red;">*<label style="color:black;"> Full Name</label></p>
								<input type="text" name="name" class="form-control">
								<p id="mFullName"></p>
							</div>

							<div class="form-group">
								<p style="color:red;">*<label style="color:black;"> Birth</label></p>
								<input type="date" class="form-control" name="birth">
								<p id="mBirth"></p>
								
							</div>

							<div class="form-group">
								<p style="color:red;">*<label style="color:black;"> Address</label></p>
								<textarea rows="3" name="adress" class="form-control"></textarea>
								<p id="mAdress"></p>
							</div>

							<div class="form-group">
								<p style="color:red;">*<label style="color:black;"> Phone Number</label></p>
								<input type="text" name="telephone" class="form-control">
								<p id="mTelephone"></p>	
							</div>

							<div class="form-group">
								<p style="color:red;">*<label style="color:black;"> Email</label></p>
								<input type="email" class="form-control" name="email">
								<p id="mEmail"></p>
							</div>

							<div class="form-group">
								<p style="color:red;">*<label style="color:black;"> Gender</label></p>
								<label>
									<input type="radio" name="gender" value="Male">
									Male
								</label>
								<label>
									<input type="radio" name="gender" value="Female">
									Female
								</label>
								<p id="mGender"></p>			
							</div>

							<div class="form-group">
								<p style="color:red;">*<label style="color:black;"> Study Program</label></p>
								<select class="form-control" name="prodi">
									<option value="">--- Pilih ----</option>
									<option value="S1 TI">S1 TI</option>
									<option value="S1 TI">D3 TI</option>
									<option value="S1 DKV">S1 DKV</option>
									<option value="D3 MI">D3 MI</option>
								</select>
								<p id="mProdi"></p>
							</div>

							<div class="button-group">
								<div class="pull-right">
									<button type="reset" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-refresh"></i> Reset</button>
									<button type="submit" name="save" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-floppy-save"></i> Submit</button>
								</div>
								
							</div>
						</form> 
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
		<hr style="border-color:green; border-width: 3px" width="100%">
		<footer class="footer">
			<div class="col-md 12" style="background-color:black;">
				<div class="row col-md-7">
					<h5>&copy Darmawan Zulkifli | STMIK Bumigora Mataram | v 1.0 | made with <span><i class="glyphicon glyphicon-heart" style="color:red;"></i></span></h5>	
				</div>
			</div>
		</footer>
	</div>
</body>

</html>