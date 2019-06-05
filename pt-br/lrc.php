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
        <h2>Leitor de Rúbricas para contablidade</h2>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 offset-md-1 info">
            <h3>Cliente: <a style="color:rgb(255,255,255);" href="http://www.sbr.agr.br/">SBR</a></h3>
            <p style="text-align: justify;">
                    As rúbricas para contabilidade são geradas em formato txt com um layout padrão, normatizado pelo MANAD (Manual Normativo de Arquivos Digitais).
                    O objetivo deste sistema se trata de realizar a leitura deste arquivo txt e transformá-lo em uma tabela ou pdf no formato solicitado pelo cliente.
            </p>
            <p>
                Este projeto foi desenvolvido no ano de 2018, onde participei como analista, projetista e desenvolvedor.
            </p>
            <p>Tecnologias: C#, MySQL.</p>
            <a class="btn btn-outline-primary btn-sm" role="button" href="https://github.com/AugustoVicente/LeitorRubricas" style="color:rgb(255,255,255);">GitHub</a>
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