<?php
    include_once 'include/header.php';
    require_once 'class/Pengajaran.php';
    $obj_pengajaran = new Pengajaran();
    $rs = $obj_pengajaran->getAll();   
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
                <li data-filter="1">Semester 1</li>
                <li data-filter="2">Semester 2</li>
                <li data-filter="3">Semester 3</li>
                <li data-filter="4">Semester 4</li>
                <li data-filter="5">Semester 5</li>
                <li data-filter="6">Semester 6</li>
                <li data-filter="7">Semester 7</li>
                <li data-filter="8">Semester 8</li>
            </ul>
            <!-- END: Filter -->
            <div class="nk-portfolio-list nk-isotope nk-isotope-3-cols">
                <?php foreach($rs as $row){ ?>
                    <div class="nk-isotope-item" data-filter="<?=$row['semester'];?>">
                        <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                            <?php echo '<a href="single_pengajaran.php?id='.$row['id'].'" class="nk-portfolio-item-link"></a>' ?>                            
                            <div class="nk-portfolio-item-image">
                                <?php if($row['semester'] == 1){ ?>
                                    <div style="background-image: url('assets/images/semester1.png');"></div>
                                <?php }else if($row['semester'] == 2){ ?>
                                    <div style="background-image: url('assets/images/semester2.png');"></div>                                
                                <?php }else if($row['semester'] == 3){ ?>
                                    <div style="background-image: url('assets/images/semester3.png');"></div>                                
                                <?php }else if($row['semester'] == 4){ ?>
                                    <div style="background-image: url('assets/images/semester4.png');"></div>                                
                                <?php }else if($row['semester'] == 5){ ?>
                                    <div style="background-image: url('assets/images/semester5.png');"></div>                                
                                <?php }else if($row['semester'] == 6){ ?>
                                    <div style="background-image: url('assets/images/semester6.png');"></div>                                
                                <?php }else if($row['semester'] == 7){ ?>
                                    <div style="background-image: url('assets/images/semester7.png');"></div>                                
                                <?php }else if($row['semester'] == 8){ ?>
                                    <div style="background-image: url('assets/images/semester8.png');"></div>
                                <?php } ?>
                            </div>
                            <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                                <div>
                                    <h2 class="portfolio-item-title h3">Semester <?=$row['semester'];?></h2>                                
                                    <div class="portfolio-item-category"><?=$row['kodemk'];?> - <?=$row['namamk'];?></div><br>
                                    <div class="portfolio-item-category"><?=$row['nidn'];?></div><br>
                                    <div class="portfolio-item-category">
                                        <?php 
                                            if ($row['status'] == 0){
                                                echo 'Tidak Aktif';                                        
                                            } 
                                            else{
                                                echo 'Aktif';                                              
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
            <a href="form_pengajaran.php">Tambah Pengajaran</a>
        </div>
        <!-- END: Pagination -->

<?php include_once 'include/footer.php' ?>  