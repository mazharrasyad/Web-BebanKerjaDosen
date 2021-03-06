<?php
    include_once 'include/header.php';
    require_once 'class/Pengajaran.php';
    $obj_pengajaran = new Pengajaran();
    $rs = $obj_pengajaran->getAll();  
    $rs1 = $obj_pengajaran->getS(); 
?>

    <div class="nk-main">
        <div class="container">
            <!-- START: Filter -->
            <div class="nk-pagination nk-pagination-nobg nk-pagination-center">
                <a href="#nk-toggle-filter">
                    <span class="nk-icon-squares"></span>
                </a>
            </div>
            <ul class="nk-isotope-filter">
                <li class="active" data-filter="*">All</li>                
                <?php foreach($rs1 as $row1){ ?>                   
                    <li data-filter="<?=$row1['semester'];?>"><?=$row1['semester'];?></li>                                              
                <?php } ?>
            </ul>
            <!-- END: Filter -->
            <div class="nk-portfolio-list nk-isotope nk-isotope-4-cols">                
                <?php foreach($rs as $row){ ?>                      
                    <form method="POST" action="proses_pengajaran.php" class="nk-form nk-form-ajax">                                              
                        <div class="nk-isotope-item" data-filter="<?=$row['semester'];?>">
                            <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">                                                                
                                <div class="nk-portfolio-item-image">                            
                                    <?php if($row['semester'] % 2 == 1){ ?>
                                        <div style="background-image: url('assets/images/semester1.png');"></div>
                                    <?php }else if($row['semester'] % 2 == 0){ ?>
                                        <div style="background-image: url('assets/images/semester2.png');"></div>
                                    <?php } ?>
                                </div>
                                <?php echo '<p style="text-align: center; font-weight: bold; margin: 4px 4px;">'.$row['namamk'].'<br>'.$row['nama'].'</p>';?>                        
                                <div class="nk-gap-1"></div>            
                                <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                                    <div>         
                                        <a class="nk-portfolio-item-link">
                                            <input type="submit" class="nk-btn" name="proses" value="Update">
                                            <input type="submit" class="nk-btn" name="proses" value="Hapus">
                                        </a>                                                                                                                                      
                                        <div class="portfolio-item-category">
                                            <?php                                                 
                                                if ($row['status'] == 0){
                                                    echo '<h2 class="portfolio-item-title h3">Tidak Aktif</h2>';             
                                                    echo '<input type="hidden" name="status" value="'.($row['status'] + 1).'">';                                                               
                                                } 
                                                else{
                                                    echo '<h2 class="portfolio-item-title h3">Aktif</h2>';                                                                                               
                                                    echo '<input type="hidden" name="status" value="'.($row['status'] - 1).'">';                                                                
                                                }
                                                echo '<br>Kode '.$row['kodemk'].'<br><br>';                                                      
                                                echo $row['sks'].' SKS<br>';                                              
                                                echo '<input type="hidden" name="matkul_id" value="'.$row['matkul_id'].'">';                                                                                                                                                 
                                                echo '<input type="hidden" name="nidn" value="'.$row['nidn'].'">';   
                                                echo '<input type="hidden" name="idedit" value="'.$row['id'].'">';                                                                                                                                                                                                                                                
                                            ?>                                                                            
                                        </div>                                        
                                    </div>                                    
                                </div>
                            </div>                            
                        </div>
                    </form>
                <?php } ?>                                    
            </div>

            <div class="nk-gap-4"></div>
        </div>

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <a href="form_pengajaran.php">Tambah Pengajaran</a>
        </div>
        <!-- END: Pagination -->

<?php include_once 'include/footer.php' ?>  