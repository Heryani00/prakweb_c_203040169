<?php
/*
Heryani
203040169
*/

require 'functions.php';
$buku = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Daftar Buku Heryani</title>

</head>

<body class="bg-transparent">
  <div class="container ">
    <div class="card mt-5 bg-info card text-light">
      <div class="card-body text-light">
        <h1 class="display-1" style="text-align :center; font-family:fantasy">Daftar Novel Aja</h1>
        <div class="add mb-3 btn btn-secondary rounded-pill" style="width:200px" ;>
          <a href="tambah.php" style="text-decoration:none;color:white;">Tambah Data Buku</a>
        </div>

        <table class="table table-borderless table-striped table-hover text-center bg-the success">
          <tr>
            <th>No</th>
            <th>Judul buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Gambar</th>
            <th>Delete</th>
          </tr>

          <?php if (empty($buku)) : ?>
            <tr>
              <td colspan=" 4">
                <p style="color: red; font-style: italic;">Data Buku tidak ditemukan!</p>
              </td>
            </tr>
          <?php endif; ?>

          <?php $i = 1;
          foreach ($buku as $bk) : ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $bk['judul_buku']; ?></td>
              <td><?= $bk['pengarang']; ?></td>
              <td><?= $bk['penerbit']; ?></td>
              <td><?= $bk['tahun']; ?></td>
              <td><img src="img/<?= $bk['gambar'] ?>" width="100"></td>
              <td><button class="add mb-3 btn btn-primary rounded-pill">
                  <a href="ubah.php?id=<?= $bk['id']; ?>" style="text-decoration:none;color:white;">Ubah</a>
                </button>
                <button class="add mb-3 btn btn-primary rounded-pill">
                  <a href="hapus.php?id=<?= $bk['id']; ?>" onclick="return confirm ('Apakah anda yakin?');" style="text-decoration:none;color:white;">Hapus</a>
                </button>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
</body>

</html>