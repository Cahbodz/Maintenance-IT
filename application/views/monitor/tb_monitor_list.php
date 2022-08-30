<!doctype html>
<html>
</head>

<body>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4">
            <a class="btn btn-info" href="<?php echo base_url() ?>monitor/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah</span></a>
        </div>
        <div class="col-md-4 text-center">
            <div style="margin-top: 8px" id="message">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
            </div>
        </div>
        <div class="col-md-1 text-right">
        </div>
        <div class="col-md-3 text-right">
            <form action="<?php echo site_url('monitor/index'); ?>" class="form-inline" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                    <span class="input-group-btn">
                        <?php
                        if ($q <> '') {
                        ?>
                            <a href="<?php echo site_url('monitor'); ?>" class="btn btn-default">Reset</a>
                        <?php
                        }
                        ?>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                </div>
            </form>
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
                        <table class="table table-bordered" style="margin-bottom: 10px">
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Merek</th>
                                <th>Model</th>
                                <th>Kondisi</th>
                                <th>Ket</th>
                                <th>Size</th>
                                <th>Action</th>
                            </tr><?php
                                    foreach ($monitor_data as $monitor) {
                                    ?>
                                <tr>
                                    <td width="80px"><?php echo ++$start ?></td>
                                    <td><?php echo $monitor->kode_barang ?></td>
                                    <td><?php echo $monitor->merek ?></td>
                                    <td><?php echo $monitor->model ?></td>
                                    <td><?php echo $monitor->kondisi ?></td>
                                    <td><?php echo $monitor->ket ?></td>
                                    <td><?php echo $monitor->size ?></td>
                                    <td style="text-align:center" width="200px">
                                        <?php
                                        echo anchor(site_url('monitor/read/' . $monitor->id_monitor), 'Read');
                                        echo ' | ';
                                        echo anchor(site_url('monitor/update/' . $monitor->id_monitor), 'Update');
                                        echo ' | ';
                                        echo anchor(site_url('monitor/delete/' . $monitor->id_monitor), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                        ?>
                                    </td>
                                </tr>
                            <?php
                                    }
                            ?>
                        </table>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                                <?php echo anchor(site_url('monitor/excel'), 'Excel', 'class="btn btn-primary"'); ?>
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