<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<style>
	table{
		border-collapse: collapse;
		width:70%;
		margin: 0 auto;
	}
	table th{
		border:1px solid #000;
		padding: 3px;
		font-weight: bold;
		text-align: center;
	}
	table td{
		border: 1px solid #000;
		padding: 3px;
		vertical-align: top;
	}
	</style>
</head>

<body>
	<table>
		<tr>
			<!-- <td colspan="" style="border:0px"></td> -->
			<td colspan="" align="center" style="border: 0px"><br><br>
			<img src="<?php echo base_url('/assets/img/cashier.png'); ?>" alt="" align="center" width="100" height="100"> 
			</td>

			<td colspan="" style="text-align: left; border: 0px">
			<br><br>
				<h1>GEDEBOOK:)</h1>
			</td>

			
		</tr>
	</table>

	<table>
		<tr>
			<td colspan="7" style="border:0px">
				<hr size="3" style="background-color: black"></hr>
				<h2 style="text-align: center">Daftar Produk</h2>
			</td>	
		</tr>

		<tr>
			<th>no</th>
			<th>Cover</th>
			<th>Judul</th>
			<th>Penulis	</th>
			<th>Penerbit</th>
			<th>Genre</th>
			<th>Sinopsis</th>

		</tr>

		<?php $no=0; foreach($buku as $key){
			$no++;
			?>
			<tr>
				<td align="center"><?php echo $no; ?></td>
				<td align="center"><img src=<?=base_url("assets/uploads")."/".$key->img?> alt="" align="center"></td>
				<td align="center"><?php echo $key->judul?></td>
				<td align="center"><?php echo $key->penulis ?></td>
				<td align="center"><?php echo $key->penerbit ?></td>
				<td align="center"><?php echo $key->genre ?></td>
				<td align="center"><?php echo $key->sinopsis ?></td>				
			</tr>
			<?php }?>
		</table>
		<p style="text-align: center"><a href="<?php echo base_url()?>index.php/Cetak/cetakBuku/<?php 	echo $key->kd_buku ?>">Cetak PDF</a></p>
		
</body>
</html>

