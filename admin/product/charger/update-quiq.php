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
		$quiq_all = $connection->query("select * from quiq_all where CID='$CID'");
		$row_quiq_all = $quiq_all->fetch_array(MYSQLI_BOTH);
	}
?>
<?php
	if(isset($_POST['Update'])){
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
		$quiq = $connection->query("UPDATE quiq_all set Title='{$Title}', Usages='{$Usages}', Type='{$Type}', ACIC='{$ACIC}', ACIVR='{$ACIVR}', ACNIV='{$ACNIV}', ACIF='{$ACIF}', ACICn='{$ACICn}', ACICm='{$ACICm}', DCNOV='{$DCNOV}', DCMOV='{$DCMOV}', DCMOC='{$DCMOC}', DCMOP='{$DCMOP}', DCDDR='{$DCDDR}', DCMIC='{$DCMIC}', DCBT='{$DCBT}', DCRP='{$DCRP}', DCSC='{$DCSC}', DCOC='{$DCOC}', MEDi='{$MEDi}', MEWe='{$MEWe}', ENEn='{$ENEn}', ENOT='{$ENOT}', ENST='{$ENST}', RES='{$RES}', REE='{$REE}', REI='{$REI}' where CID='$CID'");
				
		header('Location: ../../product/charger/quiq.php');
	}
	
?>
<!-- End PHP -->
<!DOCTYPE html>
<html>
<head>
<?php include'include/tag.php'; ?>
<title>Update QuiQ Battery Charger | 1Battery | LockersITSolution</title>
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
			<li><a href="../../product/charger/quiq.php" title="QuiQ"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></a></li>
			<li class="active">Update QuiQ Charger</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Change Details<a href="../../product/charger/quiq.php" class="btn btn-primary pull-right">Back to QuiQ Charger</a></h1>
		</div>
	</div><!--/.row-->
				
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Update <?php echo $row_quiq_all["CID"]; ?> Charger Details</div>
				<div class="panel-body">
					<form role="form" method="post">
						<!-- Feature Details -->
						<div class="col-md-12">
							<label><u>Feature Details</u></label>
							<div class="col-md-12">
								<div class="form-group">
									<label>Name/Model* (It also use as an ID)</label>
									<input type="text" class="form-control" value="<?php echo $row_quiq_all["CID"]; ?>" readonly="readonly" />
								</div>						
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Title*</label>
									<input name="Title" id="Title" required type="text" class="form-control" value="<?php echo $row_quiq_all["Title"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Usage*</label>
									<input name="Usages" id="Usages" required type="text" class="form-control" value="<?php echo $row_quiq_all['Usages']; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Type*</label>
									<input name="Type" id="Type" required type="text" class="form-control" value="<?php echo $row_quiq_all["Type"]; ?>" />
								</div>
							</div>	
						</div>	<!-- /Feature Details -->
						<!-- AC Input -->
						<div class="col-md-12">
							<div class="col-md-12"><label><u>AC Input</u></label></div>
							<div class="col-md-4">
								<div class="form-group">
									<label>AC input connector*</label>
									<input name="ACIC" id="ACIC" required type="text" class="form-control" value="<?php echo $row_quiq_all["ACIC"]; ?>" />
								</div>
								<div class="form-group">
									<label>AC Input Voltage Range*</label>
									<input name="ACIVR" id="ACIVR" required type="text" class="form-control" value="<?php echo $row_quiq_all["ACIVR"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Nominal AC Input Voltage*</label>
									<input name="ACNIV" id="ACNIV" required type="text" class="form-control" value="<?php echo $row_quiq_all["ACNIV"]; ?>" />
								</div>
								<div class="form-group">
									<label>AC Input Frequency*</label>
									<input name="ACIF" id="ACIF" required type="text" class="form-control" value="<?php echo $row_quiq_all["ACIF"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>AC Input Current (Nominal)*</label>
									<input name="ACICn" id="ACICn" required type="text" class="form-control" value="<?php echo $row_quiq_all["ACICn"]; ?>" />
								</div>
								<div class="form-group">
									<label>AC Input Current (Max)*</label>
									<input name="ACICm" id="ACICm" required type="text" class="form-control" value="<?php echo $row_quiq_all["ACICm"]; ?>" />
								</div>
							</div>
						</div>	<!-- /AC Input -->
						<!-- DC Output -->
						<div class="col-md-12">
							<div class="col-md-12"><label><u>DC Output</u></label></div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Nominal DC Output Voltage*</label>
									<input name="DCNOV" id="DCNOV" required type="text" class="form-control" value="<?php echo $row_quiq_all["DCNOV"]; ?>" />
								</div>
								<div class="form-group">
									<label>Maximum DC Output Voltage*</label>
									<input name="DCMOV" id="DCMOV" required type="text" class="form-control" value="<?php echo $row_quiq_all["DCMOV"]; ?>" />
								</div>
								<div class="form-group">
									<label>Maximum DC Output Current*</label>
									<input name="DCMOC" id="DCMOC" required type="text" class="form-control" value="<?php echo $row_quiq_all["DCMOC"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Maximum DC Output Power*</label>
									<input name="DCMOP" id="DCMOP" required type="text" class="form-control" value="<?php echo $row_quiq_all["DCMOP"]; ?>" />
								</div>
								<div class="form-group">
									<label>Deep Discharge Recovery(minimum voltage)*</label>
									<input name="DCDDR" id="DCDDR" required type="text" class="form-control" value="<?php echo $row_quiq_all["DCDDR"]; ?>" />
								</div>
								<div class="form-group">
									<label>Maximum Interlock Current*</label>
									<input name="DCMIC" id="DCMIC" required type="text" class="form-control" value="<?php echo $row_quiq_all["DCMIC"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Battery Type*</label>
									<input name="DCBT" id="DCBT" required type="text" class="form-control" value="<?php echo $row_quiq_all["DCBT"]; ?>" />
								</div>
								<div class="form-group">
									<label>Reverse Polarity*</label>
									<input name="DCRP" id="DCRP" required type="text" class="form-control" value="<?php echo $row_quiq_all["DCRP"]; ?>" />
								</div>
								<div class="form-group">
									<label>Short Circuit*</label>
									<input name="DCSC" id="DCSC" required type="text" class="form-control" value="<?php echo $row_quiq_all["DCSC"]; ?>" />
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>DC Output Connector*</label>
									<input name="DCOC" id="DCOC" required type="text" class="form-control" value="<?php echo $row_quiq_all["DCOC"]; ?>" />
								</div>
							</div>
						</div>	<!-- /DC Output -->
						<!-- Mechanical -->
						<div class="col-md-12">
							<div class="col-md-12"><label><u>Mechanical</u></label></div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Dimensions*</label>
									<input name="MEDi" id="MEDi" required type="text" class="form-control" value="<?php echo $row_quiq_all["MEDi"]; ?>" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Weight*</label>
									<input name="MEWe" id="MEWe" required type="text" class="form-control" value="<?php echo $row_quiq_all["MEWe"]; ?>" />
								</div>
							</div>
						</div>	<!-- /Mechanical -->
						<!-- Environmental -->
						<div class="col-md-12">
							<div class="col-md-12">
								<label><u>Environmental</u></label>
								<div class="form-group">
									<label>Enclosure*</label>
									<input name="ENEn" id="ENEn" required type="text" class="form-control" value="<?php echo $row_quiq_all["ENEn"]; ?>" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Operating Temperature*</label>
									<input name="ENOT" id="ENOT" required type="text" class="form-control" value="<?php echo $row_quiq_all["ENOT"]; ?>" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Storage Temperature*</label>
									<input name="ENST" id="ENST" required type="text" class="form-control" value="<?php echo $row_quiq_all["ENST"]; ?>" />
								</div>
							</div>
						</div>	<!-- /Environmental -->
						<!-- Regulatory -->
						<div class="col-md-12">
							<div class="col-md-12"><label><u>Regulatory</u></label></div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Safety*</label>
									<input name="RES" id="RES" required type="text" class="form-control" value="<?php echo $row_quiq_all["RES"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Emissions*</label>
									<input name="REE" id="REE" required type="text" class="form-control" value="<?php echo $row_quiq_all["REE"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Immunity*</label>
									<input name="REI" id="REI" required type="text" class="form-control" value="<?php echo $row_quiq_all["REI"]; ?>" />
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
									<input name="CID" id="CID" required type="checkbox" value="<?php echo $row_quiq_all["CID"]; ?>">Yes. I want update <?php echo $row_quiq_all["CID"]; ?> battery Charger.
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
