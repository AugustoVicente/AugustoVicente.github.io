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
        <h2>IBigPro</h2>
    </div>
    <div class="row">
        <div class="col-12 col-md-7 offset-md-1 info">
            <h3>Área: Panificação</h3>
            <p style="text-align: justify">
                Com o aumento acelerado na competitividade comercial global e trabalhando com margens apertadíssimas, cada vez mais os empresários tem buscado alternativas que colocam duas realidades em evidência.<br>
                A primeira é a incessante busca pelo aumento no faturamento e a segunda é a redução nos custos buscando uma maior eficiência administrativa e operacional. <br>
                A Rede IBIG Pro Panificação surge justamente para atender num primeiro momento o Micro e Pequeno Empresário nesta segunda realidade de mercado. <br>
                O nome IBIG surgiu justamente da ideia de “Eu também sou grande”. O Segmento de Panificação Artesanal (que inclui Padarias, Pizzarias, Pastelarias e pequenas Indústrias de salgados) é responsável atualmente por aproximadamente 70% de mercado, 
                o que significa dizer que isoladamente o empresário é pequeno, mas quando ele consegue somar esforços, se torna muito forte. <br>
                A Rede IBIG traz uma realidade diferente para o cenário deste mercado gigantesco. Com um aplicativo inovador de compra coletiva, somado a experiência administrativa e comercial de seus fundadores, aproxima duas pontas que antes caminhavam em mundos distintos. <br>
                A indústria e os Micro e Pequenos empresários. Ter mais resultado com o mesmo esforço é a premissa básica do IBIG que além de melhorar as condições de negociação com fornecedores, uma grande ameaça para o ramo, 
                vai em busca de uma melhora significativa e gradativa na qualificação dos profissionais da área e valorização deste segmento que é tão importante no cenário nacional.
            </p>
            <p>
                Um projeto iniciado no ano de 2017.
            </p>
        </div>
        <div class="col-12 col-md-3 offset-md-1 meta text-center">
            <img src="https://lh3.googleusercontent.com/dOhoIcPJ_cGXfbs3_ke9SZy6iPmMvc-eSZwrP_IoNJOpxCoH31VKsoF1BlgqqcJQ0Q=s180-rw" style="width : 50%; height : auto;" alt="">
            <br/>
            <br/>
            <p>Integrantes da StartUp:</p>
            * <a style="color:rgb(255,255,255);" href="https://www.linkedin.com/in/fabiano-lobo-vila-000342119/">Fabiano Lobo</a><br>
            * <a style="color:rgb(255,255,255);" href="https://www.linkedin.com/in/murariemerson/">Emerson Murari</a>.<br>
            * <a style="color:rgb(255,255,255);" href="https://www.facebook.com/leandro.souza.161009">Leandro Negrão</a><br>
            * <a style="color:rgb(255,255,255);" href="https://www.linkedin.com/in/augusto-romero-vicente-0185a2169/">Augusto Vicente</a><br>
            <br/>
            <p>Redes da StartUp:</p>
            * <a style="color:rgb(255,255,255);" href="https://www.youtube.com/channel/UCppMzsbk7784b9ZILVH2Bcg">Youtube</a><br>
            * <a style="color:rgb(255,255,255);" href="https://www.linkedin.com/company/ibig-pro-panificacao/about/">Linkedin</a>.<br>
            * <a style="color:rgb(255,255,255);" href="https://www.instagram.com/ibigpro/">Instagram</a><br>
            * <a style="color:rgb(255,255,255);" href="https://www.facebook.com/IBIGproapp/">Facebook</a><br>
            <br/>
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