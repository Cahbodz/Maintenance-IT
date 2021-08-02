<!doctype html>
<html>
    <head>
    </head>
    <body>

         <div class="card card-primary">
         <div class="card-header" style="background-color: #648ECF;">
            <h3 class="card-title">
             <p style="color: white"> <i class="fa fa-edit"></i> Tambah Data</p></h3>
         </div>
        
        <form action="<?php echo $action; ?>" method="post">
            <div class="card-body">
       <!--   <div class="form-group row">
            <label class="col-sm-2 col-form-label">Id Printer <?php echo form_error('id_printer') ?></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="id_printer" name="id_printer" value="<?php echo $id_printer; ?>" />
            </div>
        </div> -->

          <div class="form-group row">
              <label class="col-sm-2 col-form-label">Id Printer<?php echo form_error('id_printer') ?></label>
              <div class="col-md-6 col-sm-6 ">
                <div class="control-group">
                  <select name="id_printer" id="id_printer" style="width: 100%; height: 30px;" value="<?php echo $id_printer; ?>"  >
                    <option value="id_printer">....</option>
                    <?php 
                    $tb_komputer = $this->db->get('tb_printer');
                    foreach ($tb_komputer->result() as $row) {
                      ?>
                      <option <?php if($this->uri->segment(2) == 'update'){if($id_printer == $row->id_printer) { echo 'selected';}}?> value="<?php echo $row->id_printer; ?>"><?php echo $row->id_printer; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>


        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Masalah <?php echo form_error('masalah') ?></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="masalah" name="masalah" value="<?php echo $masalah; ?>" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Solusi <?php echo form_error('ket') ?></label>
            <div class="col-sm-6">
                <textarea class="form-control" id="ket" name="ket" rows="3"/><?php echo $ket; ?></textarea>
                <!-- <input type="text" class="form-control" id="ket" name="ket" value="<?php echo $ket; ?>" /> -->
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tgl <?php echo form_error('tgl') ?></label>
            <div class="col-sm-6">
                <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $tgl; ?>" />
            </div>
        </div>


	    <input type="hidden" name="id_log_printer" value="<?php echo $id_log_printer; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('log_printer') ?>" class="btn btn-default">Cancel</a>
    </div>
	</form>
</div>

    </body>
</html>