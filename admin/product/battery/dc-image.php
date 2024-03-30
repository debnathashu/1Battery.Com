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
		$pbdetails = $connection->query("select * from pbdetails where BID='$BID'");
		$row_pbdetails = $pbdetails->fetch_array(MYSQLI_BOTH);
		$b_gallery = $connection->query("select * from b_gallery where BID='$BID'");
		$row_b_gallery = $b_gallery->fetch_array(MYSQLI_BOTH);
		$b_graph = $connection->query("select * from b_graph where BID='$BID'");
		$row_b_graph = $b_graph->fetch_array(MYSQLI_BOTH);
	}
?>
<?php
	if(isset($_POST['UpdateB'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		
		$FIFileName = $_FILES['BI']['tmp_name'];
		$FIRealName = $_FILES['BI']['name'];
		if($FIRealName)
		{
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/$FIRealName")) { 
					$BImage = $connection->query("UPDATE dc_series set Image='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		else{
			$massageb= "<h5 style=\"color:red;font-style: italic;\">Select an image</h5>";
		}
	}else if(isset($_POST['UpdateF'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		
		$FIFileName = $_FILES['FI']['tmp_name'];
		$FIRealName = $_FILES['FI']['name'];
		if($FIRealName)
		{
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/feature/$FIRealName")) { 
					$BImage = $connection->query("UPDATE pbdetails set FeatureImage='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		else{
			$massagef= "<h5 style=\"color:red;font-style: italic;\">Select an image</h5>";
		}
	}else if(isset($_POST['updateg1'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['GI1']['tmp_name'];
		$FIRealName = $_FILES['GI1']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/gallery/dc/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_gallery set image1='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		
		
	}else if(isset($_POST['updateg2'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['GI2']['tmp_name'];
		$FIRealName = $_FILES['GI2']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/gallery/dc/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_gallery set image2='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		
		
	}else if(isset($_POST['updateg3'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['GI3']['tmp_name'];
		$FIRealName = $_FILES['GI3']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/gallery/dc/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_gallery set image3='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		
		
	}else if(isset($_POST['updateg4'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['GI4']['tmp_name'];
		$FIRealName = $_FILES['GI4']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/gallery/dc/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_gallery set image4='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		
		
	}else if(isset($_POST['updateg5'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['GI5']['tmp_name'];
		$FIRealName = $_FILES['GI5']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/gallery/dc/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_gallery set image5='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		
		
	}else if(isset($_POST['updategr1'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['GRI1']['tmp_name'];
		$FIRealName = $_FILES['GRI1']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/graphs/dc/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_graph set Graph1='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		
		
	}else if(isset($_POST['updategr2'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['GRI2']['tmp_name'];
		$FIRealName = $_FILES['GRI2']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/graphs/dc/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_graph set Graph2='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		
		
	}else if(isset($_POST['updategr3'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['GRI3']['tmp_name'];
		$FIRealName = $_FILES['GRI3']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/graphs/dc/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_graph set Graph3='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		
		
	}else if(isset($_POST['updategr4'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['GRI4']['tmp_name'];
		$FIRealName = $_FILES['GRI4']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/graphs/dc/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_graph set Graph4='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		
		
	}else if(isset($_POST['updategr5'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['GRI5']['tmp_name'];
		$FIRealName = $_FILES['GRI5']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/graphs/dc/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_graph set Graph5='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
				}						
			}
		}
		
		
	}else if(isset($_POST['updategr6'])){		
		// Feature Details
		$BID = $_POST['BID'];
		// Default
		$Group = 'DC';
		$FIFileName = $_FILES['GRI6']['tmp_name'];
		$FIRealName = $_FILES['GRI6']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "../../../graphics/product/graphs/dc/$FIRealName")) { 
					$sql = $connection->query("UPDATE b_graph set Graph6='{$FIRealName}' where BID='$BID'");// value insert into database
					header("Location: ../../product/battery/dc-image.php?BID=$BID");
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
<title>Images DC Series Battery | 1Battery | LockersITSolution</title>
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
			<li class="active">Update DC Series Battery Images</li>
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
				<div class="panel-heading">Update <?php echo $row_dc_series["BID"]; ?> Battery Details</div>
				<div class="panel-body">
					<form role="form" method="post" enctype='multipart/form-data'>
						<!-- Feature Details -->
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-body tabs">
									<ul class="nav nav-pills">
										<li class="active"><a href="#pilltab1" data-toggle="tab">Battery Image</a></li>
										<li><a href="#pilltab2" data-toggle="tab">Feature Image</a></li>
										<li><a href="#pilltab3" data-toggle="tab">Gallery</a></li>
										<li><a href="#pilltab4" data-toggle="tab">Graphs</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade in active" id="pilltab1">
											<h4></h4>
											<p>
												<div class="form-group clearfix">
													<img src="../../../graphics\product\<?php echo $row_dc_series['Image']; ?>" alt="Item Avatar" height="80px"  />	
													<input name="BI" id="BI" type="file">
													
													<p class="help-block">Change Battery Image.</p>
													<p class="help-block">Must be 475x475</p>
												</div>
												<div class="col-md-12">
													<div class="checkbox pull-right">
														<label>
															<input name="BID" id="BID" required type="checkbox" value="<?php echo $row_dc_series["BID"]; ?>" checked>Yes. I want update <?php echo $row_dc_series["BID"]; ?> battery image.
														</label>
													</div>
												</div>
												<button name="UpdateB" id="UpdateB" type="submit" class="btn btn-primary pull-right">Update</button>
												<button type="reset" class="btn btn-default pull-left">Reset</button>
											</p>
										</div>
										<div class="tab-pane fade" id="pilltab2">
											<h4></h4>
											<p>
												<div class="form-group clearfix">
													<img src="../../../graphics\product\feature\<?php echo $row_pbdetails['FeatureImage']; ?>" alt="Item Avatar" height="80px"  />	
													<input name="FI" id="FI" type="file">
													<p class="help-block">Change Battery Feature Image.</p>
													<p class="help-block">Must be 475x475</p>
												</div>
												<div class="col-md-12">
													<div class="checkbox pull-right">
														<label>
															<input name="BID" id="BID" required type="checkbox" value="<?php echo $row_dc_series["BID"]; ?>" checked>Yes. I want update <?php echo $row_dc_series["BID"]; ?> battery feature image.
														</label>
													</div>
												</div>
												<button name="UpdateF" id="UpdateF" type="submit" class="btn btn-primary pull-right">Update</button>
												<button type="reset" class="btn btn-default pull-left">Reset</button>
											</p>
										</div>
										<div class="tab-pane fade" id="pilltab3">
											<h4></h4>
											<p>
												<div class="col-md-4 form-group clearfix">
													<img src="../../../graphics\product\gallery\dc\<?php echo $row_b_gallery['image1']; ?>" alt="Item Avatar" height="80px"  />	<br>
													<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#g1">Change Image</a>
													<!-- Modal -->
													<div class="modal fade" id="g1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																	<h4 class="modal-title text-danger" id="myModalLabel5"><a href="http://it.brainlockerltd.com/" target="_blank" title="Lockers IT Solution">Lockers IT Solution</a> </h4>
																</div>
																<div class="modal-body">
																	<input name="GI1" id="GI1" type="file">
																	<p class="help-block">Must be 850x850</p>
																	<div class="checkbox">
																		<label>
																			<input name="BID" id="BID" required type="checkbox" value="<?php echo $row_dc_series["BID"]; ?>" checked>Yes. I want update <?php echo $row_dc_series["BID"]; ?> battery image 1.
																		</label>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
																	<button type="submit" name="updateg1" id="updateg1" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 form-group clearfix">
													<img src="../../../graphics\product\gallery\dc\<?php echo $row_b_gallery['image2']; ?>" alt="Item Avatar" height="80px"  />	<br>
													<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#g2">Change Image</a>
													<!-- Modal -->
													<div class="modal fade" id="g2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																	<h4 class="modal-title text-danger" id="myModalLabel5"><a href="http://it.brainlockerltd.com/" target="_blank" title="Lockers IT Solution">Lockers IT Solution</a> </h4>
																</div>
																<div class="modal-body">
																	<input name="GI2" id="GI2" type="file">
																	<p class="help-block">Must be 850x850</p>
																	<div class="checkbox">
																		<label>
																			<input name="BID" id="BID" required type="checkbox" value="<?php echo $row_dc_series["BID"]; ?>" checked>Yes. I want update <?php echo $row_dc_series["BID"]; ?> battery image 2.
																		</label>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
																	<button type="submit" name="updateg2" id="updateg2" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 form-group clearfix">
													<img src="../../../graphics\product\gallery\dc\<?php echo $row_b_gallery['image3']; ?>" alt="Item Avatar" height="80px"  />	<br>
													<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#g3">Change Image</a>
													<!-- Modal -->
													<div class="modal fade" id="g3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																	<h4 class="modal-title text-danger" id="myModalLabel5"><a href="http://it.brainlockerltd.com/" target="_blank" title="Lockers IT Solution">Lockers IT Solution</a> </h4>
																</div>
																<div class="modal-body">
																	<input name="GI3" id="GI3" type="file">
																	<p class="help-block">Must be 850x850</p>
																	<div class="checkbox">
																		<label>
																			<input name="BID" id="BID" required type="checkbox" value="<?php echo $row_dc_series["BID"]; ?>" checked>Yes. I want update <?php echo $row_dc_series["BID"]; ?> battery image 3.
																		</label>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
																	<button type="submit" name="updateg3" id="updateg3" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 form-group clearfix">
													<img src="../../../graphics\product\gallery\dc\<?php echo $row_b_gallery['image4']; ?>" alt="Item Avatar" height="80px"  />	<br>
													<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#g4">Change Image</a>
													<!-- Modal -->
													<div class="modal fade" id="g4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																	<h4 class="modal-title text-danger" id="myModalLabel5"><a href="http://it.brainlockerltd.com/" target="_blank" title="Lockers IT Solution">Lockers IT Solution</a> </h4>
																</div>
																<div class="modal-body">
																	<input name="GI4" id="GI4" type="file">
																	<p class="help-block">Must be 850x850</p>
																	<div class="checkbox">
																		<label>
																			<input name="BID" id="BID" required type="checkbox" value="<?php echo $row_dc_series["BID"]; ?>" checked>Yes. I want update <?php echo $row_dc_series["BID"]; ?> battery image 4.
																		</label>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
																	<button type="submit" name="updateg4" id="updateg4" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 form-group clearfix">
													<img src="../../../graphics\product\gallery\dc\<?php echo $row_b_gallery['image5']; ?>" alt="Item Avatar" height="80px"  />	<br>
													<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#g5">Change Image</a>
													<!-- Modal -->
													<div class="modal fade" id="g5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																	<h4 class="modal-title text-danger" id="myModalLabel5"><a href="http://it.brainlockerltd.com/" target="_blank" title="Lockers IT Solution">Lockers IT Solution</a> </h4>
																</div>
																<div class="modal-body">
																	<input name="GI5" id="GI5" type="file">
																	<p class="help-block">Must be 850x850</p>
																	<div class="checkbox">
																		<label>
																			<input name="BID" id="BID" required type="checkbox" value="<?php echo $row_dc_series["BID"]; ?>" checked>Yes. I want update <?php echo $row_dc_series["BID"]; ?> battery image 5.
																		</label>
																	</div>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
																	<button type="submit" name="updateg5" id="updateg5" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</p>
										</div>
										<!-- Graphs Tab -->
										<div class="tab-pane fade" id="pilltab4">
											<p>
												<div class="col-md-4 form-group clearfix">
													<img src="../../../graphics\product\graphs\dc\<?php echo $row_b_graph['Graph1']; ?>" alt="Item Avatar" height="80px"  />	<br>
													<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#gr1">Change Image</a>
												</div>
												<div class="col-md-4 form-group clearfix">
													<img src="../../../graphics\product\graphs\dc\<?php echo $row_b_graph['Graph2']; ?>" alt="Item Avatar" height="80px"  />	<br>
													<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#gr2">Change Image</a>
												</div>
												<div class="col-md-4 form-group clearfix">
													<img src="../../../graphics\product\graphs\dc\<?php echo $row_b_graph['Graph3']; ?>" alt="Item Avatar" height="80px"  />	<br>
													<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#gr3">Change Image</a>
												</div>
												<div class="col-md-4 form-group clearfix">
													<img src="../../../graphics\product\graphs\dc\<?php echo $row_b_graph['Graph4']; ?>" alt="Item Avatar" height="80px"  />	<br>
													<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#gr4">Change Image</a>
												</div>
												<div class="col-md-4 form-group clearfix">
													<img src="../../../graphics\product\graphs\dc\<?php echo $row_b_graph['Graph5']; ?>" alt="Item Avatar" height="80px"  />	<br>
													<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#gr5">Change Image</a>
												</div>
												<div class="col-md-4 form-group clearfix">
													<img src="../../../graphics\product\graphs\dc\<?php echo $row_b_graph['Graph6']; ?>" alt="Item Avatar" height="80px"  />	<br>
													<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#gr6">Change Image</a>
												</div>
												<?php include'include/data.php'; ?>
											</p>
										</div>
									</div>
								</div>
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
