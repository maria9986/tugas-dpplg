
<!DOCTYPE html>
<html>
<head>
  <title>Jadwal</title>
</head>
<body>
  <h1>Jadwal</h1>
  <form action="" method="post">
    <label for="jam">Masukkan Jam:</label>
    <input type="time" id="jam" name="jam">
    <input type="submit" value="Cek Jadwal">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $jam = $_POST["jam"];
      $jam = explode(":", $jam);
      $jam = $jam[0] + ($jam[1] / 60);
      
      if ($jam < 4 || $jam > 24) {
        echo "Jadwal: Dunia lain";
      } elseif ($jam >= 4 && $jam < 10) {
        echo "Jadwal: Dini hari";
      } elseif ($jam >= 10 && $jam < 15) {
        echo "Jadwal: Pagi";
      } elseif ($jam >= 15 && $jam < 17.5) {
        echo "Jadwal: Siang";
      } elseif ($jam >= 17.5 && $jam < 18.5) {
        echo "Jadwal: Sore";
      } elseif ($jam >= 18.5 && $jam <= 24) {
        echo "Jadwal: Petang";
      }
    }
  ?>
</body>
</html>
