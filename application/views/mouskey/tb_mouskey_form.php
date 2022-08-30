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
                    <label class="col-sm-2 col-form-label">unit <?php echo form_error('unit') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="unit" name="unit" value="<?php echo $unit; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">merek <?php echo form_error('merek') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="merek" name="merek" value="<?php echo $merek; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ip Server <?php echo form_error('jenis_usb') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jenis_usb" name="jenis_usb" value="<?php echo $jenis_usb; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">kondisi <?php echo form_error('kondisi') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="kondisi" name="kondisi" value="<?php echo $kondisi; ?>" />
                    </div>
                </div>
            </div>
            <input type="hidden" name="id_mouskey" value="<?php echo $id_mouskey; ?>" />
            <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
            <a href="<?php echo site_url('mouskey') ?>" class="btn btn-default">Cancel</a>
        </form>
    </div>
</body>

</html>