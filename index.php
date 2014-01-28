<?PHP
require_once("./servidor/loginRegister/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio</title>
	<script src="js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript">
	$(function() {
		$('#addapp').click(function() {
			$.ajax({
				type: 'POST',
				url: 'servidor/router.php/proy',
				dataType: 'text',
				data: { name: $('#name').val(), temp: $('[type="radio"]').val(), mail: $('#mail').val()}
			}).done(function(data) {
				$.ajax({
					type: 'POST',
					url: 'servidor/router.php/show',
					dataType: 'JSON',
					data: {mail: $('#mail').val()}
				}).done(function(data) {
					$( ".proy" ).empty();
					for(var i = 0 ; i < data.length ; i++){
						$('.proy').append('<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a class="thumbnail" href="#">'+data[i]+'</a></div>');
					}
				}).fail(function() {
					console.log("error", arguments);
				});
			}).fail(function() {
				console.log("error", arguments);
			});
		});
		$.ajax({
			type: 'POST',
			url: 'servidor/router.php/show',
			dataType: 'JSON',
			data: {mail: $('#mail').val()}
		}).done(function(data) {
		    debugger
			$( ".proy" ).empty();
			for(var i = 0 ; i < data.length ; i++){
				$('.proy').append('<div class="col-lg-3 col-md-4 col-xs-6 thumb"><a class="thumbnail" href="#">'+data[i]+'</a></div>');
			}
		}).fail(function() {
			console.log("error", arguments);
		});
	});
	</script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
                    <form class="navbar-form pull-left">
                        <a class="btn bg-nephritis" href="#" data-toggle="modal" data-target="#myModal"><span class="fa fa-pencil"></span></a>
                    </form>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span> <?= $fgmembersite->UserFullName(); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="change-pwd.php">Cambiar contraseña</a>
                            </li>
                            <li><a href="#">Ayuda</a>
                            </li>
                            <li><a href="logout.php">Cerrar session</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <div class="section">

        <div class="container">

            <div class="row">
            	<h2>Mis Proyectos:</h2>
                
                <hr>
                
                <div class="col-lg-12 proy">
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
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog p">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="form-signin-heading">Crear Proyecto</h4>
		  </div>
		  <div class="modal-body">
				<input type="hidden" id="mail" value="<?= $fgmembersite->UserEmail(); ?>"/>
				<input type="text" class="form-control" placeholder="Nombre de proyeto" name="proy" id="name" value="">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-primary col-xs-4">
						<input type="radio" value="blanco" name="temp"><img src="img/bl.png" width="100%" height="100%" >
					</label>
					<label class="btn btn-primary col-xs-4">
						<input type="radio" value="temp1" name="temp"><img src="img/a.png" width="100%" height="100%" >
					</label>
					<label class="btn btn-primary col-xs-4">
						<input type="radio" value="temp2" name="temp"><img src="img/b.png" width="100%" height="100%" >
					</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block bcproy" type="submit" class="close" data-dismiss="modal" aria-hidden="true" name="cProy" id="addapp">Crear Proyecto</button>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
    <!-- JavaScript -->
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

</body>

</html>
