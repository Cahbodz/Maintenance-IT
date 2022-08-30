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

        <form action="<?php echo $action; ?>" method="post">
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Id <?php echo form_error('id_ups') ?></label>
                    <div class="col-md-6 col-sm-6 ">
                        <div class="control-group">
                            <select name="id_ups" id="id_ups" style="width: 100%; height: 30px;" value="<?php echo $id_ups; ?>">
                                <option value="id_ups">....</option>
                                <?php
                                $tb_log_printer = $this->db->get('tb_ups');
                                foreach ($tb_log_printer->result() as $row) {
                                ?>
                                    <option <?php if ($this->uri->segment(2) == 'update') {
                                                if ($id_ups == $row->id_ups) {
                                                    echo 'selected';
                                                }
                                            } ?> value="<?php echo $row->id_ups; ?>"><?php echo $row->id_ups; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Service <?php echo form_error('service') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="service" name="service" value="<?php echo $service; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ket <?php echo form_error('ket') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="ket" name="ket" value="<?php echo $ket; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">tgl <?php echo form_error('tgl') ?></label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $tgl; ?>" />
                    </div>
                </div>
            </div>
            <input type="hidden" name="id_logups" value="<?php echo $id_logups; ?>" />
            <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
            <a href="<?php echo site_url('log_ups') ?>" class="btn btn-default">Cancel</a>
        </form>
</body>

</html>