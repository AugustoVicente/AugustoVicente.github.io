<?php
    include 'Layout.php';
    $layout = new Layout();
    $layout->cabecalho();
    $layout->abre_body();
    $layout->top_bar();
?>
<header id="fullscreen_cover">
    <div id="cover">
        <div id="cover-img"></div>
        <div id="cover-filter"></div>
        <div id="text-container" class="container">
            <div class="col-sm-12">
                <div class="valign">
                    <div id="cover-text">
                        <h1 id="cover-offer1">Com a tecnologia o céu é o limite</h1>
                        <p class="lead" id="cover-offer3">Obrigado pela visita, é um prazer recebê-lo!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
    $layout->footer();
    $layout->scripts();
    $layout->fecha_body();
    $layout->fecha_pag();
?>