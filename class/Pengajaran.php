<?php
require_once 'DAO.php';

class Pengajaran
{
  private $dbh;
  private $tblName = "pengajaran";

  public function __construct() {
    $this->dbh=DAO::getInstance();
  }

  public function getALL() {
    $sql= "select * from ".$this->tblName;
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function simpan($data) {
    $sql = "insert into pengajaran values (default,?,?,?,?,?,default)";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
  }

  public function update($data) {
    $sql = "update pengajaran set namamk = ?, nidn = ? where id = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
  }

  public function hapus($id) {
    $sql = "delete from pengajaran where id = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
  }

  public function findByID($id){
      $sql = "select * from " . $this->tblName . " where id = ?";
      $st = $this->dbh->prepare($sql);
      $st->execute([$id]);
      return $st->fetch();
  } 
}

?>