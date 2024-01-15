<?php
include "connection.php";

// $sql = "INSERT INTO mahasiswa (nama_lengkap, kelas_id, alamat)
//  VALUES ('" . $_POST['nama_lengkap'] . "', " . $_POST['kelas_id'] . ", '" . $_POST['alamat'] . "
// ')";
// if ($conn->query($sql) === TRUE) {
//     $conn->close();
//     header("location:index.php");
//     exit();
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//     $conn->close();
//     exit();
// }

if (isset($_POST['mahasiswa_id'])) {
    //Kondisi Update
    $sql = "UPDATE mahasiswa SET nama_lengkap = '" . $_POST['nama_lengkap'] . "',alamat
   = '" . $_POST['alamat'] . "',kelas_id = '" . $_POST['kelas_id'] . "' WHERE (`mahasiswa_id` =
   '" . $_POST['mahasiswa_id'] . "');";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("location:" . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        $conn->close();
        header("location:" . $_SERVER['HTTP_REFERER']);
        exit();
    }
} else {
    //Kondisi Insert

    //     $sql = "INSERT INTO mahasiswa (nama_lengkap, kelas_id, alamat)
    //     VALUES ('" . $_POST['nama_lengkap'] . "', " . $_POST['kelas_id'] . ", '" . $_POST['alamat
    //    '] . "')";
    //     if ($conn->query($sql) === TRUE) {
    //         $conn->close();
    //         header("location:index.php");
    //         exit();
    //     } else {
    //         $conn->close();
    //         header("location:index.php");
    //         exit();
    //     }
    $sql = "INSERT INTO mahasiswa (nama_lengkap, kelas_id, alamat)
            VALUES ('" . $_POST['nama_lengkap'] . "', " . $_POST['kelas_id'] . ", '" . $_POST['alamat'] . "
            ')";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("location:index.php");
        exit();
    } else {
        $conn->close();
        header("location:index.php");
        echo "Error: " . $sql . "<br>" . $conn->error;
        exit();
    }
}
