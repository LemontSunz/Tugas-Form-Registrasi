<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukan Data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-5">
            <h1>Form Registrasi</h1>

                <form class="row 8-3" form action="TugasFormRegistrasi.php" method="post">

                <div class="mb-2">
                    <p class="text-secondary">Isi Data Dibawah ini : <br> Nama :</p>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>

                <div class="mb-2">
                    <p class="text-secondary">Alamat :</p>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                </div>

                <div class="col-md-5">
                    <p class="text-secondary">Tempat lahir :</p>
                    <input type="text" class="form-control" name="tmptlahir" id="tmptlahir" required>
                </div>

                <div class="col-md-5">
                    <p class="text-secondary">Tanggal lahir :</p>
                    <input type="text" class="form-control" name="tgllahir" id="tgllahir">
                </div>

                <div class="col-md-6">
                    <p class="text-secondary">jenis kelamin :</p>
                    <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-laki" checked> Laki-laki <input class="form-check-input" type="radio" name="jk" id="jk" value="perempuan"> perempuan
                </div>

                <div class="col-md-4">
                    <p class="text-secondary">Pendidikan</p>
                    <select class="form-select" id="pendidikan" name="pendidikan">
                        <option selected>D3</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                    </select>
                </div>

                <div class="col-md-5">
                        <button type="submit" class="btn btn-primary">select</button>
                        <button type="reset" class="btn btn-secondary">cancel</button>
                    </div>
                </form>
        </div>
    </div>
    
</body>
</html>


<?php
error_reporting(0); 
$nama= $_POST['nama'];
$alamat= $_POST['alamat'];
$tmptlahir= $_POST['tmptlahir'];
$tgllahir= $_POST['tgllahir'];
$jk= $_POST['jk'];
$pendidikan= $_POST['pendidikan'];

if(!empty($nama) && !empty($alamat) && !empty($tmptlahir) && !empty($tgllahir) && !empty($jk) && !empty($pendidikan)){ ?>

<div class="row">
    <div class="col-mb-5">
        <table class="table table-striped">
            <tr>
                <td>Nama</td>
                <td><?= $nama?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $alamat?></td>
            </tr>
            <tr>
                <td>Tempat lahir</td>
                <td><?= $tmptlahir?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?= $tgllahir?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?= $jk?></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td><?= $pendidikan?></td>
            </tr>
        </table>
</div>
</div>
<?php } ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>
</html>
