<section class="contenct mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url('users'); ?>" class="btn btn-warning btn-sm 
                float-right">Kembali</a>
            </div> 
            <div class="card-body">
                   <form method="post" action="<?= base_url('users/update'); ?>">
                   <input type="hidden" name="id"value="<?= $r['id']; ?>">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" value="<?= $r['username']; ?>" 
                            class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama lengkap" value="<?= $r['nama_lengkap']; ?>" 
                            class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" 
                            placeholder="kosongkan jika tidak merubah password...">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn.btn-primary.btn-sm">
                            Simpan Data</button>
                        </div>
                </form> 
            </div>
        </div>
    </div>
</section>