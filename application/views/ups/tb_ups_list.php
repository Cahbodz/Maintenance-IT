<!doctype html>
    <html>
    <head>
        <title>Halaman ups</title>

    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <a class="btn btn-info" href="<?php echo base_url() ?>ups/create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</span></a>
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
                                        <th>User</th>
                                        <th>Merek</th>
                                        <th>Model</th>
                                        <th>Input</th>
                                        <th>Output</th>
                                        <th>Kondisi</th>
                                        <th>Ket</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($ups_data as $ups)
                                    {
                                        ?>
                                        <tr>
                                            <td width="80px"><?php echo ++$start ?></td>
                                            <td><?php echo $ups->user ?></td>
                                            <td><?php echo $ups->merek ?></td>
                                            <td><?php echo $ups->model ?></td>
                                            <td><?php echo $ups->input ?></td>
                                            <td><?php echo $ups->output ?></td>
                                            <td><?php echo $ups->kondisi ?></td>
                                            <td><?php echo $ups->ket ?></td>
                                            <td style="text-align:center" width="200px">

                                                <a class="btn btn-info" href="<?php echo base_url(); ?>ups/read/<?php echo $ups->id_ups ?>"><span class="glyphicon glyphicon-eye-open" ></span></a>

                                                <a class="btn btn-warning" href="<?php echo base_url(); ?>ups/update/<?php echo $ups->id_ups ?>"><span class="glyphicon glyphicon-pencil" ></span></a>

                                                <a class="btn btn-danger" href="<?php echo base_url(); ?>ups/delete/<?php echo $ups->id_ups ?>"><span class="glyphicon glyphicon-trash" onclick="return confirm('yakin data dihapus?')"></span></a>

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
                                <?php echo anchor(site_url('ups/excel'), 'Excel', 'class="btn btn-primary"'); ?>
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