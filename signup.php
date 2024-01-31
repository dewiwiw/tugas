<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>
    <link rel="shortcut icon" href="Logo SMK MTS.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="content">
        <div class="card" style="margin-top: 1rem;">
            <div class="row">
                <div class="col m-4">
                    <h2>Silahkan Masukkan Data Anda Untuk Melanjutkan</h2>
                <form action="aksi/proses_daftar.php" method="post" >
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIS</label>
                        <input type="text" name="NIS" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="NamaLengkap" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" name="Email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="Alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="Username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="Password" class="form-control" required id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Level</label>
                    <select class="form-select" name="Level" aria-label="Default select example">
                        <option selected>Pilih</option>
                        <option value="1">Admin</option>
                        <option value="1">Petugas</option>
                        <option value="1">Peminjam</option>
                    </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <p class="mt-3">Saya Sudah Memiliki Akun. Login <a href="index.php" class="btn btn-warning">Disini</a></p>
                </div>                
                <div class="col">
                    <img src="asset/g.png" width="500" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>