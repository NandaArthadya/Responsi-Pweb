<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        body{
            font-family: roboto;
            background-color: #ADD8E6 ;
        }
        .container{
            position: relative;
            text-align: center;
        }
    </style>
</head>
<body>
  <div class="container">
        <h1 align="center">Terima Kasih Telah Menggunakan Jasa Kami</h1>
      <?php 
        $Nama = $_POST['inama'];
        $Jarak = $_POST['ijarak'];
        $Asal= $_POST['iasal'];
        $Tujuan= $_POST['itujuan'];
        $Total_Bayar=$_POST['ototal'];
        $tanggal= date("Y-m-d");

        echo "<head><title>My Guest Book</title></head>";
        $fp = fopen("file.txt", "a+");
        fputs($fp, "$tanggal|$Nama|$Asal|$Tujuan|$Jarak|$Total_Bayar\n");
        fclose($fp);

        echo "Lihat Database<br>";
        echo "<a href='index.php'>Link mengisi data<br>";
        echo "<a href='lihat.php'>Lihat Database</a><br>";

        ?>
  </div>
</body>
</html>