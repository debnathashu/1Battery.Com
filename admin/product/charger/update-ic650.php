<?php require'../../Connections/connect.php'; ?>
<?php
	session_start();
	if(isset($_SESSION["UI"])){
	}else{
		header('Location: ../../login.php');
	}
?>
<?php
	if(isset($_GET['CID'])){
		$CID = $_GET['CID'];
		$ic650 = $connection->query("select * from ic650 where CID='$CID'");
		$row_ic650 = $ic650->fetch_array(MYSQLI_BOTH);
		$ac_dc_mec_env_reg = $connection->query("select * from ac_dc_mec_env_reg where CID='$CID'");
		$row_ac_dc_mec_env_reg = $ac_dc_mec_env_reg->fetch_array(MYSQLI_BOTH);
	}
?>
<?php
	if(isset($_POST['Update'])){
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
		$ic650 = $connection->query("UPDATE ic650 set Usages='{$Usages}', Type='{$Type}', Current='{$Current}', Power='{$Power}', Threshold='{$Threshold}' where CID='$CID'");
		$detalis = $connection->query("UPDATE ac_dc_mec_env_reg set Title='{$Title}', ACIC='{$ACIC}', ACIVR='{$ACIVR}', ACNIV='{$ACNIV}', ACNIF='{$ACNIF}', ACMIC='{$ACMIC}', ACNIC='{$ACNIC}', ACNPF='{$ACNPF}', DCNOV='{$DCNOV}', DCMOV='{$DCMOV}', DCMOC='{$DCMOC}', DCMOP='{$DCMOP}', DCDDR='{$DCDDR}', DCMIC='{$DCMIC}', DCBT='{$DCBT}', DCRP='{$DCRP}', DCSC='{$DCSC}', DCOC='{$DCOC}', MEDi='{$MEDi}', MEWe='{$MEWe}', MEDP='{$MEDP}', MEMH='{$MEMH}', MEC='{$MEC}', ENEn='{$ENEn}', ENOT='{$ENOT}', ENST='{$ENST}', REEf='{$REEf}', RESa='{$RESa}', REEm='{$REEm}', REIm='{$REIm}' where CID='$CID'");
				
		header('Location: ../../product/charger/ic650.php');
	}
	
?>
<!-- End PHP -->
<!DOCTYPE html>
<html>
<head>
<?php include'include/tag.php'; ?>
<title>Update IC650 Battery Charger | 1Battery | LockersITSolution</title>
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
			<li><a href="../../product/charger/ic650.php" title="IC650"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></a></li>
			<li class="active">Update IC650 Charger</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Change Details<a href="../../product/charger/ic650.php" class="btn btn-primary pull-right">Back to IC650 Charger</a></h1>
		</div>
	</div><!--/.row-->
				
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Update <?php echo $row_ic650["CID"]; ?> Charger Details</div>
				<div class="panel-body">
					<form role="form" method="post">
						<!-- Feature Details -->
						<div class="col-md-12">
							<label><u>Feature Details</u></label>
							<div class="col-md-12">
								<div class="form-group">
									<label>Name/Model* (It also use as an ID)</label>
									<input type="text" class="form-control" value="<?php echo $row_ic650["CID"]; ?>" readonly="readonly" />
								</div>						
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Title*</label>
									<input name="Title" id="Title" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["Title"]; ?>" />
								</div>
								<div class="form-group">
									<label>Usage*</label>
									<input name="Usages" id="Usages" required type="text" class="form-control" value="<?php echo $row_ic650['Usages']; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Type*</label>
									<input name="Type" id="Type" required type="text" class="form-control" value="<?php echo $row_ic650["Type"]; ?>" />
								</div>
								<div class="form-group">
									<label>DC Output Current* (A)</label>
									<input name="Current" id="Current" required type="text" class="form-control" value="<?php echo $row_ic650["Current"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>DC Output Power* (W)</label>
									<input name="Power" id="Power" required type="text" class="form-control" value="<?php echo $row_ic650["Power"]; ?>" />
								</div>
								<div class="form-group">
									<label>Low Voltage Threshold* (V)</label>
									<input name="Threshold" id="Threshold" required type="text" class="form-control" value="<?php echo $row_ic650["Threshold"]; ?>" />
								</div>
							</div>	<!-- /Feature Details -->
						</div>
						<!-- AC Input -->
						<div class="col-md-12">
							<div class="col-md-12">
								<label><u>AC Input</u></label>
								<div class="form-group">
									<label>AC input connector*</label>
									<input name="ACIC" id="ACIC" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["ACIC"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>AC Input Voltage Range*</label>
									<input name="ACIVR" id="ACIVR" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["ACIVR"]; ?>" />
								</div>
								<div class="form-group">
									<label>Normal AC Input Voltage*</label>
									<input name="ACNIV" id="ACNIV" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["ACNIV"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Normal AC Input Frequency*</label>
									<input name="ACNIF" id="ACNIF" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["ACNIF"]; ?>" />
								</div>
								<div class="form-group">
									<label>Maximum AC Input Current*</label>
									<input name="ACMIC" id="ACMIC" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["ACMIC"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Nominal AC Input Current*</label>
									<input name="ACNIC" id="ACNIC" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["ACNIC"]; ?>" />
								</div>
								<div class="form-group">
									<label>Nominal AC Power Factor*</label>
									<input name="ACNPF" id="ACNPF" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["ACNPF"]; ?>" />
								</div>
							</div>
						</div>	<!-- /AC Input -->
						<!-- DC Output -->
						<div class="col-md-12">
							<div class="col-md-12">
								<label><u>DC Output</u></label>
								<div class="form-group">
									<label>Nominal DC Output Voltage*</label>
									<input name="DCNOV" id="DCNOV" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["DCNOV"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Maximum DC Output Voltage*</label>
									<input name="DCMOV" id="DCMOV" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["DCMOV"]; ?>" />
								</div>
								<div class="form-group">
									<label>Maximum DC Output Current*</label>
									<input name="DCMOC" id="DCMOC" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["DCMOC"]; ?>" />
								</div>
								<div class="form-group">
									<label>Maximum DC Output Power*</label>
									<input name="DCMOP" id="DCMOP" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["DCMOP"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Deep Discharge Recovery(minimum voltage)*</label>
									<input name="DCDDR" id="DCDDR" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["DCDDR"]; ?>" />
								</div>
								<div class="form-group">
									<label>Maximum Interlock Current*</label>
									<input name="DCMIC" id="DCMIC" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["DCMIC"]; ?>" />
								</div>
								<div class="form-group">
									<label>Battery Type*</label>
									<input name="DCBT" id="DCBT" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["DCBT"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Reverse Polarity*</label>
									<input name="DCRP" id="DCRP" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["DCRP"]; ?>" />
								</div>
								<div class="form-group">
									<label>Short Circuit*</label>
									<input name="DCSC" id="DCSC" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["DCSC"]; ?>" />
								</div>
								<div class="form-group">
									<label>DC output connector*</label>
									<input name="DCOC" id="DCOC" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["DCOC"]; ?>" />
								</div>
							</div>
						</div>	<!-- /DC Output -->
						<!-- Mechanical -->
						<div class="col-md-12">
							<div class="col-md-12">
								<label><u>Mechanical</u></label>
								<div class="form-group">
									<label>Dimensions*</label>
									<input name="MEDi" id="MEDi" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["MEDi"]; ?>" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Weight*</label>
									<input name="MEWe" id="MEWe" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["MEWe"]; ?>" />
								</div>
								<div class="form-group">
									<label>Data port*</label>
									<input name="MEDP" id="MEDP" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["MEDP"]; ?>" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Mounting holes*</label>
									<input name="MEMH" id="MEMH" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["MEMH"]; ?>" />
								</div>
								<div class="form-group">
									<label>Cooling*</label>
									<input name="MEC" id="MEC" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["MEC"]; ?>" />
								</div>
							</div>
						</div>	<!-- /Mechanical -->
						<!-- Environmental -->
						<div class="col-md-12">
							<div class="col-md-12">
								<label><u>Environmental</u></label>
								<div class="form-group">
									<label>Enclosure*</label>
									<input name="ENEn" id="ENEn" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["ENEn"]; ?>" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Operating Temperature*</label>
									<input name="ENOT" id="ENOT" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["ENOT"]; ?>" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Storage Temperature*</label>
									<input name="ENST" id="ENST" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["ENST"]; ?>" />
								</div>
							</div>
						</div>	<!-- /Environmental -->
						<!-- Regulatory -->
						<div class="col-md-12">
							<div class="col-md-12"><label><u>Regulatory</u></label></div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Efficiency*</label>
									<input name="REEf" id="REEf" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["REEf"]; ?>" />
								</div>
								<div class="form-group">
									<label>Safety*</label>
									<input name="RESa" id="RESa" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["RESa"]; ?>" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Emissions*</label>
									<input name="REEm" id="REEm" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["REEm"]; ?>" />
								</div>
								<div class="form-group">
									<label>Immunity*</label>
									<input name="REIm" id="REIm" required type="text" class="form-control" value="<?php echo $row_ac_dc_mec_env_reg["REIm"]; ?>" />
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
							
							<div class="checkbox pull-right">
								<label>
									<input name="CID" id="CID" required type="checkbox" value="<?php echo $row_ic650["CID"]; ?>">Yes. I want update <?php echo $row_ic650["CID"]; ?> battery Charger.
								</label>
							</div>
						</div>
						<button name="Update" id="Update" type="submit" class="btn btn-primary pull-right">Update</button>
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
