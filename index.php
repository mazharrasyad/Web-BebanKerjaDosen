<?php 
    include_once 'include/header.php'; 
    require_once 'class/Pengajaran.php';
    $obj_pengajaran = new Pengajaran();
    $rs = $obj_pengajaran->getAll();
?>

    <div class="nk-main">
        <!-- START: Header Title -->
        <div class="nk-header-title nk-header-title-full">
            <div class="bg-image">
                <div style="background-image: url('assets/images/background.jpg');"></div>
                <div class="bg-image-overlay" style="background-color: rgba(12, 12, 12, 0.6);"></div>
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">
                        <h1 class="nk-title display-3 text-white">Beban Kinerja Dosen Nurul Fikri</h1>
                        <div class="nk-gap"></div>
                        <div class="nk-header-text text-white">
                            <div class="nk-gap-4"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <a class="nk-header-title-scroll-down text-white" href="#nk-header-title-scroll-down">
                    <span class="pe-7s-angle-down"></span>
                </a>
            </div>
        </div>
        <div id="nk-header-title-scroll-down"></div>
        <!-- END: Header Title -->

        <!-- START: About Our Agency -->
        <div class="bg-white" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-xs-center">
                        <div class="nk-gap-4 mt-9"></div>

                        <h2 class="display-4">Tentang</h2>
                        <div class="nk-gap mnt-5"></div>

                        <p>
                        BaseNF merupakan singkatan dari <b>Beban Kinerja Dosen Nurul Fikri</b> yang berfungsi sebagai tempat pengumpulan informasi-informasi dosen seperti pengajaran, penelitian, dan PKM.
                        </p>

                        <div class="nk-gap-4 mt-25"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: About Our Agency -->

        <!-- START: Features -->
        <div class="nk-box bg-dark-1 text-white">
            <div class="bg-image bg-image-parallax" style="background-image: url('assets/images/bg-pattern.jpg');"></div>
            <div class="nk-gap-5 mnt-6"></div>
            <div class="container">
                <div class="row vertical-gap">
                    <div class="col-md-6 col-lg-3">
                        <div class="nk-ibox-1">
                            <div class="nk-ibox-icon">
                                <span class="pe-7s-portfolio"></span>
                            </div>
                            <div class="nk-ibox-cont">
                                <div class="nk-ibox-title">548</div>
                                <div class="nk-ibox-text">Pengajaran</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="nk-ibox-1">
                            <div class="nk-ibox-icon">
                                <span class="pe-7s-clock"></span>
                            </div>
                            <div class="nk-ibox-cont">
                                <div class="nk-ibox-title">1465</div>
                                <div class="nk-ibox-text">Penelitian</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="nk-ibox-1">
                            <div class="nk-ibox-icon">
                                <span class="pe-7s-star"></span>
                            </div>
                            <div class="nk-ibox-cont">
                                <div class="nk-ibox-title">612</div>
                                <div class="nk-ibox-text">PKM</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="nk-ibox-1">
                            <div class="nk-ibox-icon">
                                <span class="pe-7s-like"></span>
                            </div>
                            <div class="nk-ibox-cont">
                                <div class="nk-ibox-title">735</div>
                                <div class="nk-ibox-text">Jabatan Struktural</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-gap-5 mnt-6"></div>
        </div>
        <!-- END: Features -->

        <!-- START: Portfolio -->
        <div class="nk-box bg-white" id="projects">
            <div class="nk-gap-4 mt-5"></div>

            <h2 class="text-xs-center display-4">Pengajaran</h2>

            <div class="nk-gap mnt-6"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-xs-center">Berikut merupakan pengajaran yang populer tahun 2018
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-gap-2 mt-12"></div>
            <div class="container">
            <div class="nk-portfolio-list nk-isotope nk-isotope-3-cols">
                <?php 
                    $nomor = 1;
                    foreach($rs as $row){
                        if($nomor <= 3){
                ?>
                    <div class="nk-isotope-item" data-filter="<?=$row['semester'];?>">
                        <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                            <?php echo '<a href="portfolio-single.php?id='.$row['id'].'" class="nk-portfolio-item-link"></a>' ?>                            
                            <div class="nk-portfolio-item-image">
                                <?php if($row['semester'] == 1){ ?>
                                    <div style="background-image: url('assets/images/desk.jpg');"></div>
                                <?php }else{ ?>
                                    <div style="background-image: url('assets/images/portfolio-5-sm.jpg');"></div>
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
                <?php $nomor++; }} ?>
            </div>
            </div>
            <div class="nk-gap-4 mt-15"></div>
        </div>
        <!-- END: Portfolio -->

        <!-- START: Partners -->
        <div class="bg-white">
        <div class="nk-gap-4 mt-5"></div>

        <h2 class="text-xs-center display-4">PKM</h2>

        <div class="nk-gap mnt-6"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-xs-center">Donec orci sem, pretium ac dolor et, faucibus faucibus mauris. Etiam,pellentesque faucibus. Vestibulum gravida volutpat ipsum non ultrices.
                    </div>
                </div>
            </div>
        </div>

            <div class="container">
                <div class="nk-carousel-2 nk-carousel-x4 nk-carousel-no-margin nk-carousel-all-visible">
                    <div class="nk-carousel-inner">
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-1-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-2-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-3-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-4-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-5-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-6-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-7-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="nk-box-1">
                                    <img src="assets/images/partner-logo-8-dark.png" alt="" class="nk-img-fit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Partners -->

        <!-- START: Blog -->
        <div class="nk-box bg-gray-1" id="blog">
            <div class="nk-gap-4 mt-5"></div>

            <h2 class="text-xs-center display-4">Penelitian</h2>

            <div class="nk-gap mnt-6"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-xs-center">Donec orci sem, pretium ac dolor et, faucibus faucibus mauris. Etiam,pellentesque faucibus. Vestibulum gravida volutpat ipsum non ultrices.
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-gap-2 mt-12"></div>
            <div class="container">
                <!-- START: Carousel -->
                <div class="nk-carousel-2 nk-carousel-x2 nk-carousel-no-margin nk-carousel-all-visible nk-blog-isotope" data-dots="true">
                    <div class="nk-carousel-inner">


                        <div>
                            <div>
                                <div class="pl-15 pr-15">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="blog-single.php">
                                                <img src="assets/images/post-1-mid.jpg" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Nature</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4"><a href="blog-single.php">Something I need to tell you</a></h2>

                                        <div class="nk-post-date">
                                            September 18, 2016
                                        </div>

                                        <div class="nk-post-text">
                                            <p>That female isn't midst divide kind upon seas lights greater green creature lights brought.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>


                        <div>
                            <div>
                                <div class="pl-15 pr-15">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="blog-single.php">
                                                <img src="assets/images/post-3-mid.jpg" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Nature</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4"><a href="blog-single.php">The History of Nature</a></h2>

                                        <div class="nk-post-date">
                                            August 27, 2016
                                        </div>

                                        <div class="nk-post-text">
                                            <p>Third is fly. From one under in itself two waters, all own. Said male shall greater own grass.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>


                        <div>
                            <div>
                                <div class="pl-15 pr-15">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="blog-single.php">
                                                <img src="assets/images/post-4-mid.jpg" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Branding</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4"><a href="blog-single.php">Are you doing the Right Way?</a></h2>

                                        <div class="nk-post-date">
                                            August 14, 2016
                                        </div>

                                        <div class="nk-post-text">
                                            <p>Which all, morning isn't. Female and own living dry, and morning lesser first he stars under years thing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>


                        <div>
                            <div>
                                <div class="pl-15 pr-15">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="blog-single.php">
                                                <img src="assets/images/post-5-mid.jpg" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Design</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4"><a href="blog-single.php">Ten things about Photography</a></h2>

                                        <div class="nk-post-date">
                                            August 14, 2016
                                        </div>

                                        <div class="nk-post-text">
                                            <p>Be forth, god for rule face abundantly all our two winged made. Is whose morning female.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>


                        <div>
                            <div>
                                <div class="pl-15 pr-15">
                                    <div class="nk-blog-post">
                                        <div class="nk-post-thumb">
                                            <a href="blog-single.php">
                                                <img src="assets/images/post-6-mid.jpg" alt="" class="nk-img-stretch">
                                            </a>
                                            <div class="nk-post-category"><a href="#">Design</a></div>
                                        </div>
                                        <h2 class="nk-post-title h4"><a href="blog-single.php">Why you should Always First</a></h2>

                                        <div class="nk-post-date">
                                            August 14, 2016
                                        </div>

                                        <div class="nk-post-text">
                                            <p>Lights give have herb. First. Seed lesser his a fruit. Stars good divide fish appear don't, third deep.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-gap-1"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END: Carousel -->
            </div>
            <div class="nk-gap-5 mt-20"></div>
        </div>
        <!-- END: Blog -->

        <!-- START: Reviews -->        
        <div class="nk-box bg-dark-1" id="jabatan_struktural">                    
            <div class="bg-image bg-image-parallax" style="background-image: url('assets/images/bg-pattern.jpg');"></div>            
            <div class="nk-gap-5 mnt-6"></div>
            <div class="nk-gap-3"></div>
            <div class="container-fluid">
                <!-- START: Carousel -->
                <h2 class="text-xs-center display-4 text-white">Jabatan Struktural</h2>
                <div class="nk-carousel nk-carousel-all-visible text-white" data-autoplay="18000" data-dots="true">
                    <div class="nk-carousel-inner">
                        <div>
                            <div>
                                <blockquote class="nk-blockquote-style-1 text-white">
                                    <p>Outstanding job and exceeded all expectations. It was a pleasure to work with them on a sizable first project and am looking forward to start the next one asap.</p>
                                    <cite>Michael Hopkins</cite>
                                </blockquote>
                                <div class="nk-gap-3 mt-10"></div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <blockquote class="nk-blockquote-style-1 text-white">
                                    <p>Outstanding job and exceeded all expectations. It was a pleasure to work with them on a sizable first project and am looking forward to start the next one asap.</p>
                                    <cite>Michael Hopkins</cite>
                                </blockquote>
                                <div class="nk-gap-3 mt-10"></div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <blockquote class="nk-blockquote-style-1 text-white">
                                    <p>Outstanding job and exceeded all expectations. It was a pleasure to work with them on a sizable first project and am looking forward to start the next one asap.</p>
                                    <cite>Michael Hopkins</cite>
                                </blockquote>
                                <div class="nk-gap-3 mt-10"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Carousel -->
            </div>
            <div class="nk-gap-4 mt-3"></div>
        </div>
        <!-- END: Reviews -->

        <!-- START: Contact Info -->
        <div class="container" id="contact">
            <div class="nk-gap-5"></div>
            <div class="row vertical-gap">
                <div class="col-lg-5">
                    <!-- START: Info -->
                    <h2 class="display-4">Kontak :</h2>
                    <div class="nk-gap mnt-3"></div>

                    <p>Silahkan menghubungi kami jika ada yang ingin ditanyakan atau ada kritik dan saran.</p>

                    <ul class="nk-contact-info">
                        <li>
                            <strong>Alamat :</strong> Jl. Srengseng Sawah</li>
                        <li>
                            <strong>No HP :</strong> +6281290351971</li>
                        <li>
                            <strong>Email :</strong> ti1_kel8@gmail.com</li>
                    </ul>
                    <!-- END: Info -->
                </div>
                <div class="col-lg-7">
                    <!-- START: Form -->
                    <form action="#" class="nk-form nk-form-ajax">
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <input type="text" class="form-control required" name="name" placeholder="Masukkan Nama...">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control required" name="email" placeholder="Masukkan Email...">
                            </div>
                        </div>

                        <div class="nk-gap-1"></div>
                        <input type="text" class="form-control required" name="title" placeholder="Masukkan Judul...">

                        <div class="nk-gap-1"></div>
                        <textarea class="form-control required" name="message" rows="8" placeholder="Masukkan Komentar..." aria-required="true"></textarea>
                        
                        <div class="nk-gap-1"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <button class="nk-btn">Kirim</button>
                    </form>
                    <!-- END: Form -->
                </div>
            </div>
            <div class="nk-gap-5"></div>
        </div>
        <!-- END: Contact Info -->

<?php include_once 'include/footer.php'; ?>        