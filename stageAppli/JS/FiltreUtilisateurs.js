var role=document.getElementsByClassName("role");
var admin=document.getElementById("admin");
var form=document.getElementById("form");
var stag=document.getElementById("stag");
var tous=document.getElementById("tous");

admin.addEventListener("click",Administration)
form.addEventListener("click",Formateur)
stag.addEventListener("click",Stagiaire)
tous.addEventListener("click",Tous)

function Formateur()
{reset()
    for (let i = 0; i < role.length; i++) {
        if (role[i].textContent!="Formateur référent") {
            role[i].parentNode.parentNode.style.display="none"
        }
    }
}
function Administration()
{reset()
    for (let i = 0; i < role.length; i++) {
        if (role[i].textContent!="Administrateur") {
            role[i].parentNode.parentNode.style.display="none"
        }
    }
}
function Stagiaire()
{reset()
    for (let i = 0; i < role.length; i++) {
        if (role[i].textContent!="Stagiaire") {
            role[i].parentNode.parentNode.style.display="none"
        }
    }
}
function Tous()
{
    for (let i = 0; i < role.length; i++) {
            role[i].parentNode.parentNode.style.display="flex"
    }
}
function reset()
{
    for (let i = 0; i < role.length; i++) {
            role[i].parentNode.parentNode.style.display="flex" 
    }
}