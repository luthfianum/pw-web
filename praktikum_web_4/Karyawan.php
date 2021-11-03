<?php
abstract class Karyawan
{
  protected $Nama;
  protected $TTL;
  protected $Jenis_kelamin;
  protected $Jabatan;
  protected $Status;
  protected $Gaji;

  public $list_gaji_kotor = array(
    "Junior" => 2000000,
    "Amateur" => 3500000,
    "Senior" => 5000000
  );

  abstract public function __construct($Nama, $TTL, $Jenis_kelamin, $Jabatan);

  abstract protected function calc_Gaji();

  public function getNama()
  {
    return $this->Nama;
  }
  
  public function getTTL()
  {
    return $this->TTL;
  }

  public function getJenis_kelamin()
  {
    return $this->Jenis_kelamin;
  }

  public function getJabatan()
  {
    return $this->Jabatan;
  }

  public function getStatus()
  {
    return $this->Status;
  }
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
