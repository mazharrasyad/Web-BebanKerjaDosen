<?php
require_once 'DAO.php';

class Dosen
{
  private $dbh;
  private $tblName = "dosen";

  public function __construct() {
    $this->dbh = DAO::getInstance();
  }

  public function getALL() {
    $sql = "select * from ".$this->tblName;
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getJS() {
    $sql = "select count(jabatan_struktural.id) from jabatan_struktural";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getPN() {
    $sql = "select count(pengajaran.id) from pengajaran";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getPL() {
    $sql = "select count(penelitian.id) from penelitian";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getPK() {
    $sql = "select count(pkm.id) from pkm";
    $rs = $this->dbh->query($sql);
    return $rs;
  }
}

?>