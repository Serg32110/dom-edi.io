// Показывать/скрывать кнопку при прокрутке страницы
window.onscroll = function() {
    showScrollToTopButton();
};

function showScrollToTopButton() {
    const scrollToTopButton = document.getElementById("scrollToTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
}

// Прокрутка страницы вверх
function scrollToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}