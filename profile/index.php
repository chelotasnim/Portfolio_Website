<?php
require '../conn.php';
session_start();
if(isset($_POST["login"])) {
    $name = $_POST["user"];
    $pass = $_POST["pass"];

    $userCheck = mysqli_query($conn, "SELECT * FROM user WHERE nama='$name'");
    if(mysqli_num_rows($userCheck) === 1) {
        $userData = mysqli_fetch_assoc($userCheck);
        if(password_verify($pass, $userData["password"])) {
            $_SESSION["imIn"] = true;
        } else {
            header("Location: ../");
        }
    } else {
        header("Location: ../");
    }
}

if(isset($_POST["send"])) {
    $message = htmlspecialchars($_POST["message"]);
    $kode = (int)$_POST["cc"];

    mysqli_query($conn, "INSERT INTO pesan VALUES('$message', '$kode')");
};

if(!isset($_SESSION["imIn"])) {
    header("Location: ../");
};

if(!isset($_POST["login"])) {
    header("Location: logout.php");
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profile <?= $userData["nama"]; ?></title>
</head>
<body>
    <div class="page">
        <div class="back-btn">
            <ion-icon name="log-out-outline"></ion-icon>
            <a href="logout.php">Log Out</a>
        </div>
        <div class="sorry">
            <ion-icon name="paper-plane-outline"></ion-icon>
            <h5>Terima Kasih sudah mendaftar!</h5>
            <p>Mohon maaf, fitur live-chat belum tersedia dan baru akan diluncurkan dalam waktu dekat</p>
            <p>Untuk saat ini anda dapat menghubungi melalui form kontak dibawah</p>
        </div>
        <form action="" method="POST">
            <div class="prompt user">
                <h5><?= $userData["nama"]; ?></h5>
            </div>
            <div class="compare-symb">:</div>
            <div class="prompt message">
                <textarea name="message" placeholder="Tulis pesan anda disini!"></textarea>
                <input name="cc" type="text" value="<?= $userData["kode_chat"]; ?>" readonly hidden>
            </div>
            <button name="send" class="prompt send">
                <ion-icon name="chevron-forward-outline"></ion-icon>
            </button>
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>