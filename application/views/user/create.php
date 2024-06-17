<h3>Tambah</h3>
<div class="col-md-12">
    <div class="card">
        <form action="<?php echo base_url('AdminController/save')?>" method="post">
            <div class="card-header">
                <h5>Tambah User</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control"  name="nama" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input class="form-control" name="kelas" required>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" name="role" required>
                        <option>siswa</option>
                        <option>admin</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-default" href="<?php echo base_url()?>Admin">Close</a>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>