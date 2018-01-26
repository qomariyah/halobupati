<?php if ($content == 'home') { ?>
	<!--Form Section-->
		<div class="inn-body-section inn-booking">
			<div class="container">
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-6">
						<div class="book-title">
							<h2>Halo Bupati</h2>
							<p>Sistem Informasi Pengaduan Masyarakat di Kabupaten Pekalongan.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="book-form inn-com-form">
							<form class="col s12">
								<p><strong>Penting!</strong> Sebelum mengirim aduan pastikan anda sudah login</p>
								<div class="row">
									<div class="input-field col s12">
										<input type="text" class="validate">
										<label>Nama Lengkap</label>
									</div>
									<div class="input-field col s12">
										<input type="email" class="validate">
										<label data-error="wrong" data-success="right">Email</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<select>
											<option value="1">Non Infrastruktur</option>
											<option value="2">Infrastruktur</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="file-field input-field col s12">
										<div class="btn" id="pro-file-upload"> <span>File</span>
											<input type="file">
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text" placeholder="Unggah Foto">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="textarea" class="materialize-textarea" placeholder="Pesan Aduan"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s5">
										<?php echo $image; ?>
									</div>
									<div class="input-field col s7">
										<input type="text" class="validate">
										<label>Masukkan Kode</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input type="submit" value="kirim" class="form-btn">
									</div>
								</div>
							</form>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
	<!--End Form Section-->

	<!--Second Section-->
		<div class="blog hom-com pad-bot-0">
			<div class="container">
				<div class="row">
					<div class="hom1-title">
						<h2>Pengaduan Terkini</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<div class="pull-right">
							<form method="GET" action="">
								<ul class="foot-subsc">
									<li>
										<span class="fa fa-search"></span>&nbsp;&nbsp;
										<input type="text" name="cari" placeholder="Cari...">
									</li>
								</ul>
							</form>
						</div>
						<br>
					</div>
				</div>
				<div class="row">
					<?php for($i = 0; $i < 12; $i++) { ?>
					<div class="room-rat-inn room-rat-bor col-md-4">
						<div class="room-rat-body">
							<div class="room-rat-img">
								<img class="img-responsive" width="50px" height="50px" src="<?= base_url() ?>asset/fe/images/no-image-male-no-frame.png" alt="">
								<p><a href="<?= base_url('detail-aduan') ?>">Nama Pengirim</a> <span>19th January, 2017</span> 
									<a href="#" class="pull-right" data-toggle="tooltip" data-placement="top" title="Hooray!"><span><i class="fa fa-info-circle"></i></a>
								</p>
							</div>
							<div class="dir-rat-star"> <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i> </div>
							<p>Michael &amp; his team have been helping us with our eqiupment finance for the past 5 years - I ...<a href="<?= site_url('detail-aduan')?>"><br>Selengkapnya</a></p>
							<ul>
								<li><a href="#"><span>Suka</span><i class="fa fa-thumbs-o-up"></i></a> </li>
								<li><a href="#"><span>Lapor</span> <i class="fa fa-flag-o"></i></a> </li>
								<li><a href="#"><span>Komentar</span> <i class="fa fa-commenting-o"></i></a> </li>
								<li><a href="#"><span>Bagikan</span>  <i class="fa fa-facebook"></i></a> </li>
								<li><a href="#"><i class="fa fa-twitter"></i></a> </li>
							</ul>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="db-pagi">
					<ul class="pagination">
						<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_left</i></a>
						</li>
						<li class="waves-effect"><a href="#!">1</a>
						</li>
						<li class="waves-effect"><a href="#!">2</a>
						</li>
						<li class="waves-effect active"><a href="#!">3</a>
						</li>
						<li class="waves-effect"><a href="#!">4</a>
						</li>
						<li class="waves-effect"><a href="#!">5</a>
						</li>
						<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a>
						</li>
					</ul>
				</div>
				<br>
				<br>
			</div>
		</div>
	<!--End Second Section-->
<?php } ?>

<?php if ($content == 'tentang-hb') { ?>
	<!--ABOUT SECTION-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4><?= $judul; ?></h4>
					<p>Curabitur auctor, massa sed interdum ornare, nulla sem vestibulum purus, eu maximus magna urna eu nunc.</p>
					<p> </p>
					<ul>
						<li><a href="<?= site_url() ?>">Home</a>
						</li>
						<li><a href="<?= site_url('tentang_hb')?>"><?= $judul; ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="inn-body-section">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2>Tentang Halo Bupati</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Quisque at volutpat nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="about-left">
							<h2>Welcome to <span>My Hotel</span></h2>
							<h4>Cras eu nisl quis est mattis placerat. Etiam ut ante et lacus imperdiet sagittis a finibus mauris.</h4>
							<p>Proin nisl mi, eleifend in faucibus et, venenatis eu turpis. Ut hendrerit eleifend odio. Nullam ullamcorper viverra ex quis tempus. In hac habitasse platea dictumst. Vestibulum sed tempor metus. </p>
							<p>Duis sollicitudin augue nec bibendum mollis. Proin luctus diam vel hendrerit dictum. Nunc tincidunt nibh in sem blandit venenatis. Suspendisse rutrum ultricies porttitor. Quisque at volutpat nibh.Aliquam dapibus turpis mollis felis fermentum bibendum. In finibus a nulla vitae dapibus. Nam non suscipit urna. Vestibulum et lacinia justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> <a href="#" class="link-btn">Call to us: (+404) 142 21 23 78</a> </div>
					</div>
					<div class="col-md-6">
						<div class="about-right"> <img src="<?= base_url()?>asset/fe/images/about.jpg" alt=""> </div>
					</div>
				</div>
			</div>
		</div>
	<!--END ABOUT SECTION-->
<?php } ?>

<?php if ($content == 'kontak') { ?>
	<!--CONTACT US SECTION-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4><?= $judul; ?></h4>
					<p>Curabitur auctor, massa sed interdum ornare, nulla sem vestibulum purus, eu maximus magna urna eu nunc.</p>
					<p> </p>
					<ul>
						<li><a href="<?= site_url() ?>">Home</a>
						</li>
						<li><a href="<?= site_url('kontak') ?>"><?= $breadcrumb; ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="inn-body-section">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2><?= $judul; ?></h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Quisque at volutpat nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 new-con">
						<h2><span>Halo</span> Bupati</h2>
						<p>Sistem Informasi Pengaduan Masyarakat di Kabupaten Pekalongan Berbasis Android dan Web.</p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="<?= base_url()?>asset/fe/images/icon/20.png" alt="">
						<h4>Sekretariat Daerah</h4>
						<p>Jalan Alun-Alun Utara No.1 Kajen 51161 Pekalongan, Jawa Tengah</p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="<?= base_url()?>asset/fe/images/icon/22.png" alt="">
						<h4>Kontak</h4>
						<p> <a href="tel://0099999999" class="contact-icon">Telepon: 0285 381000, 381001</a>
							<br> <a href="tel://0099999999" class="contact-icon">Fax: 0285 381006</a>
							<br> <a href="<?= prep_url("mailto:mytestmail@gmail.com") ?>" class="contact-icon">Email: info@pekalongankab.go.id</a> </p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 new-con"> <img src="<?= base_url()?>asset/fe/images/icon/21.png" alt="">
						<h4>Website</h4>
						<p> <a href="<?= prep_url('indonesia.go.id/') ?>" target="_blank">Pemerintah Pusat Republik Indonesi</a>
							<br> <a href="<?= prep_url('jatengprov.go.id') ?>" target="_blank">Pemerintah Provinsi Jawa Tengah</a>
							<br> <a href="<?= prep_url('pekalongankab.go.id') ?>" target="_blank">Pemerintah Daerah Kab. Pekalongan</a>
							<br> <a href="<?= prep_url('dinkominfo.pekalongankab.go.id') ?>" target="_blank">DINKOMINFO Kabupaten Pekalongan</a> </p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5600.09178216648!2d109.58844134093758!3d-7.025400089047388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e701fed3ba6949f%3A0x44ae395888b82ded!2sKantor+Sekretariat+Daerah+Kabupaten+Pekalongan!5e0!3m2!1sid!2sid!4v1516677149016" allowfullscreen></iframe>
			</div>
		</div>
		<!--END CONTACT US SECTION-->
<?php } ?>

<?php if ($content == 'profil') { ?>
	<!--DASHBOARD SECTION-->
		<div class="db-cent col-md-12">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="db-profile">
				<center>
					<img class="materialboxed" src="<?= base_url() ?>asset/fe/images/no-image-male-no-frame.png" alt="">
				</center>
				<h4>Qomariyah</h4>
				<p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
			</div>
			<div class="db-profile-view">
				<table>
					<thead>
						<tr>
							<th>Aduan</th>
							<th>Level</th>
							<th>Bergabung</th>
							<th>Kiriman</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>32</td>
							<td>Citizen</td>
							<td>22 November 2010</td>
							<td><a href="<?= site_url('aduan-saya')?>" class="waves-effect waves-light event-regi">Lihat aduan saya</a></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="db-profile-edit">
				<form class="col s12">
					<div>
						<label class="col s4">No. KTP</label>
						<div class="input-field col s8">
							<input type="number" value="332332332332" class="validate"> </div>
					</div>
					<div>
						<label class="col s4">Nama Lengkap</label>
						<div class="input-field col s8">
							<input type="text" value="Qomariyah" class="validate"> </div>
					</div>
					<div>
						<label class="col s4">Username</label>
						<div class="input-field col s8">
							<input type="text" value="qoriiiy" class="validate"> </div>
					</div>
					<div>
						<label class="col s4">Password</label>
						<div class="input-field col s8">
							<input type="password" value="Qomariyah" class="validate"> </div>
					</div>
					<div>
						<label class="col s4">Jenis Kelamin</label>
						<div class="input-field col s8">
							<select>
								<option>Laki - Laki</option>
								<option>Perempuan</option>
							</select>
						</div>
					</div>
					<div>
						<label class="col s4">Tempat Lahir</label>
						<div class="input-field col s8">
							<input type="text" value="Pekalongan" class="validate"> </div>
					</div>
					<div>
						<label class="col s4">Tanggal Lahir</label>
						<div class="input-field col s8">
							<input type="text" id="from" name="from"> </div>
					</div>
					<div>
						<label class="col s4">Email</label>
						<div class="input-field col s8">
							<input type="email" value="qomariyah2211@gmail.com" class="validate"> </div>
					</div>
					<div>
						<label class="col s4">No. Telepon</label>
						<div class="input-field col s8">
							<input type="text" value="0185419635" class="validate"> </div>
					</div>
					<div>
						<div class="file-field input-field">
							<div class="btn" id="pro-file-upload"> <span>Foto</span>
								<input type="file"> </div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="Unggah Foto Profil"> </div>
						</div>
					</div>
					<div>
						<label class="col s4">Alamat</label>
						<div class="input-field col s8">
							<input type="text" value="Bahurekso No. 304 Kajen" class="validate"> </div>
					</div>
					<div>
						<div class="input-field col s8">
							<input type="submit" value="Perbarui data" class="waves-effect waves-light pro-sub-btn" id="pro-sub-btn"> </div>
					</div>
				</form>
			</div>
		</div>
	<!--END DASHBOARD SECTION-->
<?php } ?>

<?php if ($content == 'lihat-aduan-saya') { ?>
	<!--DASHBOARD SECTION-->
		<div class="db-cent col-md-12">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="page-head">
				<h2>Aduan Saya</h2>
				<div class="head-title">
					<div class="hl-1"></div>
					<div class="hl-2"></div>
					<div class="hl-3"></div>
				</div>
			</div>
				<div class="container-fluid">
					<div class="row">
						<!--TYPOGRAPHY SECTION-->
						<div class="col-md-4">
							<div class="db-profile">
								<center>
									<img src="<?= base_url() ?>asset/fe/images/no-image-male-no-frame.png" alt="" class="materialboxed">
								</center>
								<h4>Qomariyah</h4>
								<p>Bio bio bio bio bio bio bio bio bio bio bio bio bio bio bio bio bio bio bio bio bio bio bio</p>
							</div>
						</div>
						<div class="col-md-8">
							<div class="head-typo typo-com">
								<!--<h2>Aduan Saya</h2>-->
								<!--EVENT-->
								<div class="aminities">
									<ul>
										<?php for($i = 0; $i < 4; $i++) { ?>
											<li class="aminities-line"> <i class="fa fa-map-marker" aria-hidden="true"></i>
												<div class="row amini-body">
													<div class="col-md-4"> <img class="materialboxed" src="<?= base_url() ?>asset/fe/images/no-image.png" alt="" /> </div>
													<div class="col-md-8">
														<h4><a href="<?= site_url('detail-aduan') ?>">Nama Pengirim</a> <span>19th January, 2017</span></h4>
														<p>It is a  Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' wills still in their infancy. long established fact that a reader will be distracted by the readable ... <a href="<?= site_url('detail-aduan')?>"> Selengkapnya</a></p>
													</div>
												</div>
											</li>
										<?php } ?>
									</ul>
								</div>
								<!--END EVENT-->
							</div>
						</div>
						<!--END TYPOGRAPHY SECTION-->
					</div>
				</div>

		</div>
	<!--END DASHBOARD SECTION-->
<?php } ?>

<?php if ($content == 'detail-aduan') { ?>
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4>Detail Aduan</h4>
					<p>Detail aduan yang telah masyarakat kirimkan.<p>
							<ul>
								<li><a href="<?= site_url() ?>">Beranda</a>
								</li>
								<li><a href="#">Aduan</a>
								</li>
								<li class="active"><a href="#">Detail Aduan</a>
								</li>
							</ul>
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<div class="inn-body-section pad-bot-55">
			<div class="container">
				<div class="row">
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-4">
						<div class="gall-grid">
							<img data-caption="Caption foto aduan" src="<?= base_url() ?>asset/fe/images/no-image.png" class="materialboxed" alt="Foto Aduan" />
						</div>
					</div>
					<div class="col-md-8">
						<div class="head-typo typo-com">
							<div class="room-rat-img">
								<img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" width="50px" height="50px" src="<?= base_url() ?>asset/fe/images/no-image-male-no-frame.png" alt="">
								<h2>Nama Pengirim <small><?= date('H:s d - m - Y') ?></small></h2>
							</div>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
							<!--EVENT-->
							<div class="aminities">
								<ul>
									<li class="aminities-line"> <i class="fa fa-clock-o" aria-hidden="true"></i>
										<div class="room-rat-img">
											<img class="img-responsive" width="30px" height="30px" src="<?= base_url() ?>asset/fe/images/no-image-male-no-frame.png" alt="">
											<h4>Komentar Pertama <small><?= date('H:s d - m - Y') ?></small></h4>
										</div>
										<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search.</p>
									</li>
									<li class="aminities-line"> <i class="fa fa-clock-o" aria-hidden="true"></i>
										<div class="room-rat-img">
											<img class="img-responsive" width="30px" height="30px" src="<?= base_url() ?>asset/fe/images/no-image-male-no-frame.png" alt="">
											<h4>Komentar Kedua <small><?= date('H:s d - m - Y') ?></small></h4>
										</div>
										<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search.</p>
									</li>
								</ul>
							</div>
							<form action="" method="POST">
								<div class="input-field col s9">
									<textarea class="materialize-textarea" placeholder="Tulis Komentar..."></textarea>
								</div>
								<div class="input-field col s2">
									<input class="waves-effect waves-light form-btn" type="submit" name="komentar" value="KIRIM">
								</div>
							</form>
							<!--END EVENT-->
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
<?php } ?>

<?php if ($content == 'petunjuk-dan-syarat') { ?>
	<div class="inn-banner">
		<div class="container">
			<div class="row">
				<h4>Petunjuk &amp; Syarat</h4>
				<p>Petunjuk dan syarat penggunaan Halo Bupati.</p>
				<p> </p>
				<ul>
					<li><a href="<?= site_url() ?>">Home</a>
					</li>
					<li><a href="<?= site_url('petunjuk_syarat') ?>">Petunjuk &amp; Syarat</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="hom-com">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="hp-section">
							<div class="hp-over">
								<ul class="nav nav-tabs hp-over-nav">
									<li class="active">
										<a data-toggle="tab" href="#home"><img src="<?= base_url() ?>asset/fe/images/icon/a9.png" alt=""> <span class="tab-hide">Petunjuk</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#menu1"><img src="<?= base_url() ?>asset/fe/images/icon/a8.png" alt=""> <span class="tab-hide">Syarat</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#menu2"><img src="<?= base_url() ?>asset/fe/images/icon/a10.png" alt=""> <span class="tab-hide">FAQs</span>
										</a>
									</li>
									<li>
										<a data-toggle="tab" href="#menu3"><img src="<?= base_url() ?>asset/fe/images/icon/a11.png" alt=""> <span class="tab-hide">Dasar Hukum</span>
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="home" class="tab-pane fade in active tab-space">
										<div class="res-menu"> <img src="<?= base_url() ?>asset/fe/images/menu/1.jpg" alt="">
											<h3>salted fried chicken <span>$45</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
										<div class="res-menu"> <img src="<?= base_url() ?>asset/fe/images/menu/2.jpg" alt="">
											<h3>salted fried chicken <span>$64</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
										<div class="res-menu"> <img src="<?= base_url() ?>asset/fe/images/menu/3.jpg" alt="">
											<h3>salted fried chicken <span>$45</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
										<div class="res-menu"> <img src="<?= base_url() ?>asset/fe/images/menu/4.jpg" alt="">
											<h3>salted fried chicken <span>$64</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
										<div class="res-menu"> <img src="<?= base_url() ?>asset/fe/images/menu/5.jpg" alt="">
											<h3>salted fried chicken <span>$45</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
										<div class="res-menu"> <img src="<?= base_url() ?>asset/fe/images/menu/6.jpg" alt="">
											<h3>salted fried chicken <span>$64</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
										<div class="res-menu"> <img src="<?= base_url() ?>asset/fe/images/menu/7.jpg" alt="">
											<h3>salted fried chicken <span>$45</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
										<div class="res-menu mar-bot-0"> <img src="<?= base_url() ?>asset/fe/images/menu/8.jpg" alt="">
											<h3>salted fried chicken <span>$64</span></h3> <span class="menu-item">Tomato soup with croutons, small ceasar salad, apple juice</span> </div>
									</div>
									<div id="menu1" class="tab-pane fade tab-space">
										<div class="hp-main-overview">
											<ul>
												<li>Occupancy: <span>Max four Persons</span>
												</li>
												<li>Size : <span>800 sq. feet</span>
												</li>
												<li>View : <span>Sea or Garden view</span>
												</li>
												<li>Room Service : <span>Available per request</span>
												</li>
												<li>Terraces : <span>Balcony</span>
												</li>
												<li>Free Pickup Facility : <span>Yes</span>
												</li>
												<li>Internet Free <span>Yes</span>
												</li>
												<li>Gym : <span class="ov-yes">Yes</span>
												</li>
											</ul>
										</div>
									</div>
									<div id="menu2" class="tab-pane fade tab-space">
										<div class="row">
											<div class="col-md-6 hp-ov-fac"> <img src="<?= base_url() ?>asset/fe/images/hotel/1.jpg" alt=""> </div>
											<div class="col-md-6">
												<p>Maecenas erat lorem, vulputate sed ex at, vehicula dignissim risus. Nullam non nisi congue elit cursus tempus. Nunc vel ante nec libero semper maximus. Donec cursus sed massa eget commodo. Phasellus semper neque id iaculis malesuada. Nulla efficitur dui vitae orci blandit tempor. Mauris sed venenatis nibh, sed sodales risus.</p>
												<p>Nam sit amet tortor in elit fermentum consectetur et sit amet eros. Sed varius velit at eros tempor sodales. Fusce at enim at lectus sollicitudin pharetra at in risus. Donec ut semper turpis. Maecenas lobortis ante ut eros scelerisque, at semper augue ullamcorper.</p>
											</div>
										</div>
									</div>
									<div id="menu3" class="tab-pane fade tab-space">
										<p>Maecenas erat lorem, vulputate sed ex at, vehicula dignissim risus. Nullam non nisi congue elit cursus tempus. Nunc vel ante nec libero semper maximus. Donec cursus sed massa eget commodo. Phasellus semper neque id iaculis malesuada. Nulla efficitur dui vitae orci blandit tempor. Mauris sed venenatis nibh, sed sodales risus.</p>
										<p>Nam sit amet tortor in elit fermentum consectetur et sit amet eros. Sed varius velit at eros tempor sodales. Fusce at enim at lectus sollicitudin pharetra at in risus. Donec ut semper turpis. Maecenas lobortis ante ut eros scelerisque, at semper augue ullamcorper.</p>
										<p>Maecenas erat lorem, vulputate sed ex at, vehicula dignissim risus. Nullam non nisi congue elit cursus tempus. Nunc vel ante nec libero semper maximus. Donec cursus sed massa eget commodo. Phasellus semper neque id iaculis malesuada. Nulla efficitur dui vitae orci blandit tempor. Mauris sed venenatis nibh, sed sodales risus.</p>
										<p>Nam sit amet tortor in elit fermentum consectetur et sit amet eros. Sed varius velit at eros tempor sodales. Fusce at enim at lectus sollicitudin pharetra at in risus. Donec ut semper turpis. Maecenas lobortis ante ut eros scelerisque, at semper augue ullamcorper.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if ($content == 'data-opd') { ?>
	<!--TOP SECTION-->
		<!--TOP BANNER-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4><?= $judul; ?></h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
						<p>
							<ul>
								<li><a href="<?= site_url() ?>">Home</a>
								</li>
								<li><a href="<?= site_url('data-opd') ?>"><?= $breadcrumb; ?></a>
								</li>
							</ul>
				</div>
			</div>
		</div>
		<!--TOP SECTION-->
		<div class="inn-body-section pad-bot-55">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2><?= $judul; ?></h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
					</div>
					<!--TYPOGRAPHY SECTION-->
					<div class="col-md-12">
						<div class="head-typo typo-com">
							<h2>Events: April 2017</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
							<!--EVENT-->
							<?php foreach ($data_opd as $row) { ?>
							<div class="row events">
								<div class="col-md-2"> <img src="<?= base_url() ?>asset/fe/images/no-image.png" alt="" /> </div>
								<div class="col-md-8">
									<h4><?= $row->nama_opd; ?></h4> <span><?= $row->alamat; ?></span>
									<p>Telepon : <?= $row->no_telp;?> &nbsp; Email : <?= $row->email; ?></p>
								</div>
								<div class="col-md-2"> <a href="<?= site_url('detail-opd')?>" class="waves-effect waves-light event-regi">Selengkapnya</a> </div>
							</div>
							<!--END EVENT-->
							<?php } ?>
						</div>
					</div>
					<!--END TYPOGRAPHY SECTION-->
				</div>
			</div>
		</div>
	<!--TOP SECTION-->
<?php } ?>

<?php if ($content == 'detail-opd') { ?>
	<!--ABOUT SECTION-->
		<div class="inn-banner">
			<div class="container">
				<div class="row">
					<h4><?= $judul; ?></h4>
					<p>Curabitur auctor, massa sed interdum ornare, nulla sem vestibulum purus, eu maximus magna urna eu nunc.</p>
					<p> </p>
					<ul>
						<li><a href="<?= site_url() ?>">Home</a>
						</li>
						<li><a href="<?= site_url('data-opd')?>">Data OPD</a>
						</li>
						<li><a href="<?= site_url('detail-opd')?>">Detail OPD</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="inn-body-section">
			<div class="container">
				<div class="row">
					<div class="page-head">
						<h2>Dinas Pendidikan Dan Kebudayaan</h2>
						<div class="head-title">
							<div class="hl-1"></div>
							<div class="hl-2"></div>
							<div class="hl-3"></div>
						</div>
						<p>Quisque at volutpat nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="about-left">
							<h2>Welcome to <span>My Hotel</span></h2>
							<h4>Cras eu nisl quis est mattis placerat. Etiam ut ante et lacus imperdiet sagittis a finibus mauris.</h4>
							<p>Proin nisl mi, eleifend in faucibus et, venenatis eu turpis. Ut hendrerit eleifend odio. Nullam ullamcorper viverra ex quis tempus. In hac habitasse platea dictumst. Vestibulum sed tempor metus. </p>
							<p>Duis sollicitudin augue nec bibendum mollis. Proin luctus diam vel hendrerit dictum. Nunc tincidunt nibh in sem blandit venenatis. Suspendisse rutrum ultricies porttitor. Quisque at volutpat nibh.Aliquam dapibus turpis mollis felis fermentum bibendum. In finibus a nulla vitae dapibus. Nam non suscipit urna. Vestibulum et lacinia justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> <a href="#" class="link-btn">Call to us: (+404) 142 21 23 78</a> </div>
					</div>
					<div class="col-md-6">
						<div class="about-right"> <img src="<?= base_url()?>asset/fe/images/about.jpg" alt=""> </div>
					</div>
				</div>
			</div>
		</div>
	<!--END ABOUT SECTION-->
<?php } ?>