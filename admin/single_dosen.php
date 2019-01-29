<?php 
    include_once 'include/header.php';   
    require_once 'class/Dosen.php';
    $obj_dosen = new Dosen();
    $_id = $_GET['nidn'];
    $data = $obj_dosen->findByID($_id);
    $datajs = $obj_dosen->findByJS($_id);
    $datapn = $obj_dosen->findByPN($_id);
    $datapl = $obj_dosen->findByPL($_id);
    $datapk = $obj_dosen->findByPK($_id);
?>

    <div class="nk-main">
        <div class="container">
            <div class="nk-portfolio-single">

                <div class="nk-gap-4 mb-14"></div>
                <h1 class="nk-portfolio-title display-4"><?php echo $data['nama']; ?></h1>
                <div class="row vertical-gap">
                    <div class="col-lg-6">
                        <table>
                            <tr>
                                <td><strong>NIDN</strong></td>                                
                                <td>&ensp;: <?php echo $data['nidn']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Tempat Lahir</strong></td>                                
                                <td>&ensp;: <?php echo $data['tmp_lahir']; ?></td>
                            </tr>
                            <tr>
                                <td><strong>Tanggal Lahir</strong></td>                                
                                <td>&ensp;: <?php echo $data['tgl_lahir']; ?></td>
                            </tr>                            
                            <tr>
                                <td><strong>Gender</strong></td>                                
                                <td>&ensp;: 
                                    <?php 
                                        if ($data['gender'] == 'L'){
                                            echo 'Laki-Laki';                                        
                                        } 
                                        else{
                                            echo 'Perempuan';                                              
                                        }                                
                                    ?> 
                                </td>
                            </tr>                            
                            <tr>
                                <td><strong>Program Studi</strong></td>                                
                                <td>&ensp;: 
                                    <?php 
                                        if ($data['prodi_id'] == 1){
                                            echo 'Teknik Informatika';                                        
                                        } 
                                        else{
                                            echo 'Sistem Informasi';                                              
                                        }                                
                                    ?> 
                                </td>
                            </tr>
                            <tr>
                                <td><strong>User ID</strong></td>                                
                                <td>&ensp;: <?php echo $data['user_id']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <table>         
                            <tr>
                                <td><strong>Jumlah</strong></td>                                
                            </tr>                   
                            <tr>
                                <td><strong>&ensp;&ensp; Jabatan Struktural</strong></td>                                
                                <td>&ensp;: 
                                    <?php 
                                        if ($datajs == NULL){
                                            echo '0';                                        
                                        } 
                                        else{
                                            echo $datajs['count'];                                             
                                        }                                
                                    ?> 
                                </td>
                            </tr>
                            <tr>
                                <td><strong>&ensp;&ensp; Pengajaran</strong></td>                                
                                <td>&ensp;: 
                                    <?php 
                                        if ($datapn == NULL){
                                            echo '0';                                        
                                        } 
                                        else{
                                            echo $datapn['count'];
                                        }                                
                                    ?> 
                                </td>
                            </tr>
                            <tr>
                                <td><strong>&ensp;&ensp; Penelitian</strong></td>                                
                                <td>&ensp;: 
                                    <?php 
                                        if ($datapl == NULL){
                                            echo '0';                                        
                                        } 
                                        else{
                                            echo $datapl['count'];
                                        }                                
                                    ?> 
                                </td>
                            </tr>
                            <tr>
                                <td><strong>&ensp;&ensp; PKM</strong></td>                                
                                <td>&ensp;: 
                                    <?php 
                                        if ($datapk == NULL){
                                            echo '0';                                        
                                        } 
                                        else{
                                            echo $datapk['count'];
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

        <img class="nk-img-fit" src="assets/images/lecture.jpg">

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <div class="container">
                <?php echo '<a href="form_dosen.php?nidn='.$data['nidn'].'" class="nk-pagination-center">Pengaturan</a>'; ?>                                    
            </div>
        </div>
        <!-- END: Pagination -->

<?php include_once 'include/footer.php'; ?>  