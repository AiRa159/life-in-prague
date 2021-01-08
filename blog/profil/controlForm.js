function control() {
    var password = String(document.forms["registration"]["password"].value);
    if(password.length < 8 || password.length > 12){
        alert ("Heslo musí být delší než 8 a kratší než 12!")
        return false;
    }
}
function control_pas(){
    var pass = String(document.forms["authorization"]["password"].value);
    if(pass.length < 8 || pass.length > 12){
        alert ("Heslo musí být delší než 8 a kratší než 12!")
        return false;
    }
}