// Remove the link to index_home.js from the HTML file
const linkToRemove = document.querySelector('link[href="index_home.js"]');
linkToRemove.remove();

// Add an event listener to the "Home" link to scroll to the top of the page
const homeLink = document.querySelector('a[href="#"]');
homeLink.addEventListener('click', (event) => {
    event.preventDefault();
    const target = document.querySelector(event.target.getAttribute('href'));
    window.scrollTo({
        top: target.offsetTop,
        behavior: 'smooth'
    });
});

// Fix the duplicated "Projects" link
const duplicatedProjectsLink = document.querySelectorAll('a[href="#"]');
duplicatedProjectsLink[1].remove();




