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
			<center><h3>Registrations Data</h3></center>
		</nav>

		<div class="row">
			<div class="col-md-12">
				<div class="animated fadeInDown">
					<table class="table tabel-striped table-bordered table-hover">
						<tr>
							<th>No. Identity</th>
							<th>Name</th>
							<th>Birth</th>
							<th>Adress</th>
							<th>Telephone</th>
							<th>E-email</th>
							<th>Gender</th>
							<th>Study Program</th>
						</tr>
						<?php 
						if(isset($_POST['save'])){
							$id = $_POST['id'];
							$name = $_POST['name'];
							$birth = $_POST['birth'];
							$adress = $_POST['adress'];
							$telephone = $_POST['telephone'];
							$email = $_POST['email'];
							$gender = $_POST['gender'];
							$prodi = $_POST['prodi'];
						}
						?>

						<tr>
							<td><?php echo $_POST['id']; ?></td>
							<td><?php echo $_POST['name']; ?></td>
							<td><?php echo $_POST['birth']; ?></td>
							<td><?php echo $_POST['adress']; ?></td>
							<td><?php echo $_POST['telephone']; ?></td>
							<td><?php echo $_POST['email']; ?></td>
							<td><?php echo $_POST['gender']; ?></td>
							<td><?php echo $_POST['prodi']; ?></td>
						</tr>
					</table>
					<div class="animated slideInLeft">
						<a type="button" class="btn btn-primary btn-md" href="Form.php"><i class="glyphicon glyphicon-arrow-left"></i> Back to Form</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>