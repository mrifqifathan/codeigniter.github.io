<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <div class="form-text text-danger"><?= form_error('nama'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="nama">NRP</label>
                            <input type="text" name="nrp" class="form-control" id="nrp">
                            <div class="form-text text-danger"><?= form_error('nrp'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="text" name="email" class="form-control" id="email">
                            <div class="form-text text-danger"><?= form_error('email'); ?></div>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-select" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Sistem Komputer">Sistem Komputer</option>
                            </select>
                        </div>                        
                        <button type="submit" name="tambah" class="btn btn-primary mt-3">Tambah Data</button>
                    </form>
                </div>
            </div>            

        </div>
    </div>
</div>