<!DOCTYPE html>
<html>
<head>
    <title>Cálculo de IMC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Cálculo de IMC</h1>
    <div class="card">
        <form action="/imc" method="POST">
            @csrf
            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>Data de nascimento:</label>
            <input type="date" name="nascimento" required>

            <label>Peso (kg):</label>
            <input type="number"  name="peso" required>

            <label>Altura (m):</label>
            <input type="number"  name="altura" required>

            <button type="submit">Calcular</button>
        </form>
    </div>
    <a href="/">Voltar</a>
</body>
</html>
