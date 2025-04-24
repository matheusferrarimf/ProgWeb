<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Consumo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Resultado do Cálculo</h1>
    <div class="card">
        <p><strong>Combustível:</strong> {{ $viagem->combustivel }}</p>
        <p><strong>Distância:</strong> {{ $viagem->distancia }} km</p>
        <p><strong>Consumo:</strong> {{ $viagem->consumo }} km/l</p>
        <p><strong>Litros necessários:</strong> {{ number_format($viagem->litrosNecessarios(), 2) }} L</p>
        <p><strong>Custo total:</strong> R$ {{ number_format($viagem->custoTotal(), 2, ',', '.') }}</p>
    </div>
    <a href="/">Voltar</a>
</body>
</html>
