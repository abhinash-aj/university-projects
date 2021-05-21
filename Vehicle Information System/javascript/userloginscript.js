function alert_empty() {
    document.getElementById('alertbox').innerHTML = "Fill In The Details !";
    document.getElementById('alertbox').style.visibility = "visible";
}

function alert_noexist() {
    document.getElementById('alertbox').innerHTML = "Username Doesnt Exist";
    document.getElementById('alertbox').style.visibility = "visible";
}

function alert_wrongpass() {
    document.getElementById('alertbox').innerHTML = "Wrong Password";
    document.getElementById('alertbox').style.visibility = "visible";
}