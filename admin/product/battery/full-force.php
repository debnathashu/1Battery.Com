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
//connect full_force
mysqli_select_db($connection, $database_connection);
$query_Full_Force = "SELECT * FROM full_force";
$Full_Force = mysqli_query($connection, $query_Full_Force) or die(mysqli_error());
$row_Full_Force = mysqli_fetch_assoc($Full_Force);
$totalRows_Full_Force = mysqli_num_rows($Full_Force);
$BID = $row_Full_Force["BID"];
?>
<?php
	$aboutus = $connection->query("select * from aboutus");
	$row_aboutus = $aboutus->fetch_array(MYSQLI_BOTH);
?>
<!-- End PHP -->
<html>
<head>
<?php include'include/tag.php'; ?>
<title>Full Force | 1Battery | LockersITSolution</title>
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
			<li class="active">Full Force</li>
		</ol>
	</div><!--/.row-->
		
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Full Force</h1>
		</div>
	</div><!--/.row-->
				
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Batteries<a href="../../product/battery/full-force.php" class="btn btn-default pull-right">Refresh</a></div>
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
								<td data-align="left"><?php echo $row_Full_Force['BID']; ?></td>
								<td data-field="name"><?php echo $row_Full_Force['BID']; ?></td>
								<td data-field="price"><a href="../../product/battery/update-full-force.php?BID=<?php echo $row_Full_Force['BID']; ?>" class="btn btn-default btn-md pull-left">Update</a></td>
							</tr>
							<?php } while ($row_Full_Force = mysqli_fetch_assoc($Full_Force)); ?>
						</tbody>
					</table><br>
					<a href="add-full-force.php" class="btn btn-default btn-md pull-right">Add New</a>
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
