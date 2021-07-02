let block1 = document.querySelector(".block__one");
let block2 = document.querySelector(".block__two");
let block3 = document.querySelector(".block__three");
let block4 = document.querySelector(".block__four");



let buttonf1 = document.querySelector(".buttonf__one");
buttonf1.addEventListener("click",function (){
    event.preventDefault();
    block1.style.display = "none";
    block2.style.display = "block";
});




let buttonb2 = document.querySelector(".buttonb__two");
buttonb2.addEventListener("click",function (){
    event.preventDefault();
    block1.style.display = "block";
    block2.style.display = "none";
});
let buttonf2 = document.querySelector(".buttonf__two");
buttonf2.addEventListener("click",function (){
    event.preventDefault();
    block2.style.display = "none";
    block3.style.display = "block";
});


let buttonb3 = document.querySelector(".buttonb__three");
buttonb3.addEventListener("click",function (){
    event.preventDefault();
    block2.style.display = "block";
    block3.style.display = "none";
});
let buttonf3 = document.querySelector(".buttonf__three");
buttonf3.addEventListener("click",function (){
    event.preventDefault();
    block3.style.display = "none";
    block4.style.display = "block";
    const input = document.querySelector(".btnLogin");
    input.style.display = "block";
});




let buttonb4 = document.querySelector(".buttonb__four");
buttonb4.addEventListener("click",function (){
    event.preventDefault();
    block3.style.display = "block";
    block4.style.display = "none";
});
let buttonf4 = document.querySelector(".button__four");
buttonf4.addEventListener("click",function (){
    event.preventDefault();
});





