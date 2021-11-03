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

  public function __construct($Nama, $TTL, $Jenis_kelamin, $Jabatan)
  {
    $this->Nama = $Nama;
    $this->TTL = $TTL;
    $this->Jenis_kelamin = $Jenis_kelamin;
    $this->Jabatan = $Jabatan;
    $this->setStatus();
  }

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

  abstract public function setStatus();
}

class Karyawan_Fulltime extends Karyawan
{
  public function calc_Gaji()
  {
    return $this->list_gaji_kotor[$this->Jabatan];
  }

  public function setStatus()
  {
    $this->Status = 'Fulltime';
  }
  
}

class Karyawan_Parttime extends Karyawan
{
  public function calc_Gaji()
  {
    return $this->list_gaji_kotor[$this->Jabatan] / 2;
  }

  public function setStatus()
  {
    $this->Status = 'Parttime';
  }
}
