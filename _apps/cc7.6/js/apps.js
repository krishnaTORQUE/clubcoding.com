window.addEventListener('load', function () {
    ajax({
        url: 'https://api.github.com/users/krishnaTORQUE/repos',
        meth: 'GET',
        x_req_wid: false
    }, function (rdata) {
        _('.repository_list')[0].classList.remove('inner_content');
        _('.repository_list')[0].innerHTML = '';
        rdata = JSON.parse(rdata);
        for (var i = 0; i < rdata.length; i++) {
            _('.repository_list')[0].innerHTML += '<div class="inner_content">' +
                    '<a target="_blank" href="' + rdata[i].html_url + '">' +
                    '<h2>' + rdata[i].name + '</h2>' +
                    '<p class="inner_content_description">' + rdata[i].description + '</p>' +
                    '</a>' +
                    '</div>';
        }
    });
}, false);