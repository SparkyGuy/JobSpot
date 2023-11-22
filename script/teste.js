var modal = document.getElementById('myModal');
var closeModal = document.getElementById('closeModal');

var cards = document.querySelectorAll('.product-card');

// Adiciona um evento de clique para cada card
cards.forEach(function(card) {
    card.addEventListener('click', function() {
        modal.style.display = 'block';
    });
});

// Fecha o modal quando o botão de fechar é clicado
closeModal.addEventListener('click', function() {
    modal.style.display = 'none';
});

// Fecha o modal quando o usuário clica fora dele
window.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});
