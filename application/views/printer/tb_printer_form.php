<!doctype html>
<html>

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
                    <label class="col-sm-2 col-form-label">Marek <?php echo form_error('marek') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="marek" name="marek" value="<?php echo $marek; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Model <?php echo form_error('model') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="model" name="model" value="<?php echo $model; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ip Server <?php echo form_error('ip_server') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ip_server" name="ip_server" value="<?php echo $ip_server; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Multifungsi <?php echo form_error('multifungsi') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="multifungsi" name="multifungsi" value="<?php echo $multifungsi; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pilihan Warna <?php echo form_error('pilihan_warna') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="pilihan_warna" name="pilihan_warna" value="<?php echo $pilihan_warna; ?>" />
                    </div>
                </div>
            </div>
            <input type="hidden" name="id_printer" value="<?php echo $id_printer; ?>" />
            <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
            <a href="<?php echo site_url('printer') ?>" class="btn btn-default">Cancel</a>
        </form>
    </div>

</body>

</html>