<h1>Penilaian</h1>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5>Tabel Mata Pelajaran <?= $siswa->nama ?></h5>
            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Penilaian</button>
        </div>
        <div class="card-body">
            <table class="table" id="basic-datatables">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Mata Pelajaran</th>
                      <th>Kelas - Semester</th>
                      <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        // print_r($data);
                        foreach($data as $d){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d->mapel ?></td>
                        <td><?= $d->kelas ?> - <b><?= $d->semester ?></b></td>
                        <td><?= $d->nilai ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="<?= base_url('NilaiController/save') ?>" method="POST">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="iduser" value="<?= $siswa->id ?>">
            <div class="form-group">
                <label>Mata Pelajaran</label>
                <select class="form-control" name="idmapel">
                    <?php foreach($mapel as $m) { ?>
                        <option value="<?= $m->id ?>"><?= $m->nama ?> - <b><?= $m->semester ?></b></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Nilai</label>
                <input type="number" class="form-control" name="nilai">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <!-- <button type="submit" class="btn btn-primary">Beri Penilaian</button> -->
            <input type="submit" class="btn btn-primary" value="Beri Penilaian">
        </div>
        </div>
    </form>
  </div>
</div>