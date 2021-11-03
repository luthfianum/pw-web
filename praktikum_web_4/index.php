<?php
require 'Karyawan.php';
$datas = array(
  new Karyawan_Fulltime('Luthfi', '11 Mei 2001', 'Laki-laki', 'Senior'),
  new Karyawan_Parttime('Anum', '11 Mei 2001', 'Laki-laki', 'Junior'),
  new Karyawan_Fulltime('Pratama', '11 Mei 2001', 'Laki-laki', 'Senior'),
  new Karyawan_Fulltime('Vivi', '11 Mei 2001', 'Perempuan', 'Senior'),
  new Karyawan_Parttime('Indra', '11 Mei 2001', 'Laki-laki', 'Amateur'),
  new Karyawan_Fulltime('Raka', '11 Mei 2001', 'Laki-laki', 'Senior'),
  new Karyawan_Parttime('Luthfi', '11 Mei 2001', 'Laki-laki', 'Senior'),
)
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
    <h1>Data Karyawan Joy.corp</h1>

    <div style="width: 70%; float:right;">
      <select id="filter">
        <option value="">All</option>
        <option value="Fulltime">Fulltime</option>
        <option value="Parttime">Parttime</option>
      </select>
    </div>
    <table id="table_karyawan">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Tempat Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Jabatan</th>
          <th>Status</th>
          <th>Gaji Karyawan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datas as $index => $data) { ?>
          <tr class="<?= $data->getStatus() ?>">
            <td><?= $index + 1 ?></td>
            <td><?= $data->getNama() ?></td>
            <td><?= $data->getTTL() ?></td>
            <td><?= $data->getJenis_kelamin() ?></td>
            <td><?= $data->getJabatan() ?></td>
            <td><?= $data->getStatus() ?></td>
            <td><?= $data->calc_Gaji() ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <footer>
      <p>
        Tugas praktikum 4 is made with <i class="fas fa-heart" style="color:red" aria-hidden="true"></i> by <a href="https://github.com/luthfianum">Luthfi Anum </a>
      </p>
    </footer>

    <script>
      const rating = document.getElementById("filter");
      const elements = document.querySelectorAll("tbody>tr");
      rating.addEventListener("change", function() {
        let value = rating.value;
        if (!value) {
          elements.forEach((element) => {
            let elementClass = element.className.slice(0, 8);
            element.className = elementClass;
          })
        } else if (value == "Fulltime") {
          elements.forEach((element) => {
            let elementClass = element.className.slice(0, 8);
            element.className = (elementClass === "Fulltime") ? "Fulltime" : "Parttime Hidden";
          })
        } else if (value == "Parttime") {
          elements.forEach((element) => {
            let elementClass = element.className.slice(0, 8);
            element.className = (elementClass === "Parttime") ? "Parttime" : "Fulltime Hidden";
          })
        }
        let index = 1
        elements.forEach(element => {
          if(!element.className.includes("Hidden")){
            element.querySelectorAll('td')[0].innerHTML = `${index}`;
            index++;
          }
        })
      })
    </script>
  </body>
</html>