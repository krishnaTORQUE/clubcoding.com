/*
 * Drop Nav Click Show Hide
 */
window.addEventListener('load', function() {
    getEB({class: 'nav_icon'}, function(elm) {
        elm.addEventListener('click', function(){
            var opa = getParse.cssProp({elem: this.children[0], prop: 'opacity'});
            if(opa === '0'){
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
}, false);