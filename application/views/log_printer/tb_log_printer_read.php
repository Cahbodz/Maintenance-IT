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
								<b>Id Printer</b>
							</td>
							<td>:
								<?php echo $id_printer; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Masalah</b>
							</td>
							<td>:
								<?php echo $masalah; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Keterangan</b>
							</td>
							<td>:
								<?php echo $ket; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Keterangan</b>
							</td>
							<td>:
								<?php echo $ket; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tangaal</b>
							</td>
							<td>:
								<?php echo $tgl; ?>
							</td>
						</tr>
						
						
					</tbody>
				</table>
				<div class="card-footer">
					<a href="<?php echo site_url('log_printer') ?>" class="btn btn-warning">Kembali</a>

					<!-- <a href="./report/cetak-pegawai.php?nip=<?php echo $data_cek['nip']; ?>" target=" _blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a> -->
				</div>
			</div>
		</div>
	</div>

	

</div>
        </body>
</html>