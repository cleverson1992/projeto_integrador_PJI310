<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons import -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#ffffff">

    <!-- Icons import -->
    <link rel="stylesheet" type="text/css" href="icofont.css">

    <link rel="stylesheet" href="css/principal.css">
    <title>Vídeo Corporativo CBA</title>
</head>
<body>

    <header>

        <div id="header">
            <div class="container headerItens">
                <img id="LogoImage" src="img/logo/logo_cba.png" alt="logo" width="70px" height="70px">

                <div>
                    <p>Dashboard</p>
                    <p style="font-weight: bold; font-size: 1.5em;">Vídeo Corporativo CBA</p>
                </div>
            </div>
        </div>

        <div id="toolbar">
            <div class="container toolbarItens">
                <!-- Toolbar -->
                <input type="text" placeholder="Digite a unidade desejada">
            </div>
        </div>

    </header>

    <main style="min-height: calc(100vh - 150px - 180px)">
        
        <section class="container">
        
            <div class="card">
                <div id=""><p>Bem vindo!</p></div>
                <div>
                    <p>Selecione o Reprodutor de Vídeo da unidade que deseja exibir ou vá em “UPLOAD” para fazer o upload de novos vídeos.</p>
                    <a href="./login.php">UPLOAD</a>
                </div>
            </div>

        </section>

        <section class="container">

            <div class="card-container">

                <div id="card-title">
                    <p><i class="icofont-play-alt-1"></i> Reprodutor de vídeos das unidades</p>
                </div>

                <ul class="cards">
                    <li>
                        <a href="./aluminio.html" class="card-video">
                            <i class="icofont-ui-play"></i>
                            <img src="img/unidades/unidade_1_aluminio.jpg" alt="">
                            <div>
                                <p>Unidade Aluminio</p>
                                <p>Aluminio</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./thera.html" class="card-video">
                            <i class="icofont-ui-play"></i>
                            <img src="img/unidades/unidade_2_thera.jpg" alt="">
                            <div>
                                <p>Unidade Thera</p>
                                <p>thera berrini</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./itapissuma.html" class="card-video">
                            <img src="img/unidades/unidade_3_itapissuma.jpg" alt="">
                            <i class="icofont-ui-play"></i>
                            <div>
                                <p>Unidade Itapissuma</p>
                                <p>Pernambuco</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./sorocaba.html" class="card-video">
                            <i class="icofont-ui-play"></i>
                            <img src="img/unidades/unidade_4_sorocaba.jpg" alt="">
                            <div>
                                <p>Unidade Sorocaba</p>
                                <p>Sorocaba</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./pocos.html" class="card-video">
                            <i class="icofont-ui-play"></i>
                            <img src="img/unidades/unidade_5_pocos.jpg" alt="">
                            <div>
                                <p>Unidade Poços</p>
                                <p>Poços de Caldas</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./metalex.html" class="card-video">
                            <i class="icofont-ui-play"></i>
                            <img src="img/unidades/unidade_6_metalex.jpg" alt="">
                            <div>
                                <p>Unidade Metalex</p>
                                <p>Araçariguama</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./mirai.html" class="card-video">
                            <i class="icofont-ui-play"></i>
                            <img src="img/unidades/unidade_7_mirai.jpg" alt="">
                            <div>
                                <p>Unidade Miraí</p>
                                <p>Minas Gerais</p>
                            </div>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="./aluminio.html" class="card-video">
                            <i class="icofont-ui-play"></i>
                            <img src="img/unidades/default.jpg" alt="">
                            <div>
                                <p>Unidade Default>
                                <p> Default </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./aluminio.html" class="card-video">
                            <i class="icofont-ui-play"></i>
                            <img src="img/unidades/default.jpg" alt="">
                            <div>
                                <p>Unidade Default>
                                <p> Default </p>
                            </div>
                        </a>
                    </li> -->
                </ul>

        </section>

        <section>



        </section>

    </main>

    <footer>

        <div class="container ">
            <div class="footer-itens">
                <p>Projeto Integrador 3 - PJI310 - 2024</p>
            </div>
        </div>

    </footer>
    <script src="./js/principal.js"></script>
</body>
</html>