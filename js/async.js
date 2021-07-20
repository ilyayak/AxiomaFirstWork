const loadButton = document.querySelector("#loadButton");
const result = document.querySelector('#result');


//
//
// function login(event, sender) {
//     event.preventDefault();
//     const Login = sender.querySelector("#login")
//     const xhr = new XMLHttpRequest();
//
//     xhr.open('POST', 'index.php');
//     xhr.responseType = "document";
//     xhr.send();
//
// };


//
// loadButton.addEventListener('click', (event) => {
//     event.preventDefault();
//     async function loadUsers(){
//         let response = await fetch("form.php");
//
//         if (response.ok) { // если HTTP-статус в диапазоне 200-299
//             // получаем тело ответа (см. про этот метод ниже)
//             let json = await response.json();
//         } else {
//             alert("Ошибка HTTP: " + response.status);
//         }
//     }
//
// });