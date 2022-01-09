<?php
$conn = mysqli_connect("localhost", "root", "", "praktikum9");

function getData()
{
  global $conn;
  $data = mysqli_query($conn, 'SELECT * FROM karyawan');
  $list_karyawan = [];
  while ($karyawan = mysqli_fetch_assoc($data)) {
    $list_karyawan[] = $karyawan;
  }
  return $karyawan;
}

function addData($data)
{
  global $conn;
  $name     = $data["name"];
  $email    = $data["email"];
  $address  = $data["address"];
  $gender   = $data["gender"];
  $position = $data["position"];
  $status   = $data["status"];

  $query = "INSERT INTO karyawan(name, email, address, gender, position, status) values('$name', '$email', '$address', '$gender', '$position', '$status')";
  return mysqli_query($conn, $query);
}

function deleteData($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
  return mysqli_affected_rows($conn);
}
