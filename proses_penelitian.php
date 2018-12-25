<?php
    require_once 'class/Penelitian.php';

    $obj_penelitian = new Penelitian();

    $_semester = $_POST['semester'];
    $_judul = $_POST['judul'];
    $_deskripsi = $_POST['deskripsi'];
    $_sks = $_POST['sks'];
    $_rencana_publikasi = $_POST['rencana_publikasi'];
    $_nidn = $_POST['nidn'];
    $_proses = $_POST['proses'];

    $ar_data[] = $_semester;
    $ar_data[] = $_judul;
    $ar_data[] = $_deskripsi;
    $ar_data[] = $_sks;
    $ar_data[] = $_rencana_publikasi;
    $ar_data[] = $_nidn;
    
    $row = 0;

    if($_proses == "Simpan"){
        $row = $obj_penelitian->simpan($ar_data);
    }else if($_proses == "Update"){
        $_idedit = $_POST['idedit'];
        $ar_data[] = $_idedit;
        $row = $obj_penelitian->ubah($ar_data);
    }else if($_proses == "Hapus"){
        unset($ar_data);
        $_idedit = $_POST['idedit'];
        $row = $obj_penelitian->hapus($_idedit);
    }

    if ($row == 0){
        echo "Proses Gagal !!!";
    }else{
        header('Location:penelitian.php');
    }
?>