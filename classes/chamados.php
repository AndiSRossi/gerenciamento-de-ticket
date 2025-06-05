<?php include_once "../classes/chamados_cadastrados.php"; ?>

<div class="container mt-5">
    <div class="principal shadow p-4 rounded-3">
        <header class="text-center mb-4">
            <h1 class="display-6 text-shadow">Tickets</h1>
            <p><?php echo date("d/m/Y H:i"); ?></p>
        </header>

        <section class="mb-4">
            <div class="row mb-4 align-items-center">
                <div class="col-3 d-flex justify-content-start">
                    <a href="cadastro_ticket.php">
                        <button type="button" class="btn btn-success">Novo ticket</button>
                    </a>
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

            <?php foreach ($tickets as $ticket): ?>
                <div class="ticket-item shadow-sm bg-light rounded border border-1 mb-3 p-1"
                     data-id="<?= $ticket['id']; ?>"
                     data-cliente="<?= htmlspecialchars(strtolower($ticket['cliente_nome'] ?? '')); ?>">
                    <div class="d-flex justify-content-between rounded border border-1 p-2 mb-2">
                        <a href="#" class="text-decoration-none"><strong>Ticket ID #<?= $ticket['id']; ?></strong></a>
                        <strong>Título: <?= $ticket['titulo']; ?></strong>
                    </div>
                    <div class="rounded border border-1 p-2">
                        <strong>Cliente:</strong> <?= htmlspecialchars($ticket['cliente_nome'] ?? 'Não informado'); ?><br>
                        <strong>Última atualização:</strong>
                        <p class="mb-0"><?= $ticket['atualizacao']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
</div>
<script src="../assets/script/buscar_tickets.js" defer></script>
