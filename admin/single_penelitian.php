<?php 
    include_once 'include/header.php';   
    require_once 'class/Penelitian.php';
    $obj_penelitian = new Penelitian();
    $_id = $_GET['id'];
    $data = $obj_penelitian->findByID($_id);
?>

    <div class="nk-main">
        <!-- START: Header Title -->
        <div class="nk-header-title nk-header-title-lg">
            <div class="bg-image">
                <div style="background-image: url('assets/images/publikasi.jpg');"></div>
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Header Title -->

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="nk-gap-4"></div>

                    <!-- START: Post -->
                    <div class="nk-blog-post nk-blog-post-single">
                        <h1 class="display-4"><?php echo $data['judul']; ?></h1>

                        <div class="nk-post-meta">
                            <div class="nk-post-date"><?php echo $data['rencana_publikasi']; ?></div>
                            <div class="nk-post-category">Semester <?php echo $data['semester']; ?></div>
                            <div class="nk-post-comments-count"><?php echo $data['sks']; ?> SKS</div>                            
                        </div>

                        <!-- START: Post Text -->
                        <div class="nk-post-text" align="justify">
                            <?php echo $data['deskripsi']; ?>
                        </div>
                        <!-- END: Post Text -->

                        <!-- START: Post Share -->
                        <div class="nk-post-share">
                            <strong>By</strong><?php echo $data['nama']; ?>
                        </div>
                        <!-- END: Post Share -->
                    </div>                    
                    <!-- END: Post -->

                    <div class="nk-gap-3"></div>
                </div>
            </div>
        </div>

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <div class="container">
                <?php echo '<a href="form_penelitian.php?id='.$data['id'].'" class="nk-pagination-center">Pengaturan</a>'; ?>                                    
            </div>
        </div>
        <!-- END: Pagination -->

<?php include_once 'include/footer.php'; ?>  