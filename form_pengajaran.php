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
                <h1 class="nk-portfolio-title display-4">Input Pengajaran</h1>
                <div class="row vertical-gap">
                
                    <div class="col-lg-12">
                        <!-- START: Form -->
                        <form action="#" class="nk-form nk-form-ajax">                            
                            <div class="nk-gap-1"></div>
                            <input type="number" class="form-control required" name="semester" placeholder="Masukkan Semester...">

                            <div class="nk-gap-1"></div>
                            <input type="text" class="form-control required" name="" placeholder="Masukkan Nama...">

                            <div class="nk-gap-1"></div>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                            <button class="nk-btn">Kirim</button>
                        </form>
                        <!-- END: Form -->
                    </div>

                </div>
                <div class="nk-gap-4 mt-14"></div>

            </div>
        </div>

<?php include_once 'include/footer.php'; ?>  