<!doctype html>
    <html>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">

                <a class="btn btn-info" href="<?php echo base_url("trouble/create") ?>" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah</span></a>
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
                      <table id="datatables" class="table table-bordered" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Code Error</th>
                                <th>Pesan</th>
                                <th>Solusi</th>
                                <th>Langkah</th>
                                <th>Link</th>
                                <th>Tgl</th>
                                <th>_______Action_______</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($trouble_data as $trouble)
                            {
                                ?>
                                <tr>
                                   <td width="80px"><?php echo ++$start ?></td>
                                   <td><?php echo $trouble->judul ?></td>
                                   <td><?php echo $trouble->code_error ?></td>
                                   <td><?php echo $trouble->pesan ?></td>
                                   <td><?php echo $trouble->solusi ?></td>
                                   <td><?php echo $trouble->langkah ?></td>
                                   <td><?php echo $trouble->link ?></td>
                                   <td><?php echo $trouble->tgl ?></td>
                                   <td style="text-align:center" width="200px">


                                       <a class="btn btn-info" href="<?php echo base_url("trouble/read/"); ?><?php echo $trouble->id ?>"><span class="glyphicon glyphicon-eye-open" ></span></a>

                                       <a class="btn btn-warning" href="<?php echo base_url("trouble/update/"); ?><?php echo $trouble->id ?>"><span class="glyphicon glyphicon-pencil" ></span></a>

                                       <a class="btn btn-danger" href="<?php echo base_url("trouble/delete/"); ?><?php echo $trouble->id ?>"><span class="glyphicon glyphicon-trash" onclick="return confirm('yakin data dihapus?')"></span></a>

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
                    <?php echo anchor(site_url('trouble/excel'), 'Excel', 'class="btn btn-primary"'); ?>
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
