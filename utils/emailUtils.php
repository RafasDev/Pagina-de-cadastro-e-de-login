<?php
function enviarEmailVerificacao($email, $verificarURL)
{
    $assunto = "Verificação de Email";
    $mensagem = "Por favor, clique no link abaixo para verificar seu email:\n$verificarURL";
    $headers = "From: no-reply@sCleanConnect.com";
    mail($email, $assunto, $mensagem, $headers);
}
?>