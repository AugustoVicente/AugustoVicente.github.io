<?php
    include 'Layout.php';
    $layout = new Layout();
    $layout->cabecalho();
    $layout->abre_body();
    $layout->top_bar();
    $layout->abre_content();
?>
<div class="intro">
    <h2 class="text-center">About Me</h2>
    <p class="text-center">Hi, I'm Augusto Romero Vicente. It's a pleasure having you here! There are some information about me that may interest you bellow.</p>
</div>
<div class="row features">
    <div class="col-sm-6 col-md-4 item"><i class="fa fa-user-o icon"></i>
        <h3 class="name">Profile</h3>
        <p class="text-monospace justify-content-center description" style="font-family:Roboto, sans-serif;">I'm 18, Brazilian and single. 
        <br/> Technology has being my passion since I was a child and that's why I started in the area so young: I work with development since I was 14.<br></p>
    </div>
    <div class="col-sm-6 col-md-4 item"><i class="fa fa-map-marker icon"></i>
        <h3 class="name"><strong>Local</strong><br></h3>
        <p class="description">Today I'm placed at <a href="https://www.google.com/maps/place/Londrina,+PR/@-23.321264,-51.2358034,12z/data=!3m1!4b1!4m5!3m4!1s0x94eb435a57af586d:0x23ac11a5c614f971!8m2!3d-23.3044524!4d-51.1695824"
        style="color:rgb(255,255,255);">Londrina</a>, city on the north of Paraná, Brazil.<br/></p>
    </div>
    <div class="col-sm-6 col-md-4 item"><i class="fa fa-group icon"></i>
        <h3 class="name"><strong>Management</strong><br></h3>
        <p class="description">Though the age, I've had some experiences managing development teams.<br/>
        I understand that an efficient development team is one of the most important columns in a technology company.<br></p>
    </div>
    <div class="col-sm-6 col-md-4 item"><i class="fa fa-lightbulb-o icon"></i>
        <h3 class="name">Innovation</h3>
        <p class="description">Incentivated since the childhood, I've got a friendly history with innovation.<br/> Atualmente tenho duas 
        <a href="startups.php" style="color:rgb(255,255,255);">startups&nbsp;</a>&nbsp;em movimento, alguns 
        <a href="projetos.php" style="color:rgb(255,255,255);">projetos acadêmicos</a>&nbsp;em desenvolvimento, 
        além de uma série de ideias.<br/> Quer inovar? <a href="contact.php" style="color:rgb(255,255,255);">Vamos conversar!</a></p>
    </div>
    <div class="col-sm-6 col-md-4 item"><i class="fa fa-language icon"></i>
        <h3 class="name">Languages</h3>
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