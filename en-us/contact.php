<?php
    include 'Layout.php';
    $layout = new Layout();
    $layout->cabecalho();
    $layout->abre_body();
    $layout->top_bar();
    $layout->abre_content();
?>
<br/>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9 offset-md-1 info">
            <form action="mail.php" method="post">
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" name="nome" type="text" />
                </div>
                <div class="form-group">
                    <label>Assunto</label>
                    <input class="form-control" name="subj" type="text" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" type="text" />
                </div>
                <div class="form-group">
                    <label>Mensagem</label>
                    <textarea class="form-control" name="mes"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Enviar</button>
                </div>
            </form>
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