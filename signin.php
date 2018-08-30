<?php require 'php/inc/header.php';
include 'php/core/userSign.php';
if(isset($_SESSION['login_user'])){
	header("location: login.php");
}
?>

<body>
<div class="container-fluid">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-primary">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Registracija </h3>
			 	</div>
			 	<div class="alert alert-danger">
				  <strong><span><?php echo $error; ?></span></strong> 
				</div>
			 			<div class="panel-body">
			    		<form role="form" method="POST" action="">
			    			<div class="row">
			    				<div class="col-sm-12">
			    					<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Upišite ime" required="required">
										</div>
									</div>
			    				</div>
							</div>
							<div class="row">
			    				<div class="col-sm-12">
			    					<div class="form-group">
									<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			    			<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Upišite prezime" required="required">
										</div>
									</div>
			    				</div>
			    			</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
			    			<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Upišite email adresu" required="required">
										</div>
									</div>
								</div>
							</div>
			    			<div class="row">
			    				<div class="col-sm-12">
			    					<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Upišite lozinku" required="required">
										</div>
									</div>
			    				</div>
							</div>
							<div class="row">
			    				<div class="col-sm-12">
			    					<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Potvrdite loziku" required="required">
										</div>
									</div>
			    				</div>
			    			</div>
			    			<button class="btn btn-primary" name="submit" type="submit">pošalji</button>
			    		</form>
			    	</div>
	    		</div>
    		</div>
		</div>
	</div>

	<script type="text/javascript">
	//	  $('#regBtn').on('click', function () { 
     //  			alert('clicked');
    //	   });
	</script>
</body>
</html>