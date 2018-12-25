<?php
    include_once 'include/header.php';
    include_once 'class/Pengajaran.php';
    $obj_pengajaran = new Pengajaran();
    $rs = $obj_pengajaran->getAll();      
?>
        <h1>Daftar Pengajaran</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Semester</th>
                    <th>Mata Kuliah</th>
                    <th>NIDN</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;                                           
                    foreach($rs as $row){     
                        if($rs['nidn'] == $rd->nidn){                                                                                                                                                                                                              
                ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?=$row['semester'];?></td>
                        <td><?=$row['namamk'];?></td>
                        <td>
                            <?php
                                echo $rod['nidn']."<br>".$row['nidn'];
                            ?>
                        </td>
                        <td>
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
                <?php
                        $nomor++;
                    }}
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once 'include/footer.php'; ?>