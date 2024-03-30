<div role="tabpanel" class="tab-pane fade in active" id="specifications">
			<div class="row">
				<div class="col-md-4">
					<div class="table-responsive">
						<table class="table table-condensed spec-table">
							<thead class="spec-thead">
								<tr>
									<th colspan="2">Cycling Capacity</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="header-3 text-center">20 hour rate</th>
									<td><?php echo $row_pbdetails['CycCap']; ?> Amp Hours</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-8">
					<div class="table-responsive">
						<table class="table table-condensed spec-table">
							<thead class="spec-thead">
								<tr>
									<th colspan="4">Reserve Capacity</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="header-3 text-center">@ 25 Amps</th>
									<td><?php echo $row_pbdetails['ReCap25']; ?> minutes</td>
									<th class="header-3 text-center">@ 75 Amps</th>
									<td><?php echo $row_pbdetails['ReCap75']; ?> minutes</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="table-responsive">
						<table class="table table-condensed spec-table">
							<thead class="spec-thead">
								<tr>
									<th colspan="2">Mechanical Specifications</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="header-3">Group Size</th>
									<td class="text-left"><?php echo $row_bmecspe['MGS']; ?></td>
								</tr>
								<tr>
									<th class="header-3">Terminal Type</th>
									<td class="text-left"><?php echo $row_bmecspe['MTT']; ?></td>
								</tr>
								<tr>
									<th class="header-3">Total Height</th>
									<td class="text-left"><?php echo $row_bmecspe['MTH']; ?></td>
								</tr>
								<tr>
									<th class="header-3">Height</th>
									<td class="text-left"><?php echo $row_bmecspe['MH']; ?></td>
								</tr>
								<tr>
									<th class="header-3">Width</th>
									<td class="text-left"><?php echo $row_bmecspe['MWi']; ?></td>
								</tr>
								<tr>
									<th class="header-3">Length</th>
									<td class="text-left"><?php echo $row_bmecspe['ML']; ?></td>
								</tr>
								<tr>
									<th class="header-3">Weight</th>
									<td class="text-left"><?php echo $row_bmecspe['MWe']; ?></td>
								</tr>
								<tr>
									<th class="header-3">Case Type</th>
									<td class="text-left"><?php echo $row_bmecspe['MCT']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6">
					<div class="table-responsive">
						<table class="table table-condensed spec-table">
							<thead class="spec-thead">
								<tr>
									<th colspan="3">Discharge Table (Constant Current)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="header-3 text-center">Time</th>
									<th class="header-3 text-center">Amps</th>
									<th class="header-3 text-center">Rate</th>
								</tr>
								<tr>
									<td><?php echo $row_bdistab['1Time']; ?> hr</td>
									<td><?php echo $row_bdistab['1Amps']; ?></td>
									<td><?php echo $row_bdistab['1Rate']; ?> CA</td>
								</tr>
								<tr>
									<td><?php echo $row_bdistab['2Time']; ?> hr</td>
									<td><?php echo $row_bdistab['2Amps']; ?></td>
									<td><?php echo $row_bdistab['2Rate']; ?> CA</td>
								</tr>
								<tr>
									<td><?php echo $row_bdistab['3Time']; ?> hr</td>
									<td><?php echo $row_bdistab['3Amps']; ?></td>
									<td><?php echo $row_bdistab['3Rate']; ?> CA</td>
								</tr>
								<tr>
									<td><?php echo $row_bdistab['4Time']; ?> hr</td>
									<td><?php echo $row_bdistab['4Amps']; ?></td>
									<td><?php echo $row_bdistab['4Rate']; ?> CA</td>
								</tr>
								<tr>
									<td><?php echo $row_bdistab['5Time']; ?> hr</td>
									<td><?php echo $row_bdistab['5Amps']; ?></td>
									<td><?php echo $row_bdistab['5Rate']; ?> CA</td>
								</tr>
								<tr>
									<td><?php echo $row_bdistab['6Time']; ?> hr</td>
									<td><?php echo $row_bdistab['6Amps']; ?></td>
									<td><?php echo $row_bdistab['6Rate']; ?> CA</td>
								</tr>
								<tr>
									<td><?php echo $row_bdistab['7Time']; ?> hr</td>
									<td><?php echo $row_bdistab['7Amps']; ?></td>
									<td><?php echo $row_bdistab['7Rate']; ?> CA</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="table-responsive">
						<table class="table table-condensed spec-table">
							<thead class="spec-thead">
								<tr>
									<th colspan="2">Electrical Specifications</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="header-3">Nominal Voltage</th>
									<td class="text-left"><?php echo $row_belespe['NV']; ?> Volt</td>
								</tr>
								<tr>
									<th class="header-3">Capacity @ 100 hour rate</th>
									<td class="text-left"><?php echo $row_belespe['Cap100']; ?> AH</td>
								</tr>
								<tr>
									<th class="header-3">Capacity @ 20 hour rate</th>
									<td class="text-left"><?php echo $row_belespe['Cap20']; ?> AH</td>
								</tr>
								<tr>
									<th class="header-3">Capacity @ 10 hour rate</th>
									<td class="text-left"><?php echo $row_belespe['Cap10']; ?> AH</td>
								</tr>
								<tr>
									<th class="header-3">Capacity @ 5 hour rate</th>
									<td class="text-left"><?php echo $row_belespe['Cap5']; ?> AH</td>
								</tr>
								<tr>
									<th class="header-3">CCA</th>
									<td class="text-left"><?php echo $row_belespe['CCA']; ?> Amps</td>
								</tr>
								<tr>
									<th class="header-3">CA or MCA</th>
									<td class="text-left"><?php echo $row_belespe['CA']; ?> Amps</td>
								</tr>
								<tr>
									<th class="header-3">PHCA</th>
									<td class="text-left"><?php echo $row_belespe['PHCA']; ?> Amps</td>
								</tr>
								<tr>
									<th class="header-3">Short Circuit Current</th>
									<td class="text-left"><?php echo $row_belespe['SCCur']; ?> Amps</td>
								</tr>
								<tr>
									<th class="header-3">Internal Resistance</th>
									<td class="text-left"><?php echo $row_belespe['IntRes']; ?>m &Omega;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6">
					<div class="table-responsive">
						<table class="table table-condensed spec-table">
							<thead class="spec-thead">
								<tr>
									<th colspan="5">Charge Voltages</th>
								</tr>
							</thead>
							<tbody>
								<tr class="header-2">
									<th></th>
									<th class="text-center" colspan="4">Battery Voltages</th>
								</tr>
								<tr class="header-3">
									<th>Charge Stage</th>
									<th class="text-center header-3-pad-1">12V</th>
									<th class="text-center header-3-pad-1">24V</th>
									<th class="text-center header-3-pad-1">36V</th>
									<th class="text-center header-3-pad-1">48V</th>
								</tr>
								<tr>
									<td class="text-left">Bulk</td>
									<td><?php echo $row_csa_temp_ter['1Char12B']; ?> V</td>
									<td><?php echo $row_csa_temp_ter['1Char24B']; ?> V</td>
									<td><?php echo $row_csa_temp_ter['1Char36B']; ?> V</td>
									<td><?php echo $row_csa_temp_ter['1Char48B']; ?> V</td>
								</tr>
								<tr>
									<td class="text-left">Absortion</td>
									<td><?php echo $row_csa_temp_ter['1Char12A']; ?> V</td>
									<td><?php echo $row_csa_temp_ter['1Char24A']; ?> V</td>
									<td><?php echo $row_csa_temp_ter['1Char36A']; ?> V</td>
									<td><?php echo $row_csa_temp_ter['1Char48A']; ?> V</td>
	  							</tr>
								<tr>
									<td class="text-left">Float</td>
									<td><?php echo $row_csa_temp_ter['1Char12B']; ?> V</td>
									<td><?php echo $row_csa_temp_ter['1Char24B']; ?> V</td>
									<td><?php echo $row_csa_temp_ter['1Char36B']; ?> V</td>
									<td><?php echo $row_csa_temp_ter['1Char48B']; ?> V</td>
								</tr>
								<tr class="header-3">
								<th class="text-center" colspan="5">TC Factor: -4mV/&deg;C/cell</th>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-condensed spec-table">
							<thead class="spec-thead">
								<tr>
									<th colspan="3">Temperature Range Specifications</th>
								</tr>
							</thead>
							<tbody>
								<tr class="header-2">
									<th>Condition</th>
									<th class="text-center">Recommended</th>
									<th class="text-center">Maximum</th>
								</tr>
								<tr>
									<td class="text-left">Storage</td>
									<td><?php echo $row_csa_temp_ter['TempStorR']; ?></td>
									<td><?php echo $row_csa_temp_ter['TempStorM']; ?></td>
								</tr>
								<tr>
									<td class="text-left">Operation</td>
									<td><?php echo $row_csa_temp_ter['TempOpeR']; ?></td>
									<td><?php echo $row_csa_temp_ter['TempOpeM']; ?></td>
								</tr>
								<tr>
									<td class="text-left">Charge with TC</td>
									<td><?php echo $row_csa_temp_ter['TempChWR']; ?></td>
									<td><?php echo $row_csa_temp_ter['TempChWM']; ?></td>
								</tr>
								<tr>
									<td class="text-left">Charge without TC</td>
									<td><?php echo $row_csa_temp_ter['TempChOR']; ?></td>
									<td><?php echo $row_csa_temp_ter['TempChOM']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-condensed spec-table">
							<thead class="spec-thead">
								<tr>
									<th colspan="4">Terminal Torque Specifications</th>
								</tr>
							</thead>
							<tbody>
								<tr class="header-2">
									<th>Terminal Type</th>
									<th class="text-center header-2-pad-1">ft-lbs</td>
									<th class="text-center header-2-pad-1">in-lbs</td>
									<th class="text-center header-2-pad-1">Nm</td>
								</tr>
								<tr>
									<td class="header-3 text-left">AP | DT (AP) | M6 | M6M (stud) | TP07 (AP) | TP08 (AP)</td>
									<td><?php echo $row_csa_temp_ter['Ter1stFL']; ?></td>
									<td><?php echo $row_csa_temp_ter['Ter1stIL']; ?></td>
									<td><?php echo $row_csa_temp_ter['Ter1stN']; ?></td>
								</tr>
								<tr>
									<td class="header-3 text-left">FR45</td>
									<td><?php echo $row_csa_temp_ter['Ter2ndFL']; ?></td>
									<td><?php echo $row_csa_temp_ter['Ter2ndIL']; ?></td>
									<td><?php echo $row_csa_temp_ter['Ter2ndN']; ?></td>
								</tr>
								<tr>
									<td class="header-3 text-left">M8</td>
									<td><?php echo $row_csa_temp_ter['Ter3rdFL']; ?></td>
									<td><?php echo $row_csa_temp_ter['Ter3rdIL']; ?></td>
									<td><?php echo $row_csa_temp_ter['Ter3rdN']; ?></td>
								</tr>
								<tr>
									<td class="header-3 text-left">DT (stud) | M10M (stud)</td>
									<td><?php echo $row_csa_temp_ter['Ter4thFL']; ?></td>
									<td><?php echo $row_csa_temp_ter['Ter4thIL']; ?></td>
									<td><?php echo $row_csa_temp_ter['Ter4thN']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>	
		</div>