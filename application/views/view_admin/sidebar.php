
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?= base_url()?>asset/be/index.html">Halo Bupati</a>
                        <a href="<?= base_url()?>asset/be/#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="<?= base_url()?>asset/be/#" class="profile-mini">
                            <img src="<?= base_url()?>files/administrator/thumb/<?= $this->session->userdata('thumb'); ?>" alt="<?= $this->session->userdata('nama_admin'); ?>"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?= base_url()?>files/administrator/thumb/<?= $this->session->userdata('thumb'); ?>" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><?= $this->session->userdata('nama_admin'); ?></div>
                                <div class="profile-data-title"><?= $this->session->userdata('level'); ?></div>
                            </div>
                            <div class="profile-controls">
                                <a href="<?= base_url()?>asset/be/pages-profile.html" data-toggle="tooltip" data-placement="top" title="Info Administrator" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="<?= base_url()?>asset/be/pages-messages.html" data-toggle="tooltip" data-placement="top" title="Pesan" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="<?= @$Dashboard ?>">
                        <a href="<?= site_url('hbadmin')?>"><span class="fa fa-home"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>              
                    <li class="xn-openable <?= @$Aduan ?>">
                        <a href="#"><span class="fa fa-envelope"></span> <span class="xn-text">Aduan</span></a>
                        <ul>
                            <li class="<?= @$aduan_hari_ini ?>"><a href="<?= site_url('hbadmin/aduan_hari_ini')?>"><span class="fa fa-clock-o"></span> Hari Ini<span class="pull-right badge badge-info">14</span></a></li>
                            <li><a href="<?= site_url('hbadmin/tambah_administrator')?>"><span class="fa fa-download"></span> Diterima<span class="pull-right badge badge-danger">14</span></a></li>
                            <li><a href="<?= site_url('hbadmin/tambah_administrator')?>"><span class="fa fa-upload"></span> Didisposisikan<span class="pull-right badge badge-warning">14</span></a></li>
                            <li><a href="<?= site_url('hbadmin/tambahadministrator')?>"><span class="fa fa-cogs"></span> Dalam Penanganan<span class="pull-right badge badge-warning">14</span></a></li>
                            <li><a href="<?= site_url('hbadmin/tambahadministrator')?>"><span class="fa fa-check"></span> Sudah Selesai<span class="pull-right badge badge-success">14</span></a></li>
                            <li><a href="<?= site_url('hbadmin/tambahadministrator')?>"><span class="fa fa-trash-o"></span> <span class="pull-right badge badge-success">14</span>Bukan Kewenangan</a></li>
                            <li><a href="<?= site_url('hbadmin/tambahadministrator')?>"><span class="fa fa-table"></span> Semua Aduan<span class="pull-right badge badge-success">14</span></a></li>
                        </ul>
                    </li>                 
                    <li class="xn-openable <?= @$Komentar ?>">
                        <a href="#"><span class="fa fa-comment"></span> <span class="xn-text">Komentar</span></a>
                        <ul>
                            <li class="<?= @$komentar_hari_ini ?>"><a href="<?= site_url('hbadmin/komentar_hari_ini')?>"><span class="fa fa-clock-o"></span> Hari Ini<span class="pull-right badge badge-info">14</span></a></li>
                            <li><a href="<?= site_url('hbadmin/tambah_administrator')?>"><span class="fa fa-clock-o"></span> Kemarin<span class="pull-right badge badge-danger">14</span></a></li>
                            <li><a href="<?= site_url('hbadmin/tambah_administrator')?>"><span class="fa fa-table"></span> Semua<span class="pull-right badge badge-warning">14</span></a></li>
                        </ul>
                    </li>                
                    <li class="xn-openable <?= @$Administrator ?>">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Administrator</span></a>
                        <ul>
                            <li class="<?= @$tambah_administrator ?>"><a href="<?= site_url('hbadmin/tambah_administrator')?>"><span class="fa fa-plus"></span> Tambah Administrator</a></li>
                            <li class="<?= @$data_administrator ?>"><a href="<?= site_url('hbadmin/administrator')?>"><span class="fa fa-table"></span> Data Adminitrator</a></li>
                        </ul>
                    </li>                        
                    <li class="xn-openable <?= @$opd ?>">
                        <a href="#"><span class="fa fa-building"></span> <span class="xn-text">OPD</span></a>
                        <ul>
                            <li class="<?= @$topd ?>"><a href="<?= site_url('hbadmin/tambahopd')?>"><span class="fa fa-plus"></span> Tambah OPD</a></li>
                            <li class="<?= @$dopd ?>"><a href="<?= site_url('hbadmin/opd')?>"><span class="fa fa-table"></span> Data OPD</a></li>
                        </ul>
                    </li>                       
                    <li class="xn-openable <?= @$Sektor ?>">
                        <a href="#"><span class="fa fa-tags"></span> <span class="xn-text">Sektor</span></a>
                        <ul>
                            <li class="<?= @$tsektor ?>"><a href="<?= site_url('hbadmin/tambahsektor')?>"><span class="fa fa-plus"></span> Tambah Sektor</a></li>
                            <li class="<?= @$ssektor ?>"><a href="<?= site_url('hbadmin/sektor')?>"><span class="fa fa-table"></span> Data Sektor</a></li>
                        </ul>
                    </li>                 
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">User</span></a>
                        <ul>
                            <li><a href="<?= site_url('hbadmin/filemanager')?>"><span class="fa fa-plus"></span> Tambah User</a></li>
                            <li><a href="<?= site_url('hbadmin/dministrator')?>"><span class="fa fa-table"></span> Data User</a></li>
                        </ul>
                    </li>   
                    <li class="xn-openable <?= @$Laporan ?>">
                        <a href="#"><span class="fa fa-file-text"></span> <span class="xn-text">Laporan</span></a>
                        <ul>
                            <li class="<?= @$komentar_hari_ini ?>"><a href="<?= site_url('hbadmin/komentar_hari_ini')?>"><span class="fa fa-clock-o"></span> Mingguan<span class="pull-right badge badge-info">14</span></a></li>
                            <li><a href="<?= site_url('hbadmin/tambah_administrator')?>"><span class="fa fa-clock-o"></span> Bulanan<span class="pull-right badge badge-danger">14</span></a></li>
                            <li><a href="<?= site_url('hbadmin/tambah_administrator')?>"><span class="fa fa-clock-o"></span> Tahunan<span class="pull-right badge badge-danger">14</span></a></li>
                            <li><a href="<?= site_url('hbadmin/tambah_administrator')?>"><span class="fa fa-table"></span> Semua<span class="pull-right badge badge-warning">14</span></a></li>
                        </ul>
                    </li> 
                    <li class="<?= @$Filemanager ?>">
                        <a href="<?= site_url('hbadmin/filemanager')?>"><span class="fa fa-folder"></span> <span class="xn-text">File Manager</span></a>                        
                    </li> 
                    <li class="<?= @$Pengaturan ?>">
                        <a href="<?= site_url('hbadmin')?>"><span class="fa fa-cogs"></span> <span class="xn-text">Pengaturan</span></a>                        
                    </li>  
                </ul>
                <!-- END X-NAVIGATION -->
            </div>