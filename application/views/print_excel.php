<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

<tr>

 	<th>no</th>
	<th>Cover</th>
	<th>Judul</th>
	<th>Penulis	</th>
	<th>Penerbit</th>
	<th>Genre</th>
	<th>Sinopsis</th>

 </tr>

</thead>

<tbody>

<?php $i=1; foreach($buku as $key) { ?>

<tr>

 	<td align="center"><?php echo $no; ?></td>
	<td align="center"><img src=<?=base_url("assets/uploads")."/".$key->img?> alt="" align="center"></td>
	<td align="center"><?php echo $key->judul?></td>
	<td align="center"><?php echo $key->penulis ?></td>
	<td align="center"><?php echo $key->penerbit ?></td>
	<td align="center"><?php echo $key->genre ?></td>
	<td align="center"><?php echo $key->sinopsis ?></td>

 </tr>

<?php $i++; } ?>

</tbody>

</table>