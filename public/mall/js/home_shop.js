document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.product-list');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const itemWidth = document.querySelector('.product-flash-sale').offsetWidth + 20;

    nextButton.addEventListener('click', function() {
        carousel.scrollBy({
            left: itemWidth,
            behavior: 'smooth'
        });
    });

    prevButton.addEventListener('click', function() {
        carousel.scrollBy({
            left: -itemWidth,
            behavior: 'smooth'
        });
    });
    
    document.addEventListener('DOMContentLoaded', function() {
        const starsContainers = document.querySelectorAll('.rating-stars');
    
        starsContainers.forEach(container => {
            const ratingValueElement = container.nextElementSibling;
    
            if (ratingValueElement && ratingValueElement.classList.contains('rating-value')) {
                const ratingValue = parseFloat(ratingValueElement.textContent);
                const stars = container.querySelectorAll('img');
    
                const roundedRating = Math.round(ratingValue * 2) / 2;
    
                stars.forEach((star, index) => {
                    star.classList.remove('filled', 'half-filled', 'empty');
                    if (index < Math.floor(roundedRating)) {
                        star.classList.add('filled');
                    } else if (index === Math.floor(roundedRating) && roundedRating % 1 !== 0) {
                        star.classList.add('half-filled');
                    } else {
                        star.classList.add('empty');
                    }
                });
            } else {
                console.error('Elemen .rating-value tidak ditemukan setelah .rating-stars');
            }
        });
    });
    
});
