<!doctype html>
<html>

<head>

</head>

<body>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4">
            <a class="btn btn-info" href="<?php echo base_url() ?>log_ups/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah</span></a>
        </div>
        <div class="col-md-4 text-center">
            <div style="margin-top: 8px" id="message">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
            </div>
        </div>
        <div class="col-md-1 text-right">
        </div>
        <div class="col-md-3 text-right">
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
                                    <th>Id Ups</th>
                                    <th>Service</th>
                                    <th>Ket</th>
                                    <th>Tgl</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($log_ups_data as $log_ups) {
                                ?>
                                    <tr>
                                        <td width="80px"><?php echo ++$start ?></td>
                                        <td><?php echo $log_ups->id_ups ?></td>
                                        <td><?php echo $log_ups->service ?></td>
                                        <td><?php echo $log_ups->ket ?></td>
                                        <td><?php echo $log_ups->tgl ?></td>
                                        <td style="text-align:center" width="200px">
                                            <?php
                                            echo anchor(site_url('log_ups/read/' . $log_ups->id_logups), 'Read');
                                            echo ' | ';
                                            echo anchor(site_url('log_ups/update/' . $log_ups->id_logups), 'Update');
                                            echo ' | ';
                                            echo anchor(site_url('log_ups/delete/' . $log_ups->id_logups), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                            ?>
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
                            <?php echo anchor(site_url('log_ups/excel'), 'Excel', 'class="btn btn-primary"'); ?>
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