document.addEventListener('DOMContentLoaded', () => {
    const menuItems = document.querySelectorAll('.product-menu a');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault(); 
            
            const currentActive = document.querySelector('.product-menu a.active');
            
            if (currentActive) {
                currentActive.classList.remove('active');
                currentActive.classList.add('inactive');
            }
            
            this.classList.remove('inactive');
            this.classList.add('active');
        });
    });
});
