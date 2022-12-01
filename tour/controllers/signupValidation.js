const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', (e) =>{
    let messages = []
    if (username.value === '' || username.value == null){
        messages.push('username must be required')
    }
    if (emailValue === '') {
        messages.push('Email is required');
    } else if (!isValidEmail(emailValue)) {
        messages.push('Provide a valid email address');
    }else {
        setSuccess(password2);
    }
    if (password.value.length <= 8){
        messages.push('password must be longer than 8 charecters')
    }

    if (password.value.length >=10){
        messages.push('password must be less than 10 charecters')
    }
    if (password.value === 'password'){
        messages.push('password can not be password')
    }
    if (password2.Value === '') {
        messages.push('Please confirm your password');
    } else if (password2.Value !== password.Value) {
        messages.push("Passwords doesn't match");
    } else {
        setSuccess(password2);
    }
    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }


})