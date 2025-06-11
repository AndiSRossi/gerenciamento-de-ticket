<?php include_once "clientes_cadastrados.php"; 
$BASE_URL = '/';?>

<script>
    window.listaClientes = <?php
    echo json_encode(array_map(fn($c) => $c['nome'], $clientes));
    ?>;
</script>

<div class="container mt-5">
    <div class="principal shadow p-4 rounded-3">
        <header class="text-center mb-4">
            <h1 class="display-6 text-shadow">Clientes</h1>
            <p><?php echo date("d/m/Y H:i"); ?></p>
        </header>

        <section class="mb-4">
            <div class="row mb-4 align-items-center">
                <div class="col-3 d-flex justify-content-start">
                    <button type="button" class="btn btn-success"
                        data-pagina="<?= $BASE_URL ?>pages/conteudo/cadastro_cliente.php">
                        Cadastrar
                    </button>

                </div>

                <div class="col-6 d-flex justify-content-end align-items-center gap-2">
                    <label for="cliente" class="form-label mb-0">
                        <i class="bi bi-search" style="font-size: 24px; color: #000;"></i>
                    </label>
                    <div class="position-relative flex-grow-1">
                        <input type="text" class="form-control" id="cliente" name="cliente" autocomplete="off" required>
                        <ul id="sugestoes" class="list-group position-absolute w-100"
                            style="z-index: 1050; max-height: 150px; overflow-y: auto; top: 100%; left: 0;"></ul>
                    </div>
                </div>
            </div>

            <?php foreach ($clientes as $cliente): ?>
                <a href="#" class="link-card">
                    <div class="rounded border border-2 mb-3 p-3 shadow-sm bg-light rounded shadow-sm">
                        <div class="d-flex justify-content-between mb-2">
                            <strong>ID: <?= $cliente['id']; ?></strong>
                            <strong>Nome: <?= $cliente['nome']; ?></strong>
                        </div>
                        <div>
                            <p class="mb-1"><strong>Email:</strong> <?= $cliente['email']; ?></p>
                            <p class="mb-0"><strong>Telefone:</strong> <?= $cliente['telefone']; ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </section>
    </div>
</div>