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
		$Current = $_POST['Current'];
		$Power = $_POST['Power'];
		$Threshold = $_POST['Threshold'];
		// AC Input
		$ACIC = $_POST['ACIC'];
		$ACIVR = $_POST['ACIVR'];
		$ACNIV = $_POST['ACNIV'];
		$ACNIF = $_POST['ACNIF'];
		$ACMIC = $_POST['ACMIC'];
		$ACNIC = $_POST['ACNIC'];
		$ACNPF = $_POST['ACNPF'];
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
		$MEDP = $_POST['MEDP'];
		$MEMH = $_POST['MEMH'];
		$MEC = $_POST['MEC'];
		// Environmental 
		$ENEn = $_POST['ENEn'];
		$ENOT = $_POST['ENOT'];
		$ENST = $_POST['ENST'];
		// Regulatory
		$REEf = $_POST['REEf'];
		$RESa = $_POST['RESa'];
		$REEm = $_POST['REEm'];
		$REIm = $_POST['REIm'];
		// Application
		$App_Cat = $_POST['App_Cat'];
		// Default
		$Group = 'ic650';
		$ic650 = $connection->query("INSERT INTO ic650 (CID, Model, Usages, Type, Current, Power, Threshold)Values('{$CID}', '{$CID}', '{$Usages}', '{$Type}', '{$Current}', '{$Power}', '{$Threshold}')");
		$detalis = $connection->query("INSERT INTO ac_dc_mec_env_reg (CID, Name, Title, ACIC, ACIVR, ACNIV, ACNIF, ACMIC, ACNIC, ACNPF, DCNOV, DCMOV, DCMOC, DCMOP, DCDDR, DCMIC, DCBT, DCRP, DCSC, DCOC, MEDi, MEWe, MEDP, MEMH, MEC, ENEn, ENOT, ENST, REEf, RESa, REEm, REIm)Values('{$CID}', '{$CID}', '{$Title}', '{$ACIC}', '{$ACIVR}', '{$ACNIV}', '{$ACNIF}', '{$ACMIC}', '{$ACNIC}', '{$ACNPF}', '{$DCNOV}', '{$DCMOV}', '{$DCMOC}', '{$DCMOP}', '{$DCDDR}', '{$DCMIC}', '{$DCBT}', '{$DCRP}', '{$DCSC}', '{$DCOC}', '{$MEDi}', '{$MEWe}', '{$MEDP}', '{$MEMH}', '{$MEC}', '{$ENEn}', '{$ENOT}', '{$ENST}', '{$REEf}', '{$RESa}', '{$REEm}', '{$REIm}')");

		header('Location: ../../product/charger/ic650.php');
	}
	
?>
<!-- End PHP -->
<!DOCTYPE html>
<html>
<head>
<?php include'include/tag.php'; ?>
<title>Add New IC650 Battery Charger | 1Battery | LockersITSolution</title>
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
			<li><a href="../../product/charger/ic650.php" title="IC650 Charger"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></a></li>
			<li class="active">Add New IC650 Charger</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Add New<a href="../../product/charger/ic650.php" class="btn btn-primary pull-right">Back to IC650</a></h1>
		</div>
	</div><!--/.row-->
				
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Enter your IC650 Charger details. Must fill the *required field</div>
				<div class="panel-body">
					<form role="form" method="post">
						<!-- Feature Details -->
						<div class="col-md-12">
							<label><u>Feature Details</u></label>
							<div class="col-md-12">
								<div class="form-group">
									<label>Name/Model* (It also use as an ID)</label>
									<input name="CID" id="CID" required type="text" class="form-control" placeholder="Charger Model '940-0001' etc" />
								</div>						
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Title*</label>
									<input name="Title" id="Title" required type="text" class="form-control" placeholder="'Base Charger' etc" />
								</div>
								<div class="form-group">
									<label>Usage*</label>
									<input name="Usages" id="Usages" required type="text" class="form-control" placeholder="'OFF-Board' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Type*</label>
									<input name="Type" id="Type" required type="text" class="form-control" placeholder="'Base' etc" />
								</div>
								<div class="form-group">
									<label>DC Output Current* (A)</label>
									<input name="Current" id="Current" required type="text" class="form-control" placeholder="'27.1' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>DC Output Power* (W)</label>
									<input name="Power" id="Power" required type="text" class="form-control" placeholder="'650' etc" />
								</div>
								<div class="form-group">
									<label>Low Voltage Threshold* (V)</label>
									<input name="Threshold" id="Threshold" required type="text" class="form-control" placeholder="'1.2' etc" />
								</div>
							</div>	<!-- /Feature Details -->
						</div>
						<!-- AC Input -->
						<div class="col-md-12">
							<div class="col-md-12">
								<label><u>AC Input</u></label>
								<div class="form-group">
									<label>AC input connector*</label>
									<input name="ACIC" id="ACIC" required type="text" class="form-control" placeholder="'IEC320/C14 Universal AC Input (World Charger)' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>AC Input Voltage Range*</label>
									<input name="ACIVR" id="ACIVR" required type="text" class="form-control" placeholder="'85 - 265 VAC (universal all models)' etc" />
								</div>
								<div class="form-group">
									<label>Normal AC Input Voltage*</label>
									<input name="ACNIV" id="ACNIV" required type="text" class="form-control" placeholder="'120 VAC / 230 VAC rms' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Normal AC Input Frequency*</label>
									<input name="ACNIF" id="ACNIF" required type="text" class="form-control" placeholder="'45 - 65 Hz' etc" />
								</div>
								<div class="form-group">
									<label>Maximum AC Input Current*</label>
									<input name="ACMIC" id="ACMIC" required type="text" class="form-control" placeholder="'7.5 A' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Nominal AC Input Current*</label>
									<input name="ACNIC" id="ACNIC" required type="text" class="form-control" placeholder="'7.3 A @ 100 VAC / 6 A @ 120 VAC / 3.1 A @ 240 VAC / 2.9 A @240 VAC' etc" />
								</div>
								<div class="form-group">
									<label>Nominal AC Power Factor*</label>
									<input name="ACNPF" id="ACNPF" required type="text" class="form-control" placeholder="'> 0.99 @ 120 VAC / > 0.98 @ 230 VAC' etc" />
								</div>
							</div>
						</div>	<!-- /AC Input -->
						<!-- DC Output -->
						<div class="col-md-12">
							<div class="col-md-12">
								<label><u>DC Output</u></label>
								<div class="form-group">
									<label>Nominal DC Output Voltage*</label>
									<input name="DCNOV" id="DCNOV" required type="text" class="form-control" placeholder="'24 V' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Maximum DC Output Voltage*</label>
									<input name="DCMOV" id="DCMOV" required type="text" class="form-control" placeholder="'36 V' etc" />
								</div>
								<div class="form-group">
									<label>Maximum DC Output Current*</label>
									<input name="DCMOC" id="DCMOC" required type="text" class="form-control" placeholder="'27.1 A' etc" />
								</div>
								<div class="form-group">
									<label>Maximum DC Output Power*</label>
									<input name="DCMOP" id="DCMOP" required type="text" class="form-control" placeholder="'650 W' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Deep Discharge Recovery(minimum voltage)*</label>
									<input name="DCDDR" id="DCDDR" required type="text" class="form-control" placeholder="'1.2 V' etc" />
								</div>
								<div class="form-group">
									<label>Maximum Interlock Current*</label>
									<input name="DCMIC" id="DCMIC" required type="text" class="form-control" placeholder="'1 A' etc" />
								</div>
								<div class="form-group">
									<label>Battery Type*</label>
									<input name="DCBT" id="DCBT" required type="text" class="form-control" placeholder="'Lead acid (Wet / AGM / GEL), lithium ion' etc" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Reverse Polarity*</label>
									<input name="DCRP" id="DCRP" required type="text" class="form-control" placeholder="'Electronic Protection with Auto-Reset' etc" />
								</div>
								<div class="form-group">
									<label>Short Circuit*</label>
									<input name="DCSC" id="DCSC" required type="text" class="form-control" placeholder="'Electronic Current Limit' etc" />
								</div>
								<div class="form-group">
									<label>DC output connector*</label>
									<input name="DCOC" id="DCOC" required type="text" class="form-control" placeholder="'Universal DC connections<br>M6 threaded fasteners for ring terminals' etc" />
								</div>
							</div>
						</div>	<!-- /DC Output -->
						<!-- Mechanical -->
						<div class="col-md-12">
							<div class="col-md-12">
								<label><u>Mechanical</u></label>
								<div class="form-group">
									<label>Dimensions*</label>
									<input name="MEDi" id="MEDi" required type="text" class="form-control" placeholder="'25.2 x 18.6 x 8cm (9.9 x 7.3 x 3.1 inch)' etc" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Weight*</label>
									<input name="MEWe" id="MEWe" required type="text" class="form-control" placeholder="'< 2.4kg (< 5.3lbs)' etc" />
								</div>
								<div class="form-group">
									<label>Data port*</label>
									<input name="MEDP" id="MEDP" required type="text" class="form-control" placeholder="'Sealed (IP66) USB 2.0 Host Port (Type A) with dust cover' etc" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Mounting holes*</label>
									<input name="MEMH" id="MEMH" required type="text" class="form-control" placeholder="'Allows for safe installation on shelf, wall, bulkhead, or on-board industrial vehicles and equipment' etc" />
								</div>
								<div class="form-group">
									<label>Cooling*</label>
									<input name="MEC" id="MEC" required type="text" class="form-control" placeholder="'Normal operation in any orientation with passive cooling only' etc" />
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
									<input name="ENOT" id="ENOT" required type="text" class="form-control" placeholder="'-40°C t+65°C (-40°F t149°F) Derated >40°C (104°F)' etc" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Storage Temperature*</label>
									<input name="ENST" id="ENST" required type="text" class="form-control" placeholder="'-40°C t+85°C (-40°F t185°F)' etc" />
								</div>
							</div>
						</div>	<!-- /Environmental -->
						<!-- Regulatory -->
						<div class="col-md-12">
							<div class="col-md-12"><label><u>Regulatory</u></label></div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Efficiency*</label>
									<input name="REEf" id="REEf" required type="text" class="form-control" placeholder="'93.5% peak, California Energy Commission compliant' etc" />
								</div>
								<div class="form-group">
									<label>Safety*</label>
									<input name="RESa" id="RESa" required type="text" class="form-control" placeholder="'UL1564, CSA 107.2, EN 60335-2-29' etc" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Emissions*</label>
									<input name="REEm" id="REEm" required type="text" class="form-control" placeholder="'FCC Part 15 / ICES 003 Class A, EN55011' etc" />
								</div>
								<div class="form-group">
									<label>Immunity*</label>
									<input name="REIm" id="REIm" required type="text" class="form-control" placeholder="'EN61000-3-2, EN61000-3-3, EN 61000-4-2/-3/-4/-5/-6/-11' etc" />
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
