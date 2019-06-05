<?php
    include 'Layout.php';
    $layout = new Layout();
    $layout->cabecalho();
    $layout->abre_body();
    $layout->top_bar();
    $layout->abre_content();
?>
<div class="intro">
    <h2 class="text-center">Sobre Mim</h2>
    <p class="text-center">Prazer, sou Augusto Romero Vicente. Obrigado pelo interesse! Abaixo tem informações sobre mim que possam te interessar.</p>
</div>
<div class="row features">
    <div class="col-sm-6 col-md-4 item"><i class="fa fa-user-o icon"></i>
        <h3 class="name">Perfil</h3>
        <p class="text-monospace justify-content-center description" style="font-family:Roboto, sans-serif;">Tenho 18 anos, sou brasileiro e solteiro. 
        <br/> Tenho paixão por tecnologia desde criança e por isso comecei na área tão cedo: trabalho com desenvolvimento desde os 14.<br></p>
    </div>
    <div class="col-sm-6 col-md-4 item"><i class="fa fa-map-marker icon"></i>
        <h3 class="name"><strong>Localização</strong><br></h3>
        <p class="description">Atualmente resido em <a href="https://www.google.com/maps/place/Londrina,+PR/@-23.321264,-51.2358034,12z/data=!3m1!4b1!4m5!3m4!1s0x94eb435a57af586d:0x23ac11a5c614f971!8m2!3d-23.3044524!4d-51.1695824"
        style="color:rgb(255,255,255);">Londrina</a>, cidade no norte do Paraná, Brasil.<br/> Minha área de atuação no mercado hoje envolve 
        toda a região norte do Paraná.<br></p>
    </div>
    <div class="col-sm-6 col-md-4 item"><i class="fa fa-group icon"></i>
        <h3 class="name"><strong>Gerenciamento</strong><br></h3>
        <p class="description">Apesar da idade, tive algumas experiências com gerenciamento de equipes de desenvolvimento.<br/> Entendo que um time de 
        desenvolvimento eficaz é um dos principais pilares de uma empresa de tecnologia.<br></p>
    </div>
    <div class="col-sm-6 col-md-4 item"><i class="fa fa-lightbulb-o icon"></i>
        <h3 class="name">Inovação</h3>
        <p class="description">Incentivado desde criança, tenho um histórico amigável pela inovação.<br/> Atualmente tenho três 
        <a href="startups.php" style="color:rgb(255,255,255);">startups&nbsp;</a>&nbsp;em movimento, alguns 
        <a href="projetos.php" style="color:rgb(255,255,255);">projetos acadêmicos</a>&nbsp;em desenvolvimento, 
        além de uma série de ideias.<br/> Quer inovar? <a href="contact.php" style="color:rgb(255,255,255);">Vamos conversar!</a></p>
    </div>
    <div class="col-sm-6 col-md-4 item"><i class="fa fa-language icon"></i>
        <h3 class="name">Línguas</h3>
        <p class="description">O interesse por línguas novas surgiu tão cedo quanto o interesse por tecnologia. Sou fluente em inglês, com 4 anos de 
        experiência na língua aliada ao uso da tecnologia</p>
    </div>
</div>
<?php
    $layout->fecha_content();
    $layout->footer();
    $layout->scripts();
    $layout->fecha_body();
    $layout->fecha_pag();
?>