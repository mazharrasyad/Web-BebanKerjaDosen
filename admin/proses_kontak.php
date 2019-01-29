<?php
    require_once 'class/Kontak.php';

    $obj_pkm = new Kontak();

    $_nama = $_POST['nama'];
    $_email = $_POST['email'];
    $_subjek = $_POST['subjek'];
    $_komentar = $_POST['komentar'];    
    
    $_proses = $_POST['proses'];

    $ar_data[] = $_nama;
    $ar_data[] = $_email;
    $ar_data[] = $_subjek;
    $ar_data[] = $_komentar;       
    
    $row = 0;

    if($_proses == "Kirim"){
        $row = $obj_pkm->simpan($ar_data);
    }

    if ($row == 0){
        echo "Proses Gagal !!!";
    }else{
        header('Location:daftar_kontak.php');
    }
?>