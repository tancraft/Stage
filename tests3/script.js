window.onload = initGame;


function initGame(){
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
    
    var image2 = new creerImage2('joueur.png');
    image2.affiche();
    
    var canvas = document.querySelector('#canva');
    var ctx = canvas.getContext("2d");
    ctx.drawImage(image2.image, 400, 200, 100, 100);
}