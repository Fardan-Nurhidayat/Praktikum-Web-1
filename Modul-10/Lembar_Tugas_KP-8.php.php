<?php 
  $olahraga = array("Sepak Bola" , "Tenis Meja " , "Bola Volly" , "Sepak Takraw" , "Golf" , "Renang");

  echo "Terdapat beberapa jenis olahraga, antara lain :<br><br>" ;
  $i;
  for($i=0;$i<count($olahraga);$i++){
    echo "olahraga $i : $olahraga[$i] <br>";
  }
?>