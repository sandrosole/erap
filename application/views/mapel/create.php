<h3>Tambah Mata Pelajaran</h3>
<div class="col-md-12">
    <div class="card">
        <form action="<?php echo base_url('mapelcontroller/save')?>" method="post">
            <div class="card-header">
                <h5>Tambah Mapel</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Mapel</label>
                    <input class="form-control"  name="nama" required>
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <input class="form-control" name="kelas" type="number" required>
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <input class="form-control" name="semester" type="number" required>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-default" href="<?php echo base_url()?>mapel">Close</a>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>