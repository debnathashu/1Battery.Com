<!-- 
** Designed By LockersITSolution 
** Web: http://it.brainlockerltd.com/
** Powered By Brain Locker Ltd.
** Web: http://brainlockerltd.com/
--> 
<!-- AC Input -->
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-condensed spec-table">
			<thead class="spec-thead">
				<tr><th colspan="2">AC Input</th></tr>
			</thead>
			<tbody>
				<tr>
					<th class="charger-header">AC input connector</th>
					<td class="text-left"><?php echo $row_quiq_all['ACIC']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">AC Input Voltage Range</th>
					<td colspan="2" class="text-left"><?php echo $row_quiq_all['ACIVR']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Nominal AC Input Voltage</th>
					<td colspan="2" class="text-left"><?php echo $row_quiq_all['ACNIV']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">AC Input Frequency</th>
					<td class="text-left"><?php echo $row_quiq_all['ACIF']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">AC Input Current (Nominal)</th>
					<td class="text-left"><?php echo $row_quiq_all['ACICn']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">AC Input Current (Max)</th>
					<td class="text-left"><?php echo $row_quiq_all['ACICm']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- DC Output -->
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-condensed spec-table">
			<thead class="spec-thead">
				<tr><th colspan="7">DC Output</th></tr>
			</thead>
			<tbody>
				<tr>
					<th class="charger-header">Nominal DC Output Voltage</th>
					<td class="text-left"><?php echo $row_quiq_all['DCNOV']; ?></td>
				</tr>
				<tr>		  
					<th class="charger-header">Maximum DC Output Voltage</th>
					<td class="text-left"><?php echo $row_quiq_all['DCMOV']; ?></td>
				</tr>	  
				<tr>		  
					<th class="charger-header">Maximum DC Output Current</th>
					<td class="text-left"><?php echo $row_quiq_all['DCMOC']; ?></td>
				</tr>
				<tr>		  
					<th class="charger-header">Maximum DC Output Power</th>
					<td class="text-left"><?php echo $row_quiq_all['DCMOP']; ?></td>
				</tr>
				<tr>		  
					<th class="charger-header">Deep Discharge Recovery<br/>(minimum voltage)</th>
					<td class="text-left"><?php echo $row_quiq_all['DCDDR']; ?></td>
				</tr>
				<tr>		  
					<th class="charger-header">Maximum Interlock Current</th>
					<td class="text-left"><?php echo $row_quiq_all['DCMIC']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Battery Type</th>
					<td class="text-left"><?php echo $row_quiq_all['DCBT']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Reverse Polarity</th>
					<td class="text-left"><?php echo $row_quiq_all['DCRP']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Short Circuit</th>
					<td class="text-left"><?php echo $row_quiq_all['DCSC']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">DC Output Connector</th>
					<td class="text-left"><?php echo $row_quiq_all['DCOC']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div> 
<!-- Mechanical -->
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-condensed spec-table">
			<thead class="spec-thead">
				<tr><th colspan="2">Mechanical</th></tr>
			</thead>
			<tbody>
				<tr>
					<th class="charger-header">Dimensions</th>
					<td class="text-left"><?php echo $row_quiq_all['MEDi']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Weight</th>
					<td class="text-left"><?php echo $row_quiq_all['MEWe']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- Environmental -->
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-condensed spec-table">
			<thead class="spec-thead">
				<tr><th colspan="2">Environmental</th></tr>
			</thead>
			<tbody>
				<tr>
					<th class="charger-header">Enclosure</th>
					<td class="text-left"><?php echo $row_quiq_all['ENEn']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Operating Temperature</th>
					<td class="text-left"><?php echo $row_quiq_all['ENOT']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Storage Temperature</th>
					<td class="text-left"><?php echo $row_quiq_all['ENST']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- Regulatory -->
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-condensed spec-table">
			<thead class="spec-thead">
				<tr><th colspan="2">Regulatory</th></tr>
			</thead>
			<tbody>
				<tr>
					<th class="charger-header">Safety</th>
					<td class="text-left"><?php echo $row_quiq_all['RES']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Emissions</th>
					<td class="text-left"><?php echo $row_quiq_all['REE']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Immunity</th>
					<td class="text-left"><?php echo $row_quiq_all['REI']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>