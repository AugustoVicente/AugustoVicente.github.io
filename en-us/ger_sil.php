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
        <h2>Gerenciador Operacional de Silos</h2>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-1 info">
            <h3>Cliente: <a style="color:rgb(255,255,255);" href="http://www.sbr.agr.br/">SBR</a></h3>
            <p style="text-align: justify;">
                A armazenagem de grãos é um dos processos mais importantes desta cadeia e talvez o mais importante. Uma conservação de grãos bem 
                realizado e controlado é de suma importância para o sucesso desta etapa. <br>Entretanto, há certa deficiência tecnológica na área. 
                Todo este controle é realizado em papéis e planilhas no computador, o que dificulta a compatibilidade nas diversas unidades da 
                empresa. <br>Visto tal deficiência, o projeto visava otimizar este controle, criando uma interface amigável e usual, de forma 
                integrada, onde é possível gerenciar os dados coletados, verificar históricos, gerar relatórios, entre outras funções, otimizando o 
                controle e gerando ganhos operacionais para a empresa.
            </p>
            <p>
                Este projeto foi desenvolvido no ano de 2018, onde participei como analista, projetista e desenvolvedor.
            </p>
            <p>Tecnologias: PHP7, MySQL, HTML5, CSS3.</p>
            <p>O acesso à plataforma  se encontra <a style="color:rgb(255,255,255);" href="http://sbr-smartfile.com.br">aqui</a>.</p>
            <p>OBS:<br>* Usuário: leandro<br>* Senha: 1234</p>
        </div>
        <div class="col-12 col-md-4 offset-md-1 meta text-center">
            <a class="btn btn-outline-primary btn-sm" role="button" href="assets/docs/smartfile.pdf" style="color:rgb(255,255,255);">Estruturação do projeto</a>
            <a class="btn btn-outline-primary btn-sm" role="button" href="https://github.com/AugustoVicente/smartfile" style="color:rgb(255,255,255);">GitHub</a>
            <br/>
            <br/>
            <br/>
            <img src="assets/img/smartfile-cap.png" style="width : 80%; height : auto;" alt="">
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