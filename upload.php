<?php
    include('protect.php');
?>

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

    <link rel="stylesheet" href="css/upload.css">
    <title>Central de Upload</title>
</head>
<body>
    <!-- Container do documento -->
    <div class="grid-container">

        <div class="header" style="margin: 0 auto;" style="background-color: #fff;">
            <!-- <img src="./img/logo/CBA_PREF_RGB.png" alt="Logo CBA" width="100px" > -->
        </div> <!-- Header já defindo no Grid -->

        <!-- Container do card -->
        <div class="content">

            <div class="card">
                <div id="icon-upload">
                    <i class="icofont-cloud-upload icofont-6x"></i>
                </div>

                <!-- Formulário de envio do arquivo de vídeo -->
                <form method="POST" enctype="multipart/form-data" action="envia.php" id="form">
                    <span id="label-text1">Arquivo de Vídeo</span>
                    <span id="label-text2">Selecione um aquivo de vídeo no formato (.mp4)</span>

                    
                    <span class="erro-arquivo msg1">
                        <span>Formato de aquivo não permitido!</span>
                    </span>
                    <span class="erro-arquivo msg2">
                        <span>* Obrigatório carregar arquivo.</span>
                    </span>
                    <span class="erro-arquivo msg3">
                        <span>Upload realizado!.</span>
                    </span>
                    <label for="file" id="labelUpload">
                        <div>
                            <i class="icofont-file-avi-mp4 icofont-2x"></i>
                        </div>
                        <span id="select-file">Escolha o arquivo</span>
                        <span>Carregar</span>
                    </label>
                    <input type="file" name="file" id="file" multiple="multiple" >

                    <label for="selectUnidades"  id="labelSelect">Escolha a Unidade</label>
                    <div id="selectContainer">
                        <select name="unidades" id="selectUnidades">
                            <option value="aluminio" >Alumínio</option>
                            <option value="thera">Thera</option>
                            <option value="itapissuma">Itapissuma</option>
                            <option value="sorocaba">Sorocaba</option>
                            <option value="pocos">Poços</option>
                            <option value="metalex">Metalex</option>
                            <option value="mirai">Miraí</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn" name="enviar" value="enviar">ENVIAR</button>
                    <a class="btn2" href="logout.php">SAIR</a>
                </form>
                
            </div>
            
        </div>

        <div class="footer" style="background-color: #113CEA;"></div>
        <!-- Footer já definido no Grid -->

    </div>

    <script src="./js/upload.js" defer ></script>
</body>
</html>