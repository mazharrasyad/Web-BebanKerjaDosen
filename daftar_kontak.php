<?php include_once 'include/header.php'; ?>

    <div class="nk-main">
        <div class="container">
            <!-- START: Form -->
            <form method="POST" action="proses_kontak.php" class="nk-form nk-form-ajax">    
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
                                        <input type="text" class="form-control required" name="nama" placeholder="Masukkan Nama..." required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control required" name="email" placeholder="Masukkan Email..." required>
                                    </div>
                                </div>

                                <div class="nk-gap-1"></div>
                                <input type="text" class="form-control required" name="subjek" placeholder="Masukkan Subjek..." required>

                                <div class="nk-gap-1"></div>
                                <textarea class="form-control required" name="komentar" rows="8" placeholder="Masukkan Komentar..." aria-required="true" required></textarea>
                                
                                <div class="nk-gap-1"></div>
                                <div class="nk-form-response-success"></div>
                                <div class="nk-form-response-error"></div>
                                <input type="submit" class="nk-btn" name="proses" value="Kirim">
                            </form>
                            <!-- END: Form -->
                        </div>
                    </div>
                    <div class="nk-gap-5"></div>
                </div>
                <!-- END: Contact Info -->
            </form>
            <!-- END: Form -->
            </div>
        </div>

<?php include_once 'include/footer.php'; ?>  