<?php
require_once 'DAO.php';

class Jabatan
{
  private $dbh;
  private $tblName = "jabatan_struktural";

  public function __construct() {
    $this->dbh = DAO::getInstance();
  }

  public function getALL() {
    $sql= "select * from ".$this->tblName;
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getS() {
    $sql= "select distinct(jenis_jabatan_id) from jabatan_struktural order by jenis_jabatan_id;";
    $rs = $this->dbh->query($sql);
    return $rs;
  }
}

?>