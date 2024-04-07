<?php

$variavel_nome_cadastro = filter_input(INPUT_POST, "nome_usuario", FILTER_SANITIZE_STRING);

$variavel_email_cadastro = filter_input(INPUT_POST,"email_usuario", FILTER_SANITIZE_EMAIL);

$variavel_senha_cadastro = filter_input(INPUT_POST,"senha_usuario", FILTER_SANITIZE_EMAIL);

echo "Novo Aluno: $variavel_nome_cadastro <br>" ;

?>
