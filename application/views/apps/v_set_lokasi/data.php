<?php
$tot=0;
$offset=0;
foreach ($response1 as $obj1){	
	//if($offset==""){$offset=0;}
	$offset++;
	$tot++;
	$cek = $this->m_set_lokasi->detail($obj1->nip,$tanggal);
	$v='';
	if($cek->num_rows()>0){
		$v='checked';
	}
	?>
	<tr>
		<td>
			<p class="text-center">
				<input type="checkbox" <?php echo $v;?> id="pilih" name="pilih[]" value="<?php echo $obj1->nip;?>">
			</p>
		</td>
		<td class="text-center"><?php echo $offset; ?></td>
		<td><?php echo $obj1->id_pegawai; ?></td>
		<td><?php echo $obj1->nip; ?></td>
		<td><?php echo $obj1->nama_pegawai; ?></td>
		<td><?php echo $obj1->nama_jenis_jabatan; ?></td>
	</tr>
	<?php
}
?>
<input type="hidden" name="cbtotal" value="<?php echo $tot;?>">
<input type="hidden" name="tanggal" value="<?php echo $tanggal;?>">
<input type="hidden" name="id_jenis_jabatan" value="<?php echo $id_jenis_jabatan;?>">