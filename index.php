<!DOCTYPE html>
<?php
    $name_usuario = isset($_POST['name_usuario']) ? $_POST['name_usuario'] : null; 
    $name_senha = isset($_POST['name_senha']) ? $_POST['name_senha'] : null;

?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tarumã</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            <fieldset>
                <legend>Login</legend>
                <form action="" method="post">
                    <label for="id_usuario">Usuário</label>
                    <input type="text" id="id_usuario" name="name_usuario" placeholder="Digite seu Usuário..." value="<?=$name_usuario?>">

                    <label for="id_senha">Senha</label>
                    <input type="password" id="id_senha" name="name_senha" placeholder="Digite sua senha..." value="<?=$name_senha?>">
                    
                    <button type="submit" id="btn">Logar</button>
                </form>
            </fieldset>
        </div>
    </body>
    <script>
        function validarLogin(event) {
            event.preventDefault();
            const nome = document.getElementById('id_usuario').value;
            const senha = document.getElementById('id_senha').value;
            if (nome && senha) {
                // Aqui você deve fazer uma requisição para o servidor para realizar a verificação dos dados.
                // Se a verificação for bem sucedida, redirecione o usuário para a página restrita.
                // Se a verificação falhar, exiba uma mensagem de erro para o usuário.
                if (nome == 123 && senha == 123) {
                    alert('SUCESSO');
                } else {
                    alert('Usuário ou senha incorretos.');
                }
            } else {
                alert('Por favor, preencha os campos de login e senha.');
            }
        }

        document.getElementById('btn').addEventListener('click', validarLogin);
    </script>
</html>