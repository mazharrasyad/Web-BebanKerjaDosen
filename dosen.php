<?php
    include_once 'include/header.php';
    require_once 'class/Dosen.php';
    $obj_dosen = new Dosen();
    $rs = $obj_dosen->getAll();  
    
    $obj_dosen1 = new Dosen();
    $rs1 = $obj_dosen1->getS(); 
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
                    <li data-filter="<?=$row1['prodi_id'];?>">
                        <?php                                                 
                            if ($row1['prodi_id'] == 1){
                                echo 'Teknik Informatika';             
                            } 
                            else if ($row1['prodi_id'] == 2){
                                echo 'Sistem Informasi';                                                                                                   
                            }
                        ?>
                    </li>                        
                <?php } ?>
            </ul>
            <!-- END: Filter -->
            <div class="nk-portfolio-list nk-isotope nk-isotope-4-cols">                
                <?php foreach($rs as $row){ ?>                                                              
                    <div class="nk-isotope-item" data-filter="<?=$row['prodi_id'];?>">
                        <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">                                                                
                            <a href="single_dosen.php?nidn=<?=$row['nidn']?>" class="nk-portfolio-item-link"></a>
                            <div class="nk-portfolio-item-image">                            
                                <?php if($row['gender'] == 'L'){ ?>
                                    <div style="background-image: url('assets/images/man.png');"></div>
                                <?php }else if($row['gender'] == 'P'){ ?>
                                    <div style="background-image: url('assets/images/woman.png');"></div>                                                                   
                                <?php } ?>
                            </div>
                            <?php echo '<p style="text-align: center; font-weight: bold; margin: 4px 4px;">'.$row['nama'].'</p>';?>                        
                            <div class="nk-gap-1"></div>            
                            <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                                <div>                                                 
                                    <div class="portfolio-item-category">
                                        <h2 class="portfolio-item-title h3"><?=$row['nidn']?></h2>                                                                                                                      
                                        <?php                                                 
                                            if ($row['prodi_id'] == 1){
                                                echo 'Teknik Informatika';             
                                            } 
                                            else if ($row['prodi_id'] == 2){
                                                echo 'Sistem Informasi';                                                                                                   
                                            }
                                        ?>
                                    </div>                                        
                                </div>                                    
                            </div>
                        </div>                            
                    </div>
                <?php } ?>                                    
            </div>

            <div class="nk-gap-4"></div>
        </div>

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <a href="form_dosen.php">Tambah Dosen</a>
        </div>
        <!-- END: Pagination -->

<?php include_once 'include/footer.php' ?>  