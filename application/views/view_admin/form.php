<?php if ($content == 'tambah-administrator') { ?>
	<div class="row">
        <div class="col-md-12">
            <div class="panel panel-warning">
				<div class="panel-heading">                                
					<h3 class="panel-title"><?= $breadcrumb ?></h3>
				</div>   
				<div class="panel-body">
					<form enctype="multipart/form-data" method="POST" action="<?= site_url('hbadmin/create_admin') ?>">
						<div class="col-md-5">
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
		                            <input type="text" name="id_admin" minlength="6" maxlength="6" class="form-control" required placeholder="ID Admin" />
		                        </div>
		                        <span class="help-block">Hanya 6 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
		                            <input type="text" name="nama_admin" maxlength="50" class="form-control" required placeholder="Nama Lengkap" />
		                        </div>
		                        <span class="help-block">Maksimal 50 karakter</span>
		                	</div>	
		                	<div class="form-grou">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
		                            <input type="text" name="username" minlength="8" maxlength="20" class="form-control" required placeholder="Username" />
		                        </div>
		                        <span class="help-block">Minimal 8 & maksimal 20 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-key"></span></span>
		                            <input type="password" name="pass" minlength="8" class="form-control" required placeholder="Password" />
		                        </div>
		                        <span class="help-block">Minimal 8 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-phone"></span></span>
		                            <input type="text" name="no_telepon" maxlength="15" class="form-control number" required placeholder="No. Telepon" />
		                        </div>
		                        <span class="help-block">Maksimal 15 karakter</span>
		                	</div>
		                	<div class="form-group">
                                <div class="input-group">    
                                	<span class="input-group-addon"><span class="fa fa-align-right"></span></span>
                                	<select class="form-control select" name="jk">
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-align-right"></span></span>
		                            <select class="form-control select" name="level">
	                                    <option>Super Admin</option>
	                                    <option>Administrator</option>
	                                    <option>Admin OPD</option>
	                                    <option>Bupati</option>
	                                </select>
		                        </div>
		                        <span class="help-block">Level user</span>
		                	</div>
		                	<div class="form-group">                                          
			                    <div class="input-group">
		                            <input type="submit" class="btn btn-success btn-rounded"  data-toggle="tooltip" data-placement="top" title="Tekan untuk menyimpan data" value="Simpan" /> &nbsp;
		                            <input type="reset" class="btn btn-danger btn-rounded" value="Reset" data-toggle="tooltip" data-placement="top" title="Tekan untuk mengosongkan inputan" /> &nbsp;
		                            <a href="" class="btn btn-warning btn-rounded" data-toggle="tooltip" data-placement="top" title="Tekan untuk membatalkan">Batal</a>                          
		                        </div>
		                	</div>
						</div>
						<div class="col-md-7">
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
		                            <input type="text" name="tmp_lahir" maxlength="50" class="col-md-6 form-control" required placeholder="Tempat Lahir" />
		                        </div>
		                        <span class="help-block">Maksimal 50 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
		                            <input type="text" name="tgl_lahir" maxlength="50" class="datepicker form-control" required placeholder="Tanggal Lahir" />
		                        </div>
		                        <span class="help-block">Maksimal 50 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
		                            <input type="email" name="email" maxlength="50" class="form-control" required placeholder="Email" />
		                        </div>
		                        <span class="help-block">Maksimal 50 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-home"></span></span>
		                            <input type="text" name="alamat" maxlength="100" class="form-control" required placeholder="Alamat" />
		                        </div>
		                        <span class="help-block">Maksimal 100 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group col-md-12">
			                        <span class="input-group-addon"><span class="fa fa-picture-o"></span></span>
		                            <input type="file" name="foto" multiple class="file" data-preview-file-type="any" required />
		                        </div>
		                        <span class="help-block">Mendukung file JPG dan PNG maksimal 500KB</span>
		                	</div>
						</div>
					</form>
				</div>                         
			</div>
		</div>
	</div>
<?php } ?>

<?php if ($content == 'edit-administrator') { ?>
	<div class="row">
        <div class="col-md-12">
            <div class="panel panel-warning">
				<div class="panel-heading">                                
					<h3 class="panel-title"><?= $breadcrumb ?></h3>
				</div>   
				<div class="panel-body">
					<form enctype="multipart/form-data" method="POST" action="<?= site_url('hbadmin/update_admin') ?>">
						<?php foreach ($data_admin as $row) { ?>
						<div class="col-md-5">
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
			                        <input type="hidden" name="ft" value="<?= $row->foto ?>">
			                        <input type="hidden" name="tm" value="<?= $row->thumbnail ?>">
		                            <input type="text" name="id_admin" minlength="6" maxlength="6" class="form-control" required placeholder="ID Admin" readonly value="<?= $row->id_admin ?>" />
		                        </div>
		                        <span class="help-block">Hanya 6 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
		                            <input type="text" name="nama_admin" maxlength="50" class="form-control" required placeholder="Nama Lengkap" value="<?= $row->nama_admin?>" />
		                        </div>
		                        <span class="help-block">Maksimal 50 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
		                            <input type="text" name="username" minlength="8" maxlength="20" class="form-control" required placeholder="Username" value="<?= $row->username ?>" />
		                        </div>
		                        <span class="help-block">Minimal 8 & maksimal 20 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-key"></span></span>
		                            <input type="password" name="pass" minlength="8" class="form-control" required placeholder="Password" />
		                        </div>
		                        <span class="help-block">Minimal 8 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-phone"></span></span>
		                            <input type="number" name="no_telepon" maxlength="15" class="form-control" required placeholder="No. Telepon" value="<?= $row->no_telepon ?>" />
		                        </div>
		                        <span class="help-block">Maksimal 15 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-align-right"></span></span>
		                            <select class="form-control select" name="level">
	                                    <option><?= $row->level ?></option>
	                                    <option>Super Admin</option>
	                                    <option>Administrator</option>
	                                    <option>Bupati</option>
	                                </select>
		                        </div>
		                        <span class="help-block">Level user</span>
		                	</div>
		                	<div class="form-group">                                          
			                    <div class="input-group">
		                            <input type="submit" class="btn btn-success btn-rounded"  data-toggle="tooltip" data-placement="top" title="Tekan untuk menyimpan data" value="Simpan" /> &nbsp;
		                            <input type="reset" class="btn btn-danger btn-rounded" value="Reset" data-toggle="tooltip" data-placement="top" title="Tekan untuk mengosongkan inputan" /> &nbsp;
		                            <a href="" class="btn btn-warning btn-rounded" data-toggle="tooltip" data-placement="top" title="Tekan untuk membatalkan">Batal</a>                          
		                        </div>
		                	</div>
						</div>
						<div class="col-md-7">
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
		                            <input type="email" name="email" maxlength="50" class="form-control" required placeholder="Email" value="<?= $row->email ?>" />
		                        </div>
		                        <span class="help-block">Maksimal 50 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="fa fa-home"></span></span>
		                            <input type="text" name="alamat" maxlength="100" class="form-control" required placeholder="Alamat" value="<?= $row->alamat ?>" />
		                        </div>
		                        <span class="help-block">Maksimal 100 karakter</span>
		                	</div>
							<div class="form-group">                                         
			                    <div class="input-group col-md-12">
			                        <span class="input-group-addon"><span class="fa fa-picture-o"></span></span>
		                            <input type="file" name="foto" multiple class="file" data-preview-file-type="any" />
		                        </div>
		                        <span class="help-block">Mendukung file JPG dan PNG maksimal 500KB</span>
		                	</div>
						</div>
						<?php } ?>
					</form>
				</div>                         
			</div>
		</div>
	</div>
<?php } ?>
<?php if ($content == 'tambah-sektor') { ?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form class="form-horizontal" method="POST" action="<?= site_url('hbadmin/create_sektor') ?>">
                <div class="panel panel-colorful">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?= $breadcrumb ?></h3>
                    </div>
                    <div class="panel-body">                                                                        
                        
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nama Sektor</label>
                            <div class="col-md-6 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="text" class="form-control" name="sektor" placeholder="Nama Sektor" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <input type="reset" class="btn btn-danger btn-rounded" value="Kosongkan">                                  
                        <input type="submit" class="btn btn-success btn-rounded pull-right" value="Tambah">
                    </div>
                </div>
            </form>
		</div>
	</div>
<?php } ?>
<?php if ($content == 'edit-sektor') { ?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php foreach($data_sektor as $row) { ?>
			<form class="form-horizontal" method="POST" action="<?= site_url('hbadmin/update_sektor') ?>">
                <div class="panel panel-colorful">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?= $breadcrumb ?></h3>
                    </div>
                    <div class="panel-body">                                                                        
                        
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nama Sektor</label>
                            <div class="col-md-6 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="hidden" name="id" value="<?= $row->id_sektor ?>">
                                    <input type="hidden" name="sektor_lama" value="<?= $row->sektor ?>">
                                    <input type="text" class="form-control" value="<?= $row->sektor ?>" name="sektor" placeholder="Nama Sektor" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <input type="reset" class="btn btn-danger btn-rounded" value="Kosongkan" data-toggle="tooltip" data-placement="top" title="Tekan untuk mengosongkan form">                                  
                        <input type="submit" class="btn btn-success btn-rounded pull-right" value="Tambah" data-toggle="tooltip" data-placement="top" title="Tekan untuk menambahkan data">
                    </div>
                </div>
            </form>
            <?php } ?>
		</div>
	</div>
<?php } ?>

<?php if ($content == 'tambah-opd') { ?>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form class="form-horizontal" method="POST" action="<?= site_url('hbadmin/create_sektor') ?>">
                <div class="panel panel-colorful">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?= $breadcrumb ?></h3>
                    </div>
                    <div class="panel-body">                                                                        
                        
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">ID. OPD</label>
                            <div class="col-md-8 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="text" class="form-control" name="id_opd" placeholder="ID. OPD" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nama OPD</label>
                            <div class="col-md-8 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="text" class="form-control" name="nama_opd" placeholder="Nama OPD" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Singkatan OPD</label>
                            <div class="col-md-8 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="text" class="form-control" name="singkatan_opd" placeholder="Singkatan OPD" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nama Kepala</label>
                            <div class="col-md-8 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="text" class="form-control" name="kepala_opd" placeholder="Nama Kepala" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Alamat OPD</label>
                            <div class="col-md-8 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="text" class="form-control" name="alamat_opd" placeholder="Alamat OPD" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Foto OPD</label>
                            <div class="col-md-8 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="file" class="form-control" name="foto" placeholder="Foto OPD" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">NO. Telepon OPD</label>
                            <div class="col-md-8 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="text" class="form-control" name="telp_opd" placeholder="NO. Telepon OPD" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Email OPD</label>
                            <div class="col-md-8 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="text" class="form-control" name="email_opd" placeholder="Email OPD" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Fax OPD</label>
                            <div class="col-md-8 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="text" class="form-control" name="fax_opd" placeholder="Fax OPD" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Website OPD</label>
                            <div class="col-md-8 col-xs-12">                                            
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-tags"></span></span>
                                    <input type="text" class="form-control" name="website_opd" placeholder="Website OPD" />
                                </div>                                            
                                <span class="help-block">This is sample of text field</span>
                            </div>
                        </div>
                    </div>
					<div class="form-group">   
                        <label class="col-md-3 col-xs-12 control-label">Website OPD</label>
                        <div class="col-md-8 col-xs-12">    
	                        <div class="input-group">
	                        	<span class="input-group-addon"><span class="fa fa-align-right"></span></span>
	                            <select class="form-control select" name="level">
	                                <option>Super Admin</option>
	                                <option>Administrator</option>
	                                <option>Bupati</option>
	                            </select>
	                        </div>
                       		<span class="help-block">Level user</span>
                        </div>
                	</div>
                    <div class="panel-footer">
                        <input type="reset" class="btn btn-danger btn-rounded" value="Kosongkan" data-toggle="tooltip" data-placement="top" title="Tekan untuk mengosongkan form">                                  
                        <input type="submit" class="btn btn-success btn-rounded pull-right" value="Tambah" data-toggle="tooltip" data-placement="top" title="Tekan untuk menambahkan data">
                    </div>
                </div>
            </form>
		</div>
	</div>
<?php } ?>