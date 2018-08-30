<?php require 'php/inc/header.php'; 
include('php/core/userLogin.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
	header("location: firstPage.php");
}
?>
<body>
<div class="container-fluid">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-primary">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Prijava </h3>
			 	</div>
			 	<div class="alert alert-danger">
				  <strong><span><?php echo $error; ?></span></strong> 
				</div>
			 			<div class="panel-body">
							<form role="form" method="POST" action="">
			    			<div class="form-group">
								<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Upišite email adresu">
								</div>
							</div>
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Upišite lozinku">
										</div>
									</div>
			    				</div>
			    			</div>
			    			<input type="submit" name="submit" value="Logiranje" class="btn btn-info pull-right">
							</form>
						</div>
	    	</div>
    	</div>
	</div>
</div>
</body>
</html>