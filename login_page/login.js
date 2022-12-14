function toggleLoginSignup() {
    var state = document.getElementById("login-signup-label").innerHTML;
    
    if (state === "Log in") {
        // Change state to "Sign up"
        document.getElementById("login-signup-label").innerHTML = "Sign up";
        document.getElementById("login-signup-button").innerHTML = "Log in";

        // Create extra elements for confirming password.
        let confirmPasswordLabel = document.createElement("label");
        confirmPasswordLabel.innerHTML = "Confirm Password";
        confirmPasswordLabel.id = "confirmPasswordLabel";
        
        let confirmPasswordInput = document.createElement("input")
        confirmPasswordInput.type = "password";
        confirmPasswordInput.id = "confirmPasswordInput";

        // Add the elements to the document.
        document.getElementById("login-form").appendChild(confirmPasswordLabel);
        document.getElementById("login-form").appendChild(confirmPasswordInput);
    } 
    
    else {
        // Change state to "Log in".
        document.getElementById("login-signup-label").innerHTML = "Log in";
        document.getElementById("login-signup-button").innerHTML = "Sign up";

        // Remove extra elements for confirming password.
        document.getElementById("confirmPasswordLabel").remove();
        document.getElementById("confirmPasswordInput").remove();
    }
}