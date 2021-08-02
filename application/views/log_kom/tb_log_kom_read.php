<!doctype html>
<html>
    <head>
       
    </head>
    <body>
       
	<div class="row">

	<div class="col-md-12">
		<div class="card card-info">
			<div class="card-header" style="background-color: #648ECF;">
				
				<h3 class="card-title" style="color: white">Detail Pegawai</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 200px">
								<b>Id Komputer</b>
							</td>
							<td>:
								<?php echo $id_komputer; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama user</b>
							</td>
							<td>:
								<?php echo $nama_user; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kerusakan</b>
							</td>
							<td>:
								<?php echo $kerusakan; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tindakan</b>
							</td>
							<td>:
								<?php echo $tindakan; ?>
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
								<b>Bagian</b>
							</td>
							<td>:
								<?php echo $bagian; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Nama IT</b>
							</td>
							<td>:
								<?php echo $nama_it; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal mulai</b>
							</td>
							<td>:
								<?php echo $tgl_mulai; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Tanggal selesai</b>
							</td>
							<td>:
								<?php echo $tgl_selesai; ?>
							</td>
						</tr>
						
					</tbody>
				</table>
				<div class="card-footer">
					<a href="<?php echo site_url('Log_kom') ?>" class="btn btn-warning">Kembali</a>

					<!-- <a href="./report/cetak-pegawai.php?nip=<?php echo $data_cek['nip']; ?>" target=" _blank"
					 title="Cetak Data Pegawai" class="btn btn-primary">Print</a> -->
				</div>
			</div>
		</div>
	</div>

	

</div>
        </body>
</html>