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
        <h2 style="margin-top:0px">Tb_log_ups Read</h2>
        <table class="table">
	    <tr><td>Id Ups</td><td><?php echo $id_ups; ?></td></tr>
	    <tr><td>Service</td><td><?php echo $service; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td>Tgl</td><td><?php echo $tgl; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('log_ups') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>