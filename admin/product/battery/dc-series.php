<?php require'../../Connections/connect.php'; ?>
<?php
	session_start();
	if(isset($_SESSION["UI"])){
	}else{
		header('Location: ../../login.php');
	}
?>
<?php
require('../../Connections/connection.php');
//connect dc_series
mysqli_select_db($connection, $database_connection);
$query_DC_Series = "SELECT * FROM dc_series";
$DC_Series = mysqli_query($connection, $query_DC_Series) or die(mysqli_error());
$row_DC_Series = mysqli_fetch_assoc($DC_Series);
$totalRows_DC_Series = mysqli_num_rows($DC_Series);
$BID = $row_DC_Series["BID"];
?>
<!-- End PHP -->
<html>
<head>
<?php include'include/tag.php'; ?>
<title>DC Series | 1Battery | LockersITSolution</title>
<?php include'include/link.php'; ?>
</head>

<body>
<!-- Top Menu -->
<?php include'include/top-menu.php'; ?>

<!-- Side Menu -->
<?php include'include/side-menu.php'; ?>	
	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="../../index.php" title="Admin Home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">DC Series</li>
		</ol>
	</div><!--/.row-->
		
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">DC Series</h1>
		</div>
	</div><!--/.row-->
				
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Batteries<a href="../../product/battery/dc-series.php" class="btn btn-default pull-right">Refresh</a></div>
				<div class="panel-body">
					<table data-toggle="table" data-url="tables/data2.json" >
					    <thead>
					    <tr>
					        <th data-field="id" data-align="left">Item ID</th>
					        <th data-field="name">Item Name</th>
					        <th data-field="price">Action</th>
					    </tr>
					    </thead>
						<tbody>
							<?php do { ?>
							<tr>
								<td data-align="left"><?php echo $row_DC_Series['BID']; ?></td>
								<td data-field="name"><?php echo $row_DC_Series['BID']; ?></td>
								<td data-field="price">
									<a href="../../product/battery/update-dc-series.php?BID=<?php echo $row_DC_Series['BID']; ?>" class="btn btn-default btn-md pull-left">Update</a>
									&nbsp;&nbsp;&nbsp;
									<a href="../../product/battery/dc-image.php?BID=<?php echo $row_DC_Series['BID']; ?>" class="btn btn-default btn-md pull-center">Images</a>
									&nbsp;&nbsp;&nbsp;
									<a href="../../product/battery/dc-support.php?BID=<?php echo $row_DC_Series['BID']; ?>" class="btn btn-default btn-md pull-center">Support</a>
								</td>
							</tr>
							<?php } while ($row_DC_Series = mysqli_fetch_assoc($DC_Series)); ?>
						</tbody>
					</table><br>
					<a href="add-dc-series.php" class="btn btn-primary pull-right">Add New</a>
				</div>
			</div>
		</div>
	</div><!--/.row-->	
</div><!--/.main-->

<?php include'include/link-footer.php'; ?>

<script>
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
<!--
 * Designed By Locker LT Solution (http://it.brainlockerltd.com)
 * Powered By Brain Locker Ltd. (http://brainlockerltd.com)
 -->
</html>
