<?php 
    include_once 'include/header.php';   
    require_once 'class/Dosen.php';
    require_once 'class/Penelitian.php';
    $obj_dosen = new Dosen();
    $obj_penelitian = new Penelitian();
    $rs = $obj_dosen->getALL();

    $_idedit = $_GET['id'];
    
    if(!empty($_idedit)){
        $data = $obj_penelitian->findByID($_idedit);
    }else{
        $data = [] ;
    }
?>

    <div class="nk-main">
        <div class="container">
            <div class="nk-portfolio-single">

                <div class="nk-gap-4 mb-14"></div>
                <h1 class="nk-portfolio-title display-4">Input Penelitian</h1>
                <div class="row vertical-gap">
                
                    <div class="col-lg-12">
                        <!-- START: Form -->
                        <form method="POST" action="proses_penelitian.php" class="nk-form nk-form-ajax">    
                        
                            <div class="row vertical-gap">
                                <div class="col-md-6">
                                    <?php if (empty($_idedit)){ ?>
                                        <input type="number" class="form-control required" name="semester" placeholder="Masukkan Semester...">
                                    <?php } else { ?>
                                        <input type="number" class="form-control required" name="semester" placeholder="Masukkan Semester..." value="<?php echo $data['semester']?>">
                                    <?php } ?>                                      
                                </div>
                                <div class="col-md-6">                                    
                                    <?php if (empty($_idedit)){ ?>
                                        <input type="text" class="form-control required" name="judul" placeholder="Masukkan Judul...">
                                    <?php } else { ?>
                                        <input type="text" class="form-control required" name="judul" placeholder="Masukkan Judul..." value="<?php echo $data['judul']?>">
                                    <?php } ?> 
                                </div>
                            </div>                            

                            <div class="nk-gap-1"></div>                            
                            <?php if (empty($_idedit)){ ?>
                                <textarea class="form-control required" name="deskripsi" rows="8" placeholder="Masukkan Deskripsi..." aria-required="true"></textarea>
                            <?php } else { ?>                                
                                <textarea class="form-control required" name="deskripsi" rows="8" placeholder="Masukkan Deskripsi..." aria-required="true" value="<?php echo $data['deskripsi']?>"></textarea>
                            <?php } ?> 

                            <div class="nk-gap-1"></div>
                            <div class="row vertical-gap">
                                <div class="col-md-6">                                    
                                    <?php if (empty($_idedit)){ ?>
                                        <input type="number" class="form-control required" name="sks" placeholder="Masukkan SKS...">
                                    <?php } else { ?>                                
                                        <input type="number" class="form-control required" name="sks" placeholder="Masukkan SKS..." value="<?php echo $data['sks']?>">                                        
                                    <?php } ?> 
                                </div>
                                <div class="col-md-6">
                                    <?php if (empty($_idedit)){ ?>
                                        <input type="number" class="form-control required" name="rencana_publikasi" placeholder="Masukkan Rencana Publikasi...">
                                    <?php } else { ?>                                
                                        <input type="number" class="form-control required" name="rencana_publikasi" placeholder="Masukkan Rencana Publikasi..." value="<?php echo $data['rencana_publikasi']?>">                                        
                                    <?php } ?>                                    
                                </div>
                            </div>                            

                            <div class="nk-gap-1"></div>
                            <?php if (empty($_idedit)){ ?>
                                <select class="form-control required" name="nidn">
                                    <option value="">Pilih Nama Dosen</option>
                                    <?php
                                        foreach($rs as $row) {
                                            echo '<option value="'.$row['nidn'].'">'.$row['nama'].'</option>';
                                        }
                                    ?>
                                </select>
                            <?php } else { ?>                                
                                <select class="form-control required" name="nidn">
                                    <option value="">Pilih Nama Dosen</option>
                                    <?php
                                        foreach($rs as $row) {                                            
                                            if($row['nidn'] == $data['nidn']){
                                                echo '<option value="'.$row['nidn'].'" selected>'.$row['nama'].'</option>';
                                            }
                                            else{
                                                echo '<option value="'.$row['nidn'].'">'.$row['nama'].'</option>';
                                            }                                            
                                        }
                                    ?>
                                </select>
                            <?php } ?> 
                            

                            <div class="nk-gap-1"></div>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                            <input type="submit" class="nk-btn" name="proses" value="Simpan">
                        </form>
                        <!-- END: Form -->
                    </div>

                </div>
                <div class="nk-gap-4 mt-14"></div>

            </div>
        </div>

<?php include_once 'include/footer.php'; ?>  