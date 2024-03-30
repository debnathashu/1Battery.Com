<!-- AC Input -->
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-condensed spec-table">
			<thead class="spec-thead">
				<tr><th colspan="3">AC Input</th></tr>
			</thead>
			<tbody>
				<tr>
					<th class="charger-header">AC input connector</th>
					<td class="text-left"><?php echo $row_ac_dc_mec_env_reg['ACIC']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">AC Input Voltage Range</th>
					<td colspan="2" class="text-left"><?php echo $row_ac_dc_mec_env_reg['ACIVR']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Normal AC Input Voltage</th>
					<td colspan="2" class="text-left"><?php echo $row_ac_dc_mec_env_reg['ACNIV']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Normal AC Input Frequency</th>
					<td colspan="2" class="text-left"><?php echo $row_ac_dc_mec_env_reg['ACNIF']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Maximum AC Input Current</th>
					<td colspan="2" class="text-left"><?php echo $row_ac_dc_mec_env_reg['ACMIC']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Nominal AC Input Current</th>
					<td colspan="2" class="text-left"><?php echo $row_ac_dc_mec_env_reg['ACNIC']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Nominal AC Power Factor</th>
					<td colspan="2" class="text-left"><?php echo $row_ac_dc_mec_env_reg['ACNPF']; ?></td>
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
				<tr><th colspan="4">DC Output</th></tr>
			</thead>
			<tbody>
				<tr>
					<th class="charger-header">Nominal DC Output Voltage</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['DCNOV']; ?></td>
				</tr>
				<tr>		  
					<th class="charger-header">Maximum DC Output Voltage</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['DCMOV']; ?></td>
				</tr>	  
				<tr>		  
					<th class="charger-header">Maximum DC Output Current</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['DCMOC']; ?></td>
				</tr>
				<tr>		  
					<th class="charger-header">Maximum DC Output Power</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['DCMOP']; ?></td>
				</tr>
				<tr>		  
					<th class="charger-header">Deep Discharge Recovery<br/>(minimum voltage)</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['DCDDR']; ?></td>
				</tr>
				<tr>		  
					<th class="charger-header">Maximum Interlock Current</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['DCMIC']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Battery Type</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['DCBT']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Reverse Polarity</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['DCRP']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Short Circuit</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['DCSC']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">DC output connector</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['DCOC']; ?></td>
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
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['MEDi']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Weight</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['MEWe']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Data port</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['MEDP']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Mounting holes</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['MEMH']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Cooling</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['MEC']; ?></td>
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
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['ENEn']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Operating Temperature</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['ENOT']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Storage Temperature</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['ENST']; ?></td>
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
					<th class="charger-header">Efficiency</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['REEf']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Safety</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['RESa']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Emissions</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['REEm']; ?></td>
				</tr>
				<tr>
					<th class="charger-header">Immunity</th>
					<td  class="text-left"><?php echo $row_ac_dc_mec_env_reg['REIm']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
