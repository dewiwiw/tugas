<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="Logo SMK MTS.png" type="image/x-icon">
    <title>Peminjam</title>
    <style>
        body {
            background-color: white; 
            padding-top: 40px; 
        }
  
        .container {
            margin-top: 20px;
        }
  
        .alert {
            font-weight: bold;
            text-align: center;
        }

        .tombol {
            font-weight: bold;
        }

  h3{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: #080808;
    text-align: center;
  }
    </style>
</head>
<body>
    <br>
<center>
    <h2>Aplikasi Perpustakaan Digital</h2>

<div class="alert alert-secondary" class="alert">
      Anda Login Sebagai <b>PEMINJAM</b> Aplikasi Perpustakaan Digital
    </div>
    </center>
    <button type="button" class="btn btn-primary">Peminjam</button>
    <button type="button" class="btn btn-primary">History</button>
    <button type="button" class="btn btn-primary">Logout</button>
    <div class="card mt-2" class="card">
      <div class="card-body">
        <?php
        $file = @$_GET['url'];
        if (empty($file)) {
          echo "<h4>Selamat Datang Di Halaman Peminjam.</h4>";
          echo "Aplikasi Perpustakaan Digital digunakan untuk mempermudah siswa/siswi membaca dan meminjam buku di SMK Management Training Systems.";
        } else {
          include $file . '.php';
        }
        ?>
      </div>
    </div>
</body>
</html>