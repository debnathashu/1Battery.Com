<?php require_once('../../Connections/connection.php'); ?>
<?php
	//connect quiq_all
	mysqli_select_db($connection, $database_connection);
	$query_QUIQ_All = "SELECT * FROM quiq_all";
	$QUIQ_All = mysqli_query($connection, $query_QUIQ_All) or die(mysqli_error());
	$row_QUIQ_All = mysqli_fetch_assoc($QUIQ_All);
	$totalRows_QUIQ_All = mysqli_num_rows($QUIQ_All);
	$CID = $row_QUIQ_All["CID"];
	//connect quiq_accessories
	mysqli_select_db($connection, $database_connection);
	$query_QuiQ_Accessories = "SELECT * FROM quiq_accessories";
	$QuiQ_Accessories = mysqli_query($connection, $query_QuiQ_Accessories) or die(mysqli_error());
	$row_QuiQ_Accessories = mysqli_fetch_assoc($QuiQ_Accessories);
	$totalRows_QuiQ_Accessories = mysqli_num_rows($QuiQ_Accessories);
	$ID = $row_QuiQ_Accessories["ID"];
	//connect charger
	mysqli_select_db($connection, $database_connection);
	$query_charger = "SELECT * FROM charger where ID='quiq'";
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
<title>Delta-Q QuiQ Battery Chargers</title>
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
			<img class="img-responsive splash" src="../../graphics/series/delta-q-quiq-battery-chargers.png" alt="1 Battery Deep-Cycle AGM Batteries" title="1 Battery Deep-Cycle AGM Batteries" border="0" width="1080" height="475">
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
			<li class="active">Delta-Q QuiQ Chargers</li>
		</ol>
	</div>
</div>

<!-- ROW 5: Content -->
<div class="container container-content">
	<div class="col-md-9 col-small-7">
		<h1 class="main-header">Delta-Q QuiQ</h1>
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
					<p>The QuiQ&trade; series of high frequency (HF) power factor corrected (PFC) battery chargers has been designed to provide reliable, quality charging for battery systems in electric drive vehicles or industrial machines.</p>
					<ul>
						<li> <strong>Anywhere.</strong> Wide range AC input (85 - 265 VAC) allows use of one charger anywhere in the world and eliminates the need to stock and service multiple models.<br /><br /> </li>
						<li> <strong>Efficient.</strong> Advanced, switch mode high frequency design allows more efficient (90% typ), faster charging and optimal charging independent of battery type or condition.<br /><br />  </li>
						<li> <strong>Sealed Chassis.</strong> IP66 protection allows reliable operation in harsh environments. Convection cooling eliminates the need for a cooling fan, thereby increasing reliability and eliminating the need for fan replacement/service.<br /><br />  </li>
						<li> <strong>Reliable.</strong> Power Factor of > 0.99 minimizes utility surcharges and optimizes the use of AC line power.<br /><br />  </li>
						<li> <strong>Optimized Charge Profiles.</strong> Flooded, sealed and lithium battery compatibility. Select from an extensive list of approved charge algorithms backed with the validation of Delta-Q and many major battery manufacturers.<br /><br />  </li>
						<li> <strong>Memory.</strong> QuiQ chargers store 10 separate algorithms which can be selected to match the specific batteries in use, eliminating the need for multiple models and resulting in lower operating costs. Access charger data & set/add algorithms via QuiQ Programmer.<br /><br />  </li>
						<li> <strong>Versatile.</strong> Designed for on- and off- board applications. It’s Lightweight and compact size allows on-board use and offers space advantages over ferro-resonant chargers in traditional off-board installations.<br /><br />  </li>
						<li> <strong>Safe.</strong> Extensive safety features such as reverse polarity and short circuit protection ensure safe operation for both the operator and the charger itself.<br /><br />  </li>
						<li> <strong>Easy.</strong> LEDs allow at-a-glance charge status determination. AC-Power, Ammeter, >80% Charge, 100% Charge, fault.<br /><br />  </li>
					</ul>
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
										<td style="vertical-align: middle;"><a href="../../product/chargers/quiq.php?CID=<?php echo $row_QUIQ_All['Name']; ?>"><?php echo $row_QUIQ_All['Name']; ?></a></td>
										<td style="vertical-align: middle;"><?php echo $row_QUIQ_All['Usages']; ?></td>
										<td style="vertical-align: middle;"><?php echo $row_QUIQ_All['Type']; ?></td>
										<td style="vertical-align: middle;"><?php echo $row_QUIQ_All['DCMOC']; ?></td>
										<td style="vertical-align: middle;"><?php echo $row_QUIQ_All['DCMOP']; ?></td>
										<td style="vertical-align: middle;"><?php echo $row_QUIQ_All['DCDDR']; ?></td>
									</tr>
								<?php } while ($row_QUIQ_All = mysqli_fetch_assoc($QUIQ_All)); ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Accessories -->
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
										<a href="../../graphics/product/charger/quiq/acco/<?php echo $row_QuiQ_Accessories['Image']; ?>" rel="shadowbox"><img class="responsive spec-table-img" src="../../graphics/product/charger/quiq/acco/<?php echo $row_QuiQ_Accessories['Image']; ?>"></a>
									</td>
									<td style="vertical-align: middle;"><?php echo $row_QuiQ_Accessories['Type']; ?></td>
									<td class="text-left" style="vertical-align: middle;">
										<span id="accessories-description"><?php echo $row_QuiQ_Accessories['Description']; ?></span>
									</td>
								</tr>
								<?php } while ($row_QuiQ_Accessories = mysqli_fetch_assoc($QuiQ_Accessories)); ?>
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
									<td><img src="../../graphics/pdf.gif" alt="Manual Icon"></td>
									<td class="text-left"><a href="../../support/download/charger/quiq/manuals/<?php echo $row_charger['IC_Support2']; ?>" target="_blank">Manual</a></td>
									<td>449.4 KB</td>
								</tr>
								<tr>
									<td><img src="../../graphics/pdf.gif" alt="Spec-sheet Icon"></td>
									<td class="text-left"><a href="../../support/download/charger/quiq/manuals/<?php echo $row_charger['IC_Support3']; ?>" target="_blank">Spec-sheet</a></td>
									<td>943.2 KB</td>
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