<?php 
  $datas = [
    [
      'nama' => 'Tepung',
      'berat(kg)' => 1,
      'stok' => 0
    ],
    [
      'nama' => 'Gula',
      'berat(kg)' => 0.5,
      'stok' => 4
    ],
    [
      'nama' => 'Kopi',
      'berat(kg)' => 0.75,
      'stok' => 4
    ],
    [
      'nama' => 'Garam',
      'berat(kg)' => 1,
      'stok' => 0
    ],
    [
      'nama' => 'Merica Bubuk',
      'berat(kg)' => 0.5,
      'stok' => 4
    ],
    [
      'nama' => 'Kunyit Bubuk',
      'berat(kg)' => 0.75,
      'stok' => 4
    ],
  ];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="style.css">
    <title>Tugas Praktikum 3</title>
  </head>
  <body>
    <h1>Data Sembako Pak Joy</h1>
    <table id="table_barang">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Berat(Kg)</th>
          <th>Berat(gram)</th>
          <th>Berat(miligram)</th>
          <th>Stok</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($datas as $index => $data) { ?>
        <tr>
          <td><?= $index + 1?>.</td>
          <td><?= $data['nama'] ?></td>
          <td><?= $data['berat(kg)'] ?></td>
          <td><?= $data['berat(kg)']*1000 ?></td>
          <td><?= $data['berat(kg)']*1000000 ?></td>
          <td class="<?= $data['stok'] == 0 ? 'zeroValue' : '' ?>"><?= $data['stok'] == 0 ? 'Kosong' : $data['stok'] ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <footer>
      <p>
      Tugas praktikum 3 is made with <i class="fas fa-heart" style="color:red" aria-hidden="true"></i> by <a href="https://github.com/luthfianum">Luthfi Anum </a>
      </p>
    </footer>
  </body>
</html>