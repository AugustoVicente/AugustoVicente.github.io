<?php
    include 'Layout.php';
    $layout = new Layout();
    $layout->cabecalho();
    $layout->abre_body();
    $layout->top_bar();
    $layout->abre_content();
?>
<div class="heading">
    <h2>Jogo Pong</h2>
</div>
<div class="row">
    <div class="col-12 col-md-12 offset-md-1 info">
        <h3>Área: Jogos</h3>
        <p>
            Este projeto foi uma releitura do jogo <a style="color:rgb(255,255,255);" href="https://pt.wikipedia.org/wiki/Pong">Pong</a>, lançado inicialmente no ano de 1972.<br>
            Trabalho da disciplina de Laboratório de Computação I.
        </p>
        <p>
            Um projeto desenvolvido no ano de 2018 durante o decorrer do curso de Análise e Desenvolvimento de Sistemas no Instituto Federal do Paraná.<br>
        </p>
        <p>Tecnologia: Python.</p>
        <a class="btn btn-outline-primary btn-sm" role="button" href="https://github.com/AugustoVicente/pong" style="color:rgb(255,255,255);">GitHub</a>
        <br/>
    </div>
</div>
<?php
    $layout->fecha_content();
    $layout->footer();
    $layout->scripts();
    $layout->fecha_body();
    $layout->fecha_pag();
?>