<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mengarahkan anda ke halaman</title>
</head>
<body>
    <div class="page">
        <div class="container wrapp-this">
            <div class="path">
                <img src="../assets/path.png">
            </div>
            <div class="rocket">
                <ion-icon name="rocket-sharp"></ion-icon>
            </div>
        </div>
        <div class="load-container wrapp-this">
            <?php if(isset($_GET["text"])) : ?> 
                <p>Fakta Unik : <?php include($_GET["text"] . '.txt'); ?></p>
            <?php endif; ?>
            <?php if(!isset($_GET["text"])) {
                header("location: ../");
            }
            ?>
            <div class="load-bar">
                <div class="inner-bar"></div>
            </div>
            <p class="direct-text">Mengalihkan anda ke halaman tujuan</p>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        const wrap = document.querySelectorAll('.wrapp-this');
        window.onload = function() {
            wrap.forEach(side => {
                side.classList.add('displayed');
            });
        };


        function directPage() {
            <?php if(isset($_GET["direct"])) : ?>
                window.location = '../sub-page/' + '<?= $_GET["direct"]; ?>' + '.html';
            <?php endif; ?>
            <?php if(isset($_GET["back"])) : ?>
                window.location = '../';
            <?php endif; ?>
        };
        setTimeout(directPage, 5000);
    </script>
</body>
</html>