<?php require'../Connections/connect.php'; ?>
<?php
	session_start();
	if(isset($_SESSION["UI"])){
	}else{
		header('Location: ../login.php');
	}
?>
<?php
	if(isset($_GET['ID'])){
		$ID = $_GET['ID'];
		$distributor = $connection->query("select * from distributor where ID='$ID'");
		$row_distributor = $distributor->fetch_array(MYSQLI_BOTH);
	}
?>
<?php
	if(isset($_POST['Update'])){
		// Distributors Details
		$ID = $_POST['ID'];
		$State = $_POST['State'];
		$City = $_POST['City'];
		$Address = $_POST['Address'];
		$Phone = $_POST['Phone'];
		$Name = $_POST['Name'];
		$Web = $_POST['Web'];
		// Distributor Region
		$Region = $_POST['Region'];
		
		$us = $connection->query("UPDATE distributor set State='{$State}', City='{$City}', Address='{$Address}', Phone='{$Phone}', Name='{$Name}', Web='{$Web}', Region='{$Region}' where ID='$ID'");
		
		header('Location: ../distributors/north-america.php');
	}
	
?>
<!-- End PHP -->
<html>
<head>
<?php include'include/tag.php'; ?>
<title>United States Distributors | 1 Battery.Com | LockersITSolution</title>
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
			<li class="active">Distributors</li>
		</ol>
	</div><!--/.row-->
	<!-- Application -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">United States<a href="../distributors/north-america.php" class="btn btn-primary pull-right">Back</a></h1>
		</div>
	</div><!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Update Distributors Details</div>
				<div class="panel-body">
					<form role="form" method="post">
						<!-- Distributors Details -->
						<div class="col-md-12">
							<label>Distributors Details</label>
							<div class="form-group">
								<label>State*</label>
								<input name="State" id="State" required type="text" class="form-control" value="<?php echo $row_distributor["State"]; ?>" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>City*</label>
								<input name="City" id="City" required type="text" class="form-control" value="<?php echo $row_distributor["City"]; ?>" />
							</div>
							<div class="form-group">
								<label>Address*</label>
								<input name="Address" id="Address" required type="text" class="form-control" value="<?php echo $row_distributor['Address']; ?>" />
							</div>
							<div class="form-group">
								<label>Phone*</label>
								<input name="Phone" id="Phone" required type="text" class="form-control" value="<?php echo $row_distributor["Phone"]; ?>" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Name*</label>
								<input name="Name" id="Name" required type="text" class="form-control" value="<?php echo $row_distributor["Name"]; ?>" />
							</div>
							<div class="form-group">
								<label>Web Address*</label>
								<input name="Web" id="Web" required type="text" class="form-control" value="<?php echo $row_distributor["Web"]; ?>" />
							</div>
							<div class="form-group">
								<label>Distributor Image</label>
								<input type="file">
								 <p class="help-block">Upload Logo Image.</p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="Region">Application* <font color="red">Carefull for this box</font></label>
								<select class="form-control" name="Region" id="Region" required>
									<option value="US">United State</option>
									<option value="Canada">Canada</option>
									<option value="Asia">Asia</option>
								</select>
							</div>
							
							<div class="checkbox pull-right">
								<label>
									<input name="ID" id="ID" required type="checkbox" value="<?php echo $row_distributor["ID"]; ?>">Yes. I want update my distributor.
								</label>
							</div>
						</div>	<!-- /Distributors Details -->
						<button name="Update" id="Update" type="submit" class="btn btn-primary pull-right">Update</button>
						<button type="reset" class="btn btn-default pull-left">Reset</button>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
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
