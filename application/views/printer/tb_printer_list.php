<!doctype html>
<html>
<head>
<h2></h2>
</head>
<body>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4">
            <a class="btn btn-info" href="<?php echo base_url() ?>printer/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah</span></a>
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

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">


                    <div class="table-group">
                        <table id="datatables" class="table table-bordered" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <!-- <th>ID</th> -->
                                    <th>Marek</th>
                                    <th>Model</th>
                                    <th>Ip Server</th>
                                    <th>Multifungsi</th>
                                    <th>Pilihan Warna</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($printer_data as $printer) {
                                ?>
                                    <tr>
                                        <td width="80px"><?php echo ++$start ?></td>
                                        <!-- <td><?php echo $printer->id_printer ?></td> -->
                                        <td><?php echo $printer->marek ?></td>
                                        <td><?php echo $printer->model ?></td>
                                        <td><?php echo $printer->ip_server ?></td>
                                        <td><?php echo $printer->multifungsi ?></td>
                                        <td><?php echo $printer->pilihan_warna ?></td>
                                        <td style="text-align:center" width="200px">

                                            <a class="btn btn-info" href="<?php echo base_url(); ?>printer/read/<?php echo $printer->id_printer ?>">
                                                <span class="glyphicon glyphicon-eye-open"></span></a>

                                            <!-- <a class="btn btn-warning" href="<?php echo base_url(); ?>printer/update/<?php echo $printer->id_printer ?>">
                                                <span class="glyphicon glyphicon-pencil"></span></a>

                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>printer/delete/<?php echo $printer->id_printer ?>">
                                                <span class="glyphicon glyphicon-trash" onclick="return confirm('yakin data dihapus?')">
                                                </span></a> -->

                                            <!--  <a class="btn btn-primary" href="<?php echo base_url(); ?>printer/pdf/<?php echo $printer->id_printer ?>"><span class="glyphicon glyphicon-print"></span></a> -->
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
                            <?php echo anchor(site_url('printer/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                        </div>
                        <div class="col-md-6 text-right">
                            <?php echo $pagination ?>
                        </div>
                    </div>

                </div>
            </div>
        </div> 
</body>

</html>