<h3>Daftar Pasien</h3>
<table class="table">
 <thead>
 <tr>
 <th>#</th><th>Tanggal</th><th>Berat</th><th>Tinggi</th>
 <th>BMI</th><th>Status</th>
 <th>Catatan</th><th>ID Pasien</th><th>Action</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor =1;
 foreach($bmi->result() as $bmi){
 echo'
 <tr>
 <td>'.$nomor.'</td>
 <td>'.$bmi->tanggal.'</td>
 <td>'.$bmi->berat.'</td>
 <td>'.$bmi->tinggi.'</td>
 <td>'.$bmi->bmi.'</td>
 <td>'.$bmi->status_bmi.'</td>
 <td>'.$bmi->catatan.'</td>
 <td>'.$bmi->pasien_id.'</td>
 <td><a href="'.base_url().'index.php/bmi_pasien/view/'
.$bmi->id.'">view</a></td>
 </tr>';
 $nomor++;
 }
 ?>
 </tbody>
 </table>