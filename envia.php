<?php

// include('verifica.php');

//Verificar se foi enviado via POST 
if(isset($_POST['enviar'])){

    if(!empty($_FILES['file']['name'])){

        //Valores recuperados pela super global $_FILES
        $nomeTemporario = $_FILES['file']['tmp_name'];
        $nomeArquivo = $_FILES['file']['name'];
        $type = $_FILES['file']['type'];
        $tamanho = $_FILES['file']['size'];
        $erros = array();
        $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
        $unidades = $_POST['unidades'];
        $caminho = "./videos/" . $unidades . "/";

        //Definir o tamanho maximo para upload
        $tamanhoMaximo = 1024 * 1024 * 100; //100MB
        if($tamanho > $tamanhoMaximo){
            $erros[] = "Arquivo maior do que o permitido";
        };

        //Definir extenções de arquivos permitidos (MIMITYPES)
        $typesPernitidos = ["video/mp4"];
        if(!in_array($type, $typesPernitidos)) {
            $erros[] = "Tipo de arquivo não permitido";
        };

        //Verificar se retornou algum erro. Se não, seguir com o POST
        if(!empty($erros)){
            foreach($erros as $erro);
            echo $erro;
        } else {

            $videos = glob("./videos/" . $unidades . "/*mp4");
        
            foreach($videos as $video){
                if(is_file($video)){
                    unlink($video);
                }
            }

            $nomePadrao = uniqid() . ".";

            //metodo principal que efetua o upload
            move_uploaded_file($nomeTemporario, $caminho.$nomePadrao.$extensao);
            
            //Copia o arquivo para o nome padrão
            // copy($caminho.$nomeArquivo, $caminho.$nomePadrao.$extensao);

            header("location: upload.php");
        };

    };  

};

?>