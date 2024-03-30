<?php require_once('../Connections/connection.php'); ?>
<?php
//connect media
mysqli_select_db($connection, $database_connection);
$query_Media1 = "SELECT * FROM media where Cat='1st'";
$Media1 = mysqli_query($connection, $query_Media1) or die(mysqli_error());
$row_Media1 = mysqli_fetch_assoc($Media1);
$totalRows_Media1 = mysqli_num_rows($Media1);
$ID = $row_Media1["ID"];
//connect media
mysqli_select_db($connection, $database_connection);
$query_Media2 = "SELECT * FROM media where Cat='2nd'";
$Media2 = mysqli_query($connection, $query_Media2) or die(mysqli_error());
$row_Media2 = mysqli_fetch_assoc($Media2);
$totalRows_Media2 = mysqli_num_rows($Media2);
$ID = $row_Media2["ID"];
//connect media
mysqli_select_db($connection, $database_connection);
$query_Media3 = "SELECT * FROM media where Cat='3rd'";
$Media3 = mysqli_query($connection, $query_Media3) or die(mysqli_error());
$row_Media3 = mysqli_fetch_assoc($Media3);
$totalRows_Media3 = mysqli_num_rows($Media3);
$ID = $row_Media3["ID"];
//connect media
mysqli_select_db($connection, $database_connection);
$query_Media4 = "SELECT * FROM media where Cat='4th'";
$Media4 = mysqli_query($connection, $query_Media4) or die(mysqli_error());
$row_Media4 = mysqli_fetch_assoc($Media4);
$totalRows_Media4 = mysqli_num_rows($Media4);
$ID = $row_Media4["ID"];
?>
<?php
	require '../connect.php';
	$sitedetails = $connection->query("select * from sitedetails");
	$sitedetails_row = $sitedetails->fetch_array(MYSQLI_BOTH);	
?>
<!-- End PHP-->
<html>
<?php include'link.php'; ?>

<!-- MAX: 55 characters -->
<title>Video | 1 Battery</title>

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
				<span class="splash-header">VIDEOS</span><br />
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
			<li class="active">Videos</li>
		</ol>
	</div>
</div>

<!-- ROW 5: Content -->
<div class="container container-content">
	<div class="col-md-12">
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="myTab">
				<li role="presentation" class="active"><a href="#battery-breakdown" aria-controls="battery-breakdown" role="tab" data-toggle="tab">Battery Breakdown</a></li>
				<li role="presentation"><a href="#fullriver-faqs" aria-controls="fullriver-faqs" role="tab" data-toggle="tab">1 Battery F.A.Q.'s</a></li>
				<li role="presentation"><a href="#tradeshows" aria-controls="tradeshows" role="tab" data-toggle="tab">Tradeshows</a></li>
				<li role="presentation"><a href="#3rd-party" aria-controls="3rd-party" role="tab" data-toggle="tab">3rd Party</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="battery-breakdown">
					<h1 class="main-header">Battery Breakdown Series Instructional Videos</h1>
					<div class="table-responsive">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center" width="100px">Format</th>
									<th>Description</th>
									<th class="text-center" width="75px">Length</th>
									<th class="text-center" width="125px">Date Added</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td><img src="../graphics/icon-youtube.png" title="YouTube Video" alt="YouTube Video"></td>
										<td class="text-left"><a href="<?php echo $row_Media1['Description_URL']; ?>" target="_blank"><?php echo $row_Media1['Description']; ?></a></td>
										<td><?php echo $row_Media1['Length']; ?></td>
										<td><?php echo $row_Media1['Date']; ?></td>
									</tr>
								<?php } while ($row_Media1 = mysqli_fetch_assoc($Media1)); ?>
							</tbody>
						</table>
					</div>
				</div> <!-- /battery-breakdown -->
				<div role="tabpanel" class="tab-pane fade" id="fullriver-faqs">
					<h1 class="main-header">1 Battery F.A.Q.'s</h1>
					<div class="table-responsive">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center" width="100px">Format</th>
									<th>Description</th>
									<th class="text-center" width="75px">Length</th>
									<th class="text-center" width="125px">Date Added</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td><img src="../graphics/icon-youtube.png" title="YouTube Video" alt="YouTube Video"></td>
										<td class="text-left"><a href="<?php echo $row_Media2['Description_URL']; ?>" target="_blank"><?php echo $row_Media2['Description']; ?></a></td>
										<td><?php echo $row_Media2['Length']; ?></td>
										<td><?php echo $row_Media2['Date']; ?></td>
									</tr>
								<?php } while ($row_Media2 = mysqli_fetch_assoc($Media2)); ?>
							</tbody>
						</table>
					</div>
				</div> <!-- /1 Battery-faqs -->
				<div role="tabpanel" class="tab-pane fade" id="tradeshows">
					<h1 class="main-header">Tradeshow Recaps</h1>
					<div class="table-responsive">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center" width="100px">Format</th>
									<th>Description</th>
									<th class="text-center" width="75px">Length</th>
									<th class="text-center" width="125px">Date Added</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td><img src="../graphics/icon-youtube.png" title="YouTube Video" alt="YouTube Video"></td>
										<td class="text-left"><a href="<?php echo $row_Media3['Description_URL']; ?>" target="_blank"><?php echo $row_Media3['Description']; ?></a></td>
										<td><?php echo $row_Media3['Length']; ?></td>
										<td><?php echo $row_Media3['Date']; ?></td>
									</tr>
								<?php } while ($row_Media3 = mysqli_fetch_assoc($Media3)); ?>
							</tbody>
						</table>
					</div>
				</div> <!-- /tradeshows -->
				<div role="tabpanel" class="tab-pane fade" id="3rd-party">
					<h1 class="main-header">3rd Party Videos</h1>
					<div class="table-responsive">
						<table class="table table-hover spec-table">
							<thead class="spec-thead">
								<tr>
									<th class="text-center" width="100px">Format</th>
									<th>Company &nbsp; <span class=" glyphicon glyphicon-new-window" aria-hidden="true"></span></th>
									<th>Description</th>
									<th class="text-center" width="75px">Length</th>
									<th class="text-center" width="125px">Date Added</th>
								</tr>
							</thead>
							<tbody>
								<?php do { ?>
									<tr>
										<td><img src="../graphics/icon-youtube.png" title="YouTube Video" alt="YouTube Video"></td>
										<td class="text-left"><a href="<?php echo $row_Media4['C_URL']; ?>" target="_blank"><?php echo $row_Media4['C_Name']; ?></a></td>
										<td class="text-left"><a href="<?php echo $row_Media4['Description_URL']; ?>" target="_blank"><?php echo $row_Media4['Description']; ?></a></td>
										<td><?php echo $row_Media4['Length']; ?></td>
										<td><?php echo $row_Media4['Date']; ?></td>
									</tr>
								<?php } while ($row_Media4 = mysqli_fetch_assoc($Media4)); ?>
							</tbody>
						</table>
					</div>
				</div> <!-- /3rd-party -->
			</div>
		</div>
	</div>

   <div class="col-md-3 col-small-5"> 

   </div>
</div>

<div class="clearfix visible-lg"></div>

</div>

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