// Toggle Navigation Menu for Mobile Devices
document.addEventListener('DOMContentLoaded', function () {
    const nav = document.querySelector('nav');
    const toggleButton = document.createElement('div');
    toggleButton.className = 'nav-toggle';
    toggleButton.innerHTML = '&#9776;'; // Hamburger icon

    // Append the toggle button to the navigation bar
    nav.insertBefore(toggleButton, nav.querySelector('ul'));

    // Toggle the visibility of the menu when the button is clicked
    toggleButton.addEventListener('click', function () {
        const navMenu = nav.querySelector('ul');
        if (navMenu.style.display === 'flex' || navMenu.style.display === '') {
            navMenu.style.display = 'none';
        } else {
            navMenu.style.display = 'flex';
            navMenu.style.flexDirection = 'column';
            navMenu.style.alignItems = 'center';
        }
    });

    // Ensure the menu is displayed properly when resizing the window
    window.addEventListener('resize', function () {
        const navMenu = nav.querySelector('ul');
        if (window.innerWidth > 600) {
            navMenu.style.display = 'flex';
            navMenu.style.flexDirection = 'row';
        } else {
            navMenu.style.display = 'none';
        }
    });
});
