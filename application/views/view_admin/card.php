<?php if ($content == 'opd') { ?>
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-colorful">
                <div class="panel-heading">                                
                    <h3 class="panel-title"><?= $breadcrumb ?></h3>
                    <form method="GET" action="">
                        <div class="col-md-3">
                            <div class="form-group">                                         
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-search"></span></span>
                                    <input type="text" name="cari" class="form-control" placeholder="Cari <?= $content ?>" />
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="pull-right">
                        <a href="<?= site_url('hbadmin/tambah_administrator') ?>" class="btn btn-rounded btn-success" data-toggle="tooltip" data-placement="left" title="Tekan untuk menambah data">Tambah</a>
                    </div>                            
                </div>
                <div class="panel-body">
                <?php foreach ($data_opd as $row) { ?>
                    <!-- PROFILE WIDGET -->
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body profile bg-default">
                                <div class="profile-image">
                                    <img 
                                    <?php
                                        if ($row->foto == "") {
                                            echo "src='".base_url()."asset/fe/images/no-image.png'" ;
                                        }else{
                                            echo "src='".base_url()."files/opd/thumb/".$row->thumb."'";
                                        }
                                    ?>
                                    
                                    alt="<?= $row->thumb ?>">
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name">
                                        <?php
                                            if (strlen($row->singkatan) <= 30) {
                                                echo $row->singkatan;
                                            }else{
                                                echo substr($row->singkatan, 0, 30)." ...";
                                            }
                                        ?>
                                    <div class="profile-data-title">
                                        <?php
                                            if (strlen($row->nama_opd) <= 30) {
                                                echo $row->nama_opd;
                                            }else{
                                                echo substr($row->nama_opd, 0, 30)." ...";
                                            }
                                        ?>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body bg-danger list-group">
                                <a href="#" class="list-group-item"><span class="fa fa-phone"></span> <?= $row->no_telp ?></a>
                                <a href="#" class="list-group-item" data-toggle="tooltip" data-placement="top" title="<?= $row->alamat ?>"><span class="fa fa-map-marker"></span> 
                                    <?php
                                        if (strlen($row->alamat) <= 30) {
                                            echo $row->alamat;
                                        }else{
                                            echo substr($row->alamat, 0, 30)." ...";
                                        }
                                    ?>
                                </a>
                                <a href="<?= prep_url("mailto:".$row->email) ?>" class="list-group-item" data-toggle="tooltip" data-placement="top" title="<?= $row->email ?>"><span class="fa fa-envelope"></span>
                                    <?php
                                        if (strlen($row->email) <= 24) {
                                            echo $row->email;
                                        }else{
                                            echo substr($row->email, 0, 24)." ...";
                                        }
                                    ?>
                                </a>
                                <a href="<?= prep_url($row->website) ?>" target="_blank" class="list-group-item" data-toggle="tooltip" data-placement="top" title="<?= $row->website ?>"><span class="fa fa-globe"></span>
                                    <?php
                                        if (strlen($row->website) <= 25) {
                                            echo $row->website;
                                        }else{
                                            echo substr($row->website, 0, 25)." ...";
                                        }
                                    ?>
                                </a>
                            </div> 
                            <div class="panel-footer">
                                <center>
                                    <a href="<?= site_url('hbadmin/edit_admin/'.$row->id_admin) ?>" class="btn btn-xs btn-rounded btn-success" data-toggle="tooltip" data-placement="top" title="Tekan untuk melihat detail data">Detail</a>
                                    <a href="<?= site_url('hbadmin/edit_admin/'.$row->id_admin) ?>" class="btn btn-xs btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="Tekan untuk mengedit data">Edit</a>
                                    <a href="#" class="btn btn-xs btn-rounded btn-danger mb-control" data-toggle="tooltip" data-placement="top" title="Tekan untuk menghapus data" data-box="#mb-deladmin">Hapus</a> 
                                </center>
                            </div>                           
                        </div>
                    </div>
                    <!-- END PROFILE WIDGET -->
                <?php } ?>
            </div>
            <div class="panel-footer">
                <center>
                    <ul class="pagination pagination-sm">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul> 
                </center>   
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if ($content == 'administrator') { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Important!</strong> Press on any icon to get code.
            </div>
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
                <div class="panel-heading">                                
                    <h3 class="panel-title"><?= $breadcrumb ?></h3>
                    <form method="GET">
                        <div class="col-md-3">
                            <div class="form-group">                                         
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-search"></span></span>
                                    <input type="text" name="cari" class="form-control" placeholder="Cari <?= $content ?>" />
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="pull-right">
                        <a href="<?= site_url('hbadmin/tambah_administrator') ?>" class="btn btn-rounded btn-success" data-toggle="tooltip" data-placement="left" title="Tekan untuk menambah data">Tambah</a>
                    </div>                            
                </div>
                <div class="panel-body">
                <?php foreach ($data_admin as $row) { ?>
                    <!-- PROFILE WIDGET -->
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-body profile bg-default">
                                <div class="profile-image">
                                    <img src="<?= base_url() ?>files/administrator/thumb/<?= $row->thumbnail ?>" alt="<?= $row->nama_admin ?>">
                                </div>
                                <div class="profile-data">
                                    <div class="profile-data-name"><?= $row->nama_admin ?></div>
                                    <div class="profile-data-title"><?= $row->level ?></div>
                                </div>
                            </div>
                            <div class="panel-body bg-danger list-group">
                                <a href="#" class="list-group-item"><span 
                                    class="
                                    <?php if($row->jk == 'L'){
                                        echo 'fa fa-male';
                                    }else{
                                        echo 'fa fa-female';
                                    } ?>"
                                    ></span> 
                                    <?php if($row->jk == 'L'){
                                        echo 'Laki-laki';
                                    }else{
                                        echo 'Perempuan';
                                    } ?></a>
                                <a href="#" class="list-group-item"><span class="fa fa-envelope"></span> <?= $row->email ?></a>
                                <a href="#" class="list-group-item"><span class="fa fa-map-marker"></span> <?= $row->alamat ?></a>
                                <a href="#" class="list-group-item"><span class="fa fa-phone"></span> <?= $row->no_telepon ?></a>
                            </div> 
                            <div class="panel-footer">
                                <center>
                                    <a href="<?= site_url('hbadmin/edit_admin/'.$row->id_admin) ?>" class="btn btn-xs btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="Tekan untuk mengedit data">Edit</a>
                                    <?php
                                        if ($row->aktif == '0') { ?>
                                            <a href="<?= site_url('hbadmin/aktifkan_admin/'.$row->id_admin) ?>" class="btn btn-xs btn-rounded btn-warning" data-toggle="tooltip" data-placement="top" title="Tekan untuk mengaktifkan administrator">Aktifkan</a> 
                                        <?php }else{ ?>
                                            <a href="<?= site_url('hbadmin/nonaktifkan_admin/'.$row->id_admin) ?>" class="btn btn-xs btn-rounded btn-warning" data-toggle="tooltip" data-placement="top" title="Tekan untuk menonaktifkan administrator">Non Aktifkan</a> 
                                        <?php }
                                    ?>
                                    <a href="#" class="btn btn-xs btn-rounded btn-danger mb-control" data-toggle="tooltip" data-placement="top" title="Tekan untuk menghapus data" data-box="#mb-deladmin">Hapus</a> 
                                </center>
                            </div>                           
                        </div>
                    </div>
                    <!-- END PROFILE WIDGET -->
                <?php } ?>
            </div>
            <div class="panel-footer">
                <center>
                    <ul class="pagination pagination-sm">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul> 
                </center>   
            </div>
        </div>
    </div>
</div>
<?php } ?>