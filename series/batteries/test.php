<?php require_once('../../Connections/connection.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysqli_select_db($connection, $database_connection);
$query_Battery = "SELECT * FROM pbdetails";
$Battery = mysqli_query($connection, $query_Battery) or die(mysql_error());
$row_Battery = mysqli_fetch_assoc($Battery);
$totalRows_Battery = mysqli_num_rows($Battery);
?>
<html>

<?php include'link.php'; ?>
<!-- MAX: 55 characters -->
<title>DC Series Batteries</title>
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
			<img class="img-responsive splash" src="../../graphics/series/dc-series.png" alt="Fullriver Battery Deep-Cycle AGM Batteries" title="Fullriver Battery Deep-Cycle AGM Batteries" border="0" width="1080" height="475">
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
		<li class="active">DC Series Batteries</li>
	</ol>
  </div>
</div>

<!-- ROW 5: Content -->
<div class="container container-content">
  <div class="col-md-9 col-small-7">
	<h1 class="main-header">DC Series</h1>
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
			<p>When it comes to Deep Cycle batteries, the details matter.  Construction, plate chemistry, and craftsmanship all have to be in sync to get the longest life in the most demanding applications. 
 Because of the environments where Fullriver DC AGM batteries are used, we work closely with our customers to ensure our construction standards are geared to meet your needs.  We use more 
 lead in creating stronger connections between cells, heavier plates to increase our reserve capacity, and have formulated our batteries to maximize life cycles.</p> <p>By taking
 these steps, the engineers and factory for Fullriver DC Series batteries have matched the highest standard for Deep Cycle VRLA batteries on the market.  This has allowed us to craft 
 out batteries to ensure they maintain their performance levels in the highest vibration and deepest discharge applications. </p> <p>Whether you need deep cycling power for your Boat or RV; for 
 your Solar and Wind power generator system; a consistent ride from your Electric Vehicles or Golf Cars; or a long lasting battery pack in your Floor Cleaning machine, Aerial Work Platforms 
 or Pallet Truck, we have a battery that has been tested and proven the best in your Deep Cycle application.</p> <p>And because it comes in a fully sealed, maintenance-free, corrosion-free
 package, Fullriver DC Series AGM batteries are an investment in making sure your battery pack enhances the quality of your machines. Fullriver DC Series AGM - The Battery that Makes Your 
 Machine Better</p>
		</div>
		
	<div role="tabpanel" class="tab-pane fade" id="view-models">
		<div class="table-responsive" id="search-results-series-display">
	<table class="table table-hover spec-table">
		  <thead class="spec-thead">
		  <tr>
		  <th class="text-center header-3-pad-1"></th>
		  <th class="text-center header-3-pad-1">Model</th>
		  <th class="text-center header-3-pad-1">Industry Ref.</th>
		  <th class="text-center header-3-pad-1">Voltage</th>
		  <th class="text-center header-3-pad-1">Capacity<br/>(minutes)</th>
		  <th class="text-center header-3-pad-1">Capacity<br/>(AH)</th>
		  <th class="text-center header-3-pad-1">Cranking<br/>(Amps)</th>
		  </tr>
		  </thead>
	<!---->
    <tbody>
      <?php do { ?>
        <tr>
          <td style="vertical-align: middle;"><a href="../../product/batteries/DC1150-2.html"> <img class="responsive spec-table-img" src="../../../resources.fullriverbattery.com/_imagecache/product-tn-xy65/fullriver-battery/images/DC1150-2.png"> </a></td>
          <td style="vertical-align: middle;"><a href="../../product/batteries/DC1150-2.html"><?php echo $row_Battery['BID']; ?></a></td>
          <td style="vertical-align: middle;"></td>
          <td style="vertical-align: middle;">2V</td>
          <td style="vertical-align: middle;"><ul id="reserve-capacity">
            <li>2235 @ 25 Amps</li>
            <li>658 @ 75 Amps</li>
          </ul></td>
          <td style="vertical-align: middle;"><ul id="rate-capacity">
            <li>945 @ 5 HR</li>
            <li>1150 @ 20 HR</li>
          </ul></td>
          <td style="vertical-align: middle;">4500 </td>
        </tr>
        <?php } while ($row_Battery = mysqli_fetch_assoc($Battery)); ?>
    </tbody>
  </table>
</div>
							
							
						
				
						
				
			
				
		</div>

		<div role="tabpanel" class="tab-pane fade" id="accessories">
		
		</div>		
		
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
	<td><img src="../../../resources.fullriverbattery.com/graphics/pdf.gif" alt="Brochure Icon"></td>
	<td class="text-left"><a href="http://resources.fullriverbattery.com/fullriver-battery/brochure/dc-series.pdf" target="_blank">Brochure</a></td>
	<td>8.3 MB</td>
	</tr>
	
	
	
	<tr>
	<td><img src="../../../resources.fullriverbattery.com/graphics/pdf.gif" alt="Charging Instructions Icon"></td>
	<td class="text-left"><a href="http://resources.fullriverbattery.com/fullriver-battery/charging-instructions/batteries.pdf" target="_blank">Charging Instructions</a></td>
	<td>1.1 MB</td>
	</tr>
	
	
	
	<tr>
	<td><img src="../../../resources.fullriverbattery.com/graphics/pdf.gif" alt="Installation Manual Icon"></td>
	<td class="text-left"><a href="http://resources.fullriverbattery.com/fullriver-battery/installation-manuals/batteries.pdf" target="_blank">Installation Manual</a></td>
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

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <span class="glyphicon glyphicon-collapse-down"></span> &nbsp; <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Batteries by Series 
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="menu-body">
      <ul class="accordian-menu-products">
	    <li><a href="dc-series.html#view-models"> DC Series</a></li>
        <li><a href="full-force.html#view-models"> Full Force</a></li>
		<li><a href="hc-series.html#view-models"> HC Series</a></li>
        <!-- <li><a href="http://www.fullriverbattery.com/series/batteries/full-throttle#view-models"> Full Throttle</a></li> -->
      </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <span class="glyphicon glyphicon-collapse-down"></span> &nbsp; <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Batteries by Voltage
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="menu-body">
      <ul class="accordian-menu-products">
        <li><a href="../../product/batteries/DC1150-2.html?cat=batteries&amp;voltage=2"> 2 Volt</a></li>
        <li><a href="../../search4f04.html?cat=batteries&amp;voltage=6"> 6 Volt</a></li>
        <li><a href="../../searcheb5d.html?cat=batteries&amp;voltage=8">  8 Volt</a></li>
        <li><a href="../../search8ee1.html?cat=batteries&amp;voltage=12">  12 Volt</a></li>
      </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <span class="glyphicon glyphicon-collapse-down"></span> &nbsp; <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Batteries by Application
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="menu-body">
      <ul class="accordian-menu-products">
        <li><a href="../../application/aerial-work-platforms-batteries.html#view-models"> Aerial Work Platforms</a></li>
		<li><a href="../../application/commercial-trucking-batteries.html#view-models"> Commercial Trucking</a></li>
        <li><a href="../../application/floor-care-batteries.html#view-models"> Floor Cleaning Equipment</a></li>
        <li><a href="../../application/golf-batteries.html#view-models"> Golf / Electric Vehicle</a></li>
        <li><a href="../../application/marine-batteries.html#view-models"> Marine</a></li>
		<li><a href="../../application/material-handling-batteries.html#view-models"> Material Handling</a></li>
		<li><a href="../../application/oil-gas-batteries.html#view-models"> Oil &amp; Gas</a></li>
        <li><a href="../../application/rv-batteries.html#view-models"> Recreational Vehicles</a></li>
		<li><a href="../../application/solar-batteries.html#view-models"> Solar / Renewable Energy</a></li>
		<li><a href="../../application/ups-batteries.html#view-models"> UPS</a></li>
      </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <span class="glyphicon glyphicon-collapse-down"></span> &nbsp; <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Chargers by Series
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="menu-body">
      <ul class="accordian-menu-products">
        <li><a href="../chargers/delta-q-ic650-battery-chargers.html#view-models"> Delta-Q IC650</a></li>
        <li><a href="../chargers/delta-q-quiq-battery-chargers.html#view-models"> Delta-Q QuiQ</a></li>
      </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <span class="glyphicon glyphicon-collapse-down"></span> &nbsp; <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Chargers by Voltage
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="menu-body">
      <ul class="accordian-menu-products">
        <li><a href="../../search2e64.html?cat=chargers&amp;voltage=24"> 24 Volt</a></li>
        <li><a href="../../search1bcb.html?cat=chargers&amp;voltage=36"> 36 Volt</a></li>
        <li><a href="../../search1a5d.html?cat=chargers&amp;voltage=48"> 48 Volt</a></li>
        <li><a href="../../search0424.html?cat=chargers&amp;voltage=72"> 72 Volt</a></li>
        <li><a href="../../search5876.html?cat=chargers&amp;voltage=84"> 84 Volt</a></li>
        <li><a href="../../search2e35.html?cat=chargers&amp;voltage=96"> 96 Volt</a></li>
      </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        <span class="glyphicon glyphicon-collapse-down"></span> &nbsp; <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Chargers by Application
        </a>
      </h4>
    </div>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="menu-body">
      <ul class="accordian-menu-products">
        <li><a href="../../searchb3df.html?cat=chargers&amp;aerial-work-platforms=1"> Aerial Work Platforms</a></li>
        <li><a href="../../searchac32.html?cat=chargers&amp;floor-care=1"> Floor Cleaning Equipment</a></li>
        <li><a href="../../searchaad1.html?cat=chargers&amp;golf=1"> Golf / Electric Vehicle</a></li>
		<li><a href="../../searchbdfc.html?cat=chargers&amp;industrial-machines=1"> Industrial Machines</a></li>
		<li><a href="../../search730a.html?cat=chargers&amp;material-handling=1"> Material Handling</a></li>
      </ul>
      </div>
    </div>
  </div>  

</div>
</div>
</div>
	<div class="clearfix visible-lg"></div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-546e48591d789905" async></script>
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
<?php
mysqli_free_result($Battery);
?>
