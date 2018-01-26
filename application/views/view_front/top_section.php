<div class="menu-section">
			<div class="container">
				<div class="row">
					<div class="top-bar">
						<ul>
							<li><a href="<?= site_url('tentang')?>">Tentang Halo Bupati</a>
							</li>
							<li><a href="<?= site_url('kontak')?>">Kontak</a>
							</li>
							<li><a href="<?= site_url('petunjuk-dan-syarat')?>">Petunjuk &amp; Syarat</a>
							</li>
							<li><a class='dropdown-button' href='#' data-activates='dropdown1'> Akun Saya <i class="fa fa-angle-down"></i></a>
							</li>
						</ul>
					</div>
					<div class="all-drop-down">
						<!-- Dropdown Structure -->
						<ul id='dropdown1' class='dropdown-content drop-con-man'>
							<li>
								<a href="<?= site_url('profil')?>"><img src="<?= base_url() ?>asset/fe/images/icon/2.png" alt=""> Profil</a>
							</li>
							<li>
								<a href="<?= site_url('aduan-saya')?>"><img src="<?= base_url() ?>asset/fe/images/icon/14.png" alt=""> Aduan Saya</a>
							</li>
							<li>
								<a href="#!" data-toggle="modal" data-target="#modal2"><img src="<?= base_url() ?>asset/fe/images/icon/5.png" alt=""> Register</a>
							</li>
							<li>
								<a href="#!" data-toggle="modal" data-target="#modal1"><img src="<?= base_url() ?>asset/fe/images/icon/6.png" alt=""> Log In</a>
							</li>
							<li>
								<a href="#!" data-toggle="modal" data-target="#modal3"><img src="<?= base_url() ?>asset/fe/images/icon/13.png" alt=""> Lupa Kata Sandi</a>
							</li>
						</ul>
						<!-- ROOM Dropdown Structure -->
						<ul id='drop-room' class='dropdown-content drop-con-man'>
							<li><a href="<?= site_url('data-opd')?>">Data OPD</a>
							</li>
							<li><a href="room-details.html">Room Details</a>
							</li>
							<li><a href="room-details-block.html">Room Details Block</a>
							</li>
							<li><a href="room-details-1.html">Room Parallax</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="logo">
						<a href="<?= site_url()?>"><img src="<?= base_url() ?>asset/fe/images/logo.png" alt="" />
						</a>
					</div>
					<div class="menu-bar">
						<ul>
							<li><a href="<?= site_url()?>" >Beranda</a
							</li>
							<li><a href="#" class='dropdown-button' data-activates='drop-room'>Rooms <i class="fa fa-angle-down"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>