window.onload = function () {
    var referrer = document.referrer;
    // if(referrer=='http://xs228771.xsrv.jp/detail'){
    //     main.classList.remove('erase');
    //     surface.classList.add('erase');
    // }else{
        let surface = document.getElementById('surface');
        let main =document.getElementById('main');
        document.getElementById('card').onclick = function () {
            main.classList.remove('erase');
            surface.classList.add('erase');
        };

    // }
};