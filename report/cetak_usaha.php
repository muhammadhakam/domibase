<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['btnCetak'])){
	$id = $_POST['id_pend'];
	}

	$tanggal = date("m/y");
	$tgl = date("d/m/y");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK SURAT</title>
</head>

<body style="margin-left:40px; margin-right:40px">
	<center>
	<table style="width:100%">
				<td>
					<img src="./logo_pekalongan.png" style="width: 80px;">
				</td>
				<td>
					<center>
					PEMERINTAH KABUPATEN PEKALONGAN
						<br>KECAMATAN PANINGGARAN
						<br>DOMIYANG
						<br>Jalan Raya Desa Domiyang-Paninggaran-Pekalongan</p>
					</center>
				</td>
			</tr>
			
		</tbody>
	</table>
	</center>
          <center>________________________________________________________________________</center>          

		<?php
			$sql_tampil = "select * from tb_pdd
			where id_pend ='$id'";
			
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<p>
			SURAT KETERANGAN USAHA
			<br>No Surat :
			<?php echo $data['id_pend']; ?>/Ket.Domisili/
			<?php echo $tanggal; ?>
		</p>
	</center>
	<p>Yang bertandatangan dibawah ini:</P>
	<table style="margin-left:30px;">
		<tbody >
			<tr>
				<td>1. Nama</td>
				<td>   :</td>
				<td>VIRDHA ANGGYTA</td>
			</tr>
			<tr>
				<td>2. Jabatan</td>
				<td>   :</td>
				<td>Sekretaris Desa</td>
			</tr>
			<tr>
				<td>3. Alamat</td>
				<td>   :</td>
				<td>Desa Domiyang, Kec. Paninggaran, Kab. Pekalongan</td>
			</tr>
		</tbody>
	</table>
	<p>Menerangkan bahwa:</P>
	<table style="margin-left:30px;">
		<tbody>
			

			<tr>
				<td>1.</td>
				<td>Nama</td>
				<td>:</td>
				<td>
					<?php echo $data['nama']; ?>
				</td>
			</tr>

			

			<tr>
				<td>2.</td>
				<td>Tempat/Tanggal lahir</td>
				<td>:</td>
				<td>
					<?php echo $data['tempat_lh']; ?>/
					<?php echo $data['tgl_lh']; ?>
				</td>
			</tr>


			<tr>
				<td>3.</td>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<?php echo $data['dukuh']; ?>
				</td>
			</tr>

			<tr>
				<td></td>
				<td>RT/RW</td>
				<td>:</td>
				<td>
					<?php echo $data['rt']; ?>/
					<?php echo $data['rw']; ?>
				</td>
			</tr>

			<tr>
				<td></td>
				<td>Kel/Desa</td>
				<td>:</td>
				<td>
					<?php echo $data['desa']; ?>
				</td>
			</tr>

			<tr>
				<td></td>
				<td>Kecamatan</td>
				<td>:</td>
				<td>
					Paninggaran
				</td>
			</tr>

			<tr>
				<td></td>
				<td>Kabupaten</td>
				<td>:</td>
				<td>
					Pekalongan
				</td>
			</tr>

			<tr>
				<td></td>
				<td>Propinsi</td>
				<td>:</td>
				<td>
					Jawa Tengah
				</td>
			</tr>

			<tr>
				<td>4.</td>
				<td>NIK</td>
				<td>:</td>
				<td>
					<?php echo $data['nik']; ?>
				</td>
			</tr>

			<tr>
				<td>5.</td>
				<td>Pekerjaan</td>
				<td>:</td>
				<td>
					<?php echo $data['pekerjaan']; ?>
				</td>
			</tr>

			<tr>
				<td>6.</td>
				<td>Keperluan</td>
				<td>:</td>
				<td>
						<?php echo $_POST["keperluan"]; ?>
				</td>
			</tr>

			<tr>
				<td>7.</td>
				<td>Keterangan</td>
				<td>:</td>
				<td>
				Bahwa orang tersebut benar-benar  warga Desa Domiyang dan Mempunyai usaha <b><?php echo $_POST ["nama_usaha"] ?></b>
				</td>
			</tr>

			


		</tbody>
	</table>
	<p>Demikian Surat ini dibuat, agar dapat digunakan sebagai mana mestinya.</P>
	<table style="width:100%">
		<tbody>
			<tr>
				<td>
				</td>
				<td></td>
				<td>
		        Domiyang ,<?php echo $tgl; ?>
				</td>
			</tr>
			<tr>
				<td>
					Pemegang
					<br>
		            <br>
		            <br>
		            <br>
				</td>
				<td></td>
				<td>
		             an. Kepala Desa Domiyang
		             <br>
		             <br>
		             <br>
		             <br>
				</td>
			</tr>

			<tr>
				<td>
				<?php echo $data['nama']; ?>
				</td>
				<td></td>
				<td>
				VIRDHA ANGGYTA
				</td>
			</tr>

		</tbody>
	</table>
    <?php } ?>
	<script>
		window.print();
	</script>

</body>

</html>