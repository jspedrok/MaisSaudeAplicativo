let currentIndex = 0;

function moveSlide(direction) {
    const carouselInner = document.querySelector('.carousel-inner');
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    // Atualiza o índice atual
    currentIndex = (currentIndex + direction + totalItems) % totalItems;

    // Move o carrossel no eixo X
    carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Automação do carrossel (opcional)
setInterval(() => moveSlide(1), 3000); // 