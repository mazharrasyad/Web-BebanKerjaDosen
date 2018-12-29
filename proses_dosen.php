<?php
    require_once 'class/Dosen.php';

    $obj_dosen = new Dosen();    
    
    $_nidn = $_POST['nidn'];
    $_nama = $_POST['nama'];
    $_tmp_lahir = $_POST['tmp_lahir'];
    $_tgl_lahir = $_POST['tgl_lahir'];
    $_gender = $_POST['gender'];
    $_prodi_id = $_POST['prodi_id'];
    $_user_id = $_POST['user_id'];

    $_proses = $_POST['proses'];    
    
    $row = 0;

    if($_proses == "Simpan"){        
        $ar_data[] = $_nidn;
        $ar_data[] = $_nama;
        $ar_data[] = $_tmp_lahir;
        $ar_data[] = $_tgl_lahir;
        $ar_data[] = $_gender;
        $ar_data[] = $_prodi_id;
        $ar_data[] = $_user_id;        
        $row = $obj_dosen->simpan($ar_data);
    }else if($_proses == "Update"){
        $ar_data[] = $_nama;
        $ar_data[] = $_tmp_lahir;
        $ar_data[] = $_tgl_lahir;
        $ar_data[] = $_gender;
        $ar_data[] = $_prodi_id;
        $ar_data[] = $_user_id;
        $_idedit = $_POST['idedit'];
        $ar_data[] = $_idedit;
        $row = $obj_dosen->update($ar_data);
    }else if($_proses == "Hapus"){
        unset($ar_data);
        $_idedit = $_POST['idedit'];
        $row = $obj_dosen->hapus($_idedit);
    }

    if ($row == 0){
        echo "Proses Gagal !!!";
    }else{
        header('Location:dosen.php');
    }
?>