<form method="post">
  <table border="0">
    <tr>
      <td> Nilai A </td>
      <td>:</td>
      <td><input type="text" name="angkaA"></td>
    </tr>  
    <tr>
      <td> Nilai B </td>
      <td>:</td>
      <td><input type="text" name="angkaB"></td>
    </tr> 
    <tr><td height="20"></td></tr>
    <tr>
      <td><input type="submit" name="submit" value="Tambah"></td> 
      <td><input type="submit" value="Reset"></td> 
    </tr>  
  </table>
</form>  
<?php 
  if(isset($_POST['submit'])){
    $angkaA = $_POST['angkaA'];
    $angkaB = $_POST['angkaB'];
    $hasil = $angkaA + $angkaB;
    echo "Hasil : $hasil";
  }else if (isset($_POST['reset'])){
    $angkaA =  "";
    $angkaB =  "";
    echo "Inputan Telah direset";
  }
?>
