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
                    <label class="col-sm-2 col-form-label">tipe <?php echo form_error('tipe') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tipe" name="tipe" value="<?php echo $tipe; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">kapasitas <?php echo form_error('kapasitas') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="<?php echo $kapasitas; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ip Server <?php echo form_error('tipePc') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tipePc" name="tipePc" value="<?php echo $tipePc; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">jenis_ram <?php echo form_error('jenis_ram') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jenis_ram" name="jenis_ram" value="<?php echo $jenis_ram; ?>" />
                    </div>
                </div>

            </div>
            <input type="hidden" name="id_ram" value="<?php echo $id_ram; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('ram') ?>" class="btn btn-default">Cancel</a>
        </form>
    </div>
    </body>
</html>