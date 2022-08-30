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
                <label class="col-sm-2 col-form-label">ip adress</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="ip_adres" name="ip_adres" required value="<?php echo $ip_adres; ?>" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ip gateway</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="ip_gateway" name="ip_gateway" value="<?php echo $ip_gateway; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">nama komputer</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_kom" name="nama_kom" value="<?php echo $nama_kom; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">nama user</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_user" name="nama_user" value="<?php echo $nama_user; ?>" />
                </div>
            </div>


             <div class="form-group row">
                <label class="col-sm-2 col-form-label">jenis internet</label>
                <div class="col-sm-4">
                    <select name="jenis_inter" id="jenis_inter" class="form-control">
                        <option>- Pilih -</option>
                        <option value="KabelLan" <?= ($jenis_inter == 'KabelLan' ? 'selected' : ''); ?>>Kabel LAN</option>
                        <option value="wireles" <?= ($jenis_inter == 'wireles' ? 'selected' : ''); ?>>Wireles</option>
                        <option value="wireles_kabel" <?= ($jenis_inter == 'wireles_kabel' ? 'selected' : ''); ?>>Wireles & KabelLan</option>
                    </select>
                </div>
        </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-4">
                    <select name="level_inter" id="level_inter" class="form-control">
                        <option>- Pilih -</option>
                        <option value="online" <?= ($level_inter == 'online' ? 'selected' : ''); ?>>online</option>
                        <option value="bebas" <?= ($level_inter == 'bebas' ? 'selected' : ''); ?>>bebas</option>
                        <option value="standar" <?= ($level_inter == 'standar' ? 'selected' : ''); ?>>standar</option>
                    </select>
                </div>
            </div>
                <div class="form-group row">
                <label class="col-sm-2 col-form-label">jenis dekstop / netbook</label>
                <div class="col-sm-4">
                    <select name="jenis_deks_netbook" id="jenis_deks_netbook" class="form-control">
                        <option>- Pilih -</option>
                        <option value="dekstop" <?= ($jenis_deks_netbook == 'dekstop' ? 'selected' : ''); ?>>dekstop</option>
                        <option value="netbook" <?= ($jenis_deks_netbook == 'netbook' ? 'selected' : ''); ?>>netbook</option>
                    </select>
                </div>
        </div>

             <!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">jenis dekstop / netbook</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="jenis_deks_netbook" name="jenis_deks_netbook" value="<?php echo $jenis_deks_netbook; ?>" />
                </div>
            </div> -->

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">merek dekstop / netbook</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="merek_deks_netbook" name="merek_deks_netbook" value="<?php echo $merek_deks_netbook; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">tipe dekstop / netbook</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="tipe_deks_netbook" name="tipe_deks_netbook" value="<?php echo $tipe_deks_netbook; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">operasi sistem</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="os" name="os" value="<?php echo $os; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">merek monitor</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="merek_monit" name="merek_monit" value="<?php echo $merek_monit; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">size monitor</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="size_monit" name="size_monit" value="<?php echo $size_monit; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">merek processor</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="merek_procesr" name="merek_procesr" value="<?php echo $merek_procesr; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">tipe processor</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="tipe_procesr" name="tipe_procesr" value="<?php echo $tipe_procesr; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">speed processor</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="speed_procesr" name="speed_procesr" value="<?php echo $speed_procesr; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">amount ram</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="amount_ram" name="amount_ram" value="<?php echo $amount_ram; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">tipe ram</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="tipe_ram" name="tipe_ram" value="<?php echo $tipe_ram; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">merek hardisk</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="merek_hards" name="merek_hards" value="<?php echo $merek_hards; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">size hardisk</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="size_hards" name="size_hards" value="<?php echo $size_hards; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">merek graphich</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="merek_grapc" name="merek_grapc" value="<?php echo $merek_grapc; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">tipe graphich</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="tipe_grapc" name="tipe_grapc" value="<?php echo $tipe_grapc; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">memory grapc</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="memory_grapc" name="memory_grapc" value="<?php echo $memory_grapc; ?>" />
                </div>
            </div>


             <div class="form-group row">
                <label class="col-sm-2 col-form-label">motherboard</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="mobo" name="mobo"value="<?php echo $mobo; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">power suply</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="power_suply" name="power_suply" value="<?php echo $power_suply; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">mouse</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="mouse" name="mouse" value="<?php echo $mouse; ?>" />
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">keyboard</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="keyboard" name="keyboard" value="<?php echo $keyboard; ?>" />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">apk terinstall</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="apk_terinstall" name="apk_terinstall" value="<?php echo $apk_terinstall; ?>" />
                </div>
            </div>


            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">UPS</label>
                <div class="col-sm-4">
                    <select name="ups" id="ups" class="form-control">
                        <option>- Pilih -</option>
                        <option value="ya"  <?= ($ups == 'ya' ? 'selected' : ''); ?>>Ya</option>
                        <option value="tidak"  <?= ($ups == 'tidak' ? 'selected' : ''); ?>>Tidak</option>
                    </select>
                </div>
            </div>

        </div>
        <input type="hidden" name="id_komputer" value="<?php echo $id_komputer; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('komputer') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>
    </body>
</html>