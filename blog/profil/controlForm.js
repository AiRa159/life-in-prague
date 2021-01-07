function control() {
    var username = document.forms["registration"]["username"].value;
    var reg = new RegExp("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$")
    // if (/\d/.test(username)){
    //     alert("Jméno nesmí obsahovat čísla");
    //     return false;
    // }
    if (/\p{L}/.test(username)){
        alert("Jméno nesmí obsahovat čísla");
        return false;
    }
}