<!doctype html>
<html>
    <head>
       
    </head>
    <body>
       
	<div class="row">

	<div class="col-md-12">
		<div class="card card-info">
			<div class="card-header" style="background-color: #648ECF;">
				
				<h3 class="card-title" style="color: white">Detail Nama Printer</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 200px">
								<b>Marek</b>
							</td>
							<td>:
								<?php echo $marek; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Model</b>
							</td>
							<td>:
								<?php echo $model; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Ip Server</b>
							</td>
							<td>:
								<?php echo $ip_server; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Multifungsi</b>
							</td>
							<td>:
								<?php echo $multifungsi; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Pilihan Warna</b>
							</td>
							<td>:
								<?php echo $pilihan_warna; ?>
							</td>
						</tr>
						
						
					</tbody>
				</table>
				<div class="card-footer">
					<a href="<?php echo site_url('printer') ?>" class="btn btn-warning">Kembali</a>

					<!-- <a href="./report/cetak-pegawai.php?nip=<?php echo $data_cek['nip']; ?>" target=" _blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a> -->
					  
				</div>
			</div>
		</div>
	</div>

	

</div>
        </body>
</html>