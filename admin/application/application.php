<?php require'../Connections/connect.php'; ?>
<?php
	session_start();
	if(isset($_SESSION["UI"])){
	}else{
		header('Location: ../login.php');
	}
?>
<?php
require('../Connections/connection.php');
//connect application
mysqli_select_db($connection, $database_connection);
$query_Application1 = "SELECT * FROM application where App_Cat='AWP'";
$Application1 = mysqli_query($connection, $query_Application1) or die(mysqli_error());
$row_Application1 = mysqli_fetch_assoc($Application1);
$totalRows_Application1 = mysqli_num_rows($Application1);
$BID = $row_Application1["BID"];

mysqli_select_db($connection, $database_connection);
$query_Application2 = "SELECT * FROM application where App_Cat='CT'";
$Application2 = mysqli_query($connection, $query_Application2) or die(mysqli_error());
$row_Application2 = mysqli_fetch_assoc($Application2);
$totalRows_Application2 = mysqli_num_rows($Application2);
$BID = $row_Application2["BID"];

mysqli_select_db($connection, $database_connection);
$query_Application3 = "SELECT * FROM application where App_Cat='FC'";
$Application3 = mysqli_query($connection, $query_Application3) or die(mysqli_error());
$row_Application3 = mysqli_fetch_assoc($Application3);
$totalRows_Application3 = mysqli_num_rows($Application3);
$BID = $row_Application3["BID"];

mysqli_select_db($connection, $database_connection);
$query_Application4 = "SELECT * FROM application where App_Cat='GEV'";
$Application4 = mysqli_query($connection, $query_Application4) or die(mysqli_error());
$row_Application4 = mysqli_fetch_assoc($Application4);
$totalRows_Application4 = mysqli_num_rows($Application4);
$BID = $row_Application4["BID"];

mysqli_select_db($connection, $database_connection);
$query_Application5 = "SELECT * FROM application where App_Cat='M'";
$Application5 = mysqli_query($connection, $query_Application5) or die(mysqli_error());
$row_Application5 = mysqli_fetch_assoc($Application5);
$totalRows_Application5 = mysqli_num_rows($Application5);
$BID = $row_Application5["BID"];

mysqli_select_db($connection, $database_connection);
$query_Application6 = "SELECT * FROM application where App_Cat='MH'";
$Application6 = mysqli_query($connection, $query_Application6) or die(mysqli_error());
$row_Application6 = mysqli_fetch_assoc($Application6);
$totalRows_Application6 = mysqli_num_rows($Application6);
$BID = $row_Application6["BID"];

mysqli_select_db($connection, $database_connection);
$query_Application7 = "SELECT * FROM application where App_Cat='OG'";
$Application7 = mysqli_query($connection, $query_Application7) or die(mysqli_error());
$row_Application7 = mysqli_fetch_assoc($Application7);
$totalRows_Application7 = mysqli_num_rows($Application7);
$BID = $row_Application7["BID"];

mysqli_select_db($connection, $database_connection);
$query_Application8 = "SELECT * FROM application where App_Cat='RV'";
$Application8 = mysqli_query($connection, $query_Application8) or die(mysqli_error());
$row_Application8 = mysqli_fetch_assoc($Application8);
$totalRows_Application8 = mysqli_num_rows($Application8);
$BID = $row_Application8["BID"];

mysqli_select_db($connection, $database_connection);
$query_Application9 = "SELECT * FROM application where App_Cat='SRE'";
$Application9 = mysqli_query($connection, $query_Application9) or die(mysqli_error());
$row_Application9 = mysqli_fetch_assoc($Application9);
$totalRows_Application9 = mysqli_num_rows($Application9);
$BID = $row_Application9["BID"];

mysqli_select_db($connection, $database_connection);
$query_Application10 = "SELECT * FROM application where App_Cat='UPS'";
$Application10 = mysqli_query($connection, $query_Application10) or die(mysqli_error());
$row_Application10 = mysqli_fetch_assoc($Application10);
$totalRows_Application10 = mysqli_num_rows($Application10);
$BID = $row_Application10["BID"];
?>
<!-- End PHP -->
<html>
<head>
<?php include'include/tag.php'; ?>
<title>Application | 1 Battery.Com | LockersITSolution</title>
<?php include'include/link.php'; ?>
</head>

<body>
<!-- Top Menu -->
<?php include'include/top-menu.php'; ?>

<!-- Side Menu -->
<?php include'include/side-menu.php'; ?>	

<!-- Main Body -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="../index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Application</li>
		</ol>
	</div><!--/.row-->
	<!-- Application -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Application</h1>
		</div>
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body tabs">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Aerial Work Platforms</a></li>
						<li><a href="#tab2" data-toggle="tab">Commercial Trucking</a></li>
						<li><a href="#tab3" data-toggle="tab">Floor Care</a></li>
						<li><a href="#tab4" data-toggle="tab">Golf / Electric Vehicles</a></li>
						<li><a href="#tab5" data-toggle="tab">Marine</a></li>
						<li><a href="#tab6" data-toggle="tab">Material Handling</a></li>
						<li><a href="#tab7" data-toggle="tab">Oil & Gas</a></li>
						<li><a href="#tab8" data-toggle="tab">Recreational Vehicles</a></li>
						<li><a href="#tab9" data-toggle="tab">Solar / Renewable Energy</a></li>
						<li><a href="#tab10" data-toggle="tab">UPS</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab1">
							<p><?php include'awp.php'; ?></p>
						</div>
						<div class="tab-pane fade" id="tab2">
							<p><?php include'ct.php'; ?></p>
						</div>
						<div class="tab-pane fade" id="tab3">
							<p><?php include'fc.php'; ?></p>
						</div>
						<div class="tab-pane fade" id="tab4">
							<p><?php include'gev.php'; ?></p>
						</div>
						<div class="tab-pane fade" id="tab5">
							<p><?php include'm.php'; ?></p>
						</div>
						<div class="tab-pane fade" id="tab6">
							<p><?php include'mh.php'; ?></p>
						</div>
						<div class="tab-pane fade" id="tab7">
							<p><?php include'og.php'; ?></p>
						</div>
						<div class="tab-pane fade" id="tab8">
							<p><?php include'rv.php'; ?></p>
						</div>
						<div class="tab-pane fade" id="tab9">
							<p><?php include'sre.php'; ?></p>
						</div>
						<div class="tab-pane fade" id="tab10">
							<p><?php include'ups.php'; ?></p>
						</div>
					</div>
				</div>
			</div><!--/.panel-->
		</div><!--/.col-->
	</div><!-- /.row -->
</div>	<!--/.main-->

	<?php include'include/link-footer.php'; ?>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
