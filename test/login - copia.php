<?PHP
require_once("./servidor/loginRegister/membersite_config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DAW</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery-2.0.3.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <a class="navbar-brand" href="index.html">DAW</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#login">Entrar</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#register">Registrar</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<!-- ModalLogin -->
	<?PHP
	if(isset($_POST['submitted']))
	{
	   if($fgmembersite->Login())
	   {
			$fgmembersite->RedirectToURL("index.php");
	   }
	}
	?>	
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="form-signin-heading">Entra</h4>
		  </div>
		  <div class="modal-body">
			  <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
				<input type="hidden" name="submitted" id="submitted" value="1"/>
				<input type="text" class="form-control" placeholder="Nombre de usuario" name="username" id="username" value='<?php echo $fgmembersite->SafeDisplay('username') ?>'>
				<input type="password" class="form-control" placeholder="Password" name="password" id="password">
				<button class="btn btn-lg btn-primary btn-block" type="submit"  name="Submit">Entrar</button>
			  </form>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- ModalRegister -->
	<?PHP
	if(isset($_POST['submitted']))
	{
	   if($fgmembersite->RegisterUser())
	   {
			echo "ya esta";
	   }
	}

	?>	
	<div class="modal fade" id="register" action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="form-signin-heading">Registrate</h4>
		  </div>
		  <div class="modal-body">
			  <form id="register" action="<?php echo $fgmembersite->GetSelfScript(); ?>" method="post" accept-charset='UTF-8'>
				<input type="hidden" name="submitted" id="submitted" value="1"/>
				<input type="text" class="form-control" placeholder="Nombre completo" name="name" id="name" value="<?php echo $fgmembersite->SafeDisplay("name") ?>" required autofocus>
				<input type="text" class="form-control" placeholder="Correo electronico" name="email" id="email" value="<?php echo $fgmembersite->SafeDisplay("email") ?>" required>
				<input type="text" class="form-control" placeholder="Nombre de usuario" name="username" id="username" value="<?php echo $fgmembersite->SafeDisplay("username") ?>" required>
				<input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
				<button class="btn btn-lg btn-primary btn-block" type='submit' name='Submit'>Registrar</button>
			  </form>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/super.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h1>Elige entre múltiples plantillas.</h1>
                </div>
            </div>
            <div class="item">
                <img src="img/super.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h1>Modifícalas a tu gusto.</h1>
                </div>
            </div>
            <div class="item">
                <img src="img/super.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h1>Publica tu página.<a href="http://startbootstrap.com">http://openshift.com</a>
                    </h1>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-ms-4 col-lg-4 col-md-4">
                    <img class="img-circle" src="ico/tools.png" alt="Generic placeholder image">
          			<h2>Tus páginas HTML y CSS</h2>
                </div>
                <div class="col-ms-4 col-lg-4 col-md-4">
                    <img class="img-circle" src="ico/xml.png" alt="Generic placeholder image">
          			<h2>Crear y editar HTML y CSS</h2>
                </div>
                <div class="col-ms-4 col-lg-4 col-md-4">
                    <img class="img-circle" src="ico/explorer.png" alt="Generic placeholder image">
          			<h2>Aplicaciones para tu página</h2>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="section-colored">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Modern Business Features Include:</h2>
                    <ul>
                        <li>Bootstrap 3 Framework</li>
                        <li>Mobile Responsive Design</li>
                        <li>Predefined File Paths</li>
                        <li>Working PHP Contact Page</li>
                        <li>Minimal Custom CSS Styles</li>
                        <li>Unstyled: Add Your Own Style and Content!</li>
                        <li>Font-Awesome fonts come pre-installed!</li>
                        <li>100% <strong>Free</strong> to Use</li>
                        <li>Open Source: Use for any project, private or commercial!</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="http://placehold.it/700x450/ffffff/cccccc">
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-responsive" src="http://placehold.it/700x450">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Modern Business Features Include:</h2>
                    <ul>
                        <li>Bootstrap 3 Framework</li>
                        <li>Mobile Responsive Design</li>
                        <li>Predefined File Paths</li>
                        <li>Working PHP Contact Page</li>
                        <li>Minimal Custom CSS Styles</li>
                        <li>Unstyled: Add Your Own Style and Content!</li>
                        <li>Font-Awesome fonts come pre-installed!</li>
                        <li>100% <strong>Free</strong> to Use</li>
                        <li>Open Source: Use for any project, private or commercial!</li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->
    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <!-- JavaScript -->
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

</body>

</html>
