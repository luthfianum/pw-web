<?php
abstract class Karyawan
{
  public $Nama;
  public $TTL;
  public $Jenis_kelamin;
  public $Jabatan;
  public $Status;
  public $Gaji;
  public $list_gaji_kotor = array(
    "Junior" => 2000000,
    "Amateur" => 3500000,
    "Senior" => 5000000
  );

  abstract public function __construct($Nama, $TTL, $Jenis_kelamin, $Jabatan);

  abstract protected function calc_Gaji();
}

class Karyawan_Fulltime extends Karyawan
{
  public function __construct($Nama, $TTL, $Jenis_kelamin, $Jabatan)
  {
    $this->Nama = $Nama;
    $this->TTL = $TTL;
    $this->Jenis_kelamin = $Jenis_kelamin;
    $this->Jabatan = $Jabatan;
    $this->Status = "Fulltime";
  }

  public function calc_Gaji()
  {
    return $this->list_gaji_kotor[$this->Jabatan];
  }
}

class Karyawan_Parttime extends Karyawan
{
  public function __construct($Nama, $TTL, $Jenis_kelamin, $Jabatan)
  {
    $this->Nama = $Nama;
    $this->TTL = $TTL;
    $this->Jenis_kelamin = $Jenis_kelamin;
    $this->Jabatan = $Jabatan;
    $this->Status = "Parttime";
  }

  public function calc_Gaji()
  {
    return $this->list_gaji_kotor[$this->Jabatan] / 2;
  }
}
