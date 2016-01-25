<?php
		if($this->session->userdata('level')=='Kepegawaian'){
		
		echo '
		<span class="glyphicon glyphicon-floppy-disk"></span> <a href="#">Tambah Pegawai </a><br/><br/>
		<span class="glyphicon glyphicon-book"></span> <a href="#">Laporan Data Pegawai </a><br/><br/>
		';
		
		}
		else if($this->session->userdata('level')=='Keuangan'){
		
		echo '
		<span class="glyphicon glyphicon-euro"></span> <a href="#">Pembayaran Gaji </a><br/><br/>
		<span class="glyphicon glyphicon-book"></span> <a href="#">Laporan Penggajian </a><br/><br/>
		';
		
		} else {
		echo '
		<span class="glyphicon glyphicon-user"></span> <a href="#">Laporan Data Pegawai </a><br/><br/>
		<span class="glyphicon glyphicon-book"></span> <a href="#">Laporan Penggajian</a><br/><br/>
		';
		
		}
		
		echo '<span class="glyphicon glyphicon-log-out"></span> <a href="'.base_url().'login/user/logout/">Logout</a>';
?>		