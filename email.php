<?php
if(isset($_POST['submit'])){
    $to = 'rh@tinpix.com.br';
    $name = $_POST['nome'];
    $mailFrom = $_POST['email'];
    $tel = $_POST['telefone'];
    $subject = 'Cadastro concurso';
    
    //HTML Email
    $message = '<html><body style="font-family: Arial, Helvetica, sans-serif;">';
    $message .= '<div style ="display: flex; flex-direction:column; align-items:center; padding: 25px;">';
    $message .= '<img src="https://tinpix.com/wp-content/themes/tinpix/library/images/logo/logo.svg" alt="Logo"/>';
    $message .= '<h1>Obrigado pela inscrição!</h1>';
    $message .= '<p style="width: 30%; text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>';
    $message .= '<div style="margin-bottom: 25px;">';
    $message .= '<p><strong>Nome: </strong>' . strip_tags($name) . '</p>';
    $message .= '<p><strong>Email: </strong>' . strip_tags($mailFrom) . '</p>';
    $message .= '<p><strong>Telefone: </strong>' . strip_tags($tel) . '</p>';
    $message .= '</div>';
    $message .= '<button style="cursor: pointer; outline: none; padding: 0.8rem 3rem 0.8rem 3rem;border-radius: 4px;background: #169BD5;color: rgb(243, 243, 245); border: none;font-weight: bold;">Voltar ao site</button>';
    $message .= '</div>';
    $message .= '</html></body>';

    $headers = "From: " . $mailFrom. "\r\n";
    $headers .= "Reply-to: ". $mailFrom . "\r\n";
    $headers .= "Cc:" . $mailFrom . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if (mail($to, $subject, $message, $eaders)) {
        echo 'Cadastro concluido';
      } else {
        echo 'Erro, tente novamente';
      }
}
?>
