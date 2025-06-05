<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<?php include_once "menu.php"; ?>


<body>
    <main class="flex-fill d-flex justify-content-center align-items-center">
        <div class="container conteudo mt-5">
            <div class="principal shadow p-4">
                <header class="text-center mb-4">
                    <h1 class="display-6 text-light text-shadow">Novo cadastro</h1>
                </header>

                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0">
                        <li>Nenhum campo pode estar vazio</li>
                        <li>Usuário só poderá conter letras e/ou números</li>
                        <li>Usuário deverá ter entre 3 e 12 caracteres</li>
                        <li>Senha precisa ter entre 6 e 12 caracteres</li>
                    </ul>
                </div>

                <form action="/" method="post" class="form">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label text-light">Nome</label>
                            <input type="text" class="form-control validate" id="nome"
                                placeholder="Digite o primeiro nome">
                        </div>
                        <div class="col-md-6 mb-3 text-light">
                            <label for="sobrenome" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control validate" id="sobrenome"
                                placeholder="Digite o sobrenome">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="cpf" class="form-label text-light">CPF</label>
                        <input type="text" class="form-control validate cpf" id="cpf" placeholder="Digite o CPF">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label text-light">E-mail</label>
                        <input type="email" class="form-control validate" id="email" placeholder="Digite seu e-mail">
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="senha" class="form-label text-light">Senha</label>
                            <input type="password" class="form-control validate senha" id="senha"
                                placeholder="Digite a senha">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="confSenha" class="form-label text-light">Confirme a senha</label>
                            <input type="password" class="form-control validate confSenha" id="confSenha"
                                placeholder="Digite a senha novamente">
                        </div>
                    </div>

                    <button type="submit" class="btn mb-2 btn-primary w-100">Cadastrar</button>
                    <a href="clientes.php">
                        <button type="button" class="btn btn-warning w-100">Voltar</button>
                    </a>

                </form>

                <div id="resultado" class="mt-3"></div>
            </div>
        </div>
    </main>
    <?php include_once "rodape.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/script/main.js" defer></script>
    <script src="assets/script/set-tema.js" defer></script>




</body>

</html>