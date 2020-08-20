<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contact form in php</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 m-auto">
				<div class="form-php mt-5">
					<div class="form-php-titlle">
						<h2 class="text-center py-2">Contact us</h2>
						<?php
							$Msg = "";
							if(isset($_GET['error']))
							{
								$Msg = " Please fill in the blanks ";
								echo '<div class="alert alert-danger">'.$Msg.'</div>';
							}

							if(isset($_GET['success']))
							{
								$Msg = " Your massages has been sent ";
								echo '<div class="alert alert-success">'.$Msg.'</div>';
							}
						?>
					</div>
					<div class="form-php-body">
						<form action="contact.php" method="post">
							<input type="text" name="Uname" placeholder="Name" class="form-control mb-2">
							<input type="email" name="Email" placeholder="Email" class="form-control mb-2">
							<input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
							<textarea name="msg" placeholder="Massages" class="form-control mb-2"></textarea>
							<button name="btn-send" class="btn btn-success">Send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>