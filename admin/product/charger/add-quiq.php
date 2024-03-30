<?php require'../../Connections/connect.php'; ?>
<?php
	session_start();
	if(isset($_SESSION["UI"])){
	}else{
		header('Location: ../../login.php');
	}
?>
<?php

	if(isset($_POST['AddNew'])){
		// Feature Details
		$CID = $_POST['CID'];
		$Title = $_POST['Title'];
		$Usages = $_POST['Usages'];
		$Type = $_POST['Type'];
		// AC Input
		$ACIC = $_POST['ACIC'];
		$ACIVR = $_POST['ACIVR'];
		$ACNIV = $_POST['ACNIV'];
		$ACIF = $_POST['ACIF'];
		$ACICn = $_POST['ACICn'];
		$ACICm = $_POST['ACICm'];
		// DC Input
		$DCNOV = $_POST['DCNOV'];
		$DCMOV = $_POST['DCMOV'];
		$DCMOC = $_POST['DCMOC'];
		$DCMOP = $_POST['DCMOP'];
		$DCDDR = $_POST['DCDDR'];
		$DCMIC = $_POST['DCMIC'];
		$DCBT = $_POST['DCBT'];
		$DCRP = $_POST['DCRP'];
		$DCSC = $_POST['DCSC'];
		$DCOC = $_POST['DCOC'];
		// Mechanical
		$MEDi = $_POST['MEDi'];
		$MEWe = $_POST['MEWe'];
		// Environmental 
		$ENEn = $_POST['ENEn'];
		$ENOT = $_POST['ENOT'];
		$ENST = $_POST['ENST'];
		// Regulatory
		$RES = $_POST['RES'];
		$REE = $_POST['REE'];
		$REI = $_POST['REI'];
		// Application
		$App_Cat = $_POST['App_Cat'];
		// Default
		$Group = 'quiq';
		$quiq = $connection->query("INSERT INTO quiq_all (CID, Name, Title, Usages, Type, ACIC, ACIVR, ACNIV, ACIF, ACICn, ACICm, DCNOV, DCMOV, DCMOC, DCMOP, DCDDR, DCMIC, DCBT, DCRP, DCSC, DCOC, MEDi, MEWe, ENEn, ENOT, ENST, RES, REE, REI)Values('{$CID}', '{$CID}', '{$Title}', '{$Usages}', '{$Type}', '{$ACIC}', '{$ACIVR}', '{$ACNIV}', '{$ACIF}', '{$ACICn}', '{$ACICm}', '{$DCNOV}', '{$DCMOV}', '{$DCMOC}', '{$DCMOP}', '{$DCDDR}', '{$DCMIC}', '{$DCBT}', '{$DCRP}', '{$DCSC}', '{$DCOC}', '{$MEDi}', '{$MEWe}', '{$ENEn}', '{$ENOT}', '{$ENST}', '{$RES}', '{$REE}', '{$REI}')");

		header('Location: ../../product/charger/quiq.php');
	}
	
?>
<!-- End PHP -->
<!DOCTYPE html>
<html>
<head>
<?php include'include/tag.php'; ?>
<title>Add New QuiQ Battery Charger | 1Battery | LockersITSolution</title>
<?php include'include/link.php'; ?>
</head>

<body>
<!-- Top Menu -->
<?php include'include/top-menu.php'; ?>

<!-- Side Menu -->
<?php include'include/side-menu.php'; ?>	
		
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="../../index.php" title="Admin Home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li><a href="../../product/charger/quiq.php" title="QuiQ Charger"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></a></li>
			<li class="active">Add New QuiQ Charger</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Add New<a href="../../product/charger/quiq.php" class="btn btn-primary pull-right">Back to QuiQ</a></h1>
		</div>
	</div><!--/.row-->
				
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Enter your QuiQ Charger details. Must fill the *required field</div>
				<div class="panel-body">
					<form role="form" method="post">
						<!-- Feature Details -->
						<div class="col-md-12">
							<label><u>Feature Details</u></label>
							<div class="col-md-12">
								<div class="form-group">
									<label>Name/Model* (It also use as an ID)</label>
									<input name="CID" id="CID" required type="text" class="form-control" placeholder="Charger Model '913-2400' etc" />
								</div>						
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Title*</label>
									<input name="Title" id="Title" required type="text" class="form-control" placeholder="'Standard Charger' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Usage*</label>
									<input name="Usages" id="Usages" required type="text" class="form-control" placeholder="'Off-Board' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Type*</label>
									<input name="Type" id="Type" required type="text" class="form-control" placeholder="'Standard' etc" />
								</div>
							</div>	
						</div>	<!-- /Feature Details -->
						<!-- AC Input -->
						<div class="col-md-12">
							<div class="col-md-12"><label><u>AC Input</u></label></div>
							<div class="col-md-4">
								<div class="form-group">
									<label>AC input connector*</label>
									<input name="ACIC" id="ACIC" required type="text" class="form-control" placeholder="'IEC320/C14 Universal AC Input (World Charger)' etc" />
								</div>
								<div class="form-group">
									<label>AC Input Voltage Range*</label>
									<input name="ACIVR" id="ACIVR" required type="text" class="form-control" placeholder="'85 - 265 VAC (universal all models)' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Nominal AC Input Voltage*</label>
									<input name="ACNIV" id="ACNIV" required type="text" class="form-control" placeholder="'120 VAC / 230 VAC rms' etc" />
								</div>
								<div class="form-group">
									<label>AC Input Frequency*</label>
									<input name="ACIF" id="ACIF" required type="text" class="form-control" placeholder="'45 - 65 Hz' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>AC Input Current (Nominal)*</label>
									<input name="ACICn" id="ACICn" required type="text" class="form-control" placeholder="'	10 A rms @ 120 VAC / 5 A rms @ 230 VAC' etc" />
								</div>
								<div class="form-group">
									<label>AC Input Current (Max)*</label>
									<input name="ACICm" id="ACICm" required type="text" class="form-control" placeholder="'12 A @ 120 VAC / 6A @ 230VAC' etc" />
								</div>
							</div>
						</div>	<!-- /AC Input -->
						<!-- DC Output -->
						<div class="col-md-12">
							<div class="col-md-12"><label><u>DC Output</u></label></div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Nominal DC Output Voltage*</label>
									<input name="DCNOV" id="DCNOV" required type="text" class="form-control" placeholder="'24 V' etc" />
								</div>
								<div class="form-group">
									<label>Maximum DC Output Voltage*</label>
									<input name="DCMOV" id="DCMOV" required type="text" class="form-control" placeholder="'34 V' etc" />
								</div>
								<div class="form-group">
									<label>Maximum DC Output Current*</label>
									<input name="DCMOC" id="DCMOC" required type="text" class="form-control" placeholder="'25 A' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Maximum DC Output Power*</label>
									<input name="DCMOP" id="DCMOP" required type="text" class="form-control" placeholder="'695 W' etc" />
								</div>
								<div class="form-group">
									<label>Deep Discharge Recovery(minimum voltage)*</label>
									<input name="DCDDR" id="DCDDR" required type="text" class="form-control" placeholder="'6 V' etc" />
								</div>
								<div class="form-group">
									<label>Maximum Interlock Current*</label>
									<input name="DCMIC" id="DCMIC" required type="text" class="form-control" placeholder="'1 A' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Battery Type*</label>
									<input name="DCBT" id="DCBT" required type="text" class="form-control" placeholder="'Lead acid (Wet / AGM / GEL), lithium ion' etc" />
								</div>
								<div class="form-group">
									<label>Reverse Polarity*</label>
									<input name="DCRP" id="DCRP" required type="text" class="form-control" placeholder="'Electronic Protection with Auto-Reset' etc" />
								</div>
								<div class="form-group">
									<label>Short Circuit*</label>
									<input name="DCSC" id="DCSC" required type="text" class="form-control" placeholder="'Electronic current limit' etc" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>DC Output Connector*</label>
									<input name="DCOC" id="DCOC" required type="text" class="form-control" placeholder="'2.5m (8.2 ft) Anderson SB50 RED<br>*Custom Cable Configurations Available (SB175, SBX75x, etc.)' etc" />
								</div>
							</div>
						</div>	<!-- /DC Output -->
						<!-- Mechanical -->
						<div class="col-md-12">
							<div class="col-md-12"><label><u>Mechanical</u></label></div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Dimensions*</label>
									<input name="MEDi" id="MEDi" required type="text" class="form-control" placeholder="'28 x 24.6 x 11cm (11.0 x 9.7 x 4.3 inch)' etc" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Weight*</label>
									<input name="MEWe" id="MEWe" required type="text" class="form-control" placeholder="'< 5kg (< 11.0lbs)' etc" />
								</div>
							</div>
						</div>	<!-- /Mechanical -->
						<!-- Environmental -->
						<div class="col-md-12">
							<div class="col-md-12">
								<label><u>Environmental</u></label>
								<div class="form-group">
									<label>Enclosure*</label>
									<input name="ENEn" id="ENEn" required type="text" class="form-control" placeholder="'IP66 (NEMA4)' etc" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Operating Temperature*</label>
									<input name="ENOT" id="ENOT" required type="text" class="form-control" placeholder="'-30°C t+50°C (-22°F t122°F), Derated >30°C (86°F), <0°C (32°F)' etc" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Storage Temperature*</label>
									<input name="ENST" id="ENST" required type="text" class="form-control" placeholder="'-40°C t+70°C (-40°F t158°F)' etc" />
								</div>
							</div>
						</div>	<!-- /Environmental -->
						<!-- Regulatory -->
						<div class="col-md-12">
							<div class="col-md-12"><label><u>Regulatory</u></label></div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Safety*</label>
									<input name="RES" id="RES" required type="text" class="form-control" placeholder="'UL approved tUL1564 3rd Ed. and CSA 107.2, EN 60335-1/2-29. Designed tmeet UL2202 1st Ed.' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Emissions*</label>
									<input name="REE" id="REE" required type="text" class="form-control" placeholder="'FCC Part 15 / ICES 003 Class A, EN 55011' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Immunity*</label>
									<input name="REI" id="REI" required type="text" class="form-control" placeholder="'EN 61000-3-2, EN 61000-3-3, EN61000-4-2/-3/-4/-5/-6/-11' etc" />
								</div>
							</div>
						</div>	<!-- /Regulatory -->
						<div class="col-md-12">
							<div class="form-group">
								<label for="App_Cat">Application* <font color="red">Carefull for this box</font></label>
								<select class="form-control" name="App_Cat" id="App_Cat" required>
									<option value="AWP">Aerial Work Platforms</option>
									<option value="CT">Commercial Trucking</option>
									<option value="FC">Floor Care</option>
									<option value="GEV">Golf / Electric Vehicles</option>
									<option value="M">Marine</option>
									<option value="MH">Material Handling</option>
									<option value="OG">Oil & Gas</option>
									<option value="RV">Recreational Vehicles</option>
									<option value="SRE">Solar / Renewable Energy</option>
									<option value="UPS">UPS</option>
								</select>
							</div>
						</div>
						<button name="AddNew" id="AddNew" type="submit" class="btn btn-primary pull-right">Add New</button>
						<button type="reset" class="btn btn-default pull-left">Reset</button>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</div><!--/.main-->

<?php include'include/link-footer.php'; ?>
	
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>
<!--
 * Designed By Locker LT Solution (http://it.brainlockerltd.com)
 * Powered By Brain Locker Ltd. (http://brainlockerltd.com)
 -->
</html>
