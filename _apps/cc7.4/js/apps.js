window.addEventListener('load', function () {
    ajax({
        url: 'https://api.github.com/users/krishnaTORQUE/repos',
        meth: 'GET',
        x_req_wid: false
    }, function (rdata) {
        document.getElementsByClassName('contents')[0].innerHTML = '<h1 class="inner_content_title apg_h1">Applications</h1>';
        rdata = JSON.parse(rdata);
        for (var i = 0; i < rdata.length; i++) {
            document.getElementsByClassName('contents')[0].innerHTML += '<div class="inner_content">' +
                    '<a target="_blank" href="' + rdata[i].html_url + '">' +
                    '<h2>' + rdata[i].name + '</h2>' +
                    '<p class="inner_content_description">' + rdata[i].description + '</p>' +
                    '</a>' +
                    '</div>';
        }
    });
}, false);