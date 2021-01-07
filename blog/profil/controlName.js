function control() {
    var username = document.forms["registration"]["username"].value;
    if (/\d/.test(username)){
        alert("Jméno nesmí obsahovat čísla");
        return false;
    }
}