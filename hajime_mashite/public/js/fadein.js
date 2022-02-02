window.onload = function () {
    var slideConts = document.querySelectorAll('.slideConts');
    var slideContsTop = []; 
    var win_y = window.pageYOffset;
    var windowH = window.innerHeight;

    for (var i = 0; i < slideConts.length; i++) {
        slideContsTop.push(slideConts[i].getBoundingClientRect().top + win_y);
    }

    for (var i = 0; i < slideConts.length; i++) {
        if (win_y > slideContsTop[i] - windowH)slideConts[i].classList.add('show');
    }

    window.addEventListener('resize', function () {
        windowH = window.innerHeight;
    });

    window.addEventListener('scroll', function () {
        win_y = window.pageYOffset;
        for (var i = 0; i < slideConts.length; i++) {
            if (win_y > slideContsTop[i] - windowH)slideConts[i].classList.add('show');
        }
    });

}

