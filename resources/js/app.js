import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    const clickSound = new Audio("/sounds/buwok.mp3");

    document.querySelectorAll('a, button').forEach(el => {
        el.addEventListener('click', function () {
            clickSound.play().catch(e => {});
        });
    });
});
