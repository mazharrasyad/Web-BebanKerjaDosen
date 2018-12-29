<?php 
    include_once 'include/header.php'; 
    require_once 'class/Jabatan.php';    
    $obj_jabatan = new Jabatan();
    $rs = $obj_jabatan->getAll();     
    $rs1 = $obj_jabatan->getS();
?>
    <div class="nk-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">

                    <!-- START: Filter -->
                    <div class="nk-pagination nk-pagination-nobg nk-pagination-center">
                        <a href="#nk-toggle-filter">
                            <span class="nk-icon-squares"></span>
                        </a>
                    </div>
                    <ul class="nk-isotope-filter">                        
                        <li class="active" data-filter="*">All</li>
                        <?php foreach($rs1 as $row1){ ?>
                            <li data-filter="<?=$row1['jenis_jabatan_id'];?>"><?=$row1['jenis_jabatan_id'];?></li>                        
                        <?php } ?>
                    </ul>
                    <!-- END: Filter -->

                    <!-- START: Posts List -->
                    <div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-4-cols">

                        <?php foreach($rs as $row){ ?>
                        <!-- START: Post -->
                        <div class="nk-isotope-item " data-filter="<?=$row['jenis_jabatan_id'];?>">
                            <div class="nk-blog-post">

                                <div class="nk-post-thumb">
                                    <div class="nk-post-category">
                                        <a><?=$row['jenis_jabatan_id'];?></a>
                                        <a>
                                            <?php 
                                                if ($row['status'] == 0){
                                                    echo 'Tidak Aktif';                                        
                                                } 
                                                else{
                                                    echo 'Aktif';                                              
                                                }                                
                                            ?>  
                                        </a>
                                    </div>                        
                                </div>

                                <h2 class="nk-post-title h4"><?=$row['judul'];?></h2>

                                <div class="nk-post-text">
                                    Semester <?=$row['semester'];?> dengan <?=$row['sks'];?> SKS                                      
                                </div>

                                <div class="nk-post-date">
                                    By <?=$row['nama'];?>
                                </div>                                

                                <div class="nk-post-text">
                                    <?php echo '<a href="form_pkm.php?id='.$row['id'].'" class="nk-pagination-center">Pengaturan</a>'; ?>                                    
                                </div>
                            </div>
                        </div>
                        <!-- END: Post -->  
                        <?php } ?>

                    </div>
                    <!-- END: Posts List -->
                </div>
            </div>

            <div class="nk-gap-4"></div>
        </div>

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <a href="form_pkm.php">Tambah Jabatan</a>
        </div>
        <!-- END: Pagination -->

<?php include_once 'include/footer.php'; ?>  