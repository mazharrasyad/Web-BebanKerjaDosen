<?php
    require_once 'class/Pengajaran.php';

    $obj_pengajaran = new Pengajaran();
        
    $_proses = $_POST['proses'];
        
    $row = 0;

    if($_proses == "Simpan"){
        $_matkul_id = $_POST['matkul_id'];
        $_nidn = $_POST['nidn'];
        $ar_data[] = $_matkul_id;
        $ar_data[] = $_nidn;
        $row = $obj_pengajaran->simpan($ar_data);
    }else if($_proses == "Update"){
        $_status = $_POST['status'];
        $_matkul_id = $_POST['matkul_id'];
        $_nidn = $_POST['nidn'];
        $ar_data[] = $_status;
        $ar_data[] = $_matkul_id;
        $ar_data[] = $_nidn;
        $row = $obj_pengajaran->update($ar_data);
    }else if($_proses == "Hapus"){
        unset($ar_data);
        $_idedit = $_POST['idedit'];
        $_nidn = $_POST['nidn'];
        $row = $obj_pengajaran->hapus($_idedit,$_nidn);
    }

    if ($row == 0){
        echo "Proses Gagal !!!";
    }else{
        header('Location:daftar_pengajaran.php');
    }
?>