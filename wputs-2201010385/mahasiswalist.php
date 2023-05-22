<h3>Daftar Mahasiswa</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">NIM</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Email</th>
      <th scope="col"><a href="newmahasiswa.php" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM tbmahasiswa ORDER BY nama;";
    $hasil = mysqli_query($cnn, $sql);
    $cx = 0;
    while ($h = mysqli_fetch_assoc($hasil)) {
      $cx++;
    ?>
      <tr>
        <th scope="row"><?= $cx ?></th>
        <td><?= $h["nama"] ?></td>
        <td><?= $h["nim"] ?></td>
        <td><?= $h["prodi"] ?></td>
        <td><?= $h["email"] ?></td>
        <td>
          <a href="mahasiswaedit.php?id=<?= $h["id"] ?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a>
          <a href="mahasiswadel.php?id=<?= $h["id"] ?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>
