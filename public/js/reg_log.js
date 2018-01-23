const login_register_form = document.querySelector('.login-register-form');
const login_register_form_input = login_register_form.querySelectorAll('input');

for (let input of login_register_form_input) {
    input.addEventListener('focus', function (event) {
        event.target.parentNode.querySelector('p').classList.remove('label-hidden');
        this.placeholder = '';
    });
    input.addEventListener('blur', function (event) {
        if (input.value.length === 0) {
            event.target.parentNode.querySelector('p').classList.add('label-hidden');
            this.placeholder = event.target.parentNode.querySelector('p').innerText;
        }
    });
}
