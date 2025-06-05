function setTema(tema) {
  const body = document.body;

  if (tema === 'claro') {
    body.style.backgroundImage = 'url("../assets/css/img/white-bg.jpg")';
    body.style.color = "#000";
  } else {
    body.style.backgroundImage = 'url("../assets/css/img/dark-bg.jpg")';
    body.style.color = "#000";
  }

  localStorage.setItem('tema', tema);
}

function setTemaIndex(tema) {
  const body = document.body;

  if (tema === 'claro') {
    body.style.backgroundImage = 'url("assets/css/img/white-bg.jpg")';
    body.style.color = "#000";
  } else {
    body.style.backgroundImage = 'url("assets/css/img/dark-bg.jpg")';
    body.style.color = "#000";
  }

  localStorage.setItem('tema', tema);
}

window.addEventListener('DOMContentLoaded', () => {
  let temaSalvo = localStorage.getItem('tema');

  if (!temaSalvo) {
    temaSalvo = 'claro';
    localStorage.setItem('tema', temaSalvo);
  }

  const isIndex =
    location.pathname === "/" ||
    location.pathname.endsWith("index.php");

  if (isIndex) {
    setTemaIndex(temaSalvo);
  } else {
    setTema(temaSalvo);
  }
});

// Dropdown com submenu funcional
document.querySelectorAll('.dropdown-submenu > a').forEach(function (element) {
  element.addEventListener('click', function (e) {
    e.preventDefault();
    e.stopPropagation();

    const submenu = this.nextElementSibling;

    if (submenu) {
      submenu.classList.toggle('show');
    }

    // Fecha outros submenus abertos
    document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function (el) {
      if (el !== submenu) el.classList.remove('show');
    });
  });
});

// Fecha os submenus se clicar fora
window.addEventListener('click', function () {
  document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(function (el) {
    el.classList.remove('show');
  });
});
// Fecha os submenus se clicar fora do dropdown
document.addEventListener('click', function (event) {
  const dropdowns = document.querySelectorAll('.dropdown-submenu .dropdown-menu');
  dropdowns.forEach(function (dropdown) {
    if (!dropdown.contains(event.target)) {
      dropdown.classList.remove('show');
    }
  });
});
