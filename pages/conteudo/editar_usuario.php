<?php include_once __DIR__ . '/../../verifica_user_logado.php'; ?>

<div class="container conteudo mt-5">
    <div class="principal shadow p-4">
        <header class="text-center mb-4">
            <h1 class="display-6 text-light text-shadow">Editar usuário</h1>
        </header>
        <form action="/editar_usuario_action.php" method="post" class="form">
            <div class="mb-3">
                <label for="nome" class="form-label text-light">Nome completo</label>
                <input type="text" class="form-control validate" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>

            <div class="mb-3">
                <label for="senha_atual" class="form-label text-light">Senha atual</label>
                <input type="password" class="form-control validate" id="senha_atual" name="senha_atual" placeholder="Digite sua senha atual" required>
            </div>

            <div class="mb-3">
                <label for="nova_senha" class="form-label text-light">Nova senha</label>
                <input type="password" class="form-control validate" id="nova_senha" name="nova_senha" placeholder="Digite a nova senha" required>
            </div>

            <div class="mb-3">
                <label for="confirma_senha" class="form-label text-light">Confirmar nova senha</label>
                <input type="password" class="form-control validate" id="confirma_senha" name="confirma_senha" placeholder="Confirme a nova senha" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-2">Salvar alterações</button>
            <a href="/inicial.php" class="btn btn-warning w-100">Voltar</a>
        </form>
        <div id="resultado" class="mt-3"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/script/main.js" defer></script>
<script src="../assets/script/set-tema.js" defer></script>
