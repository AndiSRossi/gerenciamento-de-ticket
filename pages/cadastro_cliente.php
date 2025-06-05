<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
    <?php include_once "../includes/header.php"; ?>


<body>
    <main class="flex-fill d-flex justify-content-center align-items-center">
        <div class="container conteudo mt-5">
            <div class="principal shadow p-4">
                <header class="text-center mb-4">
                    <h1 class="display-6 text-light text-shadow">Novo cadastro</h1>
                </header>
                <form action="/" method="post" class="form">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label text-light">Nome completo</label>
                            <input type="text" class="form-control validate" id="nome"
                                placeholder="Digite o nome do cliente">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label text-light">E-mail</label>
                            <input type="email" class="form-control validate" id="email"
                                placeholder="Digite o e-mail do cliente">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telefone" class="form-label text-light">Telefone</label>
                        <input type="text" class="form-control validate" id="telefone" placeholder="(XX) XXXXX-XXXX">
                    </div>

                    <div class="mb-3">
                        <label for="endereco" class="form-label text-light">Endereço</label>
                        <input type="text" class="form-control validate" id="endereco"
                            placeholder="Rua, número, complemento...">
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="cidade" class="form-label text-light">Cidade</label>
                            <input type="text" class="form-control validate" id="cidade" placeholder="Digite a cidade">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="estado" class="form-label text-light">Estado</label>
                            <input type="text" class="form-control validate" id="estado" placeholder="UF">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="cep" class="form-label text-light">CEP</label>
                            <input type="text" class="form-control validate" id="cep" placeholder="XXXXX-XXX">
                        </div>
                    </div>

                    <button type="submit" class="btn mb-2 btn-primary w-100">Cadastrar Cliente</button>
                    <a href="pagina_clientes.php">
                        <button type="button" class="btn btn-warning w-100">Voltar</button>
                    </a>
                </form>
                <div id="resultado" class="mt-3"></div>
            </div>
        </div>
    </main>
    <?php include_once "../includes/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/script/main.js" defer></script>
    <script src="../assets/script/set-tema.js" defer></script>



</body>

</html>