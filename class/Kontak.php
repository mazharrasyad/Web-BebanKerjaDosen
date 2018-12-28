<?php
require_once 'DAO.php';

class Kontak
{
  private $dbh;
  private $tblName = "kontak";

  public function __construct() {
    $this->dbh = DAO::getInstance();
  }

  public function simpan($data) {
    $sql = "insert into ".$this->tblName." (nama,email,subjek,komentar) values (?,?,?,?)";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
    return $st->rowCount();
  }
}

?>