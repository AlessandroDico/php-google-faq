<?php include 'faq.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Google Faq</title>
        <link rel="stylesheet" href="public/app.css">
        <!-- google-fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <!-- favicon -->
        <link rel="shortcut icon" href="https://ssl.gstatic.com/policies/favicon.ico">
    </head>
    <body>
        <header>
            <div class="container-full-width">
                <div class="header-top">
                    <div class="header-top-left">
                        <div class="logo-container">
                            <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="google-logo">
                        </div>
                        <h1>Privacy e termini</h1>
                    </div>
                    <div class="header-top-right">
                        <div class="app-google">
                            <i class="fas fa-th"></i>
                        </div>
                        <div class="user-img">
                            A
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="header-menu">
                        <ul>
                            <li>
                                <a href="#">Introduzione</a>
                            </li>
                            <li>
                                <a href="#">Norme sulla privacy</a>
                            </li>
                            <li>
                                <a href="#">Termini di servizio</a>
                            </li>
                            <li>
                                <a href="#">Tecnologie</a>
                            </li>
                            <li>
                                <a href="#" class="active">Domande frequenti</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <?php foreach ($faq as $question) {  ?>
                <h2>
                    <?php foreach ($question as $key => $answer) {
                    echo $key; ?>
                </h2>
                <p>
                    <?php echo $answer['reply'];
                    }
                    }?>

                </p>
            </div>
        </main>
        <footer>
            <div class="container">
                <div class="footer-container">
                    <div class="footer-left">
                        <div class="footer-list">
                            <ul>
                                <li>
                                    <a href="#">Google</a>
                                </li>
                                <li>
                                    <a href="#">Tutto su Google</a>
                                </li>
                                <li>
                                    <a href="#">Privacy</a>
                                </li>
                                <li>
                                    <a href="#">Termini</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-right">
                        <div class="footer-icon-container">
                            <img src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAMAAAAMs7fIAAAABGdBTUEAALGPC/xhBQAAAFpQTFRFAAAAc8b%2BeNj%2BeLL7lt3/YbL4cs/9rNn8p9b7%2Bfn5hdD/a8D/7vD/vOL9itf%2B////3PD%2Byuj9R6348Pb7KZz2UL78MKL3Oqv4Zsz/ndX8qN/%2BI5T0S7X4W8b9mmuivQAAAAF0Uk5TAEDm2GYAAACXSURBVBjTXYqLEsIwCARR%2B27zpCFNxP//TSGOTu3OhDs2wGaPM9bD8hKGMDtnDq130GkxDK/BY/tVc6CtXa21Q72ClFKoqUrINBLAzHP9grKpccxFYmqNIcY4j%2BXDiLJBztmUXCRkGgkgIsZbO1kwEjVDKwYmDriSGt6FPHrnp6x1Bd/vzxP9Bj8mFfBH2K8Gtng1AA95bxQhE7o%2B68UQAAAAAElFTkSuQmCC" alt="world-image">
                        </div>
                        <select class="footer-lang-select">
                            <option value="ita">Italiano</option>
                            <option value="ita">English</option>
                            <option value="ita">Espanol</option>
                            <option value="ita">Deutsch</option>
                        </select>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
