<?php
    $to      = 'augrovi@hotmail.com';
    $subject = $_POST['nome']." - ".$_POST['subj'];
    $message = $_POST['mes'];
    $headers = 'From: '.$_POST['email']. "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    echo "<script>
        alert('Enviado!');
        window.location.href = 'contact.php';
    </script>"
?>