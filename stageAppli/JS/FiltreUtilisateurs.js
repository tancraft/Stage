var tab = document.querySelectorAll(".role");
var admin = document.querySelector("#admin");
var rir = document.querySelector("#rir");
var form = document.querySelector("#form");
var stag = document.querySelector("#stag");
var tous = document.querySelector("#tous");

admin.addEventListener("click", function () { Filtre("Administrateur") });
rir.addEventListener("click", function () { Filtre("RIR") });
form.addEventListener("click", function () { Filtre("Formateur référent", "Formateur suppleant") });
stag.addEventListener("click", function () { Filtre("Stagiaire") });
tous.addEventListener("click", Tous);

