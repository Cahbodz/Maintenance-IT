<!doctype html>
<html>
    <head>
    </head>
    <body>
    <div class="card card-primary">
        <div class="card-header" style="background-color: #648ECF;">
            <h3 class="card-title">
                <p style="color: white"> <i class="fa fa-edit"></i> Tambah Data</p>
            </h3>
        </div>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">kode_barang <?php echo form_error('kode_barang') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $kode_barang; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">merek <?php echo form_error('merek') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="merek" name="merek" value="<?php echo $merek; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Model <?php echo form_error('model') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="model" name="model" value="<?php echo $model; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">kondisi <?php echo form_error('kondisi') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kondisi" name="kondisi" value="<?php echo $kondisi; ?>" />
                    </div>
                </div>

                 <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Keterangan <?php echo form_error('ket') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ket" name="ket" value="<?php echo $ket; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Size <?php echo form_error('size') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="size" name="size" value="<?php echo $size; ?>" />
                    </div>
                </div>

            </div>
            <input type="hidden" name="id_monitor" value="<?php echo $id_monitor; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('monitor') ?>" class="btn btn-default">Cancel</a>
        </form>
    </div>
    </body>
</html>