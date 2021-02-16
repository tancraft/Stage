window.addEventListener('load', function () {

    initGame()

});

function initGame() {
    function checkImage(imageSrc, good, bad) {
        var img = new Image();
        img.onload = good; 
        img.onerror = bad;
        img.src = imageSrc;
    }

    function creerImage(url) {
        this.lien = url;
        this.image = document.createElement('img');
        checkImage(this.lien, function(){ alert("good"); }, function(){ alert("bad"); } );

     return this.image;
    }

    var image2 = new creerImage('joueur.png');
    var canvas = document.querySelector('#canva');
var ctx = canvas.getContext("2d");
ctx.drawImage(image2.image, 400, 200, 100, 100);

}



