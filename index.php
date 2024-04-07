<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - Cadastro College</title>
</head>
<body>

<h1>Cadastro Faculdade</h2>


<form method ="POST" action="detalhesUsuario.php">


    <label>Nome Usuário</label>
    <input type= "text" nome="nome_usuario" placeholder="Digite seu nome completo" required /><br><br>


    <label>E-mail</label>
    <input type= "email" nome="email_usuario" placeholder="Digite seu E-mail" required /><br><br>

    <label>Senha</label>
    <input type= "password" nome="password_usuario" placeholder="Digite sua senha de registro" required /><br><br>


     <input type="submit" value="Cadastro">

</form>


</body>
</html>