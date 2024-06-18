<html>
  <head>
    <title>
    PRAK302
    </title>
  </head>
  <body>
    <form action="" method="post">
      <label for="tinggi">Tinggi : </label>
      <input type="text" name="tinggi" id="tinggi"><br>
      <label for="img">Alamat Gambar : </label>
      <input type="text" name="img" id="img"><br>
      <button type="submit" name="submit">Cetak</button>
    </form>
    <br>
    <?php
      if(isset($_POST["submit"])) {
        $tinggi = $_POST["tinggi"];
        $i = 1; $j = 1;
        $k = $tinggi;
        $img = $_POST['img'];
        while($i <= $tinggi) {
          while($j < $i) {
            echo"<img src='$img' style='width: 25px; opacity: 0'>";
            $j++;
          }
          while($k >= $i) {
            echo"<img src='$img' style='width: 25px'>";
            $k--;
          }
          echo"<br>";
          $j = 1;
          $k = $tinggi;
          $i++;
        }
      }
    ?>
  </body>
</html>