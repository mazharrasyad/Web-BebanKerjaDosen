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
}

?>