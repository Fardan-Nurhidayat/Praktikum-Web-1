<?php
    $nim = "0411500400";
    $nama = 'Chotimatul Musyarofah';
    $umur = 23;
    $nilai = 82.25;
    $status = TRUE;

    echo "Nama : $nama<br>";
    echo "Umur : " . $umur; print "<br>";
  echo "Nilai : $nilai<br>";
?>
<table border="1">
  <tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Umur</th>
    <th>nilai</th>
  </tr>
    <tr>
      <td>
        <?php 
          echo "$nim" ;
        ?>
      </td>
      <td>
        <?php 
          echo "$nama" ;
        ?>
      </td>
      <td>
        <?php 
          echo "$umur" ;
        ?>
      </td>
      <td>
        <?php 
          echo "$nilai" ;
        ?>
      </td>
    </tr>  
  
</table>