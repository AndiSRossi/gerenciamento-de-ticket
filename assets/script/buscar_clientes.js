document.addEventListener("DOMContentLoaded", () => {
    const inputCliente = document.getElementById("cliente");
    const sugestoes = document.getElementById("sugestoes");

    if (!inputCliente || !sugestoes || typeof window.listaClientes === 'undefined') return;

    inputCliente.addEventListener("input", () => {
        const valor = inputCliente.value.toLowerCase();
        sugestoes.innerHTML = "";

        if (valor.length === 0) return;

        const filtrados = window.listaClientes.filter(nome =>
            nome.toLowerCase().includes(valor)
        );

        filtrados.forEach(nome => {
            const item = document.createElement("li");
            item.classList.add("list-group-item", "list-group-item-action");
            item.textContent = nome;
            item.addEventListener("click", () => {
                inputCliente.value = nome;
                sugestoes.innerHTML = "";
            });
            sugestoes.appendChild(item);
        });
    });

    document.addEventListener("click", (e) => {
        if (!sugestoes.contains(e.target) && e.target !== inputCliente) {
            sugestoes.innerHTML = "";
        }
    });
});
