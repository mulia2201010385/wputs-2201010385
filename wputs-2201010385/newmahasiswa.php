<h3>Tambah Data Mahasiswa</h3>
<form method="POST" action="datamahasiswa.php">
    <input type="hidden" name="act" value="store">
    
    <div class="form-floating mb-3">
        <input type="text" name="txNIM" class="form-control" id="floatingInput" placeholder="NIM">
        <label for="floatingInput">NIM</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txPRODI" class="form-control" id="floatingInput" placeholder="Program Studi">
        <label for="floatingInput">Program Studi</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txEMAIL" class="form-control" id="floatingInput" placeholder="Email">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary">Tambah Data Mahasiswa</button>
    <a href="datamahasiswa.php" class="btn btn-secondary">Batal</a>
</form>