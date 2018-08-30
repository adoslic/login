<?php 	require 'php/inc/header.php'; 
		include 'php/core/connect.php';
		session_start();
?>

	<body>
		<div class="container">
			<p> Dobro došli <?php  echo $_SESSION["ime"] . " " . $_SESSION["prezime"] ."!"?>
			<form action = "php/core/userLogout.php">
				<button >Odjava</button>
			</form>
			<div class="stepwizard">
				<div class="stepwizard-row setup-panel">
					<div class="stepwizard-step">
						<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
						<p>Osobni podac</p>
					</div>
					<div class="stepwizard-step">
						<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
						<p>Ponašanje i simptomi</p>
					</div>
					<div class="stepwizard-step">
						<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
						<p>Laboratorijski podaci</p>
					</div>
				</div>
			</div>
			<form role="form" method="POST" onsubmit="return false;" novalidate>
				<div class="row setup-content" id="step-1">
					<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
							<h3>Osobni podaci</h3>
						
							<div class="form-group">
								<label for="godine" class="col-xs-12 col-sm-6 col-md-6 control-label">Godine:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group godine">
											<a class="btn btn-primary btn-sm active" data-toggle="godine" data-title="<45"><45</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="godine" data-title="45-54">45-54</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="godine" data-title="55-64">55-64</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="godine" data-title=">64">>64</a>
										</div>
										<input type="hidden" name="godine" id="godine" required="required">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="spol" class="col-xs-12 col-sm-6 col-md-6 control-label">Spol:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group spol">
											<a class="btn btn-primary btn-sm active" data-toggle="spol" data-title="M">Muško</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="spol" data-title="Z">Žensko</a>
										</div>
										<input type="hidden" name="spol" id="spol" required="required">
									</div>
								</div>
							</div>
							</br>
							
							<div class="form-group">
								<label for="ITM" class="col-xs-12 col-sm-6 col-md-6 control-label">Indeks tjelesne mase:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group ITM">
											<a class="btn btn-primary btn-sm active" data-toggle="ITM" data-title="<25"><25</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="ITM" data-title="25-30">25-30</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="ITM" data-title=">30">>30</a>
										</div>
										<input type="hidden" name="ITM" id="ITM" required="required">
									</div>
								</div>
							</div>
							
							<div class="form-group struk">
								<label for="struk" class="col-xs-12 col-sm-6 col-md-6 control-label">Opseg struka:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<input type="number" name="quantity" id="struk" min="50" max="150" required="required" class="form-control input-sm" value="50">
								</div>
							</div>

							<div class="form-group col-xs-12 col-sm-10 col-md-8">
								<button class="btn btn-primary nextBtn" type="button">Dalje</button>
							</div>
					</div>
				</div>
				<div class="row setup-content" id="step-2">
					<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
							<h3>Ponašanje i simptomi</h3>
							
							<div class="form-group">
								<label for="aktivnost" class="col-xs-12 col-sm-6 col-md-6 control-label">Tjelesna aktivnost(tjedno):</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group aktivnost">
											<a class="btn btn-primary btn-sm active" data-toggle="aktivnost" data-title="<1"><1</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="aktivnost" data-title="1-2">1-2</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="aktivnost" data-title="2-4">2-4</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="aktivnost" data-title=">4">>4</a>
										</div>
										<input type="hidden" name="aktivnost" id="aktivnost">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="voce" class="col-xs-12 col-sm-6 col-md-6 control-label">Konzumacija voća i povrća:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group voce">
											<a class="btn btn-primary btn-sm active" data-toggle="voce" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="voce" data-title="Da">Da</a>
										</div>
										<input type="hidden" name="voce" id="voce">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="secer" class="col-xs-12 col-sm-6 col-md-6 control-label">Povišena razina šećera u krvi:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group secer">
											<a class="btn btn-primary btn-sm active" data-toggle="secer" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="secer" data-title="Da">Da</a>
										</div>
										<input type="hidden" name="secer" id="secer">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="pusenje" class="col-xs-12 col-sm-6 col-md-6 control-label">Pušenje:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group pusenje">
											<a class="btn btn-primary btn-sm active" data-toggle="pusenje" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="pusenje" data-title="Da">Da</a>
										</div>
										<input type="hidden" name="pusenje" id="pusenje">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="polidipsija" class="col-xs-12 col-sm-6 col-md-6 control-label">Polidipsija:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group polidipsija">
											<a class="btn btn-primary btn-sm active" data-toggle="polidipsija" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="polidipsija" data-title="Da">Da</a>
										</div>
										<input type="hidden" name="polidipsija" id="polidipsija">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="poliurija" class="col-xs-12 col-sm-6 col-md-6 control-label">Poliurija:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group poliurija">
											<a class="btn btn-primary btn-sm active" data-toggle="poliurija" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="poliurija" data-title="Da">Da</a>
										</div>
										<input type="hidden" name="poliurija" id="poliurija">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="polifagija" class="col-xs-12 col-sm-6 col-md-6 control-label">Polifagija:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group polifagija">
											<a class="btn btn-primary btn-sm active" data-toggle="polifagija" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="polifagija" data-title="Da">Da</a>
										</div>
										<input type="hidden" name="polifagija" id="polifagija">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="umor" class="col-xs-12 col-sm-6 col-md-6 control-label">Stalan umor:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group umor">
											<a class="btn btn-primary btn-sm active" data-toggle="umor" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="umor" data-title="Da">Da</a>
										</div>
										<input type="hidden" name="umor" id="umor">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="vid" class="col-xs-12 col-sm-6 col-md-6 control-label">Nejasan vid:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group vid">
											<a class="btn btn-primary btn-sm active" data-toggle="vid" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="vid" data-title="Da">Da</a>
										</div>
										<input type="hidden" name="vid" id="vid">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="tezina" class="col-xs-12 col-sm-6 col-md-6 control-label">Neobjašnjiv gubitak težine:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group tezina">
											<a class="btn btn-primary btn-sm active" data-toggle="tezina" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="tezina" data-title="Da">Da</a>
										</div>
										<input type="hidden" name="tezina" id="tezina">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="stopala" class="col-xs-12 col-sm-6 col-md-6 control-label">Problemi sa stopalima:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group stopala">
											<a class="btn btn-primary btn-sm active" data-toggle="stopala" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="stopala" data-title="Da">Da</a>
										</div>
										<input type="hidden" name="stopala" id="stopala">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="rane" class="col-xs-12 col-sm-6 col-md-6 control-label">Rane koje ne zacjeljuju:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group rane">
											<a class="btn btn-primary btn-sm active" data-toggle="rane" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="rane" data-title="Da">Da</a>
										</div>
										<input type="hidden" name="rane" id="rane">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="nasljede" class="col-xs-12 col-sm-6 col-md-6 control-label">Nasljeđe:</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group nasljede">
											<a class="btn btn-primary btn-sm active" data-toggle="nasljede" data-title="Ne">Ne</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="nasljede" data-title="Daleka obitelj">Daljnja obitelj</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="nasljede" data-title="Bliža obitelj">Bliža obitelj</a>
										</div>
										<input type="hidden" name="nasljede" id="nasljede">
									</div>
								</div>
							</div>
							<div class="form-group col-xs-12 col-sm-10 col-md-8">
								<button class="btn btn-primary nextBtn" type="button" >Dalje</button>
							</div>
					</div>
				</div>
				<div class="row setup-content" id="step-3">
					<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
							<h3>Laboratorijski podaci</h3>
							
							<div class="form-group">
								<label for="sistolicki" class="col-xs-12 col-sm-6 col-md-6 control-label">Sistolički tlak(mmHg):</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group sistolicki">
											<a class="btn btn-primary btn-sm active" data-toggle="sistolicki" data-title="<120"><120</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="sistolicki" data-title="120-135">120-135</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="sistolicki" data-title=">135">>135</a>
										</div>
										<input type="hidden" name="sistolicki" id="sistolicki">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="dijastolicki" class="col-xs-12 col-sm-6 col-md-6 control-label">Dijastolički tlak(mmHg):</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group dijastolicki">
											<a class="btn btn-primary btn-sm active" data-toggle="dijastolicki" data-title="<80"><80</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="dijastolicki" data-title="80-90">80-90</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="dijastolicki" data-title=">90">>90</a>
										</div>
										<input type="hidden" name="dijastolicki" id="dijastolicki">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="LDL" class="col-xs-12 col-sm-6 col-md-6 control-label">LDL kolesterol(mmol/L):</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group LDL">
											<a class="btn btn-primary btn-sm active" data-toggle="LDL" data-title="<3.38"><3.38</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="LDL" data-title=">3.38">>3.38</a>
										</div>
										<input type="hidden" name="LDL" id="LDL">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="HDL" class="col-xs-12 col-sm-6 col-md-6 control-label">HDL kolesterol(mmol/L):</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group HDL">
											<a class="btn btn-primary btn-sm active" data-toggle="HDL" data-title="<1.06"><1.06</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="HDL" data-title="1.06-1.32">1.06-1.32</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="HDL" data-title=">1.32">>1.32</a>
										</div>
										<input type="hidden" name="HDL" id="HDL">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="glukoza" class="col-xs-12 col-sm-6 col-md-6 control-label">Glukoza u krvi(mmol/L):</label>
								<div class="col-sm-6 col-md-6 pull-right">
									<div class="input-group">
										<div id="radioBtn" class="btn-group glukoza">
											<a class="btn btn-primary btn-sm active" data-toggle="glukoza" data-title="<5.27"><5.27</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="glukoza" data-title="5.27-5.72">5.27-5.72</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="glukoza" data-title=">5.72">>5.72</a>
										</div>
										<input type="hidden" name="glukoza" id="glukoza">
									</div>
								</div>
							</div>
							<div class="form-group col-xs-12 col-sm-10 col-md-8">
								<button class="btn btn-primary" id="finishBtn">Izračunaj</button>
							</div>
					</div>
				</div>
			</form>
		</div>

			<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Rezultat</h4>
		      </div>
		      <div class="modal-body" id="Modalcontainer">
		      		<p>Vjerojatnost da bolujete od dijabetesa iznosi:</p>
                <div class="progress-bar position" id="progress-bar" data-duration="100" data-color="#ccc,#2E9AFE"></div>

		      </div>
		      <div class="modal-footer">
		      	
		        	<button type="button"  class="btn btn-default" data-dismiss="modal">Zatvori</button>
		    	
		  	  </div>
		    </div>
		  </div>
		</div>
		
	
		
		<script src="js/FirstPageJS.js"></script>
		<script src="js/RadioBoxJS.js"></script>

		<script src="js/jQuery-plugin-progressbar.js"></script>


			<script type="text/javascript" >
			  var godine;
			  var spol;
			  var ITM;
			  var struk;
			  var aktivnost;
			  var voce;
			  var secer;
			  var pusenje;
			  var polidipsija;
			  var poliurija;
			  var polifagija;
			  var umor;
			  var vid;
			  var tezina;
			  var stopala;
			  var rane;
			  var nasljede;
			  var sistolicki;
			  var dijastolicki;
			  var LDL;
			  var HDL;
			  var glukoza;
			  var struk;
			  var bodovi = 0;
			  $('#finishBtn').on('click', function () { 
				  	$(".godine a").each(function(){
				  		if($(this).hasClass("active")){
				  			godine = $(this).attr("data-title");
				  			console.log(godine);
				  		
					  		if(godine == "<45"){
					  			//0;
					  		}else if(godine == "45-54"){
					  			bodovi+=1;
					  		}
					  		else if(godine == "55-64"){
					  			bodovi+=3;
					  		}
					  		else{
					  			bodovi+=4;
					  		}
					  	}
					});
					
				  	
					$(".spol a").each(function(){
			  		if($(this).hasClass("active")){
			  			spol = $(this).attr("data-title");
			  			console.log(spol);
			  		
				  		struk = $("#struk").val();
				  		console.log(struk);
			  		
						if(spol == "M"){
					  			if(struk<94){
					  				//0
					  			}
					  			else if(struk>94 && struk<102){
					  				bodovi+=3;
					  			}
					  			else{
					  				bodovi+=4;
					  			}
					  	}else{
					  			if(struk<80){
					  				//0
					  			}
					  			else if(struk>80 && struk<88){
					  				bodovi+=3;
					  			}
					  			else{
					  				bodovi+=4;
					  		}
				  		}
				  	}
					});
					
					$(".ITM a").each(function(){
			  		if($(this).hasClass("active")){
			  			ITM = $(this).attr("data-title");
			  			console.log(ITM);
			  		
						if(ITM == "<25"){
				  			//0
				  		}else if(ITM == "25-30"){
				  			bodovi+=1;;
				  		}
				  		else{
					  			bodovi+=3;
				  		}
				  	}
					});

					$(".aktivnost a").each(function(){
			  		if($(this).hasClass("active")){
			  			aktivnost = $(this).attr("data-title");
			  			console.log(aktivnost);
			  		
						if(aktivnost == "<1"){
					  			bodovi+=2;
					  		}else if(aktivnost == "1-2"){
					  			bodovi+=1;
					  		}
					  		else if(aktivnost == "2-4"){
					  			//0
					  		}
					  		else{
					  			bodovi-=1;
					  		}
				  	}
					});

					$(".voce a").each(function(){
			  		if($(this).hasClass("active")){
			  			voce = $(this).attr("data-title");
			  			console.log(voce);
			  		
						if(voce == "Ne"){
							bodovi+=1;
						}else{
							//0
						}
					}
					});
					

					$(".secer a").each(function(){
			  		if($(this).hasClass("active")){
			  			secer = $(this).attr("data-title");
			  			console.log(secer);
			  		
						if(secer == "Ne"){
							//0
						}else{
							bodovi+=5;
						}
					}
					});
					

					$(".pusenje a").each(function(){
			  		if($(this).hasClass("active")){
			  			pusenje = $(this).attr("data-title");
			  			console.log(pusenje);
			  		
						if(pusenje == "Ne"){
							//0
						}else{
							bodovi+=1;
						}
					}
					});
					

					$(".polidipsija a").each(function(){
			  		if($(this).hasClass("active")){
			  			polidipsija = $(this).attr("data-title");
			  			console.log(polidipsija);
			  		
						if(polidipsija == "Ne"){
							//0
						}else{
							bodovi+=4;
						}
					}
					});
					
					$(".poliurija a").each(function(){
			  		if($(this).hasClass("active")){
			  			poliurija = $(this).attr("data-title");
			  			console.log(poliurija);
			  		
						if(poliurija == "Ne"){
							//0
						}else{
							bodovi+=4;
						}
					}
					});
					

					$(".polifagija a").each(function(){
			  		if($(this).hasClass("active")){
			  			polifagija = $(this).attr("data-title");
			  			console.log(polifagija);
			  		
						if(polifagija == "Ne"){
							//0
						}else{
							bodovi+=2;
						}
					}
					});
					

					$(".umor a").each(function(){
			  		if($(this).hasClass("active")){
			  			umor = $(this).attr("data-title");
			  			console.log(umor);
			  		
						if(umor == "Ne"){
							//0
						}else{
							bodovi+=2;
						}
					}
					});
					

					$(".vid a").each(function(){
			  		if($(this).hasClass("active")){
			  			vid = $(this).attr("data-title");
			  			console.log(vid);
			  		
						if(vid == "Ne"){
							//0
						}else{
							bodovi+=2;
						}
					}
					});
					

					$(".tezina a").each(function(){
			  		if($(this).hasClass("active")){
			  			tezina = $(this).attr("data-title");
			  			console.log(tezina);
			  		
						if(tezina == "Ne"){
							//0;
						}else{
							bodovi+=2;
						}
					}
					});
					

					$(".stopala a").each(function(){
			  		if($(this).hasClass("active")){
			  			stopala = $(this).attr("data-title");
			  			console.log(stopala);
			  		
						if(stopala == "Ne"){
							//0
						}else{
							bodovi+=3;
						}
					}
					});
					
					$(".rane a").each(function(){
			  		if($(this).hasClass("active")){
			  			rane = $(this).attr("data-title");
			  			console.log(rane);
			  		
						if(rane == "Ne"){
							//0
						}else{
							bodovi+=2;
						}
					}
					});
					
					$(".nasljede a").each(function(){
			  		if($(this).hasClass("active")){
			  			nasljede = $(this).attr("data-title");
			  			console.log(nasljede);
			  		
						if(nasljede == "Ne"){
							//0
						}else if(nasljede == "Daljnja obitelj"){
							bodovi+=3;
						}else{
							bodovi+=5;
						}
					}
					});
					
					$(".sistolicki a").each(function(){
			  		if($(this).hasClass("active")){
			  			sistolicki = $(this).attr("data-title");
			  			console.log(sistolicki);
			  		
						if(sistolicki == "<120"){
							//0
						}else if(sistolicki == "120-135"){
							bodovi+=2;
						}else{
							bodovi+=3;
						}
					}
					});
					

					$(".dijastolicki a").each(function(){
			  		if($(this).hasClass("active")){
			  			dijastolicki = $(this).attr("data-title");
			  			console.log(dijastolicki);
			  		
						if(dijastolicki == "<80"){
							//0
						}else if(dijastolicki == "80-90"){
							bodovi+=2;
						}else{
							bodovi+=4;
						}
					}
					});
					

					$(".LDL a").each(function(){
			  		if($(this).hasClass("active")){
			  			LDL = $(this).attr("data-title");
			  			console.log(LDL);
			  		
						if(LDL == "<3.38"){
							//0
						}else{
							bodovi+=1;
						}
					}
					});
					

					$(".HDL a").each(function(){
			  		if($(this).hasClass("active")){
			  			HDL = $(this).attr("data-title");
			  			console.log(HDL);
			  		
						if(HDL == "<1.06"){
							bodovi+=3;
						}else if(HDL == "1.06-1.32"){
							bodovi+=1;
						}else{
							//0
						}
					}
					});
					

					$(".glukoza a").each(function(){
			  		if($(this).hasClass("active")){
			  			glukoza = $(this).attr("data-title");
			  			console.log(glukoza);
			  		
						if(glukoza == "<5.27"){
							//0
						}else if(glukoza == "5.27-5.72"){
							bodovi+=2;
						}else{
							bodovi+=5;
						}
					}
					});
					
					$('#progress-bar').attr('data-percent',Math.round((bodovi/62)*100));
					$(".progress-bar").loading();
					$('#myModal').modal('show');
	    	   }); //end of finish buttoin
				
				 var userID ="<?php echo $_SESSION['user_id'];?>";
				 //console.log(userID);
				 $('#finishBtn').on('click', function () { 
				 	$.ajax({
					    type: 'POST',
					    url: 'php/core/userTest.php',
					    data: { 
					    	'userID': userID,
					        'godine': godine,
					        'spol': spol,
					        'ITM': ITM,
					        'struk': struk,
					        'aktivnost': aktivnost,
					        'voce': voce,
					        'secer': secer,
					        'pusenje': pusenje,
					        'polidipsija': polidipsija,
					        'poliurija': poliurija,
					        'polifagija': polifagija,
					        'umor': umor,
					        'vid': vid,
					        'tezina': tezina,
					        'stopala': stopala,
					        'rane': rane,
					        'nasljede': nasljede,
					        'sistolicki': sistolicki,
					        'dijastolicki': dijastolicki,
					        'LDL': LDL,
					        'HDL': HDL,
					        'glukoza': glukoza
					    },
					    error:function(data){
							alert("error occured"); //===Show Error Message====
						}
					});

				 });
					
			</script>
	</body>
</html>