<!doctype html>
<html>

<head>
	<title>harviacode.com - codeigniter crud generator</title>

</head>

<body>
	<!-- halaman cari -->
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form cari<small>different form elements</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">


				<div class="table-group">

					<div class="x_content">

						<?php echo form_open('komputer/cari'); ?>
						<select name="pilih" style="margin-left: 200px; height: 30px; border: 1px;" class="btn btn-default">
							<option value="">--CARI BERDASARKAN--</option>
							<option value="id_komputer">ID</option>
							<option value="ip_adres">Ip adress</option>
							<option value="nama_kom">Nama Kom</option>
							<option value="nama_user">Nama user</option>
						</select>
						<input type="text" name="detail" placeholder="detail" class="search" style="width: 20%; height: 30px" required>
						<input type="submit" name="cari" value="cari" class="btn btn-success" style="width: 5%">
						<?php echo form_close(); ?>
					</div>
					<div class="col-md-6 text-right">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Batas halaman cari -->
	<div class="row" style="margin-bottom: 10px">
		<div class="col-md-4">
			<a class="btn btn-info" href="<?php echo base_url() ?>komputer/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah</span></a>
		</div>
		<div class="col-md-4 text-center">
		</div>
		<div class="col-md-1 text-right">
		</div>
		<div class="col-md-3 text-right">

		</div>
	</div>

	<div class="class">
		<div class="col-md-12 col-sm-12 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Form Design <small>different form elements</small></h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>

						<li><a class="close-link"><i class="fa fa-close"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">


					<div class="table-group">
						<table id="datatables" class="table table-striped table table-bordered">
							<thead>
								<tr>
									<th>no</th>
									<th>ID</th>
									<th>Ip_Adres</th>
									<th>Ip_Gateway</th>
									<th>Nama_Kom</th>
									<th>Nama_User</th>
									<th>Jenis_Inter</th>
									<th>Level_Inter</th>
									<th>Jenis_Deks/Netbook</th>
									<th>Merek_Deks/Netbook</th>
									<th>Tipe_Deks/Netbook</th>
									<th>Os</th>
									<th>Merek_Monit</th>
									<th>Size_Monit</th>
									<th>Merek_Procesr</th>
									<th>Tipe_Procesr</th>
									<th>Speed_Procesr</th>
									<th>Amount_Ram</th>
									<th>Tipe_Ram</th>
									<th>Merek_Hards</th>
									<th>Size_Hards</th>
									<th>Merek_Grapc</th>
									<th>Tipe_Grapc</th>
									<th>Memory_Grapc</th>
									<th>Mobo</th>
									<th>Power_Suply</th>
									<th>Mouse</th>
									<th>Keyboard</th>
									<th>Apk_Terinstall</th>
									<th>Ups</th>
									<th>_____________Action____________</th>
								</tr>
							</thead>
							<tbody>

								<?php
								$nomor = 0;
								foreach ($komputer_data as $komputer) {
								?>
									<tr>
										<td><?php echo ++$nomor ?></td>
										<td><?php echo $komputer->id_komputer ?></td>
										<td><?php echo $komputer->ip_adres ?></td>
										<td><?php echo $komputer->ip_gateway ?></td>
										<td><?php echo $komputer->nama_kom ?></td>
										<td><?php echo $komputer->nama_user ?></td>
										<td><?php echo $komputer->jenis_inter ?></td>
										<td><?php echo $komputer->level_inter ?></td>
										<td><?php echo $komputer->jenis_deks_netbook ?></td>
										<td><?php echo $komputer->merek_deks_netbook ?></td>
										<td><?php echo $komputer->tipe_deks_netbook ?></td>
										<td><?php echo $komputer->os ?></td>
										<td><?php echo $komputer->merek_monit ?></td>
										<td><?php echo $komputer->size_monit ?></td>
										<td><?php echo $komputer->merek_procesr ?></td>
										<td><?php echo $komputer->tipe_procesr ?></td>
										<td><?php echo $komputer->speed_procesr ?></td>
										<td><?php echo $komputer->amount_ram ?></td>
										<td><?php echo $komputer->tipe_ram ?></td>
										<td><?php echo $komputer->merek_hards ?></td>
										<td><?php echo $komputer->size_hards ?></td>
										<td><?php echo $komputer->merek_grapc ?></td>
										<td><?php echo $komputer->tipe_grapc ?></td>
										<td><?php echo $komputer->memory_grapc ?></td>
										<td><?php echo $komputer->mobo ?></td>
										<td><?php echo $komputer->power_suply ?></td>
										<td><?php echo $komputer->mouse ?></td>
										<td><?php echo $komputer->keyboard ?></td>
										<td><?php echo $komputer->apk_terinstall ?></td>
										<td><?php echo $komputer->ups ?></td>
										<td style="text-align:center" width="200px">

											<a class="btn btn-info" href="<?php echo base_url(); ?>komputer/read/<?php echo $komputer->id_komputer; ?>">
												<span class="glyphicon glyphicon-eye-open"></span></a>
											<a class="btn btn-warning" href="<?php echo base_url(); ?>komputer/update/<?php echo $komputer->id_komputer; ?>">
												<span class="glyphicon glyphicon-pencil"></span></a>
											<a class="btn btn-danger" href="<?php echo base_url(); ?>komputer/delete/<?php echo $komputer->id_komputer ?>">
												<span class="glyphicon glyphicon-trash" onclick="return confirm('yakin data dihapus?')"></span></a>
											<a class="btn btn-primary" href="<?php echo base_url(); ?>komputer/pdf/<?php echo $komputer->id_komputer ?>">
												<span class="glyphicon glyphicon-print"></span></a>
										</td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>

					</div>
					<div class="ln_solid"></div>
					<div class="row">
						<div class="col-md-6">
							<!-- <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a> -->
							<?php echo anchor(site_url('komputer/excel'), 'Excel', 'class="btn btn-primary"'); ?>
						</div>
						<div class="col-md-6 text-right">
							<!-- <?php echo $pagination ?> -->
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>

</html>