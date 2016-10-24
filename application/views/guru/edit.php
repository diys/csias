<?php echo validation_errors("<p class='alert alert-dismissable alert-danger'>"); ?>
	
<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url(); ?>guru/edit/<?=$guru->id?>">

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="nik"> NIP </label>
		<div class="col-sm-9">
			<input class="input-medium" type="text" name="nik" placeholder="NIP" value="<?=$guru->nik ?>">
		</div>
</div>	

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="nama"> Nama </label>
		<div class="col-sm-9">
			<input type="text" name="nama" placeholder="Nama" class="col-xs-10 col-sm-5" value="<?=$guru->nama ?>">
				<span class="help-inline col-xs-12 col-sm-7">
					<span class="middle">Inline help text</span>
				</span>
		</div>		
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="ngkatan"> Angkatan </label>
		<div class="col-sm-9">
			<input type="number" name="angkatan" placeholder="Tahun" class="col-xs-1" value="<?=$guru->angkatan ?>">
				<span class="help-inline col-xs-12 col-sm-7">
					<span class="middle">Inline help text</span>
				</span>
		</div>		
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="pendidikan"> Pendidikan </label>
		<div class="col-sm-9">
			<input type="text" name="pendidikan" placeholder="Pendidikan Terakhir" class="col-xs-10 col-sm-5" value="<?=$guru->pendidikan ?>">
				<span class="help-inline col-xs-12 col-sm-7">
					<span class="middle">Inline help text</span>
				</span>
		</div>		
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right">Tempat, Tgl Lahir</label>
		<div class="col-sm-9">
			<span class="input-icon">
				<input type="text" name="tempatlahir" value="<?=$guru->tempatlahir ?>">
				<i class="ace-icon fa fa-leaf blue"></i>
			</span>
			<span class="input-icon input-icon-right">
				<input type="text" name="tanggallahir" id="input-mask-date" value="<?=$guru->tanggallahir ?>">
				<i class="ace-icon fa fa-calendar bigger-110"></i>
			</span>
		</div>
</div>

<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="alamat"> Alamat </label>
		<div class="col-sm-9">
			<textarea name="alamat" placeholder="Alamat" class="col-xs-10 col-sm-5" rows="3" ><?=$guru->alamat ?></textarea> 
				<span class="help-inline col-xs-12 col-sm-7">
					<span class="middle">Inline help text</span>
				</span>
		</div>		
</div>

<div class="col-md-offset-3 col-md-9">
	<button class="btn btn-info" type="submit">
		<i class="ace-icon fa fa-check bigger-110"></i>
			Masukkan
	</button>

	<a href="<?php echo base_url();?>guru" class="btn btn-warning">Batal</a>
</div>

</form>