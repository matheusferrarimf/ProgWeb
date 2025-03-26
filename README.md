# 🧪 ProgWeb – Projetos Laravel

Este repositório reúne **3 projetos Laravel** desenvolvidos como prática da disciplina de **Programação Web**, com foco em lógica, MVC, formulários e exibição de resultados com estilo personalizado.

## 📁 Projetos incluídos

### 1. 🧍‍♂️ Cálculo de IMC – `imcApp`
> Realiza o cálculo do Índice de Massa Corporal (IMC) e classifica o resultado.

**Funcionalidades:**
- Solicita nome, data de nascimento, peso e altura.
- Calcula IMC e retorna a classificação.
- Estilizado com paleta `#00FFFF`.

📂 Caminho: `imcApp/`  
🔗 Baseado na tabela do [Minhavida.com](https://www.minhavida.com.br/saude/tratamento/3870-imc)

---

### 2. 💤 Avaliação da Qualidade do Sono – `saudeSono`
> Avalia se a pessoa está dormindo o suficiente com base na sua idade.

**Funcionalidades:**
- Solicita nome, data de nascimento e média de horas dormidas.
- Compara com faixas etárias e recomendações.
- Indica se o sono está "Bom" ou "Insuficiente".

📂 Caminho: `saudeSono/`  
🔗 Inspirado em [CNN Brasil – Hábitos para dormir melhor](https://www.cnnbrasil.com.br/saude/oito-mudancas-de-habito-que-ajudam-a-dormir-melhor)

---

### 3. 🚗 Consumo de Combustível – `consumoCombustivel`
> Calcula o valor total gasto em uma viagem com base no consumo e no preço do combustível.

**Funcionalidades:**
- Seleciona tipo de combustível.
- Informa valor do litro, distância da viagem e consumo do veículo (km/l).
- Exibe o custo total da viagem.

📂 Caminho: `consumoCombustivel/`

---

## 🎨 Estilo

Todos os projetos utilizam um **CSS personalizado com a cor principal `#00FFFF`**, com layout responsivo e legível.

---

## ▶️ Como rodar os projetos

Cada projeto é um Laravel independente. Para rodar:

```bash
cd nome-do-projeto
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
