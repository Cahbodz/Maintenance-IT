<!doctype html>
<html>
    <head>
        
       
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <a class="btn btn-info" href="<?php echo base_url() ?>log_kom/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah</span></a>
            </div>
        </div>
        <div class="class">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Design <small>different form elements</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="#">Settings 1</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                

                <div class="table-group">
                    <table id="datatables" class="table table-bordered" style="width: 100%;" >
            <thead>
            <tr>
                <th>No</th>
                <th>Id Komputer</th>
                <th>Nama User</th>
                <th>Kerusakan</th>
                <th>Tindakan</th>
                <th>Ket</th>
                <th>Bagian</th>
                <th>Nama It</th>
                <th>Tgl Mulai</th>
                <th>Tgl Selesai</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($log_kom_data as $log_kom)
            {
                ?>
                <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $log_kom->id_komputer ?></td>
                    <td><?php echo $log_kom->nama_user ?></td>
                    <td><?php echo $log_kom->kerusakan ?></td>
                    <td><?php echo $log_kom->tindakan ?></td>
                    <td><?php echo $log_kom->ket ?></td>
                    <td><?php echo $log_kom->bagian ?></td>
                    <td><?php echo $log_kom->nama_it ?></td>
                    <td><?php echo $log_kom->tgl_mulai ?></td>
                    <td><?php echo $log_kom->tgl_selesai ?></td>
                    <td style="text-align:center" width="200px">
                <!-- <?php 
                echo anchor(site_url('log_kom/read/'.$log_kom->id_log),'Read'); 
                echo ' | '; 
                echo anchor(site_url('log_kom/update/'.$log_kom->id_log),'Update'); 
                echo ' | '; 
                echo anchor(site_url('log_kom/delete/'.$log_kom->id_log),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?> -->
                <a class="btn btn-info" href="<?php echo base_url(); ?>log_kom/read/<?php echo $log_kom->id_log ?>"><span class="glyphicon glyphicon-eye-open" ></span></a>

                 <a class="btn btn-warning" href="<?php echo base_url(); ?>log_kom/update/<?php echo $log_kom->id_log ?>"><span class="glyphicon glyphicon-pencil" ></span></a>
                 
                 <a class="btn btn-danger" href="<?php echo base_url(); ?>log_kom/delete/<?php echo $log_kom->id_log ?>"><span class="glyphicon glyphicon-trash" onclick="return confirm('yakin data dihapus?')"></span></a>
            </td>
        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
            
                </div>
                <div class="ln_solid"></div>  
                 <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
            
        </div>
            
</div>
</div>
</div>
</div>
       
    </body>
</html>



