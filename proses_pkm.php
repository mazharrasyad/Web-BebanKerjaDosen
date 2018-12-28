<?php
    require_once 'class/PKM.php';

    $obj_pkm = new PKM();

    $_semester = $_POST['semester'];
    $_judul = $_POST['judul'];
    $_lokasi = $_POST['lokasi'];
    $_sks = $_POST['sks'];    
    $_nidn = $_POST['nidn'];
    
    $_proses = $_POST['proses'];

    $ar_data[] = $_semester;
    $ar_data[] = $_judul;
    $ar_data[] = $_lokasi;
    $ar_data[] = $_sks;       
    $ar_data[] = $_nidn;
    
    $row = 0;

    if($_proses == "Simpan"){
        $row = $obj_pkm->simpan($ar_data);
    }else if($_proses == "Update"){
        $_idedit = $_POST['idedit'];
        $ar_data[] = $_idedit;
        $row = $obj_pkm->update($ar_data);
    }else if($_proses == "Hapus"){
        unset($ar_data);
        $_idedit = $_POST['idedit'];
        $row = $obj_pkm->hapus($_idedit);
    }

    if ($row == 0){
        echo "Proses Gagal !!!";
    }else{
        header('Location:pkm.php');
    }
?>