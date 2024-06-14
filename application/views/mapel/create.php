<h3>Edit Mata Pelajaran</h3>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5>Edit Mapel</h5>
            <?php 
            foreach ($mapel as $d)
            ?>
            <form
                class="form-horizontal"
                name="edituser"
                method="post"
                action="<?php echo base_url()?>admin/edit">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="Editusername" class="col-sm-2 col-form-label">nama</label>
                        <div class="col-sm-10">
                            <input type="hidden" value="<?php echo $d->id ?>" name="id"></input>
                            <input
                                type="text"
                                value="<?php echo $d->normalizer_is_normalized ?>"
                                name="username"
                                class="form-control"
                                id="inputEmail3"
                                placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="EditPassword" class="col-sm-2 col-form-label">kelas</label>
                        <div class="col-sm-10">
                            <input
                                type="password"
                                value="<?php echo $d->kelas?>"
                                name="password"
                                class="form-control"
                                id="inputPassword3"
                                placeholder="Password">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>
</div>