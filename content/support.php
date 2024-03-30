<?php require_once('../Connections/connection.php'); ?>
<?php
//connect b_support
mysqli_select_db($connection, $database_connection);
$query_DC_Support = "SELECT * FROM b_support where Cat='DC'";
$DC_Support = mysqli_query($connection, $query_DC_Support) or die(mysqli_error());
$row_DC_Support = mysqli_fetch_assoc($DC_Support);
$totalRows_DC_Support = mysqli_num_rows($DC_Support);
$BID = $row_DC_Support["BID"];
//connect b_support
mysqli_select_db($connection, $database_connection);
$query_FF_Support = "SELECT * FROM b_support where Cat='FF'";
$FF_Support = mysqli_query($connection, $query_FF_Support) or die(mysqli_error());
$row_FF_Support = mysqli_fetch_assoc($FF_Support);
$totalRows_FF_Support = mysqli_num_rows($FF_Support);
$BID = $row_FF_Support["BID"];
//connect b_support
mysqli_select_db($connection, $database_connection);
$query_HC_Support = "SELECT * FROM b_support where Cat='HC'";
$HC_Support = mysqli_query($connection, $query_HC_Support) or die(mysqli_error());
$row_HC_Support = mysqli_fetch_assoc($HC_Support);
$totalRows_HC_Support = mysqli_num_rows($HC_Support);
$BID = $row_HC_Support["BID"];
// next
//connect de_support
mysqli_select_db($connection, $database_connection);
$query_De_Support1 = "SELECT * FROM de_support where Cat='delta-q'";
$De_Support1 = mysqli_query($connection, $query_De_Support1) or die(mysqli_error());
$row_De_Support1 = mysqli_fetch_assoc($De_Support1);
$totalRows_De_Support1 = mysqli_num_rows($De_Support1);
$ID = $row_De_Support1["ID"];
//connect de_support
mysqli_select_db($connection, $database_connection);
$query_De_Support2 = "SELECT * FROM de_support where Cat='resource'";
$De_Support2 = mysqli_query($connection, $query_De_Support2) or die(mysqli_error());
$row_De_Support2 = mysqli_fetch_assoc($De_Support2);
$totalRows_De_Support2 = mysqli_num_rows($De_Support2);
$ID = $row_De_Support2["ID"];
//connect de_support
mysqli_select_db($connection, $database_connection);
$query_De_Support3 = "SELECT * FROM de_support where Cat='series'";
$De_Support3 = mysqli_query($connection, $query_De_Support3) or die(mysqli_error());
$row_De_Support3 = mysqli_fetch_assoc($De_Support3);
$totalRows_De_Support3 = mysqli_num_rows($De_Support3);
$ID = $row_De_Support3["ID"];
//connect de_support
mysqli_select_db($connection, $database_connection);
$query_De_Support4 = "SELECT * FROM de_support where Cat='market'";
$De_Support4 = mysqli_query($connection, $query_De_Support4) or die(mysqli_error());
$row_De_Support4 = mysqli_fetch_assoc($De_Support4);
$totalRows_De_Support4 = mysqli_num_rows($De_Support4);
$ID = $row_De_Support4["ID"];
?>
<?php
	require'../connect.php';
	$sitedetails = $connection->query("select * from sitedetails");
	$sitedetails_row = $sitedetails->fetch_array(MYSQLI_BOTH);	
?>
<!-- End PHP-->
<html>
<?php include'link.php'; ?>
<!-- MAX: 55 characters -->
<title>Support | <?php echo $sitedetails_row['SiteName']; ?></title>
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
			<div class="no-splash">
				<span class="splash-header">SUPPORT</span><br />
			</div>
		</div>
	</div>
	<!-- ROW 3: Search Bar -->
	<?php include'search.php'; ?>
</div> <!-- /container -->

<!-- ROW 4: Breadcrumbs -->
<div class="container container-breadcrumbs">
	<div class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="../index.php">Home</a></li>
			<li class="active">Support</li>	
		</ol>
	</div>
</div>

<!-- ROW 5: Content -->
<div class="container container-content">
	<div class="col-md-12">
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="myTab">
				<li role="presentation" class="active"><a href="#dc-series" aria-controls="dc-series" role="tab" data-toggle="tab">DC Series</a></li>
				<li role="presentation"><a href="#ff-series" aria-controls="ff-series" role="tab" data-toggle="tab">Full Force</a></li>
				<li role="presentation"><a href="#hc-series" aria-controls="hc-series" role="tab" data-toggle="tab">HC Series</a></li>
				<li role="presentation"><a href="#delta-q" aria-controls="delta-q" role="tab" data-toggle="tab">Delta-Q</a></li>
				<li role="presentation"><a href="#resources" aria-controls="resources" role="tab" data-toggle="tab">Resources</a></li>
				<li role="presentation"><a href="#marketing-materials" aria-controls="marketing-materials" role="tab" data-toggle="tab">Marketing Materials</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="dc-series">
					<h1 class="main-header">DC Series Spec Sheets</h1>
					<div class="table-responsive">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center" width="100px">Format</th>
									<th>Name</th>
									<th class="text-center" width="100px">Voltage</th>
									<th class="text-center" width="100px">Size</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td><img src="../graphics/icon-pdf.png" title="PDF Document" alt="PDF Document"></td>
										<td class="text-left"><a href="../support/download/spec-sheets/<?php echo $row_DC_Support['support4']; ?>" target="_blank"><?php echo $row_DC_Support['BID']; ?></a></td>
										<td><?php echo $row_DC_Support['Volt']; ?>V</td>
										<td><?php echo $row_DC_Support['Size']; ?></td>
									</tr>
								<?php } while ($row_DC_Support = mysqli_fetch_assoc($DC_Support)); ?>
							</tbody>
						</table>
					</div>
				</div> <!-- /DC Series Spec Sheets -->
				<div role="tabpanel" class="tab-pane fade" id="ff-series">
					<h1 class="main-header">Full Force Series Spec Sheets</h1>
					<div class="table-responsive">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center" width="100px">Format</th>
									<th>Name</th>
									<th class="text-center" width="100px">Voltage</th>
									<th class="text-center" width="100px">Size</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td><img src="../graphics/icon-pdf.png" title="PDF Document" alt="PDF Document"></td>
										<td class="text-left"><a href="../support/download/spec-sheets/<?php echo $row_FF_Support['support4']; ?>" target="_blank"><?php echo $row_FF_Support['BID']; ?></a></td>
										<td><?php echo $row_FF_Support['Volt']; ?>V</td>
										<td><?php echo $row_FF_Support['Size']; ?></td>
									</tr>
								<?php } while ($row_FF_Support = mysqli_fetch_assoc($FF_Support)); ?>
							</tbody>
						</table>
					</div>
				</div> <!-- /FF Series Spec Sheets -->
				<div role="tabpanel" class="tab-pane fade" id="hc-series">
					<h1 class="main-header">HC Series Spec Sheets</h1>
					<div class="table-responsive">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center" width="100px">Format</th>
									<th>Name</th>
									<th class="text-center" width="100px">Voltage</th>
									<th class="text-center" width="100px">Size</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td><img src="../graphics/icon-pdf.png" title="PDF Document" alt="PDF Document"></td>
										<td class="text-left"><a href="../support/download/spec-sheets/<?php echo $row_HC_Support['support4']; ?>" target="_blank"><?php echo $row_HC_Support['BID']; ?></a></td>
										<td><?php echo $row_HC_Support['Volt']; ?>V</td>
										<td><?php echo $row_HC_Support['Size']; ?></td>
									</tr>
								<?php } while ($row_HC_Support = mysqli_fetch_assoc($HC_Support)); ?>
							</tbody>
						</table>
					</div>
				</div> <!-- /HC Series Spec Sheets -->
				<div role="tabpanel" class="tab-pane fade" id="delta-q">
					<h1 class="main-header">Delta-Q Literature</h1>
					<div class="table-responsive">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center" width="100px">Format</th>
									<th>Name</th>
									<th class="text-center" width="100px">Size</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td><img src="../graphics/icon-pdf.png" title="PDF Document" alt="PDF Document"></td>
										<td class="text-left"><a href="../support/delta-q/<?php echo $row_De_Support1['URL']; ?>" target="_blank"><?php echo $row_De_Support1['Name']; ?></a></td>
										<td><?php echo $row_De_Support1['Size']; ?></td>
									</tr>
								<?php } while ($row_De_Support1 = mysqli_fetch_assoc($De_Support1)); ?>
							</tbody>
						</table>
					</div>
				</div> <!-- /delta-q -->
				<div role="tabpanel" class="tab-pane fade" id="resources">
					<h1 class="main-header">Resources</h1>
					<div class="table-responsive">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center" width="100px">Format</th>
									<th>Name</th>
									<th class="text-center" width="100px">Size</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td><img src="../graphics/icon-pdf.png" title="PDF Document" alt="PDF Document"></td>
										<td class="text-left"><a href="../support/resources/<?php echo $row_De_Support2['URL']; ?>" target="_blank"><?php echo $row_De_Support2['Name']; ?></a></td>
										<td><?php echo $row_De_Support2['Size']; ?></td>
									</tr>
								<?php } while ($row_De_Support2 = mysqli_fetch_assoc($De_Support2)); ?>
							</tbody>
						</table>
					</div>
				</div> <!-- /resources -->
				<div role="tabpanel" class="tab-pane fade" id="marketing-materials">
					<h1 class="main-header">Series Brochures</h1>
						<div class="table-responsive">
							<table class="table table-hover spec-table">
								<thead class="spec-thead">
									<tr>
										<th class="text-center" width="100px">Format</th>
										<th>Name</th>
										<th class="text-center" width="100px">Size</th>
									</tr>
								</thead>
								<tbody>
									<?php do { ?>
									<tr>
										<td><img src="../graphics/icon-pdf.png" title="PDF Document" alt="PDF Document"></td>
										<td class="text-left"><a href="../support/marketing-materials/<?php echo $row_De_Support3['URL']; ?>" target="_blank"><?php echo $row_De_Support3['Name']; ?></a></td>
										<td><?php echo $row_De_Support3['Size']; ?></td>
									</tr>
								<?php } while ($row_De_Support3 = mysqli_fetch_assoc($De_Support3)); ?>
							</tbody>
						</table>
					</div>
					<h1 class="main-header">Market Sheets</h1>
					<div class="table-responsive">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center" width="100px">Format</th>
									<th>Name</th>
									<th class="text-center" width="100px">Size</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td><img src="../graphics/icon-pdf.png" title="PDF Document" alt="PDF Document"></td>
										<td class="text-left"><a href="../support/marketing-materials/<?php echo $row_De_Support4['URL']; ?>" target="_blank"><?php echo $row_De_Support4['Name']; ?></a></td>
										<td><?php echo $row_De_Support4['Size']; ?></td>
									</tr>
								<?php } while ($row_De_Support4 = mysqli_fetch_assoc($De_Support4)); ?>
							</tbody>
						</table>
					</div>
				</div> <!-- /marketing materials -->
			</div>
		</div>
	</div>	
	<div class="col-md-3 col-small-5"></div>
</div>

<div class="clearfix visible-lg"></div>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-546e48591d789905" async="async"></script>

<!-- ROW 5: Footer -->
<?php include'footer.php'; ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

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

<?php include'../copyright.php'; ?>
</html>