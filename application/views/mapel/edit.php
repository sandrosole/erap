<h3>Halaman Edit</h3>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5>Tabel Edit</h5>
            <form action="<?php echo base_url('mapelcontroller/update/'.$data->id)?>" method="post">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Mapel</label>
                        <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                        <input class="form-control" value="<?php echo $data->nama ?>" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input class="form-control" value="<?php echo $data->kelas ?>" name="kelas" type="number" required>
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <input class="form-control" value="<?php echo $data->semester ?>"  name="semester" type="number" required>
                    </div>
                </div>
                <class="card-footer">
                    <a class="btn btn-default" href="<?php echo base_url()?>mapel">Close</a>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
