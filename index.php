<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />


<!-- Untuk Memanggil lightbox-->
<script src="js/jquery-1.4.js" type="text/javascript"></script>
<link rel="stylesheet" href="js/lightbox/themes/default/jquery.lightbox.css" type="text/css" />
<script src="js/lightbox/jquery.lightbox.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('.lightbox').lightbox();		    
		});
  </script>


</head>
<body>

<div id="wrapper">
	
			
<div id="head" class="clearfloat">
  <div class="clearfloat">
  
		
      <div class="right"> <img src="images/ads/HD.jpg" alt="" width="960" height="150" /> </div>
  </div>
		
  <div id="navbar" class="clearfloat">
    <ul id="page-bar" class="left clearfloat">
      <li><a href="?t=home">Home</a></li>
	  <li><a href="">Informasi sekolah</a>
			<ul>
				<li><a href="?t=visimisi"><span>Visi & Misi</a></span></li>
				<li><a href="?t=tujuan"><span>Tujuan</a></span></li>					
				<li><a href="?t=sejarah"><span>sejarah</span></a></li>
				<li><a href="?t=struktur"><span>Struktur</span></a></li>
				<li><a href="?t=fasilitas"><span>Fasilitas</a></span></li>	
				<li><a href="?t=ekstra"><span>Ekstrakurikuler</a></span></li>	
				<li><a href="?t=alamat"><span>Suasana Sekolah</a></span></li>	
			</ul>
			</li>
				<li><a href="?t=berita">Berita</a>
			<ul>
				<li><a href="?t=acara">Kumpul Alumni</a></li>
				<li><a href="?t=beasiswa">Berita Beasiswa</a></li>
			</ul>
			</li>
				<li><a href="?t=prestasi">Prestasi</a></li>
				<!--<li><a href="?t=suasana">Suasana sekolah</a></li>-->
				<li><a href="?t=pengembangan">Pengembangan sekolah</a></li>
				<li><a href="?t=lowongan">Lowongan Kerja</a></li>
				<li><a href="?t=galery">Album</a></li>
				<li><a href="?t=profilalumni">Alumni</a></li>
				<li><a href="?t=kontak kami">Kontak kami</a></li>
      </ul>
	  
	  
    <form method="get" id="searchform" action="http://www.work.baleho.com/">
      
    </form>
  </div>
</div>
<div id="page" class="clearfloat">
  <div id="top" class="clearfloat">
    <div id="headline"> 
      <div class="title"></div>
      <div class="meta"></div>
      <?php
      if (isset($_GET['t']) && $_GET['t'] == 'home') {
    	include 'home.php';
		} else if (isset($_GET['t']) && $_GET['t'] == 'berita') {
    	include 'menu/berita/berita.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'visimisi') {
    	include 'menu/informasi/visimisi.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'tujuan') {
    	include 'menu/informasi/tujuan.php';	
	} else if (isset($_GET['t']) && $_GET['t'] == 'sejarah') {
    	include 'menu/informasi/sejarah.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'struktur') {
    	include 'menu/informasi/struktur.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'fasilitas') {
    	include 'menu/informasi/fasilitas.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'ekstra') {
    	include 'menu/informasi/ekstra.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'alamat') {
    	include 'menu/informasi/alamat.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'prestasi') {
    	include 'menu/prestasi/prestasi.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'suasana') {
    	include 'menu/suasana/suasana.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'pengembangan') {
    	include 'menu/pengembangan/pengembangan.php';	
	} else if (isset($_GET['t']) && $_GET['t'] == 'lowongan') {
    	include 'menu/lowongan/lowongan.php';	
	} else if (isset($_GET['t']) && $_GET['t'] == 'acara') {
    	include 'menu/acara/acara.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'galery') {
    	include 'menu/galery/galery.php';
	} else if (isset($_GET['t']) && $_GET['t'] == 'kontak kami') {
    	include 'menu/informasi/kontak.php';	
    }  else if (isset($_GET['t']) && $_GET['t'] == 'detailgalery') {
    	include 'menu/galery/detailgalery.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'profilalumni') {
    	include 'menu/alumni/alumni.php';
     } else if (isset($_GET['t']) && $_GET['t'] == 'detailsatu') {
    	include 'menu/alumni/detailsatu.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'detaildua') {
    	include 'menu/alumni/detaildua.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'lowongan') {
    	include 'menu/lowongan/lowongan.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'readmore') {
    	include 'readmore.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'beasiswa') {
    	include 'menu/beasiswa/beasiswa.php';
    } else if (isset($_GET['t']) && $_GET['t'] == 'lampiran') {
    	include 'menu/beasiswa/lampirkan.php';
	} else {
    	include 'home.php';
	}
    ?>
       </div>
		 
	<div id="sidebar">
     
     <div id="sidebar-top">
        <center><h3>Login Admin</h3><center>
        <p><a href="admin/index.php">::::LOG IN::::</a></p>
      </div>
    <!-- <div id="sidebar-bottom">
        <h3>Formulir dan Info Beasiswa</h3>
        <p>
        <li>
      <hr size="1"/>
      <?php
                        
                        include 'res/koneksi.php';
						$sql=mysql_query("select * from beasiswa  order by id_beasiswa desc limit 5 ");
						while($s=mysql_fetch_array($sql)){	
						?>
                            <p><a href="admin/dokumen/<?php echo $s['file'] ?>"><?php echo $s['nama_beasiswa']?></a></p>
                            
						<?php	
						
						}
				?>
      </li>
        </p>
        </div> -->
		
		<div id="sidebar-bottom">
        <center><h3>Download Formulir Lowongan Kerja</h3></center>
        <p><?php include "menu/lowongan/download_lowongan.php";?></p>
        </div>
		
		<div id="sidebar-bottom">
        <center><h3>Forum Facebook</h3></center>
		<center><li><a href='http://facebook.com/pages/SMAN1CIKARANGSELATAN'><img src="images/facebook.png" /></a></li></center>
		</div>
		
		<div id="sidebar-bottom">
		<center><h3>Kalender</h3></center>
		<div class="c" align="center">
		<?php include "kalender.php"?>
		</div>
  </div>
</div>	 
	
  <div id="bottom" class="clearfloat">
    
      <div class="clearfloat">
        <!--<h3 class="cat_title">GALERY&raquo;</h3>
        
        <p> <?php include "menu/galery/galery.php" ?></p>
      </div>
      <div class="divider"><img src="images/divider.png" alt="" /></div>
      <div class="clearfloat">
        <h3 class="cat_title">Info Lowongan&raquo;</h3>
			
        -->
       <!-- <p> <?php include "menu/lowongan/lowongan.php" ?></p> -->
      </div>
      <div class="divider"></div>
      <div class="navigation">
        
        <div class="right"></div>
      </div>
    </div>
    
<div id="front-popular" class="clearfloat">
  <div id="wrp5">
					<div id="wrp5_inner">
												<div id="u21" style="width:940px; margin-right:0px;">
									<div class="moduletable">

					<p>
	<img alt="" src="images/logo.jpg" style="width: 84px; height: 84px;" align="left" hspace="3"><strong>SMK NEGERI 1 CIKARANG SELATAN</strong><br>
	<span style="font-size: 10px;">SEKOLAH STANDAR NASIONAL</span><br>
	Jalan Raya-Cibarusah<br>
	TELP: 021-629092004, FAX: 0338-665987<br>
	EMAIL : smkn_01ciksel@yahoo.com<br>

	</p>		</div>
	
						</div>						
																								<div class="clrfix"></div>
					</div>	
			</div>

   
  
    
</body>
</html>
