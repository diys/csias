<a href="<?=base_url()?>guru/tambah" class="btn btn-primary pull-right">Data Baru</a>
<table class="table  table-bordered table-hover">
	<thead>
		<th>#</th>
		<th>NIP</th>
		<th>Angkatan</th>
		<th>Nama</th>
		<th>Pendidikan</th>
		<th>Tempat,Tgl Lahir</th>
		<th>Alamat</th>
		<th></th>
	</thead>
	<tbody>
	<?php foreach ($gurus as $guru) : ?>
		<tr>
			<td><?=$guru->id; ?></td>
			<td><?=$guru->nik; ?></td>
			<td><?=$guru->angkatan; ?></td>
			<td><?=$guru->nama; ?></td>
			<td><?=$guru->pendidikan; ?></td>
			<td><?=$guru->tempatlahir;echo ", ";echo $guru->tanggallahir; ?></td>
			<td><?=$guru->alamat; ?></td>
			<td><div class="hidden-sm hidden-xs btn-group">
		<a href="<?php echo base_url(); ?>guru\edit\<?=$guru->id;?>" class="btn btn-xs btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
		<button class="btn btn-xs btn-danger"><i class="ace-icon fa fa-trash-o bigger-120"></i></button>
			</div></td>
		</tr>
	<?php endforeach?>
	</tbody>
</table>	