<?php require'../../connect.php'; ?>
<?php
	if(isset($_GET['BID'])){
		$BID = $_GET['BID'];
	// Start of Specifications
		// Get Data from pbdetails
		$pbdetails = $connection->query("select * from pbdetails where BID='$BID'");
		$row_pbdetails = $pbdetails->fetch_array(MYSQLI_BOTH);
		// Get Data from bmecspe
		$bmecspe = $connection->query("select * from bmecspe where BID='$BID'");
		$row_bmecspe = $bmecspe->fetch_array(MYSQLI_BOTH);
		// Get Data from bdistab
		$bdistab = $connection->query("select * from bdistab where BID='$BID'");
		$row_bdistab = $bdistab->fetch_array(MYSQLI_BOTH);	
		// Get Data from belespe
		$belespe = $connection->query("select * from belespe where BID='$BID'");
		$row_belespe = $belespe->fetch_array(MYSQLI_BOTH);
		// Get Data from csa_temp_ter
		$csa_temp_ter = $connection->query("select * from csa_temp_ter where BID='$BID'");
		$row_csa_temp_ter = $csa_temp_ter->fetch_array(MYSQLI_BOTH);
	// End of Specifications
		// Get Data from b_graph
		$b_graph = $connection->query("select * from b_graph where BID='$BID'");
		$row_b_graph = $b_graph->fetch_array(MYSQLI_BOTH);
		// Get Data from b_gallery
		$b_gallery = $connection->query("select * from b_gallery where BID='$BID'");
		$row_b_gallery = $b_gallery->fetch_array(MYSQLI_BOTH);
		// Get Data from b_support
		$b_support = $connection->query("select * from b_support where BID='$BID'");
		$row_b_support = $b_support->fetch_array(MYSQLI_BOTH);
		// Get Data from sitedetails
		$sitedetails = $connection->query("select * from sitedetails");
		$row_sitedetails = $sitedetails->fetch_array(MYSQLI_BOTH);
		
	}
?>
<!-- End PHP-->
<html>

<?php include'link.php'; ?>

<!-- MAX: 55 characters -->
<title>1 Battery <?php echo $row_pbdetails['Name']; ?> Product Information</title>
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
		<div class="splash-main splash">
			<div class="splash-product">
				<div class="col-md-5 col-small-5" id="splash-left">
					<span class="splash-header"><?php echo $row_pbdetails['Name']; ?></span><br />
					<span class="splash-text">		
						<ul>
							<li><?php echo $row_belespe['NV']; ?>-volts</li>
							<li><?php echo $row_bmecspe['MGS']; ?> Group Size </li>
							<li><?php echo $row_pbdetails['ReCap25']; ?> mins @ 25 amps</li>
							<li><?php echo $row_pbdetails['ReCap75']; ?> mins @ 75 amps</li>
							<li><?php echo $row_belespe['Cap5']; ?> AH @ 5HR</li>
							<li><?php echo $row_belespe['Cap20']; ?> AH @ 20HR</li>
							<li><?php echo $row_belespe['CA']; ?> CA @ 32&deg;C</li>
							<li><?php echo $row_belespe['CCA']; ?> CCA @ 0&deg;C</li>
						</ul>
					</span>
				</div>
				<div class="col-md-7 col-small-5" id="splash-right">
					<img class="img-responsive splash" src="../../graphics/product/feature/<?php echo $row_pbdetails['FeatureImage']; ?>" alt="<?php echo $row_pbdetails['Name']; ?>" title="<?php echo $row_pbdetails['Name']; ?>" border="0">		
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
			<li><a href="../../series/batteries/full-force.php">Full Force Batteries</a></li>
			<li class="active"><?php echo $row_pbdetails['Name']; ?> Product Information</li>
		</ol>
	</div>
</div>

<!-- ROW 5: Content -->
<div class="container container-content">
	<div class="col-md-9 col-small-7">
		<h1 class="main-header"><?php echo $row_pbdetails['Name']; ?> <?php echo $row_pbdetails['Title']; ?></h1>
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="myTab">
				<li role="presentation" class="active"><a href="#specifications" aria-controls="specifications" role="tab" data-toggle="tab">Specifications</a></li>
				<li role="presentation"><a href="#graphs" aria-controls="graphs" role="tab" data-toggle="tab">Graphs</a></li>
				<li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Gallery</a></li>
				<li role="presentation"><a href="#downloads" aria-controls="downloads" role="tab" data-toggle="tab">Support</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<?php include'specifications-full.php'; ?>	
				<?php include'graph&gallery-full.php'; ?>	
				<?php include'download-full.php'; ?>	
				<div role="tabpanel" class="tab-pane fade" id="accessories"></div>		
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