document.addEventListener("DOMContentLoaded", () => {
  const main = document.getElementById("conteudo");
  if (!main) return;

  const carregarPagina = (pagina) => {
    fetch(pagina)
      .then((res) => {
        if (!res.ok) throw new Error("Página não encontrada");
        return res.text();
      })
      .then((html) => {
        main.innerHTML = html;
        window.history.pushState({}, "", `#${pagina}`);
      })
      .catch((erro) => {
        main.innerHTML = `<div class="alert alert-danger">Erro ao carregar a página.</div>`;
        console.error(erro);
      });
  };

  document.addEventListener("click", (e) => {
    const alvo = e.target.closest("[data-pagina]");
    if (alvo) {
      e.preventDefault();
      const pagina = alvo.getAttribute("data-pagina");
      if (pagina) carregarPagina(pagina);
    }
  });

  const paginaInicial = window.location.hash.replace("#", "") || "/Projeto/pages/conteudo/inicio_conteudo.php";
  carregarPagina(paginaInicial);

  window.addEventListener("popstate", () => {
    const pagina = window.location.hash.replace("#", "") || "/Projeto/pages/conteudo/inicio_conteudo.php";
    carregarPagina(pagina);
  });
});
