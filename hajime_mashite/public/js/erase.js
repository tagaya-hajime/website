window.onload = function () {
    let surface = document.getElementById('surface');
    let main =document.getElementById('main');
    document.getElementById('card').onclick = function () {
        main.classList.remove('erase');
        surface.classList.add('erase');
    };
};

