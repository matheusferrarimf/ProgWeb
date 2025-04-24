<!DOCTYPE html>
<html>
<head>
    <title>Consumo de Combustível</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Consumo de Combustível</h1>
    <div class="card">
        <form action="/gasto" method="GET">
            <label>Combustível:</label>
            <select name="combustivel" required>
                <option value="Gasolina">Gasolina</option>
                <option value="Etanol">Etanol</option>
                <option value="Diesel">Diesel</option>
            </select>

            <label>Valor por litro (R$):</label>
            <input type="number"  name="valor" required>

            <label>Distância (km):</label>
            <input type="number"  name="distancia" required>

            <label>Consumo do veículo (km/l):</label>
            <input type="number"  name="consumo" required>

            <button type="submit">Calcular</button>
        </form>
    </div>
    <a href="/">Voltar</a>
</body>
</html>
