<?php require'../../Connections/connect.php'; ?>
<?php
	session_start();
	if(isset($_SESSION["UI"])){
	}else{
		header('Location: ../../login.php');
	}
?>
<?php
	if(isset($_GET['BID'])){
		$BID = $_GET['BID'];
		$hc_series = $connection->query("select * from hc_series where BID='$BID'");
		$row_hc_series = $hc_series->fetch_array(MYSQLI_BOTH);
		$pbdetails = $connection->query("select * from pbdetails where BID='$BID'");
		$row_pbdetails = $pbdetails->fetch_array(MYSQLI_BOTH);
		$bmecspe = $connection->query("select * from bmecspe where BID='$BID'");
		$row_bmecspe = $bmecspe->fetch_array(MYSQLI_BOTH);
		$belespe = $connection->query("select * from belespe where BID='$BID'");
		$row_belespe = $belespe->fetch_array(MYSQLI_BOTH);
		$bdistab = $connection->query("select * from bdistab where BID='$BID'");
		$row_bdistab = $bdistab->fetch_array(MYSQLI_BOTH);
		$csa_temp_ter = $connection->query("select * from csa_temp_ter where BID='$BID'");
		$row_csa_temp_ter = $csa_temp_ter->fetch_array(MYSQLI_BOTH);
	}
?>
<?php
	if(isset($_POST['Update'])){
		// Feature Details
		$BID = $_POST['BID'];
		$Title = $_POST['Title'];
		$IRefer = $_POST['IRefer'];
		$Volt = $_POST['Volt'];
		$Cap25Min = $_POST['Cap25Min'];
		$Cap75Min = $_POST['Cap75Min'];
		$Cap5HR = $_POST['Cap5HR'];
		$Cap20HR = $_POST['Cap20HR'];
		$Cranking = $_POST['Cranking'];
		$Cranking2 = $_POST['Cranking2'];
		// Mechanical Specifications
		$MGS = $_POST['MGS'];
		$MTT = $_POST['MTT'];
		$MTH = $_POST['MTH'];
		$MH = $_POST['MH'];
		$MWi = $_POST['MWi'];
		$ML = $_POST['ML'];
		$MWe = $_POST['MWe'];
		$MCT = $_POST['MCT'];
		// Electrical Specifications
		$NV = $_POST['NV'];
		$Cap100 = $_POST['Cap100'];
		$Cap20 = $_POST['Cap20'];
		$Cap10 = $_POST['Cap10'];
		$Cap5 = $_POST['Cap5'];
		$CCA = $_POST['CCA'];
		$CA = $_POST['CA'];
		$PHCA = $_POST['PHCA'];
		$SCCur = $_POST['SCCur'];
		$IntRes = $_POST['IntRes'];
		// Discharge Table (Constant Current) Diffrent
		$Time1 = $_POST['1Time'];
		$Time2 = $_POST['2Time'];
		$Time3 = $_POST['3Time'];
		$Time4 = $_POST['4Time'];
		$Time5 = $_POST['5Time'];
		$Time6 = $_POST['6Time'];
		$Time7 = $_POST['7Time'];
		$Time8 = $_POST['8Time'];
		$Time9 = $_POST['9Time'];
		$Amps1 = $_POST['1Amps'];
		$Amps2 = $_POST['2Amps'];
		$Amps3 = $_POST['3Amps'];
		$Amps4 = $_POST['4Amps'];
		$Amps5 = $_POST['5Amps'];
		$Amps6 = $_POST['6Amps'];
		$Amps7 = $_POST['7Amps'];
		$Amps8 = $_POST['8Amps'];
		$Amps9 = $_POST['9Amps'];
		$Rate1 = $_POST['1Rate'];
		$Rate2 = $_POST['2Rate'];
		$Rate3 = $_POST['3Rate'];
		$Rate4 = $_POST['4Rate'];
		$Rate5 = $_POST['5Rate'];
		$Rate6 = $_POST['6Rate'];
		$Rate7 = $_POST['7Rate'];
		$Rate8 = $_POST['8Rate'];
		$Rate9 = $_POST['9Rate'];
		// Charge Voltages Differnt 
		$Char12B = $_POST['1Char12B'];
		$Char24B = $_POST['1Char24B'];
		$Char36B = $_POST['1Char36B'];
		$Char48B = $_POST['1Char48B'];
		$Char12A = $_POST['1Char12A'];
		$Char24A = $_POST['1Char24A'];
		$Char36A = $_POST['1Char36A'];
		$Char48A = $_POST['1Char48A'];
		$Char12F = $_POST['1Char12F'];
		$Char24F = $_POST['1Char24F'];
		$Char36F = $_POST['1Char36F'];
		$Char48F = $_POST['1Char48F'];
		// Temperature Range Specifications
		$TempStorR = $_POST['TempStorR'];
		$TempOpeR = $_POST['TempOpeR'];
		$TempChWR = $_POST['TempChWR'];
		$TempChOR = $_POST['TempChOR'];
		$TempStorM = $_POST['TempStorM'];
		$TempOpeM = $_POST['TempOpeM'];
		$TempChWM = $_POST['TempChWM'];
		$TempChOM = $_POST['TempChOM'];
		// Terminal Torque Specifications
		$Ter1stFL = $_POST['Ter1stFL'];
		$Ter2ndFL = $_POST['Ter2ndFL'];
		$Ter3rdFL = $_POST['Ter3rdFL'];
		$Ter4thFL = $_POST['Ter4thFL'];
		$Ter1stIL = $_POST['Ter1stIL'];
		$Ter2ndIL = $_POST['Ter2ndIL'];
		$Ter3rdIL = $_POST['Ter3rdIL'];
		$Ter4thIL = $_POST['Ter4thIL'];
		$Ter1stN = $_POST['Ter1stN'];
		$Ter2ndN = $_POST['Ter2ndN'];
		$Ter3rdN = $_POST['Ter3rdN'];
		$Ter4thN = $_POST['Ter4thN'];
		// Application
		$App_Cat = $_POST['App_Cat'];
		// Default
		$Group = 'HC';
		$hc = $connection->query("UPDATE hc_series set IRefer='{$IRefer}', Volt='{$Volt}', Cap75Min='{$Cap75Min}', Cap5HR='{$Cap5HR}', Cranking_PHCA='{$Cranking2}', Cranking_CCA='{$Cranking}', Capacity_Min='{$Cap25Min}', Capacity_AH='{$Cap20HR}' where BID='$BID'");
		$detalis = $connection->query("UPDATE pbdetails set Title=,'{$Title}', CycCap='{$Cap20}', ReCap25='{$Cap25Min}', ReCap75='{$Cap75Min}' where BID='$BID'");
		$mecspe = $connection->query("UPDATE bmecspe set MGS='{$MGS}', MTT='{$MTT}', MTH='{$MTH}', MH='{$MH}', MWi='{$MWi}', ML='{$ML}', MWe='{$MWe}', MCT='{$MCT}' where BID='$BID'");
		$distab = $connection->query("UPDATE bdistab set 1Time='{$Time1}', 1Amps='{$Amps1}', 1Rate='{$Rate1}', 2Time='{$Time2}', 2Amps='{$Amps2}', 2Rate='{$Rate2}', 3Time='{$Time3}', 3Amps='{$Amps3}', 3Rate='{$Rate3}', 4Time='{$Time4}', 4Amps='{$Amps4}', 4Rate='{$Rate4}', 5Time='{$Time5}', 5Amps='{$Amps5}', 5Rate='{$Rate5}', 6Time='{$Time6}', 6Amps='{$Amps6}', 6Rate='{$Rate6}', 7Time='{$Time7}', 7Amps='{$Amps7}', 7Rate='{$Rate7}', 8Time='{$Time8}', 8Amps='{$Amps8}', 8Rate='{$Rate8}', 9Time='{$Time9}', 9Amps='{$Amps9}', 9Rate='{$Rate9}' where BID='$BID'");
		$elespe = $connection->query("UPDATE belespe set NV='{$NV}', Cap100='{$Cap100}', Cap20='{$Cap20}', Cap10='{$Cap10}', Cap5='{$Cap5}', CCA='{$CCA}', CA='{$CA}', PHCA='{$PHCA}', SCCur='{$SCCur}', IntRes='{$IntRes}' where BID='$BID'");
		$ctt = $connection->query("UPDATE csa_temp_ter set 1Char12B='{$Char12B}', 1Char24B='{$Char24B}', 1Char36B='{$Char36B}', 1Char48B='{$Char48B}', 1Char12A='{$Char12A}', 1Char24A='{$Char24A}', 1Char36A='{$Char36A}', 1Char48A='{$Char48A}', 1Char12F='{$Char12F}', 1Char24F='{$Char24F}', 1Char36F='{$Char36F}', 1Char48F='{$Char48F}', TempStorR='{$TempStorR}', TempStorM='{$TempStorM}', TempOpeR='{$TempOpeR}', TempOpeM='{$TempOpeM}', TempChWR='{$TempChWR}', TempChWM='{$TempChWM}', TempChOR='{$TempChOR}', TempChOM='{$TempChOM}', Ter1stFL='{$Ter1stFL}', Ter1stIL='{$Ter1stIL}', Ter1stN='{$Ter1stN}', Ter2ndFL='{$Ter2ndFL}', Ter2ndIL='{$Ter2ndIL}', Ter2ndN='{$Ter2ndN}', Ter3rdFL='{$Ter3rdFL}', Ter3rdIL='{$Ter3rdIL}', Ter3rdN='{$Ter3rdN}', Ter4thFL='{$Ter4thFL}', Ter4thIL='{$Ter4thIL}', Ter4thN='{$Ter4thN}' where BID='$BID'");
		$app = $connection->query("UPDATE application Set App_Cat='{$App_Cat}', IRefer='{$IRefer}', Volt='{$Volt}', Cap25Min='{$Cap25Min}', Cap75Min='{$Cap75Min}', Cap5HR='{$Cap5HR}', Cap20HR='{$Cap20HR}', Cranking='{$Cranking}' where BID='$BID'");
				
		header('Location: ../../product/battery/hc-series.php');
	}
	
?>
<!-- End PHP -->
<!DOCTYPE html>
<html>
<head>
<?php include'include/tag.php'; ?>
<title>Update HC Series Battery | 1Battery | LockersITSolution</title>
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
			<li><a href="../../product/battery/hc-series.php" title="HC Series"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></a></li>
			<li class="active">Update HC Series Battery</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Change Details<a href="../../product/battery/hc-series.php" class="btn btn-primary pull-right">Back to HC Series</a></h1>
		</div>
	</div><!--/.row-->
				
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Update <?php echo $row_hc_series["BID"]; ?> Battery Details</div>
				<div class="panel-body">
					<form role="form" method="post">
						<!-- Feature Details -->
						<div class="col-md-4">
							<label>Feature Details</label>
							<div class="form-group">
								<label>Name* (It also use as an ID)</label>
								<input type="text" class="form-control" value="<?php echo $row_hc_series["BID"]; ?>" readonly="readonly" />
							</div>						
							<div class="form-group">
								<label>Title*</label>
								<input name="Title" id="Title" required type="text" class="form-control" value="<?php echo $row_pbdetails["Title"]; ?>" />
							</div>
							<div class="form-group">
								<label>Industry Ref.*</label>
								<input name="IRefer" id="IRefer" required type="text" class="form-control" value="<?php echo $row_hc_series['IRefer']; ?>" />
							</div>
							<div class="form-group">
								<label>Voltage*</label>
								<input name="Volt" id="Volt" required type="text" class="form-control" value="<?php echo $row_hc_series["Volt"]; ?>" />
							</div>
							<div class="form-group">
								<label>Reserve Capacity(minutes) @ 25 Amps*</label>
								<input name="Cap25Min" id="Cap25Min" required type="text" class="form-control" value="<?php echo $row_hc_series["Capacity_Min"]; ?>" />
							</div>
							<div class="form-group">
								<label>Reserve Capacity(minutes) @ 75 Amps*</label>
								<input name="Cap75Min" id="Cap75Min" required type="text" class="form-control" value="<?php echo $row_hc_series["Cap75Min"]; ?>" />
							</div>
							<div class="form-group">
								<label>Capacity(AH) @ 5 HR*</label>
								<input name="Cap5HR" id="Cap5HR" required type="text" class="form-control" value="<?php echo $row_hc_series["Cap5HR"]; ?>" />
							</div>
							<div class="form-group">
								<label>Capacity @ 20 HR*</label>
								<input name="Cap20HR" id="Cap20HR" required type="text" class="form-control" value="<?php echo $row_hc_series["Capacity_AH"]; ?>" />
							</div>
							<div class="form-group">
								<label>Cranking/CCA(Amps)*</label>
								<input name="Cranking" id="Cranking" required type="text" class="form-control" value="<?php echo $row_hc_series["Cranking_CCA"]; ?>" />
							</div>
							<div class="form-group">
								<label>Cranking/PHCA(Amps)*</label>
								<input name="Cranking2" id="Cranking2" required type="text" class="form-control" value="<?php echo $row_hc_series["Cranking_PHCA"]; ?>" />
							</div>
							<div class="form-group">
								<label>Battery Image</label>
								<input type="file">
								 <p class="help-block">Upload Battery Image.</p>
							</div>
							<div class="form-group">
								<label>Feature Image</label>
								<input type="file">
								 <p class="help-block">Upload Battery Feature Image.</p>
							</div>
						</div>	<!-- /Feature Details -->
						<!-- Mechanical Specifications -->
						<div class="col-md-4">
							<label>Mechanical Specifications</label>
							<div class="form-group">
								<label>Group Size*</label>
								<input name="MGS" id="MGS" required type="text" class="form-control" value="<?php echo $row_bmecspe["MGS"]; ?>" />
							</div>
							<div class="form-group">
								<label>Terminal Type*</label>
								<input name="MTT" id="MTT" required type="text" class="form-control" value="<?php echo $row_bmecspe["MTT"]; ?>" />
							</div>
							<div class="form-group">
								<label>Total Height*</label>
								<input name="MTH" id="MTH" required type="text" class="form-control" value="<?php echo $row_bmecspe["MTH"]; ?>" />
							</div>
							<div class="form-group">
								<label>Height*</label>
								<input name="MH" id="MH" required type="text" class="form-control" value="<?php echo $row_bmecspe["MH"]; ?>" />
							</div>
							<div class="form-group">
								<label>Width*</label>
								<input name="MWi" id="MWi" required type="text" class="form-control" value="<?php echo $row_bmecspe["MWi"]; ?>" />
							</div>
							<div class="form-group">
								<label>Length*</label>
								<input name="ML" id="ML" required type="text" class="form-control" value="<?php echo $row_bmecspe["ML"]; ?>" />
							</div>
							<div class="form-group">
								<label>Weight*</label>
								<input name="MWe" id="MWe" required type="text" class="form-control" value="<?php echo $row_bmecspe["MWe"]; ?>" />
							</div>
							<div class="form-group">
								<label>Case Type*</label>
								<input name="MCT" id="MCT" required type="text" class="form-control" value="<?php echo $row_bmecspe["MCT"]; ?>" />
							</div>
						</div>	<!-- /Mechanical Specifications -->
						<!-- Electrical Specifications -->
						<div class="col-md-4">
							<label>Electrical Specifications</label>
							<div class="form-group">
								<label>Nominal Voltage*</label>
								<input name="NV" id="NV" required type="text" class="form-control" value="<?php echo $row_belespe["NV"]; ?>" />
							</div>
							<div class="form-group">
								<label>Capacity @ 100 hour rate*</label>
								<input name="Cap100" id="Cap100" required type="text" class="form-control" value="<?php echo $row_belespe["Cap100"]; ?>" />
							</div>
							<div class="form-group">
								<label>Capacity @ 20 hour rate*</label>
								<input name="Cap20" id="Cap20" required type="text" class="form-control" value="<?php echo $row_belespe["Cap20"]; ?>" />
							</div>
							<div class="form-group">
								<label>Capacity @ 10 hour rate*</label>
								<input name="Cap10" id="Cap10" required type="text" class="form-control" value="<?php echo $row_belespe["Cap10"]; ?>" />
							</div>
							<div class="form-group">
								<label>Capacity @ 5 hour rate*</label>
								<input name="Cap5" id="Cap5" required type="text" class="form-control" value="<?php echo $row_belespe["Cap5"]; ?>" />
							</div>
							<div class="form-group">
								<label>CCA*</label>
								<input name="CCA" id="CCA" required type="text" class="form-control" value="<?php echo $row_belespe["CCA"]; ?>" />
							</div>
							<div class="form-group">
								<label>CA or MCA*</label>
								<input name="CA" id="CA" required type="text" class="form-control" value="<?php echo $row_belespe["CA"]; ?>" />
							</div>
							<div class="form-group">
								<label>PHCA*</label>
								<input name="PHCA" id="PHCA" required type="text" class="form-control" value="<?php echo $row_belespe["PHCA"]; ?>" />
							</div>
							<div class="form-group">
								<label>Short Circuit Current*</label>
								<input name="SCCur" id="SCCur" required type="text" class="form-control" value="<?php echo $row_belespe["SCCur"]; ?>" />
							</div>
							<div class="form-group">
								<label>Internal Resistance*</label>
								<input name="IntRes" id="IntRes" required type="text" class="form-control" value="<?php echo $row_belespe["IntRes"]; ?>" />
							</div>
						</div>	<!-- /Electrical Specifications -->
						<!-- Discharge Table (Constant Current) -->
						<div class="col-md-12">
							<div class="col-md-4">
								<label>Discharge Table (Constant Current)</label>
								<div class="form-group">
									<label>Time(Hour)*</label>
									<input name="1Time" id="1Time" required type="text" class="form-control" value="<?php echo $row_bdistab["1Time"]; ?>" />
								</div>
								<div class="form-group">
									<input name="2Time" id="2Time" required type="text" class="form-control" value="<?php echo $row_bdistab["2Time"]; ?>" />
								</div>
								<div class="form-group">
									<input name="3Time" id="3Time" required type="text" class="form-control" value="<?php echo $row_bdistab["3Time"]; ?>" />
								</div>
								<div class="form-group">
									<input name="4Time" id="4Time" required type="text" class="form-control" value="<?php echo $row_bdistab["4Time"]; ?>" />
								</div>
								<div class="form-group">
									<input name="5Time" id="5Time" required type="text" class="form-control" value="<?php echo $row_bdistab["5Time"]; ?>" />
								</div>
								<div class="form-group">
									<input name="6Time" id="6Time" required type="text" class="form-control" value="<?php echo $row_bdistab["6Time"]; ?>" />
								</div>
								<div class="form-group">
									<input name="7Time" id="7Time" required type="text" class="form-control" value="<?php echo $row_bdistab["7Time"]; ?>" />
								</div>
								<div class="form-group">
									<input name="8Time" id="8Time" required type="text" class="form-control" value="<?php echo $row_bdistab["8Time"]; ?>" />
								</div>
								<div class="form-group">
									<input name="9Time" id="9Time" required type="text" class="form-control" value="<?php echo $row_bdistab["9Time"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<label>Discharge Table (Constant Current)</label>
								<div class="form-group">
									<label>Amps*</label>
									<input name="1Amps" id="1Amps" required type="text" class="form-control" value="<?php echo $row_bdistab["1Amps"]; ?>" />
								</div>
								<div class="form-group">									
									<input name="2Amps" id="2Amps" required type="text" class="form-control" value="<?php echo $row_bdistab["2Amps"]; ?>" />
								</div>
								<div class="form-group">
									<input name="3Amps" id="3Amps" required type="text" class="form-control" value="<?php echo $row_bdistab["3Amps"]; ?>" />
								</div>
								<div class="form-group">
									<input name="4Amps" id="4Amps" required type="text" class="form-control" value="<?php echo $row_bdistab["4Amps"]; ?>" />
								</div>
								<div class="form-group">
									<input name="5Amps" id="5Amps" required type="text" class="form-control" value="<?php echo $row_bdistab["5Amps"]; ?>" />
								</div>
								<div class="form-group">
									<input name="6Amps" id="6Amps" required type="text" class="form-control" value="<?php echo $row_bdistab["6Amps"]; ?>" />
								</div>
								<div class="form-group">
									<input name="7Amps" id="7Amps" required type="text" class="form-control" value="<?php echo $row_bdistab["7Amps"]; ?>" />
								</div>
								<div class="form-group">
									<input name="8Amps" id="8Amps" required type="text" class="form-control" value="<?php echo $row_bdistab["8Amps"]; ?>" />
								</div>
								<div class="form-group">
									<input name="9Amps" id="9Amps" required type="text" class="form-control" value="<?php echo $row_bdistab["9Amps"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<label>Discharge Table (Constant Current)</label>
								<div class="form-group">
									<label>Rate(CA)*</label>
									<input name="1Rate" id="1Rate" required type="text" class="form-control" value="<?php echo $row_bdistab["1Rate"]; ?>" />
								</div>
								<div class="form-group">
									<input name="2Rate" id="2Rate" required type="text" class="form-control" value="<?php echo $row_bdistab["2Rate"]; ?>" />
								</div>
								<div class="form-group">
									<input name="3Rate" id="3Rate" required type="text" class="form-control" value="<?php echo $row_bdistab["3Rate"]; ?>" />
								</div>
								<div class="form-group">
									<input name="4Rate" id="4Rate" required type="text" class="form-control" value="<?php echo $row_bdistab["4Rate"]; ?>" />
								</div>
								<div class="form-group">
									<input name="5Rate" id="5Rate" required type="text" class="form-control" value="<?php echo $row_bdistab["5Rate"]; ?>" />
								</div>
								<div class="form-group">
									<input name="6Rate" id="6Rate" required type="text" class="form-control" value="<?php echo $row_bdistab["6Rate"]; ?>" />
								</div>
								<div class="form-group">
									<input name="7Rate" id="7Rate" required type="text" class="form-control" value="<?php echo $row_bdistab["7Rate"]; ?>" />
								</div>
								<div class="form-group">
									<input name="8Rate" id="8Rate" required type="text" class="form-control" value="<?php echo $row_bdistab["8Rate"]; ?>" />
								</div>
								<div class="form-group">
									<input name="9Rate" id="9Rate" required type="text" class="form-control" value="<?php echo $row_bdistab["9Rate"]; ?>" />
								</div>
							</div>
						</div>	<!-- /Discharge Table (Constant Current) -->
						<!-- Charge Voltages -->
						<div class="col-md-12">
							<div class="col-md-4">
								<label>Charge Voltages</label>
								<div class="form-group">
									<label>Bulk (12V)*</label>
									<input name="1Char12B" id="1Char12B" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char12B"]; ?>" />
								</div>
								<div class="form-group">
									<label>Bulk (24V)*</label>
									<input name="1Char24B" id="1Char24B" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char24B"]; ?>" />
								</div>
								<div class="form-group">
									<label>Bulk (36V)*</label>
									<input name="1Char36B" id="1Char36B" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char36B"]; ?>" />
								</div>
								<div class="form-group">
									<label>Bulk (48V)*</label>
									<input name="1Char48B" id="1Char48B" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char48B"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<label>Charge Voltages</label>
								<div class="form-group">
									<label>Absortion (12V)*</label>
									<input name="1Char12A" id="1Char12A" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char12A"]; ?>" />
								</div>
								<div class="form-group">
									<label>Absortion (24V)*</label>
									<input name="1Char24A" id="1Char24A" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char24A"]; ?>" />
								</div>
								<div class="form-group">
									<label>Absortion (36V)*</label>
									<input name="1Char36A" id="1Char36A" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char36A"]; ?>" />
								</div>
								<div class="form-group">
									<label>Absortion (48V)*</label>
									<input name="1Char48A" id="1Char48A" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char48A"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<label>Charge Voltages</label>
								<div class="form-group">
									<label>Float (12V)*</label>
									<input name="1Char12F" id="1Char12F" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char12F"]; ?>" />
								</div>
								<div class="form-group">
									<label>Float (24V)*</label>
									<input name="1Char24F" id="1Char24F" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char24F"]; ?>" />
								</div>
								<div class="form-group">
									<label>Float (36V)*</label>
									<input name="1Char36F" id="1Char36F" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char36F"]; ?>" />
								</div>
								<div class="form-group">
									<label>Float (48V)*</label>
									<input name="1Char48F" id="1Char48F" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["1Char48F"]; ?>" />
								</div>
							</div>
						</div>	<!-- /Charge Voltages -->
						<!-- Temperature Range Specifications -->
						<div class="col-md-12">
							<div class="col-md-6">
								<label>Temperature Range Specifications<br>(Recommended)</label>
								<div class="form-group">
									<label>Storage*</label>
									<input name="TempStorR" id="TempStorR" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["TempStorR"]; ?>" />
								</div>
								<div class="form-group">
									<label>Operation*</label>
									<input name="TempOpeR" id="TempOpeR" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["TempOpeR"]; ?>" />
								</div>
								<div class="form-group">
									<label>Charge with TC*</label>
									<input name="TempChWR" id="TempChWR" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["TempChWR"]; ?>" />
								</div>
								<div class="form-group">
									<label>Charge without TC*</label>
									<input name="TempChOR" id="TempChOR" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["TempChOR"]; ?>" />
								</div>
							</div>
							<div class="col-md-6">
								<label>Temperature Range Specifications<br>(Maximum)</label>
								<div class="form-group">
									<label>Storage*</label>
									<input name="TempStorM" id="TempStorM" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["TempStorM"]; ?>" />
								</div>
								<div class="form-group">
									<label>Operation*</label>
									<input name="TempOpeM" id="TempOpeM" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["TempOpeM"]; ?>" />
								</div>
								<div class="form-group">
									<label>Charge with TC*</label>
									<input name="TempChWM" id="TempChWM" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["TempChWM"]; ?>" />
								</div>
								<div class="form-group">
									<label>Charge without TC*</label>
									<input name="TempChOM" id="TempChOM" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["TempChOM"]; ?>" />
								</div>
							</div>
						</div>	<!-- /Temperature Range Specifications -->
						<!-- Terminal Torque Specifications -->
						<div class="col-md-12">
							<div class="col-md-4">
								<label>Terminal Torque Specifications</label>
								<div class="form-group">
									<label>AP | DT (AP) | M6 | M6M (stud) | TP07 (AP) | TP08 (AP) (ft-lbs)*</label>
									<input name="Ter1stFL" id="Ter1stFL" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter1stFL"]; ?>" />
								</div>
								<div class="form-group">
									<label>FR45 (ft-lbs)*</label>
									<input name="Ter2ndFL" id="Ter2ndFL" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter2ndFL"]; ?>" />
								</div>
								<div class="form-group">
									<label>M8 (ft-lbs)*</label>
									<input name="Ter3rdFL" id="Ter3rdFL" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter3rdFL"]; ?>" />
								</div>
								<div class="form-group">
									<label>DT (stud) | M10M (stud) (ft-lbs)*</label>
									<input name="Ter4thFL" id="Ter4thFL" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter4thFL"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<label>Terminal Torque Specifications</label>
								<div class="form-group">
									<label>AP | DT (AP) | M6 | M6M (stud) | TP07 (AP) | TP08 (AP) (in-lbs)*</label>
									<input name="Ter1stIL" id="Ter1stIL" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter1stIL"]; ?>" />
								</div>
								<div class="form-group">
									<label>FR45 (in-lbs)*</label>
									<input name="Ter2ndIL" id="Ter2ndIL" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter2ndIL"]; ?>" />
								</div>
								<div class="form-group">
									<label>M8 (in-lbs)*</label>
									<input name="Ter3rdIL" id="Ter3rdIL" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter3rdIL"]; ?>" />
								</div>
								<div class="form-group">
									<label>DT (stud) | M10M (stud) (in-lbs)*</label>
									<input name="Ter4thIL" id="Ter4thIL" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter4thIL"]; ?>" />
								</div>
							</div>
							<div class="col-md-4">
								<label>Terminal Torque Specifications</label>
								<div class="form-group">
									<label>AP | DT (AP) | M6 | M6M (stud) | TP07 (AP) | TP08 (AP) (Nm)*</label>
									<input name="Ter1stN" id="Ter1stN" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter1stN"]; ?>" />
								</div>
								<div class="form-group">
									<label>FR45 (Nm)*</label>
									<input name="Ter2ndN" id="Ter2ndN" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter2ndN"]; ?>" />
								</div>
								<div class="form-group">
									<label>M8 (Nm)*</label>
									<input name="Ter3rdN" id="Ter3rdN" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter3rdN"]; ?>" />
								</div>
								<div class="form-group">
									<label>DT (stud) | M10M (stud) (Nm)*</label>
									<input name="Ter4thN" id="Ter4thN" required type="text" class="form-control" value="<?php echo $row_csa_temp_ter["Ter4thN"]; ?>" />
								</div>
							</div>
						</div>	<!-- /Terminal Torque Specifications -->
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
									<input name="BID" id="BID" required type="checkbox" value="<?php echo $row_hc_series["BID"]; ?>">Yes. I want update <?php echo $row_hc_series["BID"]; ?> battery.
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
