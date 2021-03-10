console.log('toto');
var inputs = document.getElementsByTagName("input");

for (let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener("input", function (event) {
        updateValidity(event.target);
    });
}

function updateValidity(input) {
    isValid = validateInput(input);
    impactValidity(input, isValid);
    checkAllValidity();
}

function validateInput(input) {
    isValid = input.checkValidity();
    if (!isValid && input.value == "" && input.required) {
        isValid = 0;
    }
    return isValid;
}

function impactValidity(input, isValid) {

    var message = input.parentNode.getElementsByClassName("message")[0];
    message.classList.add("visible");
    image = input.parentNode.getElementsByTagName("i")[1];

    switch (isValid) {
        case true:
            message.innerHTML = "Champ valide.";
            input.style.borderBottomColor = "rgb(50,200,50)";
            image.classList = "far fa-check-circle fa-2x vert";
            image.style.display = "block";
            break;
        case 0:
            message.innerHTML = "Champ requis!";
            image.style.display = "none";
            break;
        case false:
            message.innerHTML = "Format invalide!";
            input.style.borderBottomColor = "rgb(200,50,50)";
            image.classList = "far fa-times-circle fa-2x rouge";
            image.style.display = "block";
            break;
        default:
            break;
    }
}
