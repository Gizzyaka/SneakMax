// FAQ section
let questions = document.querySelectorAll('.faq__question');
questions.forEach(function (question) {
    question.addEventListener('click', () => {
        let answer = question.nextElementSibling;
        answer.classList.toggle('faq__answer--active');
        question.classList.toggle('faq__question--active');
    })
});

// Burger
let burger = document.querySelector('.header__burger');
burger.addEventListener('click', () => {
    document.body.classList.toggle('lock');
    let navbar = document.querySelector('.header__navbar');
    navbar.classList.toggle('active');
    burger.classList.toggle('active');
});

// Filter
let filterShow = document.querySelector('.catalog__filter-show');
filterShow.addEventListener('click', () => {
    document.body.classList.toggle('lock');
    let filter = document.querySelector('.catalog__filter');
    filter.classList.toggle('active');
    filterShow.classList.toggle('active');
});

let buttonsCancel = document.querySelectorAll('.catalog__filter-button');
buttonsCancel.forEach(function (buttonCancel) {
    buttonCancel.addEventListener('click', () => {
        let filter = document.querySelector('.catalog__filter');
        filter.classList.remove('active');
        filterShow.classList.remove('active');
        document.body.classList.remove('lock');
    })
}) 