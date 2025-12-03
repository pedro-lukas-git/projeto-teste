<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f4f4f4;
        }
        .php-output {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            display: inline-block;
        }
        .date-time {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="php-output">
        <h1>✅ PHP Está Funcionando!</h1>

        <?php
            // Este é o código PHP que será executado no servidor.

            // 1. Usando a função echo para exibir texto:
            echo "<p>Esta mensagem foi gerada pelo <strong>interpretador PHP</strong>.</p>";

            // 2. Criando uma variável e exibindo seu valor:
            $current_time = date("H:i:s");
            echo "<p>A hora atual no servidor é: <span class='date-time'>" . $current_time . "</span></p>";

            // 3. Exibindo a versão do PHP (comentado, pois é mais detalhado):
            // phpinfo(); 
        ?>

        <p>Tudo o que você vê abaixo, incluindo a data e hora acima, foi processado com sucesso.</p>
    </div>

</body>
</html>