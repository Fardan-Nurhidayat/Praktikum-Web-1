<?php
$n = 3; //menentukan variable yang akan ditambahkan
 $hasil = 0;
 for($i=1; $i<=$n; $i++) {
 $hasil += $i;
 if($i !=$n) {
 echo "$i + ";
 } else if($i = $n) {
 echo "$i = ";
 }
 }
 echo "$hasil";
?>