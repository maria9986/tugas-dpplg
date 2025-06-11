<!DOCTYPE html>
<html>
<head>
  <title>nilai</title>
</head>
<body>
  <h1>nilai </h1>
  <form action="" method="post">
    <label for="nilai">Masukkan nilai:</label>
    <input type="keterangan" id="keterangan" name="100">
    <input type="submit" value="Cek nilai">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nilia=$post["jam"];
      $nilai=explode(":",$nilia);
      
      if ($nilai >100){
      }if($nilai>=90 && $nilai <=100){
         echo="A"
      }else if ($nilai >= 80 && $nilai <= 89){
         echo="B"
      }else if ($nilai>= 70 && $nilai <= 79){
         echo ="C"
      }else if ($nilai>= 60 && $nilai <= 0){
         echo="D"
      }else
        echo $nilai=="nilai antar 100 sampai 0"
    }
  ?>
</body>
</html>
