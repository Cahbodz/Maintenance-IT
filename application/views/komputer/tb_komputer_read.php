<!doctype html>
<html>
    <head>
       
    </head>
    <body>
       
	<div class="row">

	<div class="col-md-12">
		<div class="card card-info">
			<div class="card-header" style="background-color: #648ECF;">
				
				<h3 class="card-title" style="color: white">Detail Data Komputer</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 200px">
								<b>Ip Adresss</b>
							</td>
							<td>:
								<?php echo $ip_adres; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Ip Gateway</b>
							</td>
							<td>:
								<?php echo $ip_gateway; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama Komputer</b>
							</td>
							<td>:
								<?php echo $nama_kom; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama User</b>
							</td>
							<td>:
								<?php echo $nama_user; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Internet</b>
							</td>
							<td>:
								<?php echo $jenis_inter; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Level Inter</b>
							</td>
							<td>:
								<?php echo $level_inter; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Jenis Dekstop / Notebook</b>
							</td>
							<td>:
								<?php echo $jenis_deks_netbook; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Merek Dekstop / Notebook</b>
							</td>
							<td>:
								<?php echo $merek_deks_netbook; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tipe Dekstop / Noteook</b>
							</td>
							<td>:
								<?php echo $tipe_deks_netbook; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Operasi Sistem</b>
							</td>
							<td>:
								<?php echo $os; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Merek Monitor</b>
							</td>
							<td>:
								<?php echo $merek_monit; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Size Monitor</b>
							</td>
							<td>:
								<?php echo $size_monit; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Merek Processor</b>
							</td>
							<td>:
								<?php echo $merek_procesr; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tipe Processor</b>
							</td>
							<td>:
								<?php echo $tipe_procesr; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Speed Processor</b>
							</td>
							<td>:
								<?php echo $speed_procesr; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Amount Ram</b>
							</td>
							<td>:
								<?php echo $amount_ram; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tipe Ram</b>
							</td>
							<td>:
								<?php echo $tipe_ram; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Merek Hardisk</b>
							</td>
							<td>:
								<?php echo $merek_hards; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Size Hardsik</b>
							</td>
							<td>:
								<?php echo $size_hards; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Merek Hardisk</b>
							</td>
							<td>:
								<?php echo $merek_grapc; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tipe Hardisk</b>
							</td>
							<td>:
								<?php echo $tipe_grapc; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Memory Graphich</b>
							</td>
							<td>:
								<?php echo $memory_grapc; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Motherboard</b>
							</td>
							<td>:
								<?php echo $mobo; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Power Suply</b>
							</td>
							<td>:
								<?php echo $power_suply; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Mouse</b>
							</td>
							<td>:
								<?php echo $mouse; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Keyboard</b>
							</td>
							<td>:
								<?php echo $keyboard; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Aplikasi Terinstall</b>
							</td>
							<td>:
								<?php echo $apk_terinstall; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Ups</b>
							</td>
							<td>:
								<?php echo $ups; ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="<?php echo site_url('komputer') ?>" class="btn btn-warning">Kembali</a>

					<!-- <a href="./report/cetak-pegawai.php?nip=<?php echo $data_cek['nip']; ?>" target=" _blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a> -->
				</div>
			</div>
		</div>
	</div>

	

</div>
        </body>
</html>