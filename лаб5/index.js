const buttons = document.querySelectorAll('.btn');
let input = document.querySelector('.input');
buttons.forEach((element) => {
    element.addEventListener('click', event => {
        if (element.value !== 'AC' && element.value !== 'C') {
            if (element.value !== '=') {
                input.value += element.value;
            }
        } else if (element.value === 'C'){
            input.value = input.value.substring(0, input.value.length - 1);
        } 
        else {
            input.value = '';
        }
    });
})