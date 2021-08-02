<!doctype html>
<html>
<head>
</head>
<body>

    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4">
            <a class="btn btn-info" href="<?php echo base_url() ?>log_printer/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah</span></a>
            
        </div>
        <div class="col-md-4 text-center">
            <div style="margin-top: 8px" id="message">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
            </div>
        </div>
        <div class="col-md-1 text-right">
        </div>
       
    </div>
    <table id="datatables" class="table table-bordered" style="width: 100%;" >
        <thead>
        <tr>
            <th>No</th>
            <th>Id Printer</th>
            <th>Masalah</th>
            <th>Keterangan</th>
            <th>Tanggal</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($log_printer_data as $log_printer)
            {
                ?>
                <tr>
                 <td width="80px"><?php echo ++$start ?></td>
                 <td><?php echo $log_printer->id_printer ?></td>
                 <td><?php echo $log_printer->masalah ?></td>
                 <td><?php echo $log_printer->ket ?></td>
                 <td><?php echo $log_printer->tgl ?></td>
                 <td style="text-align:center" width="200px">
				<!-- <?php 
				echo anchor(site_url('log_printer/read/'.$log_printer->id_log_printer),'Read'); 
				echo ' | '; 
				echo anchor(site_url('log_printer/update/'.$log_printer->id_log_printer),'Update'); 
				echo ' | '; 
				echo anchor(site_url('log_printer/delete/'.$log_printer->id_log_printer),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?> -->

               <a class="btn btn-info" href="<?php echo base_url(); ?>log_printer/read/<?php echo $log_printer->id_log_printer ?>"><span class="glyphicon glyphicon-eye-open" ></span></a>

               <a class="btn btn-warning" href="<?php echo base_url(); ?>log_printer/update/<?php echo $log_printer->id_log_printer ?>"><span class="glyphicon glyphicon-pencil" ></span></a>

               <a class="btn btn-danger" href="<?php echo base_url(); ?>log_printer/delete/<?php echo $log_printer->id_log_printer ?>"><span class="glyphicon glyphicon-trash" onclick="return confirm('yakin data dihapus?')"></span></a>

           </td>
       </tr>
       <?php
   }
   ?>
   </tbody>
</table>
<div class="row">
    <div class="col-md-6">
        <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        <?php echo anchor(site_url('log_printer/excel'), 'Excel', 'class="btn btn-primary"'); ?>
    </div>
    <div class="col-md-6 text-right">
        <?php echo $pagination ?>
    </div>
</div>
</body>
</html>