<?php
require_once 'DAO.php';

class Pengajaran
{
  private $dbh;
  private $tblName = "pengajaran";

  public function __construct() {
    $this->dbh = DAO::getInstance();
  }

  public function getALL() {
    $sql= "select * from matkul inner join ".$this->tblName." on matkul.id = pengajaran.matkul_id inner join dosen on pengajaran.nidn = dosen.nidn order by status desc;";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getS() {
    $sql= "select distinct(semester) from matkul order by semester;";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getMK() {
    $sql= "select * from matkul;";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function simpan($data) {
    $sql = "insert into ".$this->tblName." (matkul_id,nidn) values (?,?);";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
    return $st->rowCount();
  }

  public function update($data) {
    $sql = "update ".$this->tblName." set status = ? where matkul_id = ? and nidn = ?;";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
    return $st->rowCount();
  }

  public function hapus($id,$nidn) {
    $sql = "delete from ".$this->tblName." where matkul_id = ? and nidn = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute([$id,$nidn]);
    return $st->rowCount();
  }
}

?>