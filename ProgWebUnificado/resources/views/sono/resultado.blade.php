<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Sono</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Resultado da Avaliação do Sono</h1>
    <div class="card">
        <p><strong>Nome:</strong> {{ $sono->nome }}</p>
        <p><strong>Idade:</strong> {{ $sono->idade() }} anos</p>
        <p><strong>Horas dormidas:</strong> {{ $sono->horas }}</p>
        <p><strong>Qualidade do sono:</strong> {{ $sono->qualidade() }}</p>
    </div>
    <a href="/">Voltar</a>
</body>
</html>
