<h1>Penilaian</h1>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5>Tabel Siswa</h5>
        </div>
        <div class="card-body">
            <table class="table" id="basic-datatables">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach($user as $d){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d->nama ?></td>
                        <td><?= $d->kelas ?></td>
                        <td>
                            <a class="btn btn-secondary" href="<?= base_url('NilaiController/add/'. $d->id) ?>">Beri Nilai</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    
    </div>
</div>