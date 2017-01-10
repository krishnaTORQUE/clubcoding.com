/*
 * Drop Nav Click Show Hide
 */
window.addEventListener('load', function () {
    getEB({class: 'nav_icon'}, function (elm) {
        elm.addEventListener('click', function () {
            var opa = getParse.cssProp(this.children[0], 'opacity');
            if (opa === '0') {
                this.classList.add('drop_nav_act');
                this.children[0].style.visibility = 'visible';
                this.children[0].style.opacity = 1;
            } else {
                this.classList.remove('drop_nav_act');
                this.children[0].style.opacity = 0;
                this.children[0].style.visibility = 'hidden';
            }
        });
    });

    /*
     * back top top ------------
     */
    window.addEventListener('scroll', function () {
        var docu_scrolheight = window.pageYOffset;
        if (docu_scrolheight > 10) {
            _('.backtotop')[0].style.visibility = 'visible';
        } else {
            _('.backtotop')[0].style.visibility = 'hidden';
        }
    }, false);
    _('.backtotop')[0].addEventListener('click', function () {
        var docu_scroltop = window.pageYOffset;
        var setInt = setInterval(function () {
            if (docu_scroltop <= 0) {
                clearInterval(setInt);
            } else {
                window.scroll(0, docu_scroltop -= 30);
            }
        }, 10);
    }, false);

}, false);