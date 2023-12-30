function validateForm() {
    var fullname = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var course = document.getElementById("course").value;
    var errorMessages = "";

    if (fullname === "" || email === "" || course === "") {
        errorMessages += "All fields are required.<br>";
    }

    if (!validateEmail(email)) {
        errorMessages += "Please enter a valid email address.<br>";
    }

    if (errorMessages !== "") {
        document.getElementById("errorMessages").innerHTML = errorMessages;
        return false; // Prevent form submission
    }

    // If validation passes, allow form submission
    return true;
}

function validateEmail(email) {
    // Basic email validation using a regular expression
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}
