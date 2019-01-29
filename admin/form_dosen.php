<?php 
    include_once 'include/header.php';   
    require_once 'class/Dosen.php';
    $obj_dosen = new Dosen();
    $rs1 = $obj_dosen->getNIDN();
    $rs2 = $obj_dosen->getUSER();

    $_idedit = $_GET['nidn'];
    
    if(!empty($_idedit)){
        $data = $obj_dosen->findByID($_idedit);
    }else{
        $data = [] ;
    }
?>

    <div class="nk-main">
        <div class="container">
            <div class="nk-portfolio-single">

                <div class="nk-gap-4 mb-14"></div>
                <h1 class="nk-portfolio-title display-4">Input Dosen</h1>
                <div class="row vertical-gap">
                
                    <div class="col-lg-12">
                        <!-- START: Form -->
                        <form method="POST" action="proses_dosen.php" class="nk-form nk-form-ajax">    
                                                                                
                            <?php if (empty($_idedit)){ ?>
                                <input type="text" class="form-control required" name="nama" placeholder="Masukkan Nama..." required>
                            <?php } else { ?>
                                <input type="text" class="form-control required" name="nama" placeholder="Masukkan Nama..." required value="<?php echo $data['nama']?>">
                            <?php } ?>                                      

                            <div class="nk-gap-1"></div>
                            <div class="row vertical-gap">
                                <div class="col-md-6">
                                    <?php if (empty($_idedit)){ ?>
                                        <input type="text" class="form-control required" name="tmp_lahir" placeholder="Masukkan Tempat Lahir..." required>
                                    <?php } else { ?>
                                        <input type="text" class="form-control required" name="tmp_lahir" placeholder="Masukkan Tempat Lahir..." required value="<?php echo $data['tmp_lahir']?>">
                                    <?php } ?>                                      
                                </div>
                                <div class="col-md-1" align="center">                                    
                                    <strong>Tanggal Lahir</strong>
                                </div>
                                <div class="col-md-5">                                    
                                    <?php if (empty($_idedit)){ ?>
                                        <input type="date" class="form-control required" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir..." required>
                                    <?php } else { ?>
                                        <input type="date" class="form-control required" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir..." required value="<?php echo $data['tgl_lahir']?>">
                                    <?php } ?> 
                                </div>
                            </div>                                                        

                            <div class="nk-gap-1"></div>
                            <div class="row vertical-gap">
                                <div class="col-md-6" align="center">                                    
                                    <?php if (empty($_idedit)){ ?>
                                        <input type="radio" name="gender" value="L" required>&ensp;&ensp;<strong>Laki-Laki</strong>
                                        <hr>
                                        <input type="radio" name="gender" value="P" required>&ensp;&ensp;<strong>Perempuan</strong>
                                    <?php } else { if ($data['gender'] == 'L') { ?>                                
                                        <input type="radio" name="gender" value="L" required checked>&ensp;&ensp;<strong>Laki-Laki</strong>
                                        <hr>
                                        <input type="radio" name="gender" value="P" required>&ensp;&ensp;<strong>Perempuan</strong>
                                    <?php } else { ?>                                         
                                        <input type="radio" name="gender" value="L" required>&ensp;&ensp;<strong>Laki-Laki</strong>
                                        <hr>
                                        <input type="radio" name="gender" value="P" required checked>&ensp;&ensp;<strong>Perempuan</strong>
                                    <?php }} ?> 
                                </div>
                                <div class="col-md-6" align="center">
                                    <?php if (empty($_idedit)){ ?>
                                        <input type="radio" name="prodi_id" value="1" required>&ensp;&ensp;<strong>Teknik Informatika</strong>
                                        <hr>
                                        <input type="radio" name="prodi_id" value="2" required>&ensp;&ensp;<strong>Sistem Informasi</strong>
                                    <?php } else { if ($data['prodi_id'] == '1') { ?>                                
                                        <input type="radio" name="prodi_id" value="1" required checked>&ensp;&ensp;<strong>Teknik Informatika</strong>
                                        <hr>
                                        <input type="radio" name="prodi_id" value="2" required>&ensp;&ensp;<strong>Sistem Informasi</strong>
                                    <?php } else { ?>                                         
                                        <input type="radio" name="prodi_id" value="1" required>&ensp;&ensp;<strong>Teknik Informatika</strong>
                                        <hr>
                                        <input type="radio" name="prodi_id" value="2" required checked>&ensp;&ensp;<strong>Sistem Informasi</strong>
                                    <?php }} ?>                                   
                                </div>
                            </div>                            

                            <div class="nk-gap-1"></div>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                            <?php foreach($rs1 as $row1){ foreach($rs2 as $row2){ if (empty($_idedit)){ ?>
                                <input type="hidden" name="nidn" value="<?php echo '0'.($row1['nidn'] + 1);?>">                       
                                <input type="hidden" name="user_id" value="<?=($row2['user_id'] + 1)?>">                       
                                <input type="submit" class="nk-btn" name="proses" value="Simpan">
                            <?php } else { ?>         
                                <input type="hidden" name="idedit" value="<?php echo $_idedit?>">                       
                                <input type="hidden" name="user_id" value="<?=$row2['user_id']?>">
                                <input type="submit" class="nk-btn" name="proses" value="Update">
                                <input type="submit" class="nk-btn" name="proses" value="Hapus">
                            <?php }}} ?>                              
                        </form>
                        <!-- END: Form -->
                    </div>

                </div>
                <div class="nk-gap-4 mt-14"></div>

            </div>
        </div>

<?php include_once 'include/footer.php'; ?>  