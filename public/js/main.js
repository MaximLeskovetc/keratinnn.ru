'use strict';

const modal = document.querySelector('#modal');
const closeBtn = modal.querySelector('.close');
const btnList = document.querySelectorAll('#addModal');

closeBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
});

btnList.forEach(item => {
    item.addEventListener('click', () => {
        let top = window.pageYOffset + 100;
        modal.classList.remove('hidden');
        modal.style.top = top + 'px';
    })
});