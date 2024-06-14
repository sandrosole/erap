<h3>Judul halaman</h3>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5>Tabel Mapel</h5>
            <a class="btn btn-success" style="float: right;" href="<?php echo base_url()?>mapelcontroller/add">tambah</a>
        </div>
        <div class="card-body">
            <table class="table" id="basic-datatables">
                <thead>
                <tr>
                      <th>no</th>
                      <th>Nama</th>
                      <th>kelas</th>
                      <th>semester</th>
                      <th>opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no =1;
                    foreach ($mapel as $d) 
                    ?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $d->nama ?></td>
                        <td><?= $d->kelas ?></td>
                        <td><?= $d->semester ?></td>
                        <td>
                            <a class="btn btn-warning m-1" href="<?php echo base_url('mapelcontroller/edit.'.$d->id)?>">edit</a>
                            <a class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    
    </div>
</div>