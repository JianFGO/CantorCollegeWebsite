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
        return false; 
    }

    setTimeout(function() {
        document.getElementById("registrationForm").reset(); 
        document.getElementById("errorMessages").innerHTML = ""; 

        // Show the success message
        document.getElementById("successMessage").style.display = "block";

        // Hide the success message after 7 seconds 
        setTimeout(function() {
            document.getElementById("successMessage").style.display = "none";
        }, 7000); 
    }, 1000); 

    return false; 
}

function validateEmail(email) {
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

