<?php
    $idmahasiswa = $_GET["p1"];
    $sql = "SELECT nama, nim, prodi, email FROM tbmahasiswa WHERE id='$idmahasiswa';";
    $hasil = mysqli_query($cnn, $sql);
    if (mysqli_num_rows($hasil) > 0) {
        $h = mysqli_fetch_assoc($hasil);
?>
<h3>Ubah Data Mahasiswa <?=$h["nim"]?></h3>
<form method="POST" action="datamahasiswa.php">
    <input type="hidden" name="act" value="update">
    <input type="hidden" name="idmahasiswa" value="<?=$idmahasiswa?>">
    <div class="form-floating mb-3">
        <input type="text" name="txNIM" class="form-control" id="floatingInput" placeholder="NIM" value="<?=$h["nim"]?>">
        <label for="floatingInput">NIM</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?=$h["nama"]?>">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txPRODI" class="form-control" id="floatingInput" placeholder="Program Studi" value="<?=$h["prodi"]?>">
        <label for="floatingInput">Program Studi</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="txEMAIL" class="form-control" id="floatingInput" placeholder="Email" value="<?=$h["email"]?>">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
        &nbsp;
    </div>
    <button type="submit" class="btn btn-primary">Ubah Data Mahasiswa</button>
    <a href="datamahasiswa.php" class="btn btn-secondary">Batal</a>
</form>
<?php
} else {
    echo "<script>window.location.href='datamahasiswa.php';</script>";
}
?>