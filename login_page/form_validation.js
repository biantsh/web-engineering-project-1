const userName = document.getElementById('userName');
const userPassword = document.getElementById('userPassword')
const form = document.getElementById('login-form')
const errorElement = document.getElementById('errorMessage')

// Prevent form from submitting if errors are present
form.addEventListener('submit', (e) => {
    let messages = [];

    // Username validation
    if (userName.value.length < 6) {
        messages.push('Username must be 6 characters of longer');
    }
    else if (!/^[A-Za-z0-9-]*$/.test(userName.value)) {
        messages.push('Username must only contains letters, numbers, and \'-\'')
    }

    // Password validation
    if (userPassword.value.length < 6) {
        messages.push('Password must be 6 characters or longer');
    }
    else if (!/[0-9]/.test(userPassword.value) || /^[A-Za-z0-9]*$/.test(userPassword.value)) {
        messages.push('Password must contain at least one number and one special character');
    }
    else if (document.getElementById('login-signup-label').innerHTML === 'Sign up') {
        const userConfirmPassword = document.getElementById('confirmPasswordInput');
    
        if (userPassword.value !== userConfirmPassword.value) {
            messages.push('Fields \'Password\' and \'Confirm Password\' don\'t match');
        }
    }

    // Error message
    if (messages.length > 0) {
        errorMessage = "Please fix the mistake(s) below and re-submit:\n"
            + messages.join(',\n');

        e.preventDefault();
        errorElement.innerText = errorMessage;
    }
})
