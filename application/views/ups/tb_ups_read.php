<!doctype html>
<html>
    <body>
        <h2 style="margin-top:0px">Tb_ups Read</h2>
        <table class="table">
	    <tr><td>User</td><td><?php echo $user; ?></td></tr>
	    <tr><td>Model</td><td><?php echo $model; ?></td></tr>
	    <tr><td>Input</td><td><?php echo $input; ?></td></tr>
	    <tr><td>Output</td><td><?php echo $output; ?></td></tr>
	    <tr><td>Kondisi</td><td><?php echo $kondisi; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('ups') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>