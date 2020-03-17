let elements = document.querySelectorAll('.switch-form');
elements.forEach((el) => {
    el.addEventListener('click', () => {
        document.querySelector('#form-log').classList.toggle('none');
        document.querySelector('#form-register').classList.toggle('none');
    })
})