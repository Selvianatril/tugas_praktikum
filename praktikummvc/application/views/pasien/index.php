<div class="col-md-12">
    <h3>
        Daftar Pasien
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal Periksa</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>BMI</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach($list_pasien as $pasien){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$pasien->tanggal?></td>
                        <td><?=$pasien->pasien->kode?></td>
                        <td><?=$pasien->pasien->nama?></td>
                        <td><?=$pasien->pasien->gender?></td>
                        <td><?=$pasien->bmi->berat?></td>
                        <td><?=$pasien->bmi->tinggi?></td>
                        <td><?=$pasien->bmi->nilaiBMI()?></td>
                        <td><?=$pasien->bmi->statusBMI()?></td>
                    </tr>
                    <?php
                    $nomor++;
                }
            ?>
        </tbody>
    </table>
</div>