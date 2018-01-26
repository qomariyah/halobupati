<?php if ($content == 'administrator') { ?>
	
    <div class="row">
        <div class="col-md-12">
            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
				<div class="panel-heading">                                
					<h3 class="panel-title"><?= $breadcrumb ?></h3>
					<div class="pull-right">
						<a href="<?= site_url('hbadmin/tambah_administrator') ?>" class="btn btn-rounded btn-success" data-toggle="tooltip" data-placement="left" title="Tekan untuk menambah data">Tambah</a>
					</div>                            
				</div>
				<div class="panel-body">
					<table class="table datatable">
						<thead>
							<tr>
								<th>No</th>
								<th>ID Admin</th>
								<th>Username</th>
								<th>No. Telepon</th>
								<th>Email</th>
								<th>Foto</th>
								<th>Alamat</th>
								<th>Level</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no = 1;
								foreach ($data_admin as $row) { ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $row->id_admin ?></td>
								<td><?= $row->username ?></td>
								<td><?= $row->no_telepon ?></td>
								<td><?= $row->email ?></td>
								<td><img src="<?= base_url() ?>files/administrator/thumb/<?= $row->thumbnail ?>" height=30 width=30></td>
								<td><?= $row->alamat ?></td>
								<td><?= $row->level ?></td>
								<td>
									<a href="<?= site_url('hbadmin/edit_admin/'.$row->id_admin) ?>" class="btn btn-xs btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="Tekan untuk mengedit data">Edit</a>
									<?php
										if ($row->aktif == '0') { ?>
											<a href="<?= site_url('hbadmin/aktifkan_admin/'.$row->id_admin) ?>" class="btn btn-xs btn-rounded btn-warning" data-toggle="tooltip" data-placement="top" title="Tekan untuk mengaktifkan administrator">Aktifkan</a> 
										<?php }else{ ?>
											<a href="<?= site_url('hbadmin/nonaktifkan_admin/'.$row->id_admin) ?>" class="btn btn-xs btn-rounded btn-warning" data-toggle="tooltip" data-placement="top" title="Tekan untuk menonaktifkan administrator">Non Aktifkan</a> 
										<?php }
									?>
									<a href="#" class="btn btn-xs btn-rounded btn-danger mb-control" data-toggle="tooltip" data-placement="top" title="Tekan untuk menghapus data" data-box="#mb-deladmin">Hapus</a> 

									<!-- Modal delete admin -->
							        <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-deladmin">
							            <div class="mb-container">
							                <div class="mb-middle">
							                    <div class="mb-title"><span class="fa fa-trash-o"></span> Hapus <strong>Data</strong> ?</div>
							                    <div class="mb-content">
							                        <p>Apakah Anda yakin akan menghapus data dari sistem?</p>                    
							                        <p>Berhati-hatilah, data mungkin tidak bisa dikembalikan!.</p>
							                    </div>
							                    <div class="mb-footer">
							                        <div class="pull-right">
							                            <a href="<?= site_url('hbadmin/delete_admin/'.$row->id_admin.'/'.$row->foto.'/'.$row->thumbnail) ?>" class="btn btn-danger btn-lg">Ya</a>
							                            <button class="btn btn-info btn-lg mb-control-close">Tidak</button>
							                        </div>
							                    </div>
							                </div>
							            </div>
							        </div>
							        <!-- Modal delete admin -->
								</td>
							</tr>
							<?php } ?>
                        </tbody>
					</table>
				</div>
			</div>
        <!-- END DEFAULT DATATABLE -->
                            
      	</div>
    </div>
<?php } ?>
<?php if ($content == 'sektor') { ?>
	
    <div class="row">
        <div class="col-md-12">
        	<!-- Notif -->
            <?php
            	if ($this->uri->segment(3) == 'tambah-berhasil') {
            		echo '
            		<div class="alert alert-info" role="alert">
                		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                		<strong>Berhasil!</strong> Berhasil menambahkan data.
            		</div>';
            	}elseif ($this->uri->segment(3) == 'edit-berhasil'){
            		echo '
            		<div class="alert alert-info" role="alert">
                		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                		<strong>Berhasil!</strong> Berhasil mengubah data.
            		</div>';
            	}elseif($this->uri->segment(3) == 'hapus-berhasil'){
            		echo '
            		<div class="alert alert-danger" role="alert">
                		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                		<strong>Berhasil!</strong> Berhasil menghapus data.
            		</div>';
            	}
            ?>
        	<!-- end notif -->

            <!-- START DEFAULT DATATABLE -->
            <div class="panel panel-default">
				<div class="panel-heading">                                
					<h3 class="panel-title"><?= $breadcrumb ?></h3>
					<?= @$status ?>
					<div class="pull-right">
						<a href="<?= site_url('hbadmin/tambahsektor') ?>" class="btn btn-rounded btn-success" data-toggle="tooltip" data-placement="left" title="Tekan untuk menambah data">Tambah</a>
					</div>                              
				</div>
				<div class="panel-body">
					<table class="table datatable">
						<thead>
							<tr>
								<th>No.</th>
								<th>Sektor</th>
								<th>Dibuat</th>
								<th>Diubah</th>
								<th>Oleh</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$no = 1;
								foreach ($data_sektor as $row) { ?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $row->sektor ?></td>
								<td><?= date('H:i d-m-Y', strtotime($row->dibuat)) ?></td>
								<td><?= date('H:i d-m-Y', strtotime($row->diubah)) ?></td>
								<td><?= $row->nama_admin ?></td>
								<td>
									<a href="<?= site_url('hbadmin/editsektor/'.$row->id_sektor.'/'.$row->sektor) ?>" class="btn btn-xs btn-rounded btn-info" data-toggle="tooltip" data-placement="top" title="Tekan untuk mengedit data">Edit</a>
									<a href="#" class="btn btn-xs btn-rounded btn-danger mb-control" data-toggle="tooltip" data-placement="top" title="Tekan untuk menghapus data" data-box="#mb-deladmin" onClick="noty({text: 'Successful action', layout: 'topRight', type: 'success'});">Hapus</a> 

									<!-- Modal delete admin -->
							        <div class="message-box message-box-danger animated fadeIn" data-sound="alert" id="mb-deladmin">
							            <div class="mb-container">
							                <div class="mb-middle">
							                    <div class="mb-title"><span class="fa fa-trash-o"></span> Hapus <strong>Data</strong> ?</div>
							                    <div class="mb-content">
							                        <p>Apakah Anda yakin akan menghapus data dari sistem?</p>                    
							                        <p>Berhati-hatilah, data mungkin tidak bisa dikembalikan!.</p>
							                    </div>
							                    <div class="mb-footer">
							                        <div class="pull-right">
							                            <a href="<?= site_url('hbadmin/delete_sektor/'.$row->id_sektor.'/'.$row->sektor) ?>" class="btn btn-danger btn-lg">Ya</a>
							                            <button class="btn btn-info btn-lg mb-control-close">Tidak</button>
							                        </div>
							                    </div>
							                </div>
							            </div>
							        </div>
							        <!-- Modal delete admin --></td>
							</tr>
							<?php $no++; } ?>
                        </tbody>
					</table>
				</div>
			</div>
        <!-- END DEFAULT DATATABLE -->
                            
      	</div>
    </div>
<?php } ?>