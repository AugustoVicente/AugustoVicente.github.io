<?php
    include 'Layout.php';
    $layout = new Layout();
    $layout->cabecalho();
    $layout->abre_body();
    $layout->top_bar();
    $layout->abre_content();
?>
<div class="heading">
    <h2>Mr. Do!</h2>
</div>
<div class="row">
    <div class="col-12 col-md-6 offset-md-1 info">
        <h3>Área: Jogos</h3>
        <p>
            Este projeto foi uma releitura do jogo <a style="color:rgb(255,255,255);" href="https://en.wikipedia.org/wiki/Mr._Do!">Mr. Do!</a>, lançado inicialmente no ano de 1982.<br>
            Trabalho da disciplina de Laboratório de Computação II.
        </p>
        <p>
            Um projeto desenvolvido no ano de 2018 durante o decorrer do curso de Análise e Desenvolvimento de Sistemas no Instituto Federal do Paraná.<br>
            Projeto desenvolvido em equipe: 
            <a style="color:rgb(255,255,255);" href="https://www.linkedin.com/in/devcamargo/">André Camargo</a>, 
            <a style="color:rgb(255,255,255);" href="https://github.com/fabiocassidori">Fábio Cassidori</a>, 
            <a style="color:rgb(255,255,255);" href="https://www.linkedin.com/in/tiago-giroto-neto-772a22160/">Tiago Giroto</a>.
        </p>
        <p>Tecnologia: C.</p>
        <br/>
    </div>
    <div class="col-12 col-md-4 offset-md-1 meta text-center">
        <a class="btn btn-outline-primary btn-sm" role="button" href="https://github.com/AugustoVicente/mrdo" style="color:rgb(255,255,255);">GitHub</a>
        <br/>
        <br/>
        <img src="assets/img/mrdo.png" style="width : 90%; height : auto;" alt="">
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