/* 
 * Inicialização de plugins
 */

document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();
});


$(function() {
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });

    autoplay();

    function autoplay() {
        $('.carousel.carousel-slider').carousel('next');
        setTimeout(autoplay, 5000);
    }

});