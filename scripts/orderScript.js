
// When form is submitted by the submit button it runs validate()
document.getElementById("order-form").onsubmit = validate;

// Validates all required and if not valid shows errors
function validate() {
    // Are all required pieces valid allowing it to be sent.
    var send = true;

    // Clears all error messages
    var errors = document.getElementsByClassName("err");
    for (var i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    // Checks for first name
    var name = document.getElementById("name").value;
    if (name === "") {
        var errName = document.getElementById("err-name");
        errName.style.visibility = "visible";
        send = false;
    }
}