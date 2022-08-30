<!doctype html>
    <html>
    <body>
        <div class="card card-primary">
            <div class="card-header" style="background-color: #648ECF;">
                <h3 class="card-title">
                   <p style="color: white"> <i class="fa fa-edit"></i> Tambah Data</p></h3>
               </div>
               
               <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">User <?php echo form_error('user') ?></label>
                        <div class="col-sm-6">
                            <div class="control-group">
                              <select name="user" id="user" style="width: 100%; height: 30px;" value="<?php echo $nama_user; ?>"  >
                                <option value="user">....</option>
                                <?php 
                                $tb_ups = $this->db->get('tb_komputer');
                                foreach ($tb_ups->result() as $row) {
                                  ?>
                                  <option <?php if($this->uri->segment(2) == 'update'){if($user == $row->nama_user) { echo 'selected';}}?> value="<?php echo $row->nama_user; ?>"><?php echo $row->nama_user; ?></option>
                              <?php } ?>
                          </select>
                      </div>
                  </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">merek <?php echo form_error('merek') ?></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="merek" name="merek" value="<?php echo $merek; ?>" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">model <?php echo form_error('model') ?></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="model" name="model" value="<?php echo $model; ?>" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Input <?php echo form_error('input') ?></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="input" name="input" value="<?php echo $input; ?>" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Output <?php echo form_error('output') ?></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="output" name="output" value="<?php echo $output; ?>" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">kondisi<?php echo form_error('kondisi') ?></label>
                <div class="col-sm-4">
                    <select name="kondisi" id="kondisi" class="form-control">
                        <option>- Pilih -</option>
                        <option value="baik" <?= ($kondisi == 'baik' ? 'selected' : ''); ?>>baik</option>
                        <option value="rusak" <?= ($kondisi == 'rusak' ? 'selected' : ''); ?>>rusak</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ket <?php echo form_error('ket') ?></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="ket" name="ket" value="<?php echo $ket; ?>" />
                </div>
            </div>

            
        </div>
        <input type="hidden" name="id_ups" value="<?php echo $id_ups; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('ups') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>

</body>
</html>