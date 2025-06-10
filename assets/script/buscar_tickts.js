document.addEventListener('DOMContentLoaded', function () {
  const input = document.getElementById('cliente');
  const tickets = document.querySelectorAll('.ticket-item');

  input.addEventListener('input', function () {
    const termo = input.value.trim().toLowerCase();

    tickets.forEach(ticket => {
      const id = ticket.getAttribute('data-id').toLowerCase();
      const cliente = ticket.getAttribute('data-cliente').toLowerCase();

      if (id.includes(termo) || cliente.includes(termo)) {
        ticket.style.display = '';
      } else {
        ticket.style.display = 'none';
      }
    });
  });
});
