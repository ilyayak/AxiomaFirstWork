const loadButton = document.querySelector("#loadButton");
const result = document.querySelector('#result');


loadButton.addEventListener('click', () => {
    event.preventDefault();
    const xhr = new XMLHttpRequest();


    xhr.open('POST','index.php');
    xhr.responseType = "document";
    xhr.send();
    xhr.addEventListener('load', () => {
        if (xhr.status >= 400) {
            console.log('Что-то пошло не так');
        } else {
            console.log(xhr.responseText);
            result.innerText = xhr.responseText;
        }
    });

});