<?php
    include 'Layout.php';
    $layout = new Layout();
    $layout->cabecalho();
    $layout->abre_body();
    $layout->top_bar();
    $layout->abre_content();
?>
<div class="container">
    <div class="heading">
        <h2>Controle de qualidade de grãos</h2>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-1 info">
            <h3>Cliente: <a style="color:rgb(255,255,255);" href="http://www.sbr.agr.br/">SBR</a></h3>
            <p style="text-align: justify;">
                A classificação de grãos é um processo de extrema importância para a cadeia inteira.<br>
                O objetivo do projeto se tratava de automatizar a classificação de grãos, realizada previamente manualmente, o que a torna sujeita a fraudes.<br>
                Esta automação é feita por um aplicativo que se comunica com um dispositivo de IoT via bluetooth. <br>
                Tal dispositivo recolhe as informações da classificação de grãos via comunicação serial e repassa ao aplicativo do dispositivo conectado.<br>
                O app salva as informações no banco de dados, juntamente com algumas observações e imagens e, após isso, imprime um ticket via bluetooth de uma impressoara serial.<br>
                O vídeo em sequência mostra o funcionamento do sistema.
            </p>
            <p>
                Este projeto foi desenvolvido no ano de 2018, onde participei como analista, projetista e desenvolvedor.
            </p>
            <p>Tecnologias: PHP7, MySQL, HTML5, CSS3, Ionic3, Cordova, Arduino, C, Bluetooth.</p>
        </div>
        <div class="col-12 col-md-4 offset-md-1 meta text-center">
            <a class="btn btn-outline-primary btn-sm" role="button" href="https://github.com/AugustoVicente/ControleQualidadeGraos" style="color:rgb(255,255,255);">GitHub</a>
            <br/>
            <br/>
            <br/>
            <iframe width="420" height="315"
                src="https://www.youtube.com/embed/0um4Ds6CXOg">
            </iframe>
        </div>
    </div>
</div>
<?php
    $layout->fecha_content();
    $layout->footer();
    $layout->scripts();
    $layout->fecha_body();
    $layout->fecha_pag();
?>