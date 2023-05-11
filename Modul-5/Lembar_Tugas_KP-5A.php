<?php 
  $nama = "Andi Firmansyah ";
  $Tempat = "Cilacap";
  $TL = "26 April 1991";
  $alamat = "Jl. Kalimantan, Cilacap";
  $agama = "Islam";
  $pekerjaan = "Mahasiswa";
  $status = "Perjaka";
  echo "<h2>BIODATA SAYA ADALAH SEBAGAI BERIKUT </h2> <br>";
?>
<table>
  <tr>
    <td>Nama Lengkap </td>
    <td>:<td>
    <td><?php echo $nama ?>
  </tr>
  <tr>
    <td>Tempat/Tanggal Lahir </td>
    <td>:<td>
    <td><?php echo $Tempat . ", ".$TL ?>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:<td>
    <td><?php echo $alamat ?>
  </tr>
  <tr>
    <td>Agama </td>
    <td>:<td>
    <td><?php echo $agama ?>
  </tr>
  <tr>
    <td>pekerjaan </td>
    <td>:<td>
    <td><?php echo $pekerjaan ?>
  </tr>
  <tr>
    <td>Status </td>
    <td>:<td>
    <td><?php echo $status ?>
  </tr>
</table>    

