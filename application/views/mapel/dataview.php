<h3>Mapel</h3>
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
                    foreach ($mapel as $d) {
                    ?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $d->nama ?></td>
                        <td><?= $d->kelas ?></td>
                        <td><?= $d->semester ?></td>
                        <td>
                            <a class="btn btn-warning m-1" href="<?php echo base_url('mapelcontroller/edit/'.$d->id)?>">edit</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cobaModal<?= $d->id?>">Hapus</button>
                            <div class="modal fade" id="cobaModal<?= $d->id?>">
                            <div class="modal-dialog">
                                <form action="<?= base_url('MapelController/delete/'.$d->id) ?>" method="POST">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <input type="hidden" name="idmapel" value="<?= $d->id ?>">
                                            <label>Hapus Mapel <?= $d->nama?>?</label>           
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <!-- <button type="submit" class="btn btn-primary">Beri Penilaian</button> -->
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    
    </div>
</div>