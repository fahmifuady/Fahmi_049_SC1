<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <form action="session_process.php" method="post">
        <input type="text" name="kolom_input_session1" required /></br>
        <input type="text" name="kolom_input_session2" required /></br>
        <button type="submit">Simpan</button>
    </form>
    <?php session_start() ?>
    session saved 1: <?php echo isset($_SESSION['session_saved1']) ? $_SESSION['session_saved1'] : 'session 1 empty' ?>
    <br>
    session saved 2: <?php echo isset($_SESSION['session_saved2']) ? $_SESSION['session_saved2'] : 'session 2 empty' ?>
    <br>

    <a href="session_process.php?process=hapus_session1"><button>Hapus Session 1</button></a><br>
    <a href="session_process.php?process=hapus_session2"><button>Hapus Session 2</button></a><br>
    <a href="session_process.php?process=hapus_semua_session"><button>Hapus Session Semua</button></a><br>
    <?php session_start() ?>
</body>

</html>