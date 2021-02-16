/*
fonction basique pour afficher un texte
*/
function creerToto(nom) {
    var obj = {};
    obj.nom = nom;
    obj.salutation = function () {
        console.log('Salut ! Je m\'appelle ' + this.nom + '.');
    };
    return obj;
}

/*
meme fonction que juste avant mais en etant plus proche de la POO en js
*/

function Personne(nom) {
    this.nom = nom;
    this.salutation = function() {
      console.log('Bonjour ! Je m\'appelle ' + this.nom + '.');
    };
  }

function creerImage(url) {
    var img = {};
    img.lien = url;
    img.affiche = function () {
        var body= document.querySelector('body');
        var block = document.createElement('div');
        block.style.display = "none";
        var image = document.createElement('img');
        body.appendChild(block);
        image.src = this.lien;
        block.appendChild(image);
    };
    return img;
}

function creerImage2(url) {
    this.lien = url;
    this.image = document.createElement('img');
    this.affiche = function () {
        var body= document.querySelector('.cache');
        body.style.display = "none"; 
        this.image.src = this.lien;
        body.appendChild(this.image);
       
    };
 return this;
}

// var toto = creerToto('toto');
// toto.nom;
// toto.salutation();

// var test = creerImage('joueur.png');
// var joueur = test.affiche();


// var personne1 = new Personne('toto');
// var personne2 = new Personne('tutu');

// personne1.salutation();
// personne2.salutation();

var image2 = new creerImage2('joueur.png');
var tata = image2.affiche();

var canvas = document.querySelector('#canva');
var ctx = canvas.getContext("2d");
ctx.drawImage(image2.image, 400, 200, 100, 100);

