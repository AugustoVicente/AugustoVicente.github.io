<?php 
    class Layout 
    {
        function __construct()
        {
            echo "<!DOCTYPE html>
            <html lang='pt-br'>";
        }
        public function cabecalho()
        {
            echo "<head>
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta name='description' content='Meu portifólio'>
                <title>Augusto Vicente</title>
                <link rel='stylesheet' href='../assets/bootstrap/css/bootstrap.min.css'>
                <link rel='stylesheet' href='../assets/fonts/font-awesome.min.css'>
                <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cookie'>
                <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,500&amp;subset=cyrillic'>
                <link rel='stylesheet' href='../assets/css/Features-Blue.css'>
                <link rel='stylesheet' href='../assets/css/Header-Cover01.css'>
                <link rel='stylesheet' href='../assets/css/Navigation-Clean.css'>
                <link rel='stylesheet' href='../assets/css/Pretty-Footer.css'>
                <link rel='stylesheet' href='../assets/css/styles.css'>
                <link rel='icon' href='../assets/img/icon.png'>
            </head>";
        }
        public function abre_body()
        {
            echo "<body>";
        }
        public function abre_content()
        {
            echo "<div class='features-blue' style='background-color:rgb(230,75,75);'>
            <div class='container'>";
        }
        public function top_bar()
        {
            echo "<div>
                <nav class='navbar navbar-light navbar-expand-md navigation-clean'>
                    <div class='container'>
                        <a href='index.php' class='navbar-brand'>
                            <img style='width : 50%; height : auto;' src='../assets/img/logoGuto.png'/>
                        </a>
                        <button data-toggle='collapse' data-target='#navcol-1' class='navbar-toggler'>
                            <span class='sr-only'>Toggle navigation</span>
                            <span class='navbar-toggler-icon'></span>
                        </button>
                        <div class='collapse navbar-collapse' id='navcol-1'>
                            <ul class='nav navbar-nav ml-auto''
                                <li role='presentation' class='nav-item'><a href='about-me.php' class='nav-link'>About Me</a></li>
                                <li role='presentation' class='nav-item'><a href='curriculo.php' class='nav-link'>Curriculum</a></li>
                                <li role='presentation' class='nav-item'><a href='projetos.php' class='nav-link'>Project portfolio</a></li>
                                <li role='presentation' class='nav-item'>
                                    <a style='cursor: pointer' onclick='window.location.href = window.location.href.replace(\"en-us\", \"pt-br\")' class='nav-link'>
                                        <img style='max-width : 20px; height : auto;' src='../assets/img/br.png'/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>";
        }
        public function footer()
        {
            echo "<header id='fullscreen_cover'></header>
            <footer style='margin-top:0px;'>
                <div class='row justify-content-center align-items-center' style='padding:2%;max-height:50%;'>
                    <div class='col-sm-4 col-md-4 footer-contacts' style='padding-top:2%;padding-left:10%;'>
                        Information:
                        <div>
                            <span class='fa fa-map-marker footer-contacts-icon' ></span>
                            <p style='margin-top:15px'>
                                <span class='new-line-span'></span>
                                <a style='color:rgb(255,255,255);' href='https://www.google.com/maps/place/Londrina,+PR/@-23.321264,-51.2358034,12z/data=!3m1!4b1!4m5!3m4!1s0x94eb435a57af586d:0x23ac11a5c614f971!8m2!3d-23.3044524!4d-51.1695824'>Londrina - PR, Brasil</a>
                            </p>
                        </div>
                        <div>
                            <i class='fa fa-phone footer-contacts-icon'></i>
                            <p style='margin-top:15px' class='footer-center-info email text-left'>+55 43 998485473</p>
                        </div>
                        <div>
                            <i class='fa fa-envelope footer-contacts-icon'></i>
                            <p style='margin-top:15px;'><a style='color:rgb(255,255,255);' href='mailto:augusto@sqdtec.com' target='_blank'>augusto@sqdtec.com</a></p>
                        </div>
                    </div>
                    <div class='col-sm-4 col-md-4 footer-contacts text-center' style='padding-top:2%;padding-left:10%;'>
                        <a class='btn btn-outline-primary btn-sm' role='button' href='contact.php' style='color:rgb(255,255,255);'>You can also send me an email! :)</a>
                    </div>
                    <div class='col-sm-4 col-md-4 text-center footer-about' style='margin-right:auto;margin-bottom:auto;padding-top:5%'>
                        <p class='text-center'>Visit me on the social media.</p>
                        <div class='d-block text-center social-links social-icons' style='margin-right:auto;margin-left:auto;display:block;'>
                            <a href='https://www.facebook.com/augusto.vicente.7796'>
                                <i class='fa fa-facebook'></i>
                            </a>
                            <a href='https://www.instagram.com/augusto_rvicente/?hl=pt-br'>
                                <i class='fa fa-instagram'></i>
                            </a>
                            <a href='https://www.linkedin.com/in/augusto-romero-vicente-0185a2169/'>
                                <i class='fa fa-linkedin'></i>
                            </a>
                            <a href='https://github.com/AugustoVicente'>
                                <i class='fa fa-github'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>";
        }
        public function fecha_content()
        {
            echo "</div>
            </div>";
        }
        public function scripts()
        {
            echo "<script src='../assets/js/jquery.min.js'></script>
            <script src='../assets/bootstrap/js/bootstrap.min.js'></script>";
        }
        public function fecha_body()
        {
            echo "</body>";
        }
        public function fecha_pag()
        {
            echo "</html>";
        }
    }
?>