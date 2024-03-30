<?php require'connect.php'; ?>
<?php
	$sitedetails = $connection->query("select * from sitedetails");
	$row_sitedetails = $sitedetails->fetch_array(MYSQLI_BOTH);
	$aboutus = $connection->query("select * from aboutus");
	$row_aboutus = $aboutus->fetch_array(MYSQLI_BOTH);
?>
<html>

	<?php include'link.php'; ?>
	<!-- MAX: 55 characters -->
	<title><?php echo $row_sitedetails['SiteName']; ?> - <?php echo $row_sitedetails['SiteTitle']; ?></title>
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
  		
	<script>
        jQuery(document).ready(function ($) {
			var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 3000, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 3000, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 3000, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 3000, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            
            var options = {
				$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
					$Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        });
    </script>

	<!-- ROW 2: Splash Image -->
	<?php include'slider.php'; ?>

	<!-- ROW 3: Search Bar -->
	<?php include'search.php'; ?>
</div> <!-- /container -->

<!-- ROW 4: Breadcrumbs -->
<div class="container container-breadcrumbs">
	<div class="col-md-12">
		<ol class="breadcrumb"></ol>
  </div>
</div>

<!-- ROW 5: Content -->
<div class="container container-content">
	<div class="col-md-9 col-small-7">
		<div role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="myTab">
				<li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">About Us</a></li>
				<li role="presentation"><a href="#blog" aria-controls="blog" role="tab" data-toggle="tab">Blog</a></li>
				<li role="presentation"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Events</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="overview">
					<h1 class="main-header">Welcome to <?php echo $row_sitedetails['SiteName']; ?></h1>
					<div class="main-block left" id="main-page-intro-text">
						<?php echo $row_aboutus['AboutUs']; ?>
					</div> <!-- /main-page-intro-text -->			
				</div> <!-- /overview -->
		
				<div role="tabpanel" class="tab-pane fade" id="blog">
					<h5 class="main-header">1 Battery Blog</h5>
					<!-- Front Blog -->
									
					<!-- /REPEAT AS NEEDED -->
					<div class="blog-entry">
						<span class="blog-header">
							<strong>Blog Is Not Ready Yet.</strong>
						</span>
						<span class="blog-text"><p>
							We are comming soon....
						</span> <!-- /blog-text -->
						<span class="more-link">
							[ <a href="#">more</a> ]
							</p>
						</span> <!-- /more-link -->
					</div> <!-- /blog-entry -->
					<!-- /REPEAT AS NEEDED -->
				</div> <!-- /blog -->
				<div role="tabpanel" class="tab-pane fade" id="events">
					<h5 class="main-header">Coming Events</h5>
					<!-- Front Event -->
					<!-- /REPEAT AS NEEDED -->
					<div class="event">
						<span class="date-text"><p>
							Comming Soon...
						</p></span> <!-- /date-text -->
					</div> <!-- /event -->
					<!-- /REPEAT AS NEEDED -->
				</div> <!-- /event -->		
			</div> <!-- /tab-content -->
		</div> <!-- /tabpanel-->
	</div> <!-- /col-md-9 -->
	
	<div class="col-md-3 col-small-5"> 
		<h5 class="main-header">Product Menu</h5>
		<?php include'sidebar.php'; ?>



   </div> <!-- /col-md-3 -->
</div> <!-- /container -->

<div class="clearfix visible-lg"></div>

</div>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-546e48591d789905" async></script>

<!-- ROW 5: Footer -->
<?php include'footer.php'; ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

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

<?php include'copyright.php'; ?>
</html>
