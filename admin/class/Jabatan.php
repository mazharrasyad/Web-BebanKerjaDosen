<?php
require_once 'DAO.php';

class Jabatan
{
  private $dbh;

  public function __construct() {
    $this->dbh = DAO::getInstance();
  }

  public function getALL() {
    $sql= "select *, jenis_jabatan.nama as jabatan, dosen.nama as dosen from jabatan_struktural inner join dosen on dosen.nidn = jabatan_struktural.nidn inner join jenis_jabatan on jenis_jabatan.id = jabatan_struktural.jenis_jabatan_id;";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getS() {
    $sql= "select distinct(status) from jabatan_struktural order by status;";
    $rs = $this->dbh->query($sql);
    return $rs;
  }
}

?>