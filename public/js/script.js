document.addEventListener('DOMContentLoaded', function() {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navLinks = document.querySelector('ul.flex');

    // Add click event listener to hamburger menu
    hamburgerMenu.addEventListener('click', function() {
        // Toggle the 'active' class on the hamburger menu
        this.classList.toggle('active');

        // Toggle the 'active' class on the navigation links
        navLinks.classList.toggle('active');
    });
});
