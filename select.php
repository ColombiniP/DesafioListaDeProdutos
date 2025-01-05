<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Produtos</title>
    <style>
        .output-data {
            margin-top: 2.5rem;
            padding: 1rem;
            display: flex;
            flex-direction: column;
        }

        .output-data .table {
            margin: 0.5rem;
        }

        .output-data .table td,
        th,
        tr {
            border: 1px black solid;
        }

        .btn {
            margin: 0.5rem;
            text-transform: uppercase;
            border: 1px solid black;
            border-radius: 4px;
            box-shadow: 1px 1px 0px 1px black;
            padding: 5px;
            text-align: center;
            text-decoration: none;
            font-weight: 600;
        }

        .btn:hover {
            box-shadow: none;
        }

        .btn:visited {
            color:black;
        }

    </style>
</head>

<body>

    <section class="output-data">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Disponível</th>
                </tr>
            </thead>
            <tbody>
                <?php

                require_once './conexaoDb.php';

                $query = "SELECT * FROM `produtos`";
                $stmt = $conexao->prepare($query);
                $stmt->execute();

                while ($resultado = $stmt->fetch()):
                ?>
                    <tr>
                        <td><?= $resultado['produtos_id']; ?></td>
                        <td><?= $resultado['nome']; ?></td>
                        <td><?= "R$" . $resultado['valor']; ?></td>
                        <td><?= $resultado['descricao']; ?></td>
                        <td><?= $resultado['disponivel']; ?></td>
                    </tr>
                <?php
                endwhile;
                $resultado = null;
                $stmt = null;
                $pdo = null;
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn">Cadastrar Produtos</a>

    </section>
</body>

</html>