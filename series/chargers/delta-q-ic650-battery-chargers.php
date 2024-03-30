<?php require_once('../../Connections/connection.php'); ?>
<?php
	//connect ic650
	mysqli_select_db($connection, $database_connection);
	$query_IC650 = "SELECT * FROM ic650";
	$IC650 = mysqli_query($connection, $query_IC650) or die(mysqli_error());
	$row_IC650 = mysqli_fetch_assoc($IC650);
	$totalRows_IC650 = mysqli_num_rows($IC650);
	$CID = $row_IC650["CID"];
	//connect ic650_accessories
	mysqli_select_db($connection, $database_connection);
	$query_IC650_Accessories = "SELECT * FROM ic650_accessories";
	$IC650_Accessories = mysqli_query($connection, $query_IC650_Accessories) or die(mysqli_error());
	$row_IC650_Accessories = mysqli_fetch_assoc($IC650_Accessories);
	$totalRows_IC650_Accessories = mysqli_num_rows($IC650_Accessories);
	$ID = $row_IC650_Accessories["ID"];
	//connect charger
	mysqli_select_db($connection, $database_connection);
	$query_charger = "SELECT * FROM charger where ID='ic650'";
	$charger = mysqli_query($connection, $query_charger) or die(mysqli_error());
	$row_charger = mysqli_fetch_assoc($charger);
	$totalRows_charger = mysqli_num_rows($charger);
	$ID = $row_charger["ID"];
?>
<?php
	require'../../connect.php';
	$sitedetails = $connection->query("select * from sitedetails");
	$row_sitedetails = $sitedetails->fetch_array(MYSQLI_BOTH);
?>
<!-- End PHP-->
<html>
<?php include'link.php'; ?>
<!-- MAX: 55 characters -->
<title>Delta-Q IC650 Battery Chargers</title>
</head>

<script language="javascript">
$(document).ready(
	function() { 
		var url_hash = window.location.hash;
		if (url_hash) {
			$('.nav-tabs a[href="' + url_hash + '"]').tab('show');
			
			
		}
	}
);
</script>

<body>

<div class="container-site">
	<!-- ROW 1: Navigation -->
	<?php include'menu.php'; ?>
	<!-- ROW 2: Splash Image -->
	<div class="container-fluid container-splash">
		<div class="splash-main">
			<img class="img-responsive splash" src="../../graphics/series/delta-q-ic650-battery-chargers.png" alt="1 Battery Deep-Cycle AGM Batteries" title="1 Battery Deep-Cycle AGM Batteries" border="0" width="1080" height="475">
		</div>
	</div>
	<!-- ROW 3: Search Bar -->
	<?php include'search.php'; ?>
</div> <!-- /container -->

<!-- ROW 4: Breadcrumbs -->
<div class="container container-breadcrumbs">
	<div class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="../../index.php">Home</a></li>
			<li class="active">Delta-Q IC650 Chargers</li>
		</ol>
	</div>
</div>

<!-- ROW 5: Content -->
<div class="container container-content">
	<div class="col-md-9 col-small-7">
		<h1 class="main-header">Delta-Q IC650</h1>
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="myTab">
				<li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
				<li role="presentation"><a href="#view-models" aria-controls="view-models" role="tab" data-toggle="tab">View Models</a></li>
				<li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
				<li role="presentation"><a href="#downloads" aria-controls="downloads" role="tab" data-toggle="tab">Support</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Overview -->
				<div role="tabpanel" class="tab-pane fade in active" id="overview">
					<p>The IC650 is a 650 watt industrial battery charger which uses an innovative sealed die cast aluminum enclosure to provide the ultimate in reliability. Featuring a patented USB host port, and highly flexible universal DC connections. The IC650 is sold in 24, 36 and 48 volts of direct current (VDC) models.</p>
					<p><strong><em>Reliable</em></strong>
						<ul>
							<li> Rugged, sealed aluminum die cast enclosure protects against extreme environments. </li>
							<li> Convection cooling eliminates the need for a cooling fan, thereby increasing reliability and eliminating the need for fan replacement/service. </li>
							<li> IP66 protection allows reliable operation in harsh environments. </li>
						</ul>
					</p>
					<p><strong><em>Intelligent</em></strong>
						<ul>
							<li> Integrated USB port allows easy updating of software, charge profiles and retrieval of charge history. </li>
							<li> Flooded, sealed and lithium battery compatibility. Select from an extensive list of   approved charge algorithms backed with the validation of Delta-Q and many major battery manufacturers. </li>
							<li> IC650 chargers store up to 25 algorithms which can be selected to match the specific batteries in use. IC650 chargers can easily be programmed via the user interface built into every charger, and remotely serviced supported without the need of an on-site technician. </li>
							<li> Advanced, high-frequency, switch-mode design allows more efficient (90% typ), faster charging and optimal charging independent of battery type or condition. </li>
							<li> Optional CANbus allows communication and integration into machinery </li>
						</ul>
					</p>
					<p><strong><em>Versatile</em></strong>
						<ul>
							<li> Wide range AC mains input (85 - 270 VAC) allows use of one charger anywhere in the world and eliminates the need to stock and service multiple models. </li>
							<li> Lightweight and compact size allows on-board use and offers space advantages over traditional SCR & ferro-resonant chargers and can be used in on or off-board installations. </li>
							<li> Universal DC connections allow the use of any user selected connector from a single model. </li>
						</ul>
					</p>
				</div>
				<!-- View Model -->
				<div role="tabpanel" class="tab-pane fade" id="view-models">
					<div class="table-responsive" id="search-results-series-display">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center header-3-pad-1">Model</th>
									<th class="text-center header-3-pad-1">Usage</th>
									<th class="text-center header-3-pad-1">Type</th>
									<th class="text-center header-3-pad-1">DC Output<br/>Current</th>
									<th class="text-center header-3-pad-1">DC Output<br/>Power</th>
									<th class="text-center header-3-pad-1">Low Voltage<br/>Threshold</span></th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td style="vertical-align: middle;"><a href="../../product/chargers/ic650.php?CID=<?php echo $row_IC650['CID']; ?>"><?php echo $row_IC650['Model']; ?></a></td>
										<td style="vertical-align: middle;"><?php echo $row_IC650['Usages']; ?></td>
										<td style="vertical-align: middle;"><?php echo $row_IC650['Type']; ?></td>
										<td style="vertical-align: middle;"><?php echo $row_IC650['Current']; ?> A</td>
										<td style="vertical-align: middle;"><?php echo $row_IC650['Power']; ?> W</td>
										<td style="vertical-align: middle;"><?php echo $row_IC650['Threshold']; ?> V</td>
									</tr>
								<?php } while ($row_IC650 = mysqli_fetch_assoc($IC650)); ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Accessorise -->
				<div role="tabpanel" class="tab-pane fade" id="accessories">
					<div class="table-responsive" id="search-results-series-display">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center header-3-pad-1"></th>
									<th class="text-center header-3-pad-1">Type</th>
									<th class="text-center header-3-pad-1">Description</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td style="vertical-align: middle;">
											<a href="../../graphics/product/charger/ic650/acco/<?php echo $row_IC650_Accessories['Image']; ?>" rel="shadowbox"><img class="responsive spec-table-img" src="../../graphics/product/charger/ic650/acco/<?php echo $row_IC650_Accessories['Image']; ?>"></a>
										</td>
										<td style="vertical-align: middle;"><?php echo $row_IC650_Accessories['Type']; ?></td>
										<td class="text-left" style="vertical-align: middle;">
											<span id="accessories-description"><?php echo $row_IC650_Accessories['Description']; ?></span>
										</td>
									</tr>
								<?php } while ($row_IC650_Accessories = mysqli_fetch_assoc($IC650_Accessories)); ?>
							</tbody>
						</table>
					</div>
				</div>		
				<!-- Download -->
				<div role="tabpanel" class="tab-pane fade" id="downloads">
					<div class="table-responsive">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th>&nbsp;</th>
									<th>Name</th>
									<th class="text-center">Size</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><img src="../../graphics/pdf.gif" alt="Brochure Icon"></td>
									<td class="text-left"><a href="../../support/download/charger/ic650/brochure/<?php echo $row_charger['IC_Support1']; ?>" target="_blank">Brochure</a></td>
									<td>1.4 MB</td>
								</tr>
								<tr>
									<td><img src="../../graphics/pdf.gif" alt="Manual Icon"></td>
									<td class="text-left"><a href="../../support/download/charger/ic650/manuals/<?php echo $row_charger['IC_Support2']; ?>" target="_blank">Manual</a></td>
									<td>1.5 MB</td>
								</tr>
								<tr>
									<td><img src="../../graphics/pdf.gif" alt="Spec-sheet Icon"></td>
									<td class="text-left"><a href="../../support/download/charger/ic650/spec-sheets/<?php echo $row_charger['IC_Support3']; ?>" target="_blank">Spec-sheet</a></td>
									<td>1.4 MB</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- SideBar -->
	<div class="col-md-3 col-small-5"> 
		<h5 class="main-header">Product Menu</h5>
		<?php include'sidebar.php'; ?>
	</div>
</div>

<div class="clearfix visible-lg"></div>

</div>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-546e48591d789905" async="async"></script>

<!-- ROW 5: Footer -->
<?php include'footer.php'; ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63717922-2', 'auto');
  ga('send', 'pageview');

</script>

<script language="javascript">
Shadowbox.init({
	animate: 1,
	animateFade: 1,
	animSequence: "wh", 
	auto_enable_all_images: 0, 
	auto_gallery: 0, 
	autoplayMovies: true, 
	continuous: 0, 
	counterLimit: "10",
	counterType: "default",
	displayCounter: 1, 
	displayNav: 1, 
	enableKeys: 1, 
	fadeDuration: "0.35",
	handleOversize: "resize",
	handleUnsupported: "link",
	initialHeight: 160,
	initialWidth: 320,
	language: "en",
	modal: false,
	overlayColor: "#ccc",
	overlayOpacity: "0.85",
	players: null,
	resizeDuration: "0.35",
	showMovieControls: 1,
	slideshowDelay: "0",
	viewportPadding: 50,
	useSizzle: 0
});
</script>

</body>

<?php include'../../copyright.php'; ?>
</html>