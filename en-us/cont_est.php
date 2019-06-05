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
        <h2>Controle de estoque</h2>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 offset-md-1 info">
            <h3>Cliente: <a style="color:rgb(255,255,255);" href="https://www.armazemjeboni.com.br/">Jeboni</a></h3>
            <p style="text-align: justify;">
                Este projeto visa automatizar o controle de estoque do cliente em questão.
                O projeto é composto de uma aplicação mobile híbrida e uma aplicação PHP em um servidor apache local cujo comunica com o banco de dados MySQL local também.
            </p>
            <p>
                Este projeto foi desenvolvido no ano de 2017, onde participei como analista, projetista e desenvolvedor.
            </p>
            <p>Tecnologias: Javascript, Ionic, HTML5, CSS3, MySQL.</p>
            <a class="btn btn-outline-primary btn-sm" role="button" href="https://github.com/AugustoVicente/ControleEstoque" style="color:rgb(255,255,255);">GitHub</a>
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