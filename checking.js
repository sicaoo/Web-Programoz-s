
window.addEventListener('load', function() {
    document.getElementById('urlap').addEventListener('submit', function (e) {
        e.preventDefault();
        if (checkForm()) this.submit();
    });
});
var $ = function(id) {
    return document.getElementById(id);
};

var checkForm = function() {
    $('first_name_error').innerHTML = '';
    $('last_name_error').innerHTML = '';
    $('address_error').innerHTML = '';
    $('email_error').innerHTML = '';
    $('telephone_error').innerHTML = '';

    var isValid = true;

    if ($('first_name').value == '') {
        $('first_name_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("first_name").style.borderColor = "grey";
        isValid = false;
    }

    if ($('last_name').value == '') {
        $('last_name_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("last_name").style.borderColor = "grey";
        isValid = false;
    }


    if ($('address').value == '') {
        $('address_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("address").style.borderColor = "grey";
        isValid = false;
    }
    if ($('telephone').value == '') {
        $('password_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("telephone").style.borderColor = "grey";
        isValid = false;
    }



    var rex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!rex.test($('email').value)) {
        $('email_error').innerHTML = 'Helytelen forma';
        document.getElementById("email").style.borderColor = "grey";
        isValid = false;
    }

    if ($('email').value == '') {
        $('email_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("email").style.borderColor = "grey";
        isValid = false;
    }}