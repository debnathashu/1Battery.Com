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
//connect distributor
mysqli_select_db($connection, $database_connection);
$query_Distributor = "SELECT * FROM distributor where Region='US'";
$Distributor = mysqli_query($connection, $query_Distributor) or die(mysqli_error());
$row_Distributor = mysqli_fetch_assoc($Distributor);
$totalRows_Distributor = mysqli_num_rows($Distributor);
$ID = $row_Distributor["ID"];
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
			<h1 class="page-header">United States</h1>
		</div>
		<div class="col-md-12">
			<div class="panel panel-blue">
				<div class="panel-heading dark-overlay"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Distributors</div>
					<div class="panel-body">
						<ul class="todo-list">
							<li class="todo-list-item">
								<div class="checkbox">
									<label><b>City</b></label>
								</div>
								<div class="pull-right action-buttons">
									<label>Action</label>
								</div>
							</li>
							<?php do { ?>
							<li class="todo-list-item">
								<div class="checkbox">
									<label><a href="http://<?php echo $row_Distributor['Web']; ?>" target="_blank"><?php echo $row_Distributor['City']; ?></a></label>
								</div>
								<div class="pull-right action-buttons">
									<a href="update-north-america.php?ID=<?php echo $row_Distributor['ID']; ?>" title="Edit"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
									<!--<a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>-->
								</div>
							</li>
							<?php } while ($row_Distributor = mysqli_fetch_assoc($Distributor)); ?>	
						</ul>
					</div>
					<div class="panel-footer">
						<div class="input-group">
							<label class="form-control input-md">Add new Distributor</label>
							<span class="input-group-btn">
								<a class="btn btn-primary btn-md" href="add-distributors.php">Add New</a>
							</span>
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
