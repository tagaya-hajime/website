window.onload = function () {
    let surface = document.getElementById('surface');
    let main =document.getElementById('main');
    document.getElementById('card').onclick = function () {
        setTimeout(main.classList.remove('erase'),1000);
        surface.classList.add('erase');
    };
};

