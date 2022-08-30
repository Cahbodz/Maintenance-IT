<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tb_ram Read</h2>
        <table class="table">
	    <tr><td>Tipe</td><td><?php echo $tipe; ?></td></tr>
	    <tr><td>Kapasitas</td><td><?php echo $kapasitas; ?></td></tr>
	    <tr><td>Tipe-pc</td><td><?php echo $tipe-pc; ?></td></tr>
	    <tr><td>Jenis Ram</td><td><?php echo $jenis_ram; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('ram') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>