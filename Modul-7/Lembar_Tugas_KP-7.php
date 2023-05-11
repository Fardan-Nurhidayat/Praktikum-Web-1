<?php
  $n = 3 ;
  $hasil=0;
  $i=1;
  while($i<=$n){
    echo "$i";
    if($i != $n){
      echo " + ";
    }
      $hasil+=$i;
      $i++;
    }   
    echo " = $hasil <br>";
    
?> 

<?php 
  $i=1;
  do {
    echo "Nomor $i <br>"; 
    $i++;
  }while($i<=5);
    // echo "Nomor $i <br>"; 
    // $i++;
  
?>