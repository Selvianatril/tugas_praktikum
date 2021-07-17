<h2>Data BMI #ID : <?=$bmi->id?></h2>
<div>
<table class="table table-striped">
<tr>
<td>Tanggal</td><td>:</td><td><?=$bmi->tanggal?></td>
</tr>
<tr><td>Berat</td><td>:</td><td><?=$bmi->berat?></td></tr>
<tr>
<td>Tinggi</td><td>:</td><td><?=$bmi->tinggi?></td>
</tr>
<tr>
<td>BMI</td><td>:</td>
<td><?=$bmi->bmi?></td>
</tr>
<tr><td>Status</td><td>:</td><td><?=$bmi->status_bmi?></td></tr>
<tr><td>Catatan</td><td>:</td><td><?=$bmi->catatan?></td></tr>
<tr><td>ID Pasien</td><td>:</td><td><?=$bmi->pasien_id?></td></tr>
</table>
</div>


<td>'.$bmi->tanggal.'</td>
 <td>'.$bmi->berat.'</td>
 <td>'.$bmi->tinggi.'</td>
 <td>'.$bmi->bmi.'</td>
 <td>'.$bmi->status_bmi.'</td>
 <td>'.$bmi->catatan.'</td>
 <td>'.$bmi->pasien_id.'</td>