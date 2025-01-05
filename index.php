<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Produtos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="header">
        <h1 class="title">
            Lista de Produtos
        </h1>
        
        <!-- <nav class="nav-bar">
            <ul>
                <li>
                    <a href="insert.php">Cadastrar Produtos</a>
                </li>
                <li>
                    <a href="select.php">Listar Produtos</a>
                </li>
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
            </ul>
        </nav> -->
        <hr>
    </section>

    <section class="input-data">

            <form action="insert.php" method="post">

                <fieldset class="form">

                    <legend>Cadastro de Produtos</legend>

                    <div class="text">
                        <label for="">Nome do produto <span class="red">*</span></label>
                        <input type="text" name="nome" id="nome" required>

                        <label for="">Descrição do produto <span class="red">*</span></label>
                        <input type="text" name="descricao" id="descricao" required>

                        <label for="">Valor do produto <span class="red">*</span></label>
                        <input type="number" name="valor" id="valor" step=".01">
                    </div>


                    <label for="">Disponível para venda <span class="red">*</span></label>
                    <div class="radio">
                        <input type="radio" name="disponivel" id="sim" value="sim" required> <label for="sim">Sim</label>
                        <input type="radio" name="disponivel" id="nao" value="nao" required><label for="nao">Não</label>
                    </div>


                    <div class="text"><input type="submit" value="Cadastrar"></div>

                </fieldset>

            </form>

    </section>
</body>

</html>