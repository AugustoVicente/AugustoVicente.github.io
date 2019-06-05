<?php
    include 'Layout.php';
    $layout = new Layout();
    $layout->cabecalho();
    $layout->abre_body();
    $layout->top_bar();
    $layout->abre_content();
?>
<section class="portfolio-block cv">
    <div class="container">
        <div class="heading text-center">
            <h2>Baixar Documento</h2>
            <a class="btn btn-outline-primary btn-sm" role="button" href="assets/docs/Curriculo_Augusto.pdf" style="color:rgb(255,255,255);">PDF</a>
            <a class="btn btn-outline-primary btn-sm" role="button" href="assets/docs/Curriculo_Augusto.doc" style="color:rgb(255,255,255);">Word</a>
        </div>
        <div class="work-experience group">
            <div class="heading">
                <h2 class="text-center">Formação acadêmica</h2>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Curso Técnico em desenvolvimento de sistemas</h5>
                        <h7 class="organization"><a href="https://www.google.com/maps/place/SENAI+Servi%C3%A7o+Nacional+de+Aprendizagem+Industrial+de+Londrina/@-23.3042595,-51.1595626,15z/data=!4m5!3m4!1s0x0:0x5386508dbb20b0b4!8m2!3d-23.3042595!4d-51.1595626"
                        style="color:rgb(255,255,255);">SENAI Londrina</a></h7>
                    </div>
                    <div class="col-md-3"><span class="period">01/2016 - 06/2017</span></div>
                    <div class="col-3">
                        <h5>Ensino Médio</h5>
                        <h7 class="organization"><a href="http://www.sesipr.org.br/colegiosesi/unidades/colegio-sesi-em-londrina-1-27675-260142.shtml"
                        style="color:rgb(255,255,255);">SESI Londrina</a></h7>
                    </div>
                    <div class="col-md-3"><span class="period">01/2015 - 12/2017</span></div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Cursando Tecnologia em análise e desenvolvimento de sistemas (TADS)</h5>
                        <h7 class="organization"><a href="http://londrina.ifpr.edu.br/tecnologia-em-analise-e-desenvolvimento-de-sistemas/"
                        style="color:rgb(255,255,255);">IFPR Campus Londrina</a></h7>
                    </div>
                    <div class="col-md-3"><span class="period">01/2018 - Presente</span></div>
                </div>
            </div>
        </div>
        <div class="education group">
            <div class="heading">
                <h2 class="text-center">Experiência Profissional</h2>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-3">
                        <h5>CEO & Co-Founder</h5>
                        <h7 class="organization"><a style="color:rgb(255,255,255);" href="http://www.ibigpro.com.br/">MyChicken</a></h7>
                    </div>
                    <div class="col-md-3"><span class="period">03/2017 - Presente</span></div>
                    <div class="col-md-3">
                        <h5>Estagiário</h5>
                        <h7 class="organization"><a style="color:rgb(255,255,255);" href="http://www.greatmob.com.br/">GreatMob</a></h7>
                    </div>
                    <div class="col-3"><span class="period">07/2017 - 11/2017</span></div>
                    <div class="col-12"><p class="text-muted" style="color:rgb(255,255,255) !important;">Startup na área de avicultura.</p></div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Desenvolvedor Freelancer</h5>
                        <h7 class="organization"><a style="color:rgb(255,255,255);" href="http://www.sbr.agr.br/">SBR</a></h7>
                    </div>
                    <div class="col-md-3"><span class="period">12/2017 - 03/2018</span></div>
                    <div class="col-md-3">
                        <h5>Diretor Técnico</h5>
                        <h7 class="organization"><a style="color:rgb(255,255,255);" href="http://www.sqdtec.com/">SQD Tecnologia</a></h>
                    </div>
                    <div class="col-md-3"><span class="period">05/2018 - Presente</span></div>
                    <div class="col-6"><p class="text-muted" style="color:rgb(255,255,255) !important;">Atuei como analista, desenvolvedor e gestor de time em alguns projetos desta empresas.
                     Dois destes estão à mostra <a href="projetos.php" style="color:rgb(255,255,255);">aqui.</a></p></div>
                     <div class="col-6"><p class="text-muted" style="color:rgb(255,255,255) !important;">Minha própria startup. Atuei como analista, desenvolvedor e gestor de time em alguns projetos.</p></div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-3">
                        <h5>CTO & Co-Founder</h5>
                        <h7 class="organization"><a style="color:rgb(255,255,255);" href="http://www.ibigpro.com.br/">IBigPro</a></h7>
                    </div>
                    <div class="col-md-3"><span class="period">01/2018 - Presente</span></div>
                    <div class="col-6"></div>
                    <div class="col-6"><p class="text-muted" style="color:rgb(255,255,255) !important;">Startup na área de panificação.</p></div>
                </div>
            </div>
        </div>
        <div class="heading">
            <h2 class="text-center">Informações Adicionais</h2>
        </div>
        <div class="item">
            <h5>Fluência em inglês.</h5><br>
            <h5>Experiência de 4 anos de desenvolvimento de sistemas.</h5><br>
            <h5>Experiência de 2 ano como CEO de StartUp.</h5>
        </div>
        <div class="heading">
            <h2 class="text-center">Conhecimento Técnico</h2>
        </div>
        <div class="item">
            IDEs: Android Studio (Native), JetBrain (WebStorm, PHPStorm, CLion, etc), NetBeans, Eclipse, Visual Studio.<br/><br/>
            Linguagem de programação: Java, C#, C, C++, JavaScript, Typescript, Python, PHP.<br/><br/>
            Frameworks: NodeJS, Cordova, Ionic, Angular, React, (outros frameworks JS), kivy (python), Laravel (PHP).<br/><br/>
            Banco de dados: MYSQL, SQL oracle, SQLite and noSQL.<br/><br/>
            Front: XML, HTML5 e CSS3.<br/><br/>
            Desktop: C#, JS, Python.<br/><br/>
            Web: PHP, Angular.<br/><br/>
            Metodologias Ágeis: Scrum, Kanban and ScrumBan.<br/><br/>
            Project Management tools: Microsoft Project, GANTT.
        </div>
    </div>
</section>
<?php
    $layout->fecha_content();
    $layout->footer();
    $layout->scripts();
    $layout->fecha_body();
    $layout->fecha_pag();
?>