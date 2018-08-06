<?php


/**
 * @author vicks
 * @copyright 2011
 */
switch($_GET['aksi']){
//form menampilkan seluruh berita
default:
echo "Tabel Alumni <br>
<input type=button value='Tambah Alumni' onclick=\"window.location.href='?page=alumni&aksi=tambahalumni';\">";
echo "<table>
	<td width='20'>NO</td><td width='50'>NIS</td><td width='500'>NAMA</td><td width='70'>AKSI</td>";
	$no=1;
	$sql=mysql_query("SELECT * FROM data_siswa ORDER BY id_siswa desc");
	while ($r=mysql_fetch_array($sql)){
		echo "<tr><td>$no</td>
			<td>$r[nis]</td>
            <td>$r[nama]</td>
            <td>
            
			<a href=?page=alumni&aksi=edit&id=$r[id_siswa]> Ubah</a>
			<a href=?page=alumni&aksi=hapus&id=$r[id_siswa] > Hapus</a></td></tr>";
		$no++;
	}
echo "<table>";
break;

case "tambahalumni":
//Form Tambah Berita
echo "<h2>Tambah Alumni</h2>";



echo "<form action='?page=alumni&aksi=tambah' method='post' enctype=\"multipart/form-data\" >
    <table>
        <tr>
            <td>Nis</td>
             <td><input name=nis type=text size=15 ></td>
            
        </tr>
        <tr>
            <td>Nama</td>
            <td><input name=nama type=text size=55></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><select name=jur>
                    <option value=0 selected>-Pilih Jurusan-</option>";
                    $querykategori= mysql_query("SELECT * FROM kategori_jurusan ORDER BY id_jur");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_jur]>$kategori[nama_jurusan]</option>";
                    }
                    echo "</select></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type=\"file\" name=\"file\" id=\"file\"/></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name=alamat cols=55 row=25></textarea></td>
            
        </tr>
        <tr>
            <td>No HP</td>
            <td><input name=hp type=text size=25></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name=email type=text size=25></td>
        </tr>
        <tr>
            <td>Lulus</td>
            <td><select name=lulus>
                    <option value=0 selected>-Pilih Tahun-</option>";
                    $querykategori= mysql_query("SELECT * FROM ketegori_tahun ORDER BY id_thun");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_thun]>$kategori[nama_thun]</option>";
                    }
                    echo "</select></td>
        </tr>
        <tr>
            <td>Saran</td>
            <td><textarea name=saran cols=55 row=25></textarea></td>
            
        </tr>
        <tr>
            <td colspan=2><input type=submit name='submit' value=Simpan>
                          <input type='reset' value='Reset'>
                          <input type=button value=Kembali onclick=self.history.back()>
            </td> 
        </tr>
    </table>

</form>";
break;
//perintah menyimpan berita
case "tambah":
	
	   if($_POST['submit'] == 'Simpan' && !empty($_FILES) && $_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){
	$fileName = $_FILES['file']['name'];
	$move = move_uploaded_file($_FILES['file']['tmp_name'], 'foto/'.$fileName);
	if($move){
		$sql=("INSERT INTO data_siswa(nis,nama,id_jur,alamat,no_hp,email,id_thun_lulus,foto_siswa,kritik_saran) 
        VALUES ('$_POST[nis]','$_POST[nama]','$_POST[jur]','$_POST[alamat]','$_POST[hp]','$_POST[email]','$_POST[lulus]','$fileName','$_POST[saran]')");
		mysql_query($sql);
        
        echo "<meta http-equiv='refresh' content='0; ?page=alumni'>";
        exit;
	}
    }
    
    
	break;
//perintah menghapus
case "hapus":
	mysql_query("DELETE FROM data_siswa WHERE id_siswa='$_GET[id]'");
    echo "<meta http-equiv='refresh' content='0; ?page=alumni'>";
	break;
//form pengeditan


case "edit":


	$edit=mysql_query("SELECT * FROM data_siswa WHERE id_siswa='$_GET[id]'");
    $r=mysql_fetch_array($edit);
	echo "
	<form name='formEdit' method='post' action='?page=alumni&aksi=ubah'>
	<h2>Ubah ALmuni </h2>
		<table>
            <tr><td>NIS</td><td>:</td><td><input type='text' name='nis' value='$r[nis]' size='50'></td></tr>
            <tr><td>Nama Siswa</td><td>:</td><td><input type='text' name='nama' value='$r[nama]' size='50'></td></tr>
			
            <tr><td><input type='hidden' name='id' value='$r[id_siswa]' size='50'></td></tr>
            <tr>
            <td> Ubah Jurusan</td>
            <td><select name=jur>
                    <option value=0 selected>-Pilih Jurusan-</option>";
                    $querykategori= mysql_query("SELECT * FROM kategori_jurusan ORDER BY id_jur");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_jur]>$kategori[nama_jurusan]</option>";
                    }
                    echo "</select></td>
        </tr>
		
		<tr><td>Alamat</td><td>:</td><td><textarea rows='5' cols='40' name='alamat'>$r[alamat]</textarea></td></tr>
        <tr><td>No HP</td><td>:</td><td><input type='text' name='hp' value='$r[no_hp]' size='50'></td></tr>
        <tr><td>Email</td><td>:</td><td><input type='text' name='email' value='$r[email]' size='50'></td></tr>
        <tr>
            <td>Ubah Tahun</td>
            <td><select name=lulus>
                    <option value=0 selected>-Pilih Tahun-</option>";
                    $querykategori= mysql_query("SELECT * FROM ketegori_tahun ORDER BY id_thun");
                    while($kategori=mysql_fetch_array($querykategori)){
                        echo "<option value=$kategori[id_thun]>$kategori[nama_thun]</option>";
                    }
                    echo "</select></td>
        </tr>
        <tr><td>Saran</td><td>:</td><td><textarea rows='5' cols='40' name='saran'>$r[kritik_saran]</textarea></td></tr>
		<tr><td colspan='3' align='center'>
			<input type=submit name='submit' value=Ubah>
			<input type=button value=Batal onclick=self.history.back()>
		</td></tr>
		</table>
	</form>";
	break;
//queri pengubahan
case "ubah":
	if ($_POST['submit'] == 'Ubah') {
	   $query="UPDATE data_siswa SET  nis='$_POST[nis]',nama='$_POST[nama]',id_jur='$_POST[jur]',alamat='$_POST[alamat]',no_hp='$_POST[hp]',email='$_POST[email]',id_thun_lulus='$_POST[lulus]',kritik_saran='$_POST[saran]'
			WHERE id_siswa= '$_POST[id]'";
		mysql_query($query);
        //echo $query;
		echo "<meta http-equiv='refresh' content='0; ?page=alumni'>";
	}
	break;
    
}
?>