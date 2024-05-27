const signUpForm = document.getElementById('sign-up');
const signInForm = document.getElementById('sign-in');
const signUpBtn = document.getElementById('sign-up-btn');
const signInBtn = document.getElementById('sign-in-btn');

signUpBtn.addEventListener('click', ()=> {
    signInForm.classList.add('hidden');
    signUpForm.classList.remove('hidden');
})

signInBtn.addEventListener('click', ()=> {
    signInForm.classList.remove('hidden');
    signUpForm.classList.add('hidden');
})