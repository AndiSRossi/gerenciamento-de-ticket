<?php 
include_once "usuarios_cadastrados.php"; // arquivo que deve carregar $usuarios = [...];

?>

<script>
    window.listaUsuarios = <?php
        echo json_encode(array_map(fn($u) => $u['nome'], $usuarios));
    ?>;
</script>

<div class="container mt-5">
    <div class="principal shadow p-4 rounded-3">
        <header class="text-center mb-4">
            <h1 class="display-6 text-shadow">Usuários</h1>
            <p><?php echo date("d/m/Y H:i"); ?></p>
        </header>

        <section class="mb-4">
            <div class="row mb-4 align-items-center">
                <div class="col-3 d-flex justify-content-start">
                    <button type="button" class="btn btn-success"
                        data-pagina="/Projeto/pages/conteudo/cadastro_usuario.php">
                        Cadastrar Usuário
                    </button>
                </div>

                <div class="col-6 d-flex justify-content-end align-items-center gap-2">
                    <label for="usuario" class="form-label mb-0">
                        <i class="bi bi-search" style="font-size: 24px; color: #000;"></i>
                    </label>
                    <div class="position-relative flex-grow-1">
                        <input type="text" class="form-control" id="usuario" name="usuario" autocomplete="off" required>
                        <ul id="sugestoes" class="list-group position-absolute w-100"
                            style="z-index: 1050; max-height: 150px; overflow-y: auto; top: 100%; left: 0;"></ul>
                    </div>
                </div>
            </div>

            <?php foreach ($usuarios as $usuario): ?>
                <a href="#" 
                   class="link-card usuario-link" 
                   data-id="<?= $usuario['id']; ?>"
                   data-pagina="/Projeto/pages/conteudo/editar_usuario.php?id=<?= $usuario['id']; ?>">
                    <div class="rounded border border-2 mb-3 p-3 shadow-sm bg-light rounded shadow-sm">
                        <div class="d-flex justify-content-between mb-2">
                            <strong>ID: <?= $usuario['id']; ?></strong>
                            <strong>Nome: <?= htmlspecialchars($usuario['nome']); ?></strong>
                        </div>
                        <div>
                            <p class="mb-1"><strong>Email:</strong> <?= htmlspecialchars($usuario['email']); ?></p>
                            <p class="mb-0"><strong>Nível:</strong> 
                                <?php
                                    switch ($usuario['nivel']) {
                                        case 1: echo 'Admin'; break;
                                        case 2: echo 'Suporte'; break;
                                        case 3: echo 'Cliente'; break;
                                        default: echo 'Desconhecido';
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </section>
    </div>
</div>

<script>
    // Exemplo simples para abrir a edição ao clicar no card
    document.querySelectorAll('.usuario-link').forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const pagina = link.getAttribute('data-pagina');
            // Aqui você pode usar a navegação da sua aplicação,
            // exemplo para carregar o conteúdo via AJAX ou mudar a URL:
            window.location.href = pagina;
        });
    });
</script>
