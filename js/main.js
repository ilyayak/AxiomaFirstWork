document.addEventListener("DOMContentLoaded", function (event) {
    initStepsHandler();
});

function initStepsHandler() {
    const button = document.querySelectorAll(".button__step");
    if (button.length < 1) {
        return;
    }
    console.log(button);
    const buttons = [...button];
    buttons.forEach(function (button) {
        button.addEventListener("click", stepHandler);
    });
}


function stepHandler(event) {
    event.preventDefault();

    const button = event.target;

    let isBlockValid = true;
    if (button.dataset.hasOwnProperty("blockValidate")) {

        const blockValidateSelector = button.dataset["blockValidate"];
        const blockValidate = document.querySelector(blockValidateSelector);
        isBlockValid = validate(blockValidate);
    }

    if (isBlockValid) {
        const blocks = document.querySelectorAll(".block");
        blocks.forEach(function (block) {
            block.classList.add("hidden");
        });

        const blockTarget = document.querySelector(button.dataset["blockTarget"]);
        if (button.dataset["blockValidate"] ==="#block__three"){
            const startBtn = document.querySelector(".btnLogin");
            startBtn.style.display = "block";
        }
        blockTarget.classList.remove("hidden");
    }
}

function validate(block) {
    let isValid = true;

    const input = block.querySelectorAll("[data-required='Y']");
    const inputs = [...input];
    inputs.forEach(function (input) {
        input.classList.remove("error");
        if (input.value.trim().length === 0) {
            input.classList.add("error");
            isValid = false;
        }
    });
    return isValid;
}

// const btnStart = document.querySelector(dataset"block")



console.log(button.dataset);
