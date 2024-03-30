<?php require'Connections/connect.php'; ?>
<?php
	session_start();
	if(isset($_SESSION["UI"])){
	}else{
		header('Location: login.php');
	}
?>
<?php
	$aboutus = $connection->query("select * from aboutus");
	$row_aboutus = $aboutus->fetch_array(MYSQLI_BOTH);
?>
<!-- End PHP -->
<html>
<head>
<?php include'default/include/tag.php'; ?>
<title>Dashboard | 1 Battery.Com | LockersITSolution</title>
<?php include'default/include/link.php'; ?>
</head>

<body>
<!-- Top Menu -->
<?php include'default/include/top-menu.php'; ?>

<!-- Side Menu -->
<?php include'default/include/side-menu.php'; ?>	

<!-- Main Body -->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Welcome to Lockers Panel.</li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Site Overview</div>
				<div class="panel-body">
					<?php echo $row_aboutus['AboutUs']; ?>
					<a href="update-about.php" class="btn btn-primary pull-right">Edit</a>
				</div>
			</div>
		</div>
	</div><!--/.row-->
	
	<!-- Review Box -->
	<!-- Traffic Overview -->
	<!-- Review Circle -->						
	<div class="row">
		<!--Chat Box -->
		<!-- List -->	
	</div><!--/.row-->
</div>	<!--/.main-->

	<?php include'default/include/link-footer.php'; ?>
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
