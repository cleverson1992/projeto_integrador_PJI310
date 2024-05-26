<?php

    $unidade = $_GET["unidade"];

    $videos = glob("./videos/" . $unidade . "/*mp4");
    print_r(json_encode($videos));

?>