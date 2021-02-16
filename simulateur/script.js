var canvas, ctx, image, image2;

window.addEventListener('load', function () {
    canvas = document.querySelector("#canvas");
    ctx = canvas.getContext("2d");
    image = document.querySelector('#joueur');
    image2 = document.querySelector('#charset');
});


/*
permet de dessiner un carre/rectangle selon les dimension dans le filRect(positionX, positionY, largeur, hauteur)
les parenthese autour de cette fonction indique qu elle se charge automatiquement sans appel 
*/
function carre() {
    ctx.fillStyle = "pink";
    ctx.fillRect(20, 20, 50, 50);
};

/*
permet de dessiner un rond selon les dimension dans le arc(positionX, positionY, rayon, point de depart,longuer du tracer, sens de dessin)
beginPath() indique que l on commence a tracer
fill() que l on arrete de tracer
*/
function cercle() {
    ctx.fillStyle = "red";
    ctx.beginPath();
    ctx.arc(100, 100, 25, 0, Math.PI * 2, false);
    ctx.fill();
}

/*
permet de dessiner une image il faut que l image soit dans le html du coup j ai placer en hidden la div qui la contient
drawImage(source de l image, positionX, positionY, largeur, hauteur)
*/

function dessineImage() {
    ctx.drawImage(image, 400, 200, 100, 100);
    console.log(image);
}

function animeImage() {

}

// quand le script sera complet je pense qu il faudra voir avec une fonction window.onload = maFonction;
/*
cette instruction permet de recuperer la taille du document je garde de coter en cas d adaptation responsive voir si utilisable ou faisable car la balise canvas demande des valeurs exacte en px dans le html donc construire la fenetre en fonction de sa a voir et je pense pas que l on change pas de taille tout le temps en jouant a un jeu sur n importe quel support
 */

//   console.log(document.body.clientWidth + "x" + document.body.clientHeight);

/*
cette instruction permet de recuperer la taille de l ecran je garde de coter en cas d adaptation responsive voir si utilisable ou faisable car la balise canvas demande des valeurs exacte en px dans le html donc construire la fenetre en fonction de sa a voir et je pense pas que l on change pas de taille tout le temps en jouant a un jeu sur n importe quel support
 */

// console.log(screen.width + "x" + screen.height);