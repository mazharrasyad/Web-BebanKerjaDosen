<?php 
    include_once 'include/header.php'; 
    require_once 'class/Dosen.php';
    $obj_dosen = new Dosen();
    $rj = $obj_dosen->getJS();    
    $rp = $obj_dosen->getPN(); 
    $rl = $obj_dosen->getPL(); 
    $rm = $obj_dosen->getPK(); 
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
                                <div class="nk-ibox-title"><?php foreach($rj as $roj) { echo $roj['count']; } ?></div>
                                <div class="nk-ibox-text">Jabatan Struktural</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="nk-ibox-1">
                            <div class="nk-ibox-icon">
                                <span class="pe-7s-clock"></span>
                            </div>
                            <div class="nk-ibox-cont">
                                <div class="nk-ibox-title"><?php foreach($rp as $rop) { echo $rop['count']; } ?></div>
                                <div class="nk-ibox-text">Pengajaran</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="nk-ibox-1">
                            <div class="nk-ibox-icon">
                                <span class="pe-7s-star"></span>
                            </div>
                            <div class="nk-ibox-cont">
                                <div class="nk-ibox-title"><?php foreach($rl as $rol) { echo $rol['count']; } ?></div>
                                <div class="nk-ibox-text">Penelitian</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="nk-ibox-1">
                            <div class="nk-ibox-icon">
                                <span class="pe-7s-like"></span>
                            </div>
                            <div class="nk-ibox-cont">
                                <div class="nk-ibox-title"><?php foreach($rm as $rom) { echo $rom['count']; } ?></div>
                                <div class="nk-ibox-text">PKM</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Features -->

        <!-- START: Reviews -->        
        <div class="nk-box bg-dark-1" id="jabatan_struktural">                    
            <div class="bg-image bg-image-parallax" style="background-image: url('assets/images/bg-pattern.jpg');"></div>            
            <div class="nk-gap-5 mnt-5"></div>
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

<?php include_once 'include/footer.php'; ?>        