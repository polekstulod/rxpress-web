
const minus = document.querySelector('.quantity-minus');
const plus = document.querySelector('.quantity-plus');
const input = document.querySelector('.quantity-input');

minus.addEventListener('click', (e) => {
    e.preventDefault();
    var value = input.value;
    if (value > 1) {
        value--;
    }
    input.value = value;
});

plus.addEventListener('click', (e) => {
    e.preventDefault();
    var value = input.value;
    value++;
    input.value = value;
});
