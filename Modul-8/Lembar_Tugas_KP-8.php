  <fieldset><legend>Input Nilai</legend>
    <form method="post">
      <table>
        <tr>
          <td>Nilai</td>
          <td>:</td>
          <td><input type="number" name="nilai" placeholder="Masukan Nilai "></td>
        </tr>  
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" value="Proses"></td>
      </table>
    </form>        
  </fieldset>  

<?php 
  if(isset($_POST['nilai'])){
    $nilai = $_POST['nilai'];
      if($nilai % 2 ==0){
        echo "$nilai adalah bilangan genap";
      }else {
        echo "$nilai adalah bilangan ganjil";
      }
}
?>