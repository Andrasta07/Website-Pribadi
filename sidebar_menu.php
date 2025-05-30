<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Menu Sidebar</title>
  <style>
    .sidebar-menu .menus .item.active i {
     color: #3cb371;
  border: 2px solid #3cb371;
    }
    
    }
  </style>

<?php

// pengecekan menu aktif
// jika menu dashboard dipilih, menu dashboard aktif

if ($_GET['module'] == 'dashboard') { ?>
	<div class="item active d-flex align-items-center">
		<i class="fas fa-chart-line"></i>
		<a href="?module=dashboard"> Dashboard </a>
	</div>
<?php } else { ?>
	<div class="item d-flex align-items-center">
		<i class="fas fa-chart-line"></i>
		<a href="?module=dashboard"> Dashboard </a>
	</div>


<?php
}

// jika menu member (tampil data / tampil detail / form entri / form ubah / tampil pencarian) dipilih, menu member aktif
if ($_GET['module'] == 'member' || $_GET['module'] == 'tampil_detail_member' || $_GET['module'] == 'form_entri_member' || $_GET['module'] == 'form_ubah_member' || $_GET['module'] == 'tampil_pencarian_member') { ?>
	<div class="item active d-flex align-items-center">
		<i class="far fa-user" style="color:#3cb371;"></i>
		<a href="?module=member"> Pegawai </a>
	</div>
<?php
}
// jika tidak dipilih, menu member tidak aktif
else { ?>
	<div class="item d-flex align-items-center">
		<i class="far fa-user"></i>
		<a href="?module=member"> Pegawai </a>
	</div>
<?php
}

// jika menu laporan dipilih, menu laporan aktif
if ($_GET['module'] == 'laporan') { ?>
	<div class="item active d-flex align-items-center">
		<i class="far fa-file-alt" style="color:#3cb371;"></i>
		<a href="?module=laporan"> Laporan </a>
	</div>
<?php
}
// jika tidak dipilih, menu laporan tidak aktif
else { ?>
	<div class="item d-flex align-items-center">
		<i class="far fa-file-alt"></i>
		<a href="?module=laporan"> Laporan </a>
	</div>
<?php
}

// jika menu tentang aplikasi dipilih, menu tentang aplikasi aktif
if ($_GET['module'] == 'tentang') { ?>
	<div class="item active d-flex align-items-center">
		<i class="fas fa-info" style="color:#3cb371;"></i>
		<a href="?module=tentang"> Tentang Aplikasi </a>
	</div>
<?php
}
// jika tidak dipilih, menu tentang aplikasi tidak aktif
else { ?>
	<div class="item d-flex align-items-center">
		<i class="fas fa-info"></i>
		<a href="?module=tentang"> Tentang Aplikasi </a>
	</div>
<?php
}

// jika logout dipilih (berarti diarahkan ke logout.php)
if (basename($_SERVER['PHP_SELF']) == 'logout.php') { ?>
	<div class="item active d-flex align-items-center">
		<i class="fas fa-sign-out-alt" style="color:#3cb371;"></i>
		<a href=login.php"> Logout </a>
	</div>
<?php
} else { ?>
	<div class="item d-flex align-items-center">
		<i class="fas fa-sign-out-alt"></i>
		<a href="login.php"> Logout </a>
	</div>
<?php
}

?>