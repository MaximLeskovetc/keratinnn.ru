'use strict';

const modal = document.querySelector('#modal');
const closeBtn = modal.querySelector('.close');
const btnList = document.querySelectorAll('#addModal');

closeBtn.addEventListener('click', () => modal.classList.add('hidden'));
btnList.forEach(item => {
    console.log(item);
    item.addEventListener('click', () => modal.classList.remove('hidden'))
});