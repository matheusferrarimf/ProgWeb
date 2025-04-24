<!DOCTYPE html>
<html>
<head>
    <title>Resultado do IMC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Resultado da Análise IMC</h1>
    <div class="card">
        <p><strong>Nome:</strong> {{ $pessoa->nome }}</p>
        <p><strong>Idade:</strong> {{ $pessoa->idade() }}</p>
        <p><strong>Peso:</strong> {{ $pessoa->peso }} kg</p>
        <p><strong>Altura:</strong> {{ $pessoa->altura }} m</p>
        <p><strong>IMC:</strong> {{ $pessoa->imc() }} - {{ $pessoa->classificacaoImc() }}</p>
    </div>
    <a href="/">Voltar</a>
</body>
</html>
