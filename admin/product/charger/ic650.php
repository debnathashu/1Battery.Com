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
//connect ic650
mysqli_select_db($connection, $database_connection);
$query_IC650 = "SELECT * FROM ic650";
$IC650 = mysqli_query($connection, $query_IC650) or die(mysqli_error());
$row_IC650 = mysqli_fetch_assoc($IC650);
$totalRows_IC650 = mysqli_num_rows($IC650);
$CID = $row_IC650["CID"];
?>
<!-- End PHP -->
<html>
<head>
<?php include'include/tag.php'; ?>
<title>IC650 Battery Charger | 1Battery | LockersITSolution</title>
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
			<li class="active">IC650 Charger</li>
		</ol>
	</div><!--/.row-->
		
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">IC650 Battery Charger</h1>
		</div>
	</div><!--/.row-->
				
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Chargers<a href="../../product/charger/ic650.php" class="btn btn-default pull-right">Refresh</a></div>
				<div class="panel-body">
					<table data-toggle="table" data-url="tables/data2.json" >
					    <thead>
					    <tr>
					        <th data-field="id" data-align="left">Charger ID</th>
					        <th data-field="name">Charger Name</th>
					        <th data-field="price">Action</th>
					    </tr>
					    </thead>
						<tbody>
							<?php do { ?>
							<tr>
								<td data-align="left"><?php echo $row_IC650['CID']; ?></td>
								<td data-field="name"><?php echo $row_IC650['CID']; ?></td>
								<td data-field="price"><a href="../../product/charger/update-ic650.php?CID=<?php echo $row_IC650['CID']; ?>" class="btn btn-default btn-md pull-left">Update</a></td>
							</tr>
							<?php } while ($row_IC650 = mysqli_fetch_assoc($IC650)); ?>
						</tbody>
					</table><br>
					<a href="add-ic650.php" class="btn btn-primary pull-right">Add New</a>
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
