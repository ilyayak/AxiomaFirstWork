const loadButton = document.querySelector("#loadButton");
const result = document.querySelector('#result');

loadButton.addEventListener('click', () => {
    event.preventDefault();
    const xhr = new XMLHttpRequest();

    const load = document.createElement('li');
    xhr.open('POST', 'filter.php');
    xhr.send();
    xhr.addEventListener('load', () => {
        if (xhr.status >= 400) {
            console.log('Что-то пошло не так');
        } else {
            console.log(xhr.responseText);
            result.innerText = xhr.responseText;
        }
    });
    result.appendChild(load);
});