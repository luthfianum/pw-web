<?php 
  include 'function.php';
  $datum = getData(); 
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Kebanyakan make sepertinya wkwkwk -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.20.0/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.20.0/dist/themes.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  
  <title>Praktikum 8 - JSON</title>
</head>

<body data-theme="dracula" class="bg-base-100 text-base-content relative" style="min-height: 100vh">

  <div class="container mx-auto pt-10">
    <div class="flex mb-10 justify-between">
      <h1 class="text-3xl font-medium text-center">Data Karyawan</h1>
      <a class="btn btn-success btn-wide btn-outline text-base-content hover text-medium" href="add_karyawan.php">Add Data +</a>
    </div>
    <div class="overflow-x-auto">
      <table class="table w-full">
        <thead>
          <tr>
            <th>#</th> 
            <th>Name</th> 
            <th>Email</th> 
            <th>Address</th>
            <th>Gender</th> 
            <th>Position</th> 
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead> 
        <tbody>
          <?php foreach($datum as $index=>$data) : ?>
          <tr class="hover">
            <td><?= $index + 1; ?></td> 
            <td><?= $data['name']; ?></td> 
            <td><?= $data['email']; ?></td>  
            <td><?= $data['address']; ?></td>
            <td><?= $data['gender']; ?></td>
            <td><?= $data['position']; ?></td>
            <td><?= $data['status']; ?></td>
            <td>
              <a class="btn btn-sm btn-error btn-outline text-base-content hover" href="delete_data.php?id=<?= $data["id"];?>">Delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Footer -->
  <footer class="p-4 footer bg-base-100 text-base-content footer-center bottom-0">
    <div>
      <p>Tugas praktikum 8 is made by <a href="https://github.com/luthfianum">Luthfi Anum </a></p>
    </div>
  </footer>
  <!-- End of Footer -->

  <script src="./assets/js/script.js"></script>
</body>

</html>