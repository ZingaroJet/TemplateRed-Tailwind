// script.js
document.addEventListener('DOMContentLoaded', function() {
    const myHeading = document.getElementById('myHeading');
    
    myHeading.classList.add('text-6xl', 'tracking-tight', 'text-primary');
    
    myHeading.addEventListener('mouseenter', function() {
        myHeading.style.transitionDuration = '1000ms'; // Imposta la durata della transizione
        myHeading.style.letterSpacing = '30px';
    });

    myHeading.addEventListener('transitionend', function() {
        myHeading.style.transitionDuration = '0ms'; // Rimuove la transizione al termine
        myHeading.style.letterSpacing = '30px';
        myHeading.removeEventListener('mouseleave', onMouseLeave); // Rimuove l'event listener del mouseleave
    });

    function onMouseLeave() {
        // Non fare nulla nel gestore dell'evento mouseleave
        // Così le lettere non torneranno alla posizione originale
    }

    myHeading.addEventListener('mouseleave', onMouseLeave);
});


