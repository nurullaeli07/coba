    <body class="bg-black">
        <div class="form-box-width">
            <div class="header">Contoh Aplikasi Login Multi User</div>
                <div class="body bg-gray">
                    

<div class="row">
	<!-- blok menu kiri -->
	<div class="col-sm-3">

	<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"><span class="glyphicon glyphicon-th-list"></span> Menu Utama</h3>
                                </div> <!--./akhir box-header -->
			<div class="box-body">
			<?php
			$this->load->view('template/v_menu');
			?>
			</div>	<!--./akhir box-body--> 
		</div> <!--./akhir box box-primary-->

		<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"><span class="glyphicon glyphicon-user"></span> Profil User</h3>
                                </div> <!--./akhir box-header -->
			<div class="box-body">
			<div align="center"><img src="<?php echo base_url().'images/'.$this->session->userdata('photo');?>"/></div>
			<div align="center">Hai, <?php echo $this->session->userdata('nama_lengkap');?><br>
			Anda login sebagai Bagian <?php echo $this->session->userdata('level');?></div>
			</div>	<!--./akhir box-body--> 
		</div> <!--./akhir box box-primary-->

		
	</div> <!--./akhir blok menu kiri-->

	<!-- blok konten kanan -->
	<div class="col-sm-9">
		 <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Selamat Datang</h3>
                                </div> <!--./akhir box-header -->
			<div class="box-body">
			<p align="justify">Bagian ini hanya menerangkan bagaimana pembagian hak akses user menggunakan CodeIgniter, untuk penggunaan selanjutnya silahkan ganti view nya dengan view design anda, dan menu-nya di custom sesuai dengan kebutuhan menu navigasi di project yang akan anda bangun.</p>
			<p>
			Untuk Contoh-contoh lainnya silahkan kunjungi blog saya di :</p>
			<h1><a href="http://ozs.web.id/download/" target="_blank">http://ozs.web.id/download/</a></h1>
			<p>
			</div>	<!--./akhir box-body--> 
		</div> <!--./akhir box box-primary-->						
	</div>	<!-- akhir blok konten kanan -->
</div>



					
                </div>
                <div class="footer">                                                               
                    <p>&copy; Oyazhuryachna</p>  
                    
                </div>
        </div>
    </body>
