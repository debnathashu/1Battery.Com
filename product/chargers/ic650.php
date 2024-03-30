<?php require'../../connect.php'; ?>
<?php
	if(isset($_GET['CID'])){
		$CID = $_GET['CID'];
	// Start of Specifications
		// Get Data from ac_dc_mec_env_reg
		$ac_dc_mec_env_reg = $connection->query("select * from ac_dc_mec_env_reg where CID='$CID'");
		$row_ac_dc_mec_env_reg = $ac_dc_mec_env_reg->fetch_array(MYSQLI_BOTH);
		// Get Data from c_gallery
		$c_gallery = $connection->query("select * from c_gallery where CID='$CID'");
		$row_c_gallery = $c_gallery->fetch_array(MYSQLI_BOTH);
		// Get Data from c_support
		$c_support = $connection->query("select * from c_support where CID='$CID'");
		$row_c_support = $c_support->fetch_array(MYSQLI_BOTH);
	}
	// Get Data from sitedetails
	$sitedetails = $connection->query("select * from sitedetails");
	$row_sitedetails = $sitedetails->fetch_array(MYSQLI_BOTH);
?>
<?php
	require('../../Connections/connection.php');
	//connect c_accessories
	mysqli_select_db($connection, $database_connection);
	$query_C_Accessories = "SELECT * FROM c_accessories where CID='$CID'";
	$C_Accessories = mysqli_query($connection, $query_C_Accessories) or die(mysqli_error());
	$row_C_Accessories = mysqli_fetch_assoc($C_Accessories);
	$totalRows_C_Accessories = mysqli_num_rows($C_Accessories);
	$CID = $row_C_Accessories["CID"];
?>
<!-- End PHP-->
<html>
<?php include'link.php'; ?>
<!-- MAX: 55 characters -->
<title>Delta-Q <?php echo $row_ac_dc_mec_env_reg['Name']; ?> Product Information</title>
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
	<?php include'menu.php' ?>
	
	<!-- ROW 2: Splash Image -->
	<div class="container-fluid container-splash">
		<div class="splash-main splash">
			<div class="splash-product">
				<div class="col-md-5 col-small-5" id="splash-left">
					<span class="splash-header"><?php echo $row_ac_dc_mec_env_reg['Name']; ?></span><br />
					<span class="splash-text">
						<ul>
							<li><?php echo $row_ac_dc_mec_env_reg['ACIC']; ?></li>
							<li><?php echo $row_ac_dc_mec_env_reg['DCOC']; ?></li>
							<li><?php echo $row_ac_dc_mec_env_reg['MEDP']; ?></li>
							<li><?php echo $row_ac_dc_mec_env_reg['REEf']; ?></li>
							<li>Some accessories may be required</li>
						</ul>
					</span>
				</div>
				<div class="col-md-7 col-small-5" id="splash-right">
					<img class="img-responsive splash" src="../../graphics/product/charger/ic650/feature/<?php echo $row_ac_dc_mec_env_reg['FeatureImage']; ?>" alt="<?php echo $row_ac_dc_mec_env_reg['Name']; ?>" title="<?php echo $row_ac_dc_mec_env_reg['Name']; ?>" border="0">
				</div>
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
			<li><a href="../../index.php">Home</a></li>
			<li><a href="../../series/chargers/delta-q-ic650-battery-chargers.php">Delta-Q IC650</a></li>
			<li class="active"><?php echo $row_ac_dc_mec_env_reg['Name']; ?> Product Information</li>
		</ol>
	</div>
</div>

<!-- ROW 5: Content -->

<div class="container container-content">
	<div class="col-md-9 col-small-7">
		<h1 class="main-header"><?php echo $row_ac_dc_mec_env_reg['Name']; ?> <?php echo $row_ac_dc_mec_env_reg['Title']; ?></h1>
		<div role="tabpanel">

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="myTab">
				<li role="presentation" class="active"><a href="#specifications" aria-controls="specifications" role="tab" data-toggle="tab">Specifications</a></li>
				<li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Gallery</a></li>
				<li role="presentation"><a href="#downloads" aria-controls="downloads" role="tab" data-toggle="tab">Support</a></li>
				<li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>			
			</ul>

			<div class="buy-now-container">
				<div class="button" id="buy-now-button-outer">
					<div id="buy-now-button-text">
						<a href="../../content/buy-now.php">Order Now</a>
					</div> <!-- /buy-now-button-text -->
				</div> <!-- /buy-now-button-outer -->
			</div>
		
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="specifications">
					<div class="row">
						<?php include'specification-ic650.php'; ?>
					</div>
				</div>
	
				<div role="tabpanel" class="tab-pane fade" id="gallery">
					<?php include'gallery-ic650.php'; ?>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="downloads">
					<?php include'download-ic650.php'; ?>
				</div>

				<div role="tabpanel" class="tab-pane fade" id="accessories">
					<?php include'accessories-ic650.php'; ?>
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

<!-- By Lockers IT Solution. Web: http://it.brainlockerltd.com/ -->
</html>