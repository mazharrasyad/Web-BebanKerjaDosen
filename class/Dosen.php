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
    $sql = "select * from ".$this->tblName." order by nidn desc";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getNIDN() {
    $sql = "select nidn from ".$this->tblName." order by nidn desc limit 1";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getUSER() {
    $sql = "select user_id from ".$this->tblName." order by user_id desc limit 1";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getS() {
    $sql= "select distinct(prodi_id) from dosen order by prodi_id;";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getJS() {
    $sql = "select count(dosen.nidn) from dosen";
    $rs = $this->dbh->query($sql);
    return $rs;
  }

  public function getPN() {
    $sql = "select count(pengajaran.matkul_id) from pengajaran";
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

  public function simpan($data) {
    $sql = "insert into ".$this->tblName." (nidn,nama,tmp_lahir,tgl_lahir,gender,prodi_id,user_id) values (?,?,?,?,?,?,?)";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
    return $st->rowCount();
  }

  public function update($data) {
    $sql = "update ".$this->tblName." set nama = ?, tmp_lahir = ?, tgl_lahir = ?, gender = ?, prodi_id = ?, user_id = ? where nidn = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
    return $st->rowCount();
  }

  public function hapus($id) {
    $sql = "delete from ".$this->tblName." where nidn = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute([$id]);
    return $st->rowCount();
  }

  public function findByID($id){
    $sql = "select * from ".$this->tblName." where nidn = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute([$id]);
    return $st->fetch();
  }

  public function findByJS($id){
    $sql = "select count(nidn) from jabatan_struktural where nidn = ?;";
    $st = $this->dbh->prepare($sql);
    $st->execute([$id]);
    return $st->fetch();
  }

  public function findByPN($id){
    $sql = "select count(nidn) from pengajaran where nidn = ?;";
    $st = $this->dbh->prepare($sql);
    $st->execute([$id]);
    return $st->fetch();
  }

  public function findByPL($id){
    $sql = "select count(nidn) from penelitian where nidn = ?;";
    $st = $this->dbh->prepare($sql);
    $st->execute([$id]);
    return $st->fetch();
  }

  public function findByPK($id){
    $sql = "select count(nidn) from pkm where nidn = ?;";
    $st = $this->dbh->prepare($sql);
    $st->execute([$id]);
    return $st->fetch();
  }
}

?>