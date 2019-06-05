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
        <h2>Plataforma de orçamentos</h2>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-1 info">
            <h3>Cliente: <a style="color:rgb(255,255,255);" href="https://www.facebook.com/Produnox">Produnox</a></h3>
            <p style="text-align: justify;">
                Este projeto visa automatizar a demanda de gerar orçamentos, cujo eram realizados manualmente nesta empresa.
                Além disso, o projeto proporciona um controle sobre o estoque gerado.
            </p>
            <p>
                Este projeto foi desenvolvido no ano de 2018, onde participei como analista, projetista e desenvolvedor.
            </p>
            <p>Tecnologias: Javascript, Express, HTML5, CSS3, MySQL.</p>
        </div>
        <div class="col-12 col-md-4 offset-md-1 meta text-center">
            <a class="btn btn-outline-primary btn-sm" role="button" href="https://github.com/AugustoVicente/geradororcamento" style="color:rgb(255,255,255);">GitHub</a>
            <br/>
            <br/>
            <br/>
            <img src="assets/img/produnox.png" style="width : 50%; height : auto; border-radius: 100%" alt="">
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