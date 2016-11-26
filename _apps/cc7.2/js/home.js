function header_scroll(elem_offsetTop) {
    getEB({tag: 'header'}, function (elem) {
        if (getParse.scrollPosi()['y'] >= elem_offsetTop) {
            elem.style.top = 0;
            elem.style.position = 'fixed';
        } else if (getParse.scrollPosi()['y'] < elem_offsetTop) {
            elem.removeAttribute('style');
            elem.style.position = 'relative';
        }
    });
}

window.addEventListener('load', function () {

    var elem_offsetTop = null;
    getEB({tag: 'header'}, function (elem) {
        if (elem_offsetTop === null) {
            elem_offsetTop = elem.offsetTop;
        }
    });

    header_scroll(elem_offsetTop);

    window.addEventListener('scroll', function () {
        header_scroll(elem_offsetTop);
    }, false);

}, false);

window.addEventListener('resize', function () {
    imageSlider({
        class: 'imageSlider'
    });
}, false);

window.addEventListener('DOMContentLoaded', function () {
    imageSlider({
        class: 'imageSlider'
    });
}, false);