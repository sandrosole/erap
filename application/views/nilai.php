<h1>Penilaian</h1>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5>Tabel Mata Pelajaran <?= $siswa['nama'] ?></h5>
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