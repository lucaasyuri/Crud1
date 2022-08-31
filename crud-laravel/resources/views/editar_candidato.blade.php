<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de CRUD</title>
</head>
<body>

    <form action="/atualizar-candidato/{{ $candidato->id }}" method="POST">
    
        @csrf
        @method('PUT') <!-- forçando o método 'put' -->

        <label for="">Nome:</label>
        <input name="nome_candidato" value="{{ $candidato->nome }}" type="text" placeholder="Digite o seu nome...">

        <br>
        <br>

        <label for="">Telefone</label>
        <input name="telefone_candidato" value="{{ $candidato->telefone }}" type="text" placeholder="Digite o seu telefone...">

        <br>
        <br>

        <button>Atualizar Cadastro</button>

    </form>

</body>
</html>