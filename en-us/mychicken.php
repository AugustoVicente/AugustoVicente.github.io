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
        <h2>MyChicken - Otimização na produção de aves de corte</h2>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-1 info">
            <h3>Área: Avicultura</h3>
            <p>O projeto consiste em um aplicativo mobile e um hardware que farão o monitoramento dos principais fatores da granja e o
                tratamento das informações para fornecer a melhor atitude a ser tomada para o aumento ou precaução
                de perda na produção. <br>Este aplicativo busca utilizar do monitoramento e do tratamento de informação
                obtidas a partir de sensores instalados em granjas avicultoras para reduzir a variação do índice de
                conversão alimentar dos frangos
            </p>
            <p>
                Um projeto desenvolvido no ano de 2017 durante o decorrer do ensino médio no Colégio SESI Londrina. Projeto orientado pelo 
                <a style="color:rgb(255,255,255);" href="https://www.facebook.com/thiago.milani.56">Professor Thiago Elias Milani.</a>
            </p>
            <p>Tecnologias: PHP, Android Studio, MySQL, Arduino.</p>
            <p>
                Este projeto Premiado em primeiro lugar na categoria de ciencias agrárias da <a style="color:rgb(255,255,255);" href="https://www.ficiencias.org/pt-br/content/premia%C3%A7%C3%B5es-2017">Ficiencias 2017</a>.
                Documento disponível <a style="color:rgb(255,255,255);" href="https://drive.google.com/open?id=0B2_tHNvgQXrtdExGQ1BYd0QtRWRNT2tmVC05dWFnZlpJSTFN">aqui.</a>
            </p>
            <br/>
        </div>
        <div class="col-12 col-md-4 offset-md-1 meta text-center">
            <br/>
            <img src="assets/img/mychicken-logo.png" style="width : 50%; height : auto; border-radius: 100%" alt="">
            <br/>
            <br/>
            <img src="assets/img/mychicken2.jpg" style="width : 70%; height : auto;" alt="">
            <br/>
            <br/>
            <img src="assets/img/mychicken1.jpg" style="width : 70%; height : auto;" alt="">
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