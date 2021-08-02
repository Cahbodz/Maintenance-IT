
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
    <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="card-body">

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">id komputer <?php echo form_error('id_komputer') ?></label>
              <div class="col-md-6 col-sm-6 ">
                <div class="control-group">
                  <select name="id_komputer" id="id_komputer" style="width: 100%; height: 30px;" value="<?php echo $id_komputer; ?>"  >
                    <option value="id_komputer">....</option>
                    <?php 
                    $tb_komputer = $this->db->get('tb_komputer');
                    foreach ($tb_komputer->result() as $row) {
                      ?>
                      <option <?php if($this->uri->segment(2) == 'update'){if($id_komputer == $row->id_komputer) { echo 'selected';}}?> value="<?php echo $row->id_komputer; ?>"><?php echo $row->id_komputer; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
        
            <!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">id_komputer</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="id_komputer" name="id_komputer" required value="<?php echo $id_komputer; ?>" />
                </div>
            </div>
 -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">nama_user</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?php echo $nama_user; ?>" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">nama_it</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_it" name="nama_it" value="<?php echo $nama_it; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">kerusakan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="kerusakan" name="kerusakan" value="<?php echo $kerusakan; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">tindakan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="tindakan" name="tindakan" value="<?php echo $tindakan; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">Bagian</label>
                <div class="col-sm-4">
                    <select name="bagian" id="bagian" class="form-control">
                        <option>- Pilih -</option>
                        <option value="hardware" <?= ($bagian == 'hardware' ? 'selected' : ''); ?>>hardware</option>
                        <option value="software" <?= ($bagian == 'software' ? 'selected' : ''); ?>>Software</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ket</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="ket" name="ket" rows="3"/><?php echo $ket; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">tgl_mulai</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?php echo $tgl_mulai; ?>" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">tgl_selesai</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?php echo $tgl_selesai; ?>" />
                </div>
            </div>
        </div>
        <input type="hidden" name="id_log" value="<?php echo $id_log; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('log_kom') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>
    </body>
</html>
    </body>
</html>