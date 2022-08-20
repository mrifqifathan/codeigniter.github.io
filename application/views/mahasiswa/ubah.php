<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama'] ?>">
                            <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="nama">NRP</label>
                            <input type="text" name="nrp" class="form-control" id="nrp" value="<?= $mahasiswa['nrp'] ?>">
                            <div class="form-text text-danger"><?= form_error('nrp'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email'] ?>">
                            <div class="form-text text-danger"><?= form_error('email'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-select" id="jurusan" name="jurusan">
                                <?php foreach($jurusan as $j) : ?>
                                    <?php if( $j == $mahasiswa['jurusan'] ) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                        </div>                        
                        <button type="submit" name="ubah" class="btn btn-primary mt-3">Ubah Data</button>
                    </form>
                </div>
            </div>            

        </div>
    </div>
</div>