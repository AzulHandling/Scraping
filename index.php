<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pacotron Manager | User Login</title>
	<link type="text/css" href="Lib/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="Lib/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="Lib/css/theme.css" rel="stylesheet">
	<link type="text/css" href="Lib/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link type="text/css" href="style.css" rel="stylesheet">
    <link rel="icon" href="Lib/media/images/pacotron.ico">
</head>
<body style="background-image: url('Lib/media/images/Ryanair4.jpg');  background-size: cover;width: 100vw;height: 100vh;position:relative;">

    <!--
	<div class="img-fluid" alt="Responsive image" style="background-image: url(media/images/back.png); background-size: cover; background-repeat: no-repeat; size: letter>
    -->
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4" id="logito">
					<form class="form-vertical" action="login.php" method="POST" id="form1">
						<div class="module-head" id="modulo">
                            <div class="navbar navbar-fixed-top" id="logo">
                                <div class="container"><img src="Lib/images/LogoI%20Azul.png" alt="Logo" class="center">
                                
                                </div>
                            </div>
							<h2 style="text-align: center">Azulhandling GOPS Portal</h2>
						</div>
						<div class="module-body" id="form2" >
								
								<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" placeholder="Usuario" name="username" required>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" placeholder="Contraseña" name="password" required>
								</div>
							</div>
                            <?php
                            if(isset($_GET['error'])) {
                                print '
									<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert">×</button>
										'.$_GET['error'].'
									</div>
									';
                            }else{}
                            if(isset($_GET['in'])) {
                                print '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										'.$_GET['in'].'
									</div>
									';
                            }else{}
                            ?>
								<div class="control-group">

							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary">Iniciar sesión</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<!--
    </div>
    -->
    

	<script src="Lib/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="Lib/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="Lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
