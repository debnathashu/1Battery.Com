<?php require('../Connections/connection.php'); ?>
<?php
//connect distributor
mysqli_select_db($connection, $database_connection);
$query_Distributor = "SELECT * FROM distributor where Region='US'";
$Distributor = mysqli_query($connection, $query_Distributor) or die(mysqli_error());
$row_Distributor = mysqli_fetch_assoc($Distributor);
$totalRows_Distributor = mysqli_num_rows($Distributor);
$ID = $row_Distributor["ID"];
?>
<?php
	require'../connect.php';
	// Get Data from sitedetails
	$sitedetails = $connection->query("select * from sitedetails");
	$row_sitedetails = $sitedetails->fetch_array(MYSQLI_BOTH);
?>
<!-- End PHP-->
<html>
<?php include'link.php'; ?>
<!-- MAX: 55 characters -->
<title>Distributors of 1 Batteries</title>
</head>

<script language="javascript">
$(document).ready(
	function() { 
		var url_hash = window.location.hash;
		if (url_hash) {
			$('.nav-tabs a[href="' + url_hash + '"]').tab('show');
			
			
			$(url_hash).collapse({parent: '#accordion'});
			$(url_hash).collapse('show');
			$('html,body').animate({scrollTop:475},'slow');
			
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
				<span class="splash-header">DISTRIBUTION NETWORK</span><br />
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
			<li class="active">Distributors</li>
		</ol>
	</div>
</div>

<!-- ROW 5: Content -->
<div class="container container-content">
	<div class="col-md-9 col-small-7">
		<h1 class="main-header">United States Distributors</h1>
		<!-- STATE ITEM-->
		<table class="table table-hover spec-table">
			<thead class="spec-thead">
				<tr>
					<th >&nbsp;<!-- --></th>
					<th>City</th>
					<th>Address</th>
					<th class="text-center">Phone</th>
					<th class="text-center">Website &nbsp; <span class="glyphicon glyphicon-new-window"></span></th>
				</tr>
			</thead>
			<tbody>
				<?php do { ?>
				<!-- PER STATE ITEM -->
				<tr id="results-dist">
					<td class="text-left" style="vertical-align: middle;"><?php echo $row_Distributor['State']; ?></td>
					<td class="text-left" style="vertical-align: middle;"><strong><?php echo $row_Distributor['City']; ?></strong></td>
					<td class="text-left" style="vertical-align: middle;"><?php echo $row_Distributor['Address']; ?></td>
					<td class="text-center" style="vertical-align: middle;"><?php echo $row_Distributor['Phone']; ?></td>
					<td class="text-center" style="vertical-align: middle;">
						<a href="http://<?php echo $row_Distributor['Web']; ?>" target="_blank" title="<?php echo $row_Distributor['Name']; ?>">
							<img src="../graphics/distributor/logo/<?php echo $row_Distributor['Image']; ?>">
						</a>
					</td>
				</tr>
				<!-- /PER STATE ITEM -->
				<?php } while ($row_Distributor = mysqli_fetch_assoc($Distributor)); ?>	
			</tbody>
		</table>
		<!-- /STATE ITEM-->
		<!-- Next Page Loading -->
	</div>
	<!-- SideBar -->
  	<div class="col-md-3 col-small-5"> 
		<h5 class="main-header">Filter by State</h5>
		<?php include'sidebar-na.php'; ?>
	</div>
  
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