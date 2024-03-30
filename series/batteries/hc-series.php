<?php require('../../Connections/connection.php'); ?>
<?php
// connect batteries
mysqli_select_db($connection, $database_connection);
$query_batteries = "SELECT * FROM batteries";
$batteries = mysqli_query($connection, $query_batteries) or die(mysqli_error());
$row_batteries = mysqli_fetch_assoc($batteries);
//connect hc_series
mysqli_select_db($connection, $database_connection);
$query_Hc_Series = "SELECT * FROM hc_series";
$Hc_Series = mysqli_query($connection, $query_Hc_Series) or die(mysqli_error());
$row_Hc_Series = mysqli_fetch_assoc($Hc_Series);
$totalRows_Hc_Series = mysqli_num_rows($Hc_Series);
$BID = $row_Hc_Series["BID"];
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
<title>HC Series Batteries</title>
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
			<img class="img-responsive splash" src="../../graphics/series/hc-series.png" alt="1 Battery Deep-Cycle AGM Batteries" title="1 Battery Deep-Cycle AGM Batteries" border="0" width="1080" height="475">
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
			<li class="active">HC Series Batteries</li>
		</ol>
	</div>
</div>

<!-- ROW 5: Content -->
<div class="container container-content">
	<div class="col-md-9 col-small-7">
		<h1 class="main-header">HC Series</h1>
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="myTab">
				<li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
				<li role="presentation"><a href="#view-models" aria-controls="view-models" role="tab" data-toggle="tab">View Models</a></li>
				<li role="presentation"><a href="#downloads" aria-controls="downloads" role="tab" data-toggle="tab">Support</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="overview">
					<p><?php echo $row_batteries['Full_Force']; ?></p>
				</div>
		
				<div role="tabpanel" class="tab-pane fade" id="view-models">
					<div class="table-responsive" id="search-results-series-display">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center header-3-pad-1"></th>
									<th class="text-center header-3-pad-1">Model</th>
									<th class="text-center header-3-pad-1">Cranking<br/>(PHCA)</th>
									<th class="text-center header-3-pad-1">Cranking<br/>(CCA @ 0&deg; F)</th>
									<th class="text-center header-3-pad-1">Capacity<br/>(minutes)</th>
									<th class="text-center header-3-pad-1">Capacity<br/>(AH)</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
								<tr>
									<td style="vertical-align: middle;"><a href="../../product/batteries/hc-series.php?BID=<?php echo $row_Hc_Series['BID']; ?>">
										<img class="responsive spec-table-img" src="../../graphics\product\<?php echo $row_Hc_Series['Image']; ?>.png"></a>
									</td>
									<td style="vertical-align: middle;"><a href="../../product/batteries/hc-series.php?BID=<?php echo $row_Hc_Series['BID']; ?>"><?php echo $row_Hc_Series['Name']; ?></a></td>
									<td style="vertical-align: middle;"><?php echo $row_Hc_Series['Cranking_PHCA']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row_Hc_Series['Cranking_CCA']; ?></td>
									<td style="vertical-align: middle;"><?php echo $row_Hc_Series['Capacity_Min']; ?> @ 25 Amps</td>
									<td style="vertical-align: middle;"><?php echo $row_Hc_Series['Capacity_AH']; ?> @ 20 HR</td>
								</tr>
								<?php } while ($row_Hc_Series = mysqli_fetch_assoc($Hc_Series)); ?>
							</tbody>
						</table>
					</div>		
				</div>
				<div role="tabpanel" class="tab-pane fade" id="accessories"></div>		
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
									<td><img src="../../graphics/pdf.gif" alt="Charging Instructions Icon"></td>
									<td class="text-left"><a href="../../support/download/charging-instructions/<?php echo $row_batteries['Char_Ins']; ?>.pdf" target="_blank">Charging Instructions</a></td>
									<td>1.1 MB</td>
								</tr>
								<tr>
									<td><img src="../../graphics/pdf.gif" alt="Installation Manual Icon"></td>
									<td class="text-left"><a href="../../support/download/installation-manuals/<?php echo $row_batteries['Ins_Man']; ?>.pdf" target="_blank">Installation Manual</a></td>
									<td>6.3 MB</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
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