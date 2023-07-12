<?php
require 'conn.php';
session_start();
if(isset($_SESSION["imIn"])) {
    header("Location: profile/index.php");
};
?>

<!DOCTYPE html>
<html lang="en" translate="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Chelo Tasnim</title>
</head>
<body>
    <div class="first-load">
        <ion-icon name="aperture-outline"></ion-icon>
        <p>Selamat Datang</p>
    </div>
    <div class="fade"></div>
    <nav class="main-navigation my-only-flex">
        <div class="close-btn">
            <ion-icon name="list-outline"></ion-icon>
        </div>
        <div class="navigation-components nav-label my-only-flex">
            <ion-icon name="terminal-outline"></ion-icon>
            <p>Chelo Tasnim</p>
        </div>
        <div class="navigation-components nav-link my-relative my-only-flex">
            <div class="anchor-box my-relative">
                <a class="my-relative" href="#home">
                    Beranda
                    <div class="anchor-line my-absolute"></div>
                </a>
            </div>
            <div class="anchor-box my-relative">
                <a class="my-relative" href="#about">
                    Tentang
                    <div class="anchor-line my-absolute"></div>
                </a>
            </div>
            <div class="anchor-box my-relative">
                <a class="my-relative" href="#project">
                    Project
                    <div class="anchor-line my-absolute"></div>
                </a>
            </div>
            <div class="anchor-box my-relative">
                <a class="my-relative" href="#services">
                    Layanan
                    <div class="anchor-line my-absolute"></div>
                </a>
            </div>
            <div class="anchor-box my-relative">
                <a class="my-relative" href="#contact">
                    Kontak
                    <div class="anchor-line my-absolute"></div>
                </a>
            </div>
        </div>
    </nav>
    <div id="home" class="section-content">
        <h1 class="decor-text my-absolute top">DESIGN</h1>
        <h1 class="decor-text my-absolute bottom">XVI</h1>
        <div class="hero-page page my-relative my-flex-pack">
            <div class="hero-title my-relative left col my-only-flex" style="--ord:3">
                <div>
                    <h5>Pengalaman</h5>
                    <div class="menu">
                        <p>Graphic Designer</p>
                        <p>Web Programmer</p>
                        <p>Web Designer</p>
                    </div>
                </div>
            </div>
            <div class="hero-image col my-only-flex" style="--ord:1">
                <div class="image-grid my-relative">
                    <img class="my-absolute" draggable="false" src="assets/my-profile.png">
                    <div class="image-box" style="--area:box1"></div>
                    <div class="image-box" style="--area:box2"></div>
                    <div class="image-box" style="--area:box3"></div>
                    <div class="image-box" style="--area:box4"></div>
                    <div class="image-box" style="--area:box5"></div>
                    <div class="image-box" style="--area:box6"></div>
                    <div class="image-box" style="--area:box7"></div>
                </div>
            </div>
            <div class="hero-title my-relative right col my-only-flex" style="--ord:2">
                <div>
                    <h5>Chelo Tasnim</h5>
                    <div class="menu">
                        <nav>
                            <a href="#about">Tentang</a>
                        </nav>
                        <nav>
                            <a href="#project">Project</a>
                        </nav>
                        <nav>
                            <a href="#services">Layanan</a>
                        </nav>
                        <nav>
                            <a href="#contact">Kontak</a>
                        </nav>
                        <nav>
                            <a class="download-cv" href="assets/CheloTasnim.pdf" target="_blank">Download CV</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="profile-desc my-absolute">
                <h6>Singkat Tentang Saya</h6>
                <p>
                    Halo! Selamat datang di laman saya. Saya Chelo Tasnim, sebagai perkenalan saya orang yang memiliki ketertarikan dalam Design dan pengembangan Website. Saya cukup ahli dalam hal pengembangan website. Kamu bisa melihat project yang saya buat di laman ini.
                </p>
            </div>
        </div>
    </div>
    <div id="about"  class="about-section section-content">
        <div class="about-page page my-relative my-flex-pack">
            <div class="about-container my-relative">
                <div class="about-grid my-relative my-flex-pack" style="--area:box1"></div>
                <div class="about-grid my-relative my-flex-pack about-grid-head" style="--area:box2">
                    <h5>Tentang Saya</h5>
                </div>
                <div class="about-grid my-relative my-flex-pack" style="--area:box3"></div>
                <div class="about-grid my-relative my-flex-pack" style="--area:box4">
                    <div id="prestation" class="about-box my-relative my-flex-pack champ-box box-link">
                        <div class="more-please">
                            <p>Lebih Lanjut</p>
                            <img src="assets/lebih-lanjut.png"/>
                        </div>
                        <div class="prestation-logo">
                            <ion-icon name="trophy-outline"></ion-icon>
                        </div>
                        <div class="prestation-title my-only-flex">
                            <h5>#2</h5>
                            <p>
                                Web
                                <br>
                                Programming
                            </p>
                        </div>
                        <div class="prestation-event">
                            <p>-EPIM-TI2022-</p>
                        </div>
                    </div>
                </div>
                <div class="about-grid my-relative my-flex-pack" style="--area:box5">
                    <div class="about-box my-relative my-flex-pack">
                        <div class="about-profile">
                            <img draggable="false" src="assets/me-w-troop.jpeg">
                        </div>
                        <div class="about-desc">
                            <h5>Chelo Tasnim</h5>
                            <p>
                            Halo! Selamat datang di laman saya. Saya Chelo Tasnim asal Jawa Timur, Indonesia. Sebagai perkenalan saya adalah orang yang memiliki ketertarikan dalam Design dan pengembangan Website. Saya cukup ahli dalam hal pengembangan website. Kamu bisa melihat project yang saya buat di laman ini. Saya juga dapat membantu pembuatan dan design website anda.
                            </p>
                            <a class="box-download-cv" href="assets/CheloTasnim.pdf" target="_blank">Download CV</a>
                        </div>
                    </div>
                </div>
                <div class="about-grid my-relative my-flex-pack" style="--area:box6">
                    <div class="more-please">
                        <p>Lebih Lanjut</p>
                        <img src="assets/lebih-lanjut.png"/>
                    </div>
                    <div class="about-box my-relative my-flex-pack aside-box">
                        <div class="logo row-inside my-flex-pack">
                            <ion-icon name="logo-web-component"></ion-icon>
                        </div>
                        <div id="tech" class="tip row-inside my-flex-pack box-link">
                            <h4>
                                Penguasaan
                                <br>
                                Software ➔
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="about-grid my-relative my-flex-pack" style="--area:box7">
                    <div class="more-please">
                        <p>Lebih Lanjut</p>
                        <img src="assets/lebih-lanjut.png"/>
                    </div>
                    <div class="about-box my-relative my-flex-pack aside-box">
                        <div class="logo row-inside my-flex-pack">
                            <ion-icon name="library-outline"></ion-icon>
                        </div>
                        <div id="skill" class="tip row-inside my-flex-pack box-link">
                            <h4>
                                Kemampuan
                                <br>
                                Saya ➔
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="about-grid my-relative my-flex-pack" style="--area:box8"></div>
                <div class="about-grid my-relative my-flex-pack" style="--area:box9">
                    <a href="#project" class="about-box my-relative my-flex-pack others">
                        <ion-icon class="my-absolute" name="terminal-outline"></ion-icon>
                        <h5>Lihat project</h5>
                    </a>
                </div>
                <div class="about-grid my-relative my-flex-pack" style="--area:box10">
                    <a href="#services" class="about-box my-relative my-flex-pack others">
                        <ion-icon class="my-absolute" name="map-outline"></ion-icon>
                        <h5>Layanan Saya</h5>
                    </a>
                </div>
                <div class="about-grid" style="--area:box11"></div>
                <div class="about-grid" style="--area:box12"></div>
                <div class="about-grid" style="--area:box13"></div>
                <div class="about-grid" style="--area:box14"></div>
                <div class="about-grid" style="--area:box15"></div>
                <div class="about-grid" style="--area:box16"></div>
                <div class="about-grid" style="--area:box17"></div>
            </div>
        </div>
    </div>
    <div id="project" class="section-content">
        <div class="project-page page my-relative my-flex-pack">
            <div class="project-bgr my-absolute my-flex-pack">
                <img draggable="false" src="assets/webapp-bgr.png">
            </div>
            <div class="project-container my-relative">
                <div class="project-grid my-relative" style="--area:box1"></div>
                <div class="project-grid my-relative project-title my-only-flex" style="--area:box2">
                    <div class="project-box">
                        <h1>
                            <span>Lihat</span>
                            <br>
                            Project.
                        </h1>
                    </div>
                </div>
                <div class="project-grid my-relative" style="--area:box3"></div>
                <div class="project-grid my-relative" style="--area:box4"></div>
                <div class="project-grid my-relative project-type" style="--area:box5">
                    <div class="project-needle my-absolute right"></div>
                    <div class="project-needle my-absolute left"></div>
                    <div class="project-box my-relative my-only-flex">
                        <div id="webApp" class="project-option my-relative my-flex-pack box-link">
                            <ion-icon class="my-absolute" name="logo-web-component"></ion-icon>
                            <h5>Web Application</h5>
                        </div>
                        <div id="games" class="project-option my-relative my-flex-pack box-link">
                            <ion-icon class="my-absolute" name="game-controller-outline"></ion-icon>
                            <h5>Mini Games</h5>
                        </div>
                        <div id="tools" class="project-option my-relative my-flex-pack box-link">
                            <ion-icon class="my-absolute" name="hardware-chip-outline"></ion-icon>
                            <h5>Web Tools</h5>
                        </div>
                    </div>
                </div>
                <div class="project-grid my-relative" style="--area:box6"></div>
                <div class="project-grid my-relative" style="--area:box7"></div>
                <div class="project-grid my-relative" style="--area:box8"></div>
                <div class="project-grid my-relative" style="--area:box9"></div>
            </div>
        </div>
    </div>
    <div id="services" class="service-section service-content">
        <div class="service-page page my-relative my-flex-pack">
            <div class="service-container my-relative my-only-flex">
                <div class="service-box my-relative my-only-flex">
                    <div class="service-logo">
                        <ion-icon name="logo-nodejs"></ion-icon>
                    </div>
                    <div class="service-desc">
                        <h5>Static Website</h5>
                        <p>Percayakan saya untuk project website sederhana yang ringan dengan berbagai fungsi yang tidak memerlukan basis data sebagai penyimpanan</p>
                        <a href="#contact">Hubungi saya</a>
                    </div>
                    <div class="features-container my-absolute">
                        <div class="features-box my-only-flex">
                            <ion-icon name="expand-outline"></ion-icon>
                            <p>Multi-Devices</p>
                        </div>
                        <div class="features-box my-only-flex">
                            <ion-icon name="extension-puzzle-outline"></ion-icon>
                            <p>Interaktif</p>
                        </div>
                        <div class="features-box my-only-flex">
                            <ion-icon name="people-outline"></ion-icon>
                            <p>Akses Mudah</p>
                        </div>
                    </div>
                </div>
                <div class="service-box my-relative my-only-flex">
                    <div class="service-logo">
                        <ion-icon name="logo-laravel"></ion-icon>                
                    </div>
                    <div class="service-desc">
                        <h5>Dynamic Website</h5>
                        <p>Beri saya project berupa web application multi-user dan admin sebagai pengelola data dengan basis data sebagai penyimpanan, namun dengan management data yang mudah dan aman</p>
                        <a href="#contact">Hubungi saya</a>
                    </div>
                    <div class="features-container my-absolute">
                        <div class="features-box my-only-flex">
                            <ion-icon name="shield-checkmark-outline"></ion-icon>
                            <p>Keamanan Data</p>
                        </div>
                        <div class="features-box my-only-flex">
                            <ion-icon name="id-card-outline"></ion-icon>
                            <p>Multi-Users</p>
                        </div>
                        <div class="features-box my-only-flex">
                            <ion-icon name="terminal-outline"></ion-icon>
                            <p>Web Application</p>
                        </div>
                    </div>
                </div>
                <div class="service-box my-relative my-only-flex">
                    <div class="service-logo">
                        <ion-icon name="logo-apple-ar"></ion-icon>
                    </div>
                    <div class="service-desc">
                        <h5>UI-UX Design</h5>
                        <p>Saya dapat membantu anda dalam design front-end berupa User Interface dan User Experience dari website yang akan anda bangun</p>
                        <a href="#contact">Hubungi saya</a>
                    </div>
                    <div class="features-container my-absolute">
                        <div class="features-box my-only-flex">
                            <ion-icon name="today-outline"></ion-icon>
                            <p>Design Terkini</p>
                        </div>
                        <div class="features-box my-only-flex">
                            <ion-icon name="extension-puzzle-outline"></ion-icon>
                            <p>Interaktif</p>
                        </div>
                        <div class="features-box my-only-flex">
                            <ion-icon name="expand-outline"></ion-icon>
                            <p>Multi-Devices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="section-content">
        <div class="contact-page page my-relative my-flex-pack">
            <div class="contact-container my-relative my-only-flex">
                <div class="contact-col label">
                    <div class="contact-box my-only-flex">
                        <div class="contact-comp contact-title my-flex-pack">
                            <h5>Daftar</h5>
                        </div>
                        <div class="contact-comp contact-desc">
                            <p>Fitur Daftar Gratis</p>
                            <div class="desc-features my-only-flex">
                                <ion-icon name="id-card-outline"></ion-icon>
                                <p>Laman Profile</p>
                            </div>
                            <div class="desc-features my-only-flex">
                                <ion-icon name="logo-wechat"></ion-icon>
                                <p>Live-Chat</p>
                            </div>
                            <div class="desc-features my-only-flex">
                                <ion-icon name="help-outline"></ion-icon>
                                <p>Berbagi tentang IT</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-box my-only-flex">
                        <div class="contact-comp contact-title my-flex-pack">
                            <h5>Masuk</h5>
                        </div>
                        <div class="contact-comp contact-desc">
                            <p>Fitur Profil Anda</p>
                            <div class="desc-features my-only-flex">
                                <ion-icon name="shield-checkmark-outline"></ion-icon>
                                <p>Keamanan Data</p>
                            </div>
                            <div class="desc-features my-only-flex">
                                <ion-icon name="document-lock-outline"></ion-icon>
                                <p>Pesan Terjaga</p>
                            </div>
                            <div class="desc-features my-only-flex">
                                <ion-icon name="logo-wechat"></ion-icon>
                                <p>Live-Chat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-col form my-relative">
                    <div class="contact-box my-only-flex my-relative my-flex-pack">
                        <?php
                            if(isset($_POST["regist"])) {
                                $name = htmlspecialchars($_POST["regUser"]);
                                $pass = htmlspecialchars($_POST["regPass"]);
                                $code = (int)$_POST["chat"];

                                $pass = password_hash($pass, PASSWORD_DEFAULT);
                                $check = mysqli_query($conn, "SELECT * FROM user WHERE nama LIKE '$name' OR kode_chat='$code'");
                                if(mysqli_num_rows($check) === 0) {
                                    mysqli_query($conn, "INSERT INTO user VALUES('', '$name', '$pass', '$code', 'user')");
                                } else {
                                    $error = true;
                                }
                            };
                        ?>
                        <form action="" method="POST">
                            <h5>Daftar Akun</h5>
                            <p class="sub-title">Daftar tanpa data pribadi!</p>
                            <div class="prompt inputer my-only-flex">
                                <label for="regUser">
                                    <b>Username</b>
                                </label>
                                <?php if(!isset($error)) : ?>
                                <input id="regUser" class="r data-input" name="regUser" type="text" minlength="5" maxlength="12" autocomplete="off" placeholder="Minimal 5 Karakter" required>
                                <?php endif; ?>
                                <?php if(isset($error)) : ?>
                                <input id="regUser" class="r data-input error-occurred" name="regUser" type="text" minlength="5" maxlength="12" autocomplete="off" placeholder="Data sudah ada! coba yang lain" required>
                                <?php endif; ?>
                            </div>
                            <div class="prompt inputer my-only-flex">
                                <label for="regPass">
                                    <b>Password</b>
                                </label>
                                <?php if(!isset($error)) : ?>
                                <input id="regPass" class="r data-input" name="regPass" type="password" minlength="5" autocomplete="off" placeholder="Minimal 5 Karakter" required>
                                <?php endif; ?>
                                <?php if(isset($error)) : ?>
                                <input id="regPass" class="r data-input error-occurred" name="regPass" type="password" minlength="5" autocomplete="off" placeholder="Data sudah ada! coba yang lain" required>
                                <?php endif; ?>
                                <input id="c-code" name="chat" type="text" readonly hidden>
                            </div>
                            <button name="regist" type="submit">
                                <h6>
                                    Daftarkan Akun
                                </h6>
                            </button>
                            <p id="log" class="switch">Sudah punya akun? Masuk disini</p>
                        </form>
                        <div class="progress-holder my-absolute">
                            <div class="r progress-line"></div>
                        </div>
                    </div>
                    <div class="contact-box my-only-flex my-relative my-flex-pack">
                        <form action="profile/index.php" method="POST">
                            <h5>Masuk Akun</h5>
                            <p class="sub-title">Masuk ke laman profil anda</p>
                            <div class="prompt inputer my-only-flex">
                                <label for="user">
                                    <b>Username</b>
                                </label>
                                <input id="user" name="user" class="l data-input" type="text" minlength="5" maxlength="12" autocomplete="off" placeholder="Minimal 5 Karakter" required>
                            </div>
                            <div class="prompt inputer my-only-flex">
                                <label for="pass">
                                    <b>Password</b>
                                </label>
                                <input id="pass" name="pass" class="l data-input" type="password" minlength ="5" autocomplete="off" placeholder="Minimal 5 Karakter" required>
                            </div>
                            <button name="login" type="submit">
                                <h6>
                                    Masuk Akun
                                </h6>
                            </button>
                            <p id="reg" class="switch">Belum punya akun? Daftar disini</p>
                        </form>
                        <div class="progress-holder my-absolute">
                            <div class="l progress-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-section section-content">
        <footer class="page my-relative my-flex-pack">
            <div class="footer-container my-relative my-only-flex">
                <div class="footer-col">
                    <div class="footer-title">
                        <h5>Chelo Tasnim</h5>
                        <p>Programmer Website dalam bidang front-end development hingga back-end development. Dapat membantu anda dalam desain, pembuatan, dan pengembangan Website</p>
                    </div>
                    <div class="footer-net my-only-flex">
                        <ion-icon name="logo-github"></ion-icon>
                        <ion-icon name="logo-discord"></ion-icon>
                        <ion-icon name="logo-instagram"></ion-icon>
                    </div>
                </div>
                <div class="footer-sub-col my-only-flex">
                    <div>
                        <div class="footer-sub-title">
                            Layanan
                        </div>
                        <div class="footer-col-list">
                            <p>Web UI/UX Design</p>
                            <p>Static Website</p>
                            <p>Dynamic Website</p>
                            <p>Database Designer</p>
                            <p>IT Sharing</p>
                        </div>
                    </div>
                    <div>
                        <div class="footer-sub-title">
                            Chelo Tasnim
                        </div>
                        <div class="footer-col-list">
                            <p>Tentang Chelo</p>
                            <p>Project</p>
                            <p>Kemampuan</p>
                            <p>Layanan</p>
                            <p>Kontak</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footers-footer my-relative my-only-flex">
                <div class="light-stick my-absolute"></div>
                <p>
                    &copy; Copyright 2022 Chelo Tasnim, dan seluruh konten, project, layanan terkait sebagai Hak Cipta Chelo Tasnim
                </p>
            </div>
        </footer>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>
</html>