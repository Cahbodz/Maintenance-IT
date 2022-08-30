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
              <label class="col-sm-2 col-form-label">Nama Printer <?php echo form_error('marek') ?></label>
              <div class="col-md-6 col-sm-6 ">
                <div class="control-group">
                  <select name="nama_printer" id="nama_printer" style="width: 100%; height: 30px;" value="<?php echo $marek; ?>"  >
                    <option value="marek">....</option>
                    <?php 
                    $tb_printer = $this->db->get('tb_printer');
                    foreach ($tb_printer->result() as $row) {
                      ?>
                      <option <?php if($this->uri->segment(2) == 'update'){if($marek == $row->marek) { echo 'selected';}}?> value="<?php echo $row->marek; ?>"><?php echo $row->marek; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">user <?php echo form_error('user') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="user" name="user" value="<?php echo $user; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tgl beli <?php echo form_error('tgl_beli') ?></label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="tgl_beli" name="tgl_beli" value="<?php echo $tgl_beli; ?>" />
                    </div>
                </div>

            </div>
            <input type="hidden" name="id_toner" value="<?php echo $id_toner; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('toner') ?>" class="btn btn-default">Cancel</a>
        </form>
    </div>
    </body>
</html>