<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de CRUD</title>
</head>
<body>

    <form action="/cadastrar-candidato" method="POST">
    
        @csrf

        <label for="">Nome:</label>
        <input name="nome_candidato" type="text" placeholder="Digite o seu nome...">

        <br>
        <br>

        <label for="">Telefone</label>
        <input name="telefone_candidato" type="text" placeholder="Digite o seu telefone...">

        <br>
        <br>

        <button>Enviar Cadastro</button>

    </form>

</body>
</html>