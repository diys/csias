<button class="bt btn-primary">Tambah Data</button>
<table class="table  table-bordered table-hover">
  <thead>
    <th>#</th>
    <th>Kode</th>
    <th>Nama</th>
    <th>Wali</th>
    <th>Diskripsi</th>
    <th>Aksi</th>
  </thead>
  <tbody>
  <?php foreach ($kelas as $klas) : ?>
    <tr>
      <td><?=$klas->id; ?></td>
      <td><?=$klas->kode; ?></td>
      <td><?=$klas->nama; ?></td>
      <td><?=$klas->wali; ?></td>
      <td><?=$klas->diskripsi; ?></td>
      <td><div class="hidden-sm hidden-xs btn-group">
      <a href="" class="btn btn-xs btn-info"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
      <button class="btn btn-xs btn-danger"><i class="ace-icon fa fa-trash-o bigger-120"></i></button>
      </div></td>
    </tr>
  <?php endforeach?>
  </tbody>
</table>  

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Kelas</h4>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <label>Kode :</label>
              <input type="text" name="kode" class="form-control" placeholder="Kode Kelas">
            </div>

            <div class="form-group">
              <label>Nama :</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama Kelas">
            </div>

            <div class="form-group">
              <label>Wali :</label>
              <select name="wali" class="form-control">
              <?php foreach ($guru as $wali) : ?>
                <option value="<?=$wali->id?>"><?=$wali->wali?></option>
              <?php endforeach; ?>
              </select>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="simpan">Simpan</button>
      </div>
    </div>
  </div>
</div>