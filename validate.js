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
    // Here, you can include further actions or AJAX submission if needed

    // For demonstration, showing a success message after 1 second (simulated delay)
    setTimeout(function() {
        document.getElementById("registrationForm").reset(); // Reset the form fields
        document.getElementById("errorMessages").innerHTML = ""; // Clear any error messages

        // Show the success message
        document.getElementById("successMessage").style.display = "block";

        // Hide the success message after 5 seconds (adjustable duration)
        setTimeout(function() {
            document.getElementById("successMessage").style.display = "none";
        }, 7000); 
    }, 1000); // Simulating a delay of 1 second before showing success message

    return false; // Prevent actual form submission for this example
}

function validateEmail(email) {
    // Basic email validation using a regular expression
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

