// GETTING ALL INPUT TEXT OBJECTS
var username=document.forms["vform"]["username"];
var password_1=document.forms["vform"]["password_1"];
var password_2=document.forms["vform"]["password_2"];
var last_name=document.forms["vform"]["last_name"];
var first_name=document.forms["vform"]["first_name"];
var email=document.forms["vform"]["email"];
var city=document.forms["vform"]["city"];
var address=document.forms["vform"]["address"];

// GETTING ALL ERROR DISPLAY OBJECTS
var username_error=document.getElementById("username_error");
var password_1_error=document.getElementById("password_1_error");
var password_2_error=document.getElementById("password_2_error");
var last_name_error=document.getElementById("last_name_error");
var first_name_error=document.getElementById("first_name_error");
var email_error=document.getElementById("email_error");
var city_error=document.getElementById("city_error");
var address_error=document.getElementById("address_error");

// SETTING ALL EVENT LISTENERS
username.addEventListener("blur",nameVerify,true);
password_1.addEventListener("blur",password_1Verify,true);
password_2.addEventListener("blur",password_2Verify,true);
last_name.addEventListener("blur",last_nameVerify,true);
first_name.addEventListener("blur",first_nameVerify,true);
email.addEventListener("blur",emailVerify,true);
city.addEventListener("blur",cityVerify,true);
address.addEventListener("blur",addressVerify,true);

//validation function
function Validate(){
    // username validation
    if (username.value==""){
        username.style.borderColor="red";
        username_error.textContent="Kötelező kitölteni";
        username.focus();
        return false;
    }
    var sql="select username from member";
    if(username.value==sql){
        username.style.borderColor="red";
        username_error.textContent="Letezik ez felhasználó név";
        username.focus();
        return false
    }

    // password1 validation
    if (password_1.value==""){
        password_1.style.borderColor="red";
        password_1_error.textContent="Kötelező kitölteni";
        password_1.focus();
        return false;
    }
    if (password_1.value.length < 8){
        password_1.style.borderColor="red";
        password_1_error.textContent="Nincs meg a 8 karakter";
        password_1.focus();
        return false;
    }
    // password2 validation
    if (password_2.value==""){
        password_2.style.borderColor="red";
        password_2_error.textContent="Kötelező kitölteni";
        password_2.focus();
        return false;

    }
    //check if the two passwords are matching
    if(password_1.value!= password_2.value){
        password_1.style.borderColor="red";
        password_2.style.borderColor="red";
        password_1_error.innerHTML="Nem egyeznek a jelszavak";
        return false;
    }
    // last name validation
    if (last_name.value==""){
        last_name.style.borderColor="red";
        last_name_error.textContent="Kötelező kitölteni";
        last_name.focus();
        return false;
    }
    // fist name validation
    if (first_name.value==""){
        first_name.style.borderColor="red";
        first_name_error.textContent="Kötelező kitölteni";
        first_name.focus();
        return false;
    }
    // email validation
    if (email.value==""){
        email.style.borderColor="red";
        email_error.textContent="Kötelező kitölteni";
        email.focus();
        return false;
    }
    //correct email form
    var rex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!rex.test(email.value)) {
        email.style.borderColor="red";
        email_error.innerHTML = 'Helytelen forma';
        email.focus();
        return false;
    }
    // city validation
    if (city.value==""){
        city.style.borderColor="red";
        city_error.textContent="Kötelező kitölteni";
        city.focus();
        return false;
    }
    // address validation
    if (address.value==""){
        address.style.borderColor="red";
        address_error.textContent="Kötelező kitölteni";
        address.focus();
        return false;
    }

}
function nameVerify() {
    if(username.value !=""){
        username.style.border="1px solid grey";
        username_error.innerHTML="";
        return true;
    }
}
function password_1Verify() {
    if(password_1.value !=""){
        password_1.style.border="1px solid grey";
        password_1_error.innerHTML="";
        return true;
    }
}
function password_2Verify() {
    if(password_2.value !=""){
        password_2.style.border="1px solid grey";
        password_2_error.innerHTML="";
        return true;
    }
}
function last_nameVerify() {
    if(last_name.value !=""){
        last_name.style.border="1px solid grey";
        last_name_error.innerHTML="";
        return true;
    }
}
function first_nameVerify() {
    if(
        first_name.value !=""){
        first_name.style.border="1px solid grey";
        first_name_error.innerHTML="";
        return true;
    }
}
function emailVerify() {
    if(
        email.value !=""){
        email.style.border="1px solid grey";
        email_error.innerHTML="";
        return true;
    }
}
function cityVerify() {
    if(
        city.value !=""){
        city.style.border="1px solid grey";
        city_error.innerHTML="";
        return true;
    }
}
function addressVerify() {
    if(
        address.value !=""){
        address.style.border="1px solid grey";
        address_error.innerHTML="";
        return true;
    }
}
/*window.addEventListener('load', function() {
    document.getElementById('registration2').addEventListener('submit', function (e) {
        if (checkForm()) this.submit();
    });
});
var $ = function(id) {
    return document.getElementById(id);
};

var checkForm = function() {
    $('username_error').innerHTML = '';
    $('password_1_error').innerHTML = '';
    $('password_2_error').innerHTML = '';
    $('first_name_error').innerHTML = '';
    $('last_name_error').innerHTML = '';
    $('email_error').innerHTML = '';
    $('city_error').innerHTML = '';
    $('address_error').innerHTML = '';



    var isValid = true;

    if ($('username').value == '') {
        $('username_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("username").style.borderColor = "red";
        isValid = false;
    }
    if ($('password_1').value == '') {
        $('password_1_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("password_1").style.borderColor = "red";
        isValid = false;
    }
    if ($('password_1').value.length<8) {
        $('password_1_error').innerHTML = '8 karaktertól kevesebb';
        document.getElementById("password_1").style.borderColor = "red";
        isValid = false;
    }
    if ($('password_2').value == '') {
        $('password_2_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("password_2").style.borderColor = "red";
        isValid = false;
    }
    if ($('last_name').value == '') {
        $('last_name_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("last_name").style.borderColor = "red";
        isValid = false;
    }
    if ($('first_name').value == '') {
        $('first_name_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("first_name").style.borderColor = "red";
        isValid = false;
    }

    var rex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!rex.test($('email').value)) {
        $('email_error').innerHTML = 'Helytelen forma';
        document.getElementById("email").style.borderColor = "red";
        isValid = false;
    }

    if ($('email').value == '') {
        $('email_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("email").style.borderColor = "red";
        isValid = false;
    }
    if ($('city').value == '') {
        $('city_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("city").style.borderColor = "red";
        isValid = false;
    }


    if ($('address').value == '') {
        $('address_error').innerHTML = 'Kötelező kitölteni';
        document.getElementById("address").style.borderColor = "red";
        isValid = false;
    }


}
*/
