
const signup_signin = document.getElementById("Com-signup-signin-btn")
const signin_signup = document.getElementById("Com-signin-signup-btn")

const signup_form = document.getElementById("Com-signup")
const signin_form = document.getElementById("Com-signin")


signup_signin.addEventListener('click',()=>{
    signup_form.classList.remove("show")
    signup_form.classList.add("hide")   
    
    signin_form.classList.add("show")
    signin_form.classList.remove("hide")
    
});

signin_signup.addEventListener('click',()=>{
    signup_form.classList.add("show")
    signup_form.classList.remove("hide")

    signin_form.classList.remove("show")
    signin_form.classList.add("hide")
    
});
