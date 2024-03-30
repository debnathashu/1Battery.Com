<?php
	require '../connect.php';
	$sitedetails = $connection->query("select * from sitedetails");
	$sitedetails_row = $sitedetails->fetch_array(MYSQLI_BOTH);	
?>
<!-- End PHP -->
<html>
<?php include'link.php'; ?>
<!-- MAX: 55 characters -->
<title>Career | 1 Battery</title>
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
				<span class="splash-header">CAREERS</span><br />
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
			<li class="active">Contact Us</li>
		</ol>
	</div>
</div>

<!-- ROW 5: Content -->
<div class="container container-content">
	<div class="col-md-4 col-small-6">
		<h5 class="main-header">Send Your Resume To</h5>
		<?php echo $sitedetails_row['SiteName']; ?> USA<br />
		<?php echo $sitedetails_row['Address']; ?><br />
		<?php echo $sitedetails_row['City']; ?>, <?php echo $sitedetails_row['State']; ?> <?php echo $sitedetails_row['Zip']; ?><br />
		<br />
		<span class="glyphicon glyphicon-earphone"></span> &nbsp; <?php echo $sitedetails_row['Phone1']; ?> &nbsp;&nbsp;&nbsp;&nbsp; Toll Free<br />
		<br />
		<span class="glyphicon glyphicon-envelope"></span> &nbsp; <?php echo $sitedetails_row['Email1']; ?><br />
		<br />
	</div>
	<div class="col-md-8 col-small-6">
		<h5 class="main-header">Careers at 1 Battery</h5>
		<p>At 1 Battery USA, we are always looking for new talent to add to our team. If you are interested in a career at 1 Battery USA, please send us your resume. We are currently seeking:</p>
		<br />
		<p><strong>Sales Executive</strong><br />
		<em>
		Responsibilities Include:
		<ul>
			<li> Conducting direct business to business sales </li>
			<li> Specialize in generating new business in an assigned territory through prospecting, cold calling, networking and referrals </li>
			<li> Develop relationships with prospective customers and nurturing existing customer relationships to help grow and maintain volume </li>
			<li> Monitor and follow up as needed </li>
			<li> Achieve/exceed sales goals </li>
			<li> Work with co-workers to finalize the transaction </li>
		</ul>
		Job Qualifications (candidates must have the following):
		<ul>
			<li> Excellent interpersonal, telephone, presentation, oral and written communication </li>
			<li> Successful closing skills </li>
			<li> Ability to influence decision makers at all levels of an organization, from CEO to a front office professional </li>
			<li> Positive and enthusiastic attitude towards sales and customer service </li>
			<li> This position requires the ability to travel, have a reliable vehicle, valid drivers license and a clean driving record </li>
			<li> College degree in business/marketing preferred or relevant experience </li>
		</ul>
		We Offer:<br />
		<ul>
			<li> Competitive base salary and commissions plus bonuses </li>
			<li> 401k, health insurance, auto allowance, paid vacation and sick time </li>
		</ul>
		</em></p>
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