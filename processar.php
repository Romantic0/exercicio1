<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <title>Dados Recebidos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            color: blue;
        }

        pre {
            background: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <h2>Dados Recebidos</h2>
    <div class="container">
        <h3>Dados do Formulário</h3>
        <p><strong>Nome:</strong> <?= htmlspecialchars($_REQUEST['nome'] ?? 'Não informado') ?></p>
        <p><strong>Telefone:</strong> <?= htmlspecialchars($_REQUEST['telefone'] ?? 'Não informado') ?></p>
        <p><strong>E-mail:</strong> <?= htmlspecialchars($_REQUEST['email'] ?? 'Não informado') ?></p>
        <p><strong>Mensagem:</strong> <?= nl2br(htmlspecialchars($_REQUEST['mensagem'] ?? 'Não informado')) ?></p>

        <h3>Método Utilizado</h3>
        <p><?= $_SERVER['REQUEST_METHOD'] ?></p>

        <h3>Cabeçalhos da Requisição</h3>
        <pre>
        <?php
        $headers = apache_request_headers();
        print_r($headers);
        ?>
        </pre>

        <h3>URL para Enviar por GET</h3>
        <?php
        $queryString = http_build_query($_REQUEST);
        $url = "processar.php?$queryString";
        ?>
        <a href="<?= $url ?>" target="_blank">Enviar dados via GET</a>
    </div>

</body>

</html>