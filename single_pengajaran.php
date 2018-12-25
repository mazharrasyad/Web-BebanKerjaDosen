<?php 
    include_once 'include/header.php';   
    require_once 'class/Pengajaran.php';
    $obj_pengajaran = new Pengajaran();
    $_id = $_GET['id'];
    $data = $obj_pengajaran->findByID($_id);
?>

    <div class="nk-main">
        <div class="container">
            <div class="nk-portfolio-single">

                <div class="nk-gap-4 mb-14"></div>
                <h1 class="nk-portfolio-title display-4"><?php echo $data['namamk']; ?></h1>
                <div class="row vertical-gap">
                    <div class="col-lg-8">
                        <div class="nk-portfolio-info">
                            <div class="nk-portfolio-text">
                                <p>Nullam lobortis neque turpis, nec tempus sem pharetra at. Donec et quam, ullamcorper velit. Aliquam maximus ullamcorper ligula, at placerat dui hendrerit sed. Sed metus urna, bibendum id tortor, feugiat ipsum. Aliquam vehicula neque sit amet dolor malesuada pretium.</p>
                                <p>Curabitur tristique, felis ut mattis auctor, elit ante laoreet libero, ac lorem quam vitae libero. Suspen disse aliquet eget risus quis vehicula.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <table class="nk-portfolio-details">
                            <tr>
                                <td><strong>Semester</strong></td>                                
                                <td>: <?php echo $data['semester']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Kode</strong></td>                                
                                <td>: <?php echo $data['kodemk']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>SKS</strong></td>                                
                                <td>: <?php echo $data['sks']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Status</strong></td>                                
                                <td>: 
                                    <?php 
                                        if ($row['status'] == 0){
                                            echo 'Tidak Aktif';                                        
                                        } 
                                        else{
                                            echo 'Aktif';                                              
                                        }                                
                                    ?> 
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="nk-gap-4 mt-14"></div>

            </div>
        </div>

        <img class="nk-img-fit" src="assets/images/portfolio-4-video-thumb.jpg">

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <div class="container">
                <?php echo '<a href="portfolio-single.php?id='.$data['id'].'" class="nk-pagination-prev">' ?>                            
                    <span class="pe-7s-angle-left"></span> Previous </a>
                <a class="nk-pagination-center" href="#">
                    <span class="nk-icon-squares"></span>
                </a>
                <a class="nk-pagination-next" href="#"> Next <span class="pe-7s-angle-right"></span> </a>
            </div>
        </div>
        <!-- END: Pagination -->

<?php include_once 'include/footer.php'; ?>  