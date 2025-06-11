<?php
$BASE_URL = '/';

include_once "clientes_cadastrados.php";
include_once __DIR__ . '/../../verifica_user_logado.php';


$nomesClientes = array_map(function ($c) {
    return $c['nome'];
}, $clientes);
?>

<main class="flex-fill d-flex justify-content-center align-items-center conteudo">
    <div class="container mt-5">
        <div class="principal shadow p-4 rounded-3 text-light">
            <header class="text-center mb-4">
                <h1 class="display-6 text-shadow">Cadastrar Novo Ticket</h1>
            </header>

            <form action="#" method="post">

                <div class="mb-3 position-relative">
                    <label for="cliente" class="form-label">Nome do Cliente</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" required>
                    <ul id="sugestoes" class="list-group position-absolute w-100 z-3" style="top:100%;"></ul>
                </div>

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="categoria" class="form-label">Categoria</label>
                        <select class="form-select" id="categoria" name="categoria" required>
                            <option value="">Selecione</option>
                            <option value="erro">Erro</option>
                            <option value="sugestao">Sugestão</option>
                            <option value="duvida">Dúvida</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="prioridade" class="form-label">Prioridade</label>
                        <select class="form-select" id="prioridade" name="prioridade" required>
                            <option value="">Selecione</option>
                            <option value="baixa">Baixa</option>
                            <option value="media">Média</option>
                            <option value="alta">Alta</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-success w-100 mb-2" disabled>Salvar Ticket</button>
                <a href="visualizacao_tickts.php" class="btn btn-secondary w-100"
                    data-pagina="<?= $BASE_URL ?>pages/conteudo/tickets_conteudo.php">Cancelar</a>
            </form>

            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                <div class="alert alert-info mt-4">
                    <h5>Ticket Recebido:</h5>
                    <ul>
                        <li><strong>Cliente:</strong> <?= htmlspecialchars($_POST['cliente']) ?></li>
                        <li><strong>Título:</strong> <?= htmlspecialchars($_POST['titulo']) ?></li>
                        <li><strong>Descrição:</strong> <?= htmlspecialchars($_POST['descricao']) ?></li>
                        <li><strong>Categoria:</strong> <?= htmlspecialchars($_POST['categoria']) ?></li>
                        <li><strong>Prioridade:</strong> <?= htmlspecialchars($_POST['prioridade']) ?></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/script/set-tema.js" defer></script>

<script>
    window.listaClientes = <?= json_encode($nomesClientes); ?>;
</script>
<script src="../assets/script/buscar_clientes.js" defer></script>