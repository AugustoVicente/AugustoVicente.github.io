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
        <h2>App FarmDome</h2>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-1 info">
            <h3>Cliente: <a href="http://farmdome.com.br" style="color:rgb(255,255,255);">FarmDome</a></h3>
            <p style="text-align: justify;">
                Este Aplicativo feito em Ionic teve por objetivo criar uma plataforma mobile para a empresa FarmDome baseado em sua plataforma web existente.
                O App Mobile consome a API disponibilizada pela própria versão Web do sistema.
            </p>
            <p>
                Este projeto foi desenvolvido no ano de 2018, onde participei como designer, analista e desenvolvedor.
            </p>
            <p>Tecnologias: Ionic, Cordova, HTML5, CSS3.</p>
        </div>
        <div class="col-12 col-md-4 offset-md-1 meta text-center">
            <a class="btn btn-outline-primary btn-sm" role="button" href="https://github.com/AugustoVicente/farmdome" style="color:rgb(255,255,255);">GitHub</a>
            <br/>
            <br/>
            <br/>
            <img src="assets/img/farmdome.png" style="width : 50%; height : auto; border-radius: 100%">
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