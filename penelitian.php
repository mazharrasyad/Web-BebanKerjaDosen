<?php 
    include_once 'include/header.php'; 
    require_once 'class/Penelitian.php';    
    $obj_penelitian = new Penelitian();
    $rs = $obj_penelitian->getAll();     

    $obj_penelitian1 = new Penelitian();
    $rs1 = $obj_penelitian1->getAll();   
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
                            <li data-filter="<?=$row1['rencana_publikasi'];?>"><?=$row1['rencana_publikasi'];?></li>                        
                        <?php } ?>
                    </ul>
                    <!-- END: Filter -->

                    <!-- START: Posts List -->
                    <div class="nk-blog-isotope nk-isotope nk-isotope-gap nk-isotope-1-cols">

                        <?php foreach($rs as $row){ ?>
                        <!-- START: Post -->
                        <div class="nk-isotope-item" data-filter="<?=$row['rencana_publikasi'];?>">
                            <div class="nk-blog-post">

                                <div class="nk-post-thumb">
                                    <div class="nk-post-category">
                                        <a><?=$row['rencana_publikasi'];?></a>
                                    </div>                                                                        
                                </div>

                                <h2 class="nk-post-title h4"><?=$row['judul'];?></h2>

                                <div class="nk-post-date">
                                    Semester <?=$row['semester'];?><br>
                                    <?=$row['sks'];?> SKS<br>
                                    By <?=$row['nama'];?>
                                </div>
                                <div class="nk-post-text">
                                    <?php 
                                        echo substr($row['deskripsi'],0,100);
                                        echo ' . . . . .<br><a href="single_penelitian.php?id='.$row['id'].'" class="nk-portfolio-item-link">Read More</a>';
                                    ?>
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
            <a href="form_penelitian.php">Tambah Penelitian</a>
        </div>
        <!-- END: Pagination -->

<?php include_once 'include/footer.php'; ?>  