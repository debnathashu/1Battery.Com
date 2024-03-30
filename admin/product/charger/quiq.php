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
//connect quiq_all
mysqli_select_db($connection, $database_connection);
$query_Quiq_All = "SELECT * FROM quiq_all";
$Quiq_All = mysqli_query($connection, $query_Quiq_All) or die(mysqli_error());
$row_Quiq_All = mysqli_fetch_assoc($Quiq_All);
$totalRows_Quiq_All = mysqli_num_rows($Quiq_All);
$CID = $row_Quiq_All["CID"];
?>
<!-- End PHP -->
<html>
<head>
<?php include'include/tag.php'; ?>
<title>QuiQ Battery Charger | 1Battery | LockersITSolution</title>
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
			<li class="active">QuiQ Charger</li>
		</ol>
	</div><!--/.row-->
		
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">QuiQ Battery Charger</h1>
		</div>
	</div><!--/.row-->
				
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Chargers<a href="../../product/charger/quiq.php" class="btn btn-default pull-right">Refresh</a></div>
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
								<td data-align="left"><?php echo $row_Quiq_All['CID']; ?></td>
								<td data-field="name"><?php echo $row_Quiq_All['CID']; ?></td>
								<td data-field="price"><a href="../../product/charger/update-quiq.php?CID=<?php echo $row_Quiq_All['CID']; ?>" class="btn btn-default btn-md pull-left">Update</a></td>
							</tr>
							<?php } while ($row_Quiq_All = mysqli_fetch_assoc($Quiq_All)); ?>
						</tbody>
					</table><br>
					<a href="add-quiq.php" class="btn btn-primary pull-right">Add New</a>
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
