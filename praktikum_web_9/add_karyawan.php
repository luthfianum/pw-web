<?php
require 'function.php';

if (isset($_POST["submit"])) {
  if (addData($_POST) > 0) {
    echo "berhasil";
  } else {
    echo "gagal!";
  }
}

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
    <a class="btn btn-ghost justify-start px-2" href="index.php">
      <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M15 18l-6-6 6-6" />
      </svg>
      Back
    </a>
    <div class="px-10 py-5 card bg-base-200 w-1/2 mx-auto">
      <h1 class="text-3xl font-medium text-center mb-4">Tambah Karyawan</h1>
      <form method="post">
        <div class="form-control mb-2">
          <label class="label">
            <span class="label-text">Username</span>
          </label>
          <input type="text" placeholder="Bima Sugiarto" class="input" name="name">
        </div>
        <div class="form-control mb-2">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="text" placeholder="example@employee.RSS.com" class="input" name="email">
        </div>
        <div class="form-control mb-2">
          <label class="label">
            <span class="label-text">Address</span>
          </label>
          <input type="text" placeholder="Jl. Merdeka 7 No.34" class="input" name="address">
        </div>
        <div class="form-control mb-2">
          <label class="label">
            <span class="label-text">Gender</span>
          </label>
          <select class="select select-bordered w-full" name="gender">
            <option selected="selected" value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="flex gap-3 mb-4">
          <div class="form-control mb-2 flex-1">
            <label class="label">
              <span class="label-text">Position</span>
            </label>
            <select class="select select-bordered w-full" name="position">
              <option selected="selected" value="Sr Frontend Engineer">Sr Frontend Engineer</option>
              <option value="Sr Backend Engineer">Sr Backend Engineer</option>
              <option value="Sr QA Engineer">Sr QA Engineer</option>
              <option value="Sr DevOps Engineer">Sr DevOps Engineer</option>
              <option value="Jr Frontend Engineer">Jr Frontend Engineer</option>
              <option value="Jr Backend Engineer">Jr Backend Engineer</option>
              <option value="Jr QA Engineer">Jr QA Engineer</option>
              <option value="Jr DevOps Engineer">Jr DevOps Engineer</option>
            </select>
          </div>
          <div class="form-control mb-2 flex-1">
            <label class="label">
              <span class="label-text">Status</span>
            </label>
            <select class="select select-bordered w-full" name="status">
              <option selected="selected" value="Fulltime">Fulltime</option>
              <option value="Parttime">Parttime</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-block btn-success" name="submit">Submit</button>
      </form>
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