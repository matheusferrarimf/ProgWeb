<!DOCTYPE html>
<html>
<head>
    <title>Avaliação do Sono</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Avaliação da Qualidade do Sono</h1>
    <div class="card">
        <form action="/sono" method="POST">
            @csrf
            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>Data de nascimento:</label>
            <input type="date" name="nascimento" required>

            <label>Horas dormidas (média):</label>
            <input type="number"  name="sono" required>

            <button type="submit">Avaliar</button>
        </form>
    </div>
    <a href="/">Voltar</a>
</body>
</html>
