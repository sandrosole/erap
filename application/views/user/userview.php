<h1>User</h1>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5>Tabel Siswa</h5>
            <a class="btn btn-success" style="float: right;" href="<?php echo base_url()?>Admincontroller/add">tambah</a>
        </div>
        <div class="card-body">
            <table class="table" id="basic-datatables">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Role</th>
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
                        <td><?= $d->username ?></td>
                        <td><?= $d->password ?></td>
                        <td><?= $d->role ?></td>
                        <td>
                            <a class="btn btn-warning" href="<?= base_url('AdminController/edit/'. $d->id) ?>">Edit</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#tesModal<?= $d->id?>">Hapus</button>
                            <div class="modal fade" id="tesModal<?= $d->id?>">
                            <div class="modal-dialog">
                                <form action="<?= base_url('AdminController/delete/'.$d->id) ?>" method="POST">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <input type="hidden" name="iduser" value="<?= $d->id ?>">
                                            <label>Hapus User ini? <br> Nama:<?= $d->nama ?></label>           
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