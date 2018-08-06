<?php 
/**
 * @author vicks
 * @copyright 2011
 */
include ('config/koneksi.php');
            
            $halaman=$_GET['page'];
            if ($halaman=="home"){
                include("modul/utama.php");
            }elseif($halaman=="berita"){
                include("modul/post.php");
                
            }elseif($halaman=="alumni"){
                include("modul/alumni.php");
                
            }elseif($halaman=="kategori"){
                include("modul/kategori.php");
            }elseif($halaman=="kategori2"){
                include("modul/kategori2.php");
                
            }elseif($halaman=="inputgaleri"){
                include ("modul/formgaleri.php");
                
            }elseif($halaman=="beasiswa"){
                include ("modul/beasiswa.php");
                
            }elseif($halaman=="inputkategorigaleri"){
                include("modul/katgaleri.php");
                
            }elseif($halaman=="galeri"){
                include("modul/gallery.php");
            }elseif($halaman=="editgaleri"){
                include("edit-gallery.php");
            }elseif($halaman=="download"){
                include("modul/donload.php");
            }
        
?>