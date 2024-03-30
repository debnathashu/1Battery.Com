<div class="table-responsive" id="search-results-product-display">
	<table class="table table-hover spec-table">
		<thead class="spec-thead">
			<tr>
				<th class="text-center header-3-pad-1"></th>
				<th class="text-center header-3-pad-1">Type</th>
				<th class="text-center header-3-pad-1">Description</th>
			</tr>
		</thead>
		<tbody>
			<?php do { ?>
				<tr>
					<td style="vertical-align: middle;">
						<a href="../../graphics/product/charger/ic650/acco/<?php echo $row_C_Accessories['Image']; ?>" rel="shadowbox"><img class="responsive spec-table-img" src="../../graphics/product/charger/ic650/acco/<?php echo $row_C_Accessories['Image']; ?>"></a>
					</td>
					<td style="vertical-align: middle;"><?php echo $row_C_Accessories['Type']; ?></td>
					<td class="text-left" style="vertical-align: middle;">
						<span id="accessories-description"><?php echo $row_C_Accessories['Description']; ?></span>
					</td>
				</tr>
			<?php } while ($row_C_Accessories = mysqli_fetch_assoc($C_Accessories)); ?>
		</tbody>
	</table>
</div>