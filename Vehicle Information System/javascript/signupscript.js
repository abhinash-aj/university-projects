function emp_alertFunction() {
    document.getElementById('alertbox').innerHTML = "Fill In The Details !";
    document.getElementById('alertbox').style.visibility = "visible";
}

function taken_alertFunction() {
    document.getElementById('alertbox').innerHTML = "Username Taken";
    document.getElementById('alertbox').style.visibility = "visible";
}

function success_alertFunction() {
    document.getElementById('alertbox').className = "alert alert-success";
    document.getElementById('alertbox').innerHTML = "Sign Up Scuccess";
    document.getElementById('alertbox').style.visibility = "visible";
}