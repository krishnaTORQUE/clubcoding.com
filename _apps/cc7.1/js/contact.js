window.addEventListener('load', function() {
    
    /*
     * Send Email
     */
    getEB({class: 'email_send_btn'}, function(elm) {
        elm.addEventListener('click', function(e) {
            e.preventDefault();
            var emali_email = document.getElementsByClassName('email_email')[0].value
            if(valid.email(emali_email)) {
                ajax({
                    url: ACTIVE_APP + 'includes/contact_add',
                    data: {
                        email_name: document.getElementsByClassName('email_name')[0].value,                        
                        email_msg: document.getElementsByClassName('email_msg')[0].value,
                        email_email: emali_email
                    }
                }, function(rdata) {
                    document.getElementsByClassName('return_msg')[0].innerHTML = rdata;
                });
            } else {
                alert('Enter Your Email');
            }            
        });
    });
}, false);