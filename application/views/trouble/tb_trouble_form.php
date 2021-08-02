<!doctype html>
<html>
    <body>        
     
    </body>
</html>

<div class="card card-primary">
    <div class="card-header" style="background-color: #648ECF;">
        <h3 class="card-title">
           <p style="color: white"> <i class="fa fa-edit"></i> Tambah Data</p></h3>
    </div>
   <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
            <div class="card-body">
                 <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Judul <?php echo form_error('judul') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Code Error <?php echo form_error('code_error') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="code_error" name="code_error" value="<?php echo $code_error; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pesan <?php echo form_error('pesan') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="pesan" name="pesan" value="<?php echo $pesan; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Solusi <?php echo form_error('solusi') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="solusi" name="solusi" value="<?php echo $solusi; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Langkah <?php echo form_error('langkah') ?></label>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="langkah" name="langkah" rows="3"/><?php echo $langkah; ?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Link <?php echo form_error('link') ?></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="link" name="link" value="<?php echo $link; ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tgl <?php echo form_error('tgl') ?></label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $tgl; ?>" />
                    </div>
                </div>
            </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('trouble') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>