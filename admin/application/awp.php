<h4>Aerial Work Platforms<a href="application.php#tab1" class="btn btn-default pull-right">Refresh</a></h4>
<div class="panel-body">
	<ul class="todo-list">
		<?php do { ?>
		<li class="todo-list-item">
			<label><svg class="glyph stroked arrow right"><use xlink:href="#stroked-arrow-right"/></svg> <?php echo $row_Application1['BID']; ?></label>
			<div class="pull-right action-buttons">
				<a href="<?php include'url/url1.php'; ?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
			</div>
		</li>
		<?php } while ($row_Application1 = mysqli_fetch_assoc($Application1)); ?>
	</ul>
</div>