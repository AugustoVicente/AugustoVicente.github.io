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
        <h2>BIOMA360</h2>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-1 info">
            <h3>Área: Educação</h3>
            <p>O BIOMA360 consiste em um app de visualização de biomas em realidade virtual para maior auxílio ao entendimento e compreensão sobre biomas.</p>
            <p>
                Um projeto desenvolvido no ano de 2017 durante o decorrer do ensino médio no Colégio SESI Londrina. Projeto orientado pelo 
                <a style="color:rgb(255,255,255);" href="https://www.facebook.com/birulei">Professor Pedro Henrique de Freitas.</a>
            </p>
            <p>Tecnologias: Cordova, A-Frame, HTML5, CSS3.</p>
            <p>Este projeto foi aplicado em algumas feiras como:</p>
            * <a style="color:rgb(255,255,255);" href="http://www.uel.br/pessoal/rogerio/eventos/CCIII/resumos_CCIII/CC-007.pdf">Conversando com cientistas III</a> da UEL.<br>
            * <a style="color:rgb(255,255,255);" href="https://www.ficiencias.org/sites/default/files/CI%C3%8ANCIAS%20HUMANAS.pdf">Ficiências 2018</a>.<br>
            * <a style="color:rgb(255,255,255);" href="http://www.londrinaconvention.com.br/noticias/387-universo-sistema-fiep-mundo-senai-mundo-sesi-mundo-iel.html#.XDAnylxKjIU">
            Universo Sistema FIEP</a> – Mundo SENAI | Mundo SESI | Mundo IEL.<br>
            <br/>
            <p>O acesso ao aplicativo para a plataforma Android se encontra <a style="color:rgb(255,255,255);" href="https://play.google.com/store/apps/details?id=com.bioma.app">aqui</a>.</p>
        </div>
        <div class="col-12 col-md-4 offset-md-1 meta text-center">
            <a class="btn btn-outline-primary btn-sm" role="button" href="bioma" style="color:rgb(255,255,255);">Demonstração</a>
            <a class="btn btn-outline-primary btn-sm" role="button" href="https://github.com/AugustoVicente/Bioma360" style="color:rgb(255,255,255);">GitHub</a>
            <br/>
            <br/>
            <br/>
            <img src="https://img6.androidappsapk.co/300/c/a/9/com.bioma.app.png" style="width : 50%; height : auto; border-radius: 100%" alt="">
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