<?php
include "connection.php";
include "create_messege.php";
$sql = "DELETE from mahasiswa where mahasiswa_id=" . $_GET['mahasiswa_id'];
if ($conn->query($sql) === TRUE) {
    $conn->close();
    create_message("Hapus data berhasil!", "success", "check");
    header("location:index.php");
    exit();
} else {
    $conn->close();
    create_message("Error: " . $sql . "<br>" . $conn->error, "danger", "warning");
    header("location:index.php");
    exit();
}
