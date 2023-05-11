<?php
  $server = $_SERVER['PHP_SELF'];
  ?>
  <h2>Contoh Penggunaan Operator pada PHP</h2>
  <form action="<?php echo $server;?>" method="post">
  <input type="text" name="nilai1" value="0" />
  <select name="operator">
  <option>-</option>
  <option>+</option>
  <option>/</option>
  <option>*</option>
  <option>%</option>
  </select>
  <input type="text" name="nilai2" value="0" />
  <input type="submit" name="proses" value="Proses" />
  </form>
  
  <?php
  $nilai1=isset($_POST['nilai1']);
  $operator=isset($_POST['operator']);
  $nilai2=isset($_POST['nilai2']);
  if($operator=='-'){
  $hasil=$nilai1-$nilai2;
  }
  if($operator=='+'){
  $hasil=$nilai1+$nilai2;
  }
  if($operator=='/'){
  $hasil=$nilai1/$nilai2;
  }
  if($operator=='*'){
  $hasil=$nilai1*$nilai2;
  }
  if($operator=='%'){
  $hasil=$nilai1%$nilai2;
  }
  echo $hasil;
?>