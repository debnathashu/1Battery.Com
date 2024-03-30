<?php require'../../Connections/connect.php'; ?>
<?php
	session_start();
	if(isset($_SESSION["UI"])){
	}else{
		header('Location: ../../login.php');
	}
?>
<?php
	if(isset($_GET['BID'])){
		$BID = $_GET['BID'];
		$dc_series = $connection->query("select * from dc_series where BID='$BID'");
		$row_dc_series = $dc_series->fetch_array(MYSQLI_BOTH);
		$b_support = $connection->query("select * from b_support where BID='$BID'");
		$row_b_support = $b_support->fetch_array(MYSQLI_BOTH);		
	}
?>
<?php
	if(isset($_POST['updates1'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['fi1']['tmp_name'];
		$FIRealName = $_FILES['fi1']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../support/download/charging-instructions/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_support set support1='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-support.php?BID=$BID");
				}						
			}
		}		
	}else if(isset($_POST['updates2'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['fi2']['tmp_name'];
		$FIRealName = $_FILES['fi2']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../support/download/installation-manuals/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_support set support2='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-support.php?BID=$BID");
				}						
			}
		}		
	}
?>

<!-- End PHP -->
<!DOCTYPE html>
<html>
<head>
<?php include'include/tag.php'; ?>
<title>Support DC Series Battery | 1Battery | LockersITSolution</title>
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
			<li><a href="../../product/battery/dc-series.php" title="DC Series"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></a></li>
			<li class="active">Update DC Series Battery Support Document</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Change Images<a href="../../product/battery/dc-series.php" class="btn btn-primary pull-right">Back to DC Series</a></h1>
		</div>
	</div><!--/.row-->
				
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Update <?php echo $row_dc_series["BID"]; ?> Battery Support Document</div>
				<div class="panel-body">
					<form role="form" method="post" >
						<!-- Feature Details -->
						<div class="col-md-12">
							<div class="panel panel-default">
								<!-- Graphs Tab -->
								<div class="col-md-6 form-group clearfix">
									<h5>Charging Instructions <a href="../../../support/download/charging-instructions/<?php echo $row_b_support['support1']; ?>" target="_blank">View</a></h5>
									<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ds1">Change</a>
									<!-- Support -->
									<div class="modal fade" id="ds1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title text-danger" id="myModalLabel5"><a href="http://it.brainlockerltd.com/" target="_blank" title="Lockers IT Solution">Lockers IT Solution</a> </h4>
												</div>
												<div class="modal-body">
													<input name="fi1" id="fi1" type="file">
													<p class="help-block">Must be PDF Format</p>
													<div class="checkbox">
														<label>
															<input name="BID" id="BID" required type="checkbox" value="<?php echo $row_b_support["BID"]; ?>" required>Yes. I want update <?php echo $row_b_support["BID"]; ?> battery Charging Instructions.
														</label>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
													<button type="submit" name="updates1" id="updates1" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 form-group clearfix">
									<h5>Installation Manual <a href="../../../support/download/installation-manuals/<?php echo $row_b_support['support2']; ?>" target="_blank">View</a></h5>
									<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ds2">Change</a>
									<!-- Support -->
									<div class="modal fade" id="ds2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title text-danger" id="myModalLabel5"><a href="http://it.brainlockerltd.com/" target="_blank" title="Lockers IT Solution">Lockers IT Solution</a> </h4>
												</div>
												<div class="modal-body">
													<input name="fi2" id="fi2" type="file">
													<p class="help-block">Must be PDF Format</p>
													<div class="checkbox">
														<label>
															<input name="BID" id="BID" required type="checkbox" value="<?php echo $row_b_support["BID"]; ?>" required>Yes. I want update <?php echo $row_b_support["BID"]; ?> battery Installation Manual.
														</label>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
													<button type="submit" name="updates2" id="updates2" class="btn btn-success">Save</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 form-group clearfix">
									<h5>Performance Characteristics <a href="../../../support/download/performance/<?php echo $row_b_support['support3']; ?>" target="_blank">View</a></h5>
									<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ds3">Change</a>
								</div>
								<div class="col-md-6 form-group clearfix">
									<h5>Spec-sheet <a href="../../../support/download/spec-sheets/<?php echo $row_b_support['support4']; ?>" target="_blank">View</a></h5>
									<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ds4">Change</a>
								</div>
								<?php //include'include/support-d.php'; ?>
							</div><!--/.panel-->
						</div>	<!-- /Feature Details -->
						<label class="pull-right">Developed by <a href="http://it.brainlockerltd.com/" title="LockersITSolution" target="_blank">LockersITSolution</a>.</label>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
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
