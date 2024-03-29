<?php
include "connection.php";
$qkelas = "select * from kelas";
$data_kelas = $conn->query($qkelas);

$qmahasiswa = "select * from mahasiswa";
$data_mahasiswa = $conn->query($qmahasiswa);

$qtotal = "select count(*) as total from mahasiswa";
$data_total = $conn->query($qtotal);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Form Mahasiswa</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="bg-light">
    <div class="container" style="min-height: 93vh;">
        <div class="py-5 text-center">
            <h2>Form Mahasiswa</h2>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                Konten Data
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Data Mahasiswa</span>
                    <span class="badge text-bg-secondary">
                        <?php
                        if ($data_total->num_rows > 0) {
                            $data_total = $data_total->fetch_assoc();
                            $data_total = $data_total['total'];
                            echo $data_total;
                        }
                        ?>
                    </span>
                </h4>
                <?php
                foreach ($data_mahasiswa as $index => $value) {
                ?>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed mt-1">
                            <div>
                                <h6 class="my-0"><?php echo $value['nama_lengkap'] ?></h6>
                                <small class="text-muted"><?php echo $value['alamat'] ?></small>
                            </div>
                            <span class="text-muted">
                                <?php
                                foreach ($data_kelas as $id_kelas) {
                                    if ($id_kelas['kelas_id'] == $value['kelas_id']) {
                                        echo $id_kelas['nama'];
                                    }
                                }
                                ?>
                            </span>
                        </li>
                    <?php
                }
                    ?>
            </div>
            <div class="col-md-8 order-md-1">
                Konten Input
                <h4 class="mb-3">Input Data</h4>
                <form action="simpan_mahasiswa.php" method="POST">
                    <div class="mb-3">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas">Kelas</label>
                        <select class="custom-select d-block w-100" id="Kelas" name="kelas_id" required>
                            <option value="">Pilih...</option>
                            <?php
                            foreach ($data_kelas as $index => $value) {
                            ?>
                                <option value="<?php echo $value['kelas_id'] ?>"><?php echo $value['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="row">
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan Data</button>
                </form>
            </div>
        </div>

    </div>
    <footer class="text-muted text-center text-small">
        <p class="mb-1">&copy; 2023 fahmi</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</body>

</html>