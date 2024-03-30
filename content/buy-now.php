<?php require'../connect.php'; ?>
<?php
	$sitedetails = $connection->query("select * from sitedetails");
	$sitedetails_row = $sitedetails->fetch_array(MYSQLI_BOTH);	
?>
<?php
	if(isset($_POST['submit'])){
		$FName = $_POST['FirstName'];
		$LName = $_POST['LastName'];	
		$Phone = $_POST['Phone'];
		$Email = $_POST['Email'];
		$DCharger = $_POST['OptIn'];
		$Comment = $_POST['Message'];
			
		$sql = $connection->query("INSERT INTO product_order (FirstName, LastName, Phone, Email, DCharger, Comment)Values('{$FName}', '{$LName}', '{$Phone}', '{$Email}', '{$DCharger}', '{$Comment}')");
		
		header('Location: buy-now.php');
	}
?>
<html>
<?php include'link.php'; ?>

<!-- MAX: 55 characters -->
<title>Order Now | <?php echo $sitedetails_row['SiteName']; ?></title>

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
				<span class="splash-header">ORDER NOW</span><br />
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
			<li class="active">Order Now</li>
		</ol>
	</div>
</div>

<!-- ROW 5: Content -->

<div class="container container-content">
	<div class="col-md-4 col-small-6">
		<h5 class="main-header"><?php echo $sitedetails_row['SiteName']; ?> North America</h5>
		<?php echo $sitedetails_row['SiteName']; ?> USA<br />
		<?php echo $sitedetails_row['Address']; ?><br />
		<?php echo $sitedetails_row['City']; ?>, <?php echo $sitedetails_row['State']; ?> <?php echo $sitedetails_row['Zip']; ?><br />
		<br />
		<span class="glyphicon glyphicon-earphone"></span> &nbsp; <?php echo $sitedetails_row['Phone1']; ?> &nbsp;&nbsp;&nbsp;&nbsp; Toll Free<br />
		<span class="glyphicon glyphicon-earphone"></span> &nbsp; <?php echo $sitedetails_row['Phone2']; ?> &nbsp;&nbsp;&nbsp;&nbsp; Local<br />
		<br /><br />
		<h5 class="main-header">Social Media</h5>
		<a href="http://www.facebook.com/<?php echo $sitedetails_row['FaceBook']; ?>" target="_blank"><img class="contact-social-icons" src="../graphics/icon-facebook.png" alt="Like us on Facebook" title="Like us on Facebook" border="0" width="48" height="42"></a>
		<a href="http://www.twitter.com/<?php echo $sitedetails_row['Twitter']; ?>" target="_blank"><img class="contact-social-icons" src="../graphics/icon-twitter.png" alt="Follow us on Twitter" title="Follow us on Twitter" border="0" width="48" height="42"></a>
		<a href="http://www.instagram.com/<?php echo $sitedetails_row['Instagram']; ?>" target="_blank"><img class="contact-social-icons" src="../graphics/icon-instagram.png" alt="Follow us on Instagram" title="Follow us on Instagram" border="0" width="48" height="42"></a>
		<a href="http://www.youtube.com/<?php echo $sitedetails_row['YouTube']; ?>" target="_blank"><img class="contact-social-icons" src="../graphics/icon-yt.png" alt="Subscribe to our YouTube Channel" title="Subscribe to our YouTube Channel" border="0" width="48" height="42"></a>
		<a href="http://plus.google.com/<?php echo $sitedetails_row['GooglePlus']; ?>" target="_blank"><img class="contact-social-icons" src="../graphics/icon-googleplus.png" alt="Follow us on Google+" title="Follow us on Google+" border="0" width="48" height="42"></a>
		<a href="https://www.linkedin.com/company/<?php echo $sitedetails_row['linkedin']; ?>" target="_blank"><img class="contact-social-icons" src="../graphics/icon-linkedin.png" alt="Follow us on LinkedIn" title="Follow us on LinkedIn" border="0" width="48" height="42"></a>
	</div>
	<div class="col-md-8 col-small-6">
		<h1 class="main-header">Order Now</h1>
		<p><em>Fields with an asterisk (*) next to it are required in order to successfully submit the form</em></p>
	
		<form role="form" action="" method="post">
			<input type="hidden" name="FORM_ID" value="BUY_CHRG">
			<div class="col-md-6 col-small-6">
				<div class="form-group">
					<label for="FirstName">First Name</label>
					<div class="input-group">
						<input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="" required>
						<span class="input-group-addon" id="basic-addon1">*</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-small-6">
				<div class="form-group">
					<label for="LastName">Last Name</label>
					<div class="input-group">
						<input type="text" class="form-control" name="LastName" id="LastName" placeholder="" required>
						<span class="input-group-addon" id="basic-addon1">*</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-small-6">
				<div class="form-group">
					<label for="Phone">Phone</label>
					<div class="input-group">
						<input type="text" class="form-control" name="Phone" id="Phone" placeholder="Please format as (XXX) XXX-XXXX" required>
						<span class="input-group-addon" id="basic-addon1">*</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-small-6">
				<div class="form-group">
					<label for="Email">Email</label>
					<div class="input-group">
						<input type="email" class="form-control" id="Email" name="Email" placeholder="" required  >
						<span class="input-group-addon" id="basic-addon1">*</span>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-small-12">
				<div class="form-group">
					<label for="OptIn">Please Select your Desired Charger</label>
						<select class="form-control" name="OptIn" id="OptIn">
							<option>QuiQ</option>
							<option>IC650</option>
						</select>
				</div>
			</div>
			<div class="col-md-12 col-small-12">
				<div class="form-group">
					<label for="Message">Comments</label>
					<div class="input-group">
						<textarea name="Message" id="Message" class="form-control" placeholder="Please tell us what's on your mind..." rows="5"></textarea>
						<span class="input-group-addon" id="basic-addon1"></span>
					</div>
				</div>
			</div>

			<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
		</form>
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